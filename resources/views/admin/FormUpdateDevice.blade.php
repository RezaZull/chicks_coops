@extends('layout.layout_admin')
@section('title', 'Admin')
@section('container')

    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Form Update Device</h5>
            <form method="POST" action="/admin/device/{{$device_data->id}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User ID</label>
                    <select name="user_id" class="form-select" aria-label="Default select example">
                        @foreach ($dataUser as $data)
                            <option {{$data->id==$device_data->user_id?'selected':null}} value="{{ $data->id }}"> {{ $data->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>
    </div>
@endsection
