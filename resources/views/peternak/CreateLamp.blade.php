@extends('layout.layout_peternak')
@section('title', 'lamp')
@section('container')

<div class="card w-100">
    <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Create Configuration Lamp</h5>
        <form method="POST" action="/lamp">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Device</label>
                {{-- {{$dataDevice}} --}}
                <select name="device_id" class="form-select" aria-label="Default select example">
                    @foreach ($dataDevice as $data )
                    <option value="{{$data->id}}"> Breeder-{{$data->id}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <select name="status" class="form-select" aria-label="Default select example">
                    <option value="1">On</option>
                    <option value="0">Off</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Time On</label>
                <input name="time_on" class="form-control" type="time">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Time Off</label>
                <input name="time_off" class="form-control" type="time">
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
        </form>
    </div>
</div>

@endsection
