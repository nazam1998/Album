<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Album;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums=Album::paginate(10);
        return view('albums.album',compact('albums')); 
    }
    public function show($id){

        $albums=Album::all()->where('id_user',$id);
        $user=User::find($id);
        return view('albums.show',compact('albums', 'user'));
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $users=User::all();
        return view('albums.addAlbum',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $album=new Album();
            $album->nom=$request->nom;
            $album->id_user=$request->id_user;
            $album->description=$request->description;
            $album->save();
     
        return redirect()->route('album');
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
        $users=User::all();
        $album=Album::find($id);
        return view('albums.editAlbum',compact('album','users'));
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
        $album=Album::find($id);
        $album->nom=$request->nom;
        $album->description=$request->description;
        $album->id_user=$request->id_user;
        $album->save();
        return redirect()->route('album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album=Album::find($id);
        $album->delete();
        return redirect()->back();
    }
}
