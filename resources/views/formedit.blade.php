<x-app>
    <div class="mx-auto" style="width: 500px">
        <h4 class="m-0 text-center mb-2">Tambah Data Siswa</h4>
        <form action="/{{ $data->id }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="NIS" class="form-label">NIS</label>
                <input type="number" class="form-control" id="NIS" name="nis" value="{{ $data->nis }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="nama" value="{{ $data->nama }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Tempat, Tanggal Lahir</label>
                <input type="text" class="form-control" id="name" name="tetala" value="{{ $data->tetala }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
                        value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
                        value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="name" name="alamat" value="{{ $data->alamat }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">No. Telepon</label>
                <input type="text" class="form-control" id="name" name="no_telp" value="{{ $data->no_telp }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app>
