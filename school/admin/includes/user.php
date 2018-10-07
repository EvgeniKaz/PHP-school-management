<?php 


	class User extends Db_object {
		protected static $db_table = "users";
		protected static $db_table_fields = array('email','password','first_name','last_name','user_image');
		public $id;
		public $email;
		public $password;
		public $first_name;
		public $last_name;
		public $user_image;


		public static function verify_user($email, $password) {

			global $database;

			$email = $database->escape_string($email);
			$password = $database->escape_string($password);

			$sql = "SELECT * FROM " . self::$db_table . " WHERE email = '{$email}' AND password = '{$password}' LIMIT 1";

			$the_result_array = self::find_by_query($sql);
			return !empty($the_result_array) ? array_shift($the_result_array) : false;
		}


	}


 ?>