<?php

class UsersController extends AppController{
    public function index(){
        $users = $this->User->find('all');
        pr($users);
        
        $this->set('users', $users);
    }
    
    public function add(){
        if($this->request->is('post')){
            $this->User->save( $this->request->data );
            $this->redirect('/');
        }
    }
    
    public function login(){
        $this->set('title_for_layout', 'CakePHP Basics - Login');
        if( $this->request->is('post') ){
            
            // 2 options:
            // 1. find method with 2 conditions
            // find the first user that meets the conditions
            /* 
            $user = $this->User->find('first', array(
               'conditions' => array(
                   'email' => $this->request->data('User.email'),
                   'password' => $this->request->data('User.password')
               ) 
            ));
             */
            
            // 2. Magical find **** Check for more in documentation
            $user = $this->User->findByEmailAndPassword($this->request->data('User.email'), $this->request->data('User.password'));
        
            // if user exists, 
            if($user){
                $this->Session->write('User', $user); // 'User' is the name of the session
                $this->redirect(array(
                    'controller' => 'home',
                    'action' => 'index'
                ));
            }
            
            $this->Session->setFlash('Email and Password conbination is not correct');
//            debug($user);

        }
    }
}