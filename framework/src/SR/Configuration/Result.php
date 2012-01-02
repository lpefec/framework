<?php
namespace SR\Configuration;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Result
 *
 * @author sr
 */
class Result{
    
    protected $data;

   public function __construct($data){
       $this->data = $data;
   }
    
    
    public function buildObject($path){
        $current = $this->getFromPath($path);
        
        
        var_dump($current);
    }
    

    
    public function getFromPath($path){
   
        foreach(explode('.',$path) as $v){
            $current = $this->data[$v];
        }
        
    }
    
    
    
        
}

?>
