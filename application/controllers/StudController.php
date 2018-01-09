<?php
class StudController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function index() {
        $query = $this->db->get("stud");
        $data['records'] = $query->result();

        $this->load->helper('url');
        $this->load->view('Stud_view',$data);
    }

    public function add_student_view() {
        $this->load->helper('form');
        $this->load->view('Stud_add');
    }

    public function add_student() {
        $this->load->model('Stud_Model');

        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name')
        );

        $this->Stud_Model->insert($data);

        $query = $this->db->get("stud");
        $data['records'] = $query->result();
        $this->load->view('Stud_view',$data);
    }

    public function update_student_view() {
        $this->load->helper('form');
        $id = $this->uri->segment('3');
        $query = $this->db->get_where("stud",array("id"=>$id));
        $data['records'] = $query->result();
        $data['old_id'] = $id;
        $this->load->view('Stud_edit',$data);
    }

    public function update_student(){
        $this->load->model('Stud_Model');

        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name')
        );

        $old_id = $this->input->post('old_id');
        $this->Stud_Model->update($data,$old_id);

        $query = $this->db->get("stud");
        $data['records'] = $query->result();
        $this->load->view('Stud_view',$data);
    }

    public function delete_student() {
        $this->load->model('Stud_Model');
        $id = $this->uri->segment('3');
        $this->Stud_Model->delete($id);
        $query = $this->db->get("stud");
        $data['records'] = $query->result();
        $this->load->view('Stud_view',$data);
    }
}
?>