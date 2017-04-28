<?php



class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                
        }
    
        public function index($param)
        {
                
            $data['pics'] = $this->pics_model->get_pics($param);
                $data['title'] = $param;

                
                $this->load->view('pics/index', $data);
                
        }

       
    
}//end of pics controller