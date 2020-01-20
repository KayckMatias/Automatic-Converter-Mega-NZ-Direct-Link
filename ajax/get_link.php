<?php
$url = $_POST['link'];
preg_match("/!(.+?)!/", $url, $output_file_id);
$fileID = $output_file_id[1];
$domain = "meganz";
$lang = "en";
$URLtoGET = "https://eu.api.mega.co.nz/cs?domain=$domain&lang=$lang";
 
$value = array(
  array(
    'a' => 'g',
    'g' => 1,
    'ssl' => 0,
    'p' => $fileID)
  );

  $rawPOST = json_encode($value);

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,            $URLtoGET);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST,           true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,     $rawPOST);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36');
  curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: text/plain;charset=UTF-8'));

$result = curl_exec($ch);
$jsonResult = json_decode($result);

echo $jsonResult[0]->g;
?>