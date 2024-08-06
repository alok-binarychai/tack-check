<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\WeekendSchool;
use Yajra\DataTables\Facades\DataTables;

class WeekendSchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.weekend-school.index');
    }

    public function create(Request $request){
        return view('backend.weekend-school.create');
    }

    public function store(Request $request){
        try {
            $term_file = null;
            $classrooms_file = null;

            if ($request->hasFile('term_file')) {
                $term_file = $request->file('term_file');
                $term_file->storeAs('public/files', $term_file->getClientOriginalName());
            }

            if ($request->hasFile('classrooms_file')) {
                $classrooms_file = $request->file('classrooms_file');
                $classrooms_file->storeAs('public/files', $classrooms_file->getClientOriginalName());
            }

            WeekendSchool::create([
                'name' => $request->name,
                'where' => $request->where,
                'when' => $request->when,
                'description' => $request->description,
                'term_file' => ($term_file != null) ? $term_file->getClientOriginalName() : null,
                'classrooms_file' => ($classrooms_file != null) ? $classrooms_file->getClientOriginalName() : null,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Weekend School Added Successfully',
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
            $weekendSchool = WeekendSchool::where('id', $id)->firstOrFail();
            $weekendSchool->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'message' => 'Weekend School deleted successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit($id){
        $weekendSchool = WeekendSchool::where('id', $id)->firstOrFail();
        return view('backend.weekend-school.edit', compact('weekendSchool'));
    }

    public function update(Request $request, $id){
        try {
            $term_file = null;
            $classrooms_file = null;

            if ($request->hasFile('term_file')) {
                $term_file = $request->file('term_file');
                $term_file->storeAs('public/files', $term_file->getClientOriginalName());
            }

            if ($request->hasFile('classrooms_file')) {
                $classrooms_file = $request->file('classrooms_file');
                $classrooms_file->storeAs('public/files', $classrooms_file->getClientOriginalName());
            }

            WeekendSchool::where('id', $id)->update([
                'name' => $request->name,
                'where' => $request->where,
                'when' => $request->when,
                'description' => $request->description,
                'term_file' => ($term_file != null) ? $term_file->getClientOriginalName() : $request->term_file,
                'classrooms_file' => ($classrooms_file != null) ? $classrooms_file->getClientOriginalName() : $request->classrooms_file,
            ]);
           
            return response()->json([
                'status' => 200,
                'message' => 'Weekend School Updated Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    public function weekendSchoolDatatable(Request $request){
        if ($request->ajax()) {
            $weekendSchool = WeekendSchool::all();
            return DataTables::of($weekendSchool)->addColumn('description', function ($row) {
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
                                            <li><a href="javascript:void(0)" data-table="weekend-school-table" data-act="ajax-modal" data-complete-location="true" data-method="get" data-action-url=" ' . route('admin.weekend-school.edit', $row->id) . ' "><em class="icon ni ni-edit"></em><span >Edit Weekend School</span></a></li>
                                            <li><a href="javascript:void(0)" data-table="weekend-school-table" class="delete"  data-url=" ' . route('admin.weekend-school.destroy', $row->id) . ' "><em class="icon ni ni-trash"></em><span>Delete Weekend School</span></a></li>
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
