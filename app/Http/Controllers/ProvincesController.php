<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Validator;

class ProvincesController extends Controller
{
    public $successStatus = 200;

    public function index(Request $request){
        $query = Province::with(['cities', 'country']);
        if ($request->query('find')) {
            $query = $query->where('name', 'ilike', '%' . $request->query('find') . '%');
        }
        if ($request->query('orderby') && $request->query('sortby')) {
            $query = $query->orderBy($request->query('orderby'), $request->query('sortby'));
        }
        if ($request->query('limit')) {
            return response()->json([
                'data' => $query->paginate($request->query('limit'))
            ], $this->successStatus);
        } else {
            return response()->json([
                'data' => $query->get()
            ], $this->successStatus);
        }
        // return response()->json([
        //     'data' => $query->paginate($request->query('limit'))
        // ], $this->successStatus);
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
            'country_id' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => array(
                'message' => $validator->errors()
            )], 401);
        }
        $input = $request->all(); 
        $q = Province::where('name', $input['name']);
        if ($q->count() > 0) {
            return response()->json(['error' => array(
                'message' => 'Province sudah terdaftar'
            )], 401);
        }
        $query = Province::create($input); 
        return response()->json([
            'data' => $query
        ], $this->successStatus);
    }

    public function show($id){
        try
        {
            $query = Province::findOrFail($id);
            return response()->json([
                'data' => Province::where('id', $id)->with(['cities', 'country'])->get()
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'Province with id='.$id.' not found'
            )], 404);
        }
    }

    public function update(Request $request, $id){
        try
        {
            $input = $request->all();
            $query = Province::findOrFail($id);

            $q = Province::where([
                ['name', '=', $input['name']],
                ['id', '!=', $id]
            ]);
            if ($q->count() > 0) {
                return response()->json(['error' => array(
                    'message' => 'Province sudah terdaftar'
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
                'message' => 'Province with id='.$id.' not found'
            )], 404);
        }
    }

    public function delete($id){
        try
        {
            $query = Province::findOrFail($id);
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
                'message' => 'Province with id='.$id.' not found'
            )], 404);
        }
    }
}
