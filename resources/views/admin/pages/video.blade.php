@extends('admin.layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <h5 class="mb-0 fw-semibold"> Category </h5>

                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                    <i class="fa fa-plus me-1"></i> Add Category
                </button>
            </div>


            <!-- TABLE -->
            <div class="table-responsive premium-table">
                <table id="categoryTable" class="table table-hover w-100">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th width="120">Youtube URL</th>
                            <th width="140">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $key => $value)
                            @if ($value->youtube_url)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->youtube_url }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary editBtn"
                                            data-youtube="{{ $value->youtube_url }}"
                                            data-url="{{ route('media.update', $value->id) }}">
                                            Edit
                                        </button>

                                        <button class="btn btn-sm btn-danger deleteBtn"
                                            data-url="{{ route('media.delete', $value->id) }}">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addCategoryModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" id="addForm" class="modal-content border-0 shadow-lg rounded-4"> @csrf <div
                    class="modal-header border-0 px-4 pt-4">
                    <h5 class="modal-title fw-semibold">➕ Add Media</h5> <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body px-4 pb-3">
                    <div class="mb-3">
                        <label class="form-label">Paste Youtube Link</label>
                        <input type="text" name="youtube_url" id="title" class="form-control"
                            placeholder="Paste YouTube Link" required>
                    </div>
                </div>
                <div class="modal-footer border-0 px-4 pb-4"> <button type="button" class="btn btn-light"
                        data-bs-dismiss="modal"> Cancel </button> <button type="submit" id="submit"
                        class="btn btn-danger">
                        Save Gallery </button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="editCategoryModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" id="editForm" class="modal-content border-0 shadow-lg rounded-4">
                @csrf
                @method('PUT')
                <input type="hidden" id="edit_id">

                <div class="modal-header border-0 px-4 pt-4">
                    <h5 class="modal-title fw-semibold">➕ Edit Media</h5> <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body px-4 pb-3">
                    <div class="mb-3"> <label class="form-label">Edit YouTube Link</label> <input type="text"
                            name="youtube_url" id="youtube_url" class="form-control" placeholder="Enter YouTube link"
                            required> </div>
                </div>
                <div class="modal-footer border-0 px-4 pb-4"> <button type="button" class="btn btn-light"
                        data-bs-dismiss="modal"> Cancel </button> <button type="submit" id="submit"
                        class="btn btn-danger">
                        Save URL </button> </div>
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
        // ADD
        $('#addForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('video.store') }}",
                type: "POST",
                data: $(this).serialize(),

                success: function(response) {

                    $('#addCategoryModal').modal('hide');

                    Swal.fire({
                        icon: 'success',
                        title: 'Added!',
                        text: 'Video added successfully',
                        timer: 1500,
                        showConfirmButton: false

                    }).then(() => {
                        location.reload();
                    });
                },

                error: function(xhr) {

                    console.log(xhr.responseText);

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Failed to add video!'
                    });
                }
            });
        });
        // OPEN EDIT MODAL
        // OPEN EDIT MODAL
        $(document).on('click', '.editBtn', function() {

            let youtube = $(this).data('youtube');
            let url = $(this).data('url');

            $('#youtube_url').val(youtube);
            $('#editForm').attr('action', url);

            var modal = new bootstrap.Modal(document.getElementById('editCategoryModal'));
            modal.show();
        });
        // UPDATE
        $('#editForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $(this).serialize(),

                success: function(response) {

                    Swal.fire({
                        icon: 'success',
                        title: 'Updated!',
                        text: 'Video updated successfully',
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        location.reload();
                    });
                },

                error: function(xhr) {

                    console.log(xhr.responseText);

                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Something went wrong'
                    });
                }
            });
        });

        // DELETE
        $(document).on('click', '.deleteBtn', function() {

            let url = $(this).data('url');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, Delete it!'
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },

                        success: function(response) {

                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: 'Video deleted successfully',
                                timer: 1500,
                                showConfirmButton: false

                            }).then(() => {
                                location.reload();
                            });
                        },

                        error: function(xhr) {

                            console.log(xhr.responseText);

                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Delete failed!'
                            });
                        }
                    });

                }
            });
        });
    </script>
@endpush
