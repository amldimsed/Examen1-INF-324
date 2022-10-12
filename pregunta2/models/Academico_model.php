<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academico_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function personas()
	{
		$this->load->database();
        $query=$this->db->query("SELECT * FROM person");
        return $query->result();
	}

    public function persona($ci)
	{
		$this->load->database();
        $query=$this->db->query("SELECT * FROM person where ci='$ci'");
        return $query->result();
	}

}