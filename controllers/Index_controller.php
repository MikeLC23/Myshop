<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author Saga 
 */
class Index_controller {
    
    public function index($param = null){
        if (empty($param)){
            $param = "Tu";            
        }
            echo "Hola ".$param. "!";
         
}
    
    
}
