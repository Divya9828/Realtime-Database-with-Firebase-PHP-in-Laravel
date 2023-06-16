@extends('firebase.app')

@section('content')
<div class="container">
    <div class="row">
        @if(session('status'))
            <h4 class="alert alert-warning">{{session('status')}}</h4>
        @endif
        <div class="card">
            <div class="card-body">
                <h3>Realtime Database with Firebase PHP in Laravel
                <a href="{{ url('add-contact') }}" class="btn btn-primary float-end">Add Contact</a><hr></h3>
            </div>
            <div class="text-center">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Sno</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1;@endphp
                        @forelse($retrieveData as $key=> $item)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['email']}}</td>
                            <td>{{$item['password']}}</td>
                            <td>{{$item['address']}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No Record Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>            
        </div>
    </div>
</div>
@endsection