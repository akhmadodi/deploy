<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BankAccount;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Validator;

class BankAccountsController extends Controller
{
    public $successStatus = 200;

    public function index(){
        return response()->json([
            'data' => BankAccount::all()
        ], $this->successStatus);
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
            'bank' => 'required',
            'account' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => array(
                'message' => $validator->errors()
            )], $this->successStatus);
        }
        $input = $request->all(); 
        $q = BankAccount::where('account', $input['account']);
        if ($q->count() > 0) {
            return response()->json(['error' => array(
                'message' => 'Nomor Rekening sudah terdaftar'
            )], $this->successStatus);
        }
        $input['id'] = BankAccount::latest('id')->first()->id + 1;
        $query = BankAccount::create($input); 
        return response()->json([
            'data' => $query
        ], $this->successStatus);
    }

    public function show($id){
        try
        {
            $query = BankAccount::findOrFail($id);
            return response()->json([
                'data' => $query
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'BankAccount with id='.$id.' not found'
            )], 404);
        }
    }

    public function update(Request $request, $id){
        try
        {
            $input = $request->all();
            $query = BankAccount::findOrFail($id);

            $q = BankAccount::where([
                ['account', '=', $input['account']],
                ['id', '!=', $id]
            ]);
            if ($q->count() > 0) {
                return response()->json(['error' => array(
                    'message' => 'Nomor Rekening sudah terdaftar'
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
                'message' => 'BankAccount with id='.$id.' not found'
            )], 404);
        }
    }

    public function delete($id){
        try
        {
            $query = BankAccount::findOrFail($id);
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
                'message' => 'BankAccount with id='.$id.' not found'
            )], 404);
        }
    }
}
