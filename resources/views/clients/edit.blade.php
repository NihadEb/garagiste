<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion Garagiste- Admin</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  @vite(['resources/js/app.js','resources/css/app.css'])
  <style>
    *{
        font-family: system-ui;
    }
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}') }}" >
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.section')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="margin: 10px;">

<div class="row">
    <div class="col-lg-12 mt-10" >

        <div class="pull-right"style="margin-left:40px">
            <a class="btn " href="{{ route('clients.index') }}" style="background: #FAEF5D">@lang('Retourner')</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show mt-10" role="alert" style="background-color: #F8D7DA; border-color: #F8D7DA; color: #721C24;">
    <strong>@lang('Oops! ') </strong>@lang('Veuillez remplir tous les champs.')
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>


@endif

<form action="{{ route('clients.update',$clt->id) }}" method="POST" class="m-10">
    @csrf
    @method('PUT')
    <table class="table" style="border: 2px solid #FAEF5D;">
        <tbody>
            <tr>
                <td><strong>@lang('Nom'):</strong></td>
                <td><input type="text" name="nom" class="form-control" placeholder="nom.." value="{{ $clt->nom }}"></td>
            </tr>
            <tr>
                <td><strong>@lang('Prenom') :</strong></td>
                <td><input class="form-control" name="prenom" placeholder="prenom ..." value="{{ $clt->prenom }}"></td>
            </tr>
            <tr>
                <td><strong>@lang('Telephone') :</strong></td>
                <td><input class="form-control" name="telephone" placeholder="telephone ..." value="{{ $clt->telephone }}"></td>
            </tr>
            <tr>
                <td><strong>@lang('Adresse') :</strong></td>
                <td><input class="form-control" name="adresse" placeholder="adresse..." value="{{ $clt->adresse }}"></td>
            </tr>
        </tbody>
    </table>
    <!-- Bouton de soumission -->
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn" style="background-color: #23049D; color: #ffffff;">@lang('Modifier')</button>
    </div>
</form>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer style="height:10px;margin-left:650px; color:#23049D">
    <strong>Copyright &copy; Garagiste © 2024.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
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
