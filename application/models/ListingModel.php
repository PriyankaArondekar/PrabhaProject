<?php

class listingModel extends CI_Model
{
	
    //function all listing
    function all_listing()  
    {     
      $this->db->select('*');
      $this->db->from('tq_listing');
      $query = $this->db->get();
      return $query->result();
    }

    //function all category
    function all_category()  
    {     
      $this->db->select('tq_category.category, COUNT(tq_listing.id) as total,tq_listing.categoryId');
      $this->db->from('tq_listing');
      $this->db->join('tq_category', 'tq_category.categoryid = tq_listing.categoryId');
      $this->db->group_by('tq_listing.categoryId');
      $query = $this->db->get();
      return $query->result();
    }

    //function to filter category by 
    function filter_category_listing($cat)  
    {     
      $this->db->select('*');
      $this->db->from('tq_listing');
      $this->db->where('categoryId',$cat);
      $query = $this->db->get();
      return $query->result();
    }

    //function to filter city by 
    function filter_city_listing($city)  
    {     
      $this->db->select('*');
      $this->db->from('tq_listing');
      $this->db->where('city',$city);
      $query = $this->db->get();
      return $query->result();
    }

    //function to fetch top cities 
    function top_cities()  
    {     
      $this->db->select('tq_city.city, tq_city.cityid');
      $this->db->from('tq_listing');
      $this->db->join('tq_city', 'tq_city.cityid = tq_listing.city');
      $this->db->group_by('tq_listing.city');
      $this->db->order_by('tq_listing.city', 'desc'); 
      $query = $this->db->get();
      return $query->result();
    }


   
  
}
?>
