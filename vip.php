<?php
/*
免费解析官网:https://jx.jiubojx.com/
使用方法吧此文件放网站根目录，
调用方法是:
https://自己的域名/vip.php?url=https://v.qq.com/x/cover/1sfd2alytdj6njs/s0024maixpy.html
*/
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";$url = $protocol.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];$url = explode('url=', $url);$url = $url[1];$randomnum = 'https://jx.jiubojx.com/vip.php?url='.$url;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/> 
<meta http-equiv="Access-Control-Allow-Origin" content="*" />
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=11"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>久播解析_免费、稳定、蓝光、急速。</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href=favicon.ico">
	<style>
        body, html, #WANG {
        background-color: #000;
        padding: 0;
        margin: 0;
        color: transparent;
        height: 100%;
        width: 100%;
    }
    </style>
    </head>
 <body style="overflow-y:hidden;">
  <div style="width: 100%; height: 100%;">
        <iframe id="WANG" scrolling="no" allowtransparency="true" allowfullscreen="true" frameborder="0" src="<?php echo $randomnum; ?>" width="100%" height="100%" style="background: #000000;"></iframe>
    </div>
  </body>
</html>