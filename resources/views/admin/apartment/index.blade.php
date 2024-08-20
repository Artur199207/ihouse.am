@extends('layouts.master')
@section('title', 'Կարգավիճակ')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Category <a href="{{ url('admin/add-categ') }}" class="btn btn-primary btn-sm float-end">Add
                    category</a></h4>

        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
        </div>
    </div>
    <table id="myDataTable" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Անուն</th>
                <th>նկար</th>
                <th>գործակալ</th>
                <th>Կոդ</th>
                <th>փոփոխել</th>
                <th>ջնջել</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categs as $item)
                <tr>
                    <td>{{ $item->name100 }}</td>
                    <td>{{ $item->name101 }}</td>
                    <td>
                        <img src="{{ asset('uploads/categs/' . $item->image001) }}" width="50px" height="50px" alt="ihouse">
                    </td>
                    <td>{{ $item->name119}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <a href="{{ url('admin/edit-categ/' . $item->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('admin/delete-categ/' . $item->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection