@extends('app')

@section('title')
    Prestasi
@endsection

@section('content')

    <div class="container">
    <form action="{{route('prestasi.index')}}">
        <div class="row" style="margin-top:5rem">
            <div class="col-md-5">
                <input type="text" name="keyword" value="{{Request::get('keyword')}}" class="form-control" placeholder="Cari berdasarkan nama mahasiswa">
            </div>
            <div class="col-md-1">
                <button type="submit" class="primary-btn2">Cari</button>
            </div>
        </div>
    </form>

    <hr class="my-3">   

    <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
            </div>
    </div>

      <table class="table table-stripped">
        <thead>
            <tr>
                <th>Mahasiswa</th>
                <th>Predikat</th>
                <th>Tingkat</th>
                <th>Tahun</th>
                <th>Kegiatan</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
             @forelse ($prestasi as $item)
                <tr>
                    <td>{{ $item->mahasiswa }}</td>
                    <td>{{ $item->predikat }}</td>
                    <td>{{ $item->tingkat }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ $item->kegiatan }}</td>
                    <td><a href="{{route('prestasi.edit', ['id' => $item->id])}}" class="genric-btn primary btn-sm">Edit</a></td>
                    <td>
                        <form action="{{route('prestasi.destroy', ['prestasi' => $item->id])}}" method="POST" class="d-inline"
                            onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                        @csrf
                        <input type="hidden" value="DELETE" name="_method">
                        <input type="submit" value="Delete" class="genric-btn danger">
                        </form>
                    </td>
                </tr>    
            @empty
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="10">{{$prestasi->appends(Request::all())->links()}}</td>
            </tr>
        </tfoot>
      </table>
      <div class="row-mb-3">
        <div class="col-md-12 text-right" style="margin-bottom:5rem">
            <a href="{{route('prestasi.create')}}" class="primary-btn2 mb-3 mb-sm-0">Tambah Data</a>
        </div>
      </div>
    </div>

@endsection