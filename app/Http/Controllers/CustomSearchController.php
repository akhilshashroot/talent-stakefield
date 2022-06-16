<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\StakefieldUser;
use DataTables;
class CustomSearchController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            DB::statement(DB::raw('set @rownum=0'));
            $data = StakefieldUser::select(  DB::raw('@rownum  := @rownum  + 1 AS rownum'),'stakefield_users.*')->orderby('stakefield_users.id','desc');
            return Datatables::of($data)
                    ->addIndexColumn()
                    
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('approved')) && !empty($request->get('search'))) {
                            $search = $request->get('search');
                            $instance->where($request->get('approved'),'LIKE', "%$search%");
                        }
                        if (!empty($request->get('search')) && empty($request->get('approved'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('employee_id', 'LIKE', "%$search%")
                                ->orWhere('skill_set', 'LIKE', "%$search%")
                                ->orWhere('experience', 'LIKE', "%$search%")
                                ->orWhere('turnaround_time', 'LIKE', "%$search%")
                                ->orWhere('availability', 'LIKE', "%$search%")
                                ->orWhere('rate', 'LIKE', "%$search%");
                            });
                        }
                    })    
                    ->addColumn('action', function($row){
  
                        $btn = '<a  class="btn btn-primary btn-sm checker" id=add-'.$row['id'].' style="color: #fff;" data-id='.$row['id'].' >Add</a>
                        <a  class="btn btn-primary btn-sm remover" id='.$row['id'].' style="color: #fff;display:none;" data-id='.$row['id'].' >Remove</a>';
                        //   $btn='<input type="checkbox" class="checkbox-change" data-id='.$row['employee_id'].' id="buttonID" onchange="valueChanged()" name="enquiry" value='.$row['employee_id'].'>';
                         return $btn;
                 })
               
                 ->rawColumns(['action'])
                    ->make(true);


        }
        
     
     return view('stakefield.stakefield');
    }
}

