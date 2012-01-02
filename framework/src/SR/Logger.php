<?php

namespace SR;
use SR\Logger as Logger;

/**
 * Description of SR_Logging_Log
 *
 * @author Sébastien Racine
 */
class Logger extends Pattern\Singleton implements Pattern\IObserver{

    protected function __construct($a,$b,$c){
        print_r("$a,$b,$c");
        echo "dqw";
    }
    public function onChanged($sender,array $arg) {

        if (is_null($type)) {
            $type = Logger\Type::INFO;
        }

        echo "[$type] $class : $data";
    }

}

?>
