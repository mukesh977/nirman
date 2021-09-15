<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\AboutUs;
use App\Model\Setting;
use Illuminate\Support\Facades\Mail;
use App\Mail\LeaveMailable;
use App\Model\Enquiry;
use App\Model\Page;
use App\Model\Partner;
use App\Model\HomepagePictures;
use App\Model\Layout;
use App\Model\Product;
use App\Model\ProductCategory;
use App\Model\Testimonal;
use App\Model\Wishlist;
use Carbon\Carbon;
use Auth;

class FrontendController extends Controller
{
    public function index()
    {
        // $carosel = Carosel::orderBy('order', 'asc')->get();
        // $aboutUs = AboutUs::first();
        // $homepagePic = HomepagePictures::first();
        // $features = FeaturesAboutUs::asc()->get();
        // $setting = Setting::first();
        // $testimonals = Testimonal::asc()->get();
        // $partners = Partner::orderBy('order', 'asc')->get();
        // return view('frontend.index', compact(
        // 	'carosel', 
        // 	'aboutUs',
        // 	'setting',
        // 	'homepagePic',
        // 	'features',
        // 	'partners',
        // 	'testimonals',
        // ));

        // $layout = Layout::with('one_level_child.products')
        // 	->whereNull('layout_id')
        // 	->active()
        // 	->asc()
        // 	->get();
        // dd($layout);


        $layout = Layout::with(['one_level_child.products' => function ($q) {
            $q->where([
                ['stock', '>', 0],
                ['status', 1]
            ]);
        }])
            ->whereNull('layout_id')
            ->active()
            ->asc()
            ->get();
        // dd($layout);




        $new_arrival = Product::latest()
            ->instock()
            ->active()
            ->limit(16)
            ->get();
        // dd($new_arrival);


        $wishlist = '';
        if (Auth::check()) {
            $wishlist = Wishlist::where('user_id', Auth::user()->id)->get();
        }
        // dd($wishlist);



        return view('frontend.index', compact('layout', 'new_arrival', 'wishlist'));
    }



    public function about()
    {
        // $aboutUs = AboutUs::first();
        // $setting = Setting::first();
        // return view('frontend.about', compact('aboutUs', 'setting'));
        return view('frontend.about');
    }



    public function shop()
    {
        $products = Product::inRandomOrder()->paginate(16);

        
        return view('frontend.shop', compact('products'));
    }



    public function contactUs()
    {
        return view('frontend.contact');
    }



    public function product_single($slug)
    {
        // dd($slug);
        $product = Product::with(['product_category', 'reviews'])
            ->where('slug', $slug)->firstOrFail();
        // dd($product);

        $wishlist = '';
        if (Auth::check()) {
            $wishlist = Wishlist::where('user_id', Auth::user()->id)->get();
        }



        return view('frontend.product-single', compact('product', 'wishlist'));
    }



    public function contactUs_store(Request $request)
    {
        $request->validate([
            'email' => 'email',
            'message' => 'required|string',
        ]);
        // dd($request->all());

        $data = $request->all();
        Mail::to('youth_system@youthcommunityclubnepal.com')->send(new LeaveMailable($data));
        Enquiry::create($data);
        return redirect()->back()->with('success_msg', 'Thanks for the Enquiry. We will communicate to you as soon as possible.');
    }



    public function view_page($slug)
    {
        // dd($slug);
        $page = Page::where('page_url', $slug)->firstOrFail();
        return view('frontend.pages', compact('page', 'slug'));
    }



    public function partner($id)
    {
        $partner = Partner::findOrFail($id);
        return view('frontend.partners', compact('partner'));
    }



    /**
     * blogs landing page
     * 
     * @param null
     * 
     * @return view
     */
    public function blogs()              
    {
        return view('frontend.blogs');
    }



    /**
     * blog inner page
     * 
     */
    public function blog()              
    {
        return view('frontend.blog');
    }
}