<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>写文章</title>
  <link href="http://www.jq22.com/jquery/bootstrap-3.3.4.css" rel="stylesheet">
  <script src="http://libs.baidu.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script> 
  <link href="/Public/css/summernote.css" rel="stylesheet">
  <script src="/Public/js/summernote.js"></script>
</head>
<body>
<form method="post" action="/index.php/Home/Main/postblog">


<div>
  <input type="text" name="title" placeholder="标题" class="title" id="title">
</div>
  <div id="summernote"><p>Hello ,<b>从这里开始</b></p></div>
<div>

  <input type="button" value="发布" class="submit" id="ajaxBtn">
</div>
</form>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
        $('#ajaxBtn').click(function ()
        {


            $.ajax({
                type: "POST",
                data :{
                    "title":"ff",//$('#title').val(),
                    "content":"jj",//$('.note-editing-area').val(),
                    "user_id":"祝发冬",
                    "author":"author",
                    "create_time":"哈哈哈"

                },
                url : '/index.php/Home/Main/postblog',
                cache: false,
                processData: false,
                contentType: 'multipart/form-data',
                success:function(data){
                       alert(data);
                 },
                error:function(xhr,status,error){
                     alert(error);
                   }
        });

        })




    });
  </script>
</body>
</html>