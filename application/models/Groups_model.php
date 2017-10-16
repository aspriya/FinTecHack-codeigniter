 <?php  
 class Groups_model extends CI_Model  
 {  
      function get_group_list()  
      {  

        $sql = "SELECT * FROM groups ORDER BY group_id DESC";
        $query = $this->db->query($sql);
        return $query->result();        
      }  

      function get_group_details($group_id){
        $sql = "SELECT * FROM groups WHERE group_id = ? LIMIT 1";
        $query = $this->db->query($sql, array($group_id));
        return $query->result(); 
      }

      function get_member_details($group_id){
        $sql = "SELECT * FROM members WHERE group_id = ?";
        $query = $this->db->query($sql, array($group_id));
        return $query->result(); 
      }

      function get_groups_new(){
        $sql = "SELECT * FROM groups_new" ;
        $query = $this->db->query($sql);
        return $query->result(); 
      }


 } 