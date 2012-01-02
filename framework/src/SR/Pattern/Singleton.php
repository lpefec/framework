<?php
namespace SR\Pattern;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Factory
 *
 * @author sr
 */
class Singleton extends Entity implements ISingleton{
   
  protected static $instance = array();
  
  public static function getInstance(){
      $classname=get_called_class();
      if ( ! isset(self::$instance[$classname])) {
        self::$instance[$classname] = new $classname(func_get_args());
    }
    return self::$instance[$classname];
        
        
    }
   
    
}

?>
