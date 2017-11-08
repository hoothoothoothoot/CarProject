<?php
class Conf {
    static private $databases = array(
        'hostname' => 'webinfo',
        'database' => 'rabesonw',
        'login' => 'rabesonw',
        'password' => '08071998');
    
    static public function getLogin() {
        return self::$databases['login'];
    }
    
    static public function getHostname() {
        return self::$databases['hostname'];
    }
    
    static public function getDatabase() {
        return self::$databases['database'];
    }
    
    static public function getPassword() {
        return self::$databases['password'];
    }
}