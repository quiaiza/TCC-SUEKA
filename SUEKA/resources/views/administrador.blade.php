<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sueka-Dashboard</title>



  <!-- Links CSS e javacript -->
  <link rel="stylesheet" href="{{asset('css/styledashboard.css') }}">
  <script defer src="{{asset('js/jsdashboard.js')}}"></script>
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
        <a href="{{ route('administrador') }}"><i class='bx bxs-dashboard bx-tada bx-rotate-270'></i>Dashboard</a>
      </li>
      <li>

        <a href="#"><i class='bx bxs-objects-vertical-bottom'></i>Informação</a>

        </li>



<p class="app">Armazenamento</p>
      <li>
        <a href="{{ route('listaficheiro') }}"><i class='bx bx-file-blank'></i> Armazenar Ficheiros </a>

      </li>
      <li>
        <a href="#"><i class='bx bx-folder'></i>Pastas </a>

      </li>


      <p class="app">Gestão de Utilizadores</p>
      <li>
        <a href="#"><i class='bx bx-group'></i> Utilizadores</a>


      </li>
      <p class="app">Autenticações</p>

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
        <h1> Bem-vindo Administrador, {{ Auth::user()->name }}</h1>
        <h2>Dashboard</h2>
        <ul class="breadcrumb">
          <li><a href="#" class="active">Analise</a></li>
        </ul>
      </div>

      <!--============= cards start ===============-->
      <ul class="cards">
        <li>
          <i class="bx bx-group"></i>
          <span class="info">
            <h3>7,373</h3>
            <p>Utilizadores</p>
          </span>
        </li>
        <li>
          <i class="bx bxs-objects-vertical-bottom"></i>
          <span class="info">
            <h3>9,373</h3>
            <p>Informações</p>
          </span>
        </li>
        <li>
          <i class="bx bx-folder"></i>
          <span class="info">
            <h3>5,373</h3>
            <p>Pastas</p>
          </span>
        </li>
        <li>
          <i class="bx bx-line-chart"></i>
          <span class="info">
            <h3>$6,373</h3>
            <p>Total de Ficheiros</p>
          </span>
        </li>
      </ul>
      <!--============= cards close ===============-->

      <!--============= bottom Data Start ===============-->
      <div class="bottom_data">
        <div class="orders">
          <div class="header">
            <h3>Recent Orders</h3>
          </div>
          <table>
            <thead>
              <tr>
                <th> ID</th>
                <th> Nome</th>
                <th>Email </th>
                <th> Data</th>
                <th> Estado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>103326</td>
                <td class="img_content">
                  <img src="./wave.jpg" alt="" />
                  <p>John Doe</p>
                </td>
                <td>admin@onlineittuts.com</td>
                <td>6th Sep 2025</td>
                <td><span class="status completed">Completed</span></td>
              </tr>
              <tr>
                <td>103626</td>
                <td class="img_content">
                  <img src="./wave.jpg" alt="" />
                  <p>Jullee Smith</p>
                </td>
                <td>admin@onlineittuts.com</td>
                <td>6th Sep 2025</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>103926</td>
                <td class="img_content">
                  <img src="./wave.jpg" alt="" />
                  <p>Willims</p>
                </td>
                <td>admin@onlineittuts.com</td>
                <td>6th Sep 2025</td>
                <td><span class="status processing">Pending</span></td>
              </tr>
              <tr>
                <td>103326</td>
                <td class="img_content">
                  <img src="./wave.jpg" alt="" />
                  <p>John Doe</p>
                </td>
                <td>admin@onlineittuts.com</td>
                <td>6th Sep 2025</td>
                <td><span class="status completed">Completed</span></td>
              </tr>
              <tr>
                <td>103626</td>
                <td class="img_content">
                  <img src="./wave.jpg" alt="" />
                  <p>Jullee Smith</p>
                </td>
                <td>admin@onlineittuts.com</td>
                <td>6th Sep 2025</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
            </tbody>
          </table>
        </div>


      </div>
      <!--============= bottom Data Start ===============-->
    </main>
    <!-- Main Close -->
  </div>
  <!-- =============Contetn CLose================ -->






















  <!--





<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
    </nav>
 
    <div class="container">
       <h1> Bem-vindo Administrador, {{ Auth::user()->name }}</h1>
    </div>

-->


</body>

</html>