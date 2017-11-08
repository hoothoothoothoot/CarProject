<?php
//php data object
$path_array = array("config", "Conf.php");
$tab = File::build_path($path_array);
require_once ("$tab");
class Model {
    
    public static $pdo;
    
    public static function Init() {
        $hostname = Conf::getHostname();
        $database_name = Conf::getDatabase();
        $login = Conf::getLogin();
        $password = Conf::getPassword();
            try {
                self::$pdo = new
                         PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
                         array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
       }
   
}
 Model::Init();
?>
