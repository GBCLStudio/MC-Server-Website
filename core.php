<?php
error_reporting(0);
$json = file_get_contents("config.json");
$jsoncf = json_decode($json);
$servername = $jsoncf->servername;
$serverip = $jsoncf->ip;
$serverport = $jsoncf->port;
$introduced = $jsoncf->introduced;
$qqgrouplink = $jsoncf->qqgrouplink;
$email = $jsoncf->email;
$studio_headshot = $jsoncf->studio_headshot;
$server_headshot = $jsoncf->server_headshot;
$copyright = $jsoncf->copyright;
$url = $jsoncf->url;
$copyright_url = $jsoncf->copyright_url;
$date = date(Y);
$server = "$serverip:$serverport";
$tooltips_qq = $jsoncf->tooltips_qq;
$tooltips_email = $jsoncf->tooltips_email;
$download_game = $jsoncf->download_game;

try {
    ini_set('default_socket_timeout', 1);
    $motdpe = file_get_contents("http://motdpe.blackbe.xyz/api.php?ip=" . $jsoncf->ip . "&port=" . $jsoncf->port);
    $motd = json_decode($motdpe);
    $status = $motd->status; //服务器状态
    if ($status == "online") {
        $status = "在线";
        $version = $motd->version; //服务器游戏版本
        $online = $motd->online; //服务器在线人数
        $max = $motd->max; //服务器最大在线人数
        $delay = $motd->delay; //服务器延迟
    } else {
        $status = "不在线";
    }
} catch (Exception $e) {
    $status = "不在线";
}
