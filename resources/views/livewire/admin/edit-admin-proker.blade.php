<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Profil <i class="mdi mdi-chevron-double-right"></i><a href="">Program Kerja</a>
    </h3>
  </div>
<div>
    <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Proker </h6>
                        <a href="{{ route('admin.proker') }}" class="btn btn-sm btn-success">All Proker </a>
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
                                <div class="card-body" style="padding-bottom: 4px;">                                  
                                    <div class="form-group row">
                                      <label  class="col-sm-3 col-form-label">Jenis Kegiatan</label>
                                      <div class="col-sm-9">
                                        <input type="" class="form-control" placeholder="Judul Brita"  wire:model="name">
                                        @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                      </div>
                                    </div>
                                </div>                                                              
                            </div>  
                            <div class="col-lg-6">
                                <div class="card-body" style="padding-bottom: 4px;">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Bulan</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" wire:model="hari_id">
                                                <option value="0">Bulan</option>
                                                @foreach ($haris as $hari )
                                                <option value="{{$hari->id}}">{{$hari->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('hari_id') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-body"  style="padding-top: 4px;">
                                    <div class="form-group row" wire:ignore>
                                        <label class="col-sm-3 col-form-label">Program Kerja</label>
                                        <div class="col-sm-12">
                                            <textarea type="text" input="description" id="summernote" class="form-control summernote">{{ $description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">  
                                <button type="submit" class="btn btn-outline-success">Simpan</button>
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
      placeholder:" Program Kerja",
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

