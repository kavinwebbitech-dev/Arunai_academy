@extends('admin.layouts.app')

@section('content')

    <style>
         .modal-dialog .btn-light{
            color: #fff
        }
        /* Dashboard Grid */
        .dashboard-wrapper {
            padding: 40px 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
        }

        /* Stat Card */
        .stat-card {
            position: relative;
            background: #ffffff;
            border-radius: 20px;
            padding: 28px 24px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        /* Icon */
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: #fff;
        }

        /* Background gradients */
        .bg-category {
            background: linear-gradient(135deg, #002010, #002010cc);
        }

        .bg-product {
            background: linear-gradient(135deg, #10b981, #059669);
        }

        .bg-user {
            background: linear-gradient(135deg, #f59e0b, #d97706);
        }

        .bg-order {
            background: linear-gradient(135deg, #ef4444, #b91c1c);
        }

        /* Decorative circle */
        .decor-circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.15;
        }

        /* Content */
        .stat-content h6 {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: #9ca3af;
            margin-bottom: 4px;
        }

        .stat-content h2 {
            font-size: 32px;
            font-weight: 700;
            margin: 0;
            color: #111827;
        }

        .stat-content p {
            font-size: 13px;
            color: #6b7280;
            margin-top: 4px;
        }

        .stat-icon i {
            font-size: 32px;
            color: #fff;
        }

        #orderTable thead th {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            color: #6b7280;
            border-bottom: 1px solid #e5e7eb;
        }

        #orderTable tbody td {
            font-size: 14px;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
        }

        #orderTable tbody tr:hover {
            background: #f9fafb;
        }

        .card {
            border-radius: 20px;
        }

        .table thead th {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #6b7280;
            border-bottom: 1px solid #e5e7eb;
        }

        .table tbody td {
            font-size: 14px;
            vertical-align: middle;
            padding: 14px 10px;
        }

        .table-hover tbody tr:hover {
            background: #f9fafb;
        }

        .badge-status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <div class="container-fluid py-4">
        <div class="dashboard-wrapper">

            <!-- Categories Card -->
            <div class="stat-card">
                <div class="decor-circle" style="top:-20px; right:-20px; width:80px; height:80px; background:#6366f1;">
                </div>
                <div class="stat-icon bg-category">
                    <i class="bi bi-grid"></i>
                </div>
                <div class="stat-content">
                    <h6>Number of Images</h6>
                    {{-- <h2>{{ $categoryCount }}</h2> --}}
                    <p>Total categories available</p>
                </div>
            </div>



        </div>


    </div>

@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
@push('scripts')
    <script>



    </script>


@endpush
