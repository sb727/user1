<?php
/**
 * Created by PhpStorm.
 * User: simba
 * Date: 3/15/2016
 * Time: 12:09 AM
 */
Class Hotel extends CI_Model
{
    function getHotellist()
    {
        $this -> db -> select('id, hotelname, description, imageurl');
        $this -> db -> from('hotel');
        //$this -> db -> limit(1);
        $query = $this -> db -> get();
        if($query -> num_rows() > 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    function searchHotel($where) {
        $this -> db -> select('id, hotelname, description, imageurl');
        $this -> db -> from('hotel');
        $this -> db -> where('hotelname', $where);
        //$query = $this -> db -> get();
        $sql = 'select * from hotel where hotelname like "%'.$where.'%";';
        $query = $this->db->query($sql);

        return $query;
    }
    public function getHotelDetail($id)
    {
        $query = $this->db->get_where('hotel', array('id' => $id));
        return $query->row_array();
        $sql = 'select * from hotel where id='.$id;
        $query = $this->db->query($sql);

        $row = $query->row_array();

        return $row;
    }
}
?>