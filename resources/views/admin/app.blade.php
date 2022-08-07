<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jan 2022 07:44:59 GMT -->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>@yield('title') - Djitugo Academy Internship</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin/img/favicon.ico') }}" /> 
               
        @include('admin.layouts._head')
        @yield('custom-style')

    </head>

    <body>
        <!-- BEGIN LOADER -->
        <div id="load_screen">
            <div class="loader">
                <div class="loader-content">
                    <div class="spinner-grow align-self-center"></div>
                </div>
            </div>
        </div>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        @include('admin.layouts._navbar')
        <!--  END NAVBAR  -->      

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN SIDEBAR  -->
            @include('admin.layouts._sidebar')
            <!--  END SIDEBAR  -->

            <!--  BEGIN CONTENT PART  -->
            @yield('main-content')
            <!-- END MAIN CONTAINER -->

        <!-- BEGIN SCRIPTS -->
        @include('admin.layouts._script')
        @yield('custom-script')
        <!-- END SCRIPTS -->

    </body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jan 2022 07:45:01 GMT -->

</html>
