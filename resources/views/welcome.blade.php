<div class="modal fade" id="smallModal1" tabindex="-1"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" role="document">
                                                            <form action="/index/tambahprofil/foto_sekolah" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel2">
                                                                            Edit Atau Tambah Profil</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col mb-3">
                                                                                <label for="nameSmall"
                                                                                    class="form-label">Foto
                                                                                    Sekolah</label>
                                                                                <input type="file" id="nameSmall"
                                                                                    class="form-control"
                                                                                    placeholder="Enter Name" name="foto_sekolah">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-label-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
