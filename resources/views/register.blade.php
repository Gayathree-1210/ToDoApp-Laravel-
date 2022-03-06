<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
            <h4>REGISTER | TODO </h4>
            <hr>

                <!-- @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>


                @endforeach -->


                <form action="/add" method="post">

                @csrf

                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter First name">
                        <span style="color:red">@error('fname'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter Last name">
                        <span style="color:red">@error('lname'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Contact</label>
                        <input type="text" class="form-control" name="contact" placeholder="Enter Contact number">
                        <span style="color:red">@error('contact'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter E-mail">
                        <span style="color:red">@error('email'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="Password" placeholder="Create your password">
                        <span style="color:red">@error('Password'){{ $message }} @enderror</span>
                    </div>

                    <br>
                    <div class="form-group">
                    <!-- <a href="/task" type="submit" class="btn btn-primary">SUBMIT</a> -->
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                        <a href="/login" class="btn btn-success">Go to Login</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
    
</body>
</html>