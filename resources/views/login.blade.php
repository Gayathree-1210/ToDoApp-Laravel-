<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>

    <style>
        .container {
            max-width: 400px;
            height: 300px;
            
        }
        </style>

</head>
<body>

    <div class="container p-1 my-1 bg-dark text-white">
        
            <div class="row">
                <div class="col-md-8 col-md-offset-8" style="margin-left:50px">

            <form action="/login" method="get">
                        @csrf
                <h3>| Log in |</h3><br>       
                <div class="form-group">
                    
                    <input type="text" class="form-control" name="email" placeholder="Enter Your email">
                    <span style="color:red">@error('email'){{ $message }} @enderror</span>
                </div>
                <br>

                <div class="form-group">
                    
                    <input type="text" class="form-control" name="Password" placeholder="Enter Your Password">
                    <span style="color:red">@error('Password'){{ $message }} @enderror</span>
                </div>
                <br>

               
                <div class="form-group">
                
                    <a href="/task" class="btn btn-success">Signin</a>
                    
                    <a href="/register" class="btn btn-primary">Signup</a>
                            
                </div>


                <div class="clearfix">
                    <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                    <a href="#" class="float-right">Forgot Password?</a>
                </div>        
            </form>
            @if($errors->any())
                <h4 class="alert alert-danger" role="alert">{{$errors->first()}}</h4>
            @endif  
        
        </div>
    </div>
</div>
    
</body>
</html>