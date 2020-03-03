@extends('layout.main')
@section('content')
    <section class="text-center my-5">

        <table>
            <thead>
                <tr>
                <th colspan="6">Album de {{$user->name}}</th>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>ID_User</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                <tr>
                    <td>{{$album->id}}</td>
                    <td>{{$album->nom}}</td>
                    <td>{{$album->description}}</td>
                    <td>{{$album->id_user}}</td>
                    <td><a href="{{route('editAlbum',$album->id)}}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{route('deleteAlbum',$album->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('addAlbum')}}" class="btn btn-primary">Ajouter Album</a>
        
    </section>
        @endsection