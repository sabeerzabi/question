<?php

/**
 * Created by PhpStorm.
 * User: tech
 * Date: 10-01-18
 * Time: 11:52 AM
 */
   class cuserror extends CI_Controller {

       public function index() {
           self::show_404();
       }
       public function show_404() {
           $pageData['title'] = "404 Error";
           self::display_page('page_404',$pageData);
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
