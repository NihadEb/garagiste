<!DOCTYPE html>
<html @if(app()->getLocale() == "ar") dir=rtl @endif lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion Garagiste- Client</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  @vite(['resources/js/app.js','resources/css/app.css'])
  <style>
    .content .box-info{
      display: flex;
      gap: 80px;
      justify-content: center;
    }
    .content .box-info li{
      list-style: none;
    }
    .p1{
      background-color: gray;
      padding: 10px;
      width: 300px;
      height: 100px;
      text-align: center;
      font-size: large;
      border: 1px solid beige;
      border-radius: 30px;
      color:white;
    }
    .p1:hover{
      color:gray;
      background-color: white;
    } *{
        font-family: system-ui;
        font-family: system-ui;
    }
   .main-sidebar{
    background-color: #FAEF5D; color: blue;
   }
  .brand-link{
    display: flex;
    flex-direction: column;
  }
  .logo{
    width: 50px;
    height:50px;
    margin-left: 80px;
    border-radius: 50%;
    opacity: .8;
  }
  .nameSite{
    margin-left: 58px;
    color: rgb(5, 5, 53);
    font-weight:bolder;
    font-size: 23px
  }
  .sidebar{
    background-color: #23049D;
    color: white;
  }
  .info{
    color: white;
    font-size: 19px;
    margin-top: 19px;
    margin-left: 12px;
    font-weight: bolder;

  }
  .imgprfl{
    width: 45px;
    height:45px;
    border-radius: 50%;
    margin-top: 9px;
     margin-left:20px;

  }
  .Sidebar Menu{
    color: white;
  }
  .navitem{
    margin-top: 20px;
    color: white;
    background: #23049D;
    font-weight: bolder;
  }

  .navitem a:hover{
     background-color: #FAEF5D;
     color: #23049D;
  }
 .sidebar .nav-pills .nav-link {
  color: white; /* Changer cette couleur selon vos préférences */
}
    .preloader img {
      animation: spin 2s linear infinite;
      border-radius: 50%
    }
    /* CSS pour le formulaire de modification */
.table {
    border-collapse: collapse;
    width: 90%;
    margin-bottom: 1rem;
    color: #212529;
}

.table th, .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
    background-color: #FAEF5D;
    color: #000000;
    font-weight: bold;
}

.table tbody+tbody {
    border-top: 2px solid #dee2e6;
}

.table-bordered {
    border: 1px solid #dee2e6;
}

.table-bordered th, .table-bordered td {
    border: 1px solid #dee2e6;
}

.table-bordered thead th, .table-bordered thead td {
    border-bottom-width: 2px;
}

  </style>
  <!-- Google Font: Source Sans Pro -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
 <!-- Preloader -->
 <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('https://i.pinimg.com/564x/c2/38/ca/c238ca771e6b506dc93bf69b642559d7.jpg')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  @include('layouts.header')

<aside class="main-sidebar">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://i.pinimg.com/564x/c2/38/ca/c238ca771e6b506dc93bf69b642559d7.jpg" alt="AdminLTE Logo" class="logo">
      <span class="nameSite">@lang('Garagiste')</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
        <!-- Sidebar user panel (optional) -->
        <div style="display: flex; flex-direction:row; height:70px; border-bottom:#FAEF5D solid 2px">
          <div class="image">
            <img src="dist/img/avatar5.png" class="imgprfl" alt="User Image">
          </div>
          <div class="info" >
            {{ Auth::user()->name}}
          </div>
        </div>

      <!-- Sidebar Menu -->
      <nav class="Sidebar Menu">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="navitem">


                <a href="#" class="nav-link">
                  <p>
                   @lang('Gestion des véhicules')
                  </p>
                </a>

                <a href="{{route('reparations.index')}}" class="nav-link" >
                    <p>
                    @lang('Listes des factures')
                  </p>
                </a>
                <a href="{{route('reparations.liste')}}" class="nav-link">
                  <p>
                    @lang('Réparations')
                  </p>
                </a>
                <a class="nav-link" href="{{ route('logout') }}" class="nav-link" style="margin-top: 160px">
                    <p >@lang('Deconnecter')</p>
                </a>
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"></div>
          <div class="col-sm-6"></div>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="m-5">

        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-10" role="alert"
            style="background-color: #EBE645;border:#EBE645 1px solid; color:#23049D">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p>{{ $message }}</p>
        </div>
    @endif
        <div id="showR">
            <!-- code de la fenetre modal  -->
        </div>
        <a class="btn btn-secondary" href="{{route('generate-pdff')}}">@lang('telecharger PDF')</a>
    </section>
    <table class="table" style="background: #FAEF5D; margin-top:20px" >
        <tr>
            <th >@lang('Charge supplimentaire')</th>
            <th >@lang('nom client')</th>
            <th >@lang('prenom client')</th>
            <th >@lang('Montant')</th>

        </tr>
        @foreach ($factures as $fc)
            <tr id="row{{$fc->id}}">
                <td>{{ $fc->chargeSupp}}</td>
                <td>{{ $fc->client_nom}}</td>
                <td>{{ $fc->client_prenom}}</td>
                <td>{{$fc->montant }}</td>

            </tr>
        @endforeach
    </table>
  </div>
  <!-- /.content-wrapper -->
  <footer style="height:10px;margin-left:650px; color:#23049D">
    <strong>Copyright &copy; Garagiste © 2024.</strong>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@yield('script')
</body>
</html>

<script>
function submitForm(event){
  event.preventDefault();
  var formData = $('#searchForm').serialize();


  axios.post(url, formData)
    .then(response => {
      $("#divResult").html(response.data);
    })
    .catch(error => {
      console.log(error);
    });
}
</script>
