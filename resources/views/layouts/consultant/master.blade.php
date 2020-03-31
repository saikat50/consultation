@include('layouts.consultant.stylesheets')

@yield('page-css')

@include('layouts.consultant.header-top')
@include('layouts.consultant.header')

@yield('content')

@include('layouts.consultant.footer')
@include('layouts.consultant.scripts')

@yield('page-script')

@include('layouts.consultant.scripts-bottom')
