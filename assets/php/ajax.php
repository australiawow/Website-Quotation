<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));

require "teamwork/vendor/autoload.php";

use GuzzleHttp\Client as Guzzle;
use Rossedman\Teamwork\Client;
use Rossedman\Teamwork\Factory as Teamwork;

if ($_POST) {
	$post = $_POST;
	
	$client     = new Client(new Guzzle, 'twp_LIMF2X4p8VgdWp2p5DPs7rA3m6ix', 'australiawow.teamwork.com');
	$teamwork   = new Teamwork($client);
	
	/*
$company = $teamwork->company()->create([
	    "name" 			=> $post['company_name'],
	    "phone"		 	=> $post['company_phone'],
	    "email_one" 	=> $post['company_email']
	]);
	
	$project = $teamwork->project()->create([
	    "name" 			=> $post['company_name'],
	    "companyId" 	=> $company['id']
	]);
	
	$user = $teamwork->people()->create([
	    "first-name" 	=> $post['fname'],
	    "last-name" 	=> $post['lname'],
	    "email-address" => $post['contact_email'],
	    "user-type" 	=> "contact",
	    "company-id" 	=> $company['id']
	]);
	
	$added = $teamwork->project(intval($project['id']))->people(intval($user['id']));
*/
	
	
	
	$result = array("status" => $added);
	
	echo json_encode($result);
	exit();
}


	/*
$company = $teamwork->company()->create([
	    "name" 			=> "Test",
	    "phone"		 	=> "9999999",
	    "email_one" 	=> "test@test.com"
	]);
	
	echo '<pre>';
	print_r($company);
	echo '</pre>';
	
	$user = $teamwork->people()->create([
	    "first-name" 	=> "Test",
	    "last-name" 	=> "Ing",
	    "email-address" => "test@ing.com",
	    "user-type" 	=> "account",
	    "user-name" 	=> "Deathlok",
	    "company-id" 	=> "80731"
	]);
	
	
	echo '<pre>';
	print_r($user);
	echo '</pre>';die();
*/

/*
// COMPANIES 
// Retrieve all companies
$companies = $teamwork->company()->all();

echo '<pre>';
print_r($companies);
echo '</pre>';

// Retrieve company by ID
$teamwork->company($id)->find();

// Create a company! Aha! Business!
$teamwork->company()->create([
    "name" => "Satan Inc.",
    "address_one" => "666 Deathzone Rd.",
    "zip" => "66666",
    "city" => "Lake Of Fire",
    "state" => "Hellworld",
    "countrycode" => "US"
]);

// Update a company
$teamwork->company($id)->update([
    "name" => "Clients From Hell"
]);

// Delete a company
$teamwork->company($id)->delete();

// Get people associated with company
$teamwork->company($id)->people();


// PEOPLE
// Gather all the peoples
$teamwork->people()->all();

// Paginate people
$teamwork->people()->all(['page' => "3", "pageSize" => "10"]);

// Get a person by email address
$teamwork->people()->all(['emailaddress' => 'test@awesome.com']);

// Create a person
$teamwork->people()->create([
    "first-name" => "Warlock",
    "last-name" => "Mastermind",
    "email-address" => "witchery@thedevil.com",
    "user-type" => "account",
    "user-name" => "Deathlok"
    ...
]);

// Update a person
$teamwork->people($id)->update([
    "first-name" => "Nero"
]);

// Delete a person
$teamwork->people($id)->delete();

// Find out who you are logged in as
$teamwork->people()->me();

// Get all API Keys For site admin only
$teamwork->people()->apiKeys();

// PROJECTS
// Get all projects in Teamwork.
$teamwork->project()->all();

// Find a specific project by ID.
$teamwork->project($projectID)->find();

// Create a project
$teamwork->project()->create([
    "name" => "My New Amazing Project",
    "description" => "This is a project that I will dedicate my whole life too",
    "companyId" => "999"
]);

// Update a project
$teamwork->project($projectID)->update([
    "name" => "Satan, The Project"
]);

// Delete a project
$teamwork->project($projectID)->delete();

// Get the latest activity
$teamwork->project($projectID)->activity();
$teamwork->project($projectID)->activity(['maxItems' => 5]);

// Get all companies involved in a project.
$teamwork->project($projectID)->companies();

// Get all people associated with a project.
$teamwork->project($projectID)->people();

// Get starred projects
$teamwork->project()->starred();

// Star or unstar a project
$teamwork->project($projectID)->star();
$teamwork->project($projectID)->unstar();

// Get all links on a project
$teamwork->project($projectID)->links();

// Get the time totals for a project.
$teamwork->project($projectID)->timeTotal();

// Retrieve latest messages and archived messages
$teamwork->project($projectID)->latestMessages();
$teamwork->project($projectID)->archivedMessages();

// Get all milestones
$teamwork->project($projectID)->milestones();

// Create a milestone associated with a project
$teamwork->project($projectId)->createMilestone([
    "title" => "Save The World",
    "description" => "You must save the world in the next few days",
    "deadline" => "20150402",
    "notify" => true,
    "reminder" => true
]);
*/