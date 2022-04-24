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
                <label for="limit">Number of GIFs to Load:</label>
                <input type="number" min="1" max="1000" name="limit" />
            </div>
            <div class="formElementContainer">
                <label for="lang">Language:</label>
                <select name="lang">
                    <option value="en"> English </option>                  
                    <option value="es">Spanish</option>
                    <option value="pt">Portuguese</option>
                    <option value="id">Indonesian</option>
                    <option value="fr">French</option>
                    <option value="ar">Arabic</option>
                    <option value="tr">Turkish</option>
                    <option value="th">Thai</option>
                    <option value="vi">Vietnamese</option>
                    <option value="de">German</option>
                    <option value="it">Italian</option>
                    <option value="ja">Japanese</option>
                    <option value="zh-CN">Chinese Simplified</option>
                    <option value="zh-TW">Chinese Traditional</option>
                    <option value="ru">Russian</option>
                    <option value="ko">Korean</option>
                    <option value="pl">Polish</option>
                    <option value="nl">Dutch</option>
                    <option value="ro">Romanian</option>
                    <option value="hu">Hungarian</option>
                    <option value="sv">Swedish</option>
                    <option value="cs">Czech</option>
                    <option value="hi">Hindi</option>
                    <option value="bn">Bengali</option>
                    <option value="da">Danish</option>
                    <option value="fa">Farsi</option>
                    <option value="tl">Filipino</option>
                    <option value="fi">Finnish</option>
                    <option value="he">Hebrew</option>
                    <option value="ms">Malay</option>
                    <option value="no">Norwegian</option>
                    <option value="uk">Ukrainian</option>
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

