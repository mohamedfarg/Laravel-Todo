<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header>Todo List</header>
    <form action="{{ route('add') }}" method="POST">
        @csrf
        <input type="text" name="title" class="input-todo">
        <button class="todo-button" type="submit">
            <i class="fas fa-plus-square"></i>
        </button>
    </form>
    <div class="todo-container">
        <ul class="todo-list">
    
            @foreach ($todos as $todo)
                
            <div class="todo">
                @if ($todo->checked == false)

                <li>{{$todo->title}}</li>
                <a href="{{ route('edit',$todo) }}"><i class="fas fa-check complete-btn"></i></a>
                
                <a href="{{ route('delete',$todo) }}"><i class="fas fa-trash trash-btn"></i></a>
         
                @elseif($todo->checked == true)
                    
                <li style="text-decoration: line-through;">{{$todo->title}}</li>
                <a href="{{ route('delete',$todo) }}"><i class="fas fa-trash trash-btn"></i></a>
                
                @endif
          
            </div>
            @endforeach
            
        </ul>
    </div>
    <script src="script.js"></script>

</body>

</html>