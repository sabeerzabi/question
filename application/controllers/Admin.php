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
           switch ($page) {

               default :

                   $this->AdminModel->display_page($page);
           }
       }


       private function display_page($page,$pageData = []){
           if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
               $pageData['title'] = "404 Error";
               $page = 'page_404';
           }
           else{

               $pageData['title']= ucfirst($page);
           }
           $this->load->view("template/header_page",$pageData);
           $this->load->view("pages/".$page,$pageData);
           $this->load->view("template/footer_page",$pageData);
       }

       private function display_login($page,$pageData = []){
           if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
               $pageData['title'] = "404 Error";
               $page = 'page_404';
               // show_404();
           }
           else{
               $pageData['title']= ucfirst($page);
           }
           $this->load->view("template/header_login",$pageData);
           $this->load->view("pages/".$page,$pageData);
           $this->load->view("template/footer_login",$pageData);
       }





   }
