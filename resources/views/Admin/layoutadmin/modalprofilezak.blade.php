<div class="modal fade" id="smallModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/foto_sekolah" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Foto
                                Sekolah</label>
                            <input type="file" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="foto_sekolah">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/nama_sekolah" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Nama
                                Sekolah</label>
                            <input type="text" value="{{$profil->nama_sekolah}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="nama_sekolah">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/npsn" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">NPSN</label>
                            <input type="text" value="{{$profil->npsn}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="npsn">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal4" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/desa" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Desa</label>
                            <input type="text" value="{{$profil->desa}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="desa">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal5" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/kecamatan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Kecamatan</label>
                            <input type="text" value="{{$profil->kecamatan}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="kecamatan">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal6" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/daerah" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Daerah</label>
                            <input type="text" value="{{$profil->daerah}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="daerah">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal7" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/provinsi" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Provinsi</label>
                            <input type="text" value="{{$profil->provinsi}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="provinsi">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal8" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/kode_pos" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Kode Pos</label>
                            <input type="text" value="{{$profil->kode_pos}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="kode_pos">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal9" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/alamat" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Alamat</label>
                            <input type="text" value="{{$profil->alamat}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="alamat">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal10" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/no_telp" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">No Telepon</label>
                            <input type="text" value="{{$profil->no_telp}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="no_telp">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal11" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/email" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Email</label>
                            <input type="text" value="{{$profil->email}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="email">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal12" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/kegiatan_pembelajaran" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">kegiatan Pembelajaran</label>
                            <input type="text" value="{{$profil->kegiatan_pembelajaran}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="kegiatan_pembelajaran">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal13" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/waktu_penyelenggaraan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Waktu Penyelenggaraan</label>
                            <input type="text" value="{{$profil->waktu_penyelenggaraan}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="waktu_penyelenggaraan">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal14" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/jarak_ke_pusat_kecamatan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Jarak Ke Pusat Kecamatan</label>
                            <input type="text" value="{{$profil->jarak_ke_pusat_kecamatan}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="jarak_ke_pusat_kecamatan">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal15" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/jarak_ke_pusat_daerah" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Jarak Ke Pusat Daerah</label>
                            <input type="text" value="{{$profil->jarak_ke_pusat_daerah}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="jarak_ke_pusat_daerah">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal16" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/tahun_berdiri" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Tahun Berdiri</label>
                            <input type="text" value="{{$profil->tahun_berdiri}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="tahun_berdiri">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal17" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/penerbit_SK" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Penerbit SK</label>
                            <input type="text" value="{{$profil->penerbit_SK}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="penerbit_SK">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal18" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/sk_pendirian_sekolah" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Sk Pendirian Sekolah</label>
                            <input type="text" value="{{$profil->sk_pendirian_sekolah}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="sk_pendirian_sekolah">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal19" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/status_sekolah" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Status Sekolah</label>
                            <input type="text" value="{{$profil->status_sekolah}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="status_sekolah">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal20" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/kurikulum" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Kurikulum</label>
                            <input type="text" value="{{$profil->kurikulum}}" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="kurikulum">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal21" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/status_bos" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Status Bos</label>
                            <input type="file" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="status_bos">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="smallModal22" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="/index/tambahprofil/sumber_listrik" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                        Edit Atau Tambah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Sumber Listrik</label>
                            <input type="file" id="nameSmall" class="form-control" placeholder="Enter Name"
                                name="sumber_listrik">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

