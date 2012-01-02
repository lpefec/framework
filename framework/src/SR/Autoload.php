<?php
namespace SR;
require_once('Base.php');


/**
 * Description of Autoload
 *
 * @author sr
 */


class Autoload{
   
    /**
     *
     * @param array $paths 
     */
    public function __construct(array $paths=array()){
        
        spl_autoload_register(array($this, 'loader'));
        set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__));
        set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname(__FILE__)));        
       
        foreach($paths as $path){
            set_include_path(get_include_path() . PATH_SEPARATOR . $path);
        }
   }
    
    /**
     *
     * @param type $classname 
     */
    static public function loader($classname){
        $path = str_replace("\\",DIRECTORY_SEPARATOR,$classname);
        require_once($path.".php");
        
    }
}
?>
