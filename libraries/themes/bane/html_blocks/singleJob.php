<?php

$eName = $_REQUEST['employName'];
$eEmail = $_REQUEST['employEmail'];
$eAddress = $_REQUEST['employAddress'];
$eState = $_REQUEST['employState'];
$eCity = $_REQUEST['employCity'];
$eZip = $_REQUEST['employZip'];
$ePhone = $_REQUEST['employPhone'];
$eRes = $_FILES['file']['name'];
$eComment = $_REQUEST['employComment'];
$eJob = $_REQUEST['employJob'];
$eFac = $_REQUEST["eFac"];
$response = $_REQUEST["g-recaptcha-response"];
    
require_once 'includes/PHPMailer/PHPMailerAutoload.php';
require_once 'includes/email/employMail.php';
global $captcha6;

?>
<hr>
<p>
    <?php echo '<b>'.$facility.'</b> - '.$reg; ?>
</p>

<br/>

<p>
    <?php echo $script; ?>
</p>
<br>

<form method="post" id="schedule3" action="" style="text-align:left;width:80%;" enctype="multipart/form-data">

    <input type="hidden" name="op" value="">
    
    <input type="hidden" name="eFac" value="<?php echo $facility; ?>">
    
    <div class="form-group">
        <label>Job Name</label>
        <input name="employJob" class="form-control" id="" readonly value="<?php echo $job; ?>" />
    </div>

    <div class="form-group">
        <label>Full Name</label>
        <input name="employName" type="text" required class="form-control" id="employName" />
    </div>

    <div class="form-group">
        <label>Email</label>
        <input name="employEmail" type="email" required class="form-control" id="employEmail" />
    </div>
    
    <div class="form-group">
        <label>Address</label>
        <input name="employAddress" type="text" required class="form-control" id="employAddress" />
    </div>
    
    <div id="noShow" style="display:none;">
        <div class="form-group">
            <label>City</label>
            <input name="employCity" type="text" required class="form-control" id="employCity" />
        </div>
        
        <div class="form-group">
            <label>State</label>
            <input name="employState" type="text" required class="form-control" id="employState" />
        </div>
        
    </div>    
    
    <div class="form-group">
        <label>Zip</label>
        <input name="employZip" type="text" required class="form-control" id="employZip" />
    </div>

    <div class="form-group">
        <label>Phone number</label>
        <input name="employPhone" type="text" required class="form-control" id="employPhone" />
    </div>
    
    <div class="form-group">
        <label for="file">Resume Upload</label>
        <input type="file" name="file" id="file">
        <input type="hidden" name="album" id="album" value="resume">
        <p class="help-block">Excepts .doc, .pdf, .xls and jpgs. <br><i>(Please remove special characters from file name.)</i></p>
    </div>

    <div class="form-group">
        <label>Comment</label>
        <textarea name="employComment" rows="10" class="form-control" id="employComment"></textarea>
    </div>

        <div class="clearfix"></div>

            <div id="cap3"></div>

        <div class="clearfix">&nbsp;</div>

    <input class="btn btn-primary" type="submit" name="employForm" value="Submit" />

</form>