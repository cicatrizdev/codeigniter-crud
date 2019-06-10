<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    function createData() 
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

    function getAllData() 
    {
        $query = $this->db->query('SELECT * FROM medico');
        return $query->result();
    }

    // function getAllSpecialization() 
    // {
    //     $query = $this->db->query('SELECT * FROM especializacao');
        
    //     return $query->row();
    // }

    function getData($id)
    {
        $query = $this->db->query('SELECT * FROM medico WHERE `id` = ' .$id);
        return $query->row();
    }

    function updateData($id)
    {
        $data = array (
            'name' => $this->input->post('name'),
            'crm' => $this->input->post('crm'),
            'phone' => $this->input->post('phone'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'specialization' => $this->input->post('specialization'),
        );

        $this->db->where('id', $id);
        $this->db->update('medico', $data);
    }

    function deleteData($id) 
    {
        $this->db->where('id', $id);
        $this->db->delete('medico');
    }
}
