<?php
include "const.php";

if (isset($_POST['user_id']) && ! empty($_POST['user_id'])) {

$fields = [
	'city', 'country', 'sex', 'education','schools', 'status',
	'about', 'bdate', 'books', 'movies', 'music', 'online', 'photo_id',
	'photo_max', 'photo_50', 'photo_100', 'photo_200_orig', 'photo_200', 'photo_400_orig'
	
];

$request_params = [
	'user_ids' => $_POST['user_id'] ,	
	'fields' => implode(',',$fields),
	'name_case' => 'nom',
	'access_token' => ACCESS_TOKEN
];

$url =  METHOD_URI ."users.get?" . http_build_query($request_params) . "&v=5.8";

$result = json_decode(file_get_contents($url), true);
//$result = file_get_contents($url);
//echo $result;
//var_dump ($result);

if(isset($result['response'])){
	foreach ($result['response'] as $key => $value){
		echo "Имя:  ".$value["first_name"], "<br>",
			 "Фамилия:  ".$value["last_name"],"<br>";
			 if($value["sex"] == 1){
				 echo "Пол:  мужской","<br>";
			 }elseif($value["sex"] == 2){
				echo "Пол:  женский","<br>"; 
			 }else{
				 echo "Пол не указан","<br>";
			 }
			 
			 if(strlen($value["status"] > 0)){ 		 
				echo "Статус:  ".$value["status"],"<br>";
			 }
			 
			 if(isset($value["university_name"])){
				echo "Университет:  ".$value["university_name"],"<br>";
			 }
			 if(isset($value["faculty_name"])){
				echo"Факультет:  ".$value["faculty_name"],"<br>";
			 }
			 
			if(isset($value["schools"])){ 
				foreach($value['schools'] as $k => $val){ 
				 echo $val["name"],"<br>",
					  "Специальность:  ".$val["speciality"],"<br>";
				}
			}
			if(isset($value["city"]["title"])){
				echo "Город:  ".$value["city"]["title"],"<br>";
			}
			if(isset($value["country"]["title"])){
				echo "Страна:  ".$value["country"]["title"],"<br>";	
			}
			if(isset($value["music"])){
				echo "Любимая музыка:  ".$value["music"],"<br>";
		    }
			if(isset($value["movies"])){
				echo "Любимые фильмы:  ".$value["movies"],"<br>";
		    }
			if(isset($value["about"])){
				echo "О себе:  ".$value["about"],"<br>";
		    }
			
	}
}else{
	echo "Пользователя с таким id или именем не существует!!!!";
}

}else{
	echo "Хрень какая-то , нужно разбираться!!!";
}


//{"response":[{"id":160640085,"first_name":"Валерий","last_name":"Белевцов",
//"sex":2,"bdate":"25.6.1981","city":{"id":280,"title":"Харьков"},"country":{"id":2,"title":"Украина"},
//"photo_50":"https:\/\/sun9-20.userapi.com\/c846219\/v846219566\/1d01ac\/2FdbmVMVxJE.jpg?ava=1",
//"photo_100":"https:\/\/sun9-46.userapi.com\/c846219\/v846219566\/1d01ab\/mNhLdr2Lc9U.jpg?ava=1",
//"photo_200":"https:\/\/sun9-56.userapi.com\/c846219\/v846219566\/1d01aa\/c4WqHrKFJ28.jpg?ava=1",
//"photo_200_orig":"https:\/\/sun9-56.userapi.com\/c846219\/v846219566\/1d01aa\/c4WqHrKFJ28.jpg?ava=1",
//"photo_max":"https:\/\/sun9-56.userapi.com\/c846219\/v846219566\/1d01aa\/c4WqHrKFJ28.jpg?ava=1",
//"photo_400_orig":"https:\/\/sun9-21.userapi.com\/c846219\/v846219566\/1d01a9\/sNbK8ryt1HE.jpg?ava=1",
//"photo_id":"160640085_456239120","online":0,"status":"Хорошо что шизофрения не является наследственной)"
//,"university":6131,"university_name":"ХНУСА (бывш. ХГТУСА, ХИСИ)","faculty":33925,"faculty_name":"Санитарно-технический факультет ",
//"graduation":0,"music":"ATb, Scooter, Alex -C, Игра слов, Gigi Dagostino, David Guetto, Calvin Harris и конечно же ВИТАЛИК КОЗЛОВСКИЙ",
//"movies":"Эффект бабочки, Американская история Х, Очем говорят мужчины, От 180 и выше, Филадельфия, Пианист, Великий Гетсби, Кровавый алмаз, 
//Криминальное чтиво, Джанго, Бесславные ублюдки, Форрест Гамп, Сталкер","books":"Глуховский \"Метро\", Кинг \"Ловец Снов\", Булгаков 
//\"Мастер и Маргарита\", \"Собачье Сердце\", Стругацкие","schools":[{"id":"91064","country":2,"city":280,"name":"Школа №140","class":"а",
//"speciality":"Физик-ядерщик"}],"about":"Спортивный, очаровательный,скромный..."}]}