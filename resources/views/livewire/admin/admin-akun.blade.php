<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-settings"></i>
      </span> Setting <i class="mdi mdi-chevron-double-right"></i><a href="">Akun Pengguna</a>
    </h3>
  </div>
  <div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Akun Pengguna</h6>
              <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exmpleModal" id="#myBtn"><i class="fa fa-plus"></i> Ganti Password Admin </button>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success" style="margin-top:30px;">
                  {{ session('message') }}
                </div>
            @endif
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
            <div class="table-responsive p-3">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                @foreach ($users as $no => $user)
                  <tr>
                    <td>{{$no + $users ->firstItem() }}</td>
                    <td><img src="{{asset('assets/images/artikel')}}/{{$user->profile_photo_path}}"></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <button wire:click="edit({{ $user->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exmpleModal1"><i class="fa fa-edit"></i> Edit</button> 
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
               <nav class="courses-pagination mt-50">
                  <ul class="pagination justify-content-lg-end justify-content-center">
                      <li class="page-item">
                          {{$users->links()}}
                      </li>
                  </ul>
              </nav> 
            </div>
          </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">PERINGATAN</h3>
                </div>
                <div class="card-body" style="padding: 0.5rem;">
                    <div class="card-title" style="padding: 0.5rem; border: 2px solid #f2edf3;">
                        <h6 class="m-0 font-weight-bold" style="color: green;">
                            1. Tidak Ada Tombol akun 
                            <br><br>2. Untuk Nama Foto dan Email dapat Di edit dengan <b style="color: red;">Klik Tombol Edit</b>
                            <br><br>3. jik admin Ingin mengubah passwordnya sendiri Silahkan <b style="color: red;">Klik Tombol Ganti Password Admin</b><br><br>
                            1. Tabel Akan otomatis bertambah jika pengguna baru mendaftarkan akunya di web hmi cabang ponorogo<br><br>
                            1. Admin hanya bisa mengubah nama, gambar dan email pengguna baru  </h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- DataTable with Hover -->
    </div>
    <div wire:ignore.self class="modal fade" id="exmpleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #0e5a12; color: white;">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Edit Akun Password Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validationServer01">Password Lama</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Password Lama" required wire:model="current_password">
                            @error('current_password') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Password Baru</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Password Baru" required wire:model.defer="password">
                            @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Password konfirmasi</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder=" Password Ulangi" required wire:model="password_confirmation">
                            @error('password_confirmation') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <botton wire:click.prevent="changePassword()" class="btn btn-primary">Simpan</botton>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="exmpleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
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