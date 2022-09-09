
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
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Kode Pertanyaan </th>
                          <th> Tingkat Kepentingan (Hi) </th>
                          <th> Tingkat Kinerja (Ki) </th>
                          <th> Tingkat Kesesuaian (Tki) % </th>
                          <th> Rata-rata Hi(Yi) </th>
                          <th> Rata-rata Ki(Xi) </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> T1 </td>
                          <td> 68 </td>
                          <td> 75 </td>
                          <td> 110,29 </td>
                          <td> 3,24 </td>
                          <td> 3,75 </td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td> T2 </td>
                          <td> 78 </td>
                          <td> 70 </td>
                          <td> 115,29 </td>
                          <td> 4,24 </td>
                          <td> 3,75 </td>
                        </tr>
                        <tr>
                          <td> 3 </td>
                          <td> T3 </td>
                          <td> 68 </td>
                          <td> 75 </td>
                          <td> 110,29 </td>
                          <td> 3,24 </td>
                          <td> 3,75 </td>
                        </tr>
                        <tr>
                          <td> 4 </td>
                          <td> T4 </td>
                          <td> 78 </td>
                          <td> 70 </td>
                          <td> 115,29 </td>
                          <td> 4,24 </td>
                          <td> 3,75 </td>
                        </tr>
                        <tr>
                          <td> 5 </td>
                          <td> T5 </td>
                          <td> 68 </td>
                          <td> 75 </td>
                          <td> 110,29 </td>
                          <td> 3,24 </td>
                          <td> 3,75 </td>
                        </tr>
                        <tr>
                          <td> 6 </td>
                          <td> T6 </td>
                          <td> 78 </td>
                          <td> 70 </td>
                          <td> 115,29 </td>
                          <td> 4,24 </td>
                          <td> 3,75 </td>
                        </tr>
                        <tr>
                          <td> 7 </td>
                          <td> T7 </td>
                          <td> 78 </td>
                          <td> 70 </td>
                          <td> 115,29 </td>
                          <td> 4,24 </td>
                          <td> 3,75 </td>
                        </tr>
                        <tr>
                          <td> 8 </td>
                          <td> T8 </td>
                          <td> 68 </td>
                          <td> 75 </td>
                          <td> 110,29 </td>
                          <td> 3,24 </td>
                          <td> 3,75 </td>
                        </tr>
                        <tr>
                          <td> 9 </td>
                          <td> R1 </td>
                          <td> 78 </td>
                          <td> 70 </td>
                          <td> 115,29 </td>
                          <td> 4,24 </td>
                          <td> 3,75 </td>
                        </tr>
                        
                        <tr>
                          <td> 10 </td>
                          <td> R2 </td>
                          <td> 78 </td>
                          <td> 70 </td>
                          <td> 115,29 </td>
                          <td> 4,24 </td>
                          <td> 3,75 </td>
                        </tr>
                        <tr>
                          <td> 11 </td>
                          <td> R3 </td>
                          <td> 68 </td>
                          <td> 75 </td>
                          <td> 110,29 </td>
                          <td> 3,24 </td>
                          <td> 3,75 </td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>    
        </div>

        <!-- main-panel ends -->
      </div>
      @include('custom.footer')  

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  </body>
  @include('custom.plugin')


</html>