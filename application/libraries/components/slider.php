<?php

Class slider{
	var $CI = ''; 
    function __construct()
    {
        $this->CI = & get_instance();
    }

	function load(){
		// $this->load->model('slide_model');
		// $slide_list = $this->slide_model->get_list();
		// $this->data['slide_list'] = $slide_list;
		// $this->load->view('site/slide', $this->data);
	}
}


?>