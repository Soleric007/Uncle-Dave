@extends('admin.layouts.ad')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Orders</h4>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Orders Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title flex-grow-1 mb-0">Order List</h5>
                                <div class="flex-shrink-0">
                                    <span class="badge bg-primary">{{ $orders->total() }} Total Orders</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Order #</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Items</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Payment</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                            <th scope="col" class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($orders as $order)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('admin.orders.show', $order->id) }}" class="fw-medium link-primary">
                                                        {{ $order->order_number }}
                                                    </a>
                                                </td>
                                                <td>{{ $order->customer_name }}</td>
                                                <td>{{ $order->customer_phone }}</td>
                                                <td>
                                                    <span class="badge bg-secondary">{{ $order->orderItems->count() }} items</span>
                                                </td>
                                                <td>₦{{ number_format($order->total, 2) }}</td>
                                                <td>
                                                    <span class="badge bg-{{ $order->payment_status == 'confirmed' ? 'success' : 'warning' }}">
                                                        {{ ucfirst($order->payment_status) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-{{ $order->status_badge }}">
                                                        {{ $order->status_text }}
                                                    </span>
                                                </td>
                                                <td>{{ $order->created_at->format('M d, Y') }}</td>
                                                <td class="text-end">
                                                    <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-soft-primary">
                                                        <i class="ri-eye-line"></i> View
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="9">
                                                    <div class="noresult">
                                                        <div class="text-center py-5">
                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                                trigger="loop"
                                                                colors="primary:#405189,secondary:#0ab39c"
                                                                style="width:75px;height:75px">
                                                            </lord-icon>
                                                            <h5 class="mt-3">No Orders Found</h5>
                                                            <p class="text-muted">All customer orders will appear here.</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            @if($orders->hasPages())
                                <div class="d-flex justify-content-end mt-3">
                                    {{ $orders->links('pagination::bootstrap-5') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Uncle Dave.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Soleric
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
