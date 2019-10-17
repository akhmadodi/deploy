<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Area;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Validator;

class AreasController extends Controller
{
    public $successStatus = 200;

    public function index($id){
        try
        {
            $query = City::findOrFail($id);
            return response()->json([
                'data' => Area::where('city_id', $id)->with(['city'])->get()
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'City with id='.$id.' not found'
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
        $input['city_id'] = $id;
        $q = Area::where('name', $input['name']);
        if ($q->count() > 0) {
            return response()->json(['error' => array(
                'message' => 'Area sudah terdaftar'
            )], 401);
        }
        $query = Area::create($input); 
        return response()->json([
            'data' => $query
        ], $this->successStatus);
    }

    public function show($city_id, $id){
        try
        {
            $query = Area::where([
                ['id', '=', $id],
                ['city_id', '=', $city_id]
            ])->with(['city'])->firstOrFail();
            return response()->json([
                'data' => $query
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'Area with id='.$id.', city_id='.$city_id.' not found'
            )], 404);
        }
    }

    public function update(Request $request, $city_id, $id){
        try
        {
            $query = Area::where([
                ['id', '=', $id],
                ['city_id', '=', $city_id]
            ])->with(['city'])->firstOrFail();
            $input = $request->all();

            $q = Area::where([
                ['name', '=', $input['name']],
                ['id', '!=', $id]
            ]);
            if ($q->count() > 0) {
                return response()->json(['error' => array(
                    'message' => 'Area sudah terdaftar'
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
                'message' => 'Area with id='.$id.', city_id='.$city_id.' not found'
            )], 404);
        }
    }

    public function delete($city_id, $id){
        try
        {
            $query = Area::where([
                ['id', '=', $id],
                ['city_id', '=', $city_id]
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
                'message' => 'Area with id='.$id.', city_id='.$city_id.' not found'
            )], 404);
        }
    }
}
