<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.about.testimonial.index');
    }

    public function create(Request $request){
        return view('backend.about.testimonial.create');
    }

    public function store(Request $request){
        try {
            Testimonial::create([
                'name' => $request->name,
                'description' => $request->description
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Testimonial Added Successfully',
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
            $testimonial = Testimonial::where('id', $id)->firstOrFail();
            $testimonial->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'message' => 'Testimonial deleted successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit($id){
        $testimonial = Testimonial::where('id', $id)->firstOrFail();
        return view('backend.about.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id){
        try {
            Testimonial::where('id', $id)->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
           
            return response()->json([
                'status' => 200,
                'message' => 'Testimonial Updated Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    public function testimonialDatatable(Request $request){
        if ($request->ajax()) {
            $testimonial = Testimonial::all();
            return DataTables::of($testimonial)->addColumn('description', function ($row) {
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
                                            <li><a href="javascript:void(0)" data-table="testimonial-table" data-act="ajax-modal" data-complete-location="true" data-method="get" data-action-url=" ' . route('admin.testimonial.edit', $row->id) . ' "><em class="icon ni ni-edit"></em><span >Edit Testimonial</span></a></li>
                                            <li><a href="javascript:void(0)" data-table="testimonial-table" class="delete"  data-url=" ' . route('admin.testimonial.destroy', $row->id) . ' "><em class="icon ni ni-trash"></em><span>Delete Testimonial</span></a></li>
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
