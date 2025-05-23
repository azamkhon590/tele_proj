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
            const initData = telegram.initData;
            const initDataUnsafe = telegram.initDataUnsafe;
            telegram.disableVerticalSwipes();
            console.log(initDataUnsafe);

            fetch("/login",{
                method: "POST",
                headers: {
                    'Content_Type': "application/json",
                    'Accept': "application/json",
                },

                body: JSON.stringify({init_data: initData, init_data_unsafe: initDataUnsafe}),
            })

                .then(response => response.text())
                .then(data => {
                    if($data.status === 200){
                        return window.location.replace("/app");
                    } else {
                        return window.location.replace("/error");
                    }
                })
                .catch(error => {
                    console.log(error);
                })
        }
    </script>
</body>
</html>