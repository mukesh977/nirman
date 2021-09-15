<?php

namespace App\Http\Controllers;

use App\Model\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;


class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->only(['index', 'show', 'edit', 'update', 'destroy']);
        $this->middleware('auth')->only(['create', 'store']);
    }



    protected $index_view = 'review.index';
    protected $show_view = 'review.show';


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Review::all();
            return DataTables::of($data)
                ->addColumn('status', function ($data) {
                    switch ($data->status) {
                        case '1':
                            $label = '<span class="badge badge-success"> Active</span>';
                            break;
                        default:
                            $label = '<span class="badge badge-danger"> Inactive</span>';
                            break;
                    }
                    return $label;
                })
                ->addColumn('action', function ($data) {
                    $button = '<a  class="btn btn-warning btn-sm" href="' . route('review.edit', $data->id) . '"><i class="fas fa-retweet"></i></a>';
                    $button .= '<a  class="btn btn-primary btn-sm mx-1" href="' . route('review.show', $data->id) . '"><i class="fa fa-eye"></i></a>';
                    $button .= '<button class="btn btn-danger btn-sm mx-1" id="' . $data->id . '" data-toggle="modal"
                    data-target="#deleteReviewModal" onclick="deleteData(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
                    return $button;
                })
                ->rawColumns(['action', 'status'])
                ->addIndexColumn()
                ->make(true);
        }


        return view($this->index_view);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'review' => 'required|string',
            'rating' => 'required',
            'product_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->with('error_msg', 'Validation failed!')
                ->withErrors($validator)
                ->withInput();
        }


        $input = $request->all();
        $user = Auth()->user();
        $input['user_id'] = $user->id;
        $input['customer_name'] = $user->name;

        // check whether user has already posted review before
        $no_of_reviews = Review::where('user_id', $user->id)
            ->where('product_id', $input['product_id'])
            ->count();
        if ($no_of_reviews >= 1) {
            return redirect()->back()->with('error_msg', 'Sorry! You have already posted the review.');
        }

        if (Review::create($input)) {
            return redirect()->back()->with('success_msg', 'Review posted and waiting for admin approval.');
        } else {
            return redirect()->back()->with('success_msg', 'Failed to post review.');
        }
    }


    public function edit($id)
    {
        $review = Review::findOrFail($id);
        if ($review->status) {
            $review->status = 0;
        } else {
            $review->status = 1;
        }

        if ($review->save()) {
            return redirect()->back()->with('success_msg', 'Status changes.');
        } else {
            return redirect()->back()->with('error_msg', 'Action failed.');
        }
    }

    public function show($id)
    {
        $review = Review::findOrFail($id);


        return view($this->show_view, compact('review'));
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->back()->with('success_msg', 'Review Deleted.');
    }
}
