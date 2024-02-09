<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sueka-Dashboard</title>



    <!-- Links CSS e javacript -->
    <link rel="stylesheet" href="{{asset('css/listaficheiro.css') }}">
    <script defer src="{{asset('js/jslistaficheiro.js')}}"></script>
    <script defer src="{{asset('js/java.js')}}"></script>
    <!-- Link Icones -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link do logo na aba do navegador -->
    <link rel="icon" href="{{asset('img/logo.png') }}">
    <!-- Link e script de javacript alerta -->
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

</head>

<body>
    <!-- =============Sidebar Start================ -->
    <div class="sidebar">
        <a href="#" class="logo">
            <img src="{{asset('img/logo.png') }}" alt="" />
            <span>SUEKA</span>
        </a>
        <ul class="side-menu">
            <li class="active">
                <a href="{{ route('administrador') }}"><i
                        class='bx bxs-dashboard bx-tada bx-rotate-270'></i>Dashboard</a>
            </li>
            <li>

                <a href="#"><i class='bx bxs-objects-vertical-bottom'></i>Informação</a>

            </li>



            <p class="app"> Armazenamento</p>
            <li>
                <a href="{{ route('listaficheiro') }}"><i class='bx bx-file-blank'></i> Armazenar Ficheiros </a>

            </li>



            <li>
                <a href="#"><i class='bx bx-folder'></i>Pastas </a>

            </li>
            <p class="app"> Gestão de Utilizadores</p>
            <li>
                <a href="#"><i class='bx bx-group'></i> Utilizadores</a>


            </li>


            <p class="app"> Autenticação</p>
            <li>

                <a href="#"><i class='bx bx-user'></i>Perfil</a>
            </li>
            <li>
                <a href="#"> <i class='bx bx-notification'></i>Notificações </a>
            </li>
            <li>
                <a href="#"> <i class='bx bx-cog bx-flip-vertical'></i> Sobre Sueka</a>
            </li>
        </ul>

        <div class="side-menu">
            <ul>
                <li>
                    <a href="#"><i class="bx bx-moon"></i>Dark / Light</a>
                </li>
        
            </ul>
        </div>
    </div>
    <!-- =============Sidebar Close================ -->

    <div class="content">
        <nav>
            <i class="bx bx-menu"></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Procurar..." />
                    <button type="submit"><i class="bx bx-search"></i></button>
                </div>
            </form>

            <a href="#" class="notification">
                <i class="bx bx-bell"></i>
                <span>12</span>
            </a>

            <a href="#" class="profile">
                <img src="./wave.jpg" alt="" />
            </a>

            
        <a  class="sair">
        <form action="{{ route('logout') }}" method="POST" class="d-flex" >
                @csrf
                @method('DELETE')
                <button class="logout " type="submit" title="Sair"><i class="bx bx-log-out-circle"></i></button>
            </form>
        </a>
 
        </nav>

        <!-- Main Start -->
        <main>
            <div class="header">
                <h1> Lista de Ficheiros</h1>
                <ul class="breadcrumb">
                    <li><a href="#" class="active">Todas os Ficheiros Armazenados</a></li>
                </ul>
            </div>
            <a href="#">
                <button class="novoficheiro"> Novo Ficheiro <i class="bx bx-file"></i></button>
            </a>
        </main>
        <!-- Main Close -->


        <!--============= tabela com tosdos os ficheiros==============-->
<div class="toda_tabala">
        <div class="bottom_data">
      

            <section class="table__header">


                <h1>Ficheiros</h1>
                <div class="input-group">
                    <input type="search" placeholder="procurar...">
                    <i class='bx bx-search-alt'></i>
                </div>



                <div class="export__file">
                    <label for="export-file" class="export__file-btn" title="Exportar Ficheiro"></label>
                    <input type="checkbox" id="export-file">
                    <div class="export__file-options">
                        <label>Exportar como &nbsp; &#10140;</label>
                        <label for="export-file" id="toPDF">PDF <i class='bx bxs-file-pdf'></i></label>
                 
                    </div>
                </div>
            </section>




            <section class="table__body">

                <table>

                    <thead>
                        <tr>
                            <th scope="col">Nº</th>
                            <th scope="col"> Nome do ficheiro</th>
                            <th scope="col"> Descrição do ficheiro </th>
                            <th scope="col"> Tipo de ficheiro</th>
                            <th scope="col"> Criado em </th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Ficheiro</th>
                            <th scope="col">Acções</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>



                        @foreach($data as $data)

                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->nome}}</td>
                            <td>{{$data->descricao}}</td>
                            <td>{{$data->tipo}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->utilizador}}</td>
                            <td>{{$data->file}}</td>
                            <td>

                                <div class="btn-group">
                                    <a href="{{url('/visualizarficheiro',$data->id)}}"><button data-tooltip="Editar ficheiro"
                                            class="btn btn-edit "><i class='bx bx-edit'></i></button></a> |

                                    <a href="{{url('/visualizarficheiro',$data->id)}}"><button data-tooltip="Detalhes ficheiro"
                                            class="btn btn-detalhe"><i class='bx bx-info-circle'></i></button></a> |

                                    <a href="{{url('/download',$data->file)}}"><button data-tooltip="Apagar ficheiro"
                                            class="btn btn-delete"><i class='bx bx-trash'></i></button></a> |

                                    <a href="{{url('/download',$data->file)}}"><button data-tooltip="Baixar ficheiro"
                                            class="btn btn-download"><i class='bx bxs-download'></i></button></a>

                                </div>
                            </td>

                        </tr>




                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>
    <!--============= Fim tabela com tosdos os ficheiros ===============-->

</body>

</html>