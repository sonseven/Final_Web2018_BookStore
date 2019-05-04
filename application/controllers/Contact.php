<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
Class Contact extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        //load file model
        $this->load->model('contact_model');
    }
    
    /*
     * trang dang ki thanh vien
     */
    public function add()
    {
        if($this->input->post())
        {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('name', 'Họ và tên', 'required');
            $this->form_validation->set_rules('phone', 'Số điện thoại', 'required|numeric');
            $this->form_validation->set_rules('address', 'Địa chỉ', 'required');
            $this->form_validation->set_rules('title', 'Tiêu đề', 'required');
            $this->form_validation->set_rules('content', 'Nội dung', 'required');
    
                if($this->form_validation->run())
                {
                    //luu vao bang contact                
                    $data = array();
                    $data['name']     = $this->input->post('name');              
                    $data['email']     = $this->input->post('email');
                    $data['address']     = $this->input->post('address');           
                    $data['title']     = $this->input->post('title');
                    $data['content']     = $this->input->post('content');
                    $data['phone']     = $this->input->post('phone');
                    $data['created']     = now();
    
    
                    if($this->contact_model->create($data))
                    {
                        //tạo ra nội dung thông báo
                        $this->session->set_flashdata('message', 'Liên hệ thành công');
                    }
                    redirect(); //chuyen toi trang chu
                }
        }   
            //load view
            $this->data['temp'] = 'site/contact/add';
            $this->load->view('site/layout', $this->data);
    }
}
?>