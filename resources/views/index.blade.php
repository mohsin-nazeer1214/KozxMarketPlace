<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Tables</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{url('admin_assets/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{url('admin_assets/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{url('admin_assets/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{url('admin_assets/assets/css/demo.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('admin_assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{url('admin_assets/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{url('admin_assets/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

      @include('sidebar');
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

   @include('navbar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

           
            <div class="container-xxl flex-grow-1 container-p-y">
            <div> 
                
            <a href="{{ route('products.create') }}" class="btn btn-primary">Add Products</a>
               
                </div>
              <h4 class="py-3 mb-4"><span class="text-muted fw-light"> </span> Products Tables</h4>
              @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
              <!-- Basic Bootstrap Table -->
              <div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Actions</th>
                    <th>View Images</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
        
<td>
    @switch($product->category_id)
        @case(1)
            Collectibles
            @break
        @case(2)
            Vehicles
            @break
        @case(3)
            Real Estate
            @break
        @case(4)
            Yachts
            @break
        @default
            Unknown Category
    @endswitch
</td>
                        <td>{{ $product->price }}</td>

                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('products.edit', $product->id) }}">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="openModalWithMedia('{{ $product->id }}')">
    Images and Videos
</button>

</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

              <!--/ Basic Bootstrap Table -->


        
              <!--/ Bootstrap Dark Table -->

             
              <!--/ Bootstrap Table with Header Dark -->

              <hr class="my-5" />

              <!-- Bootstrap Table with Header - Light -->
             
              <!-- Bootstrap Table with Header - Light -->

           
              <!--/ Striped Rows -->

             

              <!-- Borderless Table -->
              

              <!-- Hoverable Table rows -->
              
              <!--/ Hoverable Table rows -->


              <!-- Small table -->

           
              <!--/ Contextual Classes -->


              <!-- Table within card -->
             
          
              <!--/ Responsive Table -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with Kozx
                </div>
             
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

</div>

<!-- Add Bootstrap classes for modal styling -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Media Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row justify-content-center" id="modal-body">
                <!-- Media items will be added dynamically here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    function openModalWithMedia(productId) {
        var modalBody = document.getElementById('modal-body');
        modalBody.innerHTML = '';

        fetch(`/get-images/${productId}`)
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    console.error('Error fetching media:', data.error);
                    return;
                }

                console.log(data.videos);

                var imageNames = Array.isArray(data.images) ? data.images.flat() : [];
                var videoNames = data.videos ? [data.videos] : [];

                var media = videoNames.concat(imageNames);

                media.forEach(function (name, index) {
                    var mediaElement;

                    if (name.endsWith('.mp4') || name.endsWith('.webm') || name.endsWith('.ogg')) {
                        // Treat as a video
                        mediaElement = document.createElement('video');
                        mediaElement.src = '/videos/' + name;
                        mediaElement.controls = true;
                        mediaElement.autoplay = true; // Autoplay for videos

                        mediaElement.style.border = '29px solid #dddddd'; // Thicker border for videos

                        mediaElement.className = 'img-thumbnail mx-2 my-2 col-10 border'; // Use col-10 for videos
                    } else {
                        // Treat as an image
                        mediaElement = document.createElement('img');
                        mediaElement.src = '/images/' + name;
                        mediaElement.alt = 'Product Image';
                        mediaElement.style.width = '100%';
                        mediaElement.style.maxWidth = '200px'; // Set a maximum width for the images
                        mediaElement.style.height = 'auto';
                        mediaElement.className = 'mb-3 col-9 border'; // Use col-9 for images
                    }

                    modalBody.appendChild(mediaElement);

                    if ((index + 1) % 2 === 0) {
                        modalBody.appendChild(document.createElement('br'));
                    }
                });

                $('#exampleModal').modal('show');
            })
            .catch(error => {
                console.error('Error fetching media:', error);
            });
    }
</script>















    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{url('admin_assets/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{url('admin_assets/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{url('admin_assets/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{url('admin_assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{url('admin_assets/assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{url('admin_assets/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
