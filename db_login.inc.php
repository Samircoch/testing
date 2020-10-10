<?php
	include_once 'dbh.inc.php';


// TEMPLATE PHP
//setting values equals to form inputs
$email = $_POST['email'];
$phone_number = $_POST['phone'];
$current_address = $_POST['address'];
$currently_insured = $_POST['insured'];
$num_of_driver = $_POST['num_of_driver'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$marital_status = $_POST['marital_status'];
$education_level = $_POST['education_level']; 
$occupation = $_POST['occupation'];
$drivers_license = $_POST['drivers_license'];
$current_city = $_POST['current_city'];
$current_state = $_POST['current_state'];
$zipcode = $_POST['zipcode'];
$num_of_car = $_POST['num_of_car'];
$vin_number = $_POST['vin_number'];
$year_of_car = $_POST['year_of_car'];
$make_of_car = $_POST['make_of_car'];
$model_of_car = $_POST['model_of_car'];
$ownership = $_POST['ownership'];
$primary_use = $_POST['primary_use']; 
$annual_milage = $_POST['annual_milage'];
$coverage = $_POST['coverage'];
$deductible = $_POST['deductible'];
$roadside_assistance = $_POST['roadside_assistance'];
$additional_coverage = $_POST['additional_coverage'];
$bundle = $_POST['bundle'];
$submission_date = date('Y/m/d');


//creating the sql statement to input those values 
$sql = "INSERT INTO wp_auto_form_test (email, phone_number, current_address, currently_insured, num_of_driver, first_name, last_name, birthdate, gender, marital_status, education_level, occupation, drivers_license, city, current_state, zipcode, num_of_car, vin_number, year_of_car, make_of_car, model_of_car, ownership, primary_use, annual_milage, coverage, deductible, roadside_assistance, additional_coverage, bundle, submission_date) VALUES ('$email', '$phone_number', '$current_address', '$currently_insured', '$num_of_driver', '$first_name', '$last_name', '$birthdate', '$gender', '$marital_status', '$education_level', '$occupation', '$drivers_license', '$current_city','$current_state', '$zipcode', '$num_of_car', '$vin_number', '$year_of_car', '$make_of_car', '$model_of_car', '$ownership', '$primary_use', '$annual_milage', '$coverage', '$deductible', '$roadside_assistance', '$additional_coverage', '$bundle', '$submission_date');";

mysqli_query($conn, $sql); //mysqli_query() expects parameter 1 to be mysqli, bool given
	
//Executes a shell command that navigates to the programs directory and then run the program
shell_exec("cd /d E:\NetBeansProjects\Selenium\dist && java -jar Selenium.jar");

//Returns to the orginal form
header("Location: ../index.php?signup=success");
