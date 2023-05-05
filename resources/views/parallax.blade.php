<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    /* clearing css */
    *, html, body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .parallax{
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        width: 100%;
        height: 100vh;
    }
    .intro{
        background-image: url('gambar/1.jpg');
    }
    .content{   
        background-image: url('gambar/2.jpg');

    }
    .footer{
        background-image: url('gambar/3.jpg');

    }
    .cta{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .title{
        font-size: 4em;
        letter-spacing: 20px;
        font-family: fantasy;
        color: black;
    }
</style>
<body>
    <div class="parallax intro">
        <div class="cta">
            <div class="title">Hello World</div>
        </div>
    </div>
    <div class="parallax content"></div>
    <div class="parallax footer"></div>
</body>
</html>