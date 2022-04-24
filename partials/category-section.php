<?php 
    $results = new API();

    $categoryData = $results->category_data();?>
    
        <select class="categorySelect">
            <?php
            foreach($categoryData as $category){ ?>
                <option style="color: white" value="<?php echo $category['name']?>"><?php echo ucFirst($category['name']) ?></li>
            <?php } ?>
        </select> 
    
    
    <div class="categorySlider">
                
    </div>
    