<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>

    {{-- Подключение стилей и скриптов через Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header style="padding: 20px; background: #f5f5f5; display:flex; align-items:center; justify-content:space-between;">
    {{-- Логотип --}}
    <div class="logo" style="font-size: 24px; font-weight: bold;">
        <img src="{{ asset('images/logo.png') }}" alt="Логотип" style="height:40px;">
        Мой сайт
    </div>

    {{-- Главное меню --}}
    <nav>
        <a href="{{ route('home') }}" style="margin-right: 15px;">Главная</a>
        <a href="{{ route('array') }}">Массивы</a>
    </nav>
</header>

<main style="padding: 20px;">
    <h1>Добро пожаловать!</h1>

    {{-- Картинка из папки images --}}
    <img src="{{ asset('images/example.jpg') }}" alt="Картинка" style="max-width:300px; display:block; margin:20px 0;">

    {{-- Рыбный текст --}}
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Provident laboriosam obcaecati officiis sequi repudiandae repellendus, 
        perspiciatis doloremque aliquid amet velit? Aspernatur recusandae culpa 
        laborum repellat eos saepe dolorum explicabo vitae.
    </p>
</main>

<footer style="background:#f5f5f5; padding:15px; margin-top:30px; text-align:center;">
    © Иванов Иван Иванович, {{ date('Y') }}
</footer>

</body>
</html>
