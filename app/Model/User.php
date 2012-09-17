<?php
App::uses('Security', 'Utility');

class User extends AppModel{
    
    public $displayField = 'firstname';
    // virtual field required to display first and last name
    

    public $hasMany = array(
        'Product'
    );

    
    public $validate = array(
        'firstname' => array(
            'rule' => 'notEmpty',
            'message' => 'First Name is required!'
        ),
        'lastname' => array(
            'rule' => 'notEmpty',
            'message' => 'Last Name is required!'
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'A valid email is required!'
        ),
        'password' => array(
            'rule' => array('between', 5, 10),
            'message' => 'Passwords must be between 5 and 10 characters!'
        )
    );

    public function beforeSave($options = array()) {
        parent::beforeSave($options);
        
        $this->data['User']['password'] = Security::hash($this->data['User']['password'], 'sha1', TRUE);
        return TRUE ;
        
    }
    
}