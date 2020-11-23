@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Photo</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Address</th>
                <th>Action</th>

            </tr>
            @foreach($data as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->mobile}}</td>
                    <td><img src="{{asset('storage/' . $value->photo)}}" height="70" width="50"></td>
                    <td>{{$value->date}}</td>
                    <td>{{$value->gender}}</td>
                    <td>{{$value->country}}</td>
                    <td>{{$value->address}}</td>
                    <td><a href="delete/{{$value->id}}">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection