<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ContactsModel extends CI_Model
{
    public function lists()
    {
        $this->db->order_by('id', 'ACE');
        $query = $this->db->get('contacts');
        return $query->result();
    }

    public function save()
    {
        $id = 0;
       

        if ($this->input->post('id') == 0) {
            $field = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'phone' => $this->input->post('phone'),
                'message' => $this->input->post('message'),
            );
            $this->db->insert('contacts', $field);
            $id = $this->db->insert_id();
        } else {
            $id = $this->input->post('id');
            $field = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'phone' => $this->input->post('phone'),
                'message' => $this->input->post('message'),
            );
            $this->db->where('id', $id);
            $this->db->update('contacts', $field);
        }
        return $id;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('contacts');
    }
}