<?php 
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $ip = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=''.$user_ip.'"));
    echo "country code ".$ip['geoplugin_countryCode']."<br/>";
    echo "country name ".$ip['geoplugin_countryName']."<br/>";
?>