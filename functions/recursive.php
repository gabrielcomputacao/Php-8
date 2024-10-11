<?php

    function recursive($a){
        
        if ($a < 10) {
            echo $a . " " ;

            recursive(++$a);
        }

    }

    recursive(0);
