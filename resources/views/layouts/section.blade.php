<style>
    *{
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
  </style>


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
{{--
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="Sidebar Menu">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="navitem">


                <a href="{{route('clients.index')}}" class="nav-link" >

                  <p>
                   @lang('Gestion des clients')

                  </p>
                </a>
                <a href="{{route('mecaniciens.index')}}" class="nav-link" >

                  <p>
                    @lang('Gestion mécaniciens')

                  </p>
                </a>
                <a href="{{route('pieces.index')}}" class="nav-link" >

                  <p>
                    @lang('Gestion de stock')
                  </p>
                </a>
                <a href="{{route('reparations.index')}}" class="nav-link" >

                  <p>
                    @lang('Gestion des réparations')

                  </p>
                  </a> <a href="{{route('vehicules.liste')}}" class="nav-link" >

                  <p>
                    @lang('Gestion des véhicules')

                  </p>
                </a>
                </a> <a href="{{route('factures.listea')}}" class="nav-link" >

                  <p>
                    @lang('Facturations')

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
