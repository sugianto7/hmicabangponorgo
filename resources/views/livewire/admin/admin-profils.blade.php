<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-face-profile"></i>
      </span> Profil <i class="mdi mdi-chevron-double-right"></i><a href="">Profil</a>
    </h3>
  </div>
  <div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Tentang Ketua Umum</h6>
              <a href="{{ route('admin.addprofil') }}" class="btn btn-sm btn-success"><i class="mdi mdi-plus-box"></i> Tambah </a>
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
                    <th>Nama Profil</th>
                    <th>Link Youtub</th>
                    <th>Link Web</th>
                    <th>Link wa</th>
                    <th>Link Ig</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Profil</th>
                    <th>Link Youtub</th>
                    <th>Link Web</th>
                    <th>Link wa</th>
                    <th>Link Ig</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                       @foreach ($profile as $no => $pr)
                  <tr>
                    <td>{{$no + $profile ->firstItem() }}</td>
                    <td><img src="{{asset('assets/images/artikel')}}/{{$pr->image }}" style="width: 60px; border-radius: 1px;"></td>
                    <td>{{$pr->name}}</td>
                    <td>{{$pr->fb}}</td>
                    <td>{{$pr->web}}</td>
                    <td>{{$pr->wa}}</td>
                    <td>{{$pr->ig}}</td>
                    <td>
                        <a href="{{route('admin.editprofil',['profil_id'=>$pr->id])}}" class="btn btn-sm btn-outline-primary"> Edit</a> 
                        <botton onclick="confirm('serius ingin menghapus pr Berita ....?') || event.stopImediatePropagation()" wire:click="delete({{ $pr->id }})" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</botton>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
               <nav class="courses-pagination mt-50">
                  <ul class="pagination justify-content-lg-end justify-content-center">
                      <li class="page-item">

                          {{$profile->links()}}
                      
                      </li>
                  </ul>
              </nav> 
            </div>
          </div>
        </div>
        <!-- DataTable with Hover -->
      </div>

  </div>
</div>
  