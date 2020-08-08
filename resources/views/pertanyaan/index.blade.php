@extends('default')

@section('konten')
    <div class="container">
        <div class="p-5">
            <table class="table table-bordered text-center">
                <thead>
                    <th>#</th>
                    <th>UserName</th>
                    <th>Judul</th>
                    <th>Info</th>
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
                                
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection