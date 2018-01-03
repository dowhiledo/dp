<?php $token = 'r-NjLsG5YYIAAAAAAAAAYvrfxSsdVfyPoEY_iZ-pE649jfpF7Z2r3BuFxChBJ9BZ';
//$token = "7pJv_VasFdAAAAAAAAAAzDYBKkuLq4Yfv51v_iQTdeMWN61FhGNGKzgtTgz8MRif";
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
$rutanombrek = "/12-2017/tigre.jpg";
$otro = curl_setopt($ch, CURLOPT_URL, "https://api.dropboxapi.com/2/files/get_temporary_link");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"path\": \"/12-2017/tigre.jpg\"}");
//curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"path\": \"".$rutanombrek."\"}");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = "Authorization: Bearer " . $token;
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $result . "<br>";
$array = json_decode($result, true);
$link = $array['link'];
echo '<a href=' . $link . '>aaaa</a>';
echo "<a href=" . $array['link'];
header($array['link']);
header("Location: " . $array['link'] );
echo '<br>'; echo '<img src='.$link.'/>';