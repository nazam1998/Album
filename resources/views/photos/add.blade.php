@extends('layout.main')

@section('content')
<section class="w-75 mx-auto">

    <form action="{{route('savePhoto')}}" method="post">
        @csrf
        <label class="mt-3" for="nom">Nom</label><input class="form-control" type="text" name='nom' placeholder="Nom">
        <label class="mt-3" for="img_path">Path</label><input class="form-control" type="text" name='img_path'
            placeholder="image path">
        <label class="mt-3" for="id_album">ID_Album</label>
        <select name="id_album" id="" class="form-control">
            @foreach ($albums as $album)
            <option value="{{$album->id}}">{{$album->nom}}</option>
            @endforeach
        </select>
        <textarea name="description" class="my-4 w-100" id="" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-primary mt-2">Add Photo</button>
    </form>
</section>
@endsection
