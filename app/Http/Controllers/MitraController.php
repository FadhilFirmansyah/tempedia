<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.mitra.index", [
            "mitras" => Mitra::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.mitra.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataBlog = $request->validate([
            "mitra" => "required|max:255",
            "nama" => "required|max:255",
            "alamat" => "required|max:255",
            "slug" => "required|unique:mitra",
            "image" => "image|file|max:1024",
            "deskripsi" => "required"
        ]);

        if($request->file("image")){
            $dataBlog["image"] = $request->file("image")->store("mitra-image");
        }

        Mitra::create($dataBlog);

        return redirect("/dashboard/mitra")->with("success", "New Mitra has been added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Mitra $mitra)
    {
        return view("dashboard.mitra.show", [
            "blog" => $mitra
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Mitra $mitra)
    {
        return view("dashboard.mitra.edit", [
            "blog" => $mitra
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mitra $mitra)
    {
        $rules = [
            "mitra" => "required|max:255",
            "nama" => "required|max:255",
            "alamat" => "required|max:255",
            "image" => "image|file|max:1024",
            "deskripsi" => "required"
        ];

        if($request->slug != $mitra->slug){
            $rules["slug"] = "required|unique:mitra";
        }

        $dataBlog = $request->validate($rules);

        if($request->file("image")){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $dataBlog["image"] = $request->file("image")->store("blog-image");
        }

        Mitra::where("id", $mitra->id)->update($dataBlog);

        return redirect("/dashboard/mitra")->with("success", "a mitra has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitra $mitra)
    {
        if($mitra->image){
            Storage::delete($mitra->image);
        }
        Mitra::destroy($mitra->id);
        return redirect("/dashboard/mitra")->with("success", "Mitra success delete it");
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Mitra::class, "slug", $request->title);
        return response()->json(["slug" => $slug]);
    }
}