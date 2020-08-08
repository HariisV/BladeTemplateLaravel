@extends('default')


@section('konten')
    <div class="container p-5">
        <div class="card mx-auto d-block col-md-8">
            <div class="card-header">
                <h4 class="text-center">
                    Tambah Pertanyaan
                </h4>
            </div>
            <div class="card-body mx-auto ">
            <form action="{{route('pertanyaan.store')}}" method="post">
            @csrf
                
                <div class="form-group">
                    <label for="user_id" class="form-control-label"></label>Nama Anda :
                    <select name="user_id" id="user_id" class="form-control">
                      @foreach ($data as $user)
                         <option value="{{$user->id}}">{{$user->id}} - {{$user->nama}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="judul" class="form-control-label"></label>Judul :
                    <input type="text" class="form-control" name="judul" id="nama">
                </div>
                <div class="form-group">
                    <label for="isi" class="form-control-label"></label>Isi :
                   <textarea name="isi" class="form-control" id="isi" cols="30" rows="5"></textarea>
                </div>

                <button class="btn btn-primary left">Tanyakan</button>
            </form>
            </div>
        </div>
    </div>
@endsection