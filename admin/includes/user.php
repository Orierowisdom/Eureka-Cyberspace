
<?php 

class User extends Db_object {

      
        protected static $db_table = "users";
        protected static $db_table_field = array( 'full_name', 'password','username');
        public $id;
        public $full_name;
        public $password;
        public $username;


    
        public static function verify_user($username, $password){
            global $database;
            $username = $database->escape_string($username);
            $password = $database->escape_string($password);
    
            $sql = "SELECT * FROM " .self::$db_table." WHERE ";
            $sql .= "username = '{$username}'";
            $sql .= " AND password = '{$password}'";
            $sql .= "LIMIT 1";
    
            $the_result_array = self:: find_by_query($sql);
            return !empty($the_result_array) ? array_shift($the_result_array) : false;
        }
    
    
    
    
    } //END OF USER CLASS
    
    




?>