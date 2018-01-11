<?php
class AdminModel extends CI_Model {

    public  function display_page($page,$pageData = []){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            $pageData['title'] = "404 Error";
            $page = 'page_404';
        }
        else{

            $pageData['title'] = isset($pageData['title'])?$pageData['title']:ucfirst($page);
        }
        $this->load->view("template/header_page",$pageData);
        $this->load->view("pages/".$page,$pageData);
        $this->load->view("template/footer_page",$pageData);
    }

    public function display_login($page,$pageData = []){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            $pageData['title'] = "404 Error";
            $page = 'page_404';
            // show_404();
        }
        else{
            $pageData['title'] = isset($pageData['title'])?$pageData['title']:ucfirst($page);
        }
        $this->load->view("template/header_login",$pageData);
        $this->load->view("pages/".$page,$pageData);
        $this->load->view("template/footer_login",$pageData);
    }

}
?>