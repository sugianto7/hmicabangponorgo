<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-face-profile"></i>
      </span> Profil <i class="mdi mdi-chevron-double-right"></i><a href="#">Galeri Kegiatan</a>
    </h3>
  </div>
  <div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Galeri Kegiatan</h6>
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
                    <th>Gambar</th>
                    <th>Nama Kegiatan</th>
                    <th>Tempat Kegitan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Kegiatan</th>
                    <th>Tempat Kegitan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                       @foreach ($galeries as $no => $galeri)
                  <tr>
                    <td>{{$no + $galeries ->firstItem() }}</td>
                    <td><img src="{{asset('assets/images/artikel')}}/{{$galeri->image }}" style="width: 60px; border-radius: 1px;"></td>
                    <td>{{$galeri->name}}</td>
                    <td>{{$galeri->tempat}}</td>
                    <td>{{$galeri->ket}}</td>
                    <td>
                        <button wire:click="edit({{ $galeri->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exmpleModal1"><i class="fa fa-edit"></i> Edit</button> 
                        <botton onclick="confirm('serius ingin menghapus p Berita ....?') || event.stopImediatePropagation()" wire:click="delete({{ $galeri->id }})" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</botton>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
               <nav class="courses-pagination mt-50">
                  <ul class="pagination justify-content-lg-end justify-content-center">
                      <li class="page-item">

                          {{$galeries->links()}}
                      
                      </li>
                  </ul>
              </nav> 
            </div>
          </div>
        </div>
        <!-- DataTable with Hover -->
      </div>
    <div wire:ignore.self class="modal fade" id="exmpleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #0e5a12; color: white;">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Tentang Ketua Umum</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validationServer01">Nama Kegiatan</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nama Kegiatan" required wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Tempat Kegiatan</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder=")Tempat Kegiatan" wire:model="tempat" >
                            @error('tempat') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Keterangan Kegiatan</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder=")Keterangan Kegiatan" wire:model="ket" >
                            @error('ket') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Gambar</label>
                            <input type="file" class="form-control is-valid" placeholder="jabatan" wire:model="image">
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
                    <h5 class="modal-title" id="exampleModalLabelLogout">Edit Tentang Ketua Umum</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validationServer01">Nama Kegiatan</label>
                            <input type="hidden" wire:model="galeri_id">
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nama Kegiatan" required wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Tempat kegiatan</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder="tempat Kegiatan" wire:model="tempat" >
                            @error('tempat') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Keterangan Kegiatan</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder="Keterangan Kegiatan" wire:model="ket" >
                            @error('ket') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Gambar</label>
                            <input type="file" class="form-control is-valid" placeholder="slug" wire:model="newimage">
                        </div>
                        @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="120">
                            @else
                                <img src="{{asset('assets/images/artikel')}}/{{$image}}" width="120">
                            @endif 
                          @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
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
        window.livewire.on('galeriesStore', () => {
            $('#exampleModal').modal('hide');
        });
</script>