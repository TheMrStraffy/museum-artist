@extends('layouts.app')

@section('content')
<div class="container p-5">

    <h1>index</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($artists as $artist)

            <tr>
              <th scope="row">{{$artist->id}}</th>
              <td>{{$artist->name}}</td>
            </tr>
            @endforeach

        </tbody>
      </table>
</div>
@endsection
