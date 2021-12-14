@extends('template.backend.main')

@section('title')
    <i class="fa fa-calendar" aria-hidden="true"></i> Data Mahasiswa
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              <span class="title">Data Mahasiswa</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i>&nbsp;Tambah</button>
                        <br><br>
                    </div>
                    <div class="col-lg-12">
                        <table id="table-support" width="100%" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $val)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $val->name }}</td>
                                    <td>{{ $val->email }}</td>
                                    <td>{{ $val->password_real }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-info" data-item="{{json_encode($val)}}" onclick="edit(this)"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="hapus('{{$val->name}}')"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Menambah Mahasiswa Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-id" method="POST" action="">
                @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="input4">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Nomor Induk Mahasiswa">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Telepon</label>
                            <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Agama</label>
                            <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Alamat</label>
                            <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Tahun Angkatan</label>
                            <input type="text" class="form-control" name="tahun_angkatan" id="tahun_angkatan" placeholder="Tahun Angkatan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Kewarganegaraan</label>
                            <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Kewarganegaraan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Program Studi</label>
                            <input type="text" class="form-control" name="program_studi" id="program_studi" placeholder="Program Studi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Program Kuliah</label>
                            <input type="text" class="form-control" name="program_kuliah" id="program_kuliah" placeholder="Program Kuliah">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Jenjang</label>
                            <input type="text" class="form-control" name="jenjang" id="jenjang" placeholder="Jenjang">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Status Mahasiswa</label>
                            <input type="text" class="form-control" name="status_mahasiswa" id="status_mahasiswa" placeholder="Status Mahasiswa">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Upload Foto</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="customFile" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit -->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mengubah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-id" method="POST" action="">
                @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="input4">Nama</label>
                            <input type="text" class="form-control" id="e_nama" placeholder="Nama" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">NIM</label>
                            <input type="text" class="form-control" id="e_nim" placeholder="Nomor Induk Mahasiswa">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Email</label>
                            <input type="text" class="form-control" id="e_email" placeholder="Email" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Telepon</label>
                            <input type="text" class="form-control" id="e_telepon" placeholder="Telepon">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="e_jenis_kelamin" placeholder="Jenis Kelamin">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Agama</label>
                            <input type="text" class="form-control" id="e_agama" placeholder="Agama">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Tempat Lahir</label>
                            <input type="text" class="form-control" id="e_tempat_lahir" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="e_tanggal_lahir" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Alamat</label>
                            <textarea type="text" class="form-control" id="e_alamat" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Tahun Angkatan</label>
                            <input type="text" class="form-control" id="e_tahun_angkatan" placeholder="Tahun Angkatan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Kewarganegaraan</label>
                            <input type="text" class="form-control" id="e_kewarganegaraan" placeholder="Kewarganegaraan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Program Studi</label>
                            <input type="text" class="form-control" id="e_program_studi" placeholder="Program Studi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Jurusan</label>
                            <input type="text" class="form-control" id="e_jurusan" placeholder="Jurusan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Program Kuliah</label>
                            <input type="text" class="form-control" id="e_program_kuliah" placeholder="Program Kuliah">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Jenjang</label>
                            <input type="text" class="form-control" id="e_jenjang" placeholder="Jenjang">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Status Mahasiswa</label>
                            <input type="text" class="form-control" id="e_status_mahasiswa" placeholder="Status Mahasiswa">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input4">Upload Foto</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="e_customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Simpan</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#table-support').DataTable();
    });

    function hapus(nama)
    {
        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Data Mahasiswa atas nama "+nama+"",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
        })
    }

    function edit(obj)
    {
        let item = $(obj).data('item');
        console.log(item);

        $('#modal-edit').modal('show');
    }
</script>
@endsection