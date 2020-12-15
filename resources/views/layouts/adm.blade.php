<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MTGold ADM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/jqvmap/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/toastr/toastr.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('adm') }}" class="nav-link">Home</a>
                </li>
            </ul>
            
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
    
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('adm') }}" class="brand-link">
                <img src="{{ asset('img/logo-MTGold.png') }}" alt="Seguro Light Logo" class="brand-image">
                <span class="brand-text font-weight-light">MTGold</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="/adm" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <!-- Tools -->
                        <li class="nav-header">TOOLS</li>
                        <li class="nav-item">
                            <a href="/adm/tools/carta" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>Gerenciar Cartas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Gerenciar Decks</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>Gerenciar Coleções</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/adm/tools/torneio" class="nav-link">
                                <i class="nav-icon fas fa-trophy"></i>
                                <p>Gerenciar Torneios</p>
                            </a>
                        </li>
                        <!-- /.tools -->

                        <!-- Configurações -->
                        <li class="nav-header">CONFIGURAÇÕES</li>
                        <li class="nav-item">
                            <a href="/adm/config/user" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Gerenciar Acessos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/adm/config/formato" class="nav-link">
                                <i class="nav-icon fab fa-buffer"></i>
                                <p>Gerenciar Formatos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/adm/config/edicao" class="nav-link">
                                <i class="nav-icon fas fa-archive"></i>
                                <p>Gerenciar Edições</p>
                            </a>
                        </li>
                        <!-- /.configurações -->

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('main')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>$.widget.bridge('uibutton', $.ui.button)</script>
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/sparklines/sparkline.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('AdminLTE/dist/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        bsCustomFileInput.init();
      });
    </script>

    <script>
      //script para formatar máscara de moeda
      String.prototype.reverse = function(){
        return this.split('').reverse().join(''); 
      };

      function mascaraMoeda(campo,evento){ 
        var tecla = (!evento) ? window.event.keyCode : evento.which;
        var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
        var resultado  = "";
        var mascara = "#.###.###.###,##".reverse();
        for (var x=0, y=0; x<mascara.length && y<valor.length;) {
          if (mascara.charAt(x) != '#') {
            resultado += mascara.charAt(x);
            x++;
          } else {
            resultado += valor.charAt(y);
            y++;
            x++;
          }
        }
        campo.value = resultado.reverse();
      }
    </script>

    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservationdate').datetimepicker({
          format: 'L'
        });

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
        //Date range as a button
      $('#daterange-btn').daterangepicker({
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
          function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        })

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })
        
        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

        })
    </script>

    <script type="text/javascript">
      $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.swalDefaultInfo').click(function() {
        Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.swalDefaultError').click(function() {
        Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
        
      $('.swalDefaultWarning').click(function() {
        Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.swalDefaultQuestion').click(function() {
        Toast.fire({
          icon: 'question',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastrDefaultSuccess').click(function() {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });

      $('.toastrDefaultInfo').click(function() {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });

      $('.toastrDefaultError').click(function() {
        toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });

      $('.toastrDefaultWarning').click(function() {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });

      $('.toastsDefaultDefault').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastsDefaultTopLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'topLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastsDefaultBottomRight').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomRight',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastsDefaultBottomLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastsDefaultAutohide').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          autohide: true,
          delay: 750,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastsDefaultNotFixed').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          fixed: false,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastsDefaultFull').click(function() {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          icon: 'fas fa-envelope fa-lg',
        })
      });

      $('.toastsDefaultFullImage').click(function() {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          image: '../../dist/img/user3-128x128.jpg',
          imageAlt: 'User Picture',
        })
      });

      $('.toastsDefaultSuccess').click(function() {
        $(document).Toasts('create', {
          class: 'bg-success', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastsDefaultInfo').click(function() {
        $(document).Toasts('create', {
          class: 'bg-info', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastsDefaultWarning').click(function() {
        $(document).Toasts('create', {
          class: 'bg-warning', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastsDefaultDanger').click(function() {
        $(document).Toasts('create', {
          class: 'bg-danger', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastsDefaultMaroon').click(function() {
        $(document).Toasts('create', {
          class: 'bg-maroon', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
    });
    </script>
</body>

</html>