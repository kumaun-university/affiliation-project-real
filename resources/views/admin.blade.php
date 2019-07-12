<!DOCTYPE html>
<html lang="en">
        @include('admin/partials._head')
  <body id="page-top">
        @include('admin/partials._nav')

    <div id="wrapper">
        @include('admin/partials._sidebar')  

      <div id="content-wrapper">
        <div class="container-fluid">
            @include('partials._messages')
            @yield('content')    
        </div>
        <!-- /.container-fluid -->
        @include('admin/partials._footer')
      </div>

      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    @include('admin/partials._logout')
    @include('admin/partials._scripts')
    @yield('scripts')
    

  </body>

</html>
