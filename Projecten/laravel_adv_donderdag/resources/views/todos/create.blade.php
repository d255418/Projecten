@extends('layouts.base')

@section('content')
    <div class="create-todo">

        <form class="form with-title container" action="{{route('todos.store')}}" method="post">
            @csrf

            @include('partials.notifications')

            <h2 class="title">Create todo item</h2>
            <div class="field">
                <label for="title">Title</label>
                <input type="text" name="title" class="input" >
            </div>
            <div class="field">
                <label for="description">Description</label>
                <textarea name="description" id="" class="input"></textarea>
            </div>
            <div class="field">
                <label for="deadline">Deadline</label>
                <input type="datetime-local" name="deadline" class="input">
            </div>
            <div class="field">
                <label for="priority">Priority</label>
                <select name="priority" class="input">
                    <option value=""></option>
                    <option value="1">No Priority</option>
                    <option value="2">Low Priority</option>
                    <option value="3">Meh Priority</option>
                    <option value="4">High Priority</option>
                    <option value="5">Very high Priority</option>
                </select>
            </div>
            <div><input type="submit" value="Create" class="input btn is-primary"></div>

        </form>
    </div>
@endsection