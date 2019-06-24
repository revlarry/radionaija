<?php


class Broadcasts_model extends CI_model
{
    public function add_broadcast($data)
    {
        $result = $this->db->insert('broadcasts', $data);
        if (!$result) {
            $this->session->set_flashdata('saved', 'Error! Data NOT saved!');
        } else {
            $this->session->set_flashdata('saved', 'Data successfully saved!');
        }
    }

    public function save_broadcast(
        $data)
    {
        $this->db->where('id', $data['id']);

        $result = $this->db->update('broadcasts', $data);
        if (!$result) {
            $this->session->set_flashdata('saved', 'Error! Data NOT saved!');
        } else {
            $this->session->set_flashdata('saved', 'Data successfully saved!');
        }
    }

    public function edit_broadcast($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('broadcasts');

        return $query->row();
    }

    public function get_segment_id($segment_id)
    {  // This function obtains $segment_id
        // $segment_id ='SOC';
        $this->db->where('segment', $segment_id);
        $query = $this->db->get('broadcasts');

        return $query->row();
    }

    public function get_segment($segment_id)
    {
        // $segment_id ='SOC';
        if (html_escape($segment_id) != 'all') {
            $this->db->where('segment', $segment_id);
        }
        $query = $this->db->get('broadcasts');

        return $query->result();
    }

    public function play_data($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('broadcasts');

        return $query->row();
    }

    public function search_data($data)
    {
        $sql = "select * from broadcasts where title like '%".$data."%' "."or descrip like '%".$data."%' "."or guests like '%".$data."%' "."or hosts like '%".$data."%'";
        $result = $this->db->query($sql);

        return $result;
    }

    public function segmentName($segmentId)
    {
        $segments = array(
                'HEA' => 'Health',
                'SOC' => 'Social',
                'POL' => 'Political',
                'BUS' => 'BUSINESS',
                'YOU' => 'YOUTH',
                'LEG' => 'LEGAL',
                'EDU' => 'EDUCATIONAL',
                'PAS' => 'PASTORAL',
                'EVE' => 'EVENTS',
            );

        return $this->findSegmentNameForId($segmentId, $segments);

        // die($segmentName);
    }

    private function findSegmentNameForId($segmentId, $allSegments)
    {
        foreach ($allSegments as $segment) {
            $segment = strtoupper($segment);
            $segmentId = strtoupper($segmentId);
            $segmentName = strchr($segment, ($segmentId));
            if ($segmentName) {
                return $segmentName;
            }
            //echo $segmentName.'<br>';
        }

        throw \Exception('Segment not found');
    }

    public function allrows()
    { 
        //$this->db->where('segment', $segment_id);
        $query = $this->db->get('broadcasts');

        //die("<h1>".$query->num_rows()."</h1>");
        return $query->num_rows();
    }

    public function audiolink($data)
    {
        // $sql = "select * from broadcasts where title like '%".$data."%' ". "or descrip like '%".$data."%' " . "or guests like '%".$data."%' ". "or hosts like '%".$data."%'";
        // $result =$this->db->query($sql);

        return $audiolink;
    }
}
