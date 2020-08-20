<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContratoModel extends CI_Model
{
    public $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = "contratos";
    }

    /*
    * create
    */
    public function create($dados)
    {
        $this->db->insert($this->table, $dados);
        return $this->db->insert_id();
    }

    public function createAnexoContrato($anexo)
    {
        $this->db->insert('contratos_anexos', $anexo);
    }

    /*
    * read
    */

    public function readById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function readTiposContrato()
    {
        $this->db->select('*');
        return $this->db->get('tipos_contrato')->result();
    }

    /*
     * delete
     */

    public function delete($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }

    public function deleteImg($id)
    {
        return $this->db->delete('anuncio_imagens', ['anuncioid' => $id]);
    }
}
