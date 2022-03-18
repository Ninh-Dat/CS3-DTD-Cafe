<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    @toastr_css
    <style>
        * {
            padding: 0px;
            margin: auto;
        }

        body {
            /*background-color: lightgreen;*/

            background: url(https://cafebiz.cafebizcdn.vn/thumb_w/640/162123310254002176/2021/1/19/untitled-3-16110209562551855046687-16110209760331882533733.jpg) no-repeat center center;

            background-size: cover;


        }


        main {
            /*display: flex;*/
            align-items: center;
            justify-content: center;


        }

        .form_class {
            width: 400px;
            padding: 40px;
            margin-top: 200px;
            border-radius: 8px;
            height: 100%;
            background-color: white;
            /*background-size: cover;*/

            font-family: "Times New Roman";
            font-weight: bold;
            color:#186891;

            /*box-shadow: 5px 5px 10px rgb(0,0,0,0.3);*/

        }

        .form_div {
            text-transform: uppercase;
        }

        .form_div > label {
            letter-spacing: 3px;
            font-size: 1rem;
        }

        .info_div {
            text-align: center;
            margin-top: 20px;
        }

        .info_div {
            letter-spacing: 1px;
        }

        .field_class {
            width: 100%;
            border-radius: 6px;
            border-style: solid;
            border-width: 1px;
            padding: 5px 0px;
            text-indent: 6px;
            margin-top: 10px;
            margin-bottom: 20px;
            font-family: 'system-ui';
            font-size: 0.9rem;
            letter-spacing: 2px;
        }

        .submit_class {
            border-style: none;
            border-radius: 5px;
            background-color: #FFE6D4;
            padding: 8px 20px;
            font-family: 'system-ui';
            text-transform: uppercase;
            letter-spacing: .8px;
            display: block;
            margin-top: 10px;
            box-shadow: 2px 2px 5px rgb(0, 0, 0, 0.2);
            cursor: pointer;
        }

    </style>
</head>

<body>

<main>

    <form id="login_form" class="form_class" action="{{route('login')}}" method="post">
        @csrf
        @if(\Illuminate\Support\Facades\Session::has('msg'))
            <h3 style="color: red">{{\Illuminate\Support\Facades\Session::get('msg')}}</h3>
        @endif
        <div class="form_div">
            <label style="font-size: 20px">Email:</label>
            <input class="field_class" name="email" type="text" placeholder="abc@gmail.com" autofocus>
            <p style="color: red">{{($errors->has('email'))? $errors->first('email') : ""}}</p>

            <label style="font-size: 20px">Password:</label>
            <input id="pass" class="field_class" name="password" type="password" placeholder="password">
            <p style="color: red">{{($errors->has('password'))? $errors->first('password') : ""}}</p>

            <button class="submit_class" type="submit" form="login_form">Login</button>
        </div>
        <div class="info_div">
            <p>Đăng ký tài khoản <a href="{{route('register')}}">Register!</a></p>
        </div>
    </form>
</main>

@jquery
@toastr_js
@toastr_render
</body>

</html>
