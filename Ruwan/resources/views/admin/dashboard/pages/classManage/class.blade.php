<!doctype html>
<html lang="en" dir="ltr">

<head>
    @include('admin.includes.header_link')
    <title>RD-Class</title>
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
    @include('admin.includes.header')

    <main class="main-content">

        <!-- sidebar -->
        @include('admin.includes.sidebar')

        <div class="contents">

            <div class="crm mb-25">
                <div class="container-fluid">
                    <div class="row ">
                        <!-- content area -->

                        <div class="col-lg-12">
                            <!-- breadcrumb -->
                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">Class</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i
                                                        class="uil uil-estate"></i>Class Manage</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Classs</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 mb-30">
                            <div class="support-ticket-system support-ticket-system--search">



                                <div
                                    class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
                                    <div class="support-form__input">
                                        <div class="d-flex flex-wrap">
                                            <div class="support-form__input-id">
                                                <label>Subject:</label>

                                                <div class="dm-select ">

                                                    <select name="select-search" class="select-search form-control ">


                                                    </select>

                                                </div>


                                            </div>
                                            <div class="support-form__input-status">
                                                <label>Teacher Name:</label>

                                                <div class="dm-select ">

                                                    <select name="select-search" class="select-search form-control ">

                                                    </select>

                                                </div>


                                            </div>
                                            <div class="support-form__input-status">


                                                <button class="support-form__input-button">search</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                                <tr class="userDatatable-header">

                                                    <th>
                                                        <span class="userDatatable-title">Id</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Name</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Subject</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Class Type</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Teacher</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Time</span>
                                                    </th>
                                                    <th class="actions">
                                                        <span class="userDatatable-title">Actions</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td class="pe-0">
                                                        <div class="d-flex">
                                                            <div class="userDatatable-content--subject">
                                                                United Street
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            United Street
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            January 20, 2020
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">

                                                            <li>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modal-info-delete" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>

                                                            </li>
                                                            <li>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#class-edit" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-end pt-30">

                                        <nav class="dm-page ">
                                            <ul class="dm-pagination d-flex">
                                                <li class="dm-pagination__item">
                                                    <a href="#"
                                                        class="dm-pagination__link pagination-control"><span
                                                            class="la la-angle-left"></span></a>
                                                    <a href="#" class="dm-pagination__link"><span
                                                            class="page-number">1</span></a>
                                                    <a href="#" class="dm-pagination__link active"><span
                                                            class="page-number">2</span></a>
                                                    <a href="#" class="dm-pagination__link"><span
                                                            class="page-number">3</span></a>
                                                    <a href="#"
                                                        class="dm-pagination__link pagination-control"><span
                                                            class="page-number">...</span></a>
                                                    <a href="#" class="dm-pagination__link"><span
                                                            class="page-number">12</span></a>
                                                    <a href="#"
                                                        class="dm-pagination__link pagination-control"><span
                                                            class="la la-angle-right"></span></a>
                                                    <a href="#" class="dm-pagination__option">
                                                    </a>
                                                </li>
                                                <li class="dm-pagination__item">
                                                    <div class="paging-option">
                                                        <select name="page-number" class="page-selection">
                                                            <option value="20">20/page</option>
                                                            <option value="40">40/page</option>
                                                            <option value="60">60/page</option>
                                                        </select>
                                                    </div>
                                                </li>
                                            </ul>
                                        </nav>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- ends:content area -->
                </div>
            </div>

        </div>
        @include('admin.includes.footer')

    </main>

    <div class="modal-info-delete modal fade show" id="modal-info-delete" tabindex="-1" role="dialog"
        aria-hidden="true">


        <div class="modal-dialog modal-sm modal-info" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-info-body d-flex">
                        <div class="modal-info-icon warning">
                            <img src="{{ asset('assets/img/svg/alert-circle.svg') }}" alt="alert-circle"
                                class="svg">
                        </div>

                        <div class="modal-info-text">
                            <h6>Delete?</h6>
                            <p>Do you Want to remove sthis this Class.</p>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                        data-bs-dismiss="modal">Yes</button>
                    <button type="button" class="btn  btn-outlined btn-sm" data-bs-dismiss="modal">No</button>

                </div>
            </div>
        </div>


    </div>
    <!-- ends: .modal-info-Delete -->

    @include('admin.includes.footer_link')

    <div class="modal-basic modal fade show" id="class-edit" tabindex="-1" role="dialog" aria-hidden="true">


        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">



                    <h6 class="modal-title">Edit Class Details</h6>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg">
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="card-body py-md-25">

                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{ asset('assets/img/author-nav.jpg') }}" alt="Avatar">


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="a2" class="il-gray fs-14 fw-500 align-center mb-10">Class
                                            Name</label>
                                        <input type="text"
                                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                                            id="a2" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="a3" class="il-gray fs-14 fw-500 align-center mb-10">Class
                                            Year</label>
                                        <input type="text"
                                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                                            id="a3" placeholder="Gender">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group  form-group-calender">

                                        <label for="datepicker8"
                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Date</label>

                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control  ih-medium ip-light radius-xs b-light px-15"
                                                id="datepicker8" placeholder="01/10/2021">
                                            <a href="#"><img class="svg"
                                                    src="{{ asset('assets/img/svg/calendar.svg') }}"
                                                    alt="calendar"></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group  form-group-calender mb-20">
                                        <label for="datepicker8"
                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Start
                                            Time</label>
                                        <div class="time-picker">
                                            <div class="form-group mb-0">
                                                <div
                                                    class="input-container icon-right position-relative w-100 color-light ">
                                                    <span class="input-icon icon-right">
                                                        <img class="svg"
                                                            src="{{ asset('assets/img/svg/clock.svg') }}"
                                                            alt="clock">
                                                    </span>
                                                    <input type="text"
                                                        class="form-control ih-medium ip-light radius-xs b-light px-15 color-lighten"
                                                        id="time-picker" placeholder="12:00 AM">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row form-group-calender mb-20">
                                        <div class="col-sm-3 d-flex aling-items-center">
                                            <label
                                                class=" col-form-label color-dark fs-14 fw-500 align-center">Time</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="time-picker">
                                                <div class="form-group mb-0">
                                                    <div
                                                        class="input-container icon-right position-relative w-100 color-light ">
                                                        <span class="input-icon icon-right">
                                                            <img class="svg"
                                                                src="{{ asset('assets/img/svg/clock.svg') }}"
                                                                alt="clock">
                                                        </span>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-light radius-xs b-light px-15 color-lighten"
                                                            id="time-picker" placeholder="12:00 AM">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-6">

                                    <div class="form-group select-px-15">
                                        <label for="countryOption"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Subject Name</label>
                                        <select class="form-control px-15" id="countryOption1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group select-px-15">
                                        <label for="countryOption"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Class Type</label>
                                        <select class="form-control px-15" id="countryOption2">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group select-px-15">
                                        <label for="countryOption"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Class Payment</label>
                                        <select class="form-control px-15" id="countryOption3">
                                            <option>1000</option>
                                            <option>1500</option>
                                            <option>2000</option>
                                            <option>2500</option>
                                            <option>3000</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group select-px-15">
                                        <label for="countryOption"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Teacher</label>
                                        <select class="form-control px-15" id="countryOption3">
                                            <option>1000</option>
                                            <option>1500</option>
                                            <option>2000</option>
                                            <option>2500</option>
                                            <option>3000</option>
                                        </select>
                                    </div>

                                </div>






                            </div>
                    </form>
                </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>


    </div>
    <!-- ends: .modal-Basic -->



</body>

</html>
