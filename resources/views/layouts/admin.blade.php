<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        
        {{-- Header --}}
        @include('partials.global._head')

        {{-- Admin Template Specific CSS --}}
            <!-- Custom Scrollbar CSS -->
            <link rel="stylesheet" href="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

            <link rel="stylesheet" href="/css/admin.css">
            <link rel="stylesheet" href="/css/admin-themes.css">
            <link rel="stylesheet" href="/css/slate.css">
        
        {{-- Page Specific Stylesheets --}}
        @yield('stylesheets')

        <title>{{ config('app.name', 'Laravel') }} Admin - @yield('title')</title>
        
    </head>

    <body>
    
        {{-- Page Wrapper --}}
        <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
            
            {{-- Sidebar --}}
            @include('partials.admin._sidebar')

            <main class="page-content">
                <div class="container-fluid">
                    {{-- Authentication Debug Component --}}
                    @component('components.debug.auth')
                    @endcomponent
                    
                    <h3>@yield('title')</h3>
                    <hr>
                    
                    {{-- Flash Messages --}}
                    @include('partials.global._messages')

                    @yield('content')

                    {{-- Footer --}}
                    @include('partials.global._footer')
                </div>
            </main> <!-- /.page-content -->
            
        </div> <!-- /.page-wrapper -->

        <!-- Scripts -->
        @include('partials.global._scripts')
        
        {{-- Admin Template Specific JS --}}
            <script src="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="/js/admin.js"></script>
        {{-- Page Specific Scripts --}}
        @yield('scripts')

    </body>

</html>
