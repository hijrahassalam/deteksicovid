<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function index()
    {
        // $url = 'https://apicovid19indonesia-v2.vercel.app/api/indonesia';
        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_HTTPGET, true);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response_json = curl_exec($ch);
        // curl_close($ch);
        // $response = json_decode($response_json, true);

        $data_covid = $this->api('https://apicovid19indonesia-v2.vercel.app/api/indonesia');
        $data_vaksin = $this->api('https://vaksincovid19-api.vercel.app/api/vaksin');

        $data['positif'] = $data_covid['positif'];
        $data['sembuh'] = $data_covid['sembuh'];
        $data['meninggal'] = $data_covid['meninggal'];
        //$data['dirawat'] = $data_covid['dirawat'];

        $data['totalsasaran'] = $data_vaksin['totalsasaran'];
        $data['vaksinasi1'] = $data_vaksin['vaksinasi1'];
        $data['vaksinasi2'] = $data_vaksin['vaksinasi2'];

        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function api($webapi)
    {
        $url = $webapi;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        return $response;
    }
}
