<?php
/**
 * Created by PhpStorm.
 * User: PHAN CHINH
 * Date: 04/08/2021
 * Time: 09:15
 */

class Group extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('group_model');
    }
    function index(){
        // lay tong danh sach admin
        $total_rows = $this->group_model->get_total();
        $this->data['total_rows'] = $total_rows;
        // lay danh sach admin
        $group_list = $this->group_model->get_list();
        $this->data['list'] = $group_list;
        // load ra dong thong bao
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        // load view
        $this->data['temp'] = 'admin/group/index';
        $this->load->view('admin/main', $this->data);
    }
    function add(){
        // load form
        $this->load->library('form_validation');
        $this->load->helper('form');
        if($this->input->post()){
            $this->form_validation->set_rules('name_group','Chức danh','required|min_length[4]');
            if($this->form_validation->run()){
                $name = $this->input->post('name_group');
                $data = array(
                    'name_group' => $name,
                );
                // insert du lieu
                if($this->group_model->create($data)){
                    // thong bao them thanh cong
                    $this->session->set_flashdata('message', 'Thêm mới thành công');
                    redirect(admin_url('group'));
                }else{
                    $this->session->set_flashdata('message', 'Có lỗi khi thêm thành viên');
                }

            }
        }
        // load view admin
        $this->data['temp'] = 'admin/group/add';
        $this->load->view('admin/main', $this->data);
    }
    function edit(){
        // lay ra id thanh vien admin
        $id_group = $this->uri->rsegment('3');
        $id_group = intval($id_group);
        $group_info = $this->group_model->get_info($id_group);
        if(!$group_info){
            // in ra thong bao loi
            $this->session->set_flashdata('message', 'Không tồn tại chức danh này');
            redirect(admin_url('group'));
        }
        $this->data['group_info'] = $group_info;
        // load ra dong thong bao
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        // load ra thu vien validation
        $this->load->library('form_validation');
        $this->load->helper('form');
        if($this->input->post()){
            $this->form_validation->set_rules('name_group','Chức danh ','required|min_length[4]');
            if($this->form_validation->run()){
                $name = $this->input->post('name_group');
                $data = array(
                    'name_group' => $name,
                );

                // cap nhat co so du lieu
                if($this->group_model->update($id_group, $data)){
                    // tao roi noi dung thong bao
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Có lỗi khi cập nhật dữ liệu');
                }
                // chuyen toi trang index quan tri vien
                redirect(admin_url('group'));
            }
        }
        // load view
        $this->data['temp'] = 'admin/group/edit';
        $this->load->view('admin/main', $this->data);
    }
    function delete(){
        // lay ra id admin
        $id_group = $this->uri->rsegment('3');
        $this->_del($id_group);
        redirect(admin_url('group'));

    }
    function delete_all(){
        $ids = $this->input->post('ids');
        foreach ($ids as $id_group){
            $this->_del($id_group);
        }
    }
    function _del($id_group, $redirect = true){
        $id_group = intval($id_group);
        $group_info = $this->admin_model->get_info($id_group);
        if(!$group_info){
            // tao roi noi dung thong bao
            $this->session->set_flashdata('message', 'Không tồn tại group này');
            if($redirect) {
                redirect(admin_url('group'));
            }else{
                return false;
            }

        }
        // xoa du lieu
        if($this->group_model->delete($id_group)){
            // tao ra noi dung xoa thanh cong
            $this->session->set_flashdata('message','Xóa thành công');
        }
    }
}