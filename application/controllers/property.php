<?php
class Property extends CI_controller{

var $mcontents = array();

	public function __construct(){
		parent:: __construct();
		$this->load->model('propertymodel');
		$this->load->model('countrymodel');
		$this->load->model('categorymodel');
		$this->load->model('statemodel');
		$this->load->model('featuremodel');
		$this->load->model('amenitiesmodel');
		$this->load->model('usermodel');
		$this->load->library("pagination");		
	}	
	
	public function postProperty(){
		if(!$this->session->userdata('loggedId')){
			redirect('login');
		}else{
			$data['categories'] = $this->categorymodel->getCategories();
			$data['username'] = $this->session->userdata('name');
			$this->template->set_template('default');
			$this->template->write_view('content', 'property/add-prop-step1', $data);
            $this->template->render();
		}
	}
	
	public function getSubcategory(){
		$categoryId = $this->input->post('category_id');
		$subCategories = $this->categorymodel->getsubcategories($categoryId);
		echo json_encode($subCategories);
	}
	
	public function addPropertyStep1(){ 
		if($this->input->post('data')){
			//$this->form_validation->set_rules($this->input->post('data'),"Add Property", "trim|xss_clean");
			parse_str($this->input->post('data'), $propertyarray);
			$propertyarray['user_id'] = $this->session->userdata('loggedId');
			if(!empty($propertyarray['possession_date'])){
				$possessionDate = $propertyarray['possession_date'];			
				unset($propertyarray['possession_date']);
				date_default_timezone_set('Asia/Kolkata');
				$propertyarray['possession_date'] = date_format(new DateTime($possessionDate), 'Y-m-d');
			}
			$this->load->model('propertymodel');
			$propertyId = $propertyarray['property_id'];
			unset($propertyarray['property_id']);
            /*if(!empty($propertyarray['video_type']) && $propertyarray['video_type'] == 'youtube'){
                $link = $propertyarray['video'];
                $video_id = explode("?v=", $link);
                $video_id = $video_id[1];
                unset($propertyarray['video']);
                $propertyarray['video'] = $video_id;
            }*/


			if($propertyId){ 
				$this->propertymodel->updatePropDetails($propertyarray, $propertyId);
			}else{
				$propertyId = $this->propertymodel->insertDetails($propertyarray);
			}			
		}
		if($this->input->post('property_id')){
			$propertyId = $this->input->post('property_id');			
		}
			$locationDetails = $this->propertymodel->getDetails($propertyId);		
			$countries = $this->countrymodel->getcountries();
			$states = $this->statemodel->getstates();
			$data = array('propertyId' =>isset($propertyId)?$propertyId: '',
			'countries' => $countries,
			'states' => $states,
			'prop_locations'=> isset($locationDetails)? $locationDetails:array()
			);	
			$output = $this->load->view("property/add-prop-step2", $data, true);
			echo $output;		
	}
	
	public function addPropertyStep2(){ 
	$address = json_decode($this->input->post('location'));
	$location = implode(',',$address);
	$address = array_reverse($address);
	//print_r($address);die();
	$postcode = '';
	if(intval($address[0])){
		$postcode = $address[0];
		$country  = $address[1];
		$state    = $address[2];
		$district = $address[3];
		$addr     = end($address);
	}else{
		$country  = $address[0];
		$state    = $address[1];
		$district = $address[2];
		$addr     = end($address);
	}
	
	$proplocationarray = array(
	'id'=>$this->input->post('id'),
	'latitude'=> $this->input->post('latitude'),
	'longitude'=> $this->input->post('longitude'),
	'address' => $location,
	'country' => $country,
	'state' => $state,
	'district' => $district,
	'pin' => $postcode,
	'location' => $addr,
	'postal_address'=> $this->input->post('postal_address')
	);
		if(!empty($proplocationarray)){
			$proplocationarray['user_id'] = $this->session->userdata('loggedId');
			$this->load->model('propertymodel');
			$category = $this->propertymodel->updateDetails($proplocationarray);			
			$propFeatureDetails = $this->getPropFeatureContent($category,$proplocationarray['id']);			
		}
			$features = $this->featuremodel->getAdvancedFeatures($category->category);			
			$featureData = array(
			'feature_content' => isset($propFeatureDetails['feature_content'])?$propFeatureDetails['feature_content']:'',
			'propertyId' => $proplocationarray['id'],
			'features' =>$features,
			'prop_details' => isset($propFeatureDetails['prop_details'])?$propFeatureDetails['prop_details']: array(),
			'prop_features' => isset($propFeatureDetails['prop_features'])? $propFeatureDetails['prop_features']:array()
			);			
			$data = $this->load->view("property/add-prop-step3",$featureData, true);
			echo $data;			
	}


	public function addPropertyStep3(){
		if($this->input->post('data')){
			parse_str($this->input->post('data'), $propfeaturearray);
			$propfeaturearray['user_id'] = $this->session->userdata('loggedId');
			$propertyId = $propfeaturearray['property_id'];
			unset($propfeaturearray['features']);
			if($this->input->post('type') == 'home'){
				$this->load->model('prophomefeaturemodel');
				if($this->prophomefeaturemodel->propertyExists($propertyId)){	
					$this->prophomefeaturemodel->updateFeatures($propfeaturearray);
				}else{
					$this->prophomefeaturemodel->insertFeatures($propfeaturearray);
				}
			}elseif($this->input->post('type') == 'land'){
				$this->load->model('proplandfeaturemodel');
				if($this->proplandfeaturemodel->propertyExists($propertyId)){	
					$this->proplandfeaturemodel->updateFeatures($propfeaturearray);
				}else{
					$this->proplandfeaturemodel->insertFeatures($propfeaturearray);
				}				
			}elseif($this->input->post('type') == 'project'){
				$this->load->model('propprojectfeaturemodel');
				if($this->propprojectfeaturemodel->propertyExists($propertyId)){	
					$this->propprojectfeaturemodel->updateFeatures($propfeaturearray);
				}else{
					$this->propprojectfeaturemodel->insertFeatures($propfeaturearray);
				}	
			}elseif($this->input->post('type') == 'commercial'){
				$this->load->model('propcommercialfeaturemodel');
				if($this->propcommercialfeaturemodel->propertyExists($propertyId)){	
					$this->propcommercialfeaturemodel->updateFeatures($propfeaturearray);
				}else{
					$this->propcommercialfeaturemodel->insertFeatures($propfeaturearray);
				}	
			}
		}
		$this->load->model('propfeaturemodel');
		$this->propfeaturemodel->deleteProperty($propertyId);
		if($this->input->post('property_features')){			
			$this->propfeaturemodel->insertAdvFeatures($this->input->post('property_features'),$propertyId);	
		}

		if($this->input->post('property_id')){
			$propertyId = $this->input->post('property_id');			
		}		
			$this->load->model('propamenitiesmodel');
			$amenitiesDetails = $this->propamenitiesmodel->getAmenitiesByPropId($propertyId);
			if(!empty($amenitiesDetails)){
				$propAmenities = array();
				foreach ($amenitiesDetails as $key => $value) {
				$amenityId = $amenitiesDetails[$key]['amenities_id'];
				$propAmenities[$amenityId]= $amenitiesDetails[$key]['amenities_description'];

				}
			}
			$amenities = $this->amenitiesmodel->getAmenities();
			$amenitiesData = array(
			'propertyId' => isset($propertyId)?$propertyId: '',
			'amenities' =>$amenities,
			'prop_amenities'=> isset($propAmenities)? $propAmenities:array()
			);	
			$data = $this->load->view("property/add-prop-step4",$amenitiesData, true);
			echo $data;

	}	
	
