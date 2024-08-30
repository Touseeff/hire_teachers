<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    {{-- <img width="300px" src="{{ asset('assets/img/logo_tp.png') }}" alt=""> --}}
    <p>Thank you for registering with us!</p>
    <p>Please click the link below to verify your email address:
    <a href="{{ url('user/verification/'.$url) }}" target="_blank"><span> Verify Email</a></p>
    </span>
    <p>If you did not create an account, no further action is required.</p>
</body>
</html>
