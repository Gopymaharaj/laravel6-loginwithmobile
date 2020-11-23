@extends('layouts.app')

@section('content')
    <div class="container">
    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('message')}}</strong> <br>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
    
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
                <strong>{{$error}}</strong> <br>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @endforeach
            </div>
        
    </div>

@endif
                    {!! Form::open(['route'=> 'store', 'method' => 'post','files' => true]) !!}
                    
                    <div class="form-group">
                        {{Form::label('name', 'Full Name')}}
                        {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Your Name'])}}
                        
                    </div>
                    <div class="form-group">
                        {{Form::label('email', 'E-Mail Address')}}
                        {{Form::email('email', '',['class'=>'form-control','placeholder'=>'Email'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('number', 'Mobile Number')}}
                        {{Form::number('number', '',['class'=>'form-control','placeholder'=>'Mobile Number'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('password', 'Password')}}
                        {{Form::password('password',['class'=>'form-control','placeholder'=>'password'])}}
                    </div>
                    <div class="form-group">
                    {{Form::label('Profile','Profile Photo')}}
                        {{Form::file('file',['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('DOB', 'Date Of Birth')}}
                        <br>
                        {{Form::date('date','',['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('gender', 'Gender')}}
                        <br>
                        {{Form::radio('gender','M')}}Male
                        {{Form::radio('gender','F')}}FeMale
                    </div>
                    <div class="form-group">
                        {{Form::label('Country', 'Country')}}
                        <br>
                        {{Form::select('country',[''=>'Select Country','1'=>'india','2'=>'pakistan','3'=>'Russia'],null,['class'=>'form-control'])}}
                    </div>
                    
                    <div class="form-group">
                        {{Form::label('Address', 'Address')}}
                        {{Form::textarea('address','',['class'=>'form-control','placeholder'=>'Your address'])}}
                    </div>
                    <div class="form-group">
                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                    </div>
                {!! Form::close() !!}
            </div>
 @endsection