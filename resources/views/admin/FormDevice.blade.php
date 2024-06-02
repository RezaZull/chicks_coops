@extends('layout.layout_admin')
@section('title', 'Admin')
@section('container')

    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Form Create Device</h5>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User ID</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Users</option>
                        <option value="1">Rafifah</option>
                        <option value="2">Rafi</option>
                        <option value="3">Fifah</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>
    </div>
@endsection
