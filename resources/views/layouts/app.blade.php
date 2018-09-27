<!DOCTYPE html>
<html>
  <head>
 	 <meta charset="utf-8">
 	 <title>Todolist</title>
  <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
  	<div class="container">
      @include('inc.messages')
      @yield('content')
    </div>  
    <footer id="footer" class="text-center">
    	<p>copyright 2017 &copy; Todolist</p>
    </footer>	
  </body>
</html>  