	public function addPropertyStep4(){
		$amenities = $this->input->post('amenities');	
		$propertyId = $this->input->post('property_id');
		$this->load->model('propamenitiesmodel');
		$this->propamenitiesmodel->deleteAmenities($propertyId);
		if(!empty($amenities)){
			$amenities = array_filter($amenities);			
			$propertyCategory = $this->propamenitiesmodel->insertAmenities($amenities, $propertyId);
		}
		$category = $this->propertymodel->getCategory($propertyId);
		if($category->category == 3){
			$pageContent = "project-imageupload";
		}else{
			$pageContent = "property-imageupload";
		}
		$this->load->model('propimagemodel');
		$propertyImages = $this->propimagemodel->getImagesByPropId($propertyId);
		$this->load->model('propfloorimagemodel');
		$propertyFloorImages = $this->propfloorimagemodel->getDetails($propertyId);	
		$this->load->model('projfloorplanmodel');
		$projectFloorPlans = $this->projfloorplanmodel->getfloorplansByPropId($propertyId);

		$uploadData = array(
			'propertyId' => $propertyId,
			'page_content' => $pageContent,
			'property_images' => isset($propertyImages)? $propertyImages:array(),
			'prop_floor_image' => isset($propertyFloorImages)? $propertyFloorImages:array(),
			'prop_floor_plans' => isset($projectFloorPlans)? $projectFloorPlans:array()
			);					
			$data = $this->load->view("property/add-prop-step5",$uploadData, true);
			echo $data;			
		
	}	
	
	public function addPropertyStep5(){		
		$propertyId = $this->input->post('property_id');
		
		//print_r($_FILES['prop_image'][0]);
		//print_r($_FILES['floor_image']);
		//print_r($_FILES['floor_plan_image']);die();
		
		//$propImagesArr = array();
		if(!empty($_FILES['prop_image'])){			
			foreach($_FILES['prop_image']['name'] as $key=>$val){
				//upload and stored images
				$target_dir = "uploads/";
				$target_file = $target_dir.$_FILES['prop_image']['name'][$key];
				if(move_uploaded_file($_FILES['prop_image']['tmp_name'][$key],$target_file)){
					//$propImagesArr[] = $target_file;	
					$data = array(
						'property_id'=> $propertyId,
						'image' => $val
							);
				$this->load->model('propimagemodel');
				$this->propimagemodel->insertImages($data);			
				}			
			}
		}
		if(!empty($_FILES['floor_image'])){	
			foreach($_FILES['floor_image']['name'] as $key=>$val){
				//upload and stored images
				$target_dir = "uploads/";
				$target_file = $target_dir.$_FILES['floor_image']['name'][$key];
				if(move_uploaded_file($_FILES['floor_image']['tmp_name'][$key],$target_file)){
					//$propImagesArr[] = $target_file;	
					$data = array(
						'property_id'=> $propertyId,
						'floor_image' => $val
							);
				$this->load->model('propfloorimagemodel');
				$this->propfloorimagemodel->insertImages($data);			
				}			
			}
		}
		
		//print_r($_FILES['floor_plan_image']);die();
		
		if(!empty($_FILES['floor_plan_image'])){
			$floorplanImage = array();	
			foreach($_FILES['floor_plan_image']['name'] as $key => $val){
				//echo $val;//die();
				
				//upload and stored images
				$target_dir = "uploads/floorplans/";
				$target_file = $target_dir.$_FILES['floor_plan_image']['name'][$key];
				if(move_uploaded_file($_FILES['floor_plan_image']['tmp_name'][$key],$target_file)){
					//$propImagesArr[] = $target_file;
					$floorplanImage[] = $val;	
				}			
			}
			//print_r($floorplanImage);die();
			$floorPlans = $this->input->post('floor_plans');//print_r($floorPlans);die();	
			if(!empty($floorPlans)){
						//$arr = array();
						$floorplanarr = json_decode($floorPlans, true);
						//print_r($floorplanarr);//die();
						//foreach($floorPlans as $key => $json) {
							//$arr = json_decode($json, true);
							
							foreach($floorplanarr as $key => $value){		
								$floorplandata = array(
								'property_id'=> $propertyId,
								'image' => 	isset($floorplanImage[$key])? $floorplanImage[$key]:'',
								'title' => 	$floorplanarr[$key]['title'],
								'type' 	=>  $floorplanarr[$key]['type'],
								'cost' 	=>  $floorplanarr[$key]['cost'],
								'sqft' 	=>  $floorplanarr[$key]['sqft'],
								);
								//print_r($floorplandata);
								$this->load->model('projfloorplanmodel');
								$this->projfloorplanmodel->insertImages($floorplandata);
									
							}													
							
						//}
					}				
		}
		echo $propertyId;

	}	
	
	public function editPropertyStep3(){
		$propertyId = $this->input->post('property_id');
		$propertyDetails = $this->propertymodel->getCategory($propertyId);
		$propFeatureDetails = $this->getPropFeatureContent($propertyDetails,$propertyId);		
	
		$features = $this->featuremodel->getAdvancedFeatures($propertyDetails->category);
			$featureData = array(
			'feature_content' => isset($propFeatureDetails['feature_content'])?$propFeatureDetails['feature_content']:'',
			'propertyId' => $propertyId,
			'features' =>$features,
			'prop_details' => isset($propFeatureDetails['prop_details'])?$propFeatureDetails['prop_details']: array(),
			'prop_features' => isset($propFeatureDetails['prop_features'])? $propFeatureDetails['prop_features']:array()
			);

			$data = $this->load->view("property/add-prop-step3",$featureData, true);
			echo $data;		
		
	}
	
