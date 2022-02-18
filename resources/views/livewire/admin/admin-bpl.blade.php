<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-face-profile"></i>
      </span> BPL HMI <i class="mdi mdi-chevron-double-right"></i><a href="">Struktur Kepengurusan</a>
    </h3>
  </div>
  <div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">BPL HMI Cabang Ponorogo</h6>
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
                    <th>Nama BPL</th>
                    <th>Jabatan Pengurus</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama BPL</th>
                    <th>Jabatan Pengurus</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                       @foreach ($bpls as $no => $bpl)
                  <tr>
                    <td>{{$no + $bpls ->firstItem() }}</td>
                    <td><img src="{{asset('assets/images/artikel')}}/{{$bpl->image }}" style="width: 60px; border-radius: 1px;"></td>
                    <td>{{$bpl->name}}</td>
                    <td>{{$bpl->jabatan}}</td>
                    <td>{{$bpl->ket}}</td>
                    <td>
                        <button wire:click="edit({{ $bpl->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exmpleModal1"><i class="fa fa-edit"></i> Edit</button> 
                        <botton onclick="confirm('serius ingin menghapus p Berita ....?') || event.stopImediatePropagation()" wire:click="delete({{ $bpl->id }})" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</botton>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
               <nav class="courses-pagination mt-50">
                  <ul class="pagination justify-content-lg-end justify-content-center">
                      <li class="page-item">

                          {{$bpls->links()}}
                      
                      </li>
                  </ul>
              </nav> 
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Struktur Pengurus BPL Cabang</h6>
              <a href="/admin/priode" class="btn btn-sm btn-success" ><i class="fa fa-plus"></i> Tambah </a>
            </div>
            <div class="table-responsive p-3">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Priode</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Priode</th>
                  </tr>
                </tfoot>
                <tbody>
                       @foreach ($penguruse as $no => $p)
                  <tr>
                    <td>{{$no++}}</td>
                    <td><img src="{{asset('assets/images/artikel')}}/{{$p->image }}" style="width: 60px; border-radius: 1px;"></td>
                    <td>{{$p->priode->name }}</td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- DataTable with Hover -->
      </div>
    <div wire:ignore.self class="modal fade" id="exmpleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #0e5a12; color: white;">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Tentang bpl</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validationServer01">Nama Pengurus BPL HMI</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Judul Tentang" required wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Jabatan Pengurus</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder="Jabatan" wire:model="jabatan" >
                            @error('jabatan') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Keterangan Jabatan</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder="Keterangan Jabatan bpl" wire:model="ket" >
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
                            <label for="validationServer01">Nama Pengurus BPL HMI</label>
                            <input type="hidden" wire:model="bpl_id">
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Judul Tentang" required wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Jabatan Pengrurus</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder="jabatan" wire:model="jabatan" >
                            @error('jabatan') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Keterangan Jabatan</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder="Keterangan Jabatan bpl" wire:model="ket" >
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
        window.livewire.on('sliderhomeStore', () => {
            $('#exampleModal').modal('hide');
        });
</script>