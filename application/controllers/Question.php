<?php

/**
 * Created by PhpStorm.
 * User: tech
 * Date: 10-01-18
 * Time: 11:52 AM
 */
   class Question extends CI_Controller {
      public $page = '';
       public function index() {
           global $page;
          // self::view();
           $this->AdminModel->display_page($page);
       }

       public function qlist() {
           global $page;
          // self::view();
           $this->AdminModel->display_page($page);
       }

       public function add() {
           global $page;
          // self::view();
           $this->AdminModel->display_page("question_add");

       }

       public function view($page = 'home') {
           switch ($page) {

               default :
                   self::display_page($page);
           }
       }

   }
