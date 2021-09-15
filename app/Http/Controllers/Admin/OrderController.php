<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Invoice;
use App\Model\Order;
use App\Model\Shipment;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use PDF;

class OrderController extends Controller
{
    protected $index_view = 'backend.order.index';
    protected $show_view = 'backend.order.show';
    protected $invoice_view = 'backend.pdf.invoice';


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $order = Order::all();
            return DataTables::of($order)
                ->addColumn('created_at', function ($data) {
                    $created_at = date('M d Y  H:m:s A', strtotime($data->created_at));
                    return $created_at;
                })
                ->addColumn('status', function ($data) {
                    switch ($data->status) {
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
                    $button = '<a  class="btn btn-link" href="' . route('admin.order.show', $data->id) . '" title="View"><i class="fa fa-eye"></i></a>';
                    return $button;
                })
                ->rawColumns(['action', 'status'])
                ->toJson();
        }


        return view($this->index_view);
    }


    public function show($id)
    {
        $order = Order::with(['shipment', 'invoice'])
            ->findOrFail($id);
        $items_inside_order = json_decode($order->description);
        // dd($items_inside_order);


        return view($this->show_view, compact('order', 'items_inside_order'));
    }


    public function cancel($id)
    {
        //change staus of order
        $order = Order::findOrFail($id);
        $order->status = 'cancelled';
        $order->save();



        return redirect()->route('admin.order.index')->with('success_msg', 'Status Changed to Cancelled.');
    }



    public function process($id)
    {
        //change staus of order
        $order = Order::findOrFail($id);
        $order->status = 'processing';
        $order->save();



        return redirect()->route('admin.order.index')->with('success_msg', 'Status Changed to Processing.');
    }



    public function ship($id)
    {
        //change staus of order
        $order = Order::findOrFail($id);
        $order->status = 'shipping';
        $order->save();

        // insert to shipment only once!
        if ($order->shipment()->count() < 1) {
            $shipment = new Shipment();
            $shipment->order_id = $id;
            $shipment->save();

            return redirect()->route('admin.order.index')->with('success_msg', 'Status Changed to Shipping.');
        }

        return redirect()->back()->with('success_msg', 'Item Already Shipping');
    }



    public function invoice($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'completed';
        $order->save();

        // insert to invoice only once!
        if ($order->invoice()->count() < 1) {
            $invoice = new Invoice();
            $invoice->order_id = $id;
            $invoice->save();

            return redirect()->route('admin.order.index')->with('success_msg', 'Invoice Paid Successfully');
        }

        return redirect()->back()->with('success_msg', 'Invoice Was Already Created!');
    }



    public function download_invoice($id)
    {
        $invoice = Invoice::with('order')
            ->findOrFail($id);
        $ordered_products = json_decode($invoice->order->description);
        // dd($invoice);

        $pdf = PDF::loadView($this->invoice_view, compact('invoice', 'ordered_products'));
        $invoice_file_name = 'invoice-'.$invoice->id;


        return $pdf->download($invoice_file_name);
        // return view($this->invoice_view, compact('invoice', 'ordered_products'));
    }
}
