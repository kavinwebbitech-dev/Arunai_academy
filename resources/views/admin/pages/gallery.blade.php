@extends('admin.layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">

    <style>
         .modal-dialog .btn-light{
            color: #fff
        }
        select.form-control-sm,
        .dataTables_length select {
            width: auto !important;
            /* Allow it to grow to fit content */
            min-width: 60px;
            /* Ensure it's not too small */
            padding-right: 20px !important;
            /* Space for the dropdown arrow */
            appearance: none;
            /* Optional: resets default browser styling */
        }

        /* ===== GLOBAL TEXT ===== */
        body {
            font-size: 13px;
        }

        /* ===== CARD ===== */
        .admin-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 22px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
        }

        /* ===== BUTTONS ===== */
        .btn {
            font-size: 12.5px !important;
            padding: 6px 16px !important;
            border-radius: 20px !important;
            background: #944319 !important;
            border-color: #944319 !important;

        }

        /* ===== MODALS ===== */
        .modal-content {
            border-radius: 18px;
        }

        .modal-title {
            font-size: 15px;
        }

        .form-label {
            font-size: 12.5px;
            font-weight: 500;
        }

        .form-control,
        .form-select {
            font-size: 12.5px;
            border-radius: 10px;
        }

        /* ===== TABLE ===== */
        .premium-table table {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
        }

        .premium-table thead {
            background: #f8fafc;
        }

        .premium-table th {
            font-size: 12px;
            font-weight: 600;
            color: #475569;
            padding: 12px;
        }

        .premium-table td {
            font-size: 12.5px;
            padding: 10px 12px;
            vertical-align: middle;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f5f9;
        }

        /* ===== STATUS ===== */
        .badge-active {
            background: #dcfce7;
            color: #166534;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 11px;
        }

        .badge-inactive {
            background: #fee2e2;
            color: #991b1b;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 11px;
        }
    </style>

    <div class="container mt-4">
        <div class="admin-card">

            <!-- HEADER -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0 fw-semibold"> Gallery </h5>

                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                    <i class="fa fa-plus me-1"></i> Add gallery
                </button>
            </div>

            <!-- ALERTS -->
            @if (session('success'))
                <div id="successMessage" class="alert alert-success small">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('danger'))
                <div id="dangerMessage" class="alert alert-danger small">
                    {{ session('danger') }}
                </div>
            @endif

            <!-- TABLE -->
            <div class="table-responsive premium-table">
                <table id="categoryTable" class="table table-hover w-100">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th>Name</th>
                            <th width="120">Status</th>
                            <th width="140">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gallery as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->category->title ?? 'N/A' }}</td>
                                <td>
                                    <img src="{{ asset('uploads/gallery/' . $value->image) }}" width="100" height="100">
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary editBtn" data-id="{{ $value->id }}"
                                        data-title="{{ $value->category->title }}" data-url="{{ route('gallery.update', $value->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </button>

                                    <button class="btn btn-sm btn-danger deleteBtn" data-id="{{ $value->id }}"
                                        data-url="{{ route('gallery.delete', $value->id) }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- ================= ADD CATEGORY MODAL ================= -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" id="categoryForm" class="modal-content border-0 shadow-lg rounded-4"> @csrf <div
                    class="modal-header border-0 px-4 pt-4">
                    <h5 class="modal-title fw-semibold">➕ Add Gallery</h5> <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body px-4 pb-3">
                    <div class="mb-3">
                        <label class="form-label">Select Category</label>
                        <select name="title" class="form-select mt-2" required>
                            <option value="" disabled selected>Select Category</option>
                            @foreach ($categorys as $value  )
                                <option value="{{ $value->id }}">{{ $value->title }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Image</label>
                        <input type="file" multiple name="gallery[]" id="gallery" class="form-control" placeholder="Enter category name" required>
                    </div>

                </div>
                <div class="modal-footer border-0 px-4 pb-4"> <button type="button" class="btn btn-light"
                        data-bs-dismiss="modal"> Cancel </button> <button type="submit" id="submit" class="btn btn-danger">
                        Update </button> </div>
            </form>
        </div>
    </div>

    <!-- ================= EDIT CATEGORY MODAL ================= -->
    <!-- ================= EDIT CATEGORY MODAL ================= -->
    {{-- <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form id="editGalleryForm" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" id="edit_id">

                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" id="edit_title" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Change Image</label>
                    <input type="file" name="gallery" class="form-control">
                    <img id="preview_image" width="80" class="mt-2" />
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div> --}}
    <div class="modal fade" id="editCategoryModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" id="editGalleryForm" class="modal-content border-0 shadow-lg rounded-4">
                @csrf
                <input type="hidden" id="edit_id">

                <div class="modal-header border-0 px-4 pt-4">
                    <h5 class="modal-title fw-semibold">➕ Edit Gallery</h5> <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body px-4 pb-3">
                     <label class="form-label">Select Category</label>
                     <select name="title" class="form-select mt-2 mb-3" required>
                        <option value="" disabled selected>Select Category</option>
                        @foreach ($categorys as $value  )
                            <option value="{{ $value->id }}">{{ $value->title }} </option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                        <label class="form-label">Select Image</label>
                        <input type="file" multiple name="gallery" id="gallery" class="form-control" placeholder="Enter category name">
                    </div>
                </div>
                <div class="modal-footer border-0 px-4 pb-4"> <button type="button" class="btn btn-light"
                        data-bs-dismiss="modal"> Cancel </button> <button type="submit" id="submit" class="btn btn-danger">
                        Save Gallery </button> </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        setTimeout(() => {
            $('#successMessage, #dangerMessage').fadeOut();
        }, 3000);
        // ================= ADD =================
        let categoryTable;

        // 🔄 Reload table safely
        function reloadTable() {
            if (categoryTable) {
                categoryTable.ajax.reload(null, false);
            }
        }
        $('#categoryForm').submit(function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('galleryimageStore') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,

                success: function (response) {

                    let addModalEl = document.getElementById('addCategoryModal');
                    let addModal = bootstrap.Modal.getInstance(addModalEl);
                    addModal.hide();

                    $('#categoryForm')[0].reset();

                    Swal.fire({
                        icon: 'success',
                        title: 'Added!',
                        text: 'Gallery added successfully',
                        timer: 1500,
                        showConfirmButton: false
                    });

                    window.location.reload();
                }
            });
        });

        // ================= EDIT =================
        // $(document).on('click', '.editBtn', function () {

        //     $('#edit_id').val($(this).data('id'));
        //     $('#edit_name').val($(this).data('name'));
        //     $('#edit_status').val($(this).data('status'));

        //     let url = $(this).data('url');
        //     $('#editCategoryForm').attr('action', url);

        //     $('#editCategoryModal').modal('show');
        // });
        $(document).on('click', '.editBtn', function () {

            let title = $(this).data('title');
            let image = $(this).data('image');
            let url = $(this).data('url');

            $('#edit_title').val(title);
            $('#preview_image').attr('src', image);

            $('#editGalleryForm').attr('action', url);

            // ✅ Bootstrap 5 way
            $('#editCategoryModal').modal('show');

        });
        // ================= UPDATE =================
        $('#editGalleryForm').submit(function (e) {
            e.preventDefault();

            let formData = new FormData(this);
            let url = $(this).attr('action');

            $.ajax({
                url: url,
                type: "POST", // Laravel converts to PUT
                data: formData,
                processData: false,
                contentType: false,

                success: function (response) {

                    let modalEl = document.getElementById('editCategoryModal');
                    let modal = bootstrap.Modal.getInstance(modalEl);
                    modal.hide();

                    Swal.fire({
                        icon: 'success',
                        title: 'Updated!',
                        text: response.message,
                        timer: 1500,
                        showConfirmButton: false
                    });

                    window.location.reload();
                }
            });
        });

        // ================= DELETE =================
        $(document).on('click', '.deleteBtn', function () {

            let url = $(this).data('url');

            Swal.fire({
                title: 'Are you sure?',
                text: "This image will be deleted permanently!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: url,
                        type: "POST",
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },

                        success: function (response) {

                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: response.message,
                                timer: 1500,
                                showConfirmButton: false
                            });

                            window.location.reload();// or location.reload();
                        }
                    });
                }
            });
        });
    </script>
@endpush
