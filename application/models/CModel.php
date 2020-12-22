<?php


class  CModel extends CI_Model 
{

	private $tabel ='tabel_c';

	public function semuaData()

   {

         return $this->db->get($this->tabel)->result();
    }
}