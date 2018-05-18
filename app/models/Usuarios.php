<?php

class Usuarios extends CI_model
{

    private $tabela = 'usuarios';

    // Busca todos os usuários
    public function getAll()
    {
        $this->db->cache_on();
        return $this->db->get($this->tabela)->result();
    }

    // Busca usuário por $where
    public function getBy($where)
    {
        $this->db->cache_on();
        return $this->db->get_where($this->tabela, $where)->row_array();
    }

    // Insere um usuário
    public function insert($data)
    {
        if($this->db->insert($this->tabela, $data)) {
            return $this->db->get_where($this->tabela, array('usuario_id' => $this->db->insert_id()))->row_array();
        } else {
            return FALSE;
        }
    }

    // Atualiza um usuário
    public function update($data, $where)
    {
        return $this->db->update($this->tabela, $data, $where);
    }

    // remove um usuário
    public function delete($where)
    {
        return $this->db->delete($this->tabela, $where);
    }

}
