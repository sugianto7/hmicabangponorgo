<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Berita <i class="mdi mdi-chevron-double-right"></i><a href="">Sliderhome</a>
    </h3>
  </div>
<div>
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Slider home</h6>
                        <a href="{{ route('admin.slider') }}" class="btn btn-sm btn-success">All slider </a>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success" style="margin-top:30px;">
                          {{ session('message') }}
                        </div>
                    @endif
                    <form enctype="multipart/form-data" wire:submit.prevent="addSlider">
                         <div class="row">                   
                            <div class="col-lg-6">    
                              <!-- Horizontal Form -->
                                <div class="card-body">                                  
                                    <div class="form-group row">
                                      <label  class="col-sm-3 col-form-label">Judul Slider home</label>
                                      <div class="col-sm-9">
                                        <input type="" class="form-control" placeholder="Judul Slider Huruf Harus Kapital"  wire:model="name" wire:keyup="generateSlug">
                                        @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Gambar</label>
                                        <div class="col-sm-9">
                                        <input type="file" class="form-control" placeholder="Gambar" wire:model="image">
                                        @if($image)
                                  <img src="{{$image->temporaryUrl()}}" width="120">
                                      @endif
                                      @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>                                  
                                </div>
                            </div>
                             
                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">slug</label>
                                      <div class="col-sm-9">
                                        <input type="" class="form-control" placeholder="slug"wire:model="slug">
                                            @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                                      </div>
                                    </div>
                                     <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Lokasi</label>
                                      <div class="col-sm-9">
                                      <input type="text" class="form-control" id="validationServer01"placeholder="Lokasi Kegiatan" wire:model="tempat">
                                      @error('tempat') <span class="text-danger">{{ $message }}</span>@enderror
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Deskripsi pendek</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="Deskripsi pendek"  wire:model="description">
                                            @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row" wire:ignore>
                                        <label class="col-sm-3 col-form-label">Deskripsi Panjang</label>
                                        <div class="col-sm-12" >
                                            <textarea type="text" input="content" id="summernote" class="form-control summernote" wire:model="content"></textarea>
                                        </div>
                                        @error('content') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">  
                            <button type="submit" class="btn btn-outline-success">Simpan</button>
                            <a href="{{route('admin.slider')}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-times"></i> Kembali</a>
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
          @this.set('content', contents);
      }
  }
  });
</script>
@endpush