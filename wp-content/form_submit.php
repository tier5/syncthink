<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// TODO
// 1) Trigger automatic Mailchimp follow-up

// GET FORM INPUT
$name = $_POST['field-name'];
$company = $_POST['field-company'];
$phone = $_POST['field-phone'];
$email = $_POST['field-email'];
$use = $_POST['field-use'];
$message = $_POST['field-message'];

// file_put_contents("saleforceiq_log.txt", "Input:\n", FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", $name, FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", "\n", FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", $company, FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", "\n", FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", $phone, FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", "\n", FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", $email, FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", "\n", FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", $use, FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", "\n", FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", $message, FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", "\n\n", FILE_APPEND);

//-------------------------

// CREATE NEW CONTACT
$credentials = "56318e53e4b0988973004dd3:hCnaiNIFWUSWRB6S5gEPTUgJWTc";
$header = array('Content-Type: application/json','Accept: application/json',"Authorization: Basic " . base64_encode($credentials));
$data = array('properties' => ["name" => [["value" => $name]],
                               "email" => [["value" => $email]],
                               "phone" => [["value" => $phone]],
                               "company" => [["value" => $company]]]);
$curl = curl_init('https://api.salesforceiq.com/v2/contacts');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_TIMEOUT, 60);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($data));
$contact = json_decode(curl_exec($curl));
curl_close($curl);

// file_put_contents("saleforceiq_log.txt", "\n\n", FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", json_encode($contact), FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", "\n\n", FILE_APPEND);

// CREATE A NEW LEAD
$data = array("listId" => "56390a83e4b041b683517961", 
              "contactIds" => [$contact->{'id'}], 
              "name" => "Leads", 
              "fieldValues" => ["8" => [["raw" => "1"]]]);
$curl = curl_init('https://api.salesforceiq.com/v2/lists/56390a83e4b041b683517961/listitems');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_TIMEOUT, 60);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($data));
$lead = json_decode(curl_exec($curl));
curl_close($curl);

// file_put_contents("saleforceiq_log.txt", "\n\n", FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", json_encode($lead), FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", "\n\n", FILE_APPEND);

// LOG MESSAGE AS EVENT
$data = array('subject' => 'Website form submission: ' . $use, 
              'body' => $message, 
              'participantIds' => [["type" => "email", "value" => $email]]);
$curl = curl_init('https://api.salesforceiq.com/v2/events');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_TIMEOUT, 60);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($data));
$event = json_decode(curl_exec($curl));
curl_close($curl);

// file_put_contents("saleforceiq_log.txt", "\n\n", FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", json_encode($event), FILE_APPEND);
// file_put_contents("saleforceiq_log.txt", "\n\n", FILE_APPEND);
?>