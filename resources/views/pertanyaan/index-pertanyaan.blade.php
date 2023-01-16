
<!DOCTYPE html>
<html lang="en">
  {{-- head --}}
  @include('custom.head')
  <body>
    <div class="container-scroller">
      {{-- navbar --}}
      @include('custom.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        {{-- sidebar --}}
        @include('custom.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-twitch"></i>
                </span> Pertanyaan
                <br>
                <br>
                <a href="pertanyaan/tambah-pertanyaan"><button type="button" class="btn btn-gradient-primary btn-rounded btn-fw">Tambah Pertanyaan</button></a>
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    {{-- <h4 class="card-title">Inverse table</h4>
                    <p class="card-description"> Add class <code>.table-dark</code>
                    </p> --}}
                   
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Kode Pertanyaan </th>
                          <th> Pertanyaan </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>

                        @php $no = 1; @endphp

                        @forelse($pertanyaan as $key => $row)

                        <tr>
                          <td> {{ $no++ }} </td>
                          <td> {{ $row->kode }} </td>
                          <td> {{ $row->pertanyaan }} </td>
                          <td>
                            <a href="{{ route('editPertanyaan', $row->id) }}"><label class="badge badge-info">Edit</label></a>
                            <a href="{{ route('hapusPertanyaan', $row->id) }}"><label class="badge badge-danger">Hapus</label></a>
                          </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data</td>
                        </tr>
                    @endforelse
                          
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
   
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('custom.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('custom.plugin')
  </body>
</html>