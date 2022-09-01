
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
            
            
            <div class="card">
              <div class="card-body">
  
                <form enctype="multipart/form-data" class="forms-sample" action="" method="POST">
                    @method('PUT')

                 @csrf
                  <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode" value="{{$pertanyaan->kode}}">
                    <br>
                  <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <textarea class="form-control" id="pertanyaan" rows="4" required name="pertanyaan" value="{{$pertanyaan->pertanyaan}}"></textarea>
                  </div>
                  @method('POST')
                  <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
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
  </body>
</html>