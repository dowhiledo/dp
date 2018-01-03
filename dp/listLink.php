<?php






$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.dropboxapi.com/2/sharing/list_shared_links");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"cursor\": \"ZtkX9_EHj3x7PMkVuFIhwKYXEpwpLwyxp9vMKomUhllil9q7eWiAu\"}");
curl_setopt($ch, CURLOPT_POST, 1);



$headers = array();
$headers[] = "Authorization: Bearer <get access token>";
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);