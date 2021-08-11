<?php
/**
 * Created by PhpStorm.
 * User: PHAN CHINH
 * Date: 04/08/2021
 * Time: 00:56
 */

class User extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    // hien thi danh sach giao dich cua website
    function index(){
        //lay tong so luong ta ca cac giao dich trong websit
        $total_rows = $this->user_model->get_total();
        $this->data['total_rows'] = $total_rows;

        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac giao dich tren website
        $config['base_url']   = admin_url('user/index'); //link hien thi ra danh sach giao dich
        $config['per_page']   = 10;//so luong giao dich hien thi tren 1 trang
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
        $id_user = $this->input->get('id');
        $id_user = intval($id_user);
        $input['where'] = array();
        if($id_user > 0)
        {
            $input['where']['id_user'] = $id_user;
        }


        //lay danh sach giao dich
        $list = $this->user_model->get_list($input);
        $this->data['list'] = $list;
        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/user/index';
        $this->load->view('admin/main', $this->data);
    }
    function view(){
        //lay id cua giao dịch ma ta muon xoa
        $id = $this->uri->rsegment('3');
        //lay thong tin cua giao dịch
        $info = $this->user_model->get_info($id);
        if(!$info)
        {
            return false;
        }

        $this->data['info']   = $info;
        // Tai file thanh phan
        $this->load->view('admin/user/view', $this->data);

    }
    function delete(){
        // lay ra id giao dich
        $id_user = $this->uri->rsegment('3');
        $this->_del($id_user);
        // thong bao xoa thanh cong
        $this->session->set_flashdata('message', 'Xóa thành công giao dịch này');
        redirect(admin_url('user'));

    }
    // xoa nhieu giao dich
    function delete_all(){
        $ids = $this->input->post('ids');
        foreach ($ids as $id_user){
            $this->_del($id_user);
        }

    }
    private function _del($id_user, $redirect = true){
        // lay ra thong tin giao dich
        $user = $this->user_model->get_info($id_user);
        if(!$user){
            // in ra thong bao loi
            $this->session->set_flashdata('message', 'Không tồn tại giao dịch này');
            if($redirect){
                redirect (admin_url('user'));
            }else{
                return false;
            }
        }

        // thuc hien xoa giao dich
        $this->user_model->delete($id_user);

    }


}