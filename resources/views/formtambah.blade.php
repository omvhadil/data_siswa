<x-app>
    <div class="mx-auto" style="width: 500px">
        <h4 class="m-0 text-center mb-2">Tambah Data Siswa</h4>
        <form action="/" method="post">
            @csrf
            <div class="mb-3">
                <label for="NIS" class="form-label">NIS</label>
                <input name="nis" type="number" class="form-control" id="NIS" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Tempat, Tanggal Lahir</label>
                <input name="tetala" type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
                        value="Laki-laki">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
                        value="Perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">No. Telepon</label>
                <input name="no_telp" type="text" class="form-control" id="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app>
