<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Yajra\DataTables\Facades\DataTables;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.newsletter.index');
    }

    public function destroy($id)
    {
        try {
            $newsletter = Newsletter::where('id', $id)->firstOrFail();
            $newsletter->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'message' => 'Newsletter deleted successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    public function newsletterDatatable(Request $request){
        if ($request->ajax()) {
            $newsletter = Newsletter::all();
            return DataTables::of($newsletter)
           ->addColumn('action', function ($row) {
                $action = '  <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="javascript:void(0)" data-table="newsletter-table" class="delete"  data-url=" ' . route('admin.newsletter.destroy', $row->id) . ' "><em class="icon ni ni-trash"></em><span>Delete Newsletter</span></a></li>
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
