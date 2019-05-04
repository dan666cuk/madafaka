<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class user_model extends CI_Model {

		function get_user() {
			return $this->db->query('select * from user order by id desc')->result_array();
		}

		public function get_comment(){ //for admin
			return $this->db->get('comments')->result_array();
		}

		public function set_comment() { //for post
			return $this->db->get('news',3)->result_array();
		}

		public function get_report(){
			# code...
		}

		public function get_reply(){
			# code...
		}



	}