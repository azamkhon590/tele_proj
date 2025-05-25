<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://telegram.org/js/telegram-web-app.js?57"></script>
    <script src="//cdn.jsdelivr.net/npm/eruda"></script>
    <script>eruda.init();</script>
    <script>Telegram.WebApp.ready();</script>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>TELEGRAM MINI APP</title>
</head>
<body>
    
    <script>
        if (window.Telegram && window.Telegram.WebApp) {
            telegram = window.Telegram.WebApp;
            const initData = telegram.initData; // Строка с initData
            const initDataUnsafe = telegram.initDataUnsafe; // Строка с initData
            telegram.disableVerticalSwipes();
            console.log(initDataUnsafe);
        }
    </script>
</body>
</html>
