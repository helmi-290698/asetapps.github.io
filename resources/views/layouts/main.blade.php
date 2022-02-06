@include('partial.header')
<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            @include('partial.topbar')
        
          @include('partial.navbar')
        
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('partial.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            @yield('container')
            <!-- content -->

            @include('partial.footer')

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
   @include('partial.footer_script')