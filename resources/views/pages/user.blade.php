<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- {{ var_dump($aja['image']) }}
    {{ var_dump($data_sharing) }} --}}
    <h1>{{ $data_sharing['image'] }}</h1>
    {{-- @foreach ($data_sharing as $item)
        <ol>
            <li>{{ $item->id }}</li>
            <li>{{ $item->title }}</li>
            <li>{{ $item->id_kategori }}</li>
            <li>{{ $item->image }}</li>
            <li>{{ $item->deskripsi }}</li>
            <li>{{ $item->jadwal_sharing }}</li> --}}
    {{-- <li>INDEX = {{ $loop->index }}</li>
            <li>ID = {{ $jadwalSharing->id }}</li>
            <li>Title = {{ $jadwalSharing->title }}</li>
            <li>Deskripsi = {{ $jadwalSharing->deskripsi }}</li>
            <li>Jadwal = {{ $jadwalSharing->jadwal_sharing }}</li>
            <li>Image = <img src="{{ asset('FrontEnd-Himti-master/' . $jadwalSharing->image) }}" alt=""
                    height="336" width="306" class="img-fluid"></li>
            <li>ID Kategori = {{ $jadwalSharing->id_kategori }}</li> --}}

    {{-- <li>ID = {{ $artikel->id }}</li>
            <li>Title = {{ $artikel->title }}</li>
            <li>Deskripsi = {{ $artikel->deskripsi }}</li>
            <li>Image = <img src="{{ asset('FrontEnd-Himti-master/' . $artikel->image) }}" alt="" height="336"
                    width="306" class="img-fluid"></li>
            <li>ID Kategori = {{ $artikel->id_kategori }}</li> --}}

    {{--
        </ol>
    @endforeach --}}
</body>

</html>
