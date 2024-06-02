<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActivityLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=ActivityLog::all();
        return response()->json(
            [
                "message" => "semua data Aktifitas Log berhasil didapatkan",
                "data" => $data
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [
            'description'=> 'required'

        ];
        $message = [
            'description.required' => 'deskripsi harus diisi',

        ];
        $validator = Validator::make($request->all(), $rule, $message);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return response()->json(["messages" => $messages], 500);
        }

        $user = ActivityLog::create([
            "log_name"=> $request->log_name,
            "description"=> $request->description,
            "subject_id"=> $request->subject_id,
            "subject_type"=> $request->subject_type,
            "causer_id"=> $request->causer_id,
            "causer_type"=> $request->causer_type,
            "properties"=> $request->properties,



    ]);

        return response()->json(
            [
                "message" => "Aktifitas Log berhasil dibuat",
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
        $data = ActivityLog::where('id', '=', $id)->get();
        return response()->json(
            [
                "message" => "data Aktifitas Log berhasil didapatkan",
                "data" => $data
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rule = [
            'description'=> 'required'

        ];
        $message = [
            'description.required' => 'deskripsi harus diisi',

        ];

        $validator = Validator::make($request->all(), $rule, $message);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return response()->json(["messages" => $messages], 500);
        }
        $user = ActivityLog::find($id)->update([
            "log_name"=> $request->log_name,
            "description"=> $request->description,
            "subject_id"=> $request->subject_id,
            "subject_type"=> $request->subject_type,
            "causer_id"=> $request->causer_id,
            "causer_type"=> $request->causer_type,
            "properties"=> $request->properties,



        ]);
        return response()->json(
            [
                "message" => "Data Aktifitas Log berhasil diupdate",
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
        $data = ActivityLog::destroy($id);
        return response()->json(
            [
                "message" => "Data Aktifitas Log berhasil dihapus"
            ],
            200
        );
    }
}
