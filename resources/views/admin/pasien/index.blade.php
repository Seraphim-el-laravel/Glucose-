<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/pasien/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>Tambah</a>

                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Konsultasi</th>
                        <th>Hasil Diagnosis</th>
                    </tr>

                    @foreach ($pasien as $item)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->jeniskelamin }}</td>
                        <td>{{ $item->tanggalkonsultasi }}</td>
                        <td>
                            @if($item->hasil_diagnosis)
                                <div class="text-wrap" style="max-width: 200px;">{{ $item->hasil_diagnosis }}</div>
                            @else
                                <span class="badge bg-secondary">Belum Diagnosis</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex">
                            <a href="/admin/pasien/{{ $item->id }}/edit" class="btn btn-info mr-2"><i class="fas fa-edit"></i> Edit</a>
                         <form action="/admin/pasien/{{ $item->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type= "submit" class = "btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                         </form>
                         </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>