<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký khách hàng</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    @toastr_css
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);

        *:focus {
            outline: none;
        }

        body {
            margin: 0;
            padding: 0;
            background: url(https://cafebiz.cafebizcdn.vn/thumb_w/640/162123310254002176/2021/1/19/untitled-3-16110209562551855046687-16110209760331882533733.jpg) no-repeat center center;

            background-size: cover;
            font-size: 16px;
            color: #222;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
        }

        #login-box {
            position: relative;
            margin: 5% auto;
            width: 600px;
            height: 700px;
            /*background: #FFF;*/
            border-radius: 2px;
            /*box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);*/
        }

        .left {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            padding: 40px;
            width: 300px;
            height: 500px;
        }

        h1 {
            margin: 0 0 20px 0;
            font-weight: 300;
            font-size: 28px;
        }

        input[type="text"],
        input[type="password"],
        input[type="number"] {
            display: block;
            box-sizing: border-box;
            margin-bottom: 20px;
            padding: 4px;
            width: 220px;
            height: 32px;
            border: none;
            border-bottom: 1px solid #AAA;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 15px;
            transition: 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="number"]:focus {
            border-bottom: 2px solid #16a085;
            color: #16a085;
            transition: 0.2s ease;
        }

        input[type="submit"] {
            margin-top: 28px;
            width: 120px;
            height: 32px;
            background: #16a085;
            border: none;
            border-radius: 2px;
            color: #FFF;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            transition: 0.1s ease;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="submit"]:focus {
            opacity: 0.8;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            transition: 0.1s ease;
        }

        input[type="submit"]:active {
            opacity: 1;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
            transition: 0.1s ease;
        }

        .or {
            position: absolute;
            top: 180px;
            left: 280px;
            width: 40px;
            height: 40px;
            background: #DDD;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            line-height: 40px;
            text-align: center;
        }

        .right {
            position: absolute;
            top: 0;
            right: 0;
            box-sizing: border-box;
            padding: 40px;
            width: 300px;
            height: 400px;
            background: url('https://goo.gl/YbktSj');
            background-size: cover;
            background-position: center;
            border-radius: 0 2px 2px 0;
        }

        .right .loginwith {
            display: block;
            margin-bottom: 40px;
            font-size: 28px;
            color: #FFF;
            text-align: center;
        }

        button.social-signin {
            margin-bottom: 20px;
            width: 220px;
            height: 36px;
            border: none;
            border-radius: 2px;
            color: #FFF;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            transition: 0.2s ease;
            cursor: pointer;
        }

        button.social-signin:hover,
        button.social-signin:focus {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            transition: 0.2s ease;
        }

        button.social-signin:active {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
            transition: 0.2s ease;
        }

        button.social-signin.facebook {
            background: #32508E;
        }

        button.social-signin.twitter {
            background: #55ACEE;
        }

        button.social-signin.google {
            background: #DD4B39;
        }
    </style>
</head>
<body>

<form action="{{route('register')}}" method="post">
    @csrf
    <div id="login-box">
        <div class="left">
            <h1 style="font-weight: bold">Sign up</h1>

            <input type="text" name="name" placeholder="Tên khách hàng"/>
            <p style="color: red">{{($errors->has('name'))? $errors->first('name') : ""}}</p>

            <select name="role_id">
                <option>--Tùy chọn--</option>
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
            <p style="color: red">{{($errors->has('role_id'))? $errors->first('role_id') : ""}}</p>

            <input type="text" name="email" placeholder="abc@gmail.com"/>
            <p style="color: red">{{($errors->has('email'))? $errors->first('email') : ""}}</p>
            <input type="password" name="password" placeholder="Mật khẩu"/>
            <p style="color: red">{{($errors->has('password'))? $errors->first('password') : ""}}</p>
            <input type="password" name="confirmPassword" placeholder="Nhập lại mật khẩu"/>
            <p style="color: red">{{($errors->has('confirmPassword'))? $errors->first('confirmPassword') : ""}}</p>
        @if(\Illuminate\Support\Facades\Session::has('msg'))
                <h3 style="color: red">{{\Illuminate\Support\Facades\Session::get('msg')}}</h3>
            @endif
            <input type="text" name="address" placeholder="Phường - Quận - Thành Phố"/>
            <p style="color: red">{{($errors->has('address'))? $errors->first('address') : ""}}</p>
            <input type="number" name="phone" placeholder="Số điện thoại"/>
            <p style="color: red">{{($errors->has('phone'))? $errors->first('phone') : ""}}</p>


            <input type="submit" name="signup_submit" value="Sign me up"/>
            <div class="small"><a href="{{route('showFormLogin')}}" style="font-weight: bold; color: white">Have an account? Go to login</a></div>
        </div>

        <div class="right">
            <span class="loginwith">Sign in with<br/>social network</span>

            <button class="social-signin facebook">Log in with facebook</button>
            <button class="social-signin twitter">Log in with Twitter</button>
            <button class="social-signin google">Log in with Google+</button>
        </div>
        <div class="or">OR</div>
    </div>
</form>
@jquery
@toastr_js
@toastr_render
</body>
</html>
