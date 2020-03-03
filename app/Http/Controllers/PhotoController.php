<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Album;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {

        $photos=Photo::paginate(10);
        return view('photos.photo',compact('photos'));
   
    }

    public function show($id){

        $album=Album::find($id);
        $photos=Photo::all()->where('id_album', $id);
        return view('photos.show',compact('photos', 'album'));
    
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
       
        $albums=Album::all();
        return view('photos.add',compact('albums'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

            $photo=new Photo();
            $photo->nom=$request->nom;
            $photo->img_path=$request->img_path;
            $photo->id_album=$request->id_album;
            $photo->description=$request->description;
            $photo->save();
     
        return redirect()->route('photo');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

        $albums=Album::all();
        $photo=Photo::find($id);
        return view('photos.edit',compact('photo','albums'));
    
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

        $photo=Photo::find($id);
        $photo->nom=$request->nom;
        $photo->img_path=$request->img_path;
        $photo->description=$request->description;
        $photo->id_album=$request->id_album;
        $photo->save();
        return redirect()->route('photo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

        $photo=Photo::find($id);
        $photo->delete();
        return redirect()->back();
    
    }
}
