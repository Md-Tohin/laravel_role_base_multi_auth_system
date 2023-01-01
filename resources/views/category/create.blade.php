@extends('inc.layout')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>Add Category</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="name" name="name" value="{{ old('name') }}" class="form-control" id="name"
                    placeholder="Enter Category Name">
                @error('name')
                <div class="form-text text-danger"> {{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="discount" class="form-label">Category Discount(%)</label>
                <input type="discount" name="discount" value="{{ old('discount') }}" class="form-control" id="discount"
                    placeholder="Enter Category Discount">
                @error('discount')
                <div class="form-text text-danger"> {{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save Category</button>
        </form>
    </div>
</div>
@endsection