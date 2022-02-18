<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-settings"></i>
      </span> Setting <i class="mdi mdi-chevron-double-right"></i><a href="">Slider Home</a>
    </h3>
  </div>
  <div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Kategori Berita</h6>
              <a href="{{ route('admin.addslider') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah </a>
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
                    <th>Nama Slider</th>
                    <th>Tentang</th>
                    <th>Tempat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Slider</th>
                    <th>Tentang</th>
                    <th>Tempat</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                       @foreach ($sliderhomes as $no => $sliderhome)
                  <tr>
                    <td>{{$no + $sliderhomes ->firstItem() }}</td>
                    <td><img src="{{asset('assets/images/artikel')}}/{{$sliderhome->image }}" style="width: 60px; border-radius: 1px;"></td>
                    <td>{{$sliderhome->name}}</td>
                    <td>{{$sliderhome->description}}</td>
                    <td>{{$sliderhome->tempat}}</td>
                    <td>
                        <button wire:click="edit({{ $sliderhome->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#kategoriModal"><i class="fa fa-edit"></i> Edit</button> 
                        <botton onclick="confirm('serius ingin menghapus sliderhome Berita ....?') || event.stopImediatePropagation()" wire:click="delete({{ $sliderhome->id }})" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</botton>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
               <nav class="courses-pagination mt-50">
                  <ul class="pagination justify-content-lg-end justify-content-center">
                      <li class="page-item">

                          {{$sliderhomes->links()}}
                      
                      </li>
                  </ul>
              </nav> 
            </div>
          </div>
        </div>
        <!-- DataTable with Hover -->
      </div>
      <div wire:ignore.self class="modal fade" id="kategoriModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #0e5a12; color: white;">
            <h5 class="modal-title" id="exampleModalLabelLogout">Edit sLIDER 8HOME</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           <form enctype="multipart/form-data">
            <div class="modal-body">  
              <div class="form-group">
                  <label for="validationServer01">Judul Slider</label>
                   <input type="hidden" wire:model="sliderhome_id">
                  <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Huruf Harus Kapital" required  wire:model="name" wire:keyup="generateSlug">
                  @error('name') <span class="text-danger">{{ $message }}</span>@enderror
              </div>
              <div class="form-group">
                  <label for="validationServer01">Slug</label>
                  <input type="text" class="form-control" id="validationServer01"placeholder="slug kosongkan saja karna otomatis" wire:model="slug">
                  @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
              </div>
              <div class="form-group">
                  <label for="validationServer01">Tempat</label>
                  <input type="text" class="form-control" id="validationServer01"placeholder="Lokasi Kegiatan" wire:model="tempat">
                  @error('tempat') <span class="text-danger">{{ $message }}</span>@enderror
              </div>
              <div class="form-group">
                  <label for="validationServer01">deskrisi pendek</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" placeholder="text Kecil saja" required  wire:model="description">
                  @error('description') <span class="text-danger">{{ $message }}</span>@enderror
              </div>
              <div class="form-group">
                  <label for="validationServer01">Deskripsi panjang</label>
                  <input type="text" class="form-control is-valid" placeholder="slug kosongkan saja karna otomatis" wire:model="content">
                  @error('content') <span class="text-danger">{{ $message }}</span>@enderror
              </div>
              <div class="form-group">
                  <label for="validationServer01">Gambar</label>
                  <input type="file" class="form-control is-valid" placeholder="slug kosongkan saja karna otomatis" wire:model="newimage">
                   @if($newimage)
                        <img src="{{$newimage->temporaryUrl()}}" width="120">
                    @else
                        <img src="{{asset('assets/images/artikel')}}/{{$image}}" width="120">
                    @endif 
                  @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" wire:click.prevent="cancel()" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
              <button wire:click.prevent="update()" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
  </div>
    </div>
  </div>
  
  <script type="text/javascript">
        window.livewire.on('sliderhomeStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>