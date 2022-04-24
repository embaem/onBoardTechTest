<?php 

function show_results(){

    //Include the API Call Functions to Receive Data
    $results = new Api();  
?>
<!-- Start Modal -->
    <div class="searchModal">

        <div class="modalHeader container">
        <h2>
        <?php 
            if($results->search_data()){ ?>    
                
                    Checkout these <?php echo $_GET['userQuery'] ? ucfirst($_GET['userQuery']) : 'aweseome' ?> GIFs
                
            <?php } ?> 
            </h2>
            <span title="Close" class="closeModal"><i class="fa-solid fa-xmark"></i></span>
        </div>

        <div class="modalContent container">
        <?php
            // If the API Call returns data
            if($results->search_data()){

                $gifs = $results->search_data();
        ?>
    
                <div class="searchSlider">

                        <?php
                            foreach($gifs as $gif){
                                
                                $gifImages = $gif['images'];
                                echo card($gifImages['fixed_height']['webp'], $gif['title'],$gifImages['original']['webp'], true);
                            
                            }

                        ?>

                </div>
            
        <?php 

            }else{

                echo '<h2 class="noResults">I\'m afraid your search came up with no results try a more simple search</h2>';
            }

            ?>
        </div>
    <!-- End Search Modal -->
    </div>

<?php }
