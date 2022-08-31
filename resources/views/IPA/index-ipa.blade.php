
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
                </span> Metode IPA (Importance Performance Analysis)
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
                            <th> Kepuasan </th>
                            <th> Kepentingan </th>
                            <th> Total </th>
                            <th> Rata-rata </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> A1 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,2 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,3 </td>
                            <td> 90 </td>
                            <td> 32,344343434 </td>
                          </tr>
                          <tr>
                            <td> 2 </td>
                            <td> A2 </td>
                            <td> 5,3,4,2,1,4,4,4,2,4,4 </td>
                            <td> 2,1,4,5,2,3,1,3,4,2,2 </td>
                            <td> 90 </td>
                            <td> 32,344343434 </td>
                          </tr>
                          <tr>
                            <td> 3 </td>
                            <td> A3 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,3 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,2 </td>
                            <td> 90 </td>
                            <td> 32,344343434 </td>
                          </tr>
                         
                          </tr>
                        </tbody>
                      </table>
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