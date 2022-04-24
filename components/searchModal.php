<?php 

function show_results(){

    //Include the API Call Functions to Receive Data
    $results = new Api();  
?>
<!-- Start Modal -->
    <div class="searchModal">
        <div class="modalHeader container">
            <h2>Checkout these <?php echo $_GET['userQuery'] ? ucfirst($_GET['userQuery']) : 'aweseome' ?> GIFs</h2>
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
                $count = 0;
                foreach($gifs as $gif){
                    
                    $gifImages = $gif['images'];
                    echo card($gifImages['fixed_width']['url'], $gif['title'],$gifImages['original']['url'], true);
                    $count++;
                }

            ?>

        </div>
            
        <?php 

            // If API Call doesn't return anything 
            }else{

                echo 'Sorry but your search came up with no results';
                
            }

            ?>
        </div>
    <!-- End Search Modal -->
    </div>

<?php }
