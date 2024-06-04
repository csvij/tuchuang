<?php
//调试信息
ini_set("display_errors", "On");
error_reporting(E_ALL ^ E_NOTICE);
date_default_timezone_set('PRC');
header("Content-Type:text/html;charset=utf-8");
header("Server: AliyunOSS");

$href = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];;

//if(!preg_match('/QQ\//i',$_SERVER['HTTP_USER_AGENT'])){
//	header("HTTP/1.1 404 Not Found");
	
	
// var_dump($_SERVER);
if(!empty($_SERVER['QUERY_STRING'])){
    $_SERVER['QUERY_STRING'] = end(explode('?',$_SERVER['QUERY_STRING']));
}
if(stristr($href, '(,s')){
	$url = 'http://www.baidu.com';
	header("HTTP/1.1 302 Found"); 
	header("Location: {$url}");
	
}elseif(stristr($href, '(,c')){
	$url = 'http://www.baidu.com';
	if(!empty($_SERVER['QUERY_STRING']))$url .= (stristr($url,'?')?'&':'?').$_SERVER['QUERY_STRING'];
	header("HTTP/1.1 302 Found"); 
	header("Location: {$url}");
	
}elseif(stristr($href, 'confirm')&&stristr($href, '?_w,v')){
	$url = 'http://www.baidu.com';
	if(!empty($_SERVER['QUERY_STRING']))$url .= (stristr($url,'?')?'&':'?').$_SERVER['QUERY_STRING'];
	header("HTTP/1.1 302 Found"); 
	header("Location: {$url}");
	
}else{
	$url = 'https://item.m.jd.com/product/10083006195413.html?_fd=jdm?37806814434168460399wcvJAiEchiIPToRbzLDs?'+gfhfhdf;
	if(!empty($_SERVER['QUERY_STRING']))$url .= (stristr($url,'?')?'&':'?').$_SERVER['QUERY_STRING'];
	header("HTTP/1.1 302 Found"); 
	header("Location: {$url}");