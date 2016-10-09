<?php

class home{

	public function index(){
		
        if(links() == ROOT){
            
            header('Location: '.ROOT.'Home');
        }else if(links() == 'http://www.banecaresouth.com/'){

            header('Location: '.ROOT.'Home');
        }
        
        tpReq('head');
		
		
			tpView('home','home');
		
		
		tpReq('foot');
		
	
	}
    

}