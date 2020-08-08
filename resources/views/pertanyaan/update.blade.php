@extends('default')


@section('konten')
    <div class="container p-5">
        <div class="card mx-auto d-block col-md-8">
            <div class="card-header">
                <h4 class="text-center">
                    Update Pertanyaan
                </h4>
            </div>
            <div class="card-body mx-auto ">
            <form action="{{route('pertanyaan.update', $pertanyaan->id)}}" method="post">
            @csrf
            @method('put')
                <div class="form-group">
                    <label for="user_id" class="form-control-label"></label>Nama Anda :
                    <select name="user_id" id="user_id" class="form-control">
                        @foreach ($user as $users)
                    <option value="{{$users->id}}" {{$users->id === $pertanyaan->user_id ? 'selected' : ''}}>{{$users->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label for="judul" class="form-control-label"></label>Judul :
                <input type="text" class="form-control" name="judul" id="nama" value="{{$pertanyaan->judul}}">
                </div>
                <div class="form-group">
                    <label for="isi" class="form-control-label"></label>Isi :
                <textarea name="isi" class="form-control" id="isi" cols="30" rows="5">{{$pertanyaan->judul}}</textarea>
                </div>

                <button class="btn btn-primary left">Tanyakan</button>
            </form>
            </div>
        </div>
    </div>
@endsection