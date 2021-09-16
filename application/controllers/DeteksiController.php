<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DeteksiController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function deteksi_ct()
    {
        $this->load->view('templates/deteksi/header');
        $this->load->view('deteksi/deteksi_ct');
        $this->load->view('templates/deteksi/footer');
    }

    public function deteksi_xray()
    {
        $this->load->view('templates/deteksi/header');
        $this->load->view('deteksi/deteksi_xray');
        $this->load->view('templates/deteksi/footer');
    }
}
