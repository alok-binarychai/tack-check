<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\RDProgram;
use Yajra\DataTables\Facades\DataTables;

class RDProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.r-and-d-program.index');
    }

    public function create(Request $request){
        return view('backend.r-and-d-program.create');
    }

    public function store(Request $request){
        try {
            $card_img = null;
            $detail_page_img_1 = null;

            if ($request->hasFile('card_img')) {
                $card_img = $request->file('card_img');
                $card_img->storeAs('public/images', 'card_img_'.$card_img->getClientOriginalName());
            }

            if ($request->hasFile('detail_page_img_1')) {
                $detail_page_img_1 = $request->file('detail_page_img_1');
                $detail_page_img_1->storeAs('public/images', 'detail_page_img_1_'.$detail_page_img_1->getClientOriginalName());
            }

            if ($request->hasFile('detail_page_img_2')) {
                $detail_page_img_2 = $request->file('detail_page_img_2');
                $detail_page_img_2->storeAs('public/images', 'detail_page_img_2_'.$detail_page_img_2->getClientOriginalName());
            }

            RDProgram::create([
                'name' => $request->name,
                'slug' => $request->slug,
                'card_img' => (isset($card_img)) ? 'card_img_'.$card_img->getClientOriginalName() : null,
                'detail_page_img_1' => (isset($detail_page_img_1)) ? 'detail_page_img_1_'.$detail_page_img_1->getClientOriginalName() : null,
                'detail_page_img_2' => (isset($detail_page_img_2)) ? 'detail_page_img_2_'.$detail_page_img_2->getClientOriginalName() : null,
                'description' => $request->description,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'R & D Program Added Successfully',
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
            $rAndDProgram = RDProgram::where('id', $id)->firstOrFail();
            $rAndDProgram->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'message' => 'R & D Program deleted successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit($id){
        $rAndDProgram = RDProgram::where('id', $id)->firstOrFail();
        return view('backend.r-and-d-program.edit', compact('rAndDProgram'));
    }

    public function update(Request $request, $id){
        try {
            $card_img = null;
            $detail_page_img_1 = null;

            if ($request->hasFile('card_img')) {
                $card_img = $request->file('card_img');
                $card_img->storeAs('public/images', 'card_img_'.$card_img->getClientOriginalName());
            }

            if ($request->hasFile('detail_page_img_1')) {
                $detail_page_img_1 = $request->file('detail_page_img_1');
                $detail_page_img_1->storeAs('public/images', 'detail_page_img_1_'.$detail_page_img_1->getClientOriginalName());
            }

            if ($request->hasFile('detail_page_img_2')) {
                $detail_page_img_2 = $request->file('detail_page_img_2');
                $detail_page_img_2->storeAs('public/images', 'detail_page_img_2_'.$detail_page_img_2->getClientOriginalName());
            }

            RDProgram::where('id', $id)->update([
                'name' => $request->name,
                'slug' => $request->slug,
                'card_img' => (isset($detail_page_img_1)) ? (($card_img != null) ? 'card_img_'.$card_img->getClientOriginalName() : $request->card_img) : $request->card_img,
                'detail_page_img_1' => (isset($detail_page_img_1)) ? (($detail_page_img_1 != null) ? 'detail_page_img_1_'.$detail_page_img_1->getClientOriginalName() : $request->detail_page_img_1) : $request->detail_page_img_1,
                'detail_page_img_2' => (isset($detail_page_img_2)) ? (($detail_page_img_2 != null) ? 'detail_page_img_2_'.$detail_page_img_2->getClientOriginalName() : $request->detail_page_img_2) : $request->detail_page_img_2,
                'description' => $request->description,
            ]);
           
            return response()->json([
                'status' => 200,
                'message' => 'R & D Program Updated Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    public function rAndDProgramDatatable(Request $request){
        if ($request->ajax()) {
            $rAndDProgram = RDProgram::all();
            return DataTables::of($rAndDProgram)->addColumn('description', function ($row) {
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
                                            <li><a href="javascript:void(0)" data-table="r-and-d-program-table" data-act="ajax-modal" data-complete-location="true" data-method="get" data-action-url=" ' . route('admin.r-and-d-program.edit', $row->id) . ' "><em class="icon ni ni-edit"></em><span >Edit R & D Program</span></a></li>
                                            <li><a href="javascript:void(0)" data-table="r-and-d-program-table" class="delete"  data-url=" ' . route('admin.r-and-d-program.destroy', $row->id) . ' "><em class="icon ni ni-trash"></em><span>Delete R & D Program</span></a></li>
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
