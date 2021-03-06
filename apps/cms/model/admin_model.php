<?php

class admin_model{

    public $query;
    public $block;	

    //Queries the DB for home page	

    public function query($query, $block){

        $this->query = $query;
        $this->block = $block;

        if (isset($other)){

            $this->other = $other;
            return $other;

        }else{



        }

        global $mysqli;

        if($result = $mysqli->query($query)){
            
            while($row = $result->fetch_assoc()){

                $loops = array(
                    'Id'=>'id',
                    'Title'=>'title',
                    'Html'=>'html',
                    'Description'=>'script',
                    'Links'=>'links',
                    'Image'=>'img',
                    'Alt'=>'alt',
                    'Price'=>'price',
                    'Gallery'=>'album',
                    'Links'=>'link',
                    'First'=>'first',
                    'Last'=>'last',
                    'Email'=>'email',
                    'Phone'=>'phone',
                    'State'=>'state',
                    'Message'=>'message',
                    'Date'=>'date',
                    'Heading'=>'heading',
                    'KeyWords'=>'keywords',
                    'Editable'=>'edit',
                    'Job'=>'job',
                    'Facility'=>'facility',
                    'Updated'=>'update',
                    'Cover'=>'cover',
                    'Album'=>'gallery',
                    'fourth'=>'fourth',
                    'Badges'=>'badges',
                    'Company'=>'company',
                    'Grade'=>'grade',
                    'Caption'=>'imgCap',
                    'Order'=>'order',
                    'Region'=>'reg'
                );

                foreach($loops as $loop => $val){

                    if(isset($row[$loop])){

                        $$val = $row[$loop];

                    }else{

                    }

                };	

                // Creates html block if it doesnt exist or just returns the already existing block		
                $filename = 'libraries/themes/login/adminBlocks/'.$block.'.php';

                if(!file_exists($filename)){

                    touch($filename);
                    chmod($filename, 0777);

                    $fileNew = fopen($filename,'w+');

                    return $fileNew;
                    fclose($fileNew);

                }else{
                    include 'libraries/themes/login/adminBlocks/'.$block.'.php';

                }

            }


        }


    }

    //Queries the DB for page data

    public function home($query, $block){

        $this->query($query, $block);

    }

    public function pages($query, $block){


        $this->query($query, $block);


    }		

    protected function admin($query, $block){

        $this->query($query, $block);

    }	

    public function news($query, $block){


        $this->query($query, $block);


    }		

    protected function gallery($query, $block){

        $this->query($query, $block);

    }		

    public function extra($query, $block, $other){

        $this->query($query, $block, $other);

    }		

}

