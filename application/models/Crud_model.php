<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function createData() 
    {
        $data = array (
            'name' => $this->input->post('name'),
            'crm' => $this->input->post('crm'),
            'phone' => $this->input->post('phone'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'specialization' => $this->input->post('specialization'),
        );

        $this->db->insert('medico', $data);
    }

    public function getAllData() 
    {
        $query = $this->db->query('SELECT * FROM medico');
        return $query->result();
    }

    public function getAllSpecialization() 
    {
        $query2 = $this->db->query('SELECT * FROM especializacao');
        $result2 = $query2->result();
        return $result2;
    }
}
