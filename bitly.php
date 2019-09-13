<?php 

$long_url = 'https://stackoverflow.com/questions/ask';
$apiv4 = 'https://api-ssl.bitly.com/v4/bitlinks/http://bit.ly/32IOOfN/clicks';//https://api-ssl.bitly.com/v4/bitlinks
$genericAccessToken = 'aaa7049abd7140dee0925aaae7e60e67ab54dc67';

// $data = array(
//     'long_url' => $long_url
// );
// $payload = json_encode($data);
//
$header = array(
    'Host: api-ssl.bitly.com',
    'Authorization: Bearer ' . $genericAccessToken,
    // 'Content-Type: application/json',
    // 'Content-Length: ' . strlen($payload)
);
// curl get request with header
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-ssl.bitly.com/v4/bitlinks/bit.ly/32IOOfN/clicks");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// curl_setopt($ch, CURLOPT_USERPWD, "Authorization: Bearer aaa7049abd7140dee0925aaae7e60e67ab54dc67");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

$result = curl_exec($ch);

$info = curl_getinfo($ch);

$result= json_decode($result);
echo '<pre>';
print_r($result);//$info['request_header']
 ?>
