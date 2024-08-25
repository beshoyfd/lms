@include(theme('partials._header'))
@include('secret_login')

@if(Settings('preloader_status'))
    <!-- Page loading spinner -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div>
            <span>Loading...</span>
        </div>
    </div>
@endif


<!-- Page wrapper -->
<main class="page-wrapper">

@include(theme('partials._menu'))

@yield('mainContent')

</main>

@include(theme('partials._footer'))
