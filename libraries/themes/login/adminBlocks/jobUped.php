<form class="form" method="post" style="">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="input-field col s6">

        <br>
        <input class="form-control col-md-12" required type="text" name="job" value="<?php echo $job; ?>">
        <label>Job Name:</label>
        <br>
        <br>
    </div>

    <div class="input-field col s6">

        <br>
        <select required class="form-control col-md-12" type="text" name="facility">
            <option value="Please choose a selection.">Select</option>

            <?php

            $fac_Loc2 = array(
                'Abbott House',
                'Devereux House',
                'Rosewood',
                'Bay Path',
                'Colonial',
                'Hancock Park',
                'Harbor House',
                'John-Scott House',
                'Mayflower Place',
                'The-Bostonian',
                'Brighton House',
                'Park-Place',
                'Craneville Place',
                'Springside',
                'Sugar Hill'
            );     


            foreach($fac_Loc2 as $facs2){
                
                if($facility == $facs2){
                    $active = 'selected ';
                }else{
                    $active = '';
                }
                
                echo '<option '.$active.'value="'.$facs2.'"'.$act.'>'.$facs2.'</option>';

            };

            ?>

        </select>
        <label>Facility</label>
        <br>
        <br>
    </div>

    <div class="input-field col s6">

        <br>
        <select required class="form-control col-md-12" type="text" name="reg">
            <option value="Please choose a selection.">Select</option>

            <?php
            $regions = array(
                'All-Locations','BaneNorth','BaneSouth','BaneMetro','BaneWest'
            );

            foreach($regions as $region){
                
                if($reg == $region){
                    
                    $selected = 'selected ';
                    
                }else{
                    
                    $selected = '';
                    
                }

                echo '<option '.$selected.'value="'.$region.'"'.$act2.'>'.$region.'</option>';

            };
            ?>

        </select>
        <label>Region</label>
        <br>
        <br>
    </div>

    <div style="margin-bottom:10px;" class="input-field col s6">

        <br>
        <input type="date" class="datepicker" name="date" required value="<?php echo $date; ?>" />
        <label>Date:</label>
        <br>
        <br>
    </div>

    <div class="input-field col s12">

        <br>
        <textarea id="texts" class="materialize-textarea" length="255" rows="5" name="script" value="<?php echo strip_tags($script); ?>"><?php echo strip_tags($script); ?></textarea>
        <label for="texts">Job Description:</label>
        <br>
        <br>
    </div>

    <span><br></span>

    <div style="margin-bottom:20px;" class="input-field col s12">
        <input type="submit" name="updated" class="btn blue" value="Submit" />
    </div>

</form>