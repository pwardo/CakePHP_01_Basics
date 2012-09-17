<?php

class ProductsController extends AppController{
    public function index(){
        $products = $this->Product->find('all');
        pr($products);
        
        $this->set('products', $products);
    }
    
    
    public function add(){
        
        $users = $this->Product->User->find('list');
//        pr($users);
        
        if( $this->request->is('post') ){
            $this->Product->save( $this->request->data );
        }
        
        $this->set('users', $users);
    }
}

?>
