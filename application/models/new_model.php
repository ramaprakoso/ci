<?php 
	class New_model extends CI_Model{
		public function __construct(){
				$this->load->database; 
		}
		public function get_news(){
			if($slug==FALSE){
				$query=$this->db->get('news');
				$return $query->result_array();
			}
			$query=$this->db->get_where('news',array('slug'=>$slug));
			return $query->row_array(); 
		}
		public function get_news_id($id=0){
			if($id===0){
				
			}
		}

	}
?>