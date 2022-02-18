<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Berita <i class="mdi mdi-chevron-double-right"></i><a href="">Artikel dan Opini</a>
    </h3>
  </div>
<div>
<div class="row">
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Artikel Dan Opini Berita</h6>
        <botton class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exmpleModal" id="#myBtn"> PERINGATAN </botton>
        <a href="{{ route('admin.addartikel') }}" class="btn btn-sm btn-success"><i class="mdi mdi-plus-box"></i> Tambah </a>
      </div>
      @if (session()->has('message'))
          <div class="alert alert-success" style="margin-top:30px;">
            {{ session('message') }}
          </div>
      @endif
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush" id="dataTable">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Editor</th>
              <th>Kategori</th>
              <th>Komentar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Editor</th>
              <th>Kategori</th>
              <th>Komentar</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
                 @foreach ($artikels as $no => $artikel)
            <tr>
              <td>{{$no + $artikels ->firstItem() }}</td>
              <td><img src="{{asset('assets/images/artikel')}}/{{$artikel->image }}" style="width: 60px; border-radius: 1px;"></td>
              <td>{{$artikel->name}}</td>
              <td>{{$artikel->penulis->name}}</td>
              <td>{{$artikel->editor}}</td>
              <td>{{$artikel->kategori->name}}</td>
              <td>{{$artikel->komentar}}</td>
              <td>
                  <a href="{{route('admin.editartikel',['artikel_slug'=>$artikel->slug])}}" class="btn btn-sm btn-outline-primary"> Edit</a> 
                  <botton onclick="confirm('serius ingin menghapus artikel Berita ....?') || event.stopImediatePropagation()" wire:click="delete({{ $artikel->id }})" class="btn btn-sm btn-outline-danger"> Hapus</botton>
              </td>
            </tr>
             @endforeach
          </tbody>
        </table>
        <nav class="courses-pagination mt-50">
              <ul class="pagination justify-content-lg-end justify-content-center">
                  <li class="page-item">

                      {{$artikels->links()}}
                  
                  </li>
              </ul>
          </nav>  <!-- courses pagination -->
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exmpleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0e5a12; color: white;">
                <h3 class="modal-title" id="exampleModalLabelLogout">Peringataan !!!</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="card-title" style="padding: 0.5rem; border: 2px solid #f2edf3;">
                  <h6 class="m-0 font-weight-bold" style="color: green;">
                      1.Hati-hati dalam meng KLIK tombol hapus Karena otomatis
                      <br><br>2. Usahakan Isi Semua Kolom Yang di sediakan
                      <br><br>3. Untuk from SLUG Dikosongkan Saja Karena Sudah otomatis DI generate dengan judul Berita </h6>
              </div>
            </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
              </div>
        </div>
    </div>
</div>
  <!-- <i class="mdi mdi-pencil-box-outline"></i>
  <i class="mdi mdi-delete"></i> -->