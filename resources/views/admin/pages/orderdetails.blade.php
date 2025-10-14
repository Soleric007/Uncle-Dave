@extends('admin.layouts.ad')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Order Details - {{ $order->order_number }}</h4>
                        <div class="page-title-right">
                            <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">
                                <i class="ri-arrow-left-line"></i> Back to Orders
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="row">
                <!-- Order Summary Card -->
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title flex-grow-1 mb-0">Order Information</h5>
                                <span class="badge bg-{{ $order->status_badge }} fs-12">{{ $order->status_text }}</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-muted mb-3">Customer Details</h6>
                                    <p class="mb-1"><strong>Name:</strong> {{ $order->customer_name }}</p>
                                    <p class="mb-1"><strong>Email:</strong> {{ $order->customer_email }}</p>
                                    <p class="mb-1"><strong>Phone:</strong> {{ $order->customer_phone }}</p>
                                    <p class="mb-0"><strong>Address:</strong> {{ $order->delivery_address }}</p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-muted mb-3">Order Details</h6>
                                    <p class="mb-1"><strong>Order Number:</strong> {{ $order->order_number }}</p>
                                    <p class="mb-1"><strong>Order Date:</strong> {{ $order->created_at->format('M d, Y h:i A') }}</p>
                                    <p class="mb-1"><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</p>
                                    <p class="mb-0">
                                        <strong>Payment Status:</strong>
                                        <span class="badge bg-{{ $order->payment_status == 'confirmed' ? 'success' : 'warning' }}">
                                            {{ ucfirst($order->payment_status) }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Items -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Order Items</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Food Item</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col" class="text-end">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->orderItems as $item)
                                            <tr>
                                                <td>{{ $item->food_name }}</td>
                                                <td>₦{{ number_format($item->price, 2) }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td class="text-end">₦{{ number_format($item->subtotal, 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="table-light">
                                        <tr>
                                            <td colspan="3" class="text-end"><strong>Subtotal:</strong></td>
                                            <td class="text-end">₦{{ number_format($order->subtotal, 2) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-end"><strong>Delivery Fee:</strong></td>
                                            <td class="text-end">₦{{ number_format($order->delivery_fee, 2) }}</td>
                                        </tr>
                                        
                                        <tr class="border-top">
                                            <td colspan="3" class="text-end"><h5 class="mb-0">Total:</h5></td>
                                            <td class="text-end"><h5 class="mb-0 text-primary">₦{{ number_format($order->total, 2) }}</h5></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Status Update -->
                <div class="col-xl-4">
                    <!-- Payment Confirmation -->
                    @if($order->payment_status != 'confirmed')
                        <div class="card">
                            <div class="card-header bg-warning-subtle">
                                <h5 class="card-title mb-0">⚠️ Payment Pending</h5>
                            </div>
                            <div class="card-body">
                                <p class="mb-3">Customer has not completed payment yet.</p>
                                <form action="{{ route('admin.orders.confirm-payment', $order->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success w-100" onclick="return confirm('Confirm that payment has been received?');">
                                        <i class="ri-check-line"></i> Confirm Payment Received
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif

                    <!-- Order Status Update -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update Order Status</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.orders.update-status', $order->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="status" class="form-label">Select New Status</label>
                                    <select name="status" id="status" class="form-select" required>
                                        <option value="" disabled selected>Choose status...</option>
                                        <option value="payment_confirmed" {{ $order->order_status == 'payment_confirmed' ? 'disabled' : '' }}>
                                            💰 Payment Confirmed
                                        </option>
                                        <option value="cooking" {{ $order->order_status == 'cooking' ? 'disabled' : '' }}>
                                            👨‍🍳 Cooking in Progress
                                        </option>
                                        <option value="ready" {{ $order->order_status == 'ready' ? 'disabled' : '' }}>
                                            ✅ Food Ready
                                        </option>
                                        <option value="out_for_delivery" {{ $order->order_status == 'out_for_delivery' ? 'disabled' : '' }}>
                                            🚗 Out for Delivery
                                        </option>
                                        <option value="delivered" {{ $order->order_status == 'delivered' ? 'disabled' : '' }}>
                                            🎉 Delivered
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="ri-refresh-line"></i> Update Status
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Order Timeline -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Order Timeline</h5>
                        </div>
                        <div class="card-body">
                            <div class="timeline">
                                <div class="timeline-item {{ $order->payment_confirmed_at ? 'completed' : '' }}">
                                    <div class="timeline-icon bg-success">
                                        <i class="ri-check-line"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Payment Confirmed</h6>
                                        <p class="text-muted mb-0">
                                            {{ $order->payment_confirmed_at ? $order->payment_confirmed_at->format('M d, Y h:i A') : 'Pending' }}
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item {{ $order->cooking_started_at ? 'completed' : '' }}">
                                    <div class="timeline-icon bg-primary">
                                        <i class="ri-restaurant-line"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Cooking Started</h6>
                                        <p class="text-muted mb-0">
                                            {{ $order->cooking_started_at ? $order->cooking_started_at->format('M d, Y h:i A') : 'Not started' }}
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item {{ $order->ready_at ? 'completed' : '' }}">
                                    <div class="timeline-icon bg-info">
                                        <i class="ri-checkbox-circle-line"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Food Ready</h6>
                                        <p class="text-muted mb-0">
                                            {{ $order->ready_at ? $order->ready_at->format('M d, Y h:i A') : 'Not ready' }}
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item {{ $order->out_for_delivery_at ? 'completed' : '' }}">
                                    <div class="timeline-icon bg-warning">
                                        <i class="ri-truck-line"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Out for Delivery</h6>
                                        <p class="text-muted mb-0">
                                            {{ $order->out_for_delivery_at ? $order->out_for_delivery_at->format('M d, Y h:i A') : 'Not dispatched' }}
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item {{ $order->delivered_at ? 'completed' : '' }}">
                                    <div class="timeline-icon bg-success">
                                        <i class="ri-gift-line"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Delivered</h6>
                                        <p class="text-muted mb-0">
                                            {{ $order->delivered_at ? $order->delivered_at->format('M d, Y h:i A') : 'Not delivered' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
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

<style>
.timeline {
    position: relative;
    padding: 0;
}

.timeline-item {
    position: relative;
    padding-left: 50px;
    padding-bottom: 20px;
}

.timeline-item:not(:last-child):before {
    content: '';
    position: absolute;
    left: 15px;
    top: 30px;
    bottom: -20px;
    width: 2px;
    background: #e9ecef;
}

.timeline-item.completed:not(:last-child):before {
    background: #28a745;
}

.timeline-icon {
    position: absolute;
    left: 0;
    top: 0;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 14px;
    opacity: 0.5;
}

.timeline-item.completed .timeline-icon {
    opacity: 1;
}

.timeline-content h6 {
    font-size: 14px;
}

.timeline-content p {
    font-size: 12px;
}
</style>
@endsection
