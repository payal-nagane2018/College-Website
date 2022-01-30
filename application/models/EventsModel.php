<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EventsModel extends CI_Model
{
    public function lists()
    {
        $this->db->order_by('id', 'ACE');
        $query = $this->db->get('events');
        return $query->result();
    }

    public function save()
    {
        $id = 0;
       

        if ($this->input->post('id') == 0) {
            $field = array(
                'title' => $this->input->post('title'),
                'date' => $this->input->post('date'),
                'body' => $this->input->post('body'),
                'starttime' => $this->input->post('starttime'),
                'finishtime' => $this->input->post('finishtime'),
            );
            $this->db->insert('events', $field);
            $id = $this->db->insert_id();
        } else {
            $id = $this->input->post('id');
            $field = array(
                'title' => $this->input->post('title'),
                'date' => $this->input->post('date'),
                'body' => $this->input->post('body'),
                'starttime' => $this->input->post('starttime'),
                'finishtime' => $this->input->post('finishtime'),
            );
            $this->db->where('id', $id);
            $this->db->update('events', $field);
        }

        if (isset($_FILES['pic']) && is_uploaded_file($_FILES['pic']['tmp_name'])) {
            $target_dir = '././eventpics/'.$id.'.png';
            if (file_exists($target_dir)) {
                unlink($target_dir);
            }

            move_uploaded_file($_FILES['pic']['tmp_name'], $target_dir);
        }

        return $id;
    }

    public function getbyid($id)
    {
        
        $this->db->where('id', $id);
        $query = $this->db->get('events');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

   

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('events');
    }
}