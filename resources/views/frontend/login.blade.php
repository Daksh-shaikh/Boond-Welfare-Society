<html lang="en">

<head>
    <title style="color: brown">Boond Welfare Society</title>
    <meta name="author" content="Zaur">
    <meta descryption content="Presentation of website">
    <meta name="keywords" content="technology, cyber security, software">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/login.css')}}">
    <!-- <link rel="stylesheet" href="login.css"> -->
</head>

<body>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title> Login </title>
    </head>

    <body>
        <div class="login-box">
            <h2>Boond Welfare Society</h2>
            <form method="post" action="{{route('user.login')}}">
                @csrf
                <div class="user-box">
                    <input type="text" name="name" placeholder="Username" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <label>Password</label>
                </div>

                <button class="btn btn-primary" style="padding: 8px;" type="submit">Login</button>

            </form>
        </div>

    </body>

    </html>

</body>

</html>
