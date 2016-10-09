<?php
global $sName;	
global $dbName;	
$method = 'inserted';
$location = 'careers';
$query = false;

if(isset($_POST[''.$method.''])){

    if(isset($_POST['id'])){

        $id = addslashes($_POST['id']);
        $job = addslashes($_POST['job']);
        $facility = addslashes($_POST['facility']);
        $script = addslashes($_POST['script']);
        $date = addslashes($_POST['date']);
        $reg = addslashes($_POST['reg']);


        $query = 'INSERT INTO `'.$dbName.'`.`'.$location.'` (`Id`, `Job`, `Facility`, `Region`, `Description`, `Date`) VALUES (NULL, \''.$job.'\', \''.$facility.'\', \''.$reg.'\', \''.$script.'\', \''.$date.'\');';

    }

}

$addJob = new update();
$addJob->uped($location,$query,$method);
?>

<button class="waves-effect waves-light btn modal-trigger blue" href="#addPage">Add new job post</button>
<br><br>
<?php tpAdmin('jobNew'); ?>

<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#all">All Locations</a></li>
            <li class="tab col s3"><a href="#north">BaneNorth</a></li>
            <li class="tab col s3"><a href="#south">BaneSouth</a></li>
            <li class="tab col s3"><a href="#metro">BaneMetro</a></li>
            <li class="tab col s3"><a href="#west">BaneWest</a></li>
        </ul>
    </div>
    
    <div id="north" class="col s12">
    
        <div class="clerfix">&nbsp;</div>
        <strong class="#607d8b blue-grey-text">BaneCare North</strong>

        <div class="table-responsive">

            <table class="responsive-table highlight">

                <thead>

                    <tr class="active" style="color:black;">
                        <th>Posting</th>
                        <th>Job Name</th>
                        <th>Location</th>
                        <th>Region</th>
                        <th>Job Description</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>    

                </thead>

                <tbody>

                    <?php

                    $query = 'SELECT * FROM careers WHERE Region LIKE "BaneNorth" ORDER BY Id DESC';
                    $block = 'jobBlock';
                    $row3 = new admin_model();
                    $row3->query($query,$block);

                    ?>

                </tbody>

            </table>

        </div>

        <div class="clerfix">&nbsp;</div>

    
    </div>
    
    
    <div id="south" class="col s12">
    
        <div class="clerfix">&nbsp;</div>
        <strong class="#607d8b blue-grey-text">BaneCare South</strong>

        <div class="table-responsive">
            

            <table class="responsive-table highlight">

                <thead>

                    <tr class="active" style="color:black;">
                        <th>Posting</th>
                        <th>Job Name</th>
                        <th>Location</th>
                        <th>Region</th>
                        <th>Job Description</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>    

                </thead>

                <tbody>

                    <?php

                    $query = 'SELECT * FROM careers WHERE Region LIKE "BaneSouth" ORDER BY Id DESC';
                    $block = 'jobBlock';
                    $row3 = new admin_model();
                    $row3->query($query,$block);

                    ?>

                </tbody>

            </table>

        </div>

        <div class="clerfix">&nbsp;</div>
        
    </div>
    
    
    <div id="metro" class="col s12">
    
        <div class="clerfix">&nbsp;</div>
        <strong class="#607d8b blue-grey-text">BaneCare Metro Boston</strong>

        <div class="table-responsive">


            <table class="responsive-table highlight">

                <thead>

                    <tr class="active" style="color:black;">
                        <th>Posting</th>
                        <th>Job Name</th>
                        <th>Location</th>
                        <th>Region</th>
                        <th>Job Description</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>    

                </thead>

                <tbody>

                    <?php

                    $query = 'SELECT * FROM careers WHERE Region LIKE "BaneMetro" ORDER BY Id DESC';
                    $block = 'jobBlock';
                    $row3 = new admin_model();
                    $row3->query($query,$block);

                    ?>

                </tbody>

            </table>

        </div>

        <div class="clerfix">&nbsp;</div>
    
    </div>
    
    
    <div id="west" class="col s12">
    
        <div class="clerfix">&nbsp;</div>
        <strong class="#607d8b blue-grey-text">BaneCare West</strong>
        
        <div class="table-responsive">


            <table class="responsive-table highlight">

                <thead>

                    <tr class="active" style="color:black;">
                        <th>Posting</th>
                        <th>Job Name</th>
                        <th>Location</th>
                        <th>Region</th>
                        <th>Job Description</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>    

                </thead>

                <tbody>

                    <?php

                    $query = 'SELECT * FROM careers WHERE Region LIKE "BaneWest" ORDER BY Id DESC';
                    $block = 'jobBlock';
                    $row3 = new admin_model();
                    $row3->query($query,$block);

                    ?>

                </tbody>

            </table>

        </div>
        <div class="clerfix">&nbsp;</div>
    
    </div>
    
    <div id="all" class="col s12">

        <div class="clerfix">&nbsp;</div>
        <strong class="#607d8b blue-grey-text">All Locations</strong>

        <div class="table-responsive">

            <table class="responsive-table highlight">

                <thead>

                    <tr class="active" style="color:black;">
                        <th>Posting</th>
                        <th>Job Name</th>
                        <th>Location</th>
                        <th>Region</th>
                        <th>Job Description</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>    

                </thead>

                <tbody>

                    <?php

                    $query = 'SELECT * FROM careers WHERE Region LIKE "All-Locations"';
                    $block = 'jobBlock';
                    $row3 = new admin_model();
                    $row3->query($query,$block);

                    ?>

                </tbody>

            </table>

        </div>

        <div class="clerfix">&nbsp;</div>


    </div>
    
</div>


<?php 

$loaction = 'careers';

//deletes records
$delete = new delete();
$delete->del($location);

?>



