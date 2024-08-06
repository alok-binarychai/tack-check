<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\KeyDate;
use Yajra\DataTables\Facades\DataTables;

class KeyDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.ourclass.key-date.index');
    }

    public function create(Request $request){
        return view('backend.ourclass.key-date.create');
    }

    public function store(Request $request){
        try {

            KeyDate::create([
                'day' => $request->day,
                'timing' => $request->timing,
                'school_name' => $request->school_name,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Key Date Added Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy($id)
    {
        try {
            $keyDate = KeyDate::where('id', $id)->firstOrFail();
            $keyDate->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'message' => 'Key Date deleted successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit($id){
        $keyDate = KeyDate::where('id', $id)->firstOrFail();
        return view('backend.ourclass.key-date.edit', compact('keyDate'));
    }

    public function update(Request $request, $id){
        try {
            KeyDate::where('id', $id)->update([
                'day' => $request->day,
                'timing' => $request->timing,
                'school_name' => $request->school_name,
            ]);
           
            return response()->json([
                'status' => 200,
                'message' => 'Key Date Updated Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    public function keyDateDatatable(Request $request){
        if ($request->ajax()) {
            $keyDate = KeyDate::all();
            return DataTables::of($keyDate)->addColumn('school_name', function ($row) {
                return addEllipsis($row->school_name, $max = 50);
            })
           ->addColumn('action', function ($row) {
                $action = '  <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="javascript:void(0)" data-table="key-date-table" data-act="ajax-modal" data-complete-location="true" data-method="get" data-action-url=" ' . route('admin.key-date.edit', $row->id) . ' "><em class="icon ni ni-edit"></em><span >Edit Key Date</span></a></li>
                                            <li><a href="javascript:void(0)" data-table="key-date-table" class="delete"  data-url=" ' . route('admin.key-date.destroy', $row->id) . ' "><em class="icon ni ni-trash"></em><span>Delete Key Date</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </td>';
                return $action;

            })->rawColumns(['action'])->make(true);
        }
    }
}
