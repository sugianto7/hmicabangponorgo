<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-settings"></i>
      </span> Setting <i class="mdi mdi-chevron-double-right"></i><a href="">Priode Kepengurusan</a>
    </h3>
  </div>
  <div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Priode Pengurus Cabang</h6>
              <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exmpleModal" id="#myBtn"><i class="fa fa-plus"></i> Tambah </button>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success" style="margin-top:30px;">
                  {{ session('message') }}
                </div>
            @endif
            <div class="table-responsive p-3">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>No</th>
                    <th>Priode Kepengurusan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Priode Kepengurusan</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                       @foreach ($priodes as $no => $p)
                  <tr>
                    <td>{{$no + $priodes ->firstItem() }}</td>
                    <td>{{$p->name}}</td>
                    <td>
                        <button wire:click="edit({{ $p->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exmpleModal1"><i class="fa fa-edit"></i> Edit</button> 
                        <botton onclick="confirm('serius ingin menghapus p Berita ....?') || event.stopImediatePropagation()" wire:click="delete({{ $p->id }})" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</botton>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
               <nav class="courses-pagination mt-50">
                  <ul class="pagination justify-content-lg-end justify-content-center">
                      <li class="page-item">

                          {{$priodes->links()}}
                      
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
                            1. Tambahkan Priode Dengan Semestinya
                            <br><br>2. Untuk Nama sudah Ada jumlah Postingan dapat Di edit
                            <br><br>3. Tidak Perlu Meng8hapus Tabel No 1. </h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- DataTable with Hover -->
    </div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Gambar Struktur Pengurus Cabang</h6>
              <a href="/admin/struktur-kepengrusan" class="btn btn-sm btn-outline-danger"><i class="fa fa-plus"></i> Kembali </a>
              <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#exmpleModal2" id="#myBtn"><i class="fa fa-plus"></i> Tambah </button>
            </div>
            @if (session()->has('messages'))
                <div class="alert alert-success" style="margin-top:30px;">
                  {{ session('messages') }}
                </div>
            @endif
            <div class="table-responsive p-3">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Priode Kepengurusan</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Priode Kepengurusan</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                       @foreach ($imgs as $no => $img)
                  <tr>
                    <td>{{$no + $imgs ->firstItem() }}</td>
                    <td><img src="{{asset('assets/images/artikel')}}/{{$img->image }}" style="width: 60px; border-radius: 1px;"></td>
                    <td>{{$img->priode->name}}</td>
                    <td>{{$img->kategori->name}}</td>
                    <td>
                        <button wire:click="editImg({{ $img->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exmpleModal3"><i class="fa fa-edit"></i> Edit</button> 
                        <botton onclick="confirm('serius ingin menghapus p Berita ....?') || event.stopImediatePropagation()" wire:click="deleteImg({{ $img->id }})" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</botton>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
               <nav class="courses-pagination mt-50">
                  <ul class="pagination justify-content-lg-end justify-content-center">
                      <li class="page-item">

                          {{$imgs->links()}}
                      
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
                            1. Tambahkan Priode Dengan Semestinya
                            <br><br>2. Untuk Nama sudah Ada jumlah Postingan dapat Di edit
                            <br><br>3. Tidak Perlu Meng8hapus Tabel No 1. </h6>
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
                    <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Priode Kepengurusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validationServer01">Nama Pengurus</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Judul Tentang" required wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <botton wire:click.prevent="store()" class="btn btn-primary">Simpan</botton>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="exmpleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #0e5a12; color: white;">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Edit Priode Kepengurusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validationServer01">Nama Ketua Umum</label>
                            <input type="hidden" wire:model="priode_id">
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Judul Tentang" required wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
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
    <div wire:ignore.self class="modal fade" id="exmpleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #0e5a12; color: white;">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Sket Struktur Kepengurusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validationServer01">Gambar</label>
                            <input type="file" class="form-control is-valid" placeholder="jabatan" wire:model="image">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-form-label">Kategori</label>
                            <select class="form-control" wire:model="kategori_id">
                                <option value="0">Kategori</option>
                                @foreach ($categories as $kategori )
                                <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                @endforeach
                            </select>
                            @error('kategori_id') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-form-label">Priode</label>
                            <select class="form-control" wire:model="priode_id">
                                <option value="0">Priode</option>
                                @foreach ($priodes as $priode )
                                <option value="{{$priode->id}}">{{$priode->name}}</option>
                                @endforeach
                            </select>
                            @error('priode_id') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <botton wire:click.prevent="addImg()" class="btn btn-primary">Simpan</botton>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="exmpleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #0e5a12; color: white;">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Edit Priode Kepengurusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" wire:model="img_id">
                            <label for="validationServer01">Gambar</label>
                            <input type="file" class="form-control is-valid" placeholder="jabatan" wire:model="newimage">
                             @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="120">
                            @else
                                <img src="{{asset('assets/images/artikel')}}/{{$image}}" width="120">
                            @endif 
                          @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-form-label">Kategori</label>
                            <select class="form-control" wire:model="kategori_id">
                                <option value="{{$kategori->id}}">Kategori</option>
                                @foreach ($categories as $kategori )
                                <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                @endforeach
                            </select>
                            @error('kategori_id') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-form-label">Priode</label>
                            <select class="form-control" wire:model="priode_id">
                                <option value="{{$priode->id}}">Priode</option>
                                @foreach ($priodes as $priode )
                                <option value="{{$priode->id}}">{{$priode->name}}</option>
                                @endforeach
                            </select>
                            @error('priode_id') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <botton wire:click.prevent="updateImg()" class="btn btn-primary">Simpan</botton>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

  <script type="text/javascript">
        window.livewire.on('imgStore', () => {
            $('#exampleModal2').modal('hide');
        });
</script>
  <script type="text/javascript">
        window.livewire.on('priodeStore', () => {
            $('#exampleModal11').modal('hide');
        });
</script>