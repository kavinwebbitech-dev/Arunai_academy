@extends('admin.layouts.app')
@section('title', 'Enquiry | ' . config('app.name'))
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
                <li class="breadcrumb-item active" aria-current="page">Enquiry List</li>
            </ol>
        </nav>

        <!-- Card for Table -->
        <div class="card-custom ">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Enquiry List</h4>
                <a href="javascript:void(0);" data-title="Add Enquiry"
                    data-route="{{ route('admin.enquiry.create') }}"class="btn btn-success common_model">Add Enquiry</a>
            </div>

            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-bordered table-striped no-wrap" id="enquiry" style="min-width: 1000px;">
                    <thead class="text-nowrap">
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Course</th>
                            <th>Form Type</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="form-model" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="model-title"></h5>

                    <button type="button" class="btn-close closeModal"></button>
                </div>

                <div class="modal-body" id="model-body">
                </div>

            </div>
        </div>
    </div>
    <script>
        $(function() {

            // DataTable
            $('#enquiry').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.enquiry.index') }}',
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'message',
                        name: 'message'
                    },
                    {
                        data: 'subject',
                        name: 'subject'
                    },
                    {
                        data: 'type',
                        name: 'type'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
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


        /* ===============================
           OPEN ADD / EDIT MODAL
        ================================= */
        $(document).on('click', '.common_model', function(e) {
            e.preventDefault();

            let model_title = $(this).data('title');
            let model_route = $(this).data('route');
            let model_size = $(this).data('size') ?? '';

            $('#model-title').text(model_title);

            $('#model-body').html(`
        <div class="text-center py-5">
            <div class="spinner-border text-primary"></div>
        </div>
    `);

            // Reset modal size classes
            $('.modal-dialog')
                .removeClass('modal-sm modal-lg modal-xl')
                .addClass(model_size);

            $.ajax({
                url: model_route,
                type: 'GET',

                success: function(response) {

                    // If response is HTML directly
                    if (response.html) {
                        $('#model-body').html(response.html);
                    } else {
                        $('#model-body').html(response);
                    }

                    // Bootstrap 5
                    $('#form-model').modal('show');
                },

                error: function() {
                    toastr.error('Failed to load form');
                }
            });
        });


        /* ===============================
           CLOSE MODAL
        ================================= */
        $(document).on('click', '.closeModal', function() {

            // Bootstrap 5
            $('#form-model').modal('hide');

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
