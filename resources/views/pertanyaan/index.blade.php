@extends('default')

@section('konten')
    <div class="container">
        <div class="p-5">
            <table class="table table-bordered text-center">
                <thead>
                    <th>#</th>
                    <th>UserName</th>
                    <th>Judul</th>
                    <th>action</th>
                </thead>
                <tbody>
                    
                        @forelse ($pertanyaan as $p => $pertanyaann)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$pertanyaann->user->nama}}</td>
                            <td>{{$pertanyaann->judul}}</td>
                            <td>
                                <a href="{{route('pertanyaan.show', $pertanyaann->id)}}" class="btn btn-primary">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="{{route('pertanyaan.update', $pertanyaann->id)}}" class="btn btn-info">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            <form action="{{route('pertanyaan.destroy', $pertanyaann->id)}}" method="post" class="d-inline">
                                @csrf 
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection