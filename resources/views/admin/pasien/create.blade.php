<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">


                @isset($pasien)
                <form action="/admin/pasien/{{ $pasien->id }}" method="POST">
                    @method('PUT')
                @else            
                <form action="/admin/pasien" method="POST">
                @endisset
                    @csrf



                   <div class="form-group">
                        <label for="">Nama </label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror " name="nama"  placeholder="Nama"
                        value="{{ isset($pasien) ? $pasien->nama : old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ isset($pasien) ? $pasien->email : old('email') }}" placeholder="Email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror">
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ (isset($pasien) && $pasien->jeniskelamin == 'Laki-laki') || old('jeniskelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ (isset($pasien) && $pasien->jeniskelamin == 'Perempuan') || old('jeniskelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>

                         @error('jenikkelamin')
                            <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="">Tanggal Konsultasi</label>
                        <input type="date" class="form-control @error('tanggalkonsultasi') is-invalid @enderror" 
                        name="tanggalkonsultasi"  
                        value="{{ isset($pasien) ? $pasien->tanggalkonsultasi : old('tanggalkonsultasi') }}">
                        @error('tanggalkonsultasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    

                    <a href="/admin/pasien" class="btn btn-info"><i class="fas fa-arrow-left"></i>Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>