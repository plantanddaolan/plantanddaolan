<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/amazeui.css" />
    <link rel="stylesheet" href="./assets/css/other.min.css" />
</head>
<body class="login-container">
<div class="login-box">
    <div class="logo-img">
        <img src="./assets/i/logo_login.png" alt="logo" />
        <p>东北林业大学线上教育系统</p>
    </div>
    <form action="/index" class="am-form" data-am-validator method="post">
        <div class="am-form-group">
            <label for="doc-vld-name-2"><i class="am-icon-user"></i></label>
            <input type="text" id="doc-vld-name-2" minlength="3" placeholder="输入用户名（至少 3 个字符）" name="username" required/>
        </div>

        <div class="am-form-group">
            <label for="doc-vld-email-2"><i class="am-icon-key"></i></label>
            <input type="password" id="doc-vld-email-2" placeholder="输入密码" name="password" required/>
        </div>
        <button class="am-btn am-btn-secondary"  type="submit">登录</button>
    </form>
</div>
</body>
</html>
