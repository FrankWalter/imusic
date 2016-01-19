<?php
class Getdata_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function getHottestSingers() {
    	$query = $this->db->query("select count(record.song_id),singer_id,singer.name as name,note 
          				  from record,song,singer
          				  where song.id=record.song_id and song.singer_id=singer.id
          				  group by song.singer_id
          				  limit 3
          	");
    	return $query->row_array();
    }
}