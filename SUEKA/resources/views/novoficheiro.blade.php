<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- Links CSS e javacript -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>

<body>


    <div onclick="openModal()" class="btnN">Clique aqui</div>

    <div id="modal-container" class="modal-container">
        <div class="modal">
            <button class="fechar" id="fechar">X</button>
           
           
            <form action="{{url('novoficheiro ')}}" method="post" enctype="multipart/form-data">

                @csrf


                <h1 class="h1">Adicionar um novo ficheiro</h1>

                <div class="input">

                    <label class="form-label">Nome do Ficheiro </label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Ficheiro">

                </div>

                <div class="input">

                    <label class="form-label">Descrição do Ficheiro </label>
                    <input type="text" class="form-control" id="descricao" name="descricao"
                        placeholder="Descição do ficheiro">
                </div>

                <div class="input">

<label class="form-label">Nome utilizador </label>
<input type="text" class="form-control" id="utilizador" name="utilizador"
    placeholder="Nome do ficheiro">
</div>
                <div class="input">

                    <label class="form-label">Nome do Ficheiro </label>
                    <select type="text" name="tipo" class="form-control" id="tipo">
                        <option selected>Escolha o tipo de arquivo</option>
                        <option value="Documento">Documento</option>
                        <option value="Imagem">Imagem</option>
                        <option value="Audio ">Audio</option>
                        <option value=" Videos">Videos</option>
                        <option value="Pastas">Pastas</option>
                    </select>
                </div>

                <div class="input">


                    <label class="form-label">Anexar ficheiro </label>
                    </div>
                   
                    <input type="file" name="file" accept=".php,.pdf,.png,.jpg">
                  

<a href="{{asset('show') }}"><button class="btn-armazenar ">Armazenar ficheiro</button></a>



            </form>
        </div>
    </div>


    <script src="{{asset('js/java.js') }}"></script>
</body>

</html>