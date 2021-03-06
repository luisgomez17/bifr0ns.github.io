<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Egresados_model extends CI_Model {
    // ------------------------------------------------------------------------------
    public function __construct()
    {
        parent::__construct();
    }
    
    // ------------------------------------------------------------------------------    
    public function count_egresados()
    {
        return $this->db->count_all('agresados');
    }
    // ------------------------------------------------------------------------------    
    public function get_all_news($limit, $offset)
    {
        $data = array();
        $this->db->select('*');
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('news');
        if ($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }
    // ------------------------------------------------------------------------------    
    public function set_news()
    {
        $title = html_purify($this->input->post('title'));
        $text2html = html_purify($this->markdown->parse($this->input->post('text')));
        $excerpt2html = html_purify($this->markdown->parse($this->input->post('excerpt')));
        $created = date("Y-m-d H:i:s");
        $slug = html_purify($this->input->post('title'));        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        $data = array(
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $this->input->post('excerpt'),
            'excerpt2html' => $excerpt2html,
            'text' => $this->input->post('text'),
            'text2html' => $text2html,
            'created' => $created
        );
        return $this->db->insert('news', $data);
    }
    // ------------------------------------------------------------------------------    
    public function update_news()
    {
        $title = html_purify($this->input->post('title'));
        $text2html = html_purify($this->markdown->parse($this->input->post('text')));
        $excerpt2html = html_purify($this->markdown->parse($this->input->post('excerpt')));
        $updated = date("Y-m-d H:i:s");
        $slug = html_purify(url_title($this->input->post('title'), 'dash', TRUE));
        $data = array(
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $this->input->post('excerpt'),
            'excerpt2html' => $excerpt2html,
            'text' => $this->input->post('text'),
            'text2html' => $text2html,
            'updated' => $updated
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('news', $data);
    }
    // ------------------------------------------------------------------------------    
    public function delete_news($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('news');
    }
    // ------------------------------------------------------------------------------    
}