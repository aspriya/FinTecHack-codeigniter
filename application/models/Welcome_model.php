 <?php  
 class Welcome_model extends CI_Model  
 {  
      function registered_count()  
      {  

         //get_completed_groups_count
        $sql = "SELECT COUNT(*) AS 'count' FROM groups_new ";
        $query = $this->db->query($sql);
        $count = $query->row('count');
         return $count;
      }  

      
 } 