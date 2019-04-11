<?php
Class Home extends MY_Controller
{
	function index()
	{
	    //lay danh sach slide
		$this->load->model('slide_model');
		$slide_list = $this->slide_model->get_list();
		$this->data['slide_list'] = $slide_list;
		
	    //Dự án mới
		$this->load->model('service_model');
		$input = array();
		$input['limit'] = array(2, 0);	    
		$input['order'] = array('count_view', 'DESC');
		$maxView = $this->service_model->get_list($input);
		$this->data['maxView']  = $maxView;
		

		  //Bài viết mới
		$this->load->model('news_model');
		$input = array();
		$input['limit'] = array(2, 0);	    
		$input['order'] = array('count_view', 'DESC');
		$maxViewNews = $this->news_model->get_list($input);
		$this->data['maxViewNews']  = $maxViewNews;
		  //Bài viết mới được setup ra trang chủ
		$this->load->model('news_model');
		$input = array();
		$input['where'] = array('is_home' => 0);
		$input['order'] = array('id', 'DESC');
		$input['limit'] = array(4, 0);
		$isHomeNews = $this->news_model->get_list($input);
		$this->data['isHomeNews']  = $isHomeNews;
		
		  //lay noi dung gioi thieu web
		$this->load->model('introduce_model');
		$info = $this->introduce_model->get_info(1);
		$this->data['info'] = $info;
		

		  //set cac tap luat cho cac the input
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		  //load file model
		$this->load->model('contact_model');
		$this->form_validation->set_rules('email', 'Địa chỉ email', 'required|valid_email');
		$this->form_validation->set_rules('name', 'Họ tên', 'required');
		$this->form_validation->set_rules('phone', 'Số điện thoại', 'required|numeric');
		$this->form_validation->set_rules('address', 'Địa chỉ', 'required');
		$this->form_validation->set_rules('content', 'Nội dung', 'required');
		
		if($this->form_validation->run())
		{
			   // Luu vao bảng contact
			$data = array();
			$data['email']			= $this->input->post('email');
			$data['name']			= $this->input->post('name');
			$data['phone']			= $this->input->post('phone');
			$data['address']		= $this->input->post('address');
			$data['content']		= $this->input->post('content');
			$data['created'] 		= now();
			$this->contact_model->create($data);
			$this->session->set_flashdata('message', 'Liên hệ thành công');
			 redirect();//chuyen toi trang chu
			}
			
		//lay nội dung của biến message
			$message = $this->session->flashdata('message');
			$this->data['message'] = $message;
			
			$this->data['temp'] = 'site/home/index';
			$this->load->view('site/layout', $this->data);
		}
	}