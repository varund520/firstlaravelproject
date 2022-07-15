
@include('layouts.test.header')
    <body>
        <div class="jumbotron text-center">
           <h1>My First Bootstrap Page</h1>
           <p>Resize this responsive page to see the effect!</p> 
        </div>
        <div class="container">
            @yield('title')
        </div>
        <br>
        <div class="container">
            @yield('first-section')
        </div>
@include('layouts.test.footer')
  
