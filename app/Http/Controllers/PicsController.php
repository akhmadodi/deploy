<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pic;
use App\PicBankAccount;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Validator;

class PicsController extends Controller
{
    public $successStatus = 200;

    public function index(){
        return response()->json([
            'data' => Pic::with(['bank_accounts', 'bank_accounts.bank_account_info'])->get()
        ], $this->successStatus);
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => array(
                'message' => $validator->errors()
            )], 401);
        }
        $input = $request->all(); 
        $input['uid'] = uniqid();
        $input['id'] = Pic::latest('id')->first()->id + 1;
        $q = Pic::where('email', $input['email'])->orWhere('email', $input['email']);
        if ($q->count() > 0) {
            return response()->json(['error' => array(
                'message' => 'Nomor hp atau email sudah terdaftar'
            )], 401);
        }
        $query = Pic::create($input);

        if ($input['bank_accounts']) {
			foreach ($input['bank_accounts'] as $val) {
                $pic_bank_accounts = new PicBankAccount;
                $pic_bank_accounts->id = PicBankAccount::latest('id')->first()->id + 1;
				$pic_bank_accounts->pic_id = $query->id;
				$pic_bank_accounts->bank_account_id = $val['id'];
				$pic_bank_accounts->save();
			}
		}

        return response()->json([
            'data' => $query
        ], $this->successStatus);
    }

    public function show($id){
        try
        {
            $query = Pic::where('id', $id)->with(['bank_accounts', 'bank_accounts.bank_account_info'])->firstOrFail();
            return response()->json([
                'data' => $query
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'Pic with id='.$id.' not found'
            )], 404);
        }
    }

    public function update(Request $request, $id){
        try
        {
            $input = $request->all();
            $query = Pic::findOrFail($id);
            $q = Pic::where([
                ['email', '=', $input['email']],
                ['id', '!=', $id]
            ])->orWhere([
                ['email', '=', $input['email']],
                ['id', '!=', $id]
            ]);
            if ($q->count() > 0) {
                return response()->json(['error' => array(
                    'message' => 'Email atau nomor hp sudah terdaftar'
                )], 401);
            }
            $query->fill($input)->save();

            if ($input['bank_accounts']) {
                foreach ($input['bank_accounts'] as $val) {
                    $pic_bank_accounts = new PicBankAccount;
                    $pic_bank_accounts->pic_id = $query->id;
                    $pic_bank_accounts->bank_account_id = $val['id'];
                    $pic_bank_accounts->save();
                }
            }

            if ($input['remove_bank_accounts']) {
                foreach ($input['remove_bank_accounts'] as $val) {
                    $q_delete = PicBankAccount::findOrFail($val['id']);
                    $q_delete->delete();
                }
            }
    
            return response()->json([
                'data' => $query
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'Pic with id='.$id.' not found'
            )], 404);
        }
    }

    public function delete($id){
        try
        {
            $query = Pic::findOrFail($id);
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
                'message' => 'Pic with id='.$id.' not found'
            )], 404);
        }
    }
}
