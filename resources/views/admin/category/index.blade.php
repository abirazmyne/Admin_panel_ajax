
@extends('layouts.app')

@section('body')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Manage Shop Categories</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Category</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!--ROW OPENED-->
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4>Total Tasks</h4>
                                    <p>35</p>
                                </div>
                                <div class="col-4">
                                    <div class="hpx-50 wpx-50 bg-primary br-5 d-flex align-items-center justify-content-center ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17,4h-1.1846313C15.4013672,2.8383179,14.3035889,2.0014648,13,2h-2C9.6964111,2.0014648,8.5986328,2.8383179,8.1846313,4H7C5.3438721,4.0018311,4.0018311,5.3438721,4,7v12c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7C19.9981689,5.3438721,18.6561279,4.0018311,17,4z M9,5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2v2H9V5z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7c0.0014038-1.1040039,0.8959961-1.9985962,2-2h1v2.5006104C8.0001831,7.7765503,8.223999,8.0001831,8.5,8h7.0006104C15.7765503,7.9998169,16.0001831,7.776001,16,7.5V5h1c1.1040039,0.0014038,1.9985962,0.8959961,2,2V19z"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4>In Progress</h4>
                                    <p>4</p>
                                </div>
                                <div class="col-4">
                                    <div class="hpx-50 wpx-50 br-5 d-flex align-items-center justify-content-center bg-info ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17,4h-1.1846313C15.4013672,2.8383179,14.3035889,2.0014648,13,2h-2C9.6964111,2.0014648,8.5986328,2.8383179,8.1846313,4H7C5.3438721,4.0018311,4.0018311,5.3438721,4,7v12c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7C19.9981689,5.3438721,18.6561279,4.0018311,17,4z M9,5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2v2H9V5z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7c0.0014038-1.1040039,0.8959961-1.9985962,2-2h1v2.5006104C8.0001831,7.7765503,8.223999,8.0001831,8.5,8h7.0006104C15.7765503,7.9998169,16.0001831,7.776001,16,7.5V5h1c1.1040039,0.0014038,1.9985962,0.8959961,2,2V19z"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4>On Hold</h4>
                                    <p>6</p>
                                </div>
                                <div class="col-4">
                                    <div class="hpx-50 wpx-50 br-5 d-flex align-items-center justify-content-center bg-warning ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17,4h-1.1846313C15.4013672,2.8383179,14.3035889,2.0014648,13,2h-2C9.6964111,2.0014648,8.5986328,2.8383179,8.1846313,4H7C5.3438721,4.0018311,4.0018311,5.3438721,4,7v12c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7C19.9981689,5.3438721,18.6561279,4.0018311,17,4z M9,5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2v2H9V5z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7c0.0014038-1.1040039,0.8959961-1.9985962,2-2h1v2.5006104C8.0001831,7.7765503,8.223999,8.0001831,8.5,8h7.0006104C15.7765503,7.9998169,16.0001831,7.776001,16,7.5V5h1c1.1040039,0.0014038,1.9985962,0.8959961,2,2V19z"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <div class="btn-list">
                <a href="task-create.html" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                    <i class="fa-regular fa-square-plus"></i>
                    Add New Category
                </a>
            </div>
        </div>
    </div>


    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Category Table</h3>
                </div>
                <div class="card-body">
{{--                    <p class="text-success text-center">{{session('message')}}</p>--}}
                    <div class="table-responsive export-table">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Sl NO.</th>
                                <th class="border-bottom-0">Category Name</th>
                                <th class="border-bottom-0">Category Description</th>
                                <th class="border-bottom-0">Category Image</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>


                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row --> <!-- End Row -->



    <!-- modal Row -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="exampleCategoryLabel" aria-hidden="true">
        <form id="addCategoryForm" method="post" enctype="multipart/form-data"  >
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleCategoryLabel">Add a Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="alert alert-warning d-none" id="error"></ul>

                        <div class="form-group my-3">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="description">Category Description</label>
                            <textarea type="text"  name="description" class="form-control" required> </textarea>
                        </div>
                        <div class="form-group my-3">
                            <label for="price">Category Image</label>
                            <input type="file" name="image" class="dropify form-control"  required>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveBTN">Save Category</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection

@section('script')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        fetchCategory();
        function fetchCategory() {
            $.ajax({
                type: "GET",
                url: "/fetch-category",
                datatype: "JSON",
                success: function (response) {
                    $('tbody').html('');
                    $.each(response.categories, function (key, value) {
                        $('tbody').append('<tr>\
                            <td>'+value.id+'</td>\
                        <td>'+value.name+'</td>\
                        <td>'+value.description+'</td>\
                        <td>\
                            <img src="{{ asset('/') }}uploads/employee/'+value.image+'" alt="" height="50px" width="50px">\
                        </td>\
                        <td>\
                            <button class="btn btn-sm btn-success edit_btn" value="'+value.id+'">Edit</button> |\
                            <button class="btn btn-sm btn-danger delete_btn" value="'+value.id+'">Denger</button> |\
                        </td>\
                    </tr>'
                        );
                    })
                }
            })
        }

        $(document).on('submit', '#addEmployeeForm', function (e) {
            e.preventDefault();
            let formData = new FormData($('#addCategoryForm')[0]);
            // console.log(formData);
            $.ajax({
                type: "POST",
                url: "/category-index",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response.status);
                    if (response.status == 400) {
                        $('#error').html('');
                        $('#error').removeClass('d-none');
                        $.each(response.errors, function (key, value) {
                            $('#error').append('<li>' + value + '</li>');
                        })
                    } else if (response.status == 200) {
                        $('#addCategoryForm')[0].reset();
                        $('#addCategoryModal').modal('hide');
                        fetchCategory();
                        Command: toastr["success"](response.message)
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "3000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                }
            })
        })

        $(document).on('submit', '#updateEmployeeForm', function (e) {
            e.preventDefault();
            let formData = new FormData($('#updateCategoryForm')[0]);
            $('#update_btn').text('Updating Changes');
            let cat_id = $('#up_cat_id').val();
            $.ajax({
                type: "POST",
                url: "/employee-update/"+cat_id,
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response)
                    if (response.status == 400) {
                        $('#up_error').html('');
                        $('#up_error').removeClass('d-none');
                        $.each(response.errors, function (key, value) {
                            $('#up_error').append('<li>' + value + '</li>');
                        })
                    } else if (response.status == 200) {
                        $('#updateCategoryForm')[0].reset();
                        $('#updateCategoryForm').modal('hide');
                        fetchCategory();
                        Command: toastr["success"](response.message)
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "3000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                }
            })
        })

        $(document).on('click','.edit_btn',function (e){
            e.preventDefault();
            let cat_id = $(this).val();
            $('#editCategoryModal').modal('show');
            $.ajax({
                type: "get",
                url: "/edit-employee",
                data: { id : cat_id },
                datatype : "JSON",
                success : function (response){
                    $('#up_name').val(response.data.name)
                    $('#up_description').val(response.data.description)
                    $('#up_image').attr('src',"{{ asset('/') }}uploads/categories/"+response.data.image)
                    $('#up_cat_id').val(cat_id)
                }
            })
        })
    })


</script>
@endsection
