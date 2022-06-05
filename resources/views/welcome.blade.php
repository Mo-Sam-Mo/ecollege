<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   

        body{
            background-image: url("Imgs/img1.jpeg");   
            background-size: cover;
            
        }
       
        body {
	display: flex;
	justify-content: center;
	align-items: center;
    overflow: hidden;
}
input {
        padding: 30px 100px;
        margin: 360px 5px;
        cursor: pointer;
        text-transform: uppercase;
        text-align: center;
        position: relative;
        font-size: large;
        
      
      }
      input:hover {
        opacity: 0.5;
        
      }



    </style>
</head>
<body>
    @auth
    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 "><input type="button" value="Dashboard"/></a>
@else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 "><input type="button" value="Log In"/></a>

    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 "> <input type="button" value="Sign Up"/></a>
    @endif
@endauth

</body>
</html>