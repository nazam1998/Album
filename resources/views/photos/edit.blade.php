@extends('layout.main')

@section('content')
<section class="w-75 mx-auto">

    <form action="{{route('updatePhoto',$photo->id)}}" method="post">
        @csrf
        <label class="mt-3" for="nom">Nom</label><input class="form-control" type="text" name='nom'
            placeholder="Nom" value="{{$photo->nom}}">
        <label class="mt-3" for="img_path">Path</label><input class="form-control" type="text" name='img_path'
            placeholder="image path" value="{{$photo->img_path}}">
        <label class="mt-3" for="id_album">ID_Album</label>
        <select name="id_album" id="" class="form-control">
            @foreach ($albums as $album)
            @if ($album->id_album==$album->id)
            <option selected value="{{$album->id}}">{{$album->nom}}</option>
            @else
            <option value="{{$album->id}}">{{$album->nom}}</option>
            @endif
            @endforeach
        </select>
        <textarea name="description" class="my-4 w-100" id="" cols="30" rows="10">{{$photo->img_path}}</textarea>
        <button type="submit" class="btn btn-primary mt-2">Edit Photo</button>
    </form>
</section>
@endsection
