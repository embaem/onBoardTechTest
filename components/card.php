<?php 

function card($imageUrl, $title, $original, $dark){
    $theme = $dark ? 'cardDark' : 'cardLight';
    ?>
    <div class="card">
        <div class="cardContainer <?php echo $theme ?>">
            <div class="imageContainer">
                
                    <img class="cardImage" data-original="<?php echo $original?>" alt="<?php echo $title ?>" src=" <?php echo $imageUrl ?> "/>
                
            </div>
            <h3 class="cardTitle"><?php echo ucfirst($title) ?></h3>
        </div>
    </div>
<?php
}