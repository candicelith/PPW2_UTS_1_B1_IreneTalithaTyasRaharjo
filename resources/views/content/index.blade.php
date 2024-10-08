@extends('layout.headerFooter')

@section('content')
<section class="bg-dark p-5 text-light">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemain</th>
                <th>Nomor Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pemain as $index => $pemain)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->nomor_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
