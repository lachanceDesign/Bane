<!-- Modal -->
<div style="padding:40px;" class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title" id="myModalLabel">Insert New Job</h4>
            </div>
            <div class="modal-body">

                <form class="form" method="post" style="">

                    <input type="hidden" name="id" value="">

                    <div class="input-field col s6">
                        
                        <br>
                        <input class="form-control col-md-12" required type="text" name="job" value="">
                        <label>Job Name:</label>
                        <br>
                        <br>
                    </div>

                    <div class="input-field col s6">
                        
                        <br>
                        <select required class="form-control col-md-12" type="text" name="facility">
                            <option value="Please choose a selection." active>Select</option>

                            <?php

                            $fac_Loc2 = array(
                                'Abbott House',
                                'Devereux House',
                                'Rosewood',
                                'Bay Path',
                                'Colonial',
                                'Hancock Park',
                                'Harbor House',
                                'John Scott-House',
                                'Mayflower Place',
                                'The Bostonian',
                                'Brighton House',
                                'Park Place',
                                'Craneville Place',
                                'Springside',
                                'Sugar Hill',
                                'BaneCare Corporate(North)',
                                'BaneCare Corporate(South)',
                            );     

                            foreach($fac_Loc2 as $facs2){
                                
                                echo '<option value="'.$facs2.'"'.$act.'>'.$facs2.'</option>';

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

                            echo '<option value="'.$region.'"'.$act2.'>'.$region.'</option>';
                                
                            };
                            ?>

                        </select>
                        <label>Region</label>
                        <br>
                        <br>
                    </div>
                    
                    <div style="margin-bottom:10px;" class="input-field col s6">
                        
                        <br>
                        <input type="date" class="datepicker" name="date" required placeholder="<?php echo date('d/m/Y'); ?>" value="" />
                        <label>Date:</label>
                        <br>
                        <br>
                    </div>

                    <div class="input-field col s12">
                        
                        <br>
                        <textarea id"texts" class="materialize-textarea" length="255" rows="5" name="script" value=""></textarea>
                        <label for="texts">Job Description:</label>
                        <br>
                        <br>
                    </div>

                    <span><br></span>

                    <div style="margin-bottom:20px;" class="input-field col s12">
                        <input type="submit" name="inserted" class="btn btn-default" value="Submit" />
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!--Close Modal-->