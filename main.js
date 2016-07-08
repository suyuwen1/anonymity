var ue;
$(function(){
    ue = UE.getEditor('editor',{
        elementPathEnabled: false,
        initialStyle: 'p{line-height:1em;font-size:14px;font-family:微软雅黑;}',
    });
    sendclick();
});

function sendclick(){
    $(".send").bind('click',function(){
        send();
    });
}

function send(){
    var t = $(".title_in input").val().trim();
    var c = ue.hasContents()?ue.getContent():false;
    if(t != '' && c){
        $(".send").unbind('click');
        $.ajax({
            type: 'POST',
            url:  'sendmail.php',
            data: {"t":t,"c":c},
            dataType: 'json',
            beforeSend:function(){
                $(".info").html('正在发送。。。');
		    },
            success:function(dt){
                $(".info").html(dt.b);
                if(dt.i){
                    $(".title_in input").val('');
                    ue.execCommand('cleardoc');
                }
                sendclick();
            }
        });
    }else{
        $(".info").html('主题和内容不能为空！');
    }
}
