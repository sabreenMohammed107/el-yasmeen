@include('adminLayout.head')

<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        @include('adminLayout.header')


        @include('adminLayout.menu')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @yield('title')

            {{-- <small>Control panel</small> --}}
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            @include('adminLayout.messages')



            @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">

        <p>Copyright © 2022 All rights reserved to مؤسسة الياسمين</p>
      </footer>



    </div><!-- ./wrapper -->


@include('adminLayout.footerScripts')
