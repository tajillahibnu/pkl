<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h5>Data Sekolah</h5>
            </div>
            <div class="card-body custom-input">
                <form id="frmSekolah" class="row g-3" action="javascript:onSaveApp('frmSekolah')" method="post">
                    <div class="col-12">
                        <label class="form-label" for="app_title">Nama Singkat Aplikasi</label>
                        <input class="form-control" id="app_title" name="app_title" type="text" placeholder="Nama Singkat Aplikasi" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="app_name">Nama Applikasi</label>
                        <input class="form-control" id="app_name" name="app_name" type="text" placeholder="Nama Aplikasi" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="app_deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="app_deskripsi" name="app_deskripsi" cols="30" rows="5"></textarea>
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
                <h5>SMTP Email</h5>
            </div>
            <div class="card-body custom-input">
                <form id="frmEmail" class="row g-3" action="javascript:onSaveApp('frmEmail')" method="post">
                    <div class="col-12">
                        <label class="form-label" for="email_address">Alamat Email</label>
                        <input class="form-control" id="email_address" name="email_address" type="email" placeholder="Alamat Email" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="email_name">Nama Email</label>
                        <input class="form-control" id="email_name" name="email_name" type="text" placeholder="Nama Email" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="email_port">Port Email</label>
                        <input class="form-control" id="email_port" name="email_port" type="text" placeholder="Port Email" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="email_username">User Name</label>
                        <input class="form-control" id="email_username" name="email_username" type="text" placeholder="No NPSN" required="">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="email_password">Password</label>
                        <input class="form-control" id="email_password" name="email_password" type="text" placeholder="No NPSN" required="">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary d-block ms-auto" type="submit">Submit</button>
                        <!-- <button class="btn btn-primary" type="submit">Submit</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12 d-none">
        <div class="card">
            <div class="card-header">
                <div class="header-top">
                    <h5 class="m-0">Projects Overview</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="nav flex-column nav-pills nav-secondary" id="ver-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="ver-pills-home-tab" data-bs-toggle="pill" href="#ver-pills-home" role="tab" aria-controls="ver-pills-home" aria-selected="true">Home</a>
                            <a class="nav-link" id="ver-pills-settings-tab" data-bs-toggle="pill" href="#ver-pills-settings" role="tab" aria-controls="ver-pills-settings" aria-selected="false">Settings</a>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="tab-content" id="ver-pills-tabContent">
                            <div class="tab-pane fade show active" id="ver-pills-home" role="tabpanel" aria-labelledby="ver-pills-home-tab">
                                <p>This is some placeholder content the<b>Home tab's</b>associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other<b>.nav</b>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="ver-pills-settings" role="tabpanel" aria-labelledby="ver-pills-settings-tab">
                                <p>This is some placeholder content the<b>Setting tab's</b>associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other<b>.nav</b>-powered navigation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>