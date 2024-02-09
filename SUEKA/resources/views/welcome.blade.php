<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SUEKA</title>

    <!-- Links Css -->
    <link rel="stylesheet" href="{{asset('css/stylewelcome.css') }}">
    <!-- Link do logo na aba do navegador -->
    <link rel="icon" href="{{asset('img/logo.png') }}">

</head>

<body>

    <!-- Div principal da pagina  -->

    <div class="main">
        <h1>SUEKA</h1>
        <P>A Tua Plataforma de Armazenamento</P>
      <a href="{{asset('login') }}">  <button class="btn">Começar!</button></a>
    </div>


    <!-- Roda pé -->
    <footer>
        <!--DIV das ondas -->
        <div class="waves">
            <div class="wave" id="wave1"></div>
        </div>

        <div class="zoom">
            <ul class="social_icon">
                <li>
                    <a href="#">
                        <img src="{{asset('img/logo_uan.png') }}">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('img/logo_fau.png') }}">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="{{asset('img/logo_curso.png') }}">
                    </a>
                </li>
            </ul>

        </div>

        <p>SUEKA © Plataforma Criada por <a target="_blank" href="https://www.uan.ao/">Uan</a> | 2024</p>
    </footer>


</body>

</html>