<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../css/app.css"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
  

    <div  class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/">
                    Главная
            </a>
        </div> 

        <div class="navbar-end">
             <a class="navbar-item" href="/cart">
                    Корзина
            </a>
        </div>
    </div>

    @yield('content')
    <script src="./js/app.js"></script>
</body>
</html>