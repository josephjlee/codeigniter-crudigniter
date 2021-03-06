<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Produk_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get produk by produk_id
     */
    function get_produk($produk_id)
    {
        return $this->db->get_where('produk',array('produk_id'=>$produk_id))->row_array();
    }
    
    /*
     * Get all produk count
     */
    function get_all_produk_count()
    {
        $this->db->from('produk');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all produk
     */
    function get_all_produk($params = array())
    {
        $this->db->order_by('produk_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('produk')->result_array();
    }
        
    /*
     * function to add new produk
     */
    function add_produk($params)
    {
        $this->db->insert('produk',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update produk
     */
    function update_produk($produk_id,$params)
    {
        $this->db->where('produk_id',$produk_id);
        return $this->db->update('produk',$params);
    }
    
    /*
     * function to delete produk
     */
    function delete_produk($produk_id)
    {
        return $this->db->delete('produk',array('produk_id'=>$produk_id));
    }
}
