<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SUEKA - Entrar</title>

  <!-- Links CSS e javacript -->
  <link rel="stylesheet" href="{{asset('css/stylelogin.css') }}">
  <script src="{{asset('js/js.js') }}"></script>
  <!-- Link Icones -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- Link do logo na aba do navegador -->
  <link rel="icon" href="{{asset('img/logo.png') }}">
  <!-- Link e script de javacript alerta -->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>
  <!-- Div do cabeçalho da pagina -->
  <div class="header">

    <a href="{{asset('login') }}">SUEKA - A Sua Plataforma de Armazenamento</a>
    <a href="{{asset('welcome') }}"> <img src="{{asset('img/logo.png') }}" alt=""></a>

  </div>

  <!-- Div responsagem pela ondas -->
  <div class="ondas">

    <img src="{{asset('img/onda.png') }}" alt="">
    <div>
      <!-- Fim div do cabeçalho da pagina -->
      <!-- Div principal do formulario -->
      <div class="wrapper">

        <!-- Condição if e else  para verificar se utilizador existe-->

        @if(Session::has('error'))
        <!--  Codigo para apresentar a mensagem de erro em javascript -->
        <script>
          Swal.fire({
            icon: "error",
            title: "Oops...Email ou Senha Errado!",
          });
        </script>
        @endif


        <!-- Formulario de Entrar-->
        <form action="{{ route('login') }}" method="POST">
          <!-- utiliza a confiança que um site tenha no navegador de um usuário autenticado -->
          @csrf
          <h1 class="h1">Entrar</h1>

          <div class="input">

            <label class="form-label">Email </label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
            <i class='bx bx-user'></i>
          </div>



          <div class="input">
            <label class="form-label">Senha </label>
            <i class='bx bxs-lock'></i>

            <input type="password" name="password" placeholder="******" class="form-control" id="password" required>
          </div>

          <div class="pa">
            <p class="paragrafro" ><a href="{{asset('esquecesenha') }}">Esqueceu-se da Senha?</a></p>
          </div>

          <button class="btn ">Entrar</button>

        </form>
        <!-- Fim do formulario -->
      </div>
      <!-- Fim da div principal-->
</body>

</html>