@extends('inc.layout')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6>All Category</h6>
        <a href="{{ route('category.create') }}" class="btn btn-success">Add New</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $category)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->discount }}</td>
                        <td>
                            @if ($category->status == 1)
                                <span class="badge badge-pill bg-success">active</span>
                            @else
                            <span class="badge badge-pill bg-danger">inactive</span>
                            @endif
                        </td>
                        <td>
                            @if ($category->status == 1)
                            <a href="" class="btn btn-sm btn-warning" title="inactive">Inactive</a>
                            @else
                            <a href="" class="btn btn-sm btn-primary" title="active">Active</a>
                            @endif                                
                            
                            <a href="" class="btn btn-sm btn-info" title="Details">View</a>
                            <a href="" class="btn btn-sm btn-success" title="Edit">Edit</a>
                            <a href="{{ url('category/delete/'.$category->id) }}" class="btn btn-sm btn-danger" id="confirmDelete" title="Delete">Delete</a>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection
