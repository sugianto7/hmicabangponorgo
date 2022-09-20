<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">

            <div class="col-lg-7">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Profil Pengguna</h6>
                    </div>
                     @if (Session::has('message'))
                            <script>
                                swal("Great Job!","{!! Session::get('message') !!}","success",{
                                  button:"OK",
                                })
                            </script>
                          @endif

                        <div class="row">                   
                            <div class="card-body">   
                            <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Foto Pengguna :</label>
                                      <div class="col-sm-8">
                                        <div class="nav-profile-img">
                                          <img src="{{asset('assets/images/artikel')}}/{{Auth::user()->profile_photo_path}}" alt="{{Auth::user()->name}}" width="234" height="auto" class="text-center">
                                          <span class="availability-status online"></span>
                                        </div>
                                      </div>
                                </div> <br>                              
                                <div class="form-group row">
                                      <label  class="col-sm-4 col-form-label">Nama Pengguna :</label>
                                      <div class="col-sm-8">
                                        <input type="" class="form-control" readonly value="{{Auth::user()->name}}">                                      
                                      </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Email Pengguna :</label>
                                      <div class="col-sm-8">
                                        <input type="" class="form-control" readonly value="{{Auth::user()->email}}">
                                      </div>
                                </div>
                                <br>
                                
                            </div>
                        </div>
                        <div class="card-footer">  
                            <div class="form-group row">  
                                <button wire:click="edit({{ Auth::user()->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#userModal"><i class="fa fa-edit"></i> Edit Profil</button> 
                                <!-- <button type="submit" class="btn btn-outline-success">Edit Profil</button> -->
                               <!--  <a href="{{route('admin.artikel')}}" class="btn btn-outline-danger"  style="float: right;"><i class="fa fa-times"></i> Kembali</a> -->
                            </div>
                        </div>
                 
                </div>
            </div>
        </div>
        <div wire:ignore.self class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #0e5a12; color: white;">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Edit Akun Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validationServer01">Username</label>
                            <input type="hidden" wire:model="user_id">
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Username" required wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Email</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Email" required wire:model="email">
                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                        <label for="validationServer01">Gambar</label>
                        <input type="file" class="form-control is-valid" placeholder="jabatan" wire:model="newimage">
                        @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="120">
                            @else
                                <img src="{{asset('assets/images/artikel')}}/{{$profile_photo_path}}" width="120">
                            @endif 
                          @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <botton wire:click.prevent="update()" class="btn btn-primary">Simpan</botton>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</div>

  <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal2').modal('hide');
        });
</script>