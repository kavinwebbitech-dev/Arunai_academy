@extends('admin.layouts.app')
@section('title', 'Landing Page | ' . config('app.name'))
@section('content')
    <style>
        #pages-table {
            font-size: 13.5px;
        }

        #pages-table th {
            padding: 10px 12px;
        }

        #pages-table td {
            padding: 8px 12px;
        }

        dialog {
            border: none;
            padding: 0;
            width: 350px;
            border-radius: .5rem;
            opacity: 0;
            transform: scale(0.8);
            transition: all .25s ease;
        }

        dialog[open] {
            opacity: 1;
            transform: scale(1);
        }

        dialog::backdrop {
            background: rgba(0, 0, 0, .35);
            animation: fadeIn .25s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
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
    </style>


    <div class="main admin-card p-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services List</li>
            </ol>
        </nav>

        <!-- Card for Table -->
        <div class="card-custom table table-hover w-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Services List</h4>
                <div>
                    {{-- <button id="deleteAllPages" class="btn btn-danger ms-2">
                        Delete All
                    </button> --}}
                    <a href="{{ route('admin.service.create') }}" class="btn btn-success" style="background: #198754; color:#fff">Add Service</a>
                </div>
            </div>

            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-bordered table-striped no-wrap" id="service-table" style="min-width: 1000px;">
                    <thead class="text-nowrap">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            {{-- <th>Image</th>
                            <th>Title</th> --}}
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            // Initialize DataTable
            var table = $('#service-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.service.index') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        className: 'text-center'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    // { data: 'image', name: 'image' },
                    // { data: 'title', name: 'title' },
                    {
                        data: 'url_slug',
                        name: 'url_slug'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
    <dialog id="deleteDialog">
    <div class="p-4">
        <h5 class="mb-3">Confirm Delete</h5>

        <p>Are you sure you want to delete?</p>

        <div class="d-flex justify-content-end gap-2 mt-4">
            <button type="button" class="btn btn-secondary" id="closeModal">
                Cancel
            </button>

            <button type="button" class="btn btn-danger" id="confirmDelete">
                Delete
            </button>
        </div>
    </div>
</dialog>

<script>
    let deleteRoute = '';
    let tableId = '';

    // OPEN MODAL
    $(document).on('click', '.delete', function(e) {
        e.preventDefault();

        deleteRoute = $(this).attr('data-route');
        tableId = $(this).attr('data-table-id');

        console.log(deleteRoute);

        if (!deleteRoute) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Delete route missing'
            });

            return;
        }

        document.getElementById('deleteDialog').showModal();
    });

    // CLOSE MODAL
    $(document).on('click', '#closeModal', function() {
        document.getElementById('deleteDialog').close();
    });

    // DELETE
    $(document).on('click', '#confirmDelete', function() {

        $.ajax({
            url: deleteRoute,
            method: 'POST',

            data: {
                _token: '{{ csrf_token() }}',
                _method: 'DELETE'
            },

            beforeSend: function() {

                $('#confirmDelete').html('Deleting...');
                $('#confirmDelete').prop('disabled', true);
            },

            success: function(response) {

                document.getElementById('deleteDialog').close();

                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: response.message ?? 'Deleted Successfully',
                    timer: 1500,
                    showConfirmButton: false
                });

                // Reload DataTable
                if (tableId) {
                    $('#' + tableId).DataTable().ajax.reload(null, false);
                }

            },

            error: function(xhr) {

                console.log(xhr.responseText);

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Delete failed'
                });
            },

            complete: function() {

                $('#confirmDelete').html('Delete');
                $('#confirmDelete').prop('disabled', false);
            }
        });

    });
</script>
@endsection
