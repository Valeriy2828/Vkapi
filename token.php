<?php

$permissions = [
	'notify', 'friends', 'photos', 'audio', 'video',
	'docs', 'notes', 'pages', 'status', 'wall',
	'groups','notifications', 'stats',
	'ads', 'market', 'offline' , 'city'
];

$request_params = [
	'client_id' => '7323046',
	'redirect_uri' => 'https://oauth.vk.com/blank.html',
	'response_type' => 'token',
	'display' => 'page',
	'scope' => implode(',',$permissions),
];

$url = 'https://oauth.vk.com/authorize?' . http_build_query($request_params);

echo $url;

//3fdffcaeb1aceb52a6d19712e258084b6b0d5454920dc60032c677fea5b8b1685e5aa9bc90ce14c6edc16
//9daa05f9f7a9d0d7bb3d0c45c7d5733c5dc3c117c82173e2c1dbcc6b806c96811824f017e6c4d9e89bf3c