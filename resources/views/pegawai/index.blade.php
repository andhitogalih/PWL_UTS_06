@extends('pegawai.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Pegawai Toko Berkah Nusantara</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('pegawai.create') }}"> Input Pegawai</a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>nip</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Gaji_Pokok</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pegawai as $pegawai)
        <tr>
            <td>{{ $pegawai->nip }}</td>
            <td>{{ $pegawai->nama }}</td>
            <td>{{ $pegawai->alamat }}</td>
            <td>{{ $pegawai->jabatan }}</td>
            <td>{{ $pegawai->gaji_pokok }}</td>
            <td>
                <form action="{{ route('pegawai.destroy',$pegawai->nip) }}" method="POST">

                    <a class="btn btn-info"
                        href="{{ route('pegawai.show',$pegawai->nip) }}">Show</a>
                    <a class="btn btn-primary"
                        href="{{ route('pegawai.edit',$pegawai->nip) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
{{-- {!! $pegawai->withQueryString()->links('pagination::bootstrap-5') !!} --}}
@endsection