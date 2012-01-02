<?php
namespace SR\Pattern;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author sr
 */
interface IObserver {
   
    function onChanged( $sender, array $args );
}

?>
