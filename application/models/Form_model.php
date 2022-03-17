<?php
class Form_model extends CI_Model
{
    /*View*/
    function display_records()
    {
        $query = $this->db->get("lid");
        return $query->result();
    }
}
