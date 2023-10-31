<!doctype html>
<html lang="en" dir="ltr">

<head>
    @include('admin.dashboard.components.header_link');
    <title>RD-Edit Student</title>
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
                                <h4 class="text-capitalize breadcrumb-title">Edit Student</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i
                                                        class="uil uil-estate"></i>Student Manage</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit Student</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Profile Details</h6>
                                </div>
                                <div class="card-body py-md-25">
                                    <form action="#">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="card  card-default card-md mb-4">

                                                    <div class="card-body py-md-30">

                                                        <div class="dm-upload">
                                                            <div class="dm-upload-avatar media-import dropzone-md-s">
                                                                <p class="color-light mt-0 fs-14">Drop files here to
                                                                    upload</p>
                                                            </div>
                                                            <div class="avatar-up">
                                                                <input type="file" name="upload-avatar-input"
                                                                    class="upload-avatar-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a1"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">First
                                                        Name</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a1" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a2"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Last
                                                        Name</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a2" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a3"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Gender</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a3" placeholder="Gender">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a1"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Birth of
                                                        Date</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a1" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a2"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Email</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a2" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a3"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">NIC</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a3" placeholder="Gender">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="a8"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Address line
                                                        1</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a8" placeholder="Address line 1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="a9"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Address line
                                                        2</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a9" placeholder="Address line 2">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a1"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">School</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a1" placeholder="One of Three Columns">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a2"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Contact
                                                        Number</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a2" placeholder="One of Three Columns">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a3"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Whatsapp
                                                        Number</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a3" placeholder="One of Three Columns">
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="card-header">
                                    <h6>Guardian Details</h6>
                                </div>
                                <div class="card-body py-md-25">
                                    <form action="#">
                                        <div class="row">


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a1"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">His/Her
                                                        Name</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a1" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a2"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Guardian</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a2" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="a3"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Contact
                                                        Number</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a3" placeholder="Gender">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="a8"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Address line
                                                        1</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a8" placeholder="Address line 1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="a9"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">Address line
                                                        2</label>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                        id="a9" placeholder="Address line 2">
                                                </div>
                                            </div>



                                        </div>

                                </div>

                                <div class="card-header">
                                    <h6>Class Details</h6>
                                </div>
                                <div class="card-body py-md-25">

                                    <div class="row">


                                        <div class="col-md-4">

                                            <div class="form-group select-px-15">
                                                <label for="countryOption"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">A/L Year</label>
                                                <select class="form-control px-15" id="countryOption1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group select-px-15">
                                                <label for="countryOption"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Subjects</label>
                                                <select class="form-control px-15" id="countryOption2">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group select-px-15">
                                                <label for="countryOption"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Class Type</label>
                                                <select class="form-control px-15" id="countryOption3">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group select-px-15">
                                                <label for="countryOption"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">District</label>
                                                <select class="form-control px-15" id="countryOption4">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group select-px-15">
                                                <label for="countryOption"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Province</label>
                                                <select class="form-control px-15" id="countryOption5">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>

                                        </div>




                                        <div class="layout-button mt-25">
                                            <button type="button"
                                                class="btn btn-default btn-squared btn-light px-20 ">cancel</button>
                                            <button type="button"
                                                class="btn btn-primary btn-default btn-squared px-30">Update</button>
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
</body>

</html>
