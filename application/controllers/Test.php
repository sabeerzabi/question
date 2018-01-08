<?php

/**
 * Created by PhpStorm.
 * User: tech
 * Date: 15-Dec-17
 * Time: 9:52 AM
 */
   class Test extends CI_Controller {

       public function index() {
           echo "Hello World!";
       }

       public function hello() {
           echo "This is hello function.";
       }
       /* Redirect*/
       public function redirect() {
           $this->load->view('welcome_message');
       }
       /* Using Model */
       public function add(){
           $this->load->model('UserModel');
           echo $this->UserModel->add(2,3,4);
       }
       /* Auto-loading Models*/
       public function sub(){
           echo $this->SubModel->sub(4,3,2);
       }

       /* Template*/
       public function template(){
           $this->load->library('parser');
           /*$data = array(
               'blog_title' => 'My Blog Title',
               'blog_heading' => 'My Blog Heading'
           );

           $this->parser->parse('blog_template', $data);*/
           $template = 'Hello, {firstname} {lastname} ({degrees}{degree} {/degrees})';
           $data = array(
               'degree' => 'Mr',
               'firstname' => 'John',
               'lastname' => 'Doe',
               'degrees' => array(
                   array('degree' => 'BSc'),
                   array('degree' => 'PhD')
               )
           );
           $this->parser->parse_string($template, $data);
       }

   }
