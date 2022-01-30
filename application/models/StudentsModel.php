<?php

defined('BASEPATH') or exit('No direct script access allowed');

class StudentsModel extends CI_Model
{
    public function lists()
    {
        $this->db->order_by('id', 'ACE');
        $query = $this->db->get('students');
        return $query->result();
    }

    public function save()
    {
        $id = 0;
       

        if ($this->input->post('id') == 0) {
            $field = array(
                'roll_no' => $this->input->post('roll_no'),
                'name' => $this->input->post('name'),
                'mobile_no' => $this->input->post('mobile_no'),
                'email_id' => $this->input->post('email_id'),
                'address' => $this->input->post('address'),
                'gender' => $this->input->post('gender'),
                'password' => $this->input->post('password'),
            );
            $this->db->insert('students', $field);
            $id = $this->db->insert_id();
        } else {
            $id = $this->input->post('id');
            $field = array(
                'roll_no' => $this->input->post('roll_no'),
                'name' => $this->input->post('name'),
                'mobile_no' => $this->input->post('mobile_no'),
                'email_id' => $this->input->post('email_id'),
                'address' => $this->input->post('address'),
                'gender' => $this->input->post('gender'),
                'password' => $this->input->post('password'),
            );
            $this->db->where('id', $id);
            $this->db->update('students', $field);
        }

        if (isset($_FILES['pic']) && is_uploaded_file($_FILES['pic']['tmp_name'])) {
            $target_dir = '././studentpics/'.$id.'.png';
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
        $query = $this->db->get('students');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

   

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('students');
    }

    public function getmarks($student_id)
    {
        $query="SELECT s.id As subject_id,s.sub_name,s.out_of,m.mark FROM subjects As s LEFT OUTER JOIN marks As m ON s.id=m.subject_id AND m.student_id=".$student_id." ORDER BY s.id";
        $data=$this->db->query($query);
        return $data->result();
    }
    public function savemarks()
    {
        $studentid=$this->input->post('student_id');
        $query="DELETE FROM marks where student_id= ".$studentid;
        $this->db->query($query);
        $count=$this->input->post('count');
        for($i=1;$i<$count;$i++)
        {
           $subject_id=$this->input->post('subject_id'.$i);
           $mark=$this->input->post('mark'.$i); 
           $query="INSERT INTO marks(student_id,subject_id,mark) values(".$studentid.",".$subject_id.",".$mark.")";
           $this->db->query($query);
        }
       
        
    }
    

    public function studList()
    {
        $query="SELECT *,(SELECT COUNT(*)FROM marks WHERE marks.student_id=students.id) AS subcount,(SELECT (CASE
        WHEN AVG(mark)>=66 THEN 'Distinaction'
        WHEN AVG(mark)>=60 THEN 'A'
        WHEN AVG(mark)>=50 THEN 'B'
        WHEN AVG(mark)>=40 THEN 'C'
       ELSE 'Fail'
       END) FROM marks WHERE marks.student_id=students.id) as result from students";
        $data=$this->db->query($query);
        return $data->result();
    }

//Count....................

    
   public function studcount()
   {
        $query="SELECT * FROM students";
        $result=$this->db->query($query);
        $result=$result->result();
        return sizeof($result);
   }
    
   public function subcount()
   {
        $query="SELECT * FROM subjects";
        $result=$this->db->query($query);
        $result=$result->result();
        return sizeof($result);
   }


}


