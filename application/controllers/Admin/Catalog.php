<?php
    class Catalog extends MY_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('catalog_model');
        }
        function index(){
            // gui bien temp
            $total = $this->catalog_model->get_total();
            $this->data['total'] = $total;
            // lay danh sach danh muc
            $input = array();
            $input['where'] = array('parent_id' => 0);
            $catalog_list = $this->catalog_model->get_list($input);
            foreach ($catalog_list as $row){
                $input['where'] = array('parent_id' => $row->id_catalog);
                $subs = $this->catalog_model->get_list($input);
                $row->subs = $subs;
            }

            $this->data['list'] = $catalog_list;



            // lay ra noi dung thong bao message
            $message = $this->session->flashdata('message');
            $this->data['message'] = $message;
            // load view
            $this->data['temp'] = 'admin/catalog/index';
            $this->load->view('admin/main', $this->data);
        }
        function add(){
            $input['where'] = array('parent_id' => 0);
            $catalog_list = $this->catalog_model->get_list($input);
            $this->data['list'] = $catalog_list;
            $this->load->library('form_validation');
            $this->load->helper('form');
            if($this->input->post()){
                $this->form_validation->set_rules('name','Tên sản phẩm bắt buộc nhập','required|min_length[4]');
                if($this->form_validation->run()){
                    $name = $this->input->post('name');
                    $color = $this->input->post('color');
                    //  up anh minh hoa san pham
                    $this->load->library('upload_library');
                    $upload_path = './upload/banners';
                    $upload_data = $this->upload_library->upload($upload_path, 'image_left');
                    $image_left = '';
                    if(isset($upload_data['file_name'])){
                        $image_left = $upload_data['file_name'];

                    }

                    $upload_data = $this->upload_library->upload($upload_path, 'image_right');
                    $image_right = '';
                    if(isset($upload_data['file_name'])){
                        $image_right = $upload_data['file_name'];

                    }
                    $upload_data = $this->upload_library->upload($upload_path, 'image_content');
                    $image_content = '';
                    if(isset($upload_data['file_name'])){
                        $image_content = $upload_data['file_name'];

                    }
                    $data = array(
                        'name' => $name,
                        'parent_id' => $this->input->post('parent_id_catalog'),
                        'image_left' => $image_left,
                        'image_right' => $image_right,
                        'image_content' => $image_content,
                        'color' => $color,
                    );
                    // insert du lieu
                    if($this->catalog_model->create($data)){
                        // neu them thanh cong
                        $this->session->set_flashdata('message', 'Thêm mới thành công danh muc');
                        redirect(admin_url('catalog'));
                    }else{
                        // in ra thong bao loi
                        $this->session->set_flashdata('message', 'Có lỗi khi thêm danh muc san pham');
                        redirect(admin_url('catalog'));
                    }

                }
            }
            // load view
            $this->data['temp'] = 'admin/catalog/add';
            $this->load->view('admin/main', $this->data);
        }
        function edit(){
            // lay ra id dan muc
            $id_catalog = $this->uri->rsegment('3');
            $catalog_list = $this->catalog_model->get_info($id_catalog);
            $this->data['catalog_list'] = $catalog_list;
            // load ra thu vien form
            $this->load->library('form_validation');
            $this->load->helper('form');
            // kiem tra xem du lieu post len
            if($this->input->post()){
                $this->form_validation->set_rules('name','Tên sản phẩm bắt buộc nhập','required|min_length[4]');
                if($this->form_validation->run()){
                    $name = $this->input->post('name');
                    $color = $this->input->post('color');
                    //  up anh minh hoa san pham
                    $this->load->library('upload_library');
                    $upload_path = './upload/banners';
                    $upload_data = $this->upload_library->upload($upload_path, 'image_left');
                    $image_left = '';
                    if(isset($upload_data['file_name'])){
                        $image_left = $upload_data['file_name'];

                    }

                    $upload_data = $this->upload_library->upload($upload_path, 'image_right');
                    $image_right = '';
                    if(isset($upload_data['file_name'])){
                        $image_right = $upload_data['file_name'];

                    }
                    $upload_data = $this->upload_library->upload($upload_path, 'image_content');
                    $image_content = '';
                    if(isset($upload_data['file_name'])){
                        $image_content = $upload_data['file_name'];

                    }
                    $data = array(
                        'name' => $name,
                        'color' => $color,
                        );
                    if($image_left != ''){
                        $image_link_corner = $catalog_list->image_left;
                        if(file_exists($image_link_corner)){
                            unlink('./upload/banners/'.$image_link_corner);
                        }
                        $data['image_left'] = $image_left;

                    }
                    if($image_right != ''){
                        $image_link_corner = $catalog_list->image_right;
                        if(file_exists($image_link_corner)){
                            unlink('./upload/banners/'.$image_link_corner);
                        }
                        $data['image_right'] = $image_right;

                    }
                    if($image_content != ''){
                        $image_link_corner = $catalog_list->image_content;
                        if(file_exists($image_link_corner)){
                            unlink('./upload/banners/'.$image_link_corner);
                        }
                        $data['image_content'] = $image_content;

                    }
                    // insert du lieu
                    if($this->catalog_model->update($id_catalog, $data)){
                        // neu them thanh cong
                        $this->session->set_flashdata('message', 'Cập nhật thành công danh muc');
                        redirect(admin_url('catalog'));
                    }else{
                        // in ra thong bao loi
                        $this->session->set_flashdata('message', 'Có lỗi khi cập nhật');
                        redirect(admin_url('catalog'));
                    }

                }
            }
            // load view
            $this->data['temp'] = 'admin/catalog/edit';
            $this->load->view('admin/main', $this->data);
        }
        function delete(){
            // lay ra id san pham
            $id_catalog = $this->uri->rsegment('3');
            $this->_del($id_catalog);
            // redriect
            $this->session->set_flashdata('message', 'Xóa thành công danh mục sản phẩm');
            redirect(admin_url('catalog'));

        }
        function delete_all(){
            $ids = $this->input->post('ids');
            foreach ($ids as $id_catalog){
                $this->_del($id_catalog);
            }

        }
        private function _del($id_catalog, $redirect = true){
            // lay ra thong tin san pham
            $catalog = $this->catalog_model->get_info($id_catalog);
            if(!$catalog){
                // in ra thong bao loi
                $this->session->set_flashdata('message', 'Không tồn tại sản phẩm này');
                if($redirect){
                    redirect (admin_url('catalog'));
                }else{
                    return false;
                }
            }
            $image_left = './upload/banners/'.$catalog->image_left;
            if(file_exists($image_left)){
                unlink($image_left);
            }
            $image_right = './upload/banners/'.$catalog->image_right;
            if(file_exists($image_right)){
                unlink($image_right);
            }
            $image_content = './upload/banners/'.$catalog->image_content;
            if(file_exists($image_content)){
                unlink($image_content);
            }

            // kiem tra xem danh muc nay co san pham hay ko
            $this->load->model('product_model');
            $catalog_info = $this->catalog_model->get_info_rule(array('parent_id' => $id_catalog), 'id_catalog');
            if($catalog_info){
                $this->session->set_flashdata('message', 'Danh mục ' .$catalog->name. ' có chứa sản phẩm, bạn cần xóa hết các sản phẩm trước khi xóa danh mục');
                if($redirect) {
                    redirect(admin_url('catalog'));
                }else{
                    return false;
                }
            }


            // kiem tra xem danh muc nay co san pham hay ko
            $this->load->model('product_model');
            $product = $this->product_model->get_info_rule(array('id_catalog' => $id_catalog), 'id_product');
            if($product){
                $this->session->set_flashdata('message', 'Danh mục ' .$catalog->name. ' có chứa sản phẩm, bạn cần xóa hết các sản phẩm trước khi xóa danh mục');
                if($redirect) {
                    redirect(admin_url('catalog'));
                }else{
                    return false;
                }
            }

            // thuc hien xoa san pham
            $this->catalog_model->delete($id_catalog);

        }
    }
?>