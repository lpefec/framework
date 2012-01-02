<?php

namespace SR\Configuration\Parser;
require_once("Contrib/Yaml/Spyc/spyc.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Yaml
 *
 * @author sr
 */
class Yaml extends \SR\Configuration\Parser implements IParser{
    
    protected $content='';
    protected $spyc;
    public function __construct($content){
        $this->content=$content;
        $this->spyc= new \Spyc();
    }
    public function toArray(){
        return $this->spyc->YAMLLoadString($this->content);
    }
    
    
}

?>
