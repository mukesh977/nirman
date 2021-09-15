<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Advertisement;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use File;

class AdvertisementController extends Controller
{
    protected $index_view = 'backend.advertisement.index';
    protected $create_view = 'backend.advertisement.create';
    protected $edit_view = 'backend.advertisement.edit';



    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Advertisement::asc()->get();
            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $button = '<a  class="btn btn-primary btn-sm" href="' . route('admin.advertisement.edit', $data->id) . '"><i class="fa fa-edit"></i></a>';
                    $button .= '<button class="btn btn-danger btn-sm mx-1" id="' . $data->id . '" data-toggle="modal"
                    data-target="#deleteProductModal" onclick="deleteData(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
                    return $button;
                })
                ->addColumn('status', function ($data) {
                    if ($data->status == 1) {
                        $label = '<span class="badge badge-success">Active</span>';
                    } else {
                        $label = '<span class="badge badge-danger">Inactive</span>';
                    }
                    return $label;
                })
                ->rawColumns(['action', 'status'])
                ->addIndexColumn()
                ->make(true);
        }
        return view($this->index_view);
    }

    public function create()
    {
        $images = File::allFiles(public_path('images'));

        return view($this->create_view, compact('images'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'stock' => 'nullable|integer|max:10000',
        ]);



        $input = $request->all();

        if ($request->has('status') && $request->status == 1) {
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }

        if (empty($input['order'])) {
            $order = Advertisement::max('order');
            $new_order = $order + 1;
            $input['order'] = $new_order;
        }


        if ($request->hasFile('product_image_from_local')) {
            $images = $request->file('product_image_from_local');
            $imageName = $images->getClientOriginalName();
            $uniqueName = time() . '-' . $imageName;
            $images->move(public_path() . '/images/', $uniqueName);
            $input['image'] = $uniqueName;
        } elseif ($request->has('product_image_from_col')) {
            $input['image'] = $request->product_image_from_col;
        } else {
            // cover_image is empty
            $input['image'] = '';
        }
        $advetisement = Advertisement::create($input);



        return redirect()->route('admin.advertisement.index')->with('success_msg', 'Advertisement Added.');
    }

    public function edit(Advertisement $advertisement)
    {
        $images = File::allFiles(public_path('images'));

        return view($this->edit_view, compact('images', 'advertisement'));
    }

    public function update(Request $request, Advertisement $advertisement)
    {
        // dd($request->all());
        $request->validate([
            'order' => 'nullable|integer|max:10000',
        ]);



        $input = $request->all();


        if ($request->has('status') && $request->status == 1) {
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }

        if (empty($input['order'])) {
            $order = Advertisement::max('order');
            $new_order = $order + 1;
            $input['order'] = $new_order;
        }


        if ($request->hasFile('product_image_from_local')) {
            $images = $request->file('product_image_from_local');
            $imageName = $images->getClientOriginalName();
            $uniqueName = time() . '-' . $imageName;
            $images->move(public_path() . '/images/', $uniqueName);
            $input['image'] = $uniqueName;
        } elseif ($request->has('product_image_from_col')) {
            $input['image'] = $request->product_image_from_col;
        } else {
            // cover_image is empty
            $input['image'] = '';
        }

        if ($advertisement->update($input)) {

            return redirect()->route('admin.advertisement.index')->with('success_msg', 'Advertisement Updated.');
        } else {
            return redirect()->route('admin.advertisement.index')->with('success_msg', 'Advertisement Updated.');
        }
    }

    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();
        return redirect()->back()->with('success_msg', 'Product Deleted.');
    }
}
