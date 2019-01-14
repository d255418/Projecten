@extends('layouts.base')

@section('content')



    <div class="container with-title">

        @include('partials.notifications')

        <h2 class="title">Todo items</h2>
        <div class="messages">
            @foreach($todos as $todo)
                <div class="message -left">
                    <i class="bcrikko"></i>

                    <a href="{{route('todos.show', $todo->id)}}">
                        <div class="balloon from-left">
                            <p>{{ $todo->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection