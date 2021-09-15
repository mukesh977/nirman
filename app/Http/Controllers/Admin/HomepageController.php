<?php
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Model\Carosel;
    use App\Model\Testimonal;
    use App\Model\Partner;
    use Illuminate\Support\Facades\Storage;

    class HomepageController extends Controller
    {
        public function carosel_index()
        {
            $carosel = Carosel::all();            
            return view('backend.carosel.index', compact('carosel'));
        }

        public function carosel_create()
        {
            return view('backend.carosel.create');
        }

        public function carosel_store(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:191',
                'order' => 'nullable|integer|max:100',
                'image' => 'nullable|image',
            ]); 

            $input = $request->all();
            
            if($input['order'] == null){
                $order = Carosel::max('order');
                $input['order'] = $order + 1;
            }

            if($request->hasFile('image'))
            {
                $path = $request->file('image')->store('public/carosel');
                $input['image'] = $path;
            }


            Carosel::create($input);
            
            return redirect()->back()->with('success_msg', 'Data Added Successfully.');
        }

        public function carosel_edit($id)
        {
            $carosel = Carosel::findOrFail($id);
            return view('backend.carosel.edit', compact('carosel'));
        }

        public function carosel_update(Request $request, $id)
        {
            $request->validate([
                'title' => 'required|string|max:191',
                'order' => 'nullable|integer|max:100',
                'image' => 'nullable|image',
            ]);
            // dd($request->all());

            $carosel = Carosel::findOrFail($id);
            $input = $request->all();

            if($input['order'] == null){
                $order = Carosel::max('order');
                $input['order'] = $order + 1;
            }

            if($request->hasFile('image'))
            {
                Storage::delete($carosel->image);
                $path = $request->file('image')->store('public/carosel');
                $input['image'] = $path;
            }
            $carosel->update($input);
            return redirect()->back()->with('success_msg', 'Data Updated Successfully.');

        }

        public function carosel_destroy($id)
        {
            $carosel = Carosel::findOrFail($id);
            Storage::delete($carosel->image);
            $carosel->delete();
            return redirect()->back()->with('success_msg', 'Data Deleted Successfully');
        }

        public function testimonal_index()
        {            
            $testimonal = Testimonal::all();
            return view('backend.testimonal.index', compact('testimonal'));
        }

        public function testimonal_create()
        {
            return view('backend.testimonal.create');
        }

        public function testimonal_store(Request $request)
        {
            $request->validate([
                'author' => 'required|string|max:191',
                'order' => 'nullable|integer|max:100',
                'image' => 'nullable|image',
            ]);    
            // dd($request->all());
            $input = $request->all();

            if($input['order'] == null){
                $order = Testimonal::max('order');
                $input['order'] = $order + 1;
            }

            
            if($request->hasFile('image'))
            {
                $path = $request->file('image')->store('public/testimonal');
                $input['image'] = $path;
            }
            Testimonal::create($input);
            return redirect()->back()->with('success_msg', 'Data Added Successfully.');
        }

        public function testimonal_edit($id)
        {
        // dd('edit');
            $testimonal = Testimonal::findOrFail($id);
            return view('backend.testimonal.edit', compact('testimonal'));
        }

        public function testimonal_update(Request $request, $id)
        {
            $request->validate([
                'author' => 'required',
                'order' => 'nullable|integer|max:100',
                'image' => '|nullableimage|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            // dd($request->all());

            $testimonal = Testimonal::findOrFail($id);
            $input = $request->all();
            if($input['order'] == null){
                $order = Testimonal::max('order');
                $input['order'] = $order + 1;
            }
            if($request->hasFile('image'))
            {
                Storage::delete($testimonal->image);
                $path = $request->file('image')->store('public/testimonal');
                $input['image'] = $path;
            }
            $testimonal->update($input);
            return redirect()->back()->with('success_msg', 'Data Updated Successfully.');

        }

        public function testimonal_destroy($id)
        {
            $testimonal = Testimonal::findOrFail($id);
            Storage::delete($testimonal->image);
            $testimonal->delete();
            return redirect()->back()->with('success_msg', 'Data Deleted Successfully');
        }

        public function partner_index()
        {            
            $partner = Partner::asc()->get();
            return view('backend.partner.index', compact('partner'));
        }

        public function partner_create()
        {
            return view('backend.partner.create');
        }

        public function partner_store(Request $request)
        {
            $request->validate([
                'title' => 'required',
                'order' => 'nullable|integer|max:100',
                'image' => 'nullable|image',
                'cover_image' => 'nullable|image',
            ]);    
            // dd($request->all());

            $input = $request->all();
            if($input['order'] == null){
                $order = Partner::max('order');
                $input['order'] = $order + 1;
            }
            if($request->hasFile('image'))
            {
                $path = $request->file('image')->store('public/partner');
                $input['image'] = $path;
            }
            if($request->hasFile('cover_image'))
            {
                $path = $request->file('cover_image')->store('public/partner');
                $input['cover_image'] = $path;
            }
            Partner::create($input);
            return redirect()->back()->with('success_msg', 'Data Added Successfully.');
        }

        public function partner_edit($id)
        {
        // dd('edit');
            $partner = Partner::findOrFail($id);
            return view('backend.partner.edit', compact('partner'));
        }

        public function partner_update(Request $request, $id)
        {
            $request->validate([
                'title' => 'required',
                'order' => 'nullable|integer|max:100',
                'cover_image' => 'nullable|image',
                'image' => 'nullable|image',
            ]);
            // dd($request->all());
            
            $input = $request->all();
            $partner = Partner::findOrFail($id);
            if($input['order'] == null){
                $order = Partner::max('order');
                $input['order'] = $order + 1;
            }
            if($request->hasFile('image'))
            {
                Storage::delete($partner->image);
                $path = $request->file('image')->store('public/partner');
                $input['image'] = $path;
            }
            if($request->hasFile('cover_image'))
            {
                Storage::delete($partner->cover_image);
                $path = $request->file('cover_image')->store('public/partner');
                $input['cover_image'] = $path;
            }
            $partner->update($input);
            return redirect()->back()->with('success_msg', 'Data Updated Successfully.');

        }

        public function partner_destroy($id)
        {
            $partner = Partner::findOrFail($id);
            Storage::delete($partner->image);
            $partner->delete();
            return redirect()->back()->with('success_msg', 'Data Deleted Successfully');
        }
    }
