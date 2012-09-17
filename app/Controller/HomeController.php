<?php

class HomeController extends AppController{
    
    public function index(){
        
    }
    
    public function admin(){
        $this->layout = 'admin';
    }
}
