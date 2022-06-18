<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\StakefieldUser;
use DataTables;
use Illuminate\Support\Facades\Log;

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
                            Log::debug($request->get('search'));
                            if (strpos($request->get('search'), ',') !== false) {
                                $new_variable= str_replace(' ', '',$request->get('search'));
                               }else{
                                $new_variable= str_replace(' ', ',',$request->get('search'));
                               }
                             $searches= explode(",",$new_variable);
                            // foreach($searches as $searcher){
                             $instance->where(function($w) use($request,$searches){
                                $search = $request->get('search');
                                $w->orWhere('employee_id', 'LIKE', "%$search%");
                                $w->orWhere('skill_data', 'LIKE', "%$searches[0]%");
                                for($i=0;$i<count($searches);$i++){

                                $w->orWhere(function($ws) use($searches,$i){
                                    $ws->orWhere('skill_data', 'LIKE', "%$searches[$i]%");
                               
                              });
                            }
                              $w->orWhere('experience', 'LIKE', "%$search%")
                                ->orWhere('turnaround_time', 'LIKE', "%$search%")
                                ->orWhere('availability', 'LIKE', "%$search%")
                                ->orWhere('rate', 'LIKE', "%$search%");
                            });
                      //  }
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

