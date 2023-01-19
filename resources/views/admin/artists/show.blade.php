@extends('layouts.app')

@section('content')
<div class="container p-5">
    <h1>SHOW</h1>
        <div class="card mx-auto text-center" style="width: 18rem;">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
              <h5 class="card-title"></h5>

              <div class="action-btns d-flex ">

                  <a href="#" class="btn btn-primary ">Go back to Artist</a>
                  <a href="#" class="btn btn-info mx-3">Edit This Artist</a>
                  <a href="#" class="btn btn-danger ">Delete This Artist</a>
              </div>
            </div>
          </div>
    </div>
@endsection
