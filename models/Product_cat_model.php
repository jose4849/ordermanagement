<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Product_cat_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get product_cat by pcid
     */
    function get_product_cat($pcid)
    {
        return $this->db->get_where('product_cat',array('pcid'=>$pcid))->row_array();
    }
        
    /*
     * Get all product_cat
     */
    function get_all_product_cat()
    {
        $this->db->order_by('pcid', 'desc');
        return $this->db->get('product_cat')->result_array();
    }
        
    /*
     * function to add new product_cat
     */
    function add_product_cat($params)
    {
        $this->db->insert('product_cat',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update product_cat
     */
    function update_product_cat($pcid,$params)
    {
        $this->db->where('pcid',$pcid);
        return $this->db->update('product_cat',$params);
    }
    
    /*
     * function to delete product_cat
     */
    function delete_product_cat($pcid)
    {
        return $this->db->delete('product_cat',array('pcid'=>$pcid));
    }
}