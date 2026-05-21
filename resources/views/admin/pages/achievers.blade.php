@extends('admin.layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
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
        .modal-dialog .btn-light{
            color: #fff
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
            background: #002010 !important;
            border-color: #002010 !important;

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
                <h5 class="mb-0 fw-semibold">Add Achievers</h5>

                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAchieverModal">
                    <i class="fa fa-plus me-1"></i>Add Achiever
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
                            <th>Place</th>
                            <th>Category</th>
                            <th>Mark</th>
                            <th>Rank</th>
                            <th>Wing Color</th>
                            <th>Year</th>
                            <th width="100">Image</th>
                            <th width="140">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($achievers as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->place }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->mark }}</td>
                                <td>{{ $item->rank }}</td>
                                <td>{{ $item->wing_color }}</td>
                                <td>{{ $item->year }}</td>
                                <td>
                                    <img src="{{ asset('uploads/achievers/' . $item->image) }}" width="60" height="60"
                                        style="border-radius:8px;object-fit:cover;">
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary editBtn" data-id="{{ $item->id }}"
                                        data-name="{{ $item->name }}" data-category="{{ $item->category }}" data-place="{{ $item->place }}"
                                        data-mark="{{ $item->mark }}" data-rank="{{ $item->rank }}" data-wing_color="{{ $item->wing_color }}"
                                        data-year="{{ $item->year }}"
                                        data-image="{{ asset('uploads/achievers/' . $item->image) }}"
                                        data-url="{{ route('admin.achievers.update', $item->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger deleteBtn" data-id="{{ $item->id }}"
                                        data-url="{{ route('admin.achievers.destroy', $item->id) }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ================= ADD CATEGORY MODAL ================= -->
    <div class="modal fade" id="addAchieverModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="{{ route('admin.achievers.store') }}" id="addAchieverForm"
                enctype="multipart/form-data" class="modal-content border-0 shadow-lg rounded-4">
                @csrf

                <div class="modal-header border-0 px-4 pt-4">
                    <h5 class="modal-title fw-semibold">➕ Add Achiever</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body px-4 pb-3">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Place</label>
                        <input type="text" name="place" class="form-control" placeholder="Enter place" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-control" required>
                            <option value="" disabled selected>Select Category</option>
                            <option value="PGTRB">PGTRB </option>
                            <option value="UGTRB">UGTRB </option>
                            <!--<option value="PGTRB 2024">PGTRB 2024</option>-->
                            <!--<option value="UGTRB 2024">UGTRB 2024</option>-->
                            <!--<option value="PGTRB 2023">PGTRB 2023</option>-->
                            <!--<option value="UGTRB 2023">UGTRB 2023</option>-->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mark</label>
                        <input type="text" name="mark" class="form-control" placeholder="Enter mark" required>
                    </div>
                     <div class="mb-3">
                        <label class="form-label">Rank</label>
                        <input type="text" name="rank" class="form-control" placeholder="Enter Rank" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Wing Color</label>
                        <input type="text" name="wing_color" class="form-control" placeholder="Enter wing color" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Year</label>
                        <select name="year" class="form-control" required>
                            <option value="" disabled selected>Select Year</option>
                            @for ($y = 2019; $y <= 2026; $y++)
                                <option value="{{ $y }}">{{ $y }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>
                </div>

                <div class="modal-footer border-0 px-4 pb-4">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Save Achiever</button>
                </div>
            </form>
        </div>
    </div>

    <!-- ================= EDIT CATEGORY MODAL ================= -->
    <!-- ================= EDIT CATEGORY MODAL ================= -->
    <div class="modal fade" id="editAchieverModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" id="editAchieverForm" action="#" enctype="multipart/form-data"
                class="modal-content border-0 shadow-lg rounded-4">
                @csrf
                @method('PUT')
                <input type="hidden" id="edit_id">

                <div class="modal-header border-0 px-4 pt-4">
                    <h5 class="modal-title fw-semibold">✏️ Edit Achiever</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body px-4 pb-3">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" id="edit_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Place</label>
                        <input type="text" name="place" id="edit_place" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                       <select name="category" id="edit_category" class="form-control" required>
                            <option value="" disabled>Select Category</option>
                        
                            <option value="PGTRB">PGTRB</option>
                            <option value="UGTRB">UGTRB</option>
                        
                            <!--<option value="PGTRB 2024">PGTRB 2024</option>-->
                            <!--<option value="UGTRB 2024">UGTRB 2024</option>-->
                            <!--<option value="PGTRB 2023">PGTRB 2023</option>-->
                            <!--<option value="UGTRB 2023">UGTRB 2023</option>-->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mark</label>
                        <input type="text" name="mark" id="edit_mark" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Rank</label>
                        <input type="text" name="rank" id="edit_rank" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Wing Color</label>
                        <input type="text" name="wing_color" id="edit_wing_color" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Year</label>
                        <select name="year" id="edit_year" class="form-control" required>
                            <option value="" disabled>Select Year</option>
                            @for ($y = 2019; $y <= 2026; $y++)
                                <option value="{{ $y }}">{{ $y }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Change Image <small class="text-muted">(leave blank to keep
                                current)</small></label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Current Image</label><br>
                        <img id="edit_preview_image" src="" width="80" height="80"
                            style="border-radius:8px; object-fit:cover;">
                    </div>
                </div>

                <div class="modal-footer border-0 px-4 pb-4">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Update Achiever</button>
                </div>
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

        // ================= ADD ACHIEVER =================
        $('#addAchieverForm').submit(function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('admin.achievers.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                success: function (response) {
                    // Close modal
                    let addModalEl = document.getElementById('addAchieverModal');
                    let addModal = bootstrap.Modal.getInstance(addModalEl);
                    addModal.hide();

                    // Reset form
                    $('#addAchieverForm')[0].reset();

                    Swal.fire({
                        icon: 'success',
                        title: 'Added!',
                        text: 'Achiever added successfully',
                        timer: 1500,
                        showConfirmButton: false
                    });

                    window.location.reload();
                },
                error: function (xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Something went wrong. Please try again.',
                    });
                }
            });
        });

        $(document).ready(function () {

            // ================= OPEN EDIT MODAL =================
            $(document).on('click', '.editBtn', function () {
                $('#edit_name').val($(this).data('name'));
                $('#edit_place').val($(this).data('place'));
                // $('#edit_category').val($(this).data('category'));
                $('#edit_mark').val($(this).data('mark'));
                $('#edit_rank').val($(this).data('rank'));
                $('#edit_wing_color').val($(this).data('wing_color'));
                $('#edit_year').val($(this).data('year'));
                $('#edit_preview_image').attr('src', $(this).data('image'));
                $('#edit_id').val($(this).data('id'));
                $('#editAchieverForm').attr('action', $(this).data('url'));
                $('#edit_category').trigger('change');
                 $('#edit_category').val($(this).data('category')).trigger('change');

                // ✅ Destroy existing instance first to avoid conflicts
                let modalEl = document.getElementById('editAchieverModal');
                let existingModal = bootstrap.Modal.getInstance(modalEl);
                if (existingModal) {
                    existingModal.dispose();
                }

                new bootstrap.Modal(modalEl).show();
            });

            // ================= SUBMIT EDIT FORM =================
            $('#editAchieverForm').on('submit', function (e) {
                e.preventDefault();

                let formData = new FormData(this);
                let actionUrl = $(this).attr('action');

                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json'
                    },
                    success: function (response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Updated!',
                            text: 'Achiever updated successfully',
                            timer: 1500,
                            showConfirmButton: false
                        });
                        setTimeout(() => location.reload(), 1500);
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Something went wrong. Please try again.'
                        });
                    }
                });
            });

        });

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
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {

                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: response.message,
                                timer: 1500,
                                showConfirmButton: false
                            });

                            setTimeout(() => {
                                location.reload();
                            }, 1200);
                        },
                        error: function () {
                            Swal.fire('Error!', 'Delete failed.', 'error');
                        }
                    });
                }
            });
        });
    </script>
@endpush
