<?php
namespace SR\Configuration;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Configuration
 *
 * @author sr
 */
class Manager extends \SR\Pattern\Singleton implements IConfiguration{
    
    protected $useDataStrict=false;
    
    protected function __construct(){
        $env = \SR\Application::getInstance()->getEnv();
        $cachePath = \SR\Application::getInstance()->getEnv();
        
    }
    public function __get($configName){
        $config = parent::__get($configName);
        return new Result($config->toArray());
    }
   
    
    public static function mergeConfig($a,$b,$path){
        $env = \SR\Application::getInstance()->getEnv();
        
        
        if($env!=null){
           
        }
    }
    
}

?>
