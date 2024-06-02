<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return response()->json(
            [
                "message" => "semua data user berhasil didapatkan",
                "data" => $data
            ],
            200
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [
            'name' => 'required',
            'email'=>'required',
            'password'=>'required',
            'avatar'=>'required'
        ];
        $message = [
            'name.required' => 'nama wajib diisi',
            'email.required' => 'email wajib diisi',
            'password.required'=>'password wajib diisi',
            'avatar.required'=>'avatar harus diisi',

        ];
        $validator = Validator::make($request->all(), $rule, $message);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return response()->json(["messages" => $messages], 500);
        }

        $user = User::create([
            "name" => $request->name,
            'email'=>$request->email,
            'password' =>$request->password,
            'avatar' =>$request->avatar
    ]);

        return response()->json(
            [
                "message" => "user berhasil dibuat",
                "data" => $user
            ],
            201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::where('id', '=', $id)->get();
        return response()->json(
            [
                "message" => "data user berhasil didapatkan",
                "data" => $data
            ],
            200
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rule = [
            'name' => 'required',
            'email'=>'required',
            'password'=>'required',
            'avatar'=>'required'
        ];
        $message = [
            'name.required' => 'nama wajib diisi',
            'email.required' => 'email wajib diisi',
            'password.required'=>'password wajib diisi',
            'avatar.required'=>'avatar harus diisi',

        ];

        $validator = Validator::make($request->all(), $rule, $message);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return response()->json(["messages" => $messages], 500);
        }
        $user = User::find($id)->update([
            "name" => $request->name,
            'email'=>$request->email,
            'password' =>$request->password,
            'avatar' =>$request->avatar
        ]);
        return response()->json(
            [
                "message" => "user berhasil diupdate",
                'data'=>$user
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::destroy($id);
        return response()->json(
            [
                "message" => "user berhasil dihapus"
            ],
            200
        );
    }
}
