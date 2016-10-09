<!-- Open Page Update -->

<form class="form" method="post">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="input-field col s6">
        
        <br>
        <input id="names" class="form-control" required type="text" name="name" value="<?php echo $title; ?>">
        <label for="names">Page Name:</label>
        <br>
        <br>
    </div>

    <div class="input-field col s6">
        
        <br>
        <select id="pgs" class="form-control" type="text" name="editable">
            <option value="Please choose a selection.">Select</option>
            <option value="false" <?php if($edit=='false' ){ echo 'selected="selected"'; }else{ echo ''; }; ?>>No</option>
            <option value="true" <?php if($edit=='true' ){ echo 'selected="selected"'; }else{ echo ''; }; ?>>Yes</option>
        </select>
        <label for="pgs">Page Editable <span class="text-muted">(Yes or No)</span>?</label>
        <br>
        <br>
    </div>

    <div class="input-field col s12">

        <?php 

        if($edit == 'false'){

            echo '<br><textarea id="htm" class="materialize-textarea col s12" id="upDate" rows="5" name="html" value="'.htmlspecialchars($html).'">'.htmlspecialchars($html).'</textarea><br><br>';
        }else{ echo ''; };

        ?>
        <label for="htm">Html:</label>
    </div>

    <div class="input-field col s6">
        <br>
        <input id="pages" class="form-control col-md-12" requires type="text" name="title" value="<?php echo $heading; ?>">
        <label for="pages">Page Title:</label>
        <br>
        <br>
    </div>

    <div class="input-field col s6">
        
        <br>
        <input id="key" class="form-control col-md-12" requires type="text" name="key" value="<?php echo $keywords; ?>">
        <label for="key">Page Key Words:</label>
        <br>
        <br>
    </div>

    <div style="margin-bottom:10px;" class="input-field col s12">
        
        <br>
        <textarea id="script" class="form-control materialize-textarea" rows="5" length="120" name="script" value="<?php echo $script; ?>"><?php echo $script; ?></textarea>
        <label for="script">Page Description:</label>
        <br>
        <br>
    </div>

    <span><br><br></span>

    <input type="submit" name="edited" class="btn blue" value="Edit" />

</form>

<!-- Close Page Update -->