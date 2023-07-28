<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $create_role = check_permission('gallery','index');
        
        if($create_role == 0){
            return redirect()->back()->with('message','Permissions insuffisantes !')->with('message_type','warning');
        }else{
            $galleries = Gallery::orderBy('id','DESC')->get();
            return view('admin.gallery.index', compact('galleries'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create')->with('loader',true);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
                $request->validate([
                'img_name'                 => 'required',
                ],
                [
                    'img_name'             =>'Please select Photo',
                ]);

            $input = $request->all();

            if($request->img_name != ''){
                $fileName = time().'.'.$request->img_name->getClientOriginalExtension();
                $request->img_name->move(public_path('gallery_img'), $fileName);
                $input['img_name'] =$fileName;
            }

           
            Gallery::create($input);

            return redirect()->route('gallery.index')
            ->with('message', 'Image successfully.')->with('loader',true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
         $gallery = Gallery::findOrFail($id);
         
        return view('admin.gallery.edit', compact('gallery'))->with('loader',true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

         $gallery = Gallery::findOrFail($id);
            $request->validate([
                'img_name'                 => 'required',
                ],
                [
                    'img_name'             =>'Please select Photo',
                ]);       
                 

            $input = $request->all();

             $image_path = public_path('gallery_img').$gallery->img_name;

            if(File::exists($image_path)) {
                    File::delete($image_path);
            }

            if($request->img_name != ''){
                $fileName = time().'.'.$request->img_name->getClientOriginalExtension();
                $request->img_name->move(public_path('gallery_img'), $fileName);
                $input['img_name'] =$fileName;
            }
            $gallery->update($input);
            
            return redirect()->route('gallery.index')
            ->with('message', 'Image Update successfully.')->with('loader',true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
         $id = $request->get('id');
        Gallery::where('id',$id)->delete();
        return response()->json(array('success' => 'Delete successfully.'));
    }
}
