 <?php
  class Register_model extends CI_Model  { 

      function register(){

        $data = array(
              'group_name' => $this->input->post('group_name'),
              'university_name' => $this->input->post('university_name'),
              'member_count' => $this->input->post('member_count'),
              'name-1' => $this->input->post('name_1'),
              'reg-1' => $this->input->post('reg_1'),
              'contact-1' => $this->input->post('contact_1'),
              'mail-1' => $this->input->post('mail_1'),
              'meal-1' => $this->input->post('meal_1'),
              'tshirt-1' => $this->input->post('tshirt_1'),
              'name-2' => $this->input->post('name_2'),
              'reg-2' => $this->input->post('reg_2'),
              'contact-2' => $this->input->post('contact_2'),
              'mail-2' => $this->input->post('mail_2'),
              'meal-2' => $this->input->post('meal_2'),
              'tshirt-2' => $this->input->post('tshirt_2'),
              'name-3' => $this->input->post('name_3'),
              'reg-3' => $this->input->post('reg_3'),
              'contact-3' => $this->input->post('contact_3'),
              'mail-3' => $this->input->post('mail_3'),
              'meal-3' => $this->input->post('meal_3'),
              'tshirt-3' => $this->input->post('tshirt_3'),
              'name-4' => $this->input->post('name_4'),
              'reg-4' => $this->input->post('reg_4'),
              'contact-4' => $this->input->post('contact_4'),
              'mail-4' => $this->input->post('mail_4'),
              'meal-4' => $this->input->post('meal_4'),
              'tshirt-4' => $this->input->post('tshirt_4'),
              'idea' => $this->input->post('idea'),
              'c_name' => $this->input->post('c_name'),
              'c_mail' => $this->input->post('c_mail'),
              'c_number' => $this->input->post('c_number'),
              'problem' => $this->input->post('problem'),
              'solve' => $this->input->post('solve'),
              'solution' => $this->input->post('solution'),
              'poc' => $this->input->post('poc'),
              'api' => $this->input->post('api'),
          );

        $this->db->insert('groups_new', $data);
        $get = $this->db->get('groups_new');
        // print_r($get->result());
      }
 } 

 ?>