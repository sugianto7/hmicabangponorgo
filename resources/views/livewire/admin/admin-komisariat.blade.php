<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-human-greeting"></i>
      </span> Komisariat <i class="mdi mdi-chevron-double-right"></i><a href="">Se Cabang Ponorogo</a>
    </h3>
  </div>
  <div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Komisariat Cabang Ponorogo</h6>
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
                    <th>Nama Komisariat</th>
                    <th>Link Whatshap</th>
                    <th>Link Instagram</th>
                    <th>Link Facebook</th>
                    <th>Link Website</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Komisariat</th>
                    <th>Whatshap</th>
                    <th>Instagram</th>
                    <th>Facebook</th>
                    <th>Website</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                       @foreach ($komisariats as $no => $komisariat)
                  <tr>
                    <td>{{$no + $komisariats ->firstItem() }}</td>
                    <td><img src="{{asset('assets/images/artikel')}}/{{$komisariat->image }}" style="width: 60px; border-radius: 1px;"></td>
                    <td>{{$komisariat->name}}</td>
                    <td>{{$komisariat->wa}}</td>
                    <td>{{$komisariat->ig}}</td>
                    <td>{{$komisariat->fb}}</td>
                    <td>{{$komisariat->web}}</td>
                    <td>
                        <button wire:click="edit({{ $komisariat->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exmpleModal1"><i class="fa fa-edit"></i> Edit</button> 
                        <botton onclick="confirm('serius ingin menghapus p Berita ....?') || event.stopImediatePropagation()" wire:click="delete({{ $komisariat->id }})" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</botton>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
               <nav class="courses-pagination mt-50">
                  <ul class="pagination justify-content-lg-end justify-content-center">
                      <li class="page-item">
                          {{$komisariats->links()}}
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
                    <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Komisariat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validationServer01">Nama Komisariat</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nama Komisariat" required wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Link Whatsapp</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder="Link Whatsa8pp" wire:model="wa" >
                            @error('wa') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Link Instagram</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder=" Link Instagram" wire:model="ig" >
                            @error('ig') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Link Website</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder=" Link Website" wire:model="web" >
                            @error('web') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Link Facebook</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder=" Link Facebook" wire:model="fb" >
                            @error('fb') <span class="text-danger">{{ $message }}</span>@enderror
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
                            <label for="validationServer01">Nama Komisariat</label>
                            <input type="hidden" wire:model="kohati_id">
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nama Komisariat" required wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Link Whatsapp</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder="Link Whatsa8pp" wire:model="wa" >
                            @error('wa') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Link Instagram</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder=" Link Instagram" wire:model="ig" >
                            @error('ig') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Link Website</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder=" Link Website" wire:model="web" >
                            @error('web') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Link Facebook</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder=" Link Facebook" wire:model="fb" >
                            @error('fb') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Gambar</label>
                            <input type="file" class="form-control is-valid" placeholder="jabatan" wire:model="newimage">
                        
                        @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="120">
                            @else
                                <img src="{{asset('assets/images/artikel')}}/{{$image}}" width="120">
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
        window.livewire.on('sliderhomeStore', () => {
            $('#exampleModal').modal('hide');
        });
</script>