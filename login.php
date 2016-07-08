<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>意见反馈</title>
    <link rel="stylesheet" type="text/css" href="main.css"></link>
    <script src="http://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $(".dl").click(function(){
                dl();
            });
            $("#user,#pw").keydown(function(event){
                var event = event?event:window.event;
                if(event.keyCode == 13){
                    dl();
                }
            });
        });
        
        function dl(){
            var u = $("#user").val().trim();
                var p = $("#pw").val();
                if(u !='' && p !=''){
                       $.ajax({
                       type: 'POST',
                       url:  'dl.php',
                       data: {"u":u,"p":p},
                       dataType: 'json',
                       beforeSend:function(){
                           $(".info").html('正在登陆。。。');
		               },
                       success:function(dt){
                           $(".info").html(dt.b);
                           if(dt.i){
                                window.location = 'index.php';
                           }
                        }
                    });
            }else{
                $(".info").html('用户名和密码不能为空！');
            }
        }
        
    </script>
</head>
<body>
    <div id="main">
        <div id="login">
            <div class="login_div">用户名：<input id="user" autofocus type="text" name="user"></div>
            <div class="login_div">密　码：<input id="pw" type="password" name="pw"></div>
            <div class="login_div"><div class="send dl">登陆</div><div class="info"></div></div>
        </div>
    </div>
</body>
</html>