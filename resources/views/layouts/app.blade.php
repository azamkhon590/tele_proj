<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield("styles")
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
            list-style-type: none;
            text-decoration: none;
        }
html,
body {
    height: 100%;
    width: 100%;
    overflow: hidden;
    background-color: #1c1f24;
}

.title {
    color: #ffffff;
    text-align: center;
    margin-top: 25px;
}

header,
main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

header {
    margin-top: 50px;
    margin-bottom: 15px;
}

main {
    margin-top: 40px;
}

footer {
    position: fixed;
    bottom: 65px;
}
    </style>

    <main>
        @yield("content")
        <x-navigation />
    </main>

    @yield("scripts")
</body>
</html>