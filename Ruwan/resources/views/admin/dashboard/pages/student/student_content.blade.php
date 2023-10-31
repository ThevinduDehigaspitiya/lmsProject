<main class="main-content">

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
                                        <li class="breadcrumb-item active" aria-current="page">Students</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 mb-30">
                        <div class="support-ticket-system support-ticket-system--search">



                            <div
                                class="flex-wrap support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center">
                                <div class="support-form__input">
                                    <div class="flex-wrap d-flex">
                                        <div class="support-form__input-id">
                                            <label>Id:</label>

                                            <div class="dm-select ">

                                                <select name="select-search" class="select-search form-control ">


                                                </select>

                                            </div>


                                        </div>
                                        <div class="support-form__input-status">
                                            <label>Name:</label>

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
                            <div class="mt-1 userDatatable userDatatable--ticket userDatatable--ticket--2">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                        <thead>
                                            <tr class="userDatatable-header">

                                                <th>
                                                    <span class="userDatatable-title">Id</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">NIC</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">First Name</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Last Name</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Email</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Contact</span>
                                                </th>
                                                <th class="actions">
                                                    <span class="userDatatable-title">Actions</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $key => $student)
                                                <tr>
                                                    <td class="pe-0">
                                                        <div class="d-flex">
                                                            <div class="userDatatable-content--subject">
                                                                {{ $key++ }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>{{ $student->nic }}</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            {{ $student->first_name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            {{ $student->last_name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            {{ $student->email }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            {{ $student->contact_number }}
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <ul class="flex-wrap mb-0 orderDatatable_actions d-flex">

                                                            <li>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modal-info-delete" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>

                                                            </li>
                                                            <li>
                                                                <a href="{{ route('editStudent') }}" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-end pt-30">

                                    <nav class="dm-page ">
                                        <ul class="dm-pagination d-flex">
                                            <li class="dm-pagination__item">
                                                <a href="#" class="dm-pagination__link pagination-control"><span
                                                        class="la la-angle-left"></span></a>
                                                <a href="#" class="dm-pagination__link"><span
                                                        class="page-number">1</span></a>
                                                <a href="#" class="dm-pagination__link active"><span
                                                        class="page-number">2</span></a>
                                                <a href="#" class="dm-pagination__link"><span
                                                        class="page-number">3</span></a>
                                                <a href="#" class="dm-pagination__link pagination-control"><span
                                                        class="page-number">...</span></a>
                                                <a href="#" class="dm-pagination__link"><span
                                                        class="page-number">12</span></a>
                                                <a href="#" class="dm-pagination__link pagination-control"><span
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
    @include('admin.dashboard.components.footer');


</main>

<div class="modal-info-delete modal fade show" id="modal-info-delete" tabindex="-1" role="dialog"
    aria-hidden="true">


    <div class="modal-dialog modal-sm modal-info" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-info-body d-flex">
                    <div class="modal-info-icon warning">
                        <img src="{{ asset('assets/img/svg/alert-circle.svg') }}" alt="alert-circle" class="svg">
                    </div>

                    <div class="modal-info-text">
                        <h6>Delete?</h6>
                        <p>Do you Want to remove sthis this student.</p>
                    </div>

                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-danger btn-outlined btn-sm"
                    data-bs-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-outlined btn-sm" data-bs-dismiss="modal">No</button>

            </div>
        </div>
    </div>

</div>
<!-- ends: .modal-info-Delete -->
