<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
    <body class="font-sans antialiased light">
        <main class="holder-content min-h-screen d-flex justify-content-between flex-column align-items-md-stretch">
            @include('layouts.header')

            <!-- Page Content -->
            <div> {{ $slot }} </div>

            @include('layouts.footer')
        </main>
    </body>
</html>
