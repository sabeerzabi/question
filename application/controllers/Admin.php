<?php

/**
 * Created by PhpStorm.
 * User: tech
 * Date: 10-01-18
 * Time: 11:52 AM
 */
   class Admin extends CI_Controller {

       public function index() {
           self::view();
       }
       public function view($page = 'home') {
           $this->load->helper('url');
           if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
               $pageData['title'] = "404 Error";
               self::display_page('page_404',$pageData);
              // show_404();
           }
           else{

               $pageData['title']= ucfirst($page);
               self::display_page($page,$pageData);
           }
       }

       private function display_page($page,$pageData){
           $this->load->view("template/header_page",$pageData);
           $this->load->view("pages/".$page,$pageData);
           $this->load->view("template/footer_page",$pageData);
       }

       private function display_login($page,$pageData){
           $this->load->view("template/header_login",$pageData);
           $this->load->view("pages/".$page,$pageData);
           $this->load->view("template/footer_login",$pageData);
       }





   }
