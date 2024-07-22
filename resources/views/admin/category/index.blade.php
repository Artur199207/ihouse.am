@extends('layouts.master')
@section('title', 'Կարգավիճակ')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Category <a href="{{ url('admin/add-category') }}" class="btn btn-primary btn-sm float-end">Add
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
                <th>Գին</th>
                <th>Կոդ</th>
                <th>փոփոխել</th>
                <th>ջնջել</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <img src="{{ asset('uploads/category/' . $item->image) }}" width="50px" height="50px" alt="ihouse">
                    </td>
                    <td>{{ $item->slug}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <a href="{{ url('admin/edit-category/' . $item->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('admin/delete-category/' . $item->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection