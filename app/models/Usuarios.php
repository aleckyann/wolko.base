<?php

class Usuarios extends CI_model
{

    public function getAll()
    {
        return $this->db->get('usuarios')->result_array();
    }

    public function getBy($data)
    {
        return @$this->db->get_where('usuarios', $data)->result_array()[0];
    }

    public function insert($data)
    {
        if($this->db->insert('usuarios', $data)) {
            return $this->db->get_where('usuarios', array('usuario_id' => $this->db->insert_id()))->result_array()[0];
        } else {
            return FALSE;
        }
    }

    public function update($data, $where)
    {
        return $this->db->update('usuarios', $data, $where);
    }

    public function delete($data)
    {
        return $this->db->get_where('usuarios', array('usuario_email' => $dados['usuario_email']))->result_array()[0];
    }


}
