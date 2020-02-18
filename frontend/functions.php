<?php
require_once('../path.inc');
require_once('../get_host_info.inc');
require_once('../rabbitMQLib.inc');

	function sendRabbit($data){
		$client = new rabbitMQClient("rabbitMQ.ini","testserver");
		$response = $client->send_request($data);
		return $response;	
	}

	function sanatize($data){
		$data = trim($data);
		$data = sendRabbit(array('type' => 'sanatize', 'data' => $data));
		return $data
	}
?>