<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Yajra\DataTables\Facades\DataTables;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.enrollment.index');
    }

    public function create(Request $request){
        return view('backend.enrollment.create');
    }

    public function store(Request $request){
        try {

            Enrollment::create([
                'date' => $request->date,
                'class' => $request->class,
                'description' => $request->description,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Enrollment Added Successfully',
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
            $enrollment = Enrollment::where('id', $id)->firstOrFail();
            $enrollment->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'message' => 'Enrollment deleted successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit($id){
        $enrollment = Enrollment::where('id', $id)->firstOrFail();
        return view('backend.enrollment.edit', compact('enrollment'));
    }

    public function update(Request $request, $id){
        try {
            Enrollment::where('id', $id)->update([
                'date' => $request->date,
                'class' => $request->class,
                'description' => $request->description,
            ]);
           
            return response()->json([
                'status' => 200,
                'message' => 'Enrollment Updated Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    public function enrollmentDatatable(Request $request){
        if ($request->ajax()) {
            $enrollment = Enrollment::all();
            return DataTables::of($enrollment)->addColumn('description', function ($row) {
                return addEllipsis($row->description, $max = 50);
            })
           ->addColumn('action', function ($row) {
                $action = '  <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="javascript:void(0)" data-table="enrollment-table" data-act="ajax-modal" data-complete-location="true" data-method="get" data-action-url=" ' . route('admin.enrollment.edit', $row->id) . ' "><em class="icon ni ni-edit"></em><span >Edit Enrollment</span></a></li>
                                            <li><a href="javascript:void(0)" data-table="enrollment-table" class="delete"  data-url=" ' . route('admin.enrollment.destroy', $row->id) . ' "><em class="icon ni ni-trash"></em><span>Delete Enrollment</span></a></li>
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
