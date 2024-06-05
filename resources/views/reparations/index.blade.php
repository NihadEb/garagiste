<!DOCTYPE html>
<html @if(app()->getLocale() == "ar") dir=rtl @endif lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion Garagiste- Admin</title>
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

    .preloader img {
      animation: spin 2s linear infinite;
      border-radius: 50%
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
    <section class="content">
            <div id="showP">
                <!-- code de la fenetre modal  -->
            </div>

      <div class="m-5">
        <a class="btn " href="{{route('reparations.create')}}" style="background-color: #23049D; color: #FFFFFF;">@lang('Ajouter une reparation')</a>
            <a href="{{route('generate-pdfr')}}">
                <button class="btn " style="background-color: #74E291; border-color: #74E291;">@lang('telecharger en pdf')</button>
            </a>


        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-10" role="alert" style="background-color: #EBE645;border:#EBE645 1px solid; color:#23049D">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p>{{ $message }}</p>
        </div>
        @endif
        <div id="showR">
            <!-- code de la fenetre modal  -->
        </div>
        <div id="divResult">


      </div>
      <div id="divDelete">

      </div>
    </section>
    <table class="table table-striped  mt-10 w-50" >
        <tr>
            <th>@lang('Action')</th>
            <th >@lang('Numero')</th>
            <th >@lang('description')</th>
            <th >@lang('status')</th>
            <th >@lang('date_debut')</th>
            <th >@lang('date_fin')</th>

            <th >@lang('nom_de_mecanicien')</th>
            <th >@lang('numero_vehicule')</th>
        </tr>
        @foreach ($reparations as $rp)
            <tr id="row{{$rp->id}}">
               <td>
                <button class="btnShow btn  hover:bg-yellow-100 text-black font-bold  px-2 border-b-4 border-blue-100 hover:border-yellow-100 rounded" v="{{$clt->id}}"style="color:white ;background-color: #EBE645; border-color: #EBE645;" v="{{$rp->id}}">@lang('Voir')</button>
                <a class="btnEdit btn  hover:bg-green-400 text-white font-bold  px-2 border-b-4 border-blue-700 hover:border-green-500 rounded" href="{{ route('clients.edit',$clt->id) }}"style="background-color: #74E291; border-color: #74E291;"href="{{route('reparations.edit',$rp->id)}}">@lang('Modifier')</a>
                <button class="btnDelete btn  hover:bg-red-400 text-white font-bold px-2 border-b-4 border-red-700 hover:border-red-500 rounded" style="background-color: #E21818; color: #FFFFFF;"v="{{$rp->id}}">{{ trans('Supprimer')}}</button>
            </td>
                <td>{{ $rp->id}}</td>
                <td>{{ $rp->description}}</td>
                <td>{{ $rp->status}}</td>
                <td>{{ $rp->startDate }}</td>
                <td>{{$rp->endDate }}</td>
               <td> {{$rp->nom_mecaniciens}}</td>
                <td>{{$rp->vehicule_id }}</td>
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
