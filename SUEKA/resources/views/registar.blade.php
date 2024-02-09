<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SUEKA- Registar</title>
    <script src="{{asset('js/js.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/stylelogin.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper">






        @if(Session::has('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: "Utilizador Cadastrado com sucesso!",
                showConfirmButton: false,
                timer: 2000
            }); 
        </script>
        @endif


        <form action="{{ route('registar') }}" method="POST">
            @csrf

            <h1 class="h1">Sueka - Registar</h1>

            <div class="input">

                <h2 class="h2">Nome do Utilizador</h2>
                <input type="text" name="name" class="form-control" id="name" placeholder="Digite o seu nome" required>
                <i class='bx bx-at'></i>
            </div>



            <div class="input">
                <h2 class="h2">Email do Utilizador</h2>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                    required>
                <i class='bx bx-user'></i>
            </div>

            <div class="input">

                <h2 class="h2">Tipo do Utilizador</h2>
                <select class="input" name="tipo" id="tipo">
                    <option value="0">Administrador</option>
                    <option value="1">Utilizador</option>

                </select>
                <i class='bx bx-chevron-down'></i>
            </div>

            <div class="input">
                <h2 class="h2">Senha</h2>
                <input type="password" name="password" placeholder="Senha" class="form-control" id="password" required>
                <i class='bx bxs-lock'></i>
            </div>


            <button class="btn ">Registar</button>

        </form>

    </div>

</body>

</html>