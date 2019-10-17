<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Validator;

class CountriesController extends Controller
{
    public $successStatus = 200;

    public function index(){
        return response()->json([
            'data' => Country::all()
        ], $this->successStatus);
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(), [ 
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => array(
                'message' => $validator->errors()
            )], 401);
        }
        $input = $request->all(); 
        $q = Country::where('name', $input['name']);
        if ($q->count() > 0) {
            return response()->json(['error' => array(
                'message' => 'Country sudah terdaftar'
            )], 401);
        }
        $query = Country::create($input); 
        return response()->json([
            'data' => $query
        ], $this->successStatus);
    }

    public function show($id){
        try
        {
            $query = Country::findOrFail($id);
            return response()->json([
                'data' => $query
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'Country with id='.$id.' not found'
            )], 404);
        }
    }

    public function update(Request $request, $id){
        try
        {
            $input = $request->all();
            $query = Country::findOrFail($id);

            $q = Country::where([
                ['name', '=', $input['name']],
                ['id', '!=', $id]
            ]);
            if ($q->count() > 0) {
                return response()->json(['error' => array(
                    'message' => 'Country sudah terdaftar'
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
                'message' => 'Country with id='.$id.' not found'
            )], 404);
        }
    }

    public function delete($id){
        try
        {
            $query = Country::findOrFail($id);
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
                'message' => 'Country with id='.$id.' not found'
            )], 404);
        }
    }
}
