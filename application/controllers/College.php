<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class College extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('StudentsModel', 'student');
        $this->load->model('SubjectsModel', 'subject');
        $this->load->model('EventsModel', 'event');
        $this->load->model('ContactsModel', 'contact');
        $this->load->model('TeachersModel', 'teacher');
        $this->load->model('DeptsModel', 'dept');

    }

    public function index()
    {
        $data['result'] = $this->event->lists();
        $this->load->view('college/layout/header');
        $this->load->view('college/index',$data);
        $this->load->view('college/layout/footer');
    }
    public function about()
    {
        $this->load->view('college/layout/header');
        $this->load->view('college/about');
        $this->load->view('college/layout/footer');
    } 
    public function courses()
    {
        $data['result'] = $this->dept->lists();
        $this->load->view('college/layout/header');
        $this->load->view('college/courses',$data);
        $this->load->view('college/layout/footer');
    }
    public function course($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->dept->getbyid($id);
        $this->load->view('college/layout/header');
        $this->load->view('college/course',$data);
        $this->load->view('college/layout/footer');
    }

    public function events()
    {
        $data['result'] = $this->event->lists();
        $this->load->view('college/layout/header');
        $this->load->view('college/events',$data);
        $this->load->view('college/layout/footer');
    }

    public function event($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->event->getbyid($id);
        $this->load->view('college/layout/header');
        $this->load->view('college/event',$data);
        $this->load->view('college/layout/footer');
    }

    public function teachers()
    {
        $data['result'] = $this->teacher->lists();
        $this->load->view('college/layout/header');
        $this->load->view('college/teachers',$data);
        $this->load->view('college/layout/footer');
    }
    public function teacher($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->teacher->getbyid($id);
        $this->load->view('college/layout/header');
        $this->load->view('college/teacher',$data);
        $this->load->view('college/layout/footer');
    }
    public function contact()
    {
        $this->load->view('college/layout/header');
        $this->load->view('college/contact');
        $this->load->view('college/layout/footer');
    }
   
}
