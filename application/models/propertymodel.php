<?php
class propertymodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}
	
	public function insertDetails($data){
		$this->db->insert('property',$data);
		$insertId = $this->db->insert_id();
   		return  $insertId;
	}
	
	public function updateDetails($data){
		$propId = $data['id'];
		$this->db->where('id',$propId);
		$this->db->update('property',$data);
		//$id = $this->db->insert_id();
		$query = $this->db->query("SELECT category FROM property WHERE id='$propId'"); 
		return $query->row();
	}
	
	public function getCategory($propertyId){
		//$this->db->where('id', $propertyId);
		$query = $this->db->query("SELECT category FROM property WHERE id='$propertyId'"); 
		return $query->row();
	}
	
	public function getDetails($propertyId){
		$query = $this->db->query("select tb.*,atb.sub_category as sub_category_name from property as tb
    	left join prop_sub_category as atb on atb.category_id = tb.category  
      	where tb.id= '$propertyId'");
	  return $query->row_array();
		//$this->db->where('id', $propertyId);
	    //return $this->db->get('property')->row_array();
	}
	
	public function updatePropDetails($data,$propId){
		$this->db->where('id',$propId);
		$this->db->update('property',$data);
		//$insertId = $this->db->insert_id();
   		//return  $insertId;
	}
	
	/*public function getProperties($limit = '', $start = ''){
		$this->db->limit($limit, $start);
		$query = $this->db->query("select p.*,c.category as category_name,sc.sub_category as sub_category_name from property as p left join category as c on c.id = p.category left join prop_sub_category sc ON sc.id = p.sub_category where p.status= 1");
		return $query->result_array();
	}*/
	
	
	/*public function getProperties($limit=0, $start=0, $sortField = '')
	{
		$query = "(SELECT p.*,c.category as category_name,sc.sub_category as sub_category_name ";
		$query = $query."FROM property as p ";
		$query = $query."Left join category as c ";
		$query = $query."on c.id = p.category ";
		$query = $query."Left join prop_sub_category sc ";
		$query = $query."ON sc.id = p.sub_category ";
		$query = $query."Where  p.status=1) limit ".$start.','.$limit;
		$properties = $this->db->query($query);
		return $properties->result_array();
	}	*/
	
	
	public function getProperties($limit=0, $start=0, $sortField='',$type='',$purpose='',$category='',$country='',$state='',$district='',$location='',$fromPrice='',$toPrice='',$fromSqft='',$toSqft='',$homefeatures =array(),$landfeatures= array(),$projectfeatures =array(),$commercialfeatures =array(),$radius='',$lat='',$lng='',$loc='',$subcategory='',$propIds=array()){
		$this->db->select("property.*,category.category as category_name,prop_sub_category.sub_category as sub_category_name");
        $this->db->join('category','category.id=property.category','left');
		$this->db->join('prop_sub_category','prop_sub_category.id=property.sub_category','left');
		//print_r($homefeatures);
		if(!empty($homefeatures)){
			$this->db->join('prop_home_features','prop_home_features.property_id=property.id','left');
			if(!empty($homefeatures['master_rooms'])){
				$this->db->where('`prop_home_features`.`master_rooms`',$homefeatures['master_rooms']);
			}
			if(!empty($homefeatures['attached_bathrooms'])){
				$this->db->where('`prop_home_features`.`attached_bathrooms`',$homefeatures['attached_bathrooms']);
			}
			if(!empty($homefeatures['floor_type'])){
				$this->db->where('`prop_home_features`.`floor_type`',$homefeatures['floor_type']);
			}
			//$this->db->where('`prop_home_features`.`attached_bathrooms`',$homefeatures['attached_bathrooms']);
			//$this->db->where('`prop_home_features`.`common_bathrooms`',$homefeatures['common_bathrooms']);
			//$this->db->where('`prop_home_features`.`no_of_gates`',$homefeatures['no_of_gates']);
		}


		if(!empty($landfeatures)){
			$this->db->join('prop_land_features','prop_land_features.property_id=property.id','left');
			if(!empty($landfeatures['land_type'])){
				$this->db->where('`prop_land_features`.`land_type`',$landfeatures['land_type']);
			}
			if(!empty($landfeatures['land_position'])){
				$this->db->where('`prop_land_features`.`land_position`',$landfeatures['land_position']);
			}
			if(!empty($landfeatures['water_availability'])){
				$this->db->where('`prop_land_features`.`water_availability`',$landfeatures['water_availability']);
			}
		}
		if(!empty($projectfeatures)){
			$this->db->join('prop_project_features','prop_project_features.property_id=property.id','left');
			if(!empty($projectfeatures['floorno'])){
				$this->db->where('`prop_project_features`.`no_of_floor`',$projectfeatures['floorno']);
			}
			if(!empty($projectfeatures['towerno'])){
				$this->db->where('`prop_project_features`.`no_of_tower`',$projectfeatures['towerno']);
			}
			if(!empty($projectfeatures['guest_rooms'])){
				$this->db->where('`prop_project_features`.`guest_rooms`',$projectfeatures['guest_rooms']);
			}
		}
		if(!empty($commercialfeatures)){
			$this->db->join('prop_commercial_features','prop_commercial_features.property_id=property.id','left');
			if(!empty($commercialfeatures['floorno'])){
				$this->db->where('`prop_commercial_features`.`type`',$commercialfeatures['floorno']);
			}
			if(!empty($commercialfeatures['workstations'])){
				$this->db->where('`prop_commercial_features`.`workstations`',$commercialfeatures['workstations']);
			}
			if(!empty($commercialfeatures['meeting_rooms'])){
				$this->db->where('`prop_commercial_features`.`meeting_rooms`',$commercialfeatures['meeting_rooms']);
			}
		}
		if($type != 'admin'){			
			$this->db->where('`property`.`status`',1);
		}
		if($purpose){
			$this->db->where('`property`.`purpose`',$purpose);			
		}

		$this->db->where('`property`.`purpose` !=','paying guest');

		if($category){
			$this->db->where('`property`.`category`',$category);

		}
		if($subcategory){
			$this->db->where('`property`.`sub_category`',$subcategory);
		}

		if($country){
			$this->db->where('`property`.`country`',$country);
		}
		if($state){
			$this->db->where('`property`.`state`',$state);
		}

		/*if($district){
			$this->db->where('`property`.`district`',$district);
			if(!$radius){
				$this->db->where("property.location like '%$loc%'");
			}					
		}*/

		if(!empty($district) && $district == $loc){
			$this->db->where('`property`.`district`',$district);
		}elseif(!empty($district) && $district != $loc){
			$this->db->where('`property`.`district`',$district);
			if(!$radius){
				$this->db->where("property.location like '%$loc%'");
			}	
		}

        if(!empty($propIds)){
            $this->db->where_in('`property`.`id`', $propIds);
        }

		
		//if(!empty($loc) && empty($radius)){
			//$this->db->or_like('`property`.`location`',$loc);
			
			//$location = explode(',',$location);
			//$this->db->or_like('`property`.`address`',$location[0]);
		//}		
		if($fromPrice || $toPrice){
			$this->db->where('estimated_price >=', (int)$fromPrice);
			$this->db->where('estimated_price <=', (int)$toPrice);
		}
		if($fromSqft || $toSqft){
			$this->db->where('sqft >=', (int)$fromSqft);
			$this->db->where('sqft <=', (int)$toSqft);
		}
		if((!empty($radius)) && (!empty($lat)) && (!empty($lng))){
		$d = $radius;
		$r = 3959; //earth's radius in miles
		$latitude = $lat; 
		$longitude = $lng;
		
		$latN = rad2deg(asin(sin(deg2rad($latitude)) * cos($d / $r)
        		+ cos(deg2rad($latitude)) * sin($d / $r) * cos(deg2rad(0))));

		$latS = rad2deg(asin(sin(deg2rad($latitude)) * cos($d / $r)
        		+ cos(deg2rad($latitude)) * sin($d / $r) * cos(deg2rad(180))));

		$lonE = rad2deg(deg2rad($longitude) + atan2(sin(deg2rad(90))
        		* sin($d / $r) * cos(deg2rad($latitude)), cos($d / $r)
        		- sin(deg2rad($latitude)) * sin(deg2rad($latN))));

		$lonW = rad2deg(deg2rad($longitude) + atan2(sin(deg2rad(270))
        		* sin($d / $r) * cos(deg2rad($latitude)), cos($d / $r)
        		- sin(deg2rad($latitude)) * sin(deg2rad($latN))));
		
		$this->db->where('`property`.`latitude` <=', $latN);
		$this->db->where('`property`.`latitude` >=', $latS);
		$this->db->where('`property`.`longitude` <=', $lonE);
		$this->db->where('`property`.`longitude` >=', $lonW);
		}
		if($sortField){
            $this->db->order_by($sortField,'ASC');
        }
		$query = $this->db->limit($limit, $start);		
		
		$query = $this->db->get('property');
		//echo $this->db->last_query();die();
		return $query->result_array();
	}
	
	
	public function total_count($type = '',$purpose='',$category='',$country='',$state='',$district='',$location='',$fromPrice='',$toPrice='',$fromSqft='',$toSqft='',$homefeatures= array(),$landfeatures= array(),$projectfeatures= array(),$commercialfeatures= array(),$radius='',$lat='',$lng='',$loc='',$subcategory='',$propIds=array()) {
		$this->db->select("property.*");
        $this->db->join('category','category.id=property.category','left');
		if(!empty($homefeatures)){
			$this->db->join('prop_home_features','prop_home_features.property_id=property.id','left');
			if(!empty($homefeatures['master_rooms'])){
				$this->db->where('`prop_home_features`.`master_rooms`',$homefeatures['master_rooms']);
			}
			if(!empty($homefeatures['attached_bathrooms'])){
				$this->db->where('`prop_home_features`.`attached_bathrooms`',$homefeatures['attached_bathrooms']);
			}
			if(!empty($homefeatures['floor_type'])){
				$this->db->where('`prop_home_features`.`floor_type`',$homefeatures['floor_type']);
			}

			//$this->db->where('`prop_home_features`.`attached_bathrooms`',$homefeatures['attached_bathrooms']);
			//$this->db->where('`prop_home_features`.`common_bathrooms`',$homefeatures['common_bathrooms']);
			//$this->db->where('`prop_home_features`.`no_of_gates`',$homefeatures['no_of_gates']);
		}
		if(!empty($landfeatures)){
			$this->db->join('prop_land_features','prop_land_features.property_id=property.id','left');
			if(!empty($landfeatures['land_type'])){
				$this->db->where('`prop_land_features`.`land_type`',$landfeatures['land_type']);
			}
			if(!empty($landfeatures['land_position'])){
				$this->db->where('`prop_land_features`.`land_position`',$landfeatures['land_position']);
			}
			if(!empty($landfeatures['water_availability'])){
				$this->db->where('`prop_land_features`.`water_availability`',$landfeatures['water_availability']);
			}
		}

		if(!empty($projectfeatures)){
			$this->db->join('prop_project_features','prop_project_features.property_id=property.id','left');
			if(!empty($projectfeatures['floorno'])){
				$this->db->where('`prop_project_features`.`no_of_floor`',$projectfeatures['floorno']);
			}
			if(!empty($projectfeatures['towerno'])){
				$this->db->where('`prop_project_features`.`no_of_tower`',$projectfeatures['towerno']);
			}
			if(!empty($projectfeatures['guest_rooms'])){
				$this->db->where('`prop_project_features`.`guest_rooms`',$projectfeatures['guest_rooms']);
			}
		}
		if(!empty($commercialfeatures)){
			$this->db->join('prop_commercial_features','prop_commercial_features.property_id=property.id','left');
			if(!empty($commercialfeatures['floorno'])){
				$this->db->where('`prop_commercial_features`.`type`',$commercialfeatures['floorno']);
			}
			if(!empty($commercialfeatures['workstations'])){
				$this->db->where('`prop_commercial_features`.`workstations`',$commercialfeatures['workstations']);
			}
			if(!empty($commercialfeatures['meeting_rooms'])){
				$this->db->where('`prop_commercial_features`.`meeting_rooms`',$commercialfeatures['meeting_rooms']);
			}
		}
		if($type != 'admin'){ //die($type);			
	   		$this->db->where('status', 1);
		}
		if($purpose){ //die($type);			
	   		$this->db->where('purpose', $purpose);
		}

		$this->db->where('`property`.`purpose` !=','paying guest');

		if($category){
			$this->db->where('`property`.`category`',$category);
		}
		if($subcategory){
			$this->db->where('`property`.`sub_category`',$subcategory);
		}
        if($country){
			$this->db->where('`property`.`country`',$country);
		}
		if($state){
			$this->db->where('`property`.`state`',$state);
		}

		if(!empty($district) && $district == $loc){
			$this->db->where('`property`.`district`',$district);
		}elseif(!empty($district) && $district != $loc){
			$this->db->where('`property`.`district`',$district);
			if(!$radius){
				$this->db->where("property.location like '%$loc%'");
			}	
		}

		/*if($district){
			$this->db->where('`property`.`district`',$district);
			if(!$radius){
				$this->db->where("property.location like '%$loc%'");
			}					
		}*/
        if(!empty($propIds)){
            $this->db->where_in('`property`.`id`', $propIds);
        }


		/*if($country){
	   		$this->db->where('country', $country);
		}
		if($state){
	   		$this->db->or_where('state', $state);
		}
		if($district){
	   		$this->db->or_where('district', $district);
		}*/

		//if(!empty($loc) && empty($radius)){
			//$this->db->like('location',$loc);
			
			//$location = explode(',',$location);
			//$this->db->or_like('`property`.`address`',$location[0]);			
		//}
		if($fromPrice || $toPrice){
			$this->db->where('estimated_price >=', (int)$fromPrice);
			$this->db->where('estimated_price <=', (int)$toPrice);
		}
		if($fromSqft || $toSqft){
			$this->db->where('sqft >=', (int)$fromSqft);
			$this->db->where('sqft <=', (int)$toSqft);
		}
		if((!empty($radius)) && (!empty($lat)) && (!empty($lng))){
		$d = $radius;
		$r = 3959; //earth's radius in miles
		$latitude = $lat; 
		$longitude = $lng;
		
		$latN = rad2deg(asin(sin(deg2rad($latitude)) * cos($d / $r)
        		+ cos(deg2rad($latitude)) * sin($d / $r) * cos(deg2rad(0))));

		$latS = rad2deg(asin(sin(deg2rad($latitude)) * cos($d / $r)
        		+ cos(deg2rad($latitude)) * sin($d / $r) * cos(deg2rad(180))));

		$lonE = rad2deg(deg2rad($longitude) + atan2(sin(deg2rad(90))
        		* sin($d / $r) * cos(deg2rad($latitude)), cos($d / $r)
        		- sin(deg2rad($latitude)) * sin(deg2rad($latN))));

		$lonW = rad2deg(deg2rad($longitude) + atan2(sin(deg2rad(270))
        		* sin($d / $r) * cos(deg2rad($latitude)), cos($d / $r)
        		- sin(deg2rad($latitude)) * sin(deg2rad($latN))));
		
		$this->db->where('`property`.`latitude` <=', $latN);
		$this->db->where('`property`.`latitude` >=', $latS);
		$this->db->where('`property`.`longitude` <=', $lonE);
		$this->db->where('`property`.`longitude` >=', $lonW);
		}
       $query =  $this->db->get("property");
	   //echo $this->db->last_query();//die();
	   return $query->num_rows();
    }
	
	public function updateStatus($propId){
		$this->db->set('status', 1);
		$this->db->where('id',$propId);
		$this->db->update('property');
		//echo $this->db->last_query();die();
	}
	
	public function delete($propId){
		$this->db->where('id',$propId);
		$this->db->delete('property');
	}
	
	public function propertyExists($loggedUserId,$propertyId){
		$query = $this->db->query("SELECT * FROM shortlisted_properties WHERE user_id='$loggedUserId' AND property_id= '$propertyId'");    
		if($row = $query->row()){
			return TRUE;
		}else{
			return FALSE;
		}
 }
 
 public function shortlisted_property_count($loggedId) {
		if($loggedId){ 			
	   		$this->db->where('user_id', $loggedId);
		}
       $query =  $this->db->get("shortlisted_properties");
	   return $query->num_rows();
    }
	
	
	public function getShortlistedProperties($limit=0, $start=0, $sortField='',$loggedId=''){
		$this->db->select("shortlisted_properties.*,property.id as prop_id,property.title,property.purpose,property.estimated_price,property.category,property.description,property.sqft,category.category as category_name,prop_sub_category.sub_category as sub_category_name");
		$this->db->join('property','property.id=shortlisted_properties.property_id','left');
        $this->db->join('category','category.id=property.category','left');
		$this->db->join('prop_sub_category','prop_sub_category.id=property.sub_category','left');
		if($loggedId){			
			$this->db->where('`shortlisted_properties`.`user_id`',$loggedId);
		}
		if($sortField){
            $this->db->order_by($sortField,'ASC');
        }
		$query = $this->db->limit($limit, $start);
		
		
		$query = $this->db->get('shortlisted_properties');
		//echo $this->db->last_query();die();
		return $query->result_array();
	}
	
	
	public function my_property_count($loggedId) {
		if($loggedId){ 			
	   		$this->db->where('user_id', $loggedId);
		}
       $query =  $this->db->get("property");
	   return $query->num_rows();
    }
	
	public function getMyProperties($limit=0, $start=0, $sortField='',$loggedId=''){
		$this->db->select("property.*,category.category as category_name,prop_sub_category.sub_category as sub_category_name");
        $this->db->join('category','category.id=property.category','left');
		$this->db->join('prop_sub_category','prop_sub_category.id=property.sub_category','left');
		if($loggedId){			
			$this->db->where('`property`.`user_id`',$loggedId);
		}
		if($sortField){
            $this->db->order_by($sortField,'ASC');
        }
	    $this->db->limit($limit, $start);
		
		$query = $this->db->get('property');
		//echo $this->db->last_query();die();
		return $query->result_array();
	}
	
	public function getCountries(){
		$query = $this->db->query("SELECT distinct country FROM property"); 
		return $query->result_array();
	}
	
	public function getStates(){
		$query = $this->db->query("SELECT distinct state FROM property"); 
		return $query->result_array();
	}
	
	public function getDistricts(){
		$query = $this->db->query("SELECT distinct district FROM property"); 
		return $query->result_array();
	}
	
	
	public function getNearByProperties($district='', $id=''){
		$this->db->select("property.*,category.category as category_name,prop_sub_category.sub_category as sub_category_name");
        $this->db->join('category','category.id=property.category','left');
		$this->db->join('prop_sub_category','prop_sub_category.id=property.sub_category','left');
		$this->db->where('`property`.`status`', 1);
		if($district){			
			$this->db->where('`property`.`district`',$district);
		}
		if($id){
			$this->db->where('property.id !=', $id);
		}
		$query = $this->db->limit(4);		
		
		$query = $this->db->get('property');
		return $query->result_array();
	}
	
	
	public function getPropImage($propertyId=''){		
		$this->db->select("prop_images.image");
		$this->db->where('property_id', $propertyId);
		$query = $this->db->get('prop_images');
	  	return $query->row_array();
	}
	
	public function getpropsbyradius(){
		$d = 30;
		$r = 3959; //earth's radius in miles
		// karamana
		//$latitude =  8.4817; 
		//$longitude = 76.9657; 
		
		// nemom
		$latitude = 8.8932118; 
		$longitude = 76.61413960000004;
		
		$latN = rad2deg(asin(sin(deg2rad($latitude)) * cos($d / $r)
        		+ cos(deg2rad($latitude)) * sin($d / $r) * cos(deg2rad(0))));

		$latS = rad2deg(asin(sin(deg2rad($latitude)) * cos($d / $r)
        		+ cos(deg2rad($latitude)) * sin($d / $r) * cos(deg2rad(180))));

		$lonE = rad2deg(deg2rad($longitude) + atan2(sin(deg2rad(90))
        		* sin($d / $r) * cos(deg2rad($latitude)), cos($d / $r)
        		- sin(deg2rad($latitude)) * sin(deg2rad($latN))));

		$lonW = rad2deg(deg2rad($longitude) + atan2(sin(deg2rad(270))
        		* sin($d / $r) * cos(deg2rad($latitude)), cos($d / $r)
        		- sin(deg2rad($latitude)) * sin(deg2rad($latN))));
		
		$this->db->select("*");
		$this->db->where('status', 1);
		$this->db->where('latitude <=', $latN);
		$this->db->where('latitude >=', $latS);
		$this->db->where('longitude <=', $lonE);
		$this->db->where('longitude >=', $lonW);
		$query = $this->db->get('property');

		/*$query = $this->db->query("SELECT * FROM `property` WHERE

(latitude < = $latN AND latitude >= $latS AND longitude < = $lonE AND longitude >= $lonW) AND (latitude != $latitude AND longitude != $longitude)");*/


      //echo $this->db->last_query();die();
	  return $query->result_array();
	}



	 public function pg_property_count($category='',$country='',$state='',$district='',$loc='',$availableFor='',$suitableFor='',$furnishinglevel='',$bedrooms='',$propIds=array(),$fromPrice='',$toPrice='',$fromSqft='',$toSqft='') {	
	 	$this->db->select("property.*");
        $this->db->join('pg_category','pg_category.id=property.category','left');
        $this->db->join('prop_pg_features','prop_pg_features.property_id=property.id','left');

        if($category){
			$this->db->where('`property`.`category`',$category);

		}
		if($availableFor){
			$this->db->where('`prop_pg_features`.`available_for`',$availableFor);
		}

		if($suitableFor){
			$this->db->where('`prop_pg_features`.`suitable_for`',$suitableFor);
		}

		if($furnishinglevel){
			$this->db->where('`prop_pg_features`.`furnishing_level`',$furnishinglevel);
		}

		if($bedrooms){
			$this->db->where('`prop_pg_features`.`bed_rooms`',$bedrooms);
		}

		if($country){
			$this->db->where('`property`.`country`',$country);
		}
		if($state){
			$this->db->where('`property`.`state`',$state);
		}

		if(!empty($district) && $district == $loc){
			$this->db->where('`property`.`district`',$district);
		}elseif(!empty($district) && $district != $loc){
			$this->db->where('`property`.`district`',$district);			
			$this->db->where("property.location like '%$loc%'");
			
		}

        if(!empty($propIds)){
            $this->db->where_in('`property`.`id`', $propIds);
        }

        if($fromPrice || $toPrice){
			$this->db->where('estimated_price >=', (int)$fromPrice);
			$this->db->where('estimated_price <=', (int)$toPrice);
		}
		if($fromSqft || $toSqft){
			$this->db->where('sqft >=', (int)$fromSqft);
			$this->db->where('sqft <=', (int)$toSqft);
		}

	   	$this->db->where('purpose', 'paying guest');
	   	$this->db->where('status', 1);

       $query =  $this->db->get("property");
	   return $query->num_rows();
    }
	
	
	public function getPgProperties($limit=0, $start=0, $sortField='',$category='',$country='',$state='',$district='',$loc='',$availableFor='',$suitableFor='',$furnishinglevel='',$bedrooms='',$propIds=array(),$fromPrice='',$toPrice='',$fromSqft='',$toSqft=''){
		$this->db->select("property.*,pg_category.category as category_name");
        $this->db->join('pg_category','pg_category.id=property.category','left');
		$this->db->join('prop_pg_features','prop_pg_features.property_id=property.id','left');


		if($category){
			$this->db->where('`property`.`category`',$category);

		}
		if($availableFor){
			$this->db->where('`prop_pg_features`.`available_for`',$availableFor);
		}

		if($suitableFor){
			$this->db->where('`prop_pg_features`.`suitable_for`',$suitableFor);
		}

		if($furnishinglevel){
			$this->db->where('`prop_pg_features`.`furnishing_level`',$furnishinglevel);
		}

		if($bedrooms){
			$this->db->where('`prop_pg_features`.`bed_rooms`',$bedrooms);
		}

		if($country){
			$this->db->where('`property`.`country`',$country);
		}
		if($state){
			$this->db->where('`property`.`state`',$state);
		}

		if(!empty($district) && $district == $loc){
			$this->db->where('`property`.`district`',$district);
		}elseif(!empty($district) && $district != $loc){
			$this->db->where('`property`.`district`',$district);			
			$this->db->where("property.location like '%$loc%'");
			
		}

        if(!empty($propIds)){
            $this->db->where_in('`property`.`id`', $propIds);
        }

        if($fromPrice || $toPrice){
			$this->db->where('estimated_price >=', (int)$fromPrice);
			$this->db->where('estimated_price <=', (int)$toPrice);
		}
		if($fromSqft || $toSqft){
			$this->db->where('sqft >=', (int)$fromSqft);
			$this->db->where('sqft <=', (int)$toSqft);
		}
	
		$this->db->where('`property`.`purpose`','paying guest');
		$this->db->where('`property`.`status`',1);		


		if($sortField){
            $this->db->order_by($sortField,'ASC');
        }
		$query = $this->db->limit($limit, $start);		
		
		$query = $this->db->get('property');
		//echo $this->db->last_query();die();
		return $query->result_array();
	}


	public function getPgDetails($propertyId){
		$this->db->select("property.*,pg_category.category as category_name,prop_pg_features.available_for,prop_pg_features.suitable_for,prop_pg_features.age_of_property,prop_pg_features.security_deposit,prop_pg_features.security_deposit,prop_pg_features.bed_rooms,prop_pg_features.bath_rooms,prop_pg_features.furnishing_level,prop_pg_features.available_date,prop_pg_features.food_cost,prop_pg_features.no_of_rooms,prop_pg_features.people_occupancy,prop_pg_features.furniture_details");
        $this->db->join('pg_category','pg_category.id=property.category','left');
		$this->db->join('prop_pg_features','prop_pg_features.property_id=property.id','left');

		$this->db->where('`property`.`purpose`','paying guest');
		$this->db->where('`property`.`status`',1);		

	   	$this->db->where('`property`.`id`', $propertyId);

       $query =  $this->db->get("property");
	   return $query->row_array();

	}


	public function pendingproperties_count() {		
	   $this->db->where('status', 0);
       $query =  $this->db->get("property");
	   return $query->num_rows();
    }


    public function getPendingProperties($limit=0, $start=0, $sortField=''){
		$this->db->select("property.*,category.category as category_name,prop_sub_category.sub_category as sub_category_name");
        $this->db->join('category','category.id=property.category','left');
		$this->db->join('prop_sub_category','prop_sub_category.id=property.sub_category','left');
		
		$this->db->where('`property`.`status`',0);

		if($sortField){
            $this->db->order_by($sortField,'ASC');
        }
	    $this->db->limit($limit, $start);
		
		$query = $this->db->get('property');
		//echo $this->db->last_query();die();
		return $query->result_array();
	}
 
 
}
?>