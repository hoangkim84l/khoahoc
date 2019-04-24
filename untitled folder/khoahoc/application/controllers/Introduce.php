<?php if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
class Introduce extends MY_Controller
{
   /*
   * Ham khi khoi tao
   */
   public function __construct()
   {
       parent::__construct();
       $this->load->model('introduce_model');
   }
   
  
   /*
    * Trang dang danh sách bài viết
    */
   public function index()
   {
    $info = $this->introduce_model->get_info(1);
    if (!$info)
    {
        $this->session->set_flashdata('flash_message', 'Không tồn tại bài viết này');
        redirect();
    }
    $this->data['info'] = $info;
    
    // Hien thi view
    $this->data['temp'] = 'site/introduce/index';
    $this->load->view('site/layout', $this->data);
   }
   
   
}

