<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));

require "teamwork_api/vendor/autoload.php";

// START configurtion
const API_KEY = 'twp_LIMF2X4p8VgdWp2p5DPs7rA3m6ix';
const API_URL = 'https://australiawow.teamwork.com/'; // only required if you have a custom domain

if (!$_POST) {
	$post = $_POST;
	
	try {
		//TeamWorkPm\Auth::set(API_URL);
		TeamWorkPm\Auth::set(API_URL, API_KEY);
	
		/*
// create an project
	    $company = TeamWorkPm\Factory::build('company');
	    $company_id = $company->save(array(
	        'name'=> 'This is an test company',
	        'description'=> 'Bla, Bla, Bla'
	    ));
	    
		// create an project
	    $project = TeamWorkPm\Factory::build('project');
	    $project_id = $project->save(array(
	        'name'=> 'This is an test project',
	        'description'=> 'Bla, Bla, Bla',
	        'company_id'	=> $company_id
	    ));
	    
	    // create one people and add to project and company
	    $people = TeamWorkPm\Factory::build('people');
	    $person_id = $people->save(array(
	        'first_name'    => "Test",
	        'last_name'     => 'User',
	        'user_name'		=> false,
	        'user_type'     => 'contact',
	        'email_address' => 'email@hotmail.com',
	        'company_id'	=> $company_id,
	        'project_id'    => $project_id
	    ));
*/
	    $file = TeamWorkPm\Factory::build('file');
	    
		$filename = '../images/no-image.png';
		$file_name_with_full_path = realpath($filename);
	    
	    /*
$file_id = $file->upload($file_name_with_full_path);
	    $projects = $file->save(array(
	    	'pending_file_ref' => $file_id,
	    	'project_id' => '251137',
	    ));
*/
		/*
$project = TeamWorkPm\Factory::build('project');
		//$projects = $project->getGDrive('251137');
		$projects = $project->setGDrive('251137', array(
			'gdrive' => true,
			//"folder_access" => "alladmins",  
		    //"enabled" => "0",
		    //"folder-id" => "0B5fM9m0rskTsSl9zeVRHcGx2Tkk"
		));
*/
		//$projects = $file->getByProject('251137');
		//$projects = $project->getAll();
	    echo '<pre>';
	    print_r(json_decode($projects));
	    echo '</pre>';die();
	    $result = array("status" => $file, "post" => $post);
	
		echo json_encode($result);
		exit();
	    //echo $project_id;
	    
    } catch (Exception $e) {
	    $result = array("status" => $e);
	
		echo json_encode($result);
		exit();
	}
    
}
	    /*
$result = array("status" => $_FILES, "post" => $post);
	
		echo json_encode($result);
		exit();
*/