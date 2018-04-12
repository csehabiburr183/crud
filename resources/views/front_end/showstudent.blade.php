@extends('layouts.master');

@section('title', 'Show Singe Student View')

@section('content_title')
    <mark> Show Full Bio </mark>
    <hr/>
@endsection

@section('content')
    <table class="table table-striped table-active table-bordered bg-info text-warning text-center">

        <tr>
            <td><h1> Student Name</h1></td>
            <td><h2> {{ $data->name }}</h2></td>
        </tr>

        <tr>
            <td><h2> Student Roll</h2></td>
            <td><h3> {{ $data->roll }}</h3></td>
        </tr>

        <tr>
            <td><h2> Department</h2></td>
            <td><h3> {{ $data->dept }} </h3></td>
        </tr>

        <tr>
            <td><h2> Phone Number </h2></td>
            <td><h3> {{ $data->phone }} </h3></td>
        </tr>

    </table>
@endsection