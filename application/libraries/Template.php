<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template
{

    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function load($template, $view, $data = [])
    {
        // Load the view into a variable
        $data['contents'] = $this->CI->load->view($view, $data, TRUE);

        // Load the main template and pass the view
        $this->CI->load->view($template, $data);
    }
}
