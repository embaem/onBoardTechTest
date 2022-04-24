<?php

$results = new Api();?>


<section class="trendingSection">
    <div class="container">
    <?php 
    // If the API Call returns data
    if($results->trending_data()){

        $gifs = $results->trending_data();

        ?>
                <h2>Take A Look at What's Trending</h3>
                <div class="trendingSlider">
        
                    <?php
                        foreach($gifs as $gif){
                            
                            $gifImages = $gif['images'];
                            echo card($gifImages['fixed_height']['webp'], $gif['title'], $gifImages['original']['webp'], true);
                            
                        }
        
                    ?>
        
                </div>
        
        <?php 
        
            }

            ?>
            </div>
</section>
        
        