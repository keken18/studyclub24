<h2>Daftar Kategori</h2>
<td>
        <form action="{{route('kategori.create') }}" method="post">
        @csrf @method('tambahkategori')
        <button type="submit">Tambah Kategori</button>
        </form>
        </td>
<table border="1" cellspacing="0" width="100%">
    <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Keterangan</th>
        <th>Detail</th>
        <th>Hapus</th>
    </tr>

    @foreach ($kategori as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->nama_kategori}}</td>
        <td>{{$data->deskripsi}}</td>
        <td>
            <form action="{{route('kategori.show', $data->id) }}">
            <button type="submit">Detail</button>
            </form>
        </td>
        <td>
            <form action="{{route('kategori.destroy', $data->id) }}" method="post">
            @csrf @method('delete')
            <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
