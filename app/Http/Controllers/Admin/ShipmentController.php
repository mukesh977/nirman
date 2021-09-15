<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Shipment;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class ShipmentController extends Controller
{

    protected $index_view = 'backend.shipment.index';
    protected $show_view = 'backend.shipment.show';
    protected $invoice_view = 'backend.pdf.invoice';



    public function index(Request $request)
    {
        if ($request->ajax()) {
            $shipment = Shipment::with('order')->get();
            return DataTables::of($shipment)
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
                    $action = '<a  class="btn btn-link" href="' . route('admin.shipment.show', $data->id) . '" title="View"><i class="fa fa-eye"></i></a>';
                    return $action;
                })
                ->rawColumns(['action', 'status'])
                ->toJson();
        }


        return view($this->index_view);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Shipment $shipment)
    {
        return view($this->show_view, compact('shipment'));
    }

    public function edit(Shipment $shipment)
    {
        //
    }

    public function update(Request $request, Shipment $shipment)
    {
        //
    }

    public function destroy(Shipment $shipment)
    {
        $shipment->delete();
        

        return redirect()->route('admin.shipment.index')->with('success_msg', 'Shipment Deleted.');
    }
}
