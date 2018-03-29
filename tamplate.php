<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header></header>
<style>
    *,
    html,
    body {
        margin: 0;
        padding: 0;
        list-style: none;
        outline: none;
        text-decoration: none;
        box-sizing: border-box;
    }
    body{

        height: 100vh;}
    nav{width: 85%;margin: 0 auto;padding-bottom: 50px;background: black}
    main{width: 85%;margin: 0 auto;}
    nav ul{display: flex;justify-content: space-around}
    nav ul li a{display: block;padding: 10px;
        color: white;text-transform: uppercase}
</style>
<nav>
    <ul>
        <li><a href="/">main</a></li>
        <li><a href="/contacts">contact</a></li>
        <li><a href="/cat">galary</a></li>
        <li><a href="/cat/fav">favorites</a></li>
    </ul>
</nav>
<main>
    <?php include $file;?>
</main>

</body>
</html>