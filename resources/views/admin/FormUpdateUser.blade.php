@extends('layout.layout_admin')
@section('title', 'Admin')
@section('container')

    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Form Update User</h5>
            <form action="/admin/user/{{$user_data->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{$user_data->name}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                    @if ($errors->has('name'))
                        {{ $errors->first('name') }}
                    @endif
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" value="{{$user_data->email}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    @if ($errors->has('email'))
                        {{ $errors->first('email') }}
                    @endif
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    @if ($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Link Avatar</label>
                    <input type="text" name="avatar" value="{{$user_data->avatar}}" class="form-control" id="exampleInputPassword1">
                    @if ($errors->has('avatar'))
                        {{ $errors->first('avatar') }}
                        <br>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Role</label>
                    <select name="is_admin" class="form-select" aria-label="Default select example">
                        <option {{$user_data->is_admin=='1'?'selected':null}} value="1">Admin</option>
                        <option {{$user_data->is_admin=='0'?'selected':null}} value="0">Breeder</option>
                    </select>
                </div>

                {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
                <button type="submit" class="btn btn-warning">Submit</button>
            </form>

        </div>
    </div>
@endsection
