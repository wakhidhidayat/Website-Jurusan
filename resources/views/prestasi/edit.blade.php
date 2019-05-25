@extends('app')

@section('title')
    Edit Prestasi
@endsection

@section('content')
<div class="container">
    <form action="{{route('prestasi.update', ['id' => $prestasi->id])}}" method="POST" class="shadow-sm p-3 bg-white">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <label for="mahasiswa">Mahasiswa</label> <br> 
        <input value="{{old('mahasiswa') ? old('mahasiswa') : $prestasi->mahasiswa}}" 
        class="form-control {{$errors->first('mahasiswa') ? "is-invalid" : ""}}" type="text" 
        placeholder="Nama Mahasiswa" name="mahasiswa" id="">
        <div class="invalid-feedback">
            {{$errors->first('mahasiswa')}}
        </div><br>

        <label for="predikat">Predikat</label> <br> 
        <select name="predikat" value="{{old('predikat') ? old('predikat') : $prestasi->predikat}}" 
            class="form-control {{$errors->first('predikat') ? "is-invalid" : ""}}" >
            <option value="" class="form-control">--Pilih Predikat--</option>
            <option value="Juara I" class="form-control" {{$prestasi->predikat == 'Juara I' ? ' selected="selected"' : '' }}>Juara I</option>
            <option value="Juara II" class="form-control" {{$prestasi->predikat == 'Juara II' ? ' selected="selected"' : '' }}>Juara II</option>
            <option value="Juara III" class="form-control" {{$prestasi->predikat == 'Juara III' ? ' selected="selected"' : '' }}>Juara III</option>
            <option value="Lainnya" class="form-control" {{$prestasi->predikat == 'Lainnya' ? ' selected="selected"' : '' }}>Lainnya</option>
        </select> 
        <div class="invalid-feedback">
            {{$errors->first('predikat')}}
        </div>        <br>

        <label for="tahun">Tahun</label> <br>
        <select name="tahun" value="{{old('tahun') ? old('tahun') : $prestasi->tahun}}" 
                class="form-control {{$errors->first('tahun') ? "is-invalid" : ""}}" >
            <option value="" >--Pilih Tahun--</option>
            <option value="2010" {{$prestasi->tahun == '2010' ? ' selected="selected"' : '' }}>2010</option>
            <option value="2011" {{$prestasi->tahun == '2011' ? ' selected="selected"' : '' }}>2011</option>
            <option value="2012" {{$prestasi->tahun == '2012' ? ' selected="selected"' : '' }}>2012</option>
            <option value="2013" {{$prestasi->tahun == '2013' ? ' selected="selected"' : '' }}>2013</option>
            <option value="2014" {{$prestasi->tahun == '2014' ? ' selected="selected"' : '' }}>2014</option>
            <option value="2015" {{$prestasi->tahun == '2015' ? ' selected="selected"' : '' }}>2015</option>
            <option value="2016" {{$prestasi->tahun == '2016' ? ' selected="selected"' : '' }}>2016</option>
            <option value="2017" {{$prestasi->tahun == '2017' ? ' selected="selected"' : '' }}>2017</option>
            <option value="2018" {{$prestasi->tahun == '2018' ? ' selected="selected"' : '' }}>2018</option>
            <option value="2019" {{$prestasi->tahun == '2019' ? ' selected="selected"' : '' }}>2019</option>
        </select>
        <div class="invalid-feedback">
                {{$errors->first('tahun')}}
            </div>        <br>

        <label for="tingkat">Tingkat</label> <br>
        <select name="tingkat" id="" class="form-control {{$errors->first('tingkat') ? "is-invalid": ""}}" value="{{old('tingkat') ? old('tingkat') : $prestasi->tingkat}}">
            <option value="" class="form-control">--Pilih Tingkat--</option>
            <option value="Universitas" {{$prestasi->tingkat == 'Universitas' ? ' selected="selected"' : '' }} class="form-control">Universitas</option>
            <option value="Kabupaten" {{$prestasi->tingkat == 'Kabupaten' ? ' selected="selected"' : '' }} class="form-control">Kabupaten</option>
            <option value="Provinsi" {{$prestasi->tingkat == 'Provinsi' ? ' selected="selected"' : '' }} class="form-control">Provinsi</option>
            <option value="Nasional" {{$prestasi->tingkat == 'Nasional' ? ' selected="selected"' : '' }} class="form-control">Nasional</option>
            <option value="Internasional" {{$prestasi->tingkat == 'Internasional' ? ' selected="selected"' : '' }} class="form-control">Internasional</option>
            <option value="Lainnya" {{$prestasi->tingkat == 'Lainnya' ? ' selected="selected"' : '' }} class="form-control">Lainnya</option>
        </select> 
        <div class="invalid-feedback">
            {{$errors->first('tingkat')}}
        </div> <br>

        <label for="kegiatan">Kegiatan</label> <br>
        <textarea name="kegiatan" cols="30" rows="8" class="form-control {{$errors->first('kegiatan') ? "is-invalid": ""}}" >{{old('kegiatan') ? old('kegiatan') : $prestasi->kegiatan}}</textarea>
        <div class="invalid-feedback">
            {{$errors->first('kegiatan')}}
        </div> <br>        
        <button type="submit" name="submit" class="primary-btn2 mb-3 mb-sm-0">Ubah</button>
    </form>
</div>            
@endsection
