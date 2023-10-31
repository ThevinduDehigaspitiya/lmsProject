<!doctype html>
<html lang="en" dir="ltr">

<head>
    @include('admin.dashboard.components.header_link');

    <style>
        .cropper-container {
            max-width: 300px; /* Adjust the maximum width as needed */
            max-height: 300px; /* Adjust the maximum height as needed */
            overflow: hidden;
        }

        .cropper-image {
            display: block;
            max-width: 100%; /* Set the maximum width to fill the container */
            height: auto;
            margin: 0 auto;
        }
    </style>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">


    <title>RD-LMS</title>
</head>

<body class="layout-light side-menu">
    <div class="mobile-search">
        <form action="/" class="search-form">
            <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
            <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                aria-label="Search">
        </form>
    </div>

    <div class="mobile-author-actions"></div>

    <!-- header  -->
    @include('admin.dashboard.components.header');

    <main class="main-content">

        <!-- sidebar -->
        @include('admin.dashboard.components.sidebar');

        <div class="contents">

            <div class="crm mb-25">
                <div class="container-fluid">
                    <div class="row ">
                        <!-- content area -->

                        <div class="col-lg-12">
                            <!-- breadcrumb -->
                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">Student</h4>
                                <div class="flex-wrap breadcrumb-action justify-content-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i
                                                        class="uil uil-estate"></i>Student Manage</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Add Student</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="mb-4 card card-default card-md">
                                <div class="card-header">
                                    <h6>Profile Details</h6>
                                </div>
                                <div class="card-body py-md-25">
                                    <form action="{{ route('student.create') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-4 card card-default card-md">

                                                    <div class="card-body py-md-30">

                                                        <div class="dm-upload">
                                                            <div class="dm-upload-avatar media-import dropzone-md-s">
                                                            <div class="cropper-container">
                                                                <p class="mt-0 color-light fs-14" id="selectedFile">Upload your profile picture here</p>
                                                                <img id="image" src="#" alt="Your image" />
                                                            </div>
                                                            </div>
                                                            <div class="avatar-up">
                                                                <input type="file" name="profile_img_path" 
                                                                    class="upload-avatar-input" id="fileInput"/>
                                                            </div>
                                                            <button onclick="saveCroppedImage()">Save</button> <!-- Add the Save button -->
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a1"
                                                        class="mb-10 il-gray fs-14 fw-500 align-center">First
                                                        Name</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a1" name="first_name" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a2"
                                                        class="mb-10 il-gray fs-14 fw-500 align-center">Last
                                                        Name</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a2" name="last_name" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a3"
                                                        class="mb-10 il-gray fs-14 fw-500 align-center">Gender</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a3" name="gender" placeholder="Gender">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a1"
                                                        class="mb-10 il-gray fs-14 fw-500 align-center">Birth of
                                                        Date</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a1" name="bod" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a2"
                                                        class="mb-10 il-gray fs-14 fw-500 align-center">Email</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a2" name="email" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a3"
                                                        class="mb-10 il-gray fs-14 fw-500 align-center">NIC</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a3" name="nic" placeholder="Gender">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="a8"
                                                        class="mb-10 il-gray fs-14 fw-500 align-center">Address
                                                        line
                                                        1</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a8" name="address_line1"
                                                        placeholder="Address line 1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="a9"
                                                        class="mb-10 il-gray fs-14 fw-500 align-center">Address
                                                        line
                                                        2</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a9" name="address_line2"
                                                        placeholder="Address line 2">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a1"
                                                        class="mb-10 il-gray fs-14 fw-500 align-center">School</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a1" name="school"
                                                        placeholder="One of Three Columns">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a2"
                                                        class="mb-10 il-gray fs-14 fw-500 align-center">Contact
                                                        Number</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a2" name="contact_number"
                                                        placeholder="One of Three Columns">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a3"
                                                        class="mb-10 il-gray fs-14 fw-500 align-center">Whatsapp
                                                        Number</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a3" name="whatsapp_number"
                                                        placeholder="One of Three Columns">
                                                </div>
                                            </div>
                                            <div class="layout-button mt-25">
                                                <button type="button"
                                                    class="px-20 btn btn-default btn-squared btn-light ">cancel</button>
                                                <a href="#"><button type="submit" 
                                                        class="btn btn-primary btn-default btn-squared px-30">Next</button></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- ends: .card -->
                        </div>

                    </div>
                    <!-- ends:content area -->
                </div>
            </div>

        </div>
        @include('admin.dashboard.components.footer');

    </main>

    @include('admin.dashboard.components.footer_link');


<script>
    var cropper; 

    document.getElementById('fileInput').addEventListener('change', function (e) {
        var file = e.target.files[0];
        var reader = new FileReader();
        reader.onload = function (event) {
            var image = document.getElementById('image');
            image.src = event.target.result;
            cropper = new Cropper(image, {
                aspectRatio: 1, // Set the aspect ratio as needed
                viewMode: 1, // Configure the view mode for cropping
                dragMode: 'move', // Enable the ability to move the crop box
                autoCropArea: 0.8, // Define the initial size of the crop box
                cropBoxResizable: true // Disable resizing of the crop box
            });
            fileInput.disabled = true; 
        };
        reader.readAsDataURL(file);
    });

    function saveCroppedImage() {
        // if (cropper) {
            
        //     var croppedData = cropper.getData();
            
        //     console.log("Cropped Image Data:", croppedData);
        // } else {
        //     console.error("Cropper not initialized");
        // }
        var croppedData = cropper.getData();
    }
</script>

</body>

</html>
