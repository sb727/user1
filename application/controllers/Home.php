<?php
/**
 * Created by PhpStorm.
 * User: simba
 * Date: 3/14/2016
 * Time: 10:31 PM
 */
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Home extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('Hotel','',TRUE);

            $sess = $this->session->userdata('logged_in');
            //$this->session->unset_userdata($sess);
            if($sess == FALSE) redirect('Login_ctrl', 'location');
        }

        function index()
        {
            $data['hotels'] = $this->Hotel->getHotellist();
            $this->load->view('templates/header.php');
            $this->load->view('templates/middle.php', $data);
            $this->load->view('templates/footer.php');
        }

        public function searchHotel() {
            $where = $_REQUEST['where'];
            $hotelsearch_result = '';
            $hotels = $this->Hotel->searchHotel($where);
            if (isset($hotels) ) {
                foreach ($hotels->result_array() as $hotel) {
                    $hotelsearch_result.= "<div class='png col-md-3 col-sm-6'>
                                <a href='index.php?hotel=".$hotel['id']."' target='_blank'>
                                <img src=". $hotel['imageurl'].">
                                </a>
                                <p class='country'>". $hotel['hotelname']."</p>
                                <p class='city'>". $hotel['description']."</p>
                                </div>";
                }
                if(isset($_GET['hotel'])) {
                    var_dump($_GET['hotel']);
                    exit;
                    $data['root_url'] = base_url();
                    $data['hotel'] = $this->Hotel->getHotelDetail($_GET['hotel']);
                    $this->load->view('pages/details',$data);
                }

            }
            else {
                $hotelsearch_result = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>sorry! There isn't search result</strong>";

            }

            echo  $hotelsearch_result;

        }

        public function detail() {
            var_dump($id);
            exit;
            $data['root_url'] = base_url();
            $data['hotel'] = $this->Hotel->getHotelDetail($id);
            $this->load->view('pages/details',$data);
        }
    }
?>