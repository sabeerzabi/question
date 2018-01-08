<?php
/**
 * Created by PhpStorm.
 * User: tech
 * Date: 15-Dec-17
 * Time: 10:36 AM
 */
   Class UserModel extends CI_Model {

       Public function __construct() {
           parent::__construct();
       }

       public static function add ($a, $b = 0, $c = 0){
           return $a + $b + $c;
       }


   }
?>