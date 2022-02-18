<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Profil <i class="mdi mdi-chevron-double-right"></i><a href="">Program Kerja</a>
    </h3>
  </div>
<div>
  <div class="row">
            <!-- Datatables -->
        <div class="col-lg-8">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Proker Cabang</h6>
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
                        <th>Name</th>
                        <th>Bulan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Bulan</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                           @foreach ($prokers as $no=>$proker)
                      <tr>
                        <td>{{$no + $prokers ->firstItem() }}</td>
                        <td>{{$proker->name}}</td>
                        <td>{{$proker->hari->name}}</td>
                        <td>
                          <a href="{{route('admin.editproker',['proker_name'=>$proker->name])}}" class="btn btn-sm btn-outline-primary"> Edit</a> 
                            <botton onclick="confirm('serius ingin menghapus Proker Cabang ....?') || event.stopImediatePropagation()" wire:click="delete({{ $proker->id }})" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</botton>
                        </td>
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                  <nav class="courses-pagination mt-50">
                      <ul class="pagination justify-content-lg-end justify-content-center">
                          <li class="page-item">

                              {{$prokers->links()}}
                          
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
                            1. Untuk Nama Yang sudah Ada jumlah Postingan jangan Dihapus Karena Telah di Relasikan dengan Menu Lainya 
                            yang dapat menyebabkan eror 
                            <br><br>2. Untuk Nama dan Gambar Yang sudah Ada jumlah Postingan dapat Di edit
                            <br><br>3. jika Belum Ada Penulis Di tabel Bisa Melakukan Tambah Data </h6>
                    </div>
                </div>
            </div>
          </div>
        <div class="col-lg-8">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Agenda HMI Cabang Kedepan</h6>
                  <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exmpleModal2" id="#myBtn"><i class="fa fa-plus"></i> Tambah </button>
              </div>
              @if (session()->has('messag'))
              <div class="alert alert-success" style="margin-top:30px;">x
                  {{ session('messag') }}</div>
                @endif
              <div class="table-responsive p-3">
                  <table class="table table-bordered" id="dataTable">
                    <thead class="thead-dark">
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                           @foreach ($kegiatan as $no=>$kg)
                      <tr>
                        <td>{{$no + $kegiatan ->firstItem() }}</td>
                        <td>{{$kg->name}}</td>
                        <td>{{$kg->tanggal}}</td>
                        <td>{{$kg->waktu}}</td>
                        <td>{{$kg->tempat}}</td>
                        <td>
                         <button wire:click="edit({{ $kg->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exmpleModal3"><i class="fa fa-edit"></i> Edit</button> 
                            <botton onclick="confirm('serius ingin menghapus kg Cabang ....?') || event.stopImediatePropagation()" wire:click="delete({{ $kg->id }})" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</botton>
                        </td>
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                  <nav class="courses-pagination mt-50">
                      <ul class="pagination justify-content-lg-end justify-content-center">
                          <li class="page-item">

                              {{$prokers->links()}}
                          
                          </li>
                      </ul>
                  </nav> 
                </div>
              </div>
            </div>
            <!-- DataTable with Hover -->
          </div>
          <!--Row-->
                                
          <!-- Modal Logout -->
          <div wire:ignore.self class="modal fade" id="exmpleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #0e5a12; color: white;">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Proker</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="form-group">
                      <label for="validationServer01">Nama Proker</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Proker name" required wire:model="name">
                      @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="validationServer01">Bulan</label>
                        <select class="form-control" wire:model="hari_id">
                            <option value="0">Bulan</option>
                            @foreach ($haris as $hari )
                            <option value="{{$hari->id}}">{{$hari->name}}</option>
                            @endforeach
                        </select>
                        @error('kategori_id') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <div class="form-group">
                          <label>Proker</label>
                          <textarea type="text" input="description" class="form-control summernote" wire:model="description"></textarea>
                          @error('description') <span class="text-danger">{{ $message }}</span>@enderror
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
          <div wire:ignore.self class="modal fade" id="exmpleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #0e5a12; color: white;">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Agenda Kegiatan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="form-group">
                      <label for="validationServer01">Nama Kegiatan</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Kegiatan name" required wire:model="name">
                      @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                  <div class="form-group">
                      <label for="validationServer01">Tangal</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Tangal" required wire:model="tanggal">
                      @error('tanggal') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                  <div class="form-group">
                      <label for="validationServer01">Waktu</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Waktu" required wire:model="waktu">
                      @error('waktu') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                  <div class="form-group">
                      <label for="validationServer01">Tempat</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Tempat" required wire:model="tempat">
                      @error('tempat') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <botton wire:click.prevent="storeK()" class="btn btn-primary">Simpan</botton>
                </div>
              </form>
              </div>
            </div>
          </div>
          <div wire:ignore.self class="modal fade" id="exmpleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #0e5a12; color: white;">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Edit Agenda Kegiatan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="form-group">
                      <label for="validationServer01">Nama Kegiatan</label>
                      <input type="hidden" wire:model="kegiatan_id">
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Kegiatan name" required wire:model="name">
                      @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                  <div class="form-group">
                      <label for="validationServer01">Tangal</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Tangal" required wire:model="tanggal">
                      @error('tanggal') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                  <div class="form-group">
                      <label for="validationServer01">Waktu</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Waktu" required wire:model="waktu">
                      @error('waktu') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                  <div class="form-group">
                      <label for="validationServer01">Tempat</label>
                      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Tempat" required wire:model="tempat">
                      @error('tempat') <span class="text-danger">{{ $message }}</span>@enderror
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
  window.livewire.on('prokerStore', () => {
    $('#exampleModal').modal('hide');
  });
</script>