<?php

		
		
class employment{
	
	public function index( $nav = ''){
		
   	 tpReq('head');   
	 
	 if($nav == ''){
			
		   tpView('employment','employment');
		   
	 }else if($nav == 'North' || $nav == 'South' || $nav == 'Metro' || $nav == 'West'){
         
         tpView('employment','sort',$nav);
         
     }else{	 
			
			tpView('employment','job',$nav);
		 
		 }
				  
      tpReq('foot'); 
			
	}

}