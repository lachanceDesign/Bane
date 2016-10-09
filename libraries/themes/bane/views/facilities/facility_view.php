<!--Open Content-->
<div class="cont">

    <div class="container">

        <div class="row">

            <?php 
            
                    $page = array(
                    'skilled-nursing-assisted-living-locations-ma'=>'All BaneCare Locations',
                    'skilled-nursing-assisted-living-north-shore-ma'=>'BaneCare North',
                    'skilled-nursing-assisted-living-south-shore-ma'=>'BaneCare South',
                    'skilled-nursing-assisted-living-boston-metro-ma'=>'BaneCare Metro Boston',
                    'skilled-nursing-assisted-living-western-ma'=>'BaneCare West', 
                    );
            
                tpBlock('sideBar');
                secNav($page);
            
            ?>

                <div class="col-md-9">

                    <h1 class="fancy">Skilled Nursing & Assisted Living Locations</h1>
                    <br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a id="tabAll" href="#all" aria-controls="all" role="tab" data-toggle="tab">All Facilities</a>
                        </li>
                        <li role="presentation">
                            <a id="tabNorth" href="#home" aria-controls="home" role="tab" data-toggle="tab">BaneCare North</a>
                        </li>

                        <li role="presentation">
                            <a id="tabSouth" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">BaneCare South</a>
                        </li>

                        <li role="presentation">
                            <a id="tabMetro" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">BaneCare Metro Boston</a>
                        </li>

                        <li role="presentation">
                            <a id="tabWest" id="tab" href="#settings" aria-controls="settings" role="tab" data-toggle="tab">BaneCare West</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="all">

                            <div class="clearfix">
                                <br>
                                <br>
                            </div>

                            <?php newEE('baneNorth'); ?>

                                
                                <br>

                                <?php newEE('baneSouth'); ?>

                                    
                                    <br>

                                    <?php newEE('baneMetroBoston'); ?>

                                        
                                        <br>

                                        <?php newEE('baneWest'); ?>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="home">

                            <div class="clearfix">
                                <br>
                                <br>
                            </div>

                            <?php newEE('baneNorth'); ?>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">

                            <div class="clearfix">
                                <br>
                                <br>
                            </div>

                            <?php newEE('baneSouth'); ?>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="messages">

                            <div class="clearfix">
                                <br>
                                <br>
                            </div>

                            <?php newEE('baneMetroBoston'); ?>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="settings">

                            <div class="clearfix">
                                <br>
                                <br>
                            </div>

                            <?php newEE('baneWest'); ?>

                        </div>
                    </div>

                </div>

        </div>

    </div>

</div>
<!--Close Content-->