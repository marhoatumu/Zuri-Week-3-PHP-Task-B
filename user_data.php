<?php
//insert form data into a variable.
$form_data = $_GET;

$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$email = $_GET['email'];
$birthDate = $_GET['birthDate'];
$gender = $_GET['gender'];
$country = $_GET['lastName'];

//Add form data to CSV file.
$filename = "userdata.csv";    
$handle = fopen($filename, "a");
fputcsv($handle, $form_data);
fclose($handle);

//Display form data on frontend.
echo "First Name: " . $firstName . "<br>";
echo "Last Name: " . $lastName . "<br>";
echo "Email Address: " . $email . "<br>";
echo "Date of Birth: " . $birthDate . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Country: " . $country . "<br>";