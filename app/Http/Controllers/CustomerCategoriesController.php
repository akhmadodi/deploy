<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerCategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Validator;

class CustomerCategoriesController extends Controller
{
    public $successStatus = 200;

    public function index(Request $request){
        if ($request->query('orderby') && $request->query('sortby')) {
            $query = CustomerCategory::orderBy($request->query('orderby'), $request->query('sortby'))->get();
        } else {
            $query = CustomerCategory::all();
        }

        return response()->json([
            'data' => $query
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
        $q = CustomerCategory::where('name', $input['name']);
        if ($q->count() > 0) {
            return response()->json(['error' => array(
                'message' => 'CustomerCategory sudah terdaftar'
            )], 401);
        }
        $query = CustomerCategory::create($input); 
        return response()->json([
            'data' => $query
        ], $this->successStatus);
    }

    public function show($id){
        try
        {
            $query = CustomerCategory::findOrFail($id);
            return response()->json([
                'data' => $query
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'CustomerCategory with id='.$id.' not found'
            )], 404);
        }
    }

    public function update(Request $request, $id){
        try
        {
            $input = $request->all();
            $query = CustomerCategory::findOrFail($id);

            $q = CustomerCategory::where([
                ['name', '=', $input['name']],
                ['id', '!=', $id]
            ]);
            if ($q->count() > 0) {
                return response()->json(['error' => array(
                    'message' => 'CustomerCategory sudah terdaftar'
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
                'message' => 'CustomerCategory with id='.$id.' not found'
            )], 404);
        }
    }

    public function delete($id){
        try
        {
            $query = CustomerCategory::findOrFail($id);
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
                'message' => 'CustomerCategory with id='.$id.' not found'
            )], 404);
        }
    }
}
