<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MyHomie</title>

  <link rel="stylesheet"  href="{{asset('css/app.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app" >

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
                      <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/avatar.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{url('admin')}}"><i class="fa fa-link"></i> <span>Dashbord</span></a></li>
        <li class="active"><a href="{{url('users')}}"><i class="fa fa-link"></i> <span>users</span></a></li>
        <li class="active"><a href="{{url('companies')}}"><i class="fa fa-link"></i> <span>companies</span></a></li>
        <li class="active"><a href="{{url('files')}}"><i class="fa fa-link"></i> <span>files</span></a></li>
        <li class="active"><a href="{{url('invoices')}}"><i class="fa fa-link"></i> <span>invoices</span></a></li>
        <li class="active"><a href="{{url('emails')}}"><i class="fa fa-link"></i> <span>emails</span></a></li>        
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  

    <!-- Main content -->
    <section class="content container-fluid">

    @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      
    </div>
  </footer>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script >
   $('#edit').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var name = button.data('name') // Extract info from data-* attributes
  var date = button.data('date')
  var email = button.data('email')
  var subject = button.data('subject')
  var city = button.data('city')
  var phone = button.data('phone')
  var role = button.data('role')
  var type = button.data('type')
  var logo = button.data('logo')
  var id = button.data('id')
  //invoices
  var user_id = button.data('user_id')
  var file_id = button.data('file_id')
  var company = button.data('company')
  var sum = button.data('sum')
  var currency = button.data('currency')
  var payed = button.data('payed')
  var start = button.data('start')
  var due = button.data('due')
  var end = button.data('end')

  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text(name)
  modal.find('.modal-body #company_name').val(name)
  
  modal.find('.modal-body #name').val(name)
  modal.find('.modal-body #subject').val(subject)
  modal.find('.modal-body #subject').val(city)
  modal.find('.modal-body #company_id').val(role)
  modal.find('.modal-body #company_type').val(type)
  modal.find('.modal-body #company_type').val(phone)
  modal.find('.modal-body #company_logo').val(logo)
  modal.find('.modal-body #created_at').val(date)
  modal.find('.modal-body #company_email').val(email)
  modal.find('.modal-body #email').val(email)
  modal.find('.modal-body #city').val(city)
  modal.find('.modal-body #phone').val(phone)
  modal.find('.modal-body #role').val(role)


  modal.find('.modal-body #user_name').val(user_id)
  modal.find('.modal-body #file_id').val(file_id)
  modal.find('.modal-body #company_name').val(company)
  modal.find('.modal-body #sum').val(sum)
  modal.find('.modal-body #currency').val(currency)
  modal.find('.modal-body #payed').val(payed)
  modal.find('.modal-body #date_start').val(start)
  modal.find('.modal-body #date_end').val(end)
  modal.find('.modal-body #date_recive').val(date)  
  modal.find('.modal-body #due_date').val(due)


})

   $('#delete').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text(name)
  modal.find('.modal-body #id').val(id)

})

</script>
</body>
</html>
