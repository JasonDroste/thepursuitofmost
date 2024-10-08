<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Pursuit of Most</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/img/favicon.io')}}" />
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet" />
</head>
<body id="page-top">
    
     <!-- Navigation-->
    @include('layouts.primary-nav')
    
    <!-- Masthead-->
    @include('layouts.header')
    <!-- About-->
    @include('layouts.about')
    <!-- Projects-->
    @include('layouts.projects')
    
    <!-- Signup & contact-->
    @include('layouts.contact')
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; JasonDroste LLC 2024</div></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>