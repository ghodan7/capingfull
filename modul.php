<?php
$biru = "[1;34m";
$turkis = "[1;36m";
$ijo = "[92m";
$putih = "[1;37m";
$pink = "[1;35m";
$red = "[1;31m";
$kuning = "[1;33m";
function login($coki) {
     $header[] = "Cookie:$coki";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "https://ai.caping.co.id/v2/user/ccsp/detail", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function absen($coki) {
     $header[] = "Cookie:$coki";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "https://ai.caping.co.id/v2/event/signin", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function diamon($coki) {
     $header[] = "Cookie:$coki";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "https://ai.caping.co.id/v2/event/signin", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function push($coki) {
     $header[] = "Cookie:$coki";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "https://ai.caping.co.id/v2/event/share/click/push", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function video($coki, $rand) {
     $header[] = "Cookie:$coki";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "https://ai.caping.co.id/v2/event/video/view/$rand", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function news($coki, $rand) {
     $header[] = "Cookie:$coki";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "https://ai.caping.co.id/v2/event/news/view/$rand", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function share($coki, $rand) {
     $header[] = "Cookie:$coki";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "https://ai.caping.co.id/v2/event/share/news/$rand", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function invite($coki) {
     $header[] = "Cookie:$coki";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "https://ai.caping.co.id/v2/event/invite/verify/vnfkp5", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function top($no, $ijo, $red, $uid, $coki, $id) {
     $data = array("mobile" => $no, "productId" => $id, "uid" => $uid);
     $data2 = json_encode($data);
     $leg = strlen($data2);
     $ch = curl_init("https://ai.caping.co.id/v2/product/order/create");
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
     curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6");
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cookie:$coki", "Content-Type:application/json", "Content-Length:".$leg, "NETWORKSTATE:wifi", "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6"));
     $result = curl_exec($ch);
     curl_close($ch);
     $js = json_decode($result, true);
     $code = $js["code"];
     $msg = $js["message"];
     if ($code != "310") {
          echo$ijo."[--] ".$msg."
          ";
          exit;
     } else {
          echo$red."[--] ".$msg."
          ";
     }
}
function produk($coki) {
     $header[] = "Cookie:$coki";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "https://ai.caping.co.id/v2/product/new/list?offset=0&limit=2147483647", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function loading($load) {
     $x = 0;
     while ($x < $load) {
          $x++;
          echo"•";
          sleep(1);
     }
}
function open($coki, $d, $lv) {
     $header[] = "Referer:http://campaign.caping.co.id/christmas2018/?u=".substr($coki, 2, 8)."&c=".substr($coki, 12)."&d=".$d."&type=1";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "http://ai.caping.co.id/dice/package/open?uid=".substr($coki, 2, 8)."&level=".$lv, CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function buy($coki, $d, $lv) {
     $header[] = "Referer:http://campaign.caping.co.id/christmas2018/?u=".substr($coki, 2, 8)."&c=".substr($coki, 13)."&d=".$d."&type=1";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "http://ai.caping.co.id/dice/buy/package/chance?uid=".substr($coki, 2, 8)."&level=".$lv, CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function history($coki) {
     $header[] = "Cookie:$coki";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "https://ai.caping.co.id/v2/user/ccsp/history/coin?limit=20&offset=0", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
function visitor($coki) {
     $header[] = "Cookie:$coki";
     $header[] = "User-Agent:Mozilla/5.0 (Linux; Android 7.1.2; Redmi 3 Build/NJH47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.92 Mobile Safari/537.36;CapingNews/4.1.6";
     $curl = curl_init();
     curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_URL => "https://ai.caping.co.id/v2/user/login/visitor", CURLOPT_TIMEOUT => 30, CURLOPT_HTTPHEADER => $header, CURLOPT_SSL_VERIFYPEER => 0,));
     $result = curl_exec($curl);
     curl_close($curl);
     return$result;
}
?>