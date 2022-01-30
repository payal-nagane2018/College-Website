<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('StudentsModel', 'student');
        $this->load->model('SubjectsModel', 'subject');
        $this->load->model('EventsModel', 'event');
        $this->load->model('ContactsModel', 'contact');
        $this->load->model('TeachersModel', 'teacher');
        $this->load->model('MailModel', 'mail');
        $this->load->model('DeptsModel', 'dept');

    }

    public function index()
    {
        $data['studcount']=$this->student->studcount();
        $data['subcount']=$this->student->subcount();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/index',$data);
        $this->load->view('admin/layout/footer');
    }


    //Students..............

    
    public function students()
    {
        $data['result'] = $this->student->studList();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/students',$data);
        $this->load->view('admin/layout/footer');
    }
    public function student($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->student->getbyid($id);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/student',$data);
        $this->load->view('admin/layout/footer');
    }
    public function savestudent()
    {
        $result = $this->student->save();

        redirect(base_url('admin/students'));
    }

    public function deletestudent($id)
    {
        $result = $this->student->delete($id);
        redirect(base_url('admin/students'));
    }


    //Subjects...........

    public function subjects()
    {
        $data['result'] = $this->subject->lists();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/subjects',$data);
        $this->load->view('admin/layout/footer');
    }
    public function subject($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->subject->getbyid($id);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/subject',$data);
        $this->load->view('admin/layout/footer');
    }
    public function savesubject()
    {
        $result = $this->subject->save();

        redirect(base_url('admin/subjects'));
    }

    public function deletesubject($id)
    {
        $result = $this->subject->delete($id);
        redirect(base_url('admin/subjects'));
    }


    //Marks.............

    public function marks($id)
    {
        
        $data['id'] = $id;
        $data['data'] = $this->student->getbyid($id);
        $data['marks'] = $this->student->getmarks($id);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/marks',$data);
        $this->load->view('admin/layout/footer');
        
    }

    public function savemarks()
    {
        $result = $this->student->savemarks();
        redirect(base_url('admin/students'));

    }


    //Events..........

    public function events()
    {
        $data['result'] = $this->event->lists();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/events',$data);
        $this->load->view('admin/layout/footer');
    }
    public function event($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->event->getbyid($id);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/event',$data);
        $this->load->view('admin/layout/footer');
    }
    public function saveevent()
    {
        $result = $this->event->save();

        redirect(base_url('admin/events'));
    }

    public function deleteevent($id)
    {
        $result = $this->event->delete($id);
        redirect(base_url('admin/events'));
    }

//department..............

public function courses()
    {
        $data['result'] = $this->dept->lists();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/courses',$data);
        $this->load->view('admin/layout/footer');
    }
    public function course($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->dept->getbyid($id);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/course',$data);
        $this->load->view('admin/layout/footer');
    }
    public function savecourse()
    {
        $result = $this->dept->save();

        redirect(base_url('admin/courses'));
    }

    public function deletecourse($id)
    {
        $result = $this->dept->delete($id);
        redirect(base_url('admin/courses'));
    }

    //Contact.............

    public function contacts()
    {
        $data['result'] = $this->contact->lists();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/contacts',$data);
        $this->load->view('admin/layout/footer');
    }
    public function deletecontacts($id)
    {
        $result = $this->contact->delete($id);
        redirect(base_url('admin/contacts'));
    }
    // public function contact($id)
    // {
    //     $data['id'] = $id;
    //     //$data['data'] = $this->contact->getbyid($id);
    //     $this->load->view('admin/layout/header');
    //     $this->load->view('admin/layout/sidebar');
    //     $this->load->view('admin/contact',$data);
    //     $this->load->view('admin/layout/footer');
    // }
    public function savecontact()
    {
        $result = $this->contact->save();
        $name = $this->input->post('name');
        $subject = $this->input->post('subject');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $message = $this->input->post('message');

        $subject = "karmayogi.com ";
        $body = $name . " <br/>Thanks for connecting with us we will contact you soon.";
        $this->mail->sendMail($email, $subject, $body);

        $to = "student123@gmail.com";
        $subject = "karmayogi.com";
        $body = "Received contact message from karmayogi.com <br/>Name:" . $name . " <br/>Email:" . $email . " <br/>Phone:". $phone . " <br/>Subject:". $subject . " <br/>Message" . $message . ". <br/>Please do get connected with them.";

       // echo $body;
        //exit;
        $this->mail->sendMail($to, $subject, $body);
        $this->session->set_flashdata('success_msg', 'Thanks for connecting with us we will contact you soon.');


        redirect(base_url('admin/msg'));
    }

    public function msg()
    {
        if ( ! $this->email->send())
        {
            $this->session->set_flashdata('msg', 'Message Sent.');

        }
        else
        {
            $this->session->set_flashdata('msg', 'Message Not Sent.');

        }

        redirect(base_url('college/contact'));

    }
    //Login...........
    public function login()
    {
        $this->load->view('admin/login');
    }
    public function checkLogin()
    {
        $username=$this->input->post('username');
        $pass=$this->input->post('pass');
        if($username=="kpc" && $pass=="kpc@123")
        {
            $this->load->helper('cookie');
            $this->setCookie('usertype', 'admin');
            redirect(base_url('admin/index'));
        }
        else
        {
            $this->session->set_flashdata('Failure','Sorry...wrong password user name and password');
            redirect(base_url('admin/login'));

        }

    }




    //Cookies
    public function setCookie($name, $value)
    {
        $cookie = array(
            'name' => $name,
            'value' => $value,
            'expire' => '31556926',
        );
        $this->input->set_cookie($cookie);
    }



    public function getCookie($name)
    {
        return $this->input->cookie($name, true);
    }

    public function clearCookie($name)
    {
        $cookie = array(
            'name' => $name,
            'value' => '',
            'expire' => '-3600',
        );
        $this->input->set_cookie($cookie);
    }


    //Teachers...........


    public function teachers()
    {
        $data['result'] = $this->teacher->lists();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/teachers',$data);
        $this->load->view('admin/layout/footer');
    }
    public function teacher($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->teacher->getbyid($id);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/teacher',$data);
        $this->load->view('admin/layout/footer');
    }
    public function saveteacher()
    {
        $result = $this->teacher->save();

        redirect(base_url('admin/teachers'));
    }

    public function deleteteacher($id)
    {
        $result = $this->teacher->delete($id);
        redirect(base_url('admin/teachers'));
    }



    public function logout()
    {
        $this->clearCookie('usertype');
        $this->clearCookie('id');
        $this->session->unset_userdata('usertype');
        $this->session->unset_userdata('id');
        redirect(base_url('admin/login'));
    }
}
