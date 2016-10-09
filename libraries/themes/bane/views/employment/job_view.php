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
                
                    <h1 class="fancy">Employment Opportunities</h1>
                    
                    <?php 
                    
                    $query = 'SELECT * FROM careers WHERE Id LIKE "'.title(2).'"';
                    $block = 'singleJob';
                    $other = $nav;
                    
                    $job = new model();
                    $job->extra($query,$block,$other);
                    
                    ?>
            
            </div>
        
        </div>
        
    </div>
    
</div>
<!--Close Content area-->
