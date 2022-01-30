<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SubjectsModel extends CI_Model
{
    public function lists()
    {
        $this->db->order_by('id', 'ACE');
        $query = $this->db->get('subjects');

        return $query->result();
    }

    public function save()
    {
        $id = 0;
       

        if ($this->input->post('id') == 0) {
            $field = array(
                'sub_code' => $this->input->post('sub_code'),
                'sub_name' => $this->input->post('sub_name'),
                'out_of' => $this->input->post('out_of'),
            );
            $this->db->insert('subjects', $field);
            $id = $this->db->insert_id();
        } else {
            $id = $this->input->post('id');
            $field = array(
                'sub_code' => $this->input->post('sub_code'),
                'sub_name' => $this->input->post('sub_name'),
                'out_of' => $this->input->post('out_of'),
            );
            $this->db->where('id', $id);
            $this->db->update('subjects', $field);
        }

        // if (isset($_FILES['pic']) && is_uploaded_file($_FILES['pic']['tmp_name'])) {
        //     $target_dir = '././studentpics/'.$id.'.png';
        //     if (file_exists($target_dir)) {
        //         unlink($target_dir);
        //     }

        //     move_uploaded_file($_FILES['pic']['tmp_name'], $target_dir);
        // }

        return $id;
    }

    public function getbyid($id)
    {
        
        $this->db->where('id', $id);
        $query = $this->db->get('subjects');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

   

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('subjects');
    }
    
}