	public function editPropertyStep1(){		
		$categories = $this->categorymodel->getCategories();
		$propertyId = base64_decode($this->input->get('id', 0));
		if($this->input->post('property_id')){
			$propertyId = $this->input->post('property_id');			
		}
		if($propertyId){
			$propertyDetails = $this->propertymodel->getDetails($propertyId);
			$subCategories = $this->categorymodel->getsubcategories($propertyDetails['category']);
		}
		$propertyData = array(
		'categories' => $categories,
		'details'    => $propertyDetails,
		'subcategories'=>$subCategories,
		'propertyId' => $propertyId
		);

		if($this->input->post('property_id')){		
		$data = $this->load->view("property/add-prop-step1",$propertyData, true);
		echo $data;	
		}else{
		$propertyData['username'] = $this->session->userdata('name');	
		$this->template->set_template('default');
		$this->template->write_view('content', 'property/add-prop-step1', $propertyData);
        $this->template->render();
		}
	}
	
	
	private function getPropFeatureContent($categoryId='', $propertyId=''){		
		if($categoryId->category == 1){
			$this->load->model('prophomefeaturemodel');
			$propDetails = $this->prophomefeaturemodel->getDetails($propertyId);
			$featureContent = 'home-features';	
		}elseif($categoryId->category == 2){
			$this->load->model('proplandfeaturemodel');
			$propDetails =  $this->proplandfeaturemodel->getDetails($propertyId);
			$featureContent = 'land-features';	
		}elseif($categoryId->category == 3){
			$this->load->model('propprojectfeaturemodel');
			$propDetails =  $this->propprojectfeaturemodel->getDetails($propertyId);
			$featureContent = 'project-features';	
		}elseif($categoryId->category == 4){
			$this->load->model('propcommercialfeaturemodel');
			$propDetails =  $this->propcommercialfeaturemodel->getDetails($propertyId);
			$featureContent = 'commercial-features';	
		}		
		$this->load->model('propfeaturemodel');
		$featureDetails = $this->propfeaturemodel->getFeaturesByPropId($propertyId);
		$propFeatures = array();
		foreach($featureDetails as $val){
			$propFeatures[] = $val['feature_id'];
		}
		
		return array('prop_details'=>$propDetails, 'feature_content'=> $featureContent, 'prop_features'=> $propFeatures);		
	}
	
