<?php



/**
*
*/
class Model_main extends CI_Model{



    public function authorization(){

        $this ->db->where('email', $this->input->post('email'));
          $this ->db->where('password', sha1($this->input->post('password')));

          $query = $this->db->get('users');

          $sql = $query->result_array();
          $id = "";
          $name = "";
          foreach ($sql as $key) {
            $id = $key['id'];
            $name = $key['name'];
          }


          if($query->num_rows() == 1){
              $data = array('fullname' => $name, 'is_logged_in' => TRUE, 'id' => $id );
              $this -> session -> set_userdata($data);
              return true;
          }else{
              return false;
          }

    }



}
