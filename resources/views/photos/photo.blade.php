@extends('layout.main')
@section('content')
<section class="text-center my-5">

    <table>
        <thead>
            <tr>
                <th colspan="8">Photo Table</th>
            </tr>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Image Path</th>
                <th>Description</th>
                <th>ID_Album</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($photos as $photo)
            <tr>
                <td>{{$photo->id}}</td>
                <td>{{$photo->nom}}</td>
                <td><img src="{{asset($photo->img_path)}}" class="img-fluid" alt=""></td>
                <td>{{$photo->description}}</td>
                <td>{{$photo->id_album}}</td>
                <td><a href="{{route('editPhoto',$photo->id)}}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{route('deletePhoto',$photo->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination-button">
        {{ $photos->links() }}
    </div>
    <a href="{{route('addPhoto')}}" class="btn btn-primary">Ajouter Photo</a>

</section>
@endsection
