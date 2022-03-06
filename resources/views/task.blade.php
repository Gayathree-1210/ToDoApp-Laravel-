<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Task</title>
</head>
<body>
    <div class="container">
        
            <div class="row">
                <div class="col-md-12 col-md-offset-3" style="margin-left:50px">
                <h4>| MY TODO LIST |</h4>
                <hr>

                <!-- @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div> 
                @endif


                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif -->


                    <form action="/addtask" method="post">

                    @csrf

                        <div class="form-group">
                            <label for="">Task</label>
                            <input type="text" class="form-control" name="task" placeholder="Enter Your task">
                            <span style="color:red">@error('task'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Due Date</label>
                            <input type="text" class="form-control" name="ddate" placeholder="DD/MM/YY">
                            <span style="color:red">@error('ddate'){{ $message }} @enderror</span>
                        </div>

                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">SAVE</button>
                            <button type="reset" class="btn btn-warning">CLEAR</button>
                        </div>

                        
                    </form>

                    <br>
                        <table class="table table-dark">
                            <th>ID</th>
                            <th>Task</th>
                            <th>Date</th>
                            <th>Completed</th>
                            <th>Action</th>

                            @foreach($taskmodels as $taskmodel)
                                <tr>
                                    <td>{{$taskmodel->id}}</td>
                                    <td>{{$taskmodel->task}}</td>
                                    <td>{{$taskmodel->ddate}}</td>
                                    <td>
                                    @if($taskmodel->iscompleted)
                                    <button class="btn btn-success">Completed</button>
                                    @else
                                    <button class="btn btn-warning">Not Completed</button>
                                    @endif
                                    
                                    </td>


                                    <td>
                                        @if(!$taskmodel->iscompleted)
                                        <a href="/markascompleted/{{$taskmodel->id}}" class="btn btn-primary">Mark As Completed</a>
                                        @else
                                        <a href="/markasnotcompleted/{{$taskmodel->id}}" class="btn btn-danger">Mark As Not Completed</a>
                                        @endif
                                        <a href="/deletetask/{{$taskmodel->id}}" class="btn btn-info">Delete</a>
                                        <a href="/updatetask/{{$taskmodel->id}}" class="btn btn-success">Update</a>

                                    </td>
                                </tr>
                            @endforeach

                        </table>
                </div>

            </div>
        
    </div>
    
</body>
</html>