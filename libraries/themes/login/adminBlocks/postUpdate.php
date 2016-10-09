<!-- Modal -->

<form class="form col s9" method="post" style="">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="input-field">
        
        <br>
        <input class="form-control col-md-12" type="text" name="title" id="title" value="<?php echo $title; ?>">
        <label for="title">Title:</label>
        <br>
        <br>
    </div>

    <div style="margin-bottom:20px;" class="form-group">

        <label>Post:</label>
        <textarea class="form-control col-md-12 ckeditor" rows="5" name="post" value="<?php echo $script; ?>">
            <?php echo $script; ?>
        </textarea>
        

    </div>

    <div class="input-field">
        
        <br>
        <select id="img" class="form-control col-md-12" name="img">
            <option value="">Select</option>
            <?php

            $directory = 'apps/dropzone/upload/Posts';
            $blocks = 'img_select';
            $other = ''.$img.'';
            tpDirect($directory,$blocks,$other);

            ?>
        </select>
        <label for="img">
            <br>Image:
        </label>
        <br>
        <br>
    </div>

    <div class="input-field">

        
        <input type="text" class="form-control" name="cap" id="cap" value="<?php if($imgCap == 'false'){ echo ''; }else{ echo $imgCap; }  ?>" />
        <label for="cap">Image Caption</label>

    </div>

    <div class="input-field">
    
    <br>
        <input id="dates" class="form-control col-md-12 datepicker" type="date" name="date" value="<?php echo(date(" m/d/Y ")); ?>" />
        <label for="dates">Date:</label>
    <br>
    <br>
</div>

    <input type="submit" name="edited" class="btn blue" value="Edit" />

</form>

<div class="input-field col s3">
    <strong>Attached Image</strong>
    <hr>
    <br>
    <img style="width:100%;border:2px solid black;float:right;" src="<?php echo ROOT; ?>apps/dropzone/upload/Posts/<?php if(!empty($img)){echo $img;}else{ echo 'image.png'; } ?>" />
    <br>
    <br>
    <br>

</div>

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<!--Close Modal-->