<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Item::latest()->get();
        
        return view('admin.item.index',compact('items'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.item.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
             ]);
        // get form image
        $image = $request->file('image');
        $slug = Str::slug($request->name);

        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check item dir is exists
            if (!Storage::disk('public')->exists('item'))
            {
                Storage::disk('public')->makeDirectory('item');
            }
//            resize image for item and upload
            $item = Image::make($image)->resize(500,333)->stream();
            Storage::disk('public')->put('item/'.$imagename,$item);

        } else {
            $imagename = "default.png";
        }
        $item = new Item();
        $item->category_id = $request->category;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->image = $imagename;
        $item->save();
        Toastr::success('item has been Created :)' ,'Success');
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();

            $item = item::findOrFail($id);
            return view('admin.item.edit',compact('item','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        // get form image
        $image = $request->file('image');
        $slug = Str::slug($request->name);
        $item = item::find($id);
        if (isset($image)) {
            //            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            //            check item dir is exists
            if (!Storage::disk('public')->exists('item')) {
                Storage::disk('public')->makeDirectory('item');
            }
            //            delete old image
            if (Storage::disk('public')->exists('item/' . $item->image)) {
                Storage::disk('public')->delete('item/' . $item->image);
            }
            //            resize image for item and upload
            $itemimage = Image::make($image)->resize(500, 333)->stream();
            Storage::disk('public')->put('item/' . $imagename, $itemimage);


        } else {
            $imagename = $item->image;
        }

        $item->category_id = $request->category;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->image = $imagename;
        $item->save();
        Toastr::success('item has been Updated :)', 'Success');
        return redirect()->route('item.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {$item = item::findOrFail($id);
        if (Storage::disk('public')->exists('item/' . $item->image)) {
            Storage::disk('public')->delete('item/' . $item->image);
        }
        $item->delete();
        Toastr::success('item has been Deleted :)', 'Success');
        return redirect()->back();
    }
}
