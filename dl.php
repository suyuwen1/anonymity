<?php
    session_start();
    $back = array();
    if(empty($_POST['u']) || empty($_POST['p'])){
        $back['i'] = 0;
        $back['b'] = '用户名和密码不能为空！';
    }else{
        if($_POST['u'] == 'mitbj' && $_POST['p'] == '1qaz@WSX'){
            $back['i'] = 1;
            $back['b'] = '登陆成功！';
            $_SESSION['login'] = 1;
        }else{
            $back['i'] = 0;
            $back['b'] = '用户名或密码错误！';
        }
    }
    echo json_encode($back);
?>