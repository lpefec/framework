<?php
namespace SR;
/**
 * Description of SR_Base
 *
 * @author Sébastien Racine
 */
class Base {
    
    
    static protected $observer = array();
    
     static public function setObserver(Observer $observer,$function){
        $class = get_called_class();

        if(!$class){
            $class = '';
        }       
        self::$observer[$class][$function][get_class($observer)]=$observer;
        
    }
    
    static public function getObserver(){
        $class = get_called_class();
        $method = \SR\Utility::get_called_method();
        if($class!='' && $method!='' && isset(self::$observer[$class][$method])){
            return self::$observer[$class][$method];
        }
      
    }
    
    
    
}

?>
