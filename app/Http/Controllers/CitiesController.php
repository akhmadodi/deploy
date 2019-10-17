<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\City;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Validator;

class CitiesController extends Controller
{
    public $successStatus = 200;

    public function index($id){
        try
        {
            $query = Province::findOrFail($id);
            return response()->json([
                'data' => City::where('province_id', $id)->with(['areas', 'province'])->get()
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'Province with id='.$id.' not found'
            )], 404);
        }
    }

    public function create(Request $request, $id){
        $validator = Validator::make($request->all(), [ 
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => array(
                'message' => $validator->errors()
            )], 401);
        }
        $input = $request->all(); 
        $input['province_id'] = $id;
        $q = City::where('name', $input['name']);
        if ($q->count() > 0) {
            return response()->json(['error' => array(
                'message' => 'City sudah terdaftar'
            )], 401);
        }
        $query = City::create($input); 
        return response()->json([
            'data' => $query
        ], $this->successStatus);
    }

    public function show($province_id, $id){
        try
        {
            $query = City::where([
                ['id', '=', $id],
                ['province_id', '=', $province_id]
            ])->with(['areas', 'province'])->firstOrFail();
            return response()->json([
                'data' => $query
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'City with id='.$id.', province_id='.$province_id.' not found'
            )], 404);
        }
    }

    public function update(Request $request, $province_id, $id){
        try
        {
            $query = City::where([
                ['id', '=', $id],
                ['province_id', '=', $province_id]
            ])->with(['areas', 'province'])->firstOrFail();
            $input = $request->all();

            $q = City::where([
                ['name', '=', $input['name']],
                ['id', '!=', $id]
            ]);
            if ($q->count() > 0) {
                return response()->json(['error' => array(
                    'message' => 'City sudah terdaftar'
                )], 401);
            }

            $query->fill($input)->save();
            return response()->json([
                'data' => $query
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'City with id='.$id.', province_id='.$province_id.' not found'
            )], 404);
        }
    }

    public function delete($province_id, $id){
        try
        {
            $query = City::where([
                ['id', '=', $id],
                ['province_id', '=', $province_id]
            ])->firstOrFail();
            $query->delete();
            return response()->json([
                'data' => array(
                    'message' => 'Data berhasil dihapus'
                )
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'City with id='.$id.', province_id='.$province_id.' not found'
            )], 404);
        }
    }
}
