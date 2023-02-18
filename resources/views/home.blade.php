<x-app>
    <div class="d-flex w-100 mt-4 align-items-center">
        <h5 class="d-flex align-items-center m-0"><i class="ri-user-3-fill me-1"></i>Data Siswa</h5>
        <a href="/create" class=" ms-auto">
            <button class="btn btn-primary d-flex align-items-center"><i class="ri-add-line me-1"></i>Tambah</button>
        </a>
    </div>
    <hr>
    <div class="border">
        <div class="title 1-100 bg-primary text-white p-2">
            <p class="m-0">Data Siswa</p>
        </div>
        <div class="p-3">
            <div class="d-flex">
                <p class="m-0 d-flex align-items-center">Tampilkan
                    <select class="form-select mx-2" style="width: 70px;">
                        <option selected>5</option>
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>Data
                </p>
                <form class="d-flex ms-auto align-items-center" role="search">
                    <i class="ri-search-line me-2"></i>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat, Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $data)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->nis }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->tetala }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->no_telp }}</td>
                            <td class="d-flex gap-1">
                                <a href="/{{ $data->id }}">
                                    <button class="btn btn-success"><i class="ri-eye-close-line"></i></button>
                                </a>
                                <a href="/{{ $data->id }}/edit">
                                    <button class="btn btn-primary"><i class="ri-edit-box-line"></i></button>
                                </a>
                                <form onsubmit="return confirm('apakah anda yakin?')" action="/{{ $data->id }}"
                                    method="post">
                                    @csrf @method('delete')
                                    <button type="submit" class="btn btn-danger"><i
                                            class="ri-delete-bin-6-line"></i></button>
                                </form>
                            </td>
                        @empty
                            <p class="text-danger">Tidal ada data</p>

                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app>
