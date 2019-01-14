@if($errors->any())
    <p class="errorLaura">Error :</p>
    <ul>
        @foreach( $errors->all() as $error )
            <li class="errorLaura">{{$error}}</li>
        @endforeach
    </ul>
@endif


@if(session('message') )
    <div class="messageLaura"> {{session('message') }} </div>
@endif