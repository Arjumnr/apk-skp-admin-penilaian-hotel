
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
                </span> Metode CSI ( Customer Satisfaction Index )
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
                            <th> Kepentingan </th>
                            <th> Kinerja </th>
                            <th> MISi </th>
                            <th> MSSi </th>
                            <th> WF </th>
                            <th> WS </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> T1 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,1,3,2,4,5,2,3,4,2,4 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,4,3,2,2,3,4,1,1,3,2 </td>
                            <td> 3,4 </td>
                            <td> 3,75 </td>
                            <td> 4,75 </td>
                            <td> 17,79 </td>
                          </tr>
                          <tr>
                            <td> 2 </td>
                            <td> T2 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,1,3,2,4,5,2,3,4,2,4 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,4,3,2,2,3,4,1,1,3,2 </td>
                            <td> 3,4 </td>
                            <td> 3,75 </td>
                            <td> 4,75 </td>
                            <td> 17,79 </td>
                          </tr>
                          <tr>
                            <td> 3 </td>
                            <td> T3 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,1,3,2,4,5,2,3,4,2,4 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,4,3,2,2,3,4,1,1,3,2 </td>
                            <td> 3,4 </td>
                            <td> 3,75 </td>
                            <td> 4,75 </td>
                            <td> 17,79 </td>
                          </tr>
                          <tr>
                            <td> 4 </td>
                            <td> T4 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,1,3,2,4,5,2,3,4,2,4 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,4,3,2,2,3,4,1,1,3,2 </td>
                            <td> 3,4 </td>
                            <td> 3,75 </td>
                            <td> 4,75 </td>
                            <td> 17,79 </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> T5 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,1,3,2,4,5,2,3,4,2,4 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,4,3,2,2,3,4,1,1,3,2 </td>
                            <td> 4,4 </td>
                            <td> 3,75 </td>
                            <td> 4,75 </td>
                            <td> 17,79 </td>
                          </tr>
                          <tr>
                            <td> 6 </td>
                            <td> T6 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,1,3,2,4,5,2,3,4,2,4 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,4,3,2,2,3,4,1,1,3,2 </td>
                            <td> 3,6 </td>
                            <td> 3,7 </td>
                            <td> 4,75 </td>
                            <td> 15,79 </td>
                          </tr>
                          <tr>
                            <td> 7 </td>
                            <td> T7 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,1,3,2,4,5,2,3,4,2,4 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,4,3,2,2,3,4,1,1,3,2 </td>
                            <td> 4,4 </td>
                            <td> 3,75 </td>
                            <td> 4,75 </td>
                            <td> 10,79 </td>
                          </tr>
                          <tr>
                            <td> 8 </td>
                            <td> T8 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,1,3,2,4,5,2,3,4,2,4 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,4,3,2,2,3,4,1,1,3,2 </td>
                            <td> 4,4 </td>
                            <td> 3,75 </td>
                            <td> 4,75 </td>
                            <td> 12,79 </td>
                          </tr>
                          <tr>
                            <td> 9 </td>
                            <td> R1 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,1,3,2,4,5,2,3,4,2,4 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,4,3,2,2,3,4,1,1,3,2 </td>
                            <td> 4,4 </td>
                            <td> 3,75 </td>
                            <td> 4,75 </td>
                            <td> 14,79 </td>
                          </tr>
                          
                          <tr>
                            <td> 10 </td>
                            <td> R2 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,1,3,2,4,5,2,3,4,2,4 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,4,3,2,2,3,4,1,1,3,2 </td>
                            <td> 4,4 </td>
                            <td> 3,75 </td>
                            <td> 3,75 </td>
                            <td> 16,7 </td>
                          </tr>
                          <tr>
                            <td> 11 </td>
                            <td> R3 </td>
                            <td> 1,3,2,4,5,2,3,4,2,4,1,3,2,4,5,2,3,4,2,4 </td>
                            <td> 4,3,2,2,3,4,1,1,3,2,4,3,2,2,3,4,1,1,3,2 </td>
                            <td> 4,4 </td>
                            <td> 3,75 </td>
                            <td> 3,75 </td>
                            <td> 18,7 </td>
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