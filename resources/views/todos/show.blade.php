@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/">Go Back</a>
    <h1><a >{{$todo->text}}</a> <span class="label label-danger">{{$todo->due}}</span></h1>
    <hr>
    <p>{{$todo->body}}</p>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('delete', ['class' => 'btn btn-danger']) }}

  {!! Form::close() !!}
@endsection