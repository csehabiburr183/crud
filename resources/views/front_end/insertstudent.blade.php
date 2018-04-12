@extends('layouts.master')

@section('title', ' Add Student Info')

    @section('content_title')
        Add New Student Information <hr/>
    @endsection

@section('content')
    {!! Form::open( array('route'=>'main.store', 'class'=>'form-horiozntal col-md-6')) !!}
      <label for="sname"> Student Name </label>
      <input type="text" id="sname" name="name" placeholder="Input Student Name" class="form-control" required>

      <label for="roll"> Student Roll </label>
      <input type="number" id="roll" name="roll" placeholder="Input Student Roll" class="form-control" required>

      <label for="dept"> Student Department </label>
      <input type="text" id="dept" name="dept" placeholder="Input Student Department" class="form-control" required>

      <label for="age"> Student Age </label>
      <input type="number" id="age" name="age" placeholder="Input Student Age" class="form-control" required>

      <label for="phone"> Student Contact Number </label>
      <input type="number" id="phone" name="phone" placeholder="Input Student Phone Number" class="form-control" required>
        <br />

    {{  Form::submit('Insert Data', array('class'=>'btn btn-info')) }}

    {!! Form::close() !!}
@endsection