<?php

class Security {
    
    function chiffrer($cleartext) {
        $modifiedtext = hash('sha256', $cleartext);
        return $modifiedtext;
    }
    
}

