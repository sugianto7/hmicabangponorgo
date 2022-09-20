<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-face-profile"></i>
      </span> Profil <i class="mdi mdi-chevron-double-right"></i><a href="">Add Profil Cabang</a>
    </h3>
    </nav>
  </div>
<div>
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Profil</h6>
                        <a href="{{ route('admin.profil') }}" class="btn btn-sm btn-success">All Profil </a>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success" style="margin-top:30px;">
                          {{ session('message') }}
                        </div>
                    @endif
                    <form enctype="multipart/form-data" wire:submit.prevent="update">
                         <div class="row">                   
                            <div class="col-lg-6">    
                              <!-- Horizontal Form -->
                                <div class="card-body">                                  
                                    <div class="form-group row">
                                      <label  class="col-sm-3 col-form-label">Name Profil</label>
                                      <div class="col-sm-9">
                                        <input type="" class="form-control" placeholder="Name Profil"  wire:model="name">
                                        @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Link Web Cabang</label>
                                      <div class="col-sm-9">
                                        <input type="" class="form-control" placeholder="Link Web Cabang"wire:model="web">
                                            @error('web') <p class="text-danger">{{$message}}</p> @enderror
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Gambar</label>
                                        <div class="col-sm-9">
                                        <input type="file" class="form-control" placeholder="Gambar" wire:model="newimage">
                                        @if($newimage)
                                            <img src="{{$newimage->temporaryUrl()}}" width="120">
                                        @else
                                            <img src="{{asset('assets/images/artikel')}}/{{$image}}" width="120">
                                        @endif 
                                      @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>                                  
                                </div>
                            </div>
                             
                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nomor Whatsapp</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Nomor Whatsapp" wire:model="wa">
                                                @error('wa') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Link Instagram</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Link Instagram" wire:model="ig">
                                                @error('ig') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Links Youtube</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Links Gmail" wire:model="fb">
                                                @error('fb') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Deskripsi pendek</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Deskripsi pendek"  wire:model="short_description">
                                        </div>
                                    </div>
                                    <div class="form-group row" wire:ignore>
                                        <label class="col-sm-3 col-form-label">Deskripsi Panjang</label>
                                        <div class="col-sm-12" >
                                            <textarea type="text" input="description" id="summernote" class="form-control summernote" wire:model="description">{{ $description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">  
                            <button type="submit" class="btn btn-outline-success">Simpan</button>
                            <a href="{{route('admin.profil')}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-times"></i> Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script type="text/javascript">
  $('.summernote').summernote({
      placeholder:" deskripsi Panjang",
      tabsize: 2,
      height: 200,
      callbacks: {
          onChange: function(contents, $editable) {
          @this.set('description', contents);
      }
  }
  });
</script>
@endpush