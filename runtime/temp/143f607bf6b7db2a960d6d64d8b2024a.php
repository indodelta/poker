<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"E:\phpStudy\PHPTutorial\WWW\pokerGame\thinkphp\tpl\dispatch_jump.tpl";i:1540792506;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="/static/public/layui/css/layui.css" rel="stylesheet" type="text/css" />
    <link href="/static/index/css/default.css" rel="stylesheet" type="text/css" />
    <script src="/static/public/js/jquery-2.1.4.min.js"></script>
    <script src="/static/public/layui/layui.all.js"></script>
    <script src="/static/index/js/default.js"></script>
    <title>跳转提示</title>
</head>
<body class="errorBgColor">
<div class="errorContent">
    <div class="errorImg">
        <img src="/static/index/img/loginerror.png">
    </div>
    <div class="loginErrorFont">
        <?php echo(strip_tags($msg));?>
    </div>
    <div class="loginErrorBtn">
        <button id="wait">立即跳转 <?php echo($wait);?></button>
    </div>
</div>
<script type="text/javascript">
    (function(){
        var count = "<?php echo($wait);?>";
        var wait = document.getElementById('wait')
        var timer = setInterval(function(){
            if(count>0){
                count--;
                wait.innerHTML = '立即跳转 '+count;
            }else{
                var index = parent.layer.getFrameIndex(window.name);
                parent.layer.close(index);
                parent.$(".mainLopginBtn").click()
                clearInterval(timer); //清除计时器
            }
        },1000);
        $('#wait').click(function () {
            clearInterval(timer); //清除计时器
            var index = parent.layer.getFrameIndex(window.name);
            parent.layer.close(index);
            parent.$(".mainLopginBtn").click()
        })
    })();
</script>
</body>
</html>

