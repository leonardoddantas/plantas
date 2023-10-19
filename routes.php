<?php 
   
   namespace Routes;

   use Router\Router;

   Router::get('/', 'web/Views/login.html');
   Router::post('/find', 'web/Controllers/user/findUser.php');
   Router::get('/home', 'web/Views/home.html');