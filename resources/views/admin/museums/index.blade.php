@extends('layouts.app')

@section('title')
    | Admin
@endsection

@section('content')
<div class="container">
    <h1>Elenco dei Musei</h1>

    @if (session('deleted'))
        <div class="alert alert-success" role="alert">
            {{session('deleted')}}
        </div>
    @endif

    <a class="btn btn-success" href="{{route('museums.create')}}">NUOVO MUSEO</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">
                <a href="{{route('museums.orderby',['id',$direction])}}">ID</a>
            </th>
            <th scope="col">
                <a href="{{route('museums.orderby',['name',$direction])}}">Nome</a>
            </th>
            <th scope="col">
                <a href="{{route('museums.orderby',['nation',$direction])}}">Nazione</a>
            </th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($museums as $museum)
                <tr>
                    <td>{{$museum->id}}</td>
                    <td>{{$museum->name}}</td>
                    <td>$ {{number_format($museum->price,2,',','.')}}</td>
                    <td class="d-flex">
                        <a class="btn btn-primary" href="{{route('museums.show', $beer->slug)}}">SHOW</a>
                        <a class="btn btn-info" href="{{route('museums.edit', $beer)}}">EDIT</a>
                        @include('partials.form-delete')
                    </td>
                </tr>
            @endforeach



        </tbody>
      </table>

      <div>
        {{$museums->links()}}
      </div>


</div>
@endsection
