@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to Lubricant Registration System!') }}
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Apply
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select an Option</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- Add your options here -->
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#option1Modal">Register Lubricant</a>
                        <a href="#" class="btn btn-secondary">View Result</a>
                        <a href="#" class="btn btn-warning">Re-Apply</a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Option 1 Modal 
                <div class="modal fade" id="option1Modal" tabindex="-1" aria-labelledby="option1ModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="option1ModalLabel">Lubricant Registration Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- Add your form here
                        <form>
                            <div class="mb-3">
                                <label for="block" class="form-label">Block</label>
                                <input type="text" class="form-control" id="block">
                               
                              </div>

                              <div class="mb-3">
                                <label for="box" class="form-label">P.O.BOX</label>
                                <input type="text" class="form-control" id="box">
                               
                              </div>

                              <div class="mb-3">
                                <label for="telephone" class="form-label">Telephone</label>
                                <input type="number" class="form-control" id="telephone">
                               
                              </div>

                              

                          <div class="mb-3">
                            <label for="name" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
             -->
            </div>
        </div>
    </div>
</div>
@endsection
