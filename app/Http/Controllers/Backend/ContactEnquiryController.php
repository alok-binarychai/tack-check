<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use Yajra\DataTables\Facades\DataTables;

class ContactEnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.contact-enquiry.index');
    }

    public function destroy($id)
    {
        try {
            $contactEnquiry = ContactEnquiry::where('id', $id)->firstOrFail();
            $contactEnquiry->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'message' => 'Contact Enquiry deleted successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit($id){
        $contactEnquiry = ContactEnquiry::where('id', $id)->firstOrFail();
        return view('backend.contact-enquiry.edit', compact('contactEnquiry'));
    }
    
    public function contactEnquiryDatatable(Request $request){
        if ($request->ajax()) {
            $contactEnquiry = ContactEnquiry::all();
            return DataTables::of($contactEnquiry)
           ->addColumn('action', function ($row) {
                $action = '  <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="javascript:void(0)" data-table="contactEnquiry-table" data-act="ajax-modal" data-complete-location="true" data-method="get" data-action-url=" ' . route('admin.contact-enquiry.edit', $row->id) . ' "><em class="icon ni ni-eye"></em><span >View Enquiry</span></a></li>
                                            <li><a href="javascript:void(0)" data-table="contactEnquiry-table" class="delete"  data-url=" ' . route('admin.contact-enquiry.destroy', $row->id) . ' "><em class="icon ni ni-trash"></em><span>Delete Enquiry</span></a></li>
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
