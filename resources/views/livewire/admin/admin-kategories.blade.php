<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Berita <i class="mdi mdi-chevron-double-right"></i><a href="">Kategori</a>
    </h3>
  </div>
          <!-- Row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Kategori Berita</h6>
                      <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exmpleModal" id="#myBtn"><i class="fa fa-plus"></i> Tambah </button>
                </div>
                  @if (session()->has('message'))
                <div class="alert alert-success" style="margin-top:30px;">x
                      {{ session('message') }}</div>
                    @endif
                <div class="table-responsive p-3">
                    <table class="table table-bordered" id="dataTable">
                        <thead class="thead-dark">
                          <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                          </tr>
                        </tfoot>
                        <tbody>
                               @foreach ($kategoris as $no=>$kategori)
                          <tr>
                            <td>{{$no + $kategoris ->firstItem() }}</td>
                            <td>{{$kategori->name}}</td>
                            <td>{{$kategori->blog_count}}</td>
                            <td>
                                <button wire:click="edit({{ $kategori->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#kategoriModal"><i class="fa fa-edit"></i> Edit</button> 
                                <botton onclick="confirm('serius ingin menghapus kategori Berita ....?') || event.stopImediatePropagation()" wire:click="delete({{ $kategori->id }})" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</botton>
                            </td>
                          </tr>
                           @endforeach
                        </tbody>
                      </table>
                      <nav class="courses-pagination mt-50">
                          <ul class="pagination justify-content-lg-end justify-content-center">
                              <li class="page-item">

                                  {{$kategoris->links()}}
                              
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
                            1. Untuk Kategori No 1-4 jangan Dihapus Karena Telah di Relasikan dengan Menu Lainya 
                            yang dapat menyebabkan eror Namun Bisa Di Edit
                            <br><br>2. untuk Nomor 5 sampai dengan selanjutnya boleh di hapus
                            <br><br>3. jika Kategori Nama Tidak Ada Di tabel bisa di tambah Sesui Slera </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

           
          <!-- Modal Logout -->
        <div wire:ignore.self class="modal fade" id="kategoriModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #0e5a12; color: white;">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Edit Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form enctype="multipart/form-data">
                        <div class="modal-body">  
                            <div class="form-group">
                                  <label for="validationServer01">Nama Kategori</label>
                                   <input type="hidden" wire:model="kategori_id">
                                  <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Kategori name" required  wire:model="name" wire:keyup="generateSlug">
                                  @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                  <label for="validationServer01">Slug</label>
                                  <input type="text" class="form-control" id="validationServer01"placeholder="slug kosongkan saja karna otomatis" wire:model="slug">
                                  @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
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
        <div wire:ignore.self class="modal fade" id="exmpleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #0e5a12; color: white;">
                        <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="validationServer01">Nama Kategori</label>
                                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Kategori name" required wire:model="name" wire:keyup="generateSlug">
                                @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="validationServer01">Slug</label>
                                <input type="text" class="form-control is-valid" id="validationServer01"placeholder="slug kosongkan saja karna otomatis" wire:model="slug" >
                                @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
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
    </div>
<script type="text/javascript">
        window.livewire.on('kategoriStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>