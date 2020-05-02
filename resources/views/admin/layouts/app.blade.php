<!DOCTYPE html>
<html>

<head>
    @include('admin.layouts.head')
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        @include('admin.layouts.nav_bar')


        @include('admin.layouts.side_bar')


        @section('main-content')
        @show


        @include('admin.layouts.footer')

        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>

    @include('admin.layouts.footer_scripts')
</body>

</html>