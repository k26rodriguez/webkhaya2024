<?php
	header('Expires: Thu, 1 Jan 1970 00:00:00 GMT');
	header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
	header('Cache-Control: post-check=0, pre-check=0',false);
	header('Pragma: no-cache');
	
// detect mobile device
function isMobileDevice() {
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
	
function isMobileDev(){
	if(isset($_SERVER['HTTP_USER_AGENT']) and !empty($_SERVER['HTTP_USER_AGENT'])){
	   $user_ag = $_SERVER['HTTP_USER_AGENT'];
	   if(preg_match('/(Mobile|Android|GoBrowser|[0-9]x[0-9]*|uZardWeb\/|Mini|Doris\/|Skyfire\/|iPhone|Fennec\/|Maemo|Iris\/|CLDC\-|Mobi\/)/uis',$user_ag)){
		  return true;
	   };
	};
	return false;
}


// Use the function
if(isMobileDev()){
	// Do something for only mobile users
	include './_mob/curridabat.php';
}
else {
	// Do something for only desktop users
	include './_desk/curridabat.php';
}
?>