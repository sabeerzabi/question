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
           $template = '
           <h1>Test Template</h1>
                <h3>Hello, {firstname} {lastname}</h3>
            <ol type="1">
            {degrees}
                <li>.{degree}</li> 
            {/degrees}
            </ol>';
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
       /* Using DataBase */
       public function toDb(){
           //$this->load->database(); //Mannal connect
           $data = array(
               'name' => 'Virat'
           );

           $this->db->insert("stud", $data);
       }
       public function updateDb(){
           $data = array(
               'name' => 'sabeer zabi'
           );

           $this->db->set($data);
           $this->db->where("id", 1);
           $this->db->update("stud", $data);

       }
       public function deleteDb(){
           $this->db->delete("stud", "id = 3");
           //delete([$table = ''[, $where = ''[, $limit = NULL[, $reset_data = TRUE]]]])
       }

       public function fromDb(){
           //$this->db->where("id", 1);
           $this->db->like("name", "%b%");
           $query = $this->db->get("stud");
           $data['records'] = $query->result();
           print_r($data);
           $this->db->close();// for closing db
//           get([$table = ''[, $limit = NULL[, $offset = NULL]]])
       }




   }
