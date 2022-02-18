    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-7">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Password Pengguna</h6>
                    </div>
                @if (Session::has('password_succes'))
                    <div class="alert alert-success" style="margin-top:30px;" role="alert">
                      {{ Session::get('password_succes') }}
                    </div>
                @endif
                @if (Session::has('password_error'))
                    <div class="alert alert-danger" style="margin-top:30px;" role="alert">
                      {{ Session::get('password_error') }}
                    </div>
                @endif
                    <form enctype="multipart/form-data" wire:submit.prevent="changePassword">
                        <div class="row">                   
                            <div class="card-body">                                  
                                <div class="form-group row">
                                      <label  class="col-sm-4 col-form-label">Password Lama</label>
                                      <div class="col-sm-8">
                                        <input type="" class="form-control" placeholder="Password Lama"  wire:model="current_password">
                                        @error('current_password') <p class="text-danger">{{$message}}</p> @enderror
                                      </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Password Baru</label>
                                      <div class="col-sm-8">
                                        <input type="" class="form-control" placeholder="Password Baru"wire:model="password">
                                            @error('password') <p class="text-danger">{{$message}}</p> @enderror
                                      </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Konfirmasi Password Baru</label>
                                      <div class="col-sm-8">
                                        <input type="" class="form-control" placeholder="Konfirmasi Password Baru"wire:model="password_confirmation">
                                            @error('password_confirmation') <p class="text-danger">{{$message}}</p> @enderror
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">  
                            <div class="form-group row">  
                                <button type="submit" class="btn btn-outline-success">Simpan</button>
                                <a href="{{route('admin.artikel')}}" class="btn btn-outline-danger"  style="float: right;"><i class="fa fa-times"></i> Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>