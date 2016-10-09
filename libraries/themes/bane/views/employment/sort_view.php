<!--Open Content area-->
<div class="cont">

    <div class="container">

        <div class="row">

            <?php 

            $linked = array(
                'Employment-Opportunities'=>'All Employment Opportunities',
                'Employment-Opportunities-North'=>'BaneCare North',
                'Employment-Opportunities-South'=>'BaneCare South',
                'Employment-Opportunities-Metro'=>'BaneCare Metro Boston',
                'Employment-Opportunities-West'=>'BaneCare West',  
            );

            tpBlock('sideBar'); 
            secNav($linked);

            ?>

            <div class="col-md-9">

                <h1 class="fancy">BaneCare <?php echo title(2); ?> Employment Opportunities</h1>
                <hr>


                <?php  

                $query = 'Select * FROM careers WHERE Region LIKE "Bane'.title(2).'" ORDER BY Id DESC';
                $block = 'job';

                $jobs = new model();
                $jobs->query($query, $block);

                ?>

            </div>

        </div>

    </div>

</div>
<!--Close Content area-->