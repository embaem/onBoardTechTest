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
                <div class="trendingSlider" data-slick='{"slidesToShow":3,"slidesToScroll":3, "arrows":true, "dots":true}'>
        
                    <?php
                        $count = 0;
                        foreach($gifs as $gif){
                            
                            $gifImages = $gif['images'];
                            echo card($gifImages['fixed_height']['url'], $gif['title'], $gifImages['original']['url'], true);
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
</section>
        
        