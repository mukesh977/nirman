<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Enquiry;
use App\Model\Order;
use App\Model\Page;
use App\Model\Testimonal;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Spatie\Permission\Models\Role;
use Auth;
use Carbon\Carbon;

class BackendController extends Controller
{
	public function index(Request $request)
	{
		// $role = Role::create(['name' => 'admin']);
		// $user = Auth::user();
		// $user->assignRole('admin');



		// $dt = Carbon::now();
    //     $one_month_ago = $dt->subDays(30);
    //     $dummyLabels = [];
    //     $dummyCount = [];
    //     $labels = [];
    //     $count = [];

    //     $sale_raw = DB::table('orders')
    //         ->where('status', 'completed')
    //         ->orWhere('created_at', '>', $one_month_ago)
    //         ->orderBy('created_at', 'asc')
    //         ->select(DB::raw("DATE_FORMAT(created_at, '%e-%c') as date"), DB::raw('SUM(`total_price`) as total'))
    //         ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y %m %e')"))
    //         ->get();

    //     dd($sale_raw); 
    //     $tempDate = $one_month_ago;

    //     for ($i = 0; $i < 30; $i++) {
    //         $dummyLabels[$i] = $tempDate;
    //         $tempDate->addDay(1);
    //         $dummyCount[$i] = 0;
    //     }

    //     $sales = $sale_raw->map(function ($dummyLabels, $key) {
    //         $sale_raw['date'] = $dummyLabels[$key];

    //         return $dummyLabels;
    //     });
    //     dd($sales);

		$total_customers = User::count();
		$total_orders = Order::count();
		$total_sales = Order::completed()->count();
		$total_enquiries = Enquiry::count();
		$enquiries = Enquiry::latest()->get();



		return view('backend.index', compact(
			'total_customers',
			'total_orders',
			'total_sales',
			'total_enquiries',
			'enquiries'
		));
	}


	public function user_index()
	{
		$users = User::get();
		// dd($user);
		return view('backend.user.index', compact('users'));
	}


	public function user_create()
	{
		// $roles = Role::all();
		// dd($roles);
		return view('backend.user.create');
	}

	public function user_store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:6|confirmed',
			// 'user_role' => 'required',
		]);

		// dd($request->all());

		$input = $request->all();
		$input['password'] = Hash::make($input['password']);
		$user = User::create($input);

		// $user->assignRole($input['user_role']);
		return redirect()->back()->with('success_msg', 'User Created Successfully.');
	}

	public function user_edit($id)
	{
		$user = User::findOrFail($id);
		// $roles = Role::all();
		// $user_role_array = $user->getRoleNames()->toArray();		
		// dd($user_role_array);
		// return view('backend.user.edit', compact('user', 'roles', 'user_role_array'));
		return view('backend.user.edit', compact('user'));
	}

	public function user_update(Request $request, $id)
	{
		$this->validate($request, [
			'name' => 'required|string',
			'email' => 'required|unique:users,email,' . $id,
			// 'user_role' => 'required',
		]);

		// dd($request->all());
		$input = $request->all();
		if (!empty($request['password'])) {
			$input['password'] = Hash::make($request->password);
		}
		$user = User::findOrFail($id);
		$user->update($input);
		// DB::table('model_has_roles')->where('model_id',$id)->delete();
		// $user->assignRole($request->user_role);
		return redirect()->back()->with('success_msg', 'User Updated Successfully.');
	}

	public function user_destroy($id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		return redirect()->back()->with('success_msg', 'User Updated Successfully.');
	}
}
