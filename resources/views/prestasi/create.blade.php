@extends('app')

@section('title')
    Tambah Prestasi
@endsection

@section('content')
<div class="container">
    <form action="{{route('prestasi.store')}}" method="POST" class="shadow-sm p-3 bg-white">
        @csrf
        <label for="mahasiswa">Mahasiswa</label> <br> 
        <input  type="text" value="{{old('mahasiswa')}}"
        class="form-control {{$errors->first('mahasiswa') ? "is-invalid": ""}}" 
        placeholder="Nama Mahasiswa" name="mahasiswa" id="">

        <div class="invalid-feedback">
            {{$errors->first('mahasiswa')}}
        </div> <br>

        <label for="predikat">Predikat</label> <br> 
        <select name="predikat" id="" class="form-control {{$errors->first('predikat') ? "is-invalid": ""}}" value="{{old('predikat')}}">
            <option value="" class="form-control">--Pilih Predikat--</option>
            <option value="Juara I" class="form-control">Juara I</option>
            <option value="Juara II" class="form-control">Juara II</option>
            <option value="Juara III" class="form-control">Juara III</option>
            <option value="Lainnya" class="form-control">Lainnya</option>
        </select> 
        <div class="invalid-feedback">
            {{$errors->first('predikat')}}
        </div> <br>
        <label for="tahun">Tahun</label> <br>
        <select name="tahun" id="" class="form-control {{$errors->first('tahun') ? "is-invalid": ""}}" value="{{old('tahun')}}">
            <option value="" >--Pilih Tahun--</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
        </select>
        <div class="invalid-feedback">
            {{$errors->first('tahun')}}
        </div><br>

        <label for="tingkat">Tingkat</label> <br> 
        <select name="tingkat" id="" class="form-control {{$errors->first('tingkat') ? "is-invalid": ""}}" value="{{old('tingkat')}}">
            <option value="" class="form-control">--Pilih Tingkat--</option>
            <option value="Universitas" class="form-control">Universitas</option>
            <option value="Kabupaten" class="form-control">Kabupaten</option>
            <option value="Provinsi" class="form-control">Provinsi</option>
            <option value="Nasional" class="form-control">Nasional</option>
            <option value="Internasional" class="form-control">Internasional</option>
            <option value="Lainnya" class="form-control">Lainnya</option>
        </select> 
        <div class="invalid-feedback">
            {{$errors->first('tingkat')}}
        </div> <br>

        <label for="kegiatan">Kegiatan</label> <br>
        <textarea name="kegiatan" id="" cols="30" rows="8" class="form-control {{$errors->first('kegiatan') ? "is-invalid": ""}}" value="{{old('kegiatan')}}"></textarea>
        <div class="invalid-feedback">
            {{$errors->first('kegiatan')}}
        </div> <br>
        <button type="submit" name="submit" class="primary-btn2 mb-3 mb-sm-0">Tambah</button>
    </form>    
</div>            
@endsection
