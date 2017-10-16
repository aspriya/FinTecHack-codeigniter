 <?php
  class Register_model extends CI_Model  { 

      function register(){

        $data = array(
              'group_name' => $this->input->post('group_name'),
              'university_name' => $this->input->post('university_name'),
              'member_count' => $this->input->post('member_count'),
              'name-1' => $this->input->post('name-1'),
              'reg-1' => $this->input->post('reg-1'),
              'contact-1' => $this->input->post('contact-1'),
              'mail-1' => $this->input->post('mail-1'),
              'meal-1' => $this->input->post('meal-1'),
              'tshirt-1' => $this->input->post('tshirt-1'),
              'name-2' => $this->input->post('name-2'),
              'reg-2' => $this->input->post('reg-2'),
              'contact-2' => $this->input->post('contact-2'),
              'mail-2' => $this->input->post('mail-2'),
              'meal-2' => $this->input->post('meal-2'),
              'tshirt-2' => $this->input->post('tshirt-2'),
              'name-3' => $this->input->post('name-3'),
              'reg-3' => $this->input->post('reg-3'),
              'contact-3' => $this->input->post('contact-3'),
              'mail-3' => $this->input->post('mail-3'),
              'meal-3' => $this->input->post('meal-3'),
              'tshirt-3' => $this->input->post('tshirt-3'),
              'name-4' => $this->input->post('name-4'),
              'reg-4' => $this->input->post('reg-4'),
              'contact-4' => $this->input->post('contact-4'),
              'mail-4' => $this->input->post('mail-4'),
              'meal-4' => $this->input->post('meal-4'),
              'tshirt-4' => $this->input->post('tshirt-4'),
              'idea' => $this->input->post('idea'),
              'c_name' => $this->input->post('c_name'),
              'c_mail' => $this->input->post('c_mail'),
              'c_number' => $this->input->post('c_number'),
              'problem' => $this->input->post('problem'),
              'solve' => $this->input->post('solve'),
              'poc' => $this->input->post('poc'),
              'api' => $this->input->post('api'),
          );

        $this->db->insert('groups_new', $data);
        $get = $this->db->get('groups_new');
        echo $get->result();
      }
 } 

 ?>