<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Berita <i class="mdi mdi-chevron-double-right"></i><a href="">Artikel dan Opini</a>
    </h3>
    </nav>
  </div>
<div>
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Artikel</h6>
                        <a href="{{ route('admin.artikel') }}" class="btn btn-sm btn-success">All Berita </a>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success" style="margin-top:30px;">
                          {{ session('message') }}
                        </div>
                    @endif
                    <form enctype="multipart/form-data" wire:submit.prevent="addBlog">
                         <div class="row">                   
                            <div class="col-lg-6">    
                              <!-- Horizontal Form -->
                                <div class="card-body">                                  
                                    <div class="form-group row">
                                      <label  class="col-sm-3 col-form-label">Judul Berita</label>
                                      <div class="col-sm-9">
                                        <input type="" class="form-control" placeholder="Judul Brita"  wire:model="name" wire:keyup="generateSlug">
                                        @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">slug</label>
                                      <div class="col-sm-9">
                                        <input type="" class="form-control" placeholder="slug"wire:model="slug">
                                            @error('slug') <p class="text-danger">{{$message}}</p> @enderror
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
                                    <div class="form-group">
                                        <div class="form-group row">
                                            <label  class="col-sm-3 col-form-label">Penulis Berita</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model="penulis_id">
                                                    <option value="0">Penulis Berita</option>
                                                    @foreach ($penulises as $penulis )
                                                    <option value="{{$penulis->id}}">{{$penulis->name}}</option>
                                                    @endforeach 
                                                </select>
                                                @error('penulis_id') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Kategori Berita</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model="kategori_id">
                                                    <option value="0">Kategori</option>
                                                    @foreach ($categories as $kategori )
                                                    <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('kategori_id') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Editor</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Editor" wire:model="editor">
                                                @error('editor') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Link Youtube</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Link Youtube" wire:model="status">
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
                                            <textarea type="text" input="description" id="summernote" class="form-control summernote" wire:model="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">  
                            <button type="submit" class="btn btn-outline-success">Simpan</button>
                            <a href="{{route('admin.artikel')}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-times"></i> Kembali</a>
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