<html lang="en">

<body>

    <p>Dear {{ $seller['first_name'] }}</p>

    <p>Your account has been created, please activate your account by clicking this link</p>
    <p><a href="{{ route('seller.verify',$seller['token']) }}">
            {{ route('seller.verify',$seller['token']) }}
        </a></p>

    <p>Thanks</p>

</body>

</html>
{{-- 
<html lang="en">

<body>

    <p>Dear {{ $seller->first_name }}</p>
<p>Your account has been created, please activate your account by clicking this link</p>
<p><a href="{{ route('verify',$seller->token) }}">
        {{ route('verify',$seller->token) }}
    </a></p>

<p>Thanks</p>

</body>

</html> --}}