<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <title>Daily Task App - Update Task</title>
</head>

<body>
    <div class="container">
        <h1> Daily Task App </h1>
        <h6> Update or edit your task </h6>
        <div>
            <img src="{{ URL::asset('images/coding-gaa38c8c76_640.png')}}" alt="description of myimage">
        </div>
        <div>
            <form action="/updatetasks" method="POST">
                {{csrf_field()}}
                <input type="text" name="taskname" value="{{$taskdata->task}}" class="i_1">
                <input type="hidden" name="id" value="{{$taskdata->id}}">
                <br><br>
                <input type="submit" value="Update" class="i_2" />
                <a href="tasks"><button class="i_3"> Cancel </button></a>
            </form>
        </div>
        
    </div>
</body>

</html>