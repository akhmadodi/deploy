<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\CustomerPic;
use App\Pic;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Validator;

class CustomersController extends Controller
{
    public $successStatus = 200;

    public function index(Request $request){

        $query = Customer::with([
            'category',
            'pics',
            'pics.pic_info',
            'pics.pic_info.bank_accounts',
            'pics.pic_info.bank_accounts.bank_account_info',
            'country',
            'province',
            'city',
            'area',
            'user',
            'user.role',
        ]);
        if ($request->query('find')) {
            $query = $query->where('name', 'ilike', '%' . $request->query('find') . '%');
        }
        if ($request->query('orderby') && $request->query('sortby')) {
            $query = $query->orderBy($request->query('orderby'), $request->query('sortby'));
        } else {
            $query = $query->orderBy('created_at', 'desc');
        }
        return response()->json([
            'data' => $query->paginate($request->query('limit'))
        ], $this->successStatus);
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(), [ 
            'customer_category_id' => 'required',
            'name' => 'required',
            'is_vip' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'country_id' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'address' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => array(
                'message' => $validator->errors()
            )], 401);
        }
        $input = $request->all(); 
        $input['uid'] = uniqid();
        $input['user_id'] = Auth::user()->id;
        $q = Customer::where('phone', $input['phone'])->orWhere('email', $input['email']);
        if ($q->count() > 0) {
            return response()->json(['error' => array(
                'message' => 'Nomor hp atau email sudah terdaftar'
            )], 401);
        }
        $query = Customer::create($input); 

        if ($request->input('pics')) {
            foreach ($input['pics'] as $val) {
                if (CustomerPic::where([
                    ['customer_id', '=', $query->id],
                    ['pic_id', '=', $val['id']]
                ])->count() == 0) {
                    $pics = new CustomerPic;
                    $pics->customer_id = $query->id;
                    $pics->pic_id = $val['id'];
                    $pics->save();
                }
            }
        }

        return response()->json([
            'data' => $query
        ], $this->successStatus);
    }

    public function show($id){
        try
        {
            $query = Customer::where('id', $id)->with([
                'category',
                'pics',
                'pics.pic_info',
                'pics.pic_info.bank_accounts',
                'pics.pic_info.bank_accounts.bank_account_info',
                'country',
                'province',
                'city',
                'area',
                'user',
                'user.role',
            ])->firstOrFail();
            return response()->json([
                'data' => $query
            ], $this->successStatus);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => array(
                'message' => 'Customer with id='.$id.' not found'
            )], 404);
        }
    }

    public function update(Request $request, $id){
        try
        {
            $input = $request->all();
            $query = Customer::findOrFail($id);

            if ($request->input('phone')){
                $q = Customer::where([
                    ['phone', '=', $input['phone']],
                    ['id', '!=', $id]
                ]);
                if ($q->count() > 0) {
                    return response()->json(['error' => array(
                        'message' => 'Nomor hp sudah terdaftar'
                    )], 401);
                }
            }
            if ($request->input('email')){
                $q = Customer::where([
                    ['email', '=', $input['email']],
                    ['id', '!=', $id]
                ]);
                if ($q->count() > 0) {
                    return response()->json(['error' => array(
                        'message' => 'Email sudah terdaftar'
                    )], 401);
                }
            }

            if (
                $request->input('customer_category_id') && 
                $request->input('name') && 
                $request->input('is_vip') && 
                $request->input('phone') && 
                $request->input('email') &&
                $request->input('country_id') &&
                $request->input('province_id') &&
                $request->input('city_id') &&
                $request->input('address')
            ){
                $query->fill($input)->save();
            }

            if ($request->input('pics')) {
                foreach ($input['pics'] as $val) {
                    if (CustomerPic::where([
                        ['customer_id', '=', $query->id],
                        ['pic_id', '=', $val['id']]
                    ])->count() == 0) {
                        $pics = new CustomerPic;
                        $pics->customer_id = $query->id;
                        $pics->pic_id = $val['id'];
                        $pics->save();
                    }
                }
            }

            if ($request->input('remove_pics')) {
                foreach ($input['remove_pics'] as $val) {
                    $q_delete = CustomerPic::where([
                        ['customer_id', '=', $query->id],
                        ['pic_id', '=', $val['id']]
                    ])->firstOrFail();
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
                'message' => 'Customer with id='.$id.' not found'
            )], 404);
        }
    }

    public function delete($id){
        try
        {
            $query = Customer::findOrFail($id);
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
                'message' => 'Customer with id='.$id.' not found'
            )], 404);
        }
    }
}
