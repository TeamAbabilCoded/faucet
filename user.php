<?php
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
require("config.php");
/* START COLOR */
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
$t="\n";
$r="\n\n";
@system("rm -rf user.php");
@system("clear");
/* END COLOR */

$false = "{$abu2}[{$red}x{$abu2}]{$red2}";
$true = "{$abu2}[{$green}+{$abu2}]{$green2}";
$pentung = "{$abu2}[{$yellow}!{$abu2}]{$yellow2}";
$titik = "{$putih}[{$kuning}+{$putih}]";
$des = "{$green2}>{$red2}X{$green2}<";
$des1 = "{$yellow2}*";



echo$red."
    ____  _ __             _
   / __ )(_) /__________  (_)___
  / __  / / __/ ___/ __ \/ / __ \ "; echo$ijo."Creator : "; sleep(1);echo$putih."MK KHAIRIL"; sleep(1); echo$red."
 / /_/ / / /_/ /__/ /_/ / / / / / "; echo$ijo."Support : "; sleep(1);echo$putih."Cocentz 404"; sleep(1); echo$red."
/_____/_/\__/\___/\____/_/_/ /_/".$t;
echo$ijo."Youtube : "; sleep(1);echo$putih."MK KHAIRIL"; sleep(1); echo$putih."   ______".$red."  MUHAMMAD KHAIRIL".$putih."    __".$t;
echo$ijo."Youtube : "; sleep(1);echo$putih."Cocentz404"; sleep(1); echo$putih."  / ____/___ ___  __________  / /_
                     / /_  / __ `/ / / / ___/ _ \/ __/
                    / __/ / /_/ / /_/ / /__/  __/ /_
                   /_/    \__,_/\__,_/\___/\___/\__/".$r;
function token($data){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://securetoken.googleapis.com/v1/token?key=AIzaSyB1gPSMPtsInO-jYnmg2-zRn-_JA3wN-Xk');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $headers = array();
  $headers[] = 'Content-Type: application/x-www-form-urlencoded';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=refresh_token&refresh_token='.$data);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $result = curl_exec($ch);
  curl_close ($ch);
  return $result;
}


function curl($url,$headers,$data){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}
function profile($uid,$cred,$irkop) {
  while (True){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://btcfaucet-f170d.firebaseio.com/'.$irkop.'/'.$uid.'/fefd5f12a4151a8d/.json?print=pretty&auth='.$cred);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array(
    "User-Agent: Firebase/5/3.0.0/28/Android"
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    if ($result == null){
      continue;
    }else{
      return $result;
      break;
    }
 }
}
function login($uid,$cred) {
  while (True){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://btcfaucet-f170d.firebaseio.com/earningprofile/'.$uid.'/.json?print=pretty&auth='.$cred);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array(
    "User-Agent: Firebase/5/3.0.0/28/Android"
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    if ($result == null){
      continue;
    }else{
      return $result;
      break;
    }
 }
}

function point($uid,$cred,$datapoint) {
  while(True){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://btcfaucet-f170d.firebaseio.com/earningprofile/'.$uid.'/erc/.json?print=pretty&auth='.$cred);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datapoint);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Accept: */*';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Host: btcfaucet-f170d.firebaseio.com';
    $headers[] = 'User-Agent: Firebase/5/3.0.0/28/Android';
    $headers[] = 'cache-control: no-cache';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    if ($result == null){
      continue;
    }else{
      return $result;
      break;
    }
 }
}
function uds($uid,$cred,$datapoint) {
  while(True){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://btcfaucet-f170d.firebaseio.com/userprofiles/'.$uid.'/27aec0e5d3c7b8a0/uds/.json?print=pretty&auth='.$cred);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datapoint);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Accept: */*';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Host: btcfaucet-f170d.firebaseio.com';
    $headers[] = 'User-Agent: Firebase/5/3.0.0/28/Android';
    $headers[] = 'cache-control: no-cache';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    if ($result == null){
      continue;
    }else{
      return $result;
      break;
    }
 }
}

function av($uid,$cred,$datapoint) {
  while(True){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://btcfaucet-f170d.firebaseio.com/userprofiles/'.$uid.'/27aec0e5d3c7b8a0/av/.json?print=pretty&auth='.$cred);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datapoint);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Accept: */*';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Host: btcfaucet-f170d.firebaseio.com';
    $headers[] = 'User-Agent: Firebase/5/3.0.0/28/Android';
    $headers[] = 'cache-control: no-cache';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    if ($result == null){
      continue;
    }else{
      return $result;
      break;
    }
 }
}
function eeb($uid,$cred,$datapoint) {
  while(True){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://btcfaucet-f170d.firebaseio.com/earningprofile/'.$uid.'/eeb/.json?print=pretty&auth='.$cred);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datapoint);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Accept: */*';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Host: btcfaucet-f170d.firebaseio.com';
    $headers[] = 'User-Agent: Firebase/5/3.0.0/28/Android';
    $headers[] = 'cache-control: no-cache';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    if ($result == null){
      continue;
    }else{
      return $result;
      break;
      }
 }
}

echo "\n\n{$pentung}\033[1;37m Try To Get Cred From Server";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
echo ".\n";
sleep(1);
$get_token = json_decode(token($refresh_token));
if($get_token->user_id == True){
    echo "\r                                                  \r";
    echo "\r{$true} \033[1;37mSuccess Get Cred!!\n";
    $cred = $get_token->id_token;
    $uid = $get_token->user_id;
    $json = json_decode(login($uid,$cred));
}else{
        echo "\r                                                  \r";
    echo "\r{$false} $get_token->error\n";
    exit();
}

$irkop="userprofiles";
  $js = json_decode(profile($uid,$cred,$irkop),true);
echo $hitam."\nYour phone : $lblue". $js["udn"];
$js = json_decode(login($uid,$cred),true);
echo $ijo."\nNama : $putih". $js["eun"];
  echo $ijo."\nBalance : $putih". $js["et"]." Satoshi";
  echo "\n";
  echo "\n";


while (True){
	echo "\r                                         \r";
  echo "\r{$pentung} Try To Get Data From Server";
  $js = json_decode(login($uid,$cred));
  if ($js->error == True){
     echo "\r                                         \r";
     echo "\r{$false} Creed Sudah Expired\n";
     $get_token = json_decode(token($refresh_token));
if($get_token->user_id == True){
    echo "\r                                                  \r";
    echo "\r{$true} Success Get Cred!!\n";
    $cred = $get_token->id_token;
    $uid = $get_token->user_id;
    $json = json_decode(login($uid,$cred));
}else{
        echo "\r                                                  \r";
    echo "\r{$false} $get_token->error\n";
    exit();
}


  $json = json_decode(login($uid,$cred));
   if($json->error == "Auth token is expired"){
      echo "\r                                                  \r";
      echo "\r{$false} $json->error\n";
      sleep(1);
      echo "{$pentung} Try To Get New Cred From Server";
      sleep(1);
      echo ".";
      sleep(1);
      echo ".";
      sleep(1);
      echo ".\n";
      sleep(1);
      $get_token = json_decode(token($refresh_token));
      if($get_token->user_id == True){
          echo "\r                                                  \r";
          echo "\r{$true} Sukses Get New Cred!!\n";
          $cred = $get_token->id_token;
          $uid = $get_token->user_id;
          $json = json_decode(login($uid,$cred));
      }else{
        echo "\r                                                  \r";
          echo "\r{$false} $get_token->message\n";
          exit();
      }
   }
  }
  echo "\r                                         \r";
  echo "\r{$pentung} Try To Claiming Faucet";
  uds($uid,$cred,"true");
  uds($uid,$cred,"false");
  av($uid,$cred,"2");
  echo "\r                                         \r";
  echo "\r{$pentung} Try To Injecting Point";
  point($uid,$cred,$js->erc+1);
  echo "\r                                         \r";




  if ($js->error == True){
      $get_token = json_decode(token($refresh_token));
      if($get_token->user_id == True){
          echo "\r                                                  \r";
          echo "\r{$red} Sukses Get New Cred!!\n";
          $cred = $get_token->id_token;
          $uid = $get_token->user_id;
          $json = json_decode(login($uid,$cred));
      }else{
        echo "\r                                                  \r";
          echo "\r{$false} $get_token->message\n";
          exit();
      }
   }


  echo$putih."[".$kuning."+".$putih."]";
echo$turkis."Balance :{$putih} ";
  print_r($js->et);
  echo " {$turkis}Satoshi {$putih}||$turkis Energi :$putih {$js->eeb}⚡\n";
  echo "\r{$pentung} {$red}05:00 {$putih}please waiting";
  if ($js->eeb < 1){
    eeb($uid,$cred,"50");
  }
  sleep(1);
  for ($minute=4;$minute>-1;$minute--){
    for ($second1=5;$second1>-1;$second1--){
      for ($second2=9;$second2>-1;$second2--){
        echo "\r{$pentung} {$res}0".$minute.":".$second1.$second2." {$yellow2} please waiting";
        sleep(1);
        echo "\r                                         \r";
      }
    }
  }
}

?>
