@extends(base.blade.php)

@section('content')
    <div class="container is-dark with-title">

        <p class="title">{{$todo->title}}</p>

        <div style="color: white">
            <p>{{$todo->description}}</p>

            <h4>Deadline :</h4>
            <p>{{$todo->deadline}}</p>

            <h4>Priority :</h4>
            <p>{{$todo->priority}}</p>
        </div>

        <a href="{{route('todos.edit')}}"></a>

    </div>