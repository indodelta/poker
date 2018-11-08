<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"E:\phpStudy\PHPTutorial\WWW\pokerGame\public/../application/index\view\index\test.html";i:1541574015;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/public/layui/css/layui.css">
    <script src="/static/public/js/jquery-2.1.4.min.js"></script>
    <script src="/static/public/layui/layui.js"></script>
    <script src="/static/index/js/lock.js"></script>
    <style>
        form{
            padding-top: 50px;
        }
        .scrollView{
            width: 86%;
            height: 500px;
            overflow-y: auto;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<form class="layui-form">
    <div class="layui-form-item">
        <label class="layui-form-label">socket URL</label>
        <div class="layui-input-inline">
            <input type="text" value="192.168.100.97:8282" id="url" placeholder="url" class="layui-input">
        </div>

        <button class="layui-btn" type="button" id="connection">连接</button>
        <button class="layui-btn" type="button" id="disconnect">断开</button>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">内容</label>
        登录{"type":"tokenLogin","token":"TE9ScWk3R1JrTEVLdjdG"}<br>
        其他{"type":"msg","msg_id":"本次的ID","data":{"route":"路由名","参数名":"参数".....}}
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">内容</label>
        <div class="layui-input-block">
            <input type="text" placeholder="内容"
                   value='{"type":"msg","msg_id":"本次的ID","content":{"route":"路由名","参数名":"参数".....}}'
                   id="content" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">内容</label>
        <button class="layui-btn" type="button" id="send">发送</button>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">内容</label>
        <div class="scrollView">
        <div></div>
    </div>
    </div>
</form>
<script>

    var key = CryptoJS.enc.Utf8.parse('1234567890qwerty');
    var iv =  CryptoJS.enc.Utf8.parse('201707eggplant99');
    //解密
    function decrypt(str) {
        var decrypted = CryptoJS.AES.decrypt(str,key,{iv:iv, mode: CryptoJS.mode.CBC,padding:CryptoJS.pad.Pkcs7});
        msg = JSON.parse(decrypted.toString(CryptoJS.enc.Utf8));
        if(typeof msg =="string"){
            msg =  JSON.parse(msg);
        };
        console.log(msg);
        return msg;
    }
    //加密方法
    function Encrypt(data) {
        var encrypted = CryptoJS.AES.encrypt(data, key, { iv: iv, mode: CryptoJS.mode.CBC, padding: CryptoJS.pad.Pkcs7 });
        var msg = encrypted.toString();//结果为加密后的字符串
        console.log(msg);
        return msg;
    }
    //Demo
    layui.use(['form','layer'], function(){
        var form = layui.form;
        var layer = layui.layer;
        //监听提交
        form.on('submit(formDemo)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
        var wsUrl=[];
        $.get("http://poker.okok751.com/user/tokenGenerate",function (res) {
            wsUrl = res;
        },'json');
        //线路
        var ws=[];
        $("#connection").click(function () {
            if ("WebSocket" in window) {
                // 打开一个 web socket
                for (i=0;i<wsUrl.length;i++){
                    ws[i] = new WebSocket("ws://"+wsUrl[i]['ip']+"/"+i);
                    ws[i].onopen = function(i)
                    {
                        id = i.srcElement.url.substring(i.srcElement.url.length-1);
                        lock = Encrypt('{"type":"tokenLogin","token":"'+wsUrl[id]['token']+'"}');
                        ws[id].send(lock);
                        // Web Socket 已连接上，使用 send() 方法发送数据
                        layer.msg('连接成功！');
                        decrypt(lock)
                    };
                    ws[i].onmessage = function (evt)
                    {
                        var received_msg = decrypt(evt.data);
                        data("接受:",received_msg)
                    };
                    ws[i].onclose = function()
                    {
                        layer.msg("连接已关闭...");
                    };
                }
            } else {
                // 浏览器不支持 WebSocket
                layer.msg("您的浏览器不支持 WebSocket!");
            }
        });
        $("#send").click(function () {
            for(i=0;i<wsUrl.length;i++){
                ws[i].send(Encrypt($("#content").val()));
            }
            data("发送:",$("#content").val())
        });
        $("#disconnect").click(function () {
            ws[0].send('{"type":"close"}');
        });
        function data(type,data) {
            $(".scrollView div").eq(0).prepend("<div>"+type+data+"</div>")
        }
    });
</script>
</body>
</html>