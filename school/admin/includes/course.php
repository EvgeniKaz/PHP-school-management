<?php 

	class Course extends Db_object {

		protected static $db_table = "courses";
		protected static $db_table_fields = array('id','course_name','description','course_image');
		public $id;
		public $course_name;
		public $description;
		public $course_image;
	}

		



 ?>