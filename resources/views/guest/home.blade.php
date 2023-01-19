@extends('layouts.guest')

@section('content')

<a href="{{route('admin.artist.index')}}">Index Artist</a>
<a href="#">Show Artist non abilitato</a>
<a href="#">Edit Artist Non abilitato</a>
<a href="{{route('admin.artist.create')}}">Create Artist</a>

@endsection
