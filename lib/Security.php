<?php

class Security {
    
    function chiffrer($cleartext) {
        $modifiedtext = hash('sha256', Security::getSeed().$cleartext);
        return $modifiedtext;
    }
    
    private static $seed = 'PbLwFMLaSmCHlEP';
    static public function getSeed() {
        return self::$ssed;
    }
    
}

