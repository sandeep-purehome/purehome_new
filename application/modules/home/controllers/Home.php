<?php
	class Home extends MY_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			var_dump("We are Home :)");
		}
	}
?>