@extends('layouts.app')

@section('content')
<div class="container">

    <h1>FORM EDIT Artist</h1>

    <form class="mb-5" action="" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="email" class="form-control" id="name" aria-describedby="emailHelp">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    <div class="action-btns d-flex ">

        <a href="#" class="btn btn-primary ">Go back to Artist</a>
    </div>
</div>
@endsection
