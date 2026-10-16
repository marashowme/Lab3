<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Мій сайт')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f9f9f9; }
        nav { background: #333; padding: 12px; border-radius: 5px; margin-bottom: 20px; }
        nav a { color: white; text-decoration: none; margin-right: 20px; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .container { background: white; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        button, .btn { padding: 6px 12px; background: #007bff; color: white; border: none; border-radius: 3px; cursor: pointer; text-decoration: none; }
        button:hover, .btn:hover { background: #0056b3; }
        .error { color: red; font-size: 0.9em; }
    </style>
</head>
<body>

<!-- Єдине головне меню для всього сайту -->
<nav>
    <a href="/">Головна</a>
    <a href="{{ route('country.index') }}">🌍 Довідник країн (ЛР)</a>
    <a href="{{ route('product.index') }}">💻 Магазин техніки (Індивідуальне)</a>
</nav>

<div class="container">
    <!-- Сюди буде підставлятися вміст кожної сторінки -->
    @yield('content')
</div>

</body>
</html>
