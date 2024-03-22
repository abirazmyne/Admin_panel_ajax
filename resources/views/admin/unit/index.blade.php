
@extends('layouts.app')

@section('body')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Manage Shop Unit</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Unit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Unit</li>
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
                <a href="task-create.html" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#addUnitModal">
                    <i class="fa-regular fa-square-plus"></i>
                    Add New Unit
                </a>
            </div>
        </div>
    </div>


    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Unit Table</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <div class="table-responsive export-table">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Sl NO.</th>
                                <th class="border-bottom-0">Unit Name</th>
                                <th class="border-bottom-0">Unit Description</th>
                                <th class="border-bottom-0">Unit Image</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($units as $unit)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $unit->name }}</td>
                                    <td>{{ Str::limit($unit->description, 20) }}</td>
                                    <td><img src="{{ asset( $unit->image )}}" alt="{{ $unit->name }}" width="100"></td>
                                    <td>
                                        <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('unit.delete', ['id' => $unit->id])}}" onclick="return confirm('Are you sure you want to delete this unit?')" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
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
    <div class="modal fade" id="addUnitModal" tabindex="-1" aria-labelledby="exampleCategoryLabel" aria-hidden="true">
        <form action="{{route('unit.create')}}" method="POST" enctype="multipart/form-data"  id="addUnitForm">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleCategoryLabel">Add a Unit</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="errMessageContainer">

                        </div>

                        <div class="form-group my-3">
                            <label for="name">Unit Type</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="description">Unit Description</label>
                            <textarea type="text" id="description" name="description" class="form-control" required> </textarea>
                        </div>
                        <div class="form-group my-3">
                            <label for="price">Unit Image</label>
                            <input type="file" id="image" name="image" class="dropify form-control"  required>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveBTNUnit">Save Unit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $(document).on('click','#saveBTNUnit', function (e) {
                e.preventDefault();
                let name = $('#name').val();
                let description = $('#description').val();
                let image = $('#image')[0].files[0];

                let formData = new FormData();
                formData.append('name', name);
                formData.append('description', description);
                formData.append('image', image);

                $.ajax({
                    url: "{{route('unit.create')}}",
                    method: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (res) {
                        if (res.status == 'success') {
                            $('#addUnitModal').modal('hide');
                            $('#addUnitForm')[0].reset();
                            $('#file-datatable').load(location.href + '#file-datatable');

                            console.log('Category created successfully:', response);
                        }
                    },
                    error: function (err) {
                        let error = err.responseJSON;
                        $.each(error.errors, function (index, value) {
                            $('#errMessageContainer').append('<span class="text-danger">' + value + '</span><br>');
                        });
                    }
                });
            });




            {{--//    Product show--}}
            {{--$(document).on('click', '.update_product_form', function () {--}}
            {{--    let id = $(this).data('id');--}}
            {{--    let name = $(this).data('name');--}}
            {{--    let price = $(this).data('price');--}}
            {{--    let image = $(this).data('image');--}}
            {{--    // console.log(image);--}}

            {{--    $('#up_id').val(id);--}}
            {{--    $('#up_name').val(name);--}}
            {{--    $('#up_price').val(price);--}}



            {{--    $('#current_image').attr("src", "{{ asset('uploads/') }}/" + image);--}}
            {{--    // $('#current_image').attr("src", image);--}}
            {{--    $('#updateModal').modal('show');--}}

            {{--});--}}





        {{--$(document).ready(function(){--}}

        {{--    var form = '#addCategoryForm';--}}

        {{--    $(form).on('submit', function(event){--}}
        {{--        event.preventDefault();--}}

        {{--        // var url = 'http://localhost/trash_proj/ajax_crud/public/add/product';--}}
        {{--        var url = '{{route('category.create')}}';--}}



        {{--        $.ajax({--}}
        {{--            url: url,--}}
        {{--            type: 'POST',--}}
        {{--            data: new FormData(this),--}}
        {{--            dataType: 'JSON',--}}
        {{--            contentType: false,--}}
        {{--            cache: false,--}}
        {{--            processData: false,--}}
        {{--            success:function(response)--}}
        {{--            {--}}
        {{--                $(form).trigger("reset");--}}
        {{--                $('#addModal').modal('hide');--}}
        {{--            },--}}
        {{--            error: function(response) {--}}
        {{--            }--}}
        {{--        });--}}
        {{--    });--}}

        {{--});--}}







    </script>


@endsection
