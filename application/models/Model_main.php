<?php



/**
*
*/
class Model_main extends CI_Model{



    public function authorization(){

        $this ->db->where('email', $this->input->post('email'));
          $this ->db->where('password', sha1($this->input->post('password')));

          $query = $this->db->get('users');



          if($query->num_rows() == 1){

              return true;
          }else{
              return false;
          }

    }


    public function getUserDetailsByEmail($email){
        $this -> db -> select('users.*,users_groups.*,hpd_group.*');
        $this -> db ->from('users');
        $this -> db ->join('users_groups', "users_groups.id = users.users_group_id");
        $this -> db ->join('hpd_group', "hpd_group.hpd_id = users.hpd_id");
        $this -> db ->where('users.email', $email);
        $query = $this->db->get();
        return $query->result_array();

    }


    public function uploadprofilepic($img){
          $updated = array('photo' => $img);

          $this->db->where('user_id', $this->session->userdata('id'));
          $this->db->update('users', $updated);

    }

    public function getphoto(){
      $this -> db ->select('photo');
      $this -> db ->from('users');
      $this -> db ->where('user_id', $this->session->userdata('id'));
      $query = $this->db->get();
      return $query->result_array();
    }



}
