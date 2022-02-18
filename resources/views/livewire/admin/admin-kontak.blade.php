<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-human-female"></i>
      </span> Kontak <i class="mdi mdi-chevron-double-right"></i><a href="">Aspirasi Masyarakat</a>
    </h3>
  </div>
  <div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-6">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Kontak Aspirasi Cabang</h6>
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Subjek</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Subjek</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                       @foreach ($kontaks as $no => $kontak)
                  <tr>
                    <td>{{$no + $kontaks ->firstItem() }}</td>
                    <td>{{$kontak->name}}</td>
                    <td>{{$kontak->email}}</td>
                    <td>{{$kontak->tlp}}</td>
                    <td>{{$kontak->subject}}</td>
                    <td>
                        <button wire:click="show({{ $kontak->id }})" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#exmpleModal"></i> Lihat</button> 
                        <botton onclick="confirm('serius ingin menghapus kONTAK ....?') || event.stopImediatePropagation()" wire:click="delete({{ $kontak->id }})" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</botton>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
               <nav class="courses-pagination mt-50">
                  <ul class="pagination justify-content-lg-end justify-content-center">
                      <li class="page-item">

                          {{$kontaks->links()}}
                      
                      </li>
                  </ul>
              </nav> 
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Alamat HMI CABANG PONOROGO</h6>
                      <!-- <a href="/admin/priode" class="btn btn-sm btn-success" ><i class="fa fa-plus"></i> Tambah </a> -->
            </div>
            @if (session()->has('message-kontak'))
                <div class="alert alert-success" style="margin-top:30px;">
                  {{ session('message-kontak') }}
                </div>
            @endif
            <div class="table-responsive p-3">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Kontak</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Kontak</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                       @foreach ($contacs as $no => $contc)
                  <tr>
                    <td>{{$no++}}</td>
                    <td><img src="{{asset('assets/images/artikel')}}/{{$contc->image }}" style="width: 60px; border-radius: 1px;"></td>
                    <td>{{$contc->name }}</td>
                    <td>{{$contc->alamat }}</td>
                    <td>{{$contc->email }}</td>
                    <td>{{$contc->tlp }}</td>
                    <td>
                        <button wire:click="edit({{ $contc->id }})" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exmpleModal1"><i class="fa fa-edit"></i> Edit</button> 
                    </td>
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
                    <h5 class="modal-title" id="exampleModalLabelLogout">Dartar Kontak Aspirasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                                <table>
                                     <tbody>
                                           <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td> {{$kontak->name}} </td>
                                           </tr>
                                           <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td> {{$kontak->email}} </td>
                                           </tr>
                                           <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td> {{$kontak->alamat}} </td>
                                           </tr>
                                           <tr>
                                                <td>No HP</td>
                                                <td>:</td>
                                                <td> {{$kontak->tlp}} </td>
                                           </tr>
                                           <tr>
                                                <td>Subject</td>
                                                <td>:</td>
                                                <td> {{$kontak->subject}} </td>
                                           </tr>
                                           <tr>
                                                <td>Pesan</td>
                                                <td>:</td>
                                                <td> {{$kontak->pesan}} </td>
                                           </tr>
                                     </tbody>
                                </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="exmpleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #0e5a12; color: white;">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Edit Alamat Sekretariatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validationServer01">Nama Kontak</label>
                            <input type="hidden" wire:model="kontak_id">
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nama Kontak" required wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Alamat</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder="alamat" wire:model="alamat" >
                            @error('alamat') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Email</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder="Email" wire:model="email" >
                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">NO HP</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"placeholder="NO tlpon" wire:model="tlp" >
                            @error('tlp') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Gambar</label>
                            <input type="file" class="form-control is-valid" placeholder="No HP" wire:model="newimage">
                            @error('newimage') <span class="text-danger">{{ $message }}</span>@enderror
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
<script type="text/javascript">
        window.livewire.on('Modalshow', () => {
            $('#exampleModal').modal('hide');
        });
</script>