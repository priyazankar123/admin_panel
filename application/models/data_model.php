<?php  
class Data_model extends CI_Model 
{  
  
       public function get_total_users()
		{
			$this->db->select('count(id) as totaluser');
			$this->db->from('user');
			$query=$this->db->get();
			return $query->row()->totaluser;
		}
      
	   public function get_total_guest()
		{
			$this->db->select('count(guest_id) as totalguest');
			$this->db->from('guest');
			$query=$this->db->get();
			return $query->row()->totalguest;
		}
		
		 public function get_allusers()
		{
			$this->db->select('*');
			$this->db->from('user');
			$query=$this->db->get();
			return $query->result_array();
		}
		function get_userdetails($id)
	    {
		    $query = $this->db->query("SELECT * from user where id='$id'");
		
		    $user_details       = $query->result_array();
		
	        return $user_details;
	    }
		
		function get_alldetails($id)
	    {
		    $query = $this->db->query("SELECT count(g.guest_id) as num from user as u INNER JOIN guest as g ON g.user_id=u.id where g.user_id='$id'");
		
		    $number       = $query->row()->num;
		
	        return $number;
	    }
		
		function get_guestdetails($id)
	    {
		    $query = $this->db->query("SELECT g.* from guest as g INNER JOIN user as u ON g.user_id=u.id where u.id='$id'");
		
		    $details       = $query->result_array();
		
	        return $details;
	    }
		
		
      
}  
?>  