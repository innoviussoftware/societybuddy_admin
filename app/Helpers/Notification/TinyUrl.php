<?php

namespace App\Helpers\Notification;

use Illuminate\Support\Facades\DB;
use App\User;

class TinyUrl
{
	public static function get_tiny_url($url)  {  
			$ch = curl_init();  
			$timeout = 5;  
			curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);  
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
			curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
			$data = curl_exec($ch);  
			curl_close($ch);  
			return $data;  
	}
}