	public function listing($offset = 0){
		
		$purpose = $this->input->post('purpose');
		$category = $this->input->post('category');
		$subcategory = $this->input->post('subcategory');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		$district = $this->input->post('district');
		$location = $this->input->post('location');
		$fromPrice = $this->input->post('from_price');
		$toPrice = $this->input->post('to_price');
		$fromSqft = $this->input->post('from_sqft');
		$toSqft = $this->input->post('to_sqft');
        $advFeatures = $this->input->post('features');
        $advFeatures = explode(',',$advFeatures);
        //print_r($advFeatures) ;
        $this->load->model('propfeaturemodel');
        $PropertyIds = $this->propfeaturemodel->getPropByFeatures($advFeatures);
        $propIds =array();
        foreach($PropertyIds as $propId){
            $propIds[] = $propId['property_id'];
        }
        //print_r($propIds);die();
        //echo $homeAdvFeatures;die();
		
		$radius = $this->input->post('radius','');
		$lat = $this->input->post('lat','');
		$lng = $this->input->post('lng','');
		$loc = $this->input->post('loc','');
		
		$mr = $this->input->post('master_rooms','');
		$ab = $this->input->post('attached_bathrooms','');
		$ft = $this->input->post('floor_type','');
		
		$homefeatures = array();
		if( (isset($mr) && !empty($mr)) || (isset($ab) && !empty($ab))  || (isset($ft) && !empty($ft)) ){
			$homefeatures = array(
			'master_rooms'=> $mr,
			'attached_bathrooms'=> $ab,
			'floor_type'=> $ft,
			);
		}
		
		$landType = $this->input->post('land_type','');
		$landPosition = $this->input->post('land_position','');
		$waterAvailability = $this->input->post('water_availability','');
		$landfeatures = array();
		if( (isset($landType)&& !empty($landType)) || (isset($landPosition)&& !empty($landPosition)) || (isset($waterAvailability)&& !empty($waterAvailability)) ){
			$landfeatures = array(
			'land_type'=> $landType,
			'land_position'=> $landPosition,
			'water_availability'=> $waterAvailability,
			);
		}		
		
		$floorno = $this->input->post('floorno','');
		$towerno = $this->input->post('towerno','');
		$guest_rooms = $this->input->post('guest_rooms','');
		$projectfeatures = array();
		if( (isset($floorno)&& !empty($floorno)) || (isset($towerno)&& !empty($towerno)) || (isset($guest_rooms)&& !empty($guest_rooms))){
			$projectfeatures = array(
			'floorno'=> $floorno,
			'towerno'=> $towerno,
			'guest_rooms'=> $guest_rooms,
			);
		}
		
		$type = $this->input->post('type','');
		$workstations = $this->input->post('workstations','');
		$meetingrooms = $this->input->post('meeting_rooms','');
		$commercialfeatures = array();
		if((isset($type)&& !empty($type)) || (isset($workstations)&& !empty($workstations)) || (isset($meetingrooms)&& !empty($meetingrooms))){
			$commercialfeatures = array(
			'floorno'=> $type,
			'workstations'=> $workstations,
			'meeting_rooms'=> $meetingrooms,
			);
		}
		
		$count = $this->propertymodel->total_count('',$purpose,$category,$country,$state,$district,$location,$fromPrice,$toPrice,$fromSqft,$toSqft,$homefeatures,$landfeatures,$projectfeatures,$commercialfeatures,$radius,$lat,$lng,$loc,$subcategory,$propIds);
		
		$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3): 0); 
		$config['total_rows'] =  $count;
		$config['per_page']= 10;
		$perpage = $this->input->post('perpage');  
		if($perpage){
			$config['per_page'] = $perpage;
		}
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['uri_segment'] = 3;
		$config['base_url']= base_url().'index.php/property/listing'; 
		//$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
		$this->pagination->initialize($config);
		$this->data['paginglinks'] = $this->pagination->create_links();
        // Showing total rows count 
		if($this->data['paginglinks']!= '') {
			$totalRows = $this->pagination->total_rows;
			$paging = $this->pagination->cur_page*$this->pagination->per_page;
			if($paging > $totalRows){
				$paging = $totalRows;
			}
		  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($paging).' of '.$totalRows;
		}  
		$sortField = $this->input->post('sort_field');		
		
    	$propertyDetails = $this->propertymodel->getProperties($config["per_page"], $offset,$sortField,'',$purpose,$category,$country,$state,$district,$location,$fromPrice,$toPrice,$fromSqft,$toSqft,$homefeatures,$landfeatures,$projectfeatures,$commercialfeatures,$radius,$lat,$lng,$loc,$subcategory,$propIds);

		foreach($propertyDetails as $key => $val){
			$category = $propertyDetails[$key]['category'];
			if($category == 1){
				$this->load->model('prophomefeaturemodel');
				$propDetails = $this->prophomefeaturemodel->getDetails($val['id']);
			}elseif($category == 2){
				$this->load->model('proplandfeaturemodel');
				$propDetails =  $this->proplandfeaturemodel->getDetails($val['id']);
			}elseif($category == 3){
				$this->load->model('propprojectfeaturemodel');
				$propDetails =  $this->propprojectfeaturemodel->getDetails($val['id']);
			}elseif($category == 4){
				$this->load->model('propcommercialfeaturemodel');
				$propDetails =  $this->propcommercialfeaturemodel->getDetails($val['id']);
			}
			$propertyDetails[$key]['prop_features'] = $propDetails;	
			$propImage = $this->propertymodel->getPropImage($propertyDetails[$key]['id']);
			$propertyDetails[$key]['prop_image'] = $propImage;		
		}
		

		$this->data['properties']  = $propertyDetails;
		$this->data['loggedId']  = $this->session->userdata('loggedId');	
		$data = $this->load->view("property/properties",$this->data, true);
		echo $data;			
	}	
	
	// here to list the properties using jquery------------
	
	public function properties(){
	
		if($this->input->get('location')){ 	
			$address = json_decode($this->input->get('location',''));
			$address = array_reverse($address);
			//print_r($address);//die();
			$postcode = '';
			if(intval($address[0])){
				$postcode = $address[0];
				$country  = $address[1];
				$state    = $address[2];
				$district = $address[3];
				$addr     = end($address);
			}else{
				$country  = isset($address[0])? $address[0]:'';
				$state    = isset($address[1])? $address[1]:'';
				$district = isset($address[2])? $address[2]:'';
				$addr     = end($address);
			}
			/*if(!empty($address)){	
			$location = implode(',',$address);
			}else{ 
				$location = $this->input->get('location');
			}*/
		}
		//echo $state;
		//echo $country;
		//echo $district;
		//echo $addr;
		//die();
		//echo $addr;
		//$this->mcontents['location'] = isset($location)? $location:'';
        $this->mcontents['features'] = $this->input->get('features', '');
        //echo $homeAdvFeatures;die();
		$this->mcontents['purpose'] = $this->input->get('purpose', '');
		$this->mcontents['category'] = $this->input->get('category', '');
		$this->mcontents['subcategory'] = $this->input->get('subcategory', '');
		$this->mcontents['country'] = isset($country)? $country:''; 
		$this->mcontents['state'] = isset($state)? $state:''; 
		$this->mcontents['district'] = isset($district)? $district:''; 
		$this->mcontents['loc'] = isset($addr)? $addr:''; 
		$this->mcontents['from_price'] = $this->input->get('from_price', '');
		$this->mcontents['to_price'] = $this->input->get('to_price', '');
		$this->mcontents['from_sqft'] = $this->input->get('from_sqft', '');
		$this->mcontents['to_sqft'] = $this->input->get('to_sqft', '');
		
		$this->mcontents['radius'] = $this->input->get('r', '');
		$this->mcontents['lat'] = $this->input->get('lat', '');
		$this->mcontents['lng'] = $this->input->get('lng', '');
		
		//echo $this->input->get('mr', '');//die();
		$this->mcontents['master_rooms'] = $this->input->get('mr', '');
		$this->mcontents['attached_bathrooms'] = $this->input->get('ab', '');
		$this->mcontents['floor_type'] = $this->input->get('ft', '');
		//$this->mcontents['attached_bathrooms'] = $this->input->get('ab', '');
		//$this->mcontents['common_bathrooms'] = $this->input->get('cb', '');
		//$this->mcontents['no_of_gates'] = $this->input->get('gates', '');
		
		$this->mcontents['land_type'] = $this->input->get('landtype', '');
		$this->mcontents['land_position'] = $this->input->get('landpos', '');
		$this->mcontents['water_availability'] = $this->input->get('water_availability', '');
		
		$this->mcontents['floorno'] = $this->input->get('floorno', '');
		$this->mcontents['towerno'] = $this->input->get('towerno', '');
		$this->mcontents['guest_rooms'] = $this->input->get('guest_rooms', '');
		
		$this->mcontents['type'] = $this->input->get('type', '');
		$this->mcontents['workstations'] = $this->input->get('workstations', '');
		$this->mcontents['meeting_rooms'] = $this->input->get('meeting_rooms', '');
		
		$this->mcontents['username'] = $this->session->userdata('name');
		$this->mcontents['categories'] = $this->categorymodel->getCategories();	
		$this->mcontents['countries'] = $this->propertymodel->getCountries();


		//$this->mcontents['search_file'] = $includefile;
		
		$this->load->model('advertisementmodel');
		$this->mcontents['advertisements'] = $this->advertisementmodel->getAdvertisementsByPage('listing');
		
		$this->template->set_template('default');
		$this->template->write_view('content', 'property/list', $this->mcontents);
        $this->template->render();		
	}
	
	public function advancedsearch(){		
		$includefile = '';
		$catgry = $this->input->get('category');
		if($catgry == 'House/Residential'){	
			$includefile = 'home';
		}elseif($catgry == 'Lands'){
			$includefile = 'land';
		}elseif($catgry == 'Projects/Apartments'){
			$includefile = 'project';
		}elseif($catgry == 'commercial properties'){
			$includefile = 'commercial';
		}
		if($this->input->get('location')){			
			$address = json_decode($this->input->get('location',''));		
			$location = implode(',',$address);
		}
		$this->mcontents['location'] = isset($location)? $location:''; 
		$this->mcontents['purpose'] = $this->input->get('purpose', '');
		$this->mcontents['category'] = $catgry;
		$this->mcontents['country'] = $this->input->get('country', '');
		$this->mcontents['state'] = $this->input->get('state', '');
		$this->mcontents['district'] = $this->input->get('district', '');
		$this->mcontents['radius'] = $this->input->get('r', '');
		$this->mcontents['lat'] = $this->input->get('lat', '');
		$this->mcontents['lng'] = $this->input->get('lng', '');
		
		$this->load->model('advertisementmodel');
		$this->mcontents['advertisements'] = $this->advertisementmodel->getAdvertisementsByPage('advanced_search');
		$this->template->set_template('default');
		$this->template->write_view('content', 'property/advanced-'.$includefile.'-search', $this->mcontents);
        $this->template->render();
	}
	
	public function view($propertyId){
		$data = array();
		$propertyBasicDetails = $this->propertymodel->getDetails($propertyId);
        if(!empty($propertyBasicDetails['video'])){
                $link = $propertyBasicDetails['video'];
                $video_id = explode("?v=", $link);
                $video_id = isset($video_id[1])? $video_id[1]:'';
                //unset($propertyarray['video']);
            $propertyBasicDetails['video_id'] = $video_id;
         }
		$propCategory = $this->propertymodel->getCategory($propertyId);
		if($propCategory->category == 1){
			$viewContent = 'home-view';	
		}elseif($propCategory->category == 2){
			$viewContent = 'land-view';	
		}elseif($propCategory->category == 3){
			$viewContent = 'project-view';	
		}elseif($propCategory->category == 4){
			$viewContent = 'commercial-view';	
		}	
		if(!empty($propertyBasicDetails)){						
			$propFeatureDetails = $this->getPropFeatureContent($propCategory,$propertyId);
			$userDetails = 	$this->usermodel->getUserDetails($propertyBasicDetails['user_id']);
			$nearByProperties = array();
			$nearByProperties = $this->propertymodel->getNearByProperties($propertyBasicDetails['district'],$propertyBasicDetails['id']);
			foreach($nearByProperties as $key=> $val){
				$nearPropId = $nearByProperties[$key]['id'];
				$propImage = $this->propertymodel->getPropImage($nearPropId);
				$nearByProperties[$key]['nearby_prop_image'] = $propImage;
			}
		}
		$this->load->model('propamenitiesmodel');
		$amenitiesDetails = $this->propamenitiesmodel->getAmenitiesByPropId($propertyId);
			if(!empty($amenitiesDetails)){
					$propAmenities = array();
					foreach ($amenitiesDetails as $key => $value) {
					$amenityId = $amenitiesDetails[$key]['amenity_name'];
					$propAmenities[$amenityId]= $amenitiesDetails[$key]['amenities_description'];
	
			}
		}
		$this->load->model('propfloorimagemodel');
		$propertyFloorImages = $this->propfloorimagemodel->getDetails($propertyId);
		$data['property'] = isset($propertyBasicDetails )? $propertyBasicDetails:array();
		$data['features'] = isset($propFeatureDetails )? $propFeatureDetails:array();
		$data['include_view'] = $viewContent;
		$this->load->model('propfeaturemodel');
		$data['property_features'] = $this->propfeaturemodel->getFeaturesByPropId($propertyId);
		$data['property_amenities'] = isset($propAmenities )? $propAmenities:array();
		$this->load->model('propimagemodel');
		$data['property_images'] = $this->propimagemodel->getImagesByPropId($propertyId);
		$this->load->model('projfloorplanmodel');
		$projectFloorPlans = $this->projfloorplanmodel->getfloorplansByPropId($propertyId);
		$data['floorplans'] = isset($projectFloorPlans)? $projectFloorPlans:array();
		$data['user_data'] = $userDetails;
		$data['prop_floor_image'] = isset($propertyFloorImages )? $propertyFloorImages:array();
		$data['username'] = $this->session->userdata('name');
		$data['loggedId'] = $this->session->userdata('loggedId');
		$data['nearbyprops'] = isset($nearByProperties)? $nearByProperties:array();
		$data['categories'] = $this->categorymodel->getCategories();	
		$data['countries'] = $this->propertymodel->getCountries();
		
		$this->load->model('advertisementmodel');
		$data['advertisements'] = $this->advertisementmodel->getAdvertisementsByPage('view');
		$data['contact_adv'] = $this->advertisementmodel->getAdvertisementsByPage('contact_popup');
		$data['floorplan_adv'] = $this->advertisementmodel->getAdvertisementsByPage('floorplan_popup');
        
        $this->load->model('pgfeaturemodel');
		$pgFeatures = $this->pgfeaturemodel->getPgFeatures($propertyId);
		$data['pg_features'] = isset($pgFeatures) ? $pgFeatures:'';

		$this->template->set_template('default');
		$this->template->write_view('content', 'property/view', $data);
        $this->template->render();		
	}
	
	public function getSubcategoryType(){
		$subCategoryId = $this->input->post('id');
		$subCategoryData = $this->categorymodel->getSubcategoryDetails($subCategoryId);
		echo json_encode($subCategoryData);
	}
	
	public function addToShortlist(){ 
		$propertyId = $this->input->post('property_id');
		$loggedUserId = $this->input->post('user_id');
		if($this->propertymodel->propertyExists($loggedUserId,$propertyId)){
			echo 'Already added to shortlist';
		}else{
			$data = array('property_id'=>$propertyId, 'user_id' =>$loggedUserId);
			$this->load->model('shortlistmodel');
			$this->shortlistmodel->insertDetails($data);
			echo 'Added to shorlist';
		}
		
	}	
	
	public function success(){
		//$propId = base64_decode($propId);
		$propId = base64_decode($this->input->get('id', 0));
		$data['prop_detail'] = $this->propertymodel->getDetails($propId);
		$data['username'] = $this->session->userdata('name');	
		$this->template->set_template('default');
		$this->template->write_view('content', 'property/postsuccess', $data);
        $this->template->render();		
	}	
	
	public function getShortlistedProperties(){
		$data['username'] = $this->session->userdata('name');
		$this->load->model('advertisementmodel');
		$data['advertisements'] = $this->advertisementmodel->getAdvertisementsByPage('listing');
		$data['categories'] = $this->categorymodel->getCategories();	
		$data['countries'] = $this->propertymodel->getCountries();		
		$this->template->set_template('default');
		$this->template->write_view('content', 'property/shortlist-search-filter', $data);
        $this->template->render();
		
	}
	
	public function shortlist($offset = 0){
		$loggedId = $this->session->userdata('loggedId');
		$count = $this->propertymodel->shortlisted_property_count($loggedId);
		//$offset = $this->input->get('offset', 0);
		
		$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3): 0); 
		$config['total_rows'] =  $count;
		$config['per_page']= 10;
		$perpage = $this->input->post('perpage');  
		if($perpage){
			$config['per_page'] = $perpage;
		}
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['uri_segment'] = 3;
		$config['base_url']= base_url().'index.php/property/shortlist'; 
		//$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
		$this->pagination->initialize($config);
		$this->data['paginglinks'] = $this->pagination->create_links();
		//echo $this->pagination->cur_page.' '.$this->pagination->per_page;die();
        // Showing total rows count 
		if($this->data['paginglinks']!= '') {
			$totalRows = $this->pagination->total_rows;
			$paging = $this->pagination->cur_page*$this->pagination->per_page;
			if($paging > $totalRows){
				$paging = $totalRows;
			}
		  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($paging).' of '.$totalRows;
		}  
		$sortField = $this->input->post('sort_field');
		
    	$propertyDetails = $this->propertymodel->getShortlistedProperties($config["per_page"], $offset,$sortField,$loggedId);  
		foreach($propertyDetails as $key => $val){
			$category = $propertyDetails[$key]['category'];
			if($category == 1){
				$this->load->model('prophomefeaturemodel');
				$propDetails = $this->prophomefeaturemodel->getDetails($val['id']);
			}elseif($category == 2){
				$this->load->model('proplandfeaturemodel');
				$propDetails =  $this->proplandfeaturemodel->getDetails($val['id']);
			}elseif($category == 3){
				$this->load->model('propprojectfeaturemodel');
				$propDetails =  $this->propprojectfeaturemodel->getDetails($val['id']);
			}elseif($category == 4){
				$this->load->model('propcommercialfeaturemodel');
				$propDetails =  $this->propcommercialfeaturemodel->getDetails($val['id']);
			}
			$propertyDetails[$key]['prop_features'] = $propDetails;	
			$propImage = $this->propertymodel->getPropImage($propertyDetails[$key]['property_id']);
			$propertyDetails[$key]['prop_image'] = $propImage;		
		}
		$this->data['properties']  = $propertyDetails;
		$this->data['loggedId']  = $this->session->userdata('loggedId');
	
		$data = $this->load->view("property/shortlist-search-result",$this->data, true);
		echo $data;			
	}
	
	public function getUserProperties(){	
		$data['username'] = $this->session->userdata('name');	
		$this->load->model('advertisementmodel');
		$data['advertisements'] = $this->advertisementmodel->getAdvertisementsByPage('listing');
		$data['categories'] = $this->categorymodel->getCategories();	
		$data['countries'] = $this->propertymodel->getCountries();	
		$this->template->set_template('default');
		$this->template->write_view('content', 'property/my-property-search-filter', $data);
        $this->template->render();		
	}
	
	
	public function mylist($offset = 0){
		$loggedId = $this->session->userdata('loggedId');
		$count = $this->propertymodel->my_property_count($loggedId);
		//$offset = $this->input->get('offset', 0);
		
		$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3): 0); 
		$config['total_rows'] =  $count;
		$config['per_page']= 10;
		$perpage = $this->input->post('perpage');  
		if($perpage){
			$config['per_page'] = $perpage;
		}
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['uri_segment'] = 3;
		$config['base_url']= base_url().'index.php/property/mylist'; 
		//$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
		$this->pagination->initialize($config);
		$this->data['paginglinks'] = $this->pagination->create_links();
		//echo $this->pagination->cur_page.' '.$this->pagination->per_page;die();
        // Showing total rows count 
		if($this->data['paginglinks']!= '') {
			$totalRows = $this->pagination->total_rows;
			$paging = $this->pagination->cur_page*$this->pagination->per_page;
			if($paging > $totalRows){
				$paging = $totalRows;
			}
		  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($paging).' of '.$totalRows;
		}  
		$sortField = $this->input->post('sort_field');
		
    	$propertyDetails = $this->propertymodel->getMyProperties($config["per_page"], $offset,$sortField,$loggedId);  
		foreach($propertyDetails as $key => $val){
			$category = $propertyDetails[$key]['category'];
			if($category == 1){
				$this->load->model('prophomefeaturemodel');
				$propDetails = $this->prophomefeaturemodel->getDetails($val['id']);
			}elseif($category == 2){
				$this->load->model('proplandfeaturemodel');
				$propDetails =  $this->proplandfeaturemodel->getDetails($val['id']);
			}elseif($category == 3){
				$this->load->model('propprojectfeaturemodel');
				$propDetails =  $this->propprojectfeaturemodel->getDetails($val['id']);
			}elseif($category == 4){
				$this->load->model('propcommercialfeaturemodel');
				$propDetails =  $this->propcommercialfeaturemodel->getDetails($val['id']);
			}
			$propertyDetails[$key]['prop_features'] = $propDetails;	
			$propImage = $this->propertymodel->getPropImage($propertyDetails[$key]['id']);
			$propertyDetails[$key]['prop_image'] = $propImage;
					
		}
		$this->data['properties']  = $propertyDetails;
		$this->data['loggedId']  = $this->session->userdata('loggedId');
		
		$data = $this->load->view("property/my-property-search-result",$this->data, true);
		echo $data;			
	}
	
	public function removeFromShortlist(){
		$shortlistId = $this->input->post('id');
		$this->load->model('shortlistmodel');
		$this->shortlistmodel->removeShortlist($shortlistId);
		//echo 'Added to shorlist';		
	}
	
	public function removePropImage(){
		$propImageId = $this->input->post('id');
		$this->load->model('propimagemodel');
		$this->propimagemodel->removeImage($propImageId);
	}
	
	public function removeFloorImage(){
		$floorImageId = $this->input->post('id');
		$this->load->model('propfloorimagemodel');
		$this->propfloorimagemodel->removeFloorImage($floorImageId);
	}
	
	public function removeFloorPlan(){
		$floorPlanId = $this->input->post('id');
		$this->load->model('projfloorplanmodel');
		$this->projfloorplanmodel->removeFloorPlan($floorPlanId);
	}
	
	public function addpg(){
		$this->load->model('pgcategorymodel');
		$data['categories'] = $this->pgcategorymodel->getCategories();
        $data['features'] = $this->featuremodel->getAdvancedFeatures(5);
        $data['username'] = $this->session->userdata('name');	

        $this->template->set_template('default');
		$this->template->write_view('content', 'property/add-pg', $data);
		$this->template->render();
	}


	public function savepg(){
		$address = json_decode($this->input->post('location'));
		$location = implode(',',$address);
		$address = array_reverse($address);
		$postcode = '';
		if(intval($address[0])){
			$postcode = $address[0];
			$country  = $address[1];
			$state    = $address[2];
			$district = $address[3];
			$addr     = end($address);
		}else{
			$country  = $address[0];
			$state    = isset($address[1])? $address[1]:'';
			$district = isset($address[2])? $address[2]:'';
			$addr     = end($address);
		}

		$proparray = array(
			'category'=>$this->input->post('category'),
            'purpose'=>'paying guest',
			'title'=> $this->input->post('title'),
			'description'=> $this->input->post('description'),
			'estimated_price' => $this->input->post('estimated_price'),
			'sqft' => $this->input->post('sqft'),
			'postal_address' => $this->input->post('postal_address'),
			'latitude'=> $this->input->post('latitude'),
			'longitude'=> $this->input->post('longitude'),
			'address' => $location,
			'country' => $country,
			'state' => $state,
			'district' => $district,
			'pin' => $postcode,
			'location' => $addr,
            'user_id'=> $this->session->userdata('loggedId')
			);
		//$this->load->model('pgcategorymodel');
		if($this->input->post('property_id')){
			$this->propertymodel->updatePropDetails($proparray,$this->input->post('property_id'));	
			$propertyId = $this->input->post('property_id');
		}else{
			$propertyId = $this->propertymodel->insertDetails($proparray);
		}		

		$pgfeaturearray = array(
            'property_id'=> $propertyId,
			'available_for'=>$this->input->post('available_for'),
			'suitable_for'=> $this->input->post('suitable_for'),
			'age_of_property'=> $this->input->post('age_of_prop'),
			'security_deposit' => $this->input->post('security_deposit'),
			'people_occupancy' => $this->input->post('people_occupancy'),			
			'furnishing_level'=> $this->input->post('furnishing_level'),
			'available_date' => $this->input->post('available_from'),
			//'attached_bathrooms' => $this->input->post('attached_bathrooms'),
			'bed_rooms' => $this->input->post('bed_rooms'),
			'bath_rooms'=> $this->input->post('bath_rooms'),
			'food_cost'=> $this->input->post('food_cost'),
			'no_of_rooms'=> $this->input->post('no_of_rooms'),
			'furniture_details'=> $this->input->post('furniture_details')
			);
		$this->load->model('pgfeaturemodel');
		if($this->input->post('property_id')){
			//echo 'dsfsd';
			$this->pgfeaturemodel->updatePgFeatures($pgfeaturearray, $propertyId);
		}else{
			$this->pgfeaturemodel->insertPgfeatures($pgfeaturearray);
		}
		$this->load->model('propfeaturemodel');
        $this->propfeaturemodel->deleteProperty($propertyId);
        if($this->input->post('features')){
            $pgfeatures = explode(',',$this->input->post('features'));            
            $this->propfeaturemodel->insertAdvFeatures($pgfeatures,$propertyId);
        }

        if(!empty($_FILES['pg_image'])){	
			foreach($_FILES['pg_image']['name'] as $key=>$val){
				$target_dir = "uploads/pgimages/";
				$target_file = $target_dir.$_FILES['pg_image']['name'][$key];
				if(move_uploaded_file($_FILES['pg_image']['tmp_name'][$key],$target_file)){
					$data = array(
						'property_id'=> $propertyId,
						'image' => $val
							);
				$this->load->model('propimagemodel');
				$this->propimagemodel->insertImages($data);			
				}			
			}
		}

        echo $propertyId;

    }



	public function editpg(){
		$pgId = base64_decode($this->input->get('id', 0));
		if($pgId){
		$propertyDetails = $this->propertymodel->getDetails($pgId);
		//print_r($propertyDetails);die();
		$this->load->model('pgfeaturemodel');
		$pgFeatures = $this->pgfeaturemodel->getPgFeatures($pgId);
		$features = $this->featuremodel->getAdvancedFeatures(5);
		$this->load->model('propfeaturemodel');
		$featureDetails = $this->propfeaturemodel->getFeaturesByPropId($pgId);
		$propFeatures = array();
		foreach($featureDetails as $val){
			$propFeatures[] = $val['feature_id'];
		}
		$this->load->model('pgcategorymodel');
		$categories = $this->pgcategorymodel->getCategories();

		$this->load->model('propimagemodel');
		$pgImages = $this->propimagemodel->getImagesByPropId($pgId);
		
		$pgData = array(
		'prop_details' => isset($propertyDetails)? $propertyDetails:'',
		'pg_features'  => isset($pgFeatures)? $pgFeatures:'',
		'features'=> isset($features)? $features:'',
		'property_id'   => $pgId,
		'pg_adv_features'=> isset($propFeatures)? $propFeatures:'',
		'categories'  => isset($categories) ? $categories:'',
		'pg_images'  => isset($pgImages) ? $pgImages:'',
		'username'   => $this->session->userdata('name')
		);
		//echo '<pre>';
		//print_r($pgData);die();
        $this->template->set_template('default');
		$this->template->write_view('content', 'property/add-pg', $pgData);
        $this->template->render();

		}

	}




	public function payingGuestProperties(){
		//$data['username'] = $this->session->userdata('name');
		$this->load->model('pgcategorymodel');
		$data['categories'] = $this->pgcategorymodel->getCategories();	
		$data['pg_adv_features'] = $this->featuremodel->getAdvancedFeatures(5);//print_r($data['pg_adv_features']);die();
		//$data['countries'] = $this->propertymodel->getCountries();


		if($this->input->get('location')){ 	
			$address = json_decode($this->input->get('location',''));
			$address = array_reverse($address);
			//print_r($address);//die();
			$postcode = '';
			if(intval($address[0])){
				$postcode = $address[0];
				$country  = $address[1];
				$state    = $address[2];
				$district = $address[3];
				$addr     = end($address);
			}else{
				$country  = isset($address[0])? $address[0]:'';
				$state    = isset($address[1])? $address[1]:'';
				$district = isset($address[2])? $address[2]:'';
				$addr     = end($address);
			}

		}
		
		$data['category'] = $this->input->get('category', '');
		//$data['location'] = $this->input->get('location', '');
		$data['country'] = isset($country)? $country:''; 
		$data['state'] = isset($state)? $state:''; 
		$data['district'] = isset($district)? $district:''; 
		$data['loc'] = isset($addr)? $addr:''; 
		$data['availableFor'] = $this->input->get('availableFor', '');
		$data['suitableFor'] = $this->input->get('suitableFor', '');
		$data['furnishinglevel'] = $this->input->get('furnishinglevel', '');
		$data['bedrooms'] = $this->input->get('bedrooms', '');
		$data['pg_features'] = $this->input->get('features', '');
		$data['from_price'] = $this->input->get('from_price', '');
		$data['to_price'] = $this->input->get('to_price', '');
		$data['from_sqft'] = $this->input->get('from_sqft', '');
		$data['to_sqft'] = $this->input->get('to_sqft', '');


		$this->template->set_template('default');
		$this->template->write_view('content', 'property/pg-search-filter', $data);
        $this->template->render();
		
	}
	
	public function pglist($offset = 0){
		//$loggedId = $this->session->userdata('loggedId');

		$category = $this->input->post('category');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		$district = $this->input->post('district');
		$loc = $this->input->post('loc');

		$fromPrice = $this->input->post('from_price');
		$toPrice = $this->input->post('to_price');
		$fromSqft = $this->input->post('from_sqft');
		$toSqft = $this->input->post('to_sqft');

		$availableFor = $this->input->post('availableFor');
		$suitableFor = $this->input->post('suitableFor');
		$furnishinglevel = $this->input->post('furnishinglevel');
		$bedrooms = $this->input->post('bedrooms');
		$pgfeatures = $this->input->post('features');//print_r($pgfeatures) ;
		$pgfeatures = explode(',',$pgfeatures);
        
        $this->load->model('propfeaturemodel');
        $PropertyIds = $this->propfeaturemodel->getPropByFeatures($pgfeatures);
        $propIds = array();
        foreach($PropertyIds as $propId){
            $propIds[] = $propId['property_id'];
        }


		$count = $this->propertymodel->pg_property_count($category,$country,$state,$district,$loc,$availableFor,$suitableFor,$furnishinglevel,$bedrooms,$propIds,$fromPrice,$toPrice,$fromSqft,$toSqft);
		//$offset = $this->input->get('offset', 0);
		
		$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3): 0); 
		$config['total_rows'] =  $count;
		$config['per_page']= 10;
		$perpage = $this->input->post('perpage');  
		if($perpage){
			$config['per_page'] = $perpage;
		}
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['uri_segment'] = 3;
		$config['base_url']= base_url().'index.php/property/pglist'; 
		//$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
		$this->pagination->initialize($config);
		$this->data['paginglinks'] = $this->pagination->create_links();
		//echo $this->pagination->cur_page.' '.$this->pagination->per_page;die();
        // Showing total rows count 
		if($this->data['paginglinks']!= '') {
			$totalRows = $this->pagination->total_rows;
			$paging = $this->pagination->cur_page*$this->pagination->per_page;
			if($paging > $totalRows){
				$paging = $totalRows;
			}
		  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($paging).' of '.$totalRows;
		}  
		$sortField = $this->input->post('sort_field');
		
    	$propertyDetails = $this->propertymodel->getPgProperties($config["per_page"], $offset,$sortField,$category,$country,$state,$district,$loc,$availableFor,$suitableFor,$furnishinglevel,$bedrooms,$propIds,$fromPrice,$toPrice,$fromSqft,$toSqft);  
		foreach($propertyDetails as $key => $val){
			$id = $propertyDetails[$key]['id'];
			$this->load->model('pgfeaturemodel');
			$pgFeatures = $this->pgfeaturemodel->getPgFeatures($id);
			$propertyDetails[$key]['prop_features'] = $pgFeatures;	
			$this->load->model('propfeaturemodel');
			$featureDetails = $this->propfeaturemodel->getFeaturesByPropId($id);
			$pgAdvFeatures = array();
			foreach($featureDetails as $val){
				$pgAdvFeatures[] = $val['feature_id'];
			}
			$propertyDetails[$key]['pg_adv_features'] = $pgAdvFeatures;		
			$propImage = $this->propertymodel->getPropImage($id);
			$propertyDetails[$key]['prop_image'] = $propImage;		
		}
		//echo '<pre>';
		//print_r($propertyDetails);die();
		$this->data['properties']  = $propertyDetails;
		$this->data['loggedId']  = $this->session->userdata('loggedId');
	
		$data = $this->load->view("property/pg-search-result",$this->data, true);
		echo $data;			
	}	

	public function deletePgImages(){
		$pgImageId = $this->input->post('pg_image_id');
		$this->load->model('propimagemodel');
		$this->propimagemodel->removeImage($pgImageId);		
	}


	public function pgview($propertyId){
		$data = array();
		$pgBasicDetails = $this->propertymodel->getPgDetails($propertyId);
		$userDetails = 	$this->usermodel->getUserDetails($pgBasicDetails['user_id']);

		$nearByProperties = array();
		$nearByProperties = $this->propertymodel->getNearByProperties($pgBasicDetails['district'],$pgBasicDetails['id']);
		foreach($nearByProperties as $key=> $val){
			$nearPropId = $nearByProperties[$key]['id'];
			$propImage = $this->propertymodel->getPropImage($nearPropId);
			$nearByProperties[$key]['nearby_prop_image'] = $propImage;
		}
		$this->load->model('propfeaturemodel');
			
		$data['property'] = isset($pgBasicDetails )? $pgBasicDetails:array();
		$data['include_view'] = 'pg-features-view';
		$this->load->model('propfeaturemodel');
		$data['property_features'] = $this->propfeaturemodel->getFeaturesByPropId($propertyId);

		$this->load->model('propimagemodel');
		$data['property_images'] = $this->propimagemodel->getImagesByPropId($propertyId);
		
		$data['user_data'] = $userDetails;
		$data['username'] = $this->session->userdata('name');
		$data['loggedId'] = $this->session->userdata('loggedId');
		$this->load->model('pgcategorymodel');
		$data['categories'] = $this->pgcategorymodel->getCategories();	
		$data['nearbyprops'] = isset($nearByProperties)? $nearByProperties:array();
		
		$this->load->model('advertisementmodel');
		$data['advertisements'] = $this->advertisementmodel->getAdvertisementsByPage('view');
		$data['contact_adv'] = $this->advertisementmodel->getAdvertisementsByPage('contact_popup');
		//echo '<pre>';
		//print_r($data);die();

		$this->template->set_template('default');
		$this->template->write_view('content', 'property/pg-view', $data);
        $this->template->render();		
	}
		
	
	
}
