@extends('layouts.master')

@section('title', 'Students List')

@section('content_title')
    All Student List
@endsection

@section('content')

    <table class="table table-striped table-bordered">

        <tr>
            <th>Serial</th>
            <th>Student Name</th>
            <th>Student Roll</th>
            <th>Student Dept</th>
            <th>Student Age</th>
            <th>Student Phone</th>
            <th colspan="2">Action</th>
        </tr>

        <?php $sl=1; ?>
        @foreach($data as $all_students)

            <tr>
                <td> {{ $sl++ }} </td>
                <td> <a href="{{ route('main.show', $all_students->id) }}"> {{ $all_students->name }} </a></td>
                <td> {{ $all_students->roll }} </td>
                <td> {{ $all_students->dept }} </td>
                <td> {{ $all_students->age }}</td>
                <td> {{ $all_students->phone }} </td>
                <td> <a href="{{ route('main.edit', $all_students->id) }}" class="btn btn-sm btn-info">Edit</a>
                <td>
                    {!! Form::open(array('route' => ['main.destroy', $all_students->id],'method'=>'DELETE')) !!}
                    <button type="submit" class="btn btn-danger btn-sm" > Delete </button>
                    {!! form::close() !!}
                </td>
                </td>
            </tr>

        @endforeach

    </table>

@endsection