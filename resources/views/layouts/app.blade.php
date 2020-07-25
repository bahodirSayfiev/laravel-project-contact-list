<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title-block')</title>
   <link rel="stylesheet" href="/css/bootstrap.min.css">
   <link rel="stylesheet" href="/css/app.css">
</head>
<body>
   <div id="wrapper">
      <div id="content">
          @include('inc.header')
         <div class="wrapper">
            <div class="container-width">
               @yield('content')
            </div>
         </div>
      </div>
      @include('inc.footer')
   </div>
   
@include('inc.modal')
</body>
</html>