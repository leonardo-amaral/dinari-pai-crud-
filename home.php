<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: url("dinaripaper.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.9);
            padding: 50px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid yellowgreen;
            border-radius: 20px;
            padding: 10px;
        }
        a:hover{
            background-color: green;
        }

        h2{
            padding: 25px;
            background-image: linear-gradient(90deg, rgb(0, 255, 98), rgb(0, 255, 242));
            color: black;
            background-clip: text;
            -webkit-background-clip: text;
            /* ADICIONADO */
            -webkit-text-fill-color: transparent;

        }

        h1{
            text-shadow: black 0.1em 0.1em 0.2em
        }

    </style>
</head>
<body>
    
    <div class="box">
    <h1>Bem vindo!</h1>
    <img src="dinaripay.png" alt="logo-dinari" >
    <h2>DINARI PAY</h2>
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>