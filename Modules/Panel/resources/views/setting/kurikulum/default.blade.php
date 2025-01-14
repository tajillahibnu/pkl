<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h5>Data Sekolah</h5>
            </div>
            <div class="card-body">
                <form id="frmSekolah" class="row g-3" action="javascript:onSaveApp('frmSekolah')" method="post">
                    <div class="col-12">
                        <label class="form-label" for="sekolah_name">Nama Sekolah</label>
                        <input class="form-control" id="sekolah_name" name="sekolah_name" type="text" placeholder="Nama Sekolah" aria-label="Nama sekolah" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="sekolah_npsn">NPSN (Nomor Pokok Sekolah Nasional)</label>
                        <input class="form-control" id="sekolah_npsn" name="sekolah_npsn" type="text" placeholder="Nomor Pokok Sekolah Nasional" aria-label="NPSN" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="sekolah_tipe">Jenjang Pendidikan</label>
                        <select class="form-select" id="sekolah_tipe" name="sekolah_tipe" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option>SD</option>
                            <option>SMP</option>
                            <option>SMA</option>
                            <option>SMK</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title">Status Sekolah</h6>
                            <div class="radio-form">
                                <div class="form-check">
                                    <input class="form-check-input" id="sekolah_status_negeri" type="radio" name="sekolah_status" value="negeri" required="">
                                    <label class="form-check-label" for="sekolah_status_negeri">Negeri</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="sekolah_status_swasta" type="radio" name="sekolah_status" value="swasta" required="">
                                    <label class="form-check-label" for="sekolah_status_swasta">Swasta</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title">Akreditasi Sekolah</h6>
                            <div class="radio-form">
                                <div class="form-check">
                                    <input class="form-check-input" id="sekolah_akreditasi_A" type="radio" name="sekolah_akreditasi" value="A" required="">
                                    <label class="form-check-label" for="sekolah_akreditasi_A">A</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="sekolah_akreditasi_B" type="radio" name="sekolah_akreditasi" value="B" required="">
                                    <label class="form-check-label" for="sekolah_akreditasi_B">B</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="sekolah_akreditasi_C" type="radio" name="sekolah_akreditasi" value="C" required="">
                                    <label class="form-check-label" for="sekolah_akreditasi_C">C</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="sekolah_akreditasi_D" type="radio" name="sekolah_akreditasi" value="D" required="">
                                    <label class="form-check-label" for="sekolah_akreditasi_D">D</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="sekolah_akreditasi_na" type="radio" name="sekolah_akreditasi" value="na" required="">
                                    <label class="form-check-label" for="sekolah_akreditasi_na">Tidak Terakreditasi</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary d-block ms-auto" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h5>Data KBM</h5>
            </div>
            <div class="card-body custom-input">
                <form id="frmKBM" class="row g-3" action="javascript:onSaveApp('frmKBM')" method="post">
                    <div class="col-12">
                        <label class="form-label" for="tahun_pelajaran">Tahun Pelajaran</label>
                        <select class="form-select" id="tahun_pelajaran" name="tahun_pelajaran" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="semester_active">Semester</label>
                        <input class="form-control" id="semester_active" name="semester_active" type="text" placeholder="Nama Singkat Aplikasi" required="">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary d-block ms-auto" type="submit">Submit</button>
                        <!-- <button class="btn btn-primary" type="submit">Submit</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h5>Alamat Sekolah</h5>
            </div>
            <div class="card-body custom-input">
                <form id="frmAlamat" class="row g-3" action="javascript:onSaveApp('frmAlamat')" method="post">
                    <div class="col-12">
                        <label class="form-label" for="sekolah_prov">Provinsi</label>
                        <input class="form-control" id="sekolah_prov" name="sekolah_prov" type="text" placeholder="Nama Provinsi" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="sekolah_kota">Kabupaten/Kota</label>
                        <input class="form-control" id="sekolah_kota" name="sekolah_kota" type="text" placeholder="Nama Singkat Aplikasi" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="sekolah_kec">Kecamatan</label>
                        <input class="form-control" id="sekolah_kec" name="sekolah_kec" type="text" placeholder="Kecamatan" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="sekolah_kodepos">Kode Pos</label>
                        <input class="form-control" id="sekolah_kodepos" name="sekolah_kodepos" type="text" placeholder="Kode POS" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="sekolah_alamat">Alamat Lengkap</label>
                        <textarea class="form-control" id="sekolah_alamat" name="sekolah_alamat" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary d-block ms-auto" type="submit">Submit</button>
                        <!-- <button class="btn btn-primary" type="submit">Submit</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>