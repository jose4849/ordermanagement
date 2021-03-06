<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by userid
     */
    function get_user($userid)
    {
        return $this->db->get_where('user',array('userid'=>$userid))->row_array();
    }
        
    /*
     * Get all user
     */
    function get_all_user()
    {
        $this->db->order_by('userid', 'desc');
        return $this->db->get('user')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($userid,$params)
    {
        $this->db->where('userid',$userid);
        return $this->db->update('user',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($userid)
    {
        return $this->db->delete('user',array('userid'=>$userid));
    }
}
