@include('layouts.header')





@include('layouts.navbar')

<div class="content-wrapper">


    <div class="col-sm-6 mt-1">
        <h2>Setting</h2>

    </div>
    <br>
    <div class="content">
        <div class="card">
            <div class="card-body">


                <div class="container-wrapper">



                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                            <button class="btn btn-warning" type="submit"><i class="fas fa-sync-alt"></i></i>
                                Reset</button>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Video Aktif</label>
                            <div class="col-sm-10">
                                <div class="custom-control custom-switch custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Finger Print Aktif</label>
                            <div class="col-sm-10">
                                <div class="custom-control custom-switch custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Link Ke PCare</label>
                            <div class="col-sm-10">
                                <div class="custom-control custom-switch custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                    <label class="custom-control-label" for="customSwitch3"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10" style="text-align: center;">
                                <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Save</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper. Contains page content -->
@include('layouts.footer')
</body>