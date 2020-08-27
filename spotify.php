<?php
echo "+_+_+_+_+_+\n";
echo "Created with love <3\n";
echo "By gru\n";
echo "facebook.com/nansyiiah";
echo "+_+_+_+_+_+\n\n\n";
echo "username email : ";
$namamu = trim(fgets(STDIN));
echo "password : ";
$password = trim(fgets(STDIN));
echo "Berapa akun : ";
$akun = trim(fgets(STDIN));
for ($i=0; $i<$akun; $i++){

$headers = array();
$headers[] = 'Accept-Language: en-ID;q=1, en-US;q=0.5';
$headers[] = 'User-Agent: Spotify/8.5.65 Android/22 (SM-N950U)';
$headers[] = 'Spotify-App-Version: 8.5.65';
$headers[] = 'X-Client-Id: 9a8d2f0ce77a4e248bb71fefcb557637';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Host: spclient.wg.spotify.com';

$email = $namamu.$i."@driankorp.com";
$regis_url = curl('https://spclient.wg.spotify.com:443/signup/public/v1/account/', 'iagree=true&birth_day=12&platform=Android-ARM&creation_point=client_mobile&password='.$password.'&key=142b583129b2df829de3656f9eb484e6&birth_year=2000&email='.$email.'&gender=male&app_version=849800892&birth_month=12&password_repeat='.$password.'');
$data = json_decode($regis_url[0]);
		if ($data->status == 1) {
            echo "Success create $email|$password\n";
			fwrite(fopen("spotify-success.txt", "a"), "$email|$password \n");
		} else {
			echo $data->errors->email."\n";
    }
}

function random($length,$a) { 		$str = ""; 		if ($a == 0) { 			$characters = array_merge(range('0','9')); 		}elseif ($a == 1) { 			$characters = array_merge(range('a','z')); 		}elseif ($a == 2) { 			$characters = array_merge(range('A','Z')); 		}elseif ($a == 3) { 			$characters = array_merge(range('0','9'),range('a','z')); 		}elseif ($a == 4) { 			$characters = array_merge(range('0','9'),range('A','Z')); 		}elseif ($a == 5) { 			$characters = array_merge(range('a','z'),range('A','Z')); 		}elseif ($a == 6) { 			$characters = array_merge(range('0','9'),range('a','z'),range('A','Z')); 		} 		$max = count($characters) - 1; 		for ($i = 0; $i < $length; $i++) { 			$rand = mt_rand(0, $max); 			$str .= $characters[$rand]; 		} 		return $str; } function curl($url, $fields = null, $headers = null) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); if ($fields !== null) { curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_POSTFIELDS, $fields); } if ($headers !== null) { curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); } $result = curl_exec($ch); $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE); curl_close($ch); return array( $result, $httpcode ); 

    $ch = curl_init();
    echo "\n";

echo "\n";
echo "SUKSES DIBUAT!\n";
echo "\n";
}

?>
