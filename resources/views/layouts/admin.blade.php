<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    @include('layouts.css')
    <title>@yield('title')</title>
</head>

<body>
   <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="http://www.cledsonfs.com.br/pontocontrole">@yield('title')</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src={{ URL::asset('public/assets/images/avatar-1.jpg') }} alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">nome&nbsp;sobrenome </h5>
                                    <span class="status"></span><span class="ml-2">
                                    	Grupo:
                                    </span>
                                </div>
                                <!--<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>-->
                                <a class="dropdown-item" href="logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Admin</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                {{ date('l, d M Y') }}
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="m-r-10 mdi mdi-folder-star"></i>Cadastros</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::asset('admin/empresa') }}"><i class="m-r-10 mdi mdi-note-text">&nbsp;&nbsp;Empresa<span class="badge badge-secondary">New</span></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::asset('admin/linhaproducao') }}"><i class="m-r-10 mdi mdi-note-text">&nbsp;&nbsp;Linha de Produção<span class="badge badge-secondary">New</span></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::asset('admin/maquina') }}"><i class="m-r-10 mdi mdi-note-text">&nbsp;&nbsp;Máquina<span class="badge badge-secondary">New</span></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::asset('admin/materiaprima') }}"><i class="m-r-10 mdi mdi-note-text">&nbsp;&nbsp;Materia Prima<span class="badge badge-secondary">New</span></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::asset('admin/motivoreprogramacao') }}"><i class="m-r-10 mdi mdi-note-text">&nbsp;&nbsp;Motivo Reprogramação/Retrabalho<span class="badge badge-secondary">New</span></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::asset('admin/operador') }}"><i class="m-r-10 mdi mdi-note-text">&nbsp;&nbsp;Operador<span class="badge badge-secondary">New</span></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::asset('admin/pontocontrole') }}"><i class="m-r-10 mdi mdi-note-text">&nbsp;&nbsp;Pontos de Controle<span class="badge badge-secondary">New</span></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::asset('admin/processo') }}"><i class="m-r-10 mdi mdi-note-text">&nbsp;&nbsp;Processo<span class="badge badge-secondary">New</span></i></a>
                                        </li>                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::asset('admin/produto') }}"><i class="m-r-10 mdi mdi-note-text">&nbsp;&nbsp;Produto<span class="badge badge-secondary">New</span></i></a>
                                        </li>                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::asset('admin/setor') }}"><i class="m-r-10 mdi mdi-note-text">&nbsp;&nbsp;Setor<span class="badge badge-secondary">New</span></i></a>
                                        </li>                                        
                                    </ul>
                                </div>
                            </li>
                           <!--<li class="nav-item">
                               <a class="nav-link" href="usuario"><i class="fas fa-user-plus">&nbsp;&nbsp;Usuários<span class="badge badge-secondary">Usuarios</span></i></a>
                           </li>-->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
       <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            @yield('content')
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             <strong>Copyright &copy; 2020 Pontos de Controle</strong></br>
			                Desenvolvido por <a href="http://www.cledsonfs.com.br">Cledson Francisco Silva</a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="http://www.cledsonfs.com.br">Contato</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
	@include('layouts.script')
        
    <script>

    </script>


</body>
 
</html>