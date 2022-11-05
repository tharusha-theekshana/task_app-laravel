<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <title> Daily Task App - Enter Task </title>
</head>

<body>
    <div class="container">
        <div class="div1">
            <h1> Daily Task App </h1>
            <h6> Enter your daily tasks here and save them</h6>
            <div>
                @foreach($errors->all() as $error)

                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>

                @endforeach
                <form action="/savetask" method="post">
                    {{csrf_field()}}
                    <input type="text" name="task" placeholder="Enter Your Task Here" class="i1">
                    <br><br>
                    <input type="submit" value="Save" class="i2">
                    <input type="button" value="Clear" class="i3">
                </form>

                <table class="table">
                    <th > ID </th>
                    <th> Task </th>
                    <th> Process </th>
                    <th> Action </th>

                    @foreach($tasks as $task)
                    <tr>
                        <td class="td1">{{$task->id}}</td>
                        <td class="td2">{{$task->task}}</td>
                        <td class="td3">
                            @if($task->iscompleted)
                            <button class="but1">Completed</button>
                            @else
                            <button class="but2">Not Completed</button>
                            @endif
                        </td>
                        <td class="td4"> 
                            @if($task->iscompleted)
                            <a href="/markasNotcompleted/{{$task->id}}" ><button class="b1">Mark as Not Completed</button></a>
                            @else
                            <a href="/markascompleted/{{$task->id}}"><button class="b2">Mark as Completed</button></a>
                            @endif
                            <a href="/deletetask/{{$task->id}}"><button class="b3">Delete</button></a>
                            <a href="/updatetask/{{$task->id}}"><button class="b4">Update</button></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

</html>