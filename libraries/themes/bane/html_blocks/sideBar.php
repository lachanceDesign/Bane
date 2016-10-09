<?php

$sideNames = $_REQUEST['Name'];
$sideEmail = $_REQUEST['Email'];
$sideAdd = $_REQUEST['Address'];
$sidePhone = $_REQUEST['Phone'];
$sideFac = $_REQUEST['Facility'];
$sideMessage = $_REQUEST['Message'];
$sideForm = $_REQUEST['formed'];
$response = $_REQUEST["g-recaptcha-response"];

require_once 'includes/PHPMailer/PHPMailerAutoload.php';
require_once 'includes/email/sideBarMail.php';

if(title() == 'Leadership'){
    $title = 'Contact Our Leadership Team';
    $form = 'leader';
    
}else{
    $form = 'default';
    $title = 'Brochure Request';
    
}

$tits = title();

function secNav($linked){
     
 echo '
<!--Side Links-->     
<div class="col-md-3 sideNav mob">
<h1>'.$_POST['default'].'</h1>
        <ul>';
     
     foreach($linked as $link => $title){
         
         if(ROOT.$link == links()){
             $active = 'active';
         }else{
             $active = 'inactive';
         }
         
         echo '<li class="'.$active.'"><span style="color:#f18c53;">&#62;&#62; </span><a href="'.ROOT.$link.'">&nbsp;'.$title.'</a></li>';
         
     }
    
    if(title() == 'Leadership'){
        
        echo '</ul>

                    <button class="btn btn-new2" style="background:#72aa5c;padding-top:10px;" data-toggle="modal" data-target="#faciliForm">
                        <span class="pull-left">>> Comments, Questions and <br>Feedback for the Leadership Team</span>
                    </button>

</div>
<!--Close Side Links-->
';
        
    }else{
        
        echo '</ul>

                    <button class="btn btn-new2" data-toggle="modal" data-target="#faciliForm">
                        <span class="pull-left img"><img width="38" height="33" src="http://static.banecare.com/images/brochure.png"></span> 
                        <span class="pull-left">GET A BROCHURE TODAY</span>
                    </button>

</div>
<!--Close Side Links-->
';
        
    };
    
};

echo '
<!--Open Side form-->
            <div class="modal fade" id="faciliForm" tabindex="-1" role="dialog" aria-labelledby="faciliFormLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title fancy" id="Label">'.$title.'</h4>
                  </div>
                  <div class="modal-body">

                      <form method="post" action="" id="schedule">

                      <input type="hidden" name="op" value="'.$title.'" />
                      
                      <input type="hidden" name="formed" value="" />

                          <div class="form-group">
                              <label for="Name">Name</label>
                              <input required class="form-control" name="Name" id="name" />
                          </div>

                          <div class="form-group">
                              <label for="Email">Email</label>
                              <input required class="form-control" name="Email" id="Email" />
                          </div>

                          <div class="form-group">
                              <label for="Address">Address</label>
                              <input required class="form-control" name="Address" id="Address" />
                          </div>

                          <div class="form-group">
                              <label for="Phone">Phone Number</label>
                              <input required class="form-control" name="Phone" id="Phone" />
                          </div>';

if(links() == 'http://www.banecare.com/Contact'){

    echo '
                                                          <div class="form-group">
                                                                  <label for="Facility">Facility</label>
                                                                  <select class="form-control" name="Facility" id="Facility">
                                                                  <option>Select</option>
                                                                  ';

    $fac = array(
        'Abbott House - Lynn, MA',
        'Devereux House - Marblehead, MA',
        'Rosewood - Peabody, MA',
        'Bay Path - Duxbury, MA',
        'Colonial - Weymouth, MA',
        'Hancock Park - Quincy, MA',
        'Harbor House - Hingham, MA',
        'John Scott House - Braintree, MA',
        'Mayflower Place - West Yarmouth, MA',
        'The Bostonian - Dorchester, MA',
        'Brighton House - Brighton, MA',
        'Craneville Place - Dalton, MA',
        'Springside - Pittsfield, MA',
        'Sugar Hill - Dalton, MA',
        'Park Place - Hyde Park, MA'
    );

    foreach($fac as $vals){

        echo '<option value="'.$vals.'">'.$vals.'</option>';
        $i++;
    }


    echo '
                                                                  </select>
                                                              </div>';

}else if(links() == 'http://banecare.com/'.title(2).'-skilled-nursing-home-rehabilitation'||title() == 'programs' || title() == 'leader' || title() == 'tour' || title() == 'contact' || title() == 'images'){

    echo '<div class="form-group">
                                          <label for="Facility">Facility</label>
                                          <input class="form-control" disabled name="Facility" id="Facility" value="'.title(2).'" />
                                      </div>';

}else{

    echo '
                                  <div class="form-group">
                                          <label for="Facility">Facility</label>
                                          <select class="form-control" name="Facility" id="Facility">
                                          <option value="N/A">Select</option>
                                          ';

    $fac = array(
        'Abbott House - Lynn, MA',
        'Devereux House - Marblehead, MA',
        'Rosewood - Peabody, MA',
        'Bay Path - Duxbury, MA',
        'Colonial - Weymouth, MA',
        'Hancock Park - Quincy, MA',
        'Harbor House - Hingham, MA',
        'John Scott House - Braintree, MA',
        'Mayflower Place - West Yarmouth, MA',
        'The Bostonian - Dorchester, MA',
        'Brighton House - Brighton, MA',
        'Craneville Place - Dalton, MA',
        'Springside - Pittsfield, MA',
        'Sugar Hill - Dalton, MA',
        'Park Place - Hyde Park, MA'
    );

    foreach($fac as $vals){

        echo '<option value="'.$vals.'">'.$vals.'</option>';
        $i++;
    }


    echo '
                                          </select>
                                      </div>';

};


echo '<label for="Message">Message</label>
                          <textarea rows="5" class="form-control" name="Message" id="Message"></textarea>
                          <br>

                          '.$cap1.'

                          <br>
                          <input class="btn btn-warning" type="submit" name="'.$form.'" value="Submit" />

                      </form>

                  </div>
                  <div  style="text-align:center;" class="modal-footer">
                      <b>Thank You For Choosing BaneCare</b>
                  </div>
                </div>
              </div>
            </div>
<!--Close Side Form-->

';
