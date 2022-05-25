<?php

namespace App\Http\Controllers;

use App\Models\Directory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directories = Directory::selectDirectories();
        return view('directory.index', ['directories'=>$directories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directories = Directory::all();
        return view('directory.create', ['directories'=>$directories]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en'  => 'required|min:2|max:50',
            'name_fr'  => 'required|min:2|max:50',
            'document' => 'required|file|mimes:pdf,doc,zip',
        ]);
        $extension = $request->file('document')->getClientOriginalExtension();
        $fileName = sha1($request->name_en.time()). '.' .$extension;
        $request->file('document')->storeAs("public", $fileName);
        $newFile = new Directory;
        $newFile->fill($request->all());
        $newFile->user_id = Auth::user()->id;
        $newFile->document = $fileName;
        $newFile->extension = $extension;
        $newFile->save();
        return redirect('directory/'.$newFile->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function show(Directory $directory)
    {
        return  view ('directory.show', ['directory'=>$directory]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function edit(Directory $directory)
    {
        return view('directory.edit', ['directory' => $directory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directory $directory)
    {
        $request->validate([
            'name_en'  => 'required|min:2|max:50',
            'name_fr'  => 'required|min:2|max:50',
            'document' => 'required|file|mimes:pdf,doc,zip',
        ]);
        Storage::delete('public' .$directory->document);
        $extension = $request->file('document')->getClientOriginalExtension();
        $fileName = sha1($request->name_en.time()). '.' .$extension;
        $request->file('document')->storeAs("public", $fileName);

        $directory->update([
            'name_en' => $request->name_en,
            'name_fr' => $request->name_fr,
            'document'  => $fileName,
            'extension' => $extension
        ]);
        return redirect(route('directory.show', $directory->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directory $directory)
    {
        $directory->delete();
        return redirect(route('directory'));
    }

    public function download(Directory $directory) {
        $file = storage_path('app/public/'.$directory->document);
        return response()->download($file);
    }
}