<!DOCTYPE html>
<html>
@include('includes.head')
<body class="hold-transition sidebar-mini line-numbers">
<!-- Site wrapper -->
<div class="wrapper">
    @include('includes.navbar')
    @include('includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @section('content')
        @show
    </div>
    <!-- /.content-wrapper -->

    @include('includes.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        kapil
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/js/adminlte/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/js/adminlte/bootstrap/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="/js/adminlte/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/js/adminlte/adminlte.min.js"></script>
<!-- Showdown App -->
<script src="https://cdn.jsdelivr.net/npm/showdown@1.9/dist/showdown.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--script src="../../dist/js/demo.js"></script-->

<!-- Page specific JS -->
@section('page-script')
@show
</body>
</html>
