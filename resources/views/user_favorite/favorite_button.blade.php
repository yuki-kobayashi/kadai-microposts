@if (Auth::user()->is_favorite($micropost->id))
    {{-- お気に入り削除ボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {{-- お気に入り追加ボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm"]) !!}
    {!! Form::close() !!}
@endif
