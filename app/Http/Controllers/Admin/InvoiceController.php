<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Invoice;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class InvoiceController extends Controller
{
    protected $index_view = 'backend.invoice.index';
    protected $show_view = 'backend.invoice.show';



    public function index(Request $request)
    {
        if ($request->ajax()) {
            $invoices = Invoice::with('order')->get();
            return DataTables::of($invoices)
                ->addColumn('created_at', function ($data) {
                    $created_at = date('d-M Y ', strtotime($data->created_at));
                    return $created_at;
                })
                ->addColumn('name', function ($data) {
                    $name = $data->order->name;
                    return $name;
                })
                ->addColumn('total_price', function ($data) {
                    $total_price = $data->order->total_price;
                    return $total_price;
                })
                ->addColumn('status', function ($data) {
                    switch ($data->order->status) {
                        case 'on hold':
                            $label = '<span class="badge badge-warning"> On Hold</span>';
                            break;
                        case 'completed':
                            $label = '<span class="badge badge-success"> Completed</span>';
                            break;
                        case 'processing':
                            $label = '<span class="badge badge-primary"> On Processing</span>';
                            break;
                        case 'shipping':
                            $label = '<span class="badge badge-primary"> Shipping</span>';
                            break;
                        case 'cancelled':
                            $label = '<span class="badge badge-danger"> Cancelled</span>';
                            break;
                        default:
                            $label = '<span class="badge badge-primary"> Checking</span>';
                            break;
                    }
                    return $label;
                })
                ->addColumn('action', function ($data) {
                    $action = '<a  class="btn btn-link" href="' . route('admin.invoice.show', $data->id) . '" title="View Invoice"><i class="fa fa-eye"></i></a>';
                    return $action;
                })
                ->rawColumns(['action', 'status'])
                ->toJson();
        }


        return view($this->index_view);
    }


    public function show(Invoice $invoice)
    {
        return view($this->show_view, compact('invoice'));
    }


    public function destroy(Invoice $invoice)
    {
        $invoice->delete();


        return redirect()->route('admin.invoice.index')->with('success_msg', 'invoice Deleted.');
    }
}
