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

    <title>Admin</title>

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

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('admin_assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

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
@include('sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

        =@include('navbar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light"> </span>Products</h4>
                
              <div class="image-row" style="display: flex; justify-content: space-between;">
                
                <!-- Add more image-container divs for additional images -->
            </div>

            <br>
            <div class="row">
         


<div class="col-lg-6">
<div id="videoPreviewContainer" class="mt-2 d-flex flex-wrap"></div>

</div>
<div class="col-lg-6">
<div id="imagePreviewContainer" class="mt-2 d-flex flex-wrap"></div>

</div>






    <h5 class="card-header">Add Product</h5>
    <div class="card-body demo-vertical-spacing demo-only-element">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
    @csrf

    <div class="row">
    <div class="col-md-6">
        <!-- Section 1: Product Name, Description, and Category -->
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="name" required>
        </div>

        <div class="mb-3">
            <label for="productImage" class="form-label">Product Images</label>
            <input type="file" class="form-control" id="productImage" name="images[]" accept="image/*" multiple>
        </div>

        <div class="mb-3">
            <label for="categoryDropdown" class="form-label">Category</label>
            <select class="form-select" id="categoryDropdown" name="category_id" required>
                <option selected>Select a category</option>
                <option value="1">Collectibles</option>
                <option value="2">Vehicles</option>
                <option value="3">Real Estate</option>
                <option value="4">Yachts</option>
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <!-- Section 2: Product Price and Image -->
        <div class="mb-3">
            <label for="productPrice" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="productPrice" name="price" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="categoryDropdown2" class="form-label">SubCategory</label>
            <select class="form-select" id="categoryDropdown2" name="category_id" required>
                <option selected>Select a Subcategory</option>
                <option value="1">Collectibles</option>
                <option value="2">Vehicles</option>
                <option value="3">Real Estate</option>
                <option value="4">Yachts</option>
            </select>
        </div>  
        <div class="mb-3">
            <label for="productDescription" class="form-label">Product Description</label>
            <textarea class="form-control" id="productDescription" name="description" rows="3" required></textarea>
        </div>

        <div class="mb-3">
    <label for="productVideo" class="form-label">Product Video</label>
    <input type="file" class="form-control" id="productVideo" name="video" accept="video/*">
</div>


       
    </div>
</div>


    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>

    </div>
</div>
</div>

</div>
    

             

           
            </div>
            <!-- / Content -->

            <!-- Footer -->
          
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
    <!-- / Layout wrapper -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   
    
    <script>
    $("#productImage").change(function () {
        $("#imagePreviewContainer").empty();

        if (this.files) {
            const imagePreviews = [];
            const videoPreviews = [];

            const processFile = (file) => {
                const reader = new FileReader();

                return new Promise((resolve) => {
                    reader.onload = function (e) {
                        if (file.type.startsWith('video/')) {
                            videoPreviews.push('<div class="m-2" style="width: 100%; border: 2px solid #dddddd;"><video width="100%" height="200" controls><source src="' + URL.createObjectURL(file) + '" type="' + file.type + '"></video></div>');
                        } else if (file.type.startsWith('image/')) {
                            if (imagePreviews.length < 10) {
                                imagePreviews.push('<div class="m-2" style="width: 20%; border: 2px solid #dddddd;"><img src="' + e.target.result + '" class="img-thumbnail" width="100%"></div>');
                            }
                        }

                        resolve();
                    };

                    reader.readAsDataURL(file);
                });
            };

            const processFilesSequentially = async () => {
                for (let i = 0; i < this.files.length; i++) {
                    await processFile(this.files[i]);
                }

                $("#imagePreviewContainer").html(imagePreviews.join(''));
                // $("#videoPreviewContainer").html(videoPreviews.join(''));
            };

            processFilesSequentially();
        }
    });

    $("#productVideo").change(function () {
        // $("#imagePreviewContainer").empty();
        $("#videoPreviewContainer").empty(); // Clear both image and video containers

        if (this.files) {
            const imagePreviews = [];
            const videoPreviews = [];

            const processFile = (file) => {
                const reader = new FileReader();

                return new Promise((resolve) => {
                    reader.onload = function (e) {
                        if (file.type.startsWith('video/')) {
                            videoPreviews.push('<div class="m-2" style="width: 100%; border: 2px solid #dddddd;"><video width="100%" height="200" controls><source src="' + URL.createObjectURL(file) + '" type="' + file.type + '"></video></div>');
                        } else if (file.type.startsWith('image/')) {
                            if (imagePreviews.length < 10) {
                                imagePreviews.push('<div class="m-2" style="width: 20%; border: 2px solid #dddddd;"><img src="' + e.target.result + '" class="img-thumbnail" width="100%"></div>');
                            }
                        }

                        resolve();
                    };

                    reader.readAsDataURL(file);
                });
            };

            const processFilesSequentially = async () => {
                for (let i = 0; i < this.files.length; i++) {
                    await processFile(this.files[i]);
                }

                // $("#imagePreviewContainer").html(imagePreviews.join(''));
                $("#videoPreviewContainer").html(videoPreviews.join(''));
            };

            processFilesSequentially();
        }

    });
</script>




 


   
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{url('admin_assets/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{url('admin_assets/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{url('admin_assets/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{url('admin_assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('admin_assets/assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{url('admin_assets/assets/js/main.js')}}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
