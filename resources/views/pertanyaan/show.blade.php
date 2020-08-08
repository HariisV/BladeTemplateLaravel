@extends('default')

@section('konten')

    <div class="container p-5">
        <table class="table table-bordered">
          @foreach($item as $items)
                <tr>
                    <th>ID</th>
                    <td>{{$items->id}}</td>
            </tr>
            <tr>
                <th>User Name</th>
                <td>{{$items->user->nama}}</td>
            </tr>
            <tr>
                <th>Judul</th>
                <td>{{$items->judul}}</td>
            </tr>
            <tr>
                <th width="150px">ISI</th>
                <td>
                    {{$items->isi}}
                </td>
            </tr>
            <tr>
                <th>Aksi</th>
                <td>
                    <a href="" class="btn btn-primary ">
                        <i class="fas fa-undo"></i>
                    </a>
                            <a href="{{route('pertanyaan.edit', $items->id)}}" class="btn btn-info col-md-5">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                            <form action="{{route('pertanyaan.destroy', $items->id)}}" method="post" class="d-inline " >
                                @csrf 
                            @method('delete')
                            <button class="btn btn-danger col-md-5">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                </td>
            </tr>
          @endforeach
        </table>
    </div>
@endsection