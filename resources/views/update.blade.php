<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Task</title>
</head>
<body>
    <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-left:300px">
                <br><br>
                <form action="/updatetasks" method="post">
                    @csrf

                   
                    <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
                   
                    <input type="text" class="form-control" name="ddate" value="{{$taskdata->ddate}}"/>
                    
                    <input type="hidden" name="id" value="{{$taskdata->id}}"/>
                   
                    <input type="submit" class="btn btn-warning" value="Update"/>
                    &nbsp;&nbsp;
                    <input type="button" class="btn btn-danger" value="Cancel"/>
                    

                </form>
            </div>
        </div>
    </div>
</body>
</html>