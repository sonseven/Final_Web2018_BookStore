<?php 

Class Order extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        //load ra file model
        $this->load->model('order_model');
    }
    
    /*
     * Hien thi danh sach don hang
     */
    function index()
    {
        //lay tong so luong ta ca cac don hang trong website
        $total_rows = $this->order_model->get_total();
        $this->data['total_rows'] = $total_rows;
        
        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac don hang tren website
        $config['base_url']   = admin_url('order/index'); //link hien thi ra danh sach don hang
        $config['per_page']   = 5;//so luong don hang hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(4);
        $segment = intval($segment);
        
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        
        //kiem tra co thuc hien loc du lieu hay khong
        $id = $this->input->get('id');
        $id = intval($id);
        $input['where'] = array();
        if($id > 0)
        {
            $input['where']['id'] = $id;
        }
        
        //lay danh sach san pham
        $list = $this->order_model->get_list($input);
        $this->data['list'] = $list;
        
        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        
        //load view
        $this->data['temp'] = 'admin/order/index';
        $this->load->view('admin/main', $this->data);
    }
    /*
     * Xoa du lieu
     */
    function del()
    {
        $id = $this->uri->rsegment(3);
        $this->_del($id);
        
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'không tồn tại san pham này');
        redirect(admin_url('order'));
    }
    
    /*
     * Xóa nhiều san pham
     */
    function delete_all()
    {
        $ids = $this->input->post('ids');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
    }
    
    /*
     *Xoa san pham
     */
    private function _del($id)
    {
        $order = $this->order_model->get_info($id);
        if(!$order)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại san pham này');
            redirect(admin_url('order'));
        }
        //thuc hien xoa san pham
        $this->order_model->delete($id);
    }
}
?>