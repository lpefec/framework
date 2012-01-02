<?php
namespace SR\Pattern;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Entity
 *
 * @author sr
 */
class Entity {
    
    protected $data;
    protected $useDataStrict=true;
    
    public function __construct(Array $data = array()){
        $this->data = $data;
    }
    
    
    public function __call($method, $args){
        
        $type = substr($method, 0, 3);
        $property = lcfirst(substr($method, 3));
        if ('get' === $type) {
            return $this->__get($property);
        } elseif ('set' === $type) {
            return $this->__set($property,$args[0]);
        }

        throw new \Exception('Invalid method call: ' . get_class($this) . '::' . $method . '()');
    }
    
    public function __get($name){
        
        if($this->useDataStrict){
            if(property_exists($this,$name)){
                return $this->$name;
            }else{
                throw new \Exception('Invalid properties :'.$name);
            } 
        }
        
        if(isset($this->data[$name])){

            return $this->data[$name];
            
        }else{
            return null;
        }
    }
    
    public function __set($name,$value){
        if($this->useDataStrict){
            if(property_exists($this,$name)){
                $this->$name=$value;
            }else{
                throw new \Exception('Invalid properties :'.$name);
            }
            
        }
        $this->data[$name]=$value;
        return $this;
    }

}

?>
