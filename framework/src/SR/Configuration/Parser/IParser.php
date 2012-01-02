<?php
namespace SR\Configuration\Parser;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author sr
 */
interface IParser {
    
    public function __construct($content);
    public function toArray();
}

?>
