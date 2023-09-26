<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authencantion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
<div class="col-md-4 col-md-ofset-4" style="margin: top 20px;">
    <h4>registration form </h4>
    <hr>
<form action="{{route('register-user')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">full name</label>
        <input type="text" class="form-control" placeholder="enter full name" name="name" value="">
        <span class="text-danger">@error('name') {{$message}} @enderror</span>
   </div>
    <div class="form.group">
        <label for="email">Email</label>
        <input type="text" class="form-control" placeholder="enter Email" name="email" value="">
        <span class="text-danger">@error('email'){{$message}} @enderror </span>
    
    </div>
    <div class="form.group">
        <label for="password">Password</label>
        <input type="text" class="form-control" placeholder="enter password" name="password" value="">
        <span class="text-danger">@error('password'){{$message}} @enderror </span>

    
    </div>
    <div class="form-group">
       <button class="button.btn.btn-block.bt-primary" type="submit" >Register</button>
    </div>
    </div>
    <br>
    <a href="login">Already Registered Login here</a>

    </form>
</div>
</div>
</div>
 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   
</html>