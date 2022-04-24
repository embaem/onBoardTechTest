<section class="searchSection">
    <form id="giphSearch" method="get">
        <fieldset class="userSearch" form="giphSearch" name="search">
            <label for="userQuery" style="display: none">Search:</label>
            <input type="search" name="userQuery" placeholder="Search..." required />
            <input title="Search" type="image" src="<?php echo URL . '/assets/images/searchIcon.svg' ?>" alt="Submit"/>
        </fieldset>
        <div class="advancedButton">Advanced Search <i id="advancedArrow" class="fa-solid fa-chevron-down"></i></div>
        <fieldset class="advancedSearch" style="display: none" form="giphSearch" name="advanced">
            <div class="formElementContainer">
                <label for="limit">Number of Giphs:</label>
                <input type="number" min="1" max="1000" name="limit" />
            </div>
            <div class="formElementContainer">
                <label for="lang">Language:</label>
                <select name="lang">
                    <option value="en"> English </option>
                </select>
            </div>
            <div class="formElementContainer">
                <label for="rating">Rating:</label>
                <select name="rating" >
                    <option value="g">G</option>
                    <option value="pg">PG</option>
                    <option value="pg-13">PG-13</option>
                    <option value="r">R</option>
                </select>
            </div>
        </fieldset>
        
    </form>
</section>
<?php 


if($_GET){
    ?>
    
       <?php echo show_results(); ?>
    
<?php }

