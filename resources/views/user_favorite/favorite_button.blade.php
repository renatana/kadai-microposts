
    @if (Auth::user()->is_favoriting($microposts->id))
        {!! Form::open(['route' => ['user.unfavorite', $microposts->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['users.favorite', $microposts->id],  'method' => 'get']) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
    @endif