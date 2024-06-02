@extends('layout.layout_admin')
@section('title', 'Admin')
@section('container')

    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Form Create User</h5>
            <form action="{{ url('admin/user') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                    @if ($errors->has('name'))
                        {{ $errors->first('name') }}
                    @endif
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
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
                    <input type="text" name="avatar" class="form-control" id="exampleInputPassword1">
                    @if ($errors->has('avatar'))
                        {{ $errors->first('avatar') }}
                        <br>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Role</label>
                    <select name="is_admin" class="form-select" aria-label="Default select example">
                        <option value="1">Admin</option>
                        <option value="0">Breeder</option>
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
