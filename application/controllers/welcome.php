<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->database();
        $this->load->model('user_info');
        $this->load->helper('url');
        $this->load->library("pagination");
        $this->load->helper('form');
        // $this->load->library('session');
    }

    public function index() {

        $data['user_infos'] = $this->user_info->getAll();

        $config = array();
        $config["base_url"] = base_url();
        $config["total_rows"] = 100;
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data['users'] = $this->user_info->get_users($config["per_page"], $page);

        $this->pagination->initialize($config);

        $this->load->view('welcome_message', $data);
    }

	public function edit($id) {
        
        $data = $this->user_info->getDataById($id);

        echo $data[0]->name;
    }

    public function delete($id) {
        
        $this->user_info->delete($id);
    }

    public function update($id) {
        echo 'x';

        $data = array(
            'title' => $title,
            'name' => $name,
            'date' => $date
         );

         $this->user_info->update($id, $data);

    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->user_info->create();
    }
}