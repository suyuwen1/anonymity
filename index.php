<?php
    session_start();
    if(!isset($_SESSION['login'])){
        exit;
    }else{
        if($_SESSION['login'] != 1){
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>发送意见反馈</title>
    <script src="http://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css"></link>
    <script type="text/javascript" charset="utf-8" src="ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="ueditor/lang/zh-cn/zh-cn.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div id="main">
        <div id="text">意见反馈</div>
        <div id="title">
            <div class="title_zt">主　题：</div>
            <div class="title_in"><input type="text" tabindex="1" maxlength="200" autofocus></div>
        </div>
        <div id="con">
            <script id="editor" type="text/plain" style="width:100%;height:400px;"></script>
        </div>
        <div id="but"><span class="send">发送</span><span class="info"></span></div>
    </div>
</body>
</html>