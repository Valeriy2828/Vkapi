<?php
include "const.php";

if (isset($_POST['group_id']) && ! empty($_POST['group_id'])) {

$fields = [
	'city', 'country', 'description', 'wiki_page', 'members_count',
	'counters', 'start_date', 'finish_date', 'can_post', 'can_see_all_posts',
	'activity', 'status', 'contacts', 'links', 'fixed_post', 'verified, site',
	'can_create_topic'
];

$request_params = [
	'group_id' => $_POST['group_id'] ,	
	'fields' => implode(',',$fields),	
	'access_token' => ACCESS_TOKEN
];

$url =  METHOD_URI ."groups.getById?" . http_build_query($request_params) . "&v=5.61";

//$result = file_get_contents($url);
//var_dump($result);
$result = json_decode(file_get_contents($url), true);
//echo $result;
//$res = json_decode($result, true);
if(isset($result['response'])){
	foreach ($result['response'] as $key => $value){		
		echo "Имя:  ".$value["name"], "<br>";
		
		if(isset($value["description"])){
			echo $value["description"],"<br>";			  		 		 
		}		 		 		
	}
}else{
	echo "Группы с таким именем не существует или она была удалена!!!";
}
	
}else{
	echo "Хрень какая-то , нужно разбираться!!!";
}

//'{"response":[{"id":131855279,"name":"Элит-турнир| Минифутбол Харьков | Футзал Харьков","screen_name":"elitturnir","is_closed":0,"type":"page","is_admin":0,"is_member":1,"is_advertiser":0,"description":"Объединение участников и болельщиков лучшего турнира по мини-футболу в Харькове.","members_count":1150,"counters":{"photos":9,"albums":2,"videos":0},"start_date":0,"can_post":0,"can_see_all_posts":1,"a'...