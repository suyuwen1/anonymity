<?php
    require 'phpmail/PHPMailerAutoload.php';
    if(!empty($_POST['t']) && !empty($_POST['c'])){
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = "mail.mitbj.org";
        $mail->CharSet = "UTF-8";
		$mail->isHTML(true);
		$mail->setLanguage('zh_cn');
		$mail->Username='anonymity@mitbj.org';
		$mail->Password='1qaz!QAZ';
		$mail->Priority = 3;
		$mail->From = 'anonymity@mitbj.org';
		$mail->FromName = '匿名邮件';
        $mail->addAddress('kygl_nm@mitbj.org', '匿名收件');
        $mail->Subject = $_POST['t'];
		$mail->Body    = $_POST['c'];
        $back = array();
		if ($mail->Send()) {
            $back['i'] = 1;
            $back['b'] = '发送成功！';
		} else {
            $back['i'] = 0;
            $back['b'] = '发送失败！';
		}
    }else{
        $back['i'] = 0;
        $back['b'] = '主题和内容不能为空！';
    }
    echo json_encode($back);
?>