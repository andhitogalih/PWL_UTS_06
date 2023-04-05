@extends('pegawai.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Pegawai
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your i
                        nput.<br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('pegawai.update', $Pegawai->nip) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nim">Nip</label>
                        <input type="text" name="nim" class="form-control" id="nim" value="{{ $Pegawai->nip }}"
                            aria-describedby="nim">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $Pegawai->nama }}"
                            aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" name="alamat" class="form-control" id="alamat"
                            value="{{ $Pegawai->alamat}}" aria-describedby="alamat">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="jabatan" name="jabatan" class="form-control" id="jabatan"
                            value="{{ $Pegawai->jabatan }}" aria-describedby="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="gaji_pokok">Gaji_Pokok</label>
                        <input type="gaji_pokok" name="gaji_pokok" class="form-control" id="gaji_pokok"
                            value="{{ $Pegawai->gaji_pokok }}" aria-describedby="gaji_pokok">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
