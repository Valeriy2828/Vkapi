<?php
include "const.php";

if (isset($_POST['friends_id']) && ! empty($_POST['friends_id'])) {

$fields = [
	'nickname', 'domain', 'sex', 'bdate', 'city', 'country', 'timezone', 'photo_50',
	'photo_100', 'photo_200_orig', 'has_mobile', 'contacts', 'education', 'online',
	'relation', 'last_seen', 'status', 'can_write_private_message', 'can_see_all_posts',
	'can_post', 'universities'
];


$request_params = [
	'user_id' => $_POST['friends_id'] ,
	'order' => 'random',
	'fields' => implode(',',$fields),
	'count' => 50,
	'name_case' => 'nom',
	'access_token' => ACCESS_TOKEN
];

$url =  METHOD_URI ."friends.get?" . http_build_query($request_params) . "&v=5.61";

//$result = file_get_contents($url);
//var_dump($result);
$result = json_decode(file_get_contents($url), true);
//echo $result;
//$res = json_decode($result, true);
if(isset($result['response'])){
	foreach ($result['response']['items'] as $key => $value){
		if($value["first_name"] != "DELETED"){
			echo "Имя:  ".$value["first_name"], "<br>",	
				 "Фамилия:  ".$value["last_name"], "<br>";
				 
			if($value["sex"] == 1){
				 echo "Пол:  женский","<br>";
			 }elseif($value["sex"] == 2){
				echo "Пол:  мужской","<br>"; 
			 }else{
				 echo "Пол не указан","<br>";
			 }
			 echo $value["domain"], "<br>";
			 if(isset($value["country"]["title"])){
				echo "Страна:  ".$value["country"]["title"],"<br>";			  		 		 
			 }
			 if(isset($value["city"]["title"])){
				echo "Город:  ".$value["city"]["title"],"<br>";			  		 		 
			 }
			 echo "<hr>";
		}	
						 
	}
}else{
	echo "Пользователя с таким id или именем не существует!!!!";
}	
}else{
	echo "Хрень какая-то , нужно разбираться!!!";
}

//{"response":{"count":102,"items":[{"id":326793657,"first_name":"ÐšÑÑŽÑˆÐ°","last_name":"Ð¨Ð°Ð±Ð°Ð»Ð¾Ð²Ð°","sex":1,"nickname":"","domain":"id326793657","bdate":"24.6","city":{"id":280,"title":"Ð¥Ð°Ñ€ÑŒÐºÐ¾Ð²"},"country":{"id":2,"title":"Ð£ÐºÑ€Ð°Ð¸Ð½Ð°"},"photo_50":"https:\/\/sun9-71.userapi.com\/c604828\/v604828657\/29132\/hbf1J4SLITs.jpg?ava=1","photo_100":"https:\/\/sun9-54.userapi.com\/c604828\/v604828657\/29131\/GkRaJV41log.jpg?ava=1","photo_200_orig":"https:\/\/sun9-9.userapi.com\/c604828\/v604828657\/'