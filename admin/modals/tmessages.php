<?php

$baseUrl = "http://bulksms.mobitechtechnologies.com/api/sendsms";
$ch = curl_init($baseUrl);
$data = array(
       'api_key' => '60b768524118e',
       'username' => 'wainaina',
       'sender_id' => '22136',
       'message' => "$message",
       "phone"=>"$number",
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS,$payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('content-Type:application/json','Accept:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$result =curl_exec($ch);
curl_close($ch);
return $result;
echo $result;