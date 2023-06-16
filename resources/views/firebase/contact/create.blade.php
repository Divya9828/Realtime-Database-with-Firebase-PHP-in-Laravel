@extends('firebase.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h3>Register Form
                <a href="{{ url('contacts') }}" class="btn btn-danger float-end">Back</a><hr></h3>
            </div>
            <div class="col-lg-6 offset-lg-3">
                <div class="card-body">
                    <form action="{{ url('add-contact') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection