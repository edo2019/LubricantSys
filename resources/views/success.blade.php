@extends('layouts.myapp')

@section('content')
<body>
  <div class="container">
    <div class="card mx-auto" style="width: 400px;">
      <div class="card-body">
        <h5 style="text-align: center;">Success!</h5>
        <p>Your form has been submitted successfully.</p>
        <a href="{{ route('') }}" class="btn btn-primary">Proceed</a>
      </div>
    </div>
  </div>
</body>
@endsection
