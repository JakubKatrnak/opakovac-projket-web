
<div class="container"> 
    <h3 id="menu"><?php echo $error ?></h3>
    <form method="post" action='<?= base_url("uloz_knihu"); ?>'>
    <div class="form-group">
        <label for="exampleInputEmail1">Název Knihy</label>
        <input type="text" class="form-control" id="bookName" name="nazev_knihy" value="<?php echo set_value('nazev_knihy'); ?>" placeholder="Proměny">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Název Autora</label>
        <input type="text" class="form-control" id="authorName" name="autor" value="<?php echo set_value('autor'); ?>" placeholder="Publius Ovidius Naso">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Přebal</label>
        <input type="text" class="form-control" id="cover" name="prebal" value="<?php echo set_value('prebal'); ?>" placeholder="https://www.databazeknih.cz/img/books/13_/13323/bmid_promeny-Rrz-13323.jpg">
    </div>
    <div class="form-group">   
        <label for="exampleInputPassword1">Období</label>
        <select name="obdobi_idobdobi"  class="form-control">
            <option value="1">Světová/česká - 18. stol.</option>
            <option value="2">Světová/česká - 19. stol.</option>
            <option value="3">Světová - 20./21. stol.</option>
            <option value="4">Česká - 20./21. stol.</option>
        </select>
    </div>
    <button type="submit"  name='submit' value='Submit' class="btn btn-primary">Submit</button>
    </form>
</div>