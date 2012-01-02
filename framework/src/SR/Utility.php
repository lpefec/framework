<?php
namespace SR;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utility
 *
 * @author sr
 */
class Utility {
    
    public static function get_called_method(){
        $trace=debug_backtrace();
        $caller=array_shift($trace);

        if (isset($trace[0]['function'])){
           return  $trace[0]['function'];
        }
        return '';
    }
    
    public static function debug($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
   
    public static function camelize($string){
        return str_replace(' ', '', ucwords(preg_replace('/[^A-Z^a-z^0-9]+/', ' ', $string)));
    }
    
}

?>
