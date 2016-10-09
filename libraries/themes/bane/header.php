<?php

$broNames = $_POST['Name'];
$broEmail = $_POST['Email'];
$broAdd = $_POST['Address'];
$broPhone = $_POST['Phone'];
$broFac = $_POST['Facility'];
$broMessage = $_POST['Message'];
$response = $_POST["g-recaptcha-response"];

require_once 'includes/PHPMailer/PHPMailerAutoload.php';
require_once 'includes/email/broMail.php';

?>
<body>
    
    <!--Google Analytics--> 
    <script src="https://cdn.jsdelivr.net/ga-lite/latest/ga-lite.min.js" defer async></script>
    <script defer>
        var galite = galite || {};
        galite.UA = 'UA-80710986-1'; // Insert your tracking code here
    </script>   
    <!--Close Google Analytics-->   
   
    <span class="top glyphicon glyphicon-arrow-up"></span>
    
    <!--Open Above the fold cont-->
    <div class="above">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-7  pull-right">
                    <button style="background-color:#72aa5c;border-radius:0;" class="btn btn-new mob2" data-toggle="modal" data-target="#brochureForm"><span class="glyphicon glyphicon-edit"></span> GET A BROCHURE TODAY</button>
                </div>    
            </div>
        </div>
    </div>
    
                    <!--Open Side form-->
                    <div class="modal fade" id="brochureForm" tabindex="-1" role="dialog" aria-labelledby="brochureFormLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title fancy" id="myModalLabel">Brochure Request</h4>
                          </div>
                          <div class="modal-body">
                            
                              <form method="post" id="schedule1" action="">
                              
                                  <input type="hidden" name="op" value="" />
                                  
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
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="Facility">Select a facility</label>
                                      <select required name="Facility" id="Facility" class="form-control">
                                          <option value="">Select</option>
                                          <?php 
                                          
                                          $fac = array('Abbott House - Lynn, MA',
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
                                          
                                          ?>
                                      </select>
                                  </div>
                                  
                                  <label for="Message">Message</label>
                                  <textarea rows="5" class="form-control" name="Message" id="Message"></textarea>
                                  <br>
                                  <?php echo $cap2; ?>

                                  <br>
                                  <input class="btn btn-warning" type="submit" name="brochure" value="Submit" />
                              
                              </form>
                              
                          </div>
                          <div  style="text-align:center;" class="modal-footer">
                              <b>Thank You For Choosing BaneCare</b>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Close Side Form-->
    
    <!--Close Above the fold cont-->
    
    <!--Open Top Nav-->
    <div class="top">
    
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="<?php echo ROOT; ?>Home"><img width="180" height="114" src="http://static.banecare.com/images/BaneCareLogos.png" alt="BaneCare A Matter Of Trust"></a>
                </div>
                
                <div class="col-md-8 pull-right mob">
                    <ul>
                        <li><span class="glyphicon glyphicon-home"></span><a href="<?php echo ROOT; ?>"> HOME</a></li>
                        <li><span class="glyphicon glyphicon-duplicate"></span> <a href="<?php echo ROOT; ?>Employment-Opportunities"> CAREERS</a></li>
                        <li><span class="glyphicon glyphicon-download-alt"></span><a href="<?php echo ROOT; ?>Contact"> CONTACT</a></li>
                        
                        
                            <?php
                             global $pages;
                            if(title(2) == $pages[title(2)]['name']){
                                
                                echo '<li><span class="glyphicon glyphicon-phone-alt"></span><a href="tel: '.$pages[title(2)]['phone'].'"> '.$pages[title(2)]['phone'].'</a></li>';
                                
                            }else{
                                //echo '<li><span class="glyphicon glyphicon-phone-alt"></span><a href="tel: 781-474-2263 (BANE)"> 781-474-BANE (2263)</a></li>';
                            }
                            
                            ?>
                        
                        
                    </ul>
                    
                    <div style="position:relative;top:-20px;right:35px;margin-bottom:-10px;" class="pull-right" id="textSize"><strong>Text Size: <span id="smaller"> A</span> <span id="bigger">A</span></strong></div>
                    
                </div>
            </div>
        </div>
    
    </div>
    <!--Close Top Nav-->
    
    <!--Open Nav-->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php active('about-banecare-skilled-nursing-rehabilitation'); ?>">
                        <a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            ABOUT BANECARE <span class="caret"></span></a>
                        
                         <ul class="dropdown-menu">
                             
                             <?php
                             
                                 $page = array(
                                 'about-banecare-skilled-nursing-rehabilitation'=>'About Us',
                                 'banecare-story-skilled-nursing-rehabilitation'=>'The BaneCare Story',
                                 'leadership-team-skilled-nursing-rehabilitation'=>'Meet the Team',
                                 'mission-for-skilled-nursing-rehabilitation'=>'Mission'
                                 );

                                 navi($page);
                             
                             ?>
                             
                        </ul>
                        
                    </li>
                    <li class="<?php active('services-amenities'); ?>">
                        <a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            OUR SERVICES <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                            <?php
                             
                                 $page = array(
                                     'services-amenities'=>'Services & Amenities',
                                     'skilled-nursing-rehabilitation-services'=>'Skilled Nursing',
                                     'short-term-rehabilitation-services'=>'Rehabilitation',
                                     'assisted-living-services'=>'Assisted Living',
                                     'hospice-care'=>'Hospice',
                                     'respite-care'=>'Respite Care',
                                     'adult-day-health'=>'Adult Day Health',
                                     /*'specialty-care'=>'Specialty Care',
                                     'nutritional-services-skilled-nursing'=>'Diet & Nutrition',
                                     'skilled-nursing-assisted-living-amenities'=>'Facility Amenities',
                                     'discharge-planning'=>'Discharge Planning'*/
                                 );

                                 navi($page);
                             
                             ?>
                            
                        </ul>
                    </li>
                    <li><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        NEWS & MEDIA <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                            <?php
                            
                            $page = array(
                                'skilled-nursing-news'=>'News & Media',
                                'skilled-nursing-accreditations'=>'Awards and Accreditations',
                                //'skilled-nursing-community'=>'BaneCare Community'
                            );
                            navi($page)
                            
                            ?>
                            
                        </ul>
                    </li>
                    <li><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        LOCATIONS <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               
                                <?php 
                                
                                        $page = array(
                                         'skilled-nursing-assisted-living-locations-ma'=>'All BaneCare Locations',
                                         'skilled-nursing-assisted-living-north-shore-ma'=>'BaneCare North',
                                         'skilled-nursing-assisted-living-south-shore-ma'=>'BaneCare South',
                                         'skilled-nursing-assisted-living-boston-metro-ma'=>'BaneCare Metro Boston',
                                         'skilled-nursing-assisted-living-western-ma'=>'BaneCare West', 
                                        );
                                    navi($page);

                                ?>
                                
                            </ul>
                    </li>
                    <?php 
                    
                    $page = array(
                            'choosing-a-nursing-home'=>'GETTING STARTED',
                            'skilled-nursing-testimonials'=>'TESTIMONIALS'    
                            );       
                    navi($page)
                                
                    ?>
                </ul>
                
                    <div class="unMob">
                        <hr>
                            <ul>
                                <li><span class="glyphicon glyphicon-phone-alt"></span>
                                    <?php
                                    global $pages;
                                    if(title(2) == $pages[title(2)]['name']){

                                        echo '<a href="tel: '.$pages[title(2)]['phone'].'"> '.$pages[title(2)]['phone'].'</a>';

                                    }else{
                                        echo '<a href="tel: 1-866-747-2263"> 1-866-747-BANE (2263)</a>';
                                    }

                                    ?>
                                </li>
                                <li><span class="glyphicon glyphicon-home"></span><a href="<?php echo ROOT; ?>"> Home</a></li>
                            </ul>
                        <button class="btn btn-new" data-toggle="modal" data-target="#brochureForm"><span class="glyphicon glyphicon-edit"></span> Call Now - Get a Brochure</button>
                    </div>    
                </div>
                
            </div>
    </nav>
    <!--Close Nav-->

<?php tpBlock('slider'); ?>