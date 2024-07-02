<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>News Portal</title>
  <link rel="icon" href="">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/sb-admin-2.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>


<body id="page-top">
          
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('categoryadmin.dashboard') }}">
        <div class="sidebar-brand-text mx-4">News Portal</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
   
      <!-- Nav Item - Dashboard -->

      <li class="nav-item"><a class="nav-link" href="{{ route('categoryadmin.dashboard') }}"><i class="fas fa-fw fa-home"></i><span>Home</span></a></li>

      <hr class="sidebar-divider">

      <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-users"></i><span>Manage Guests</span></a></li>

<script>
$(document).ready(function() {
    $.each($('#accordionSidebar').find('li'), function() {
        $(this).toggleClass('active', 
            window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
    }); 
});
</script>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>



    </ul>
    <!-- End of Sidebar -->
    
@include('categoryadmin.layouts.header')

    </body>
    </html>
