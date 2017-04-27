<?php



class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                //$this->load->model('pics_model');
                
        }
    
        public function index($param)
        {
                
            //$data['news'] = $this->news_model->get_news();
                $data['title'] = $param;

                
                $this->load->view('pics/index', $data);
                
        }

       
    
}//end of news controller