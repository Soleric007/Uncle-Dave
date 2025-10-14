@extends('admin.layouts.ad')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Food Items</h4>
                        <div class="page-title-right">
                            <a href="{{ route('admin.food-items.create') }}" class="btn btn-success">
                                <i class="ri-add-line align-middle"></i> Add New Food Item
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

            <!-- Food Items Grid -->
            <div class="row">
                @forelse($foodItems as $item)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/placeholder.jpg') }}"
                                         alt="{{ $item->name }}"
                                         class="img-fluid rounded"
                                         style="height: 200px; width: 100%; object-fit: cover;">

                                    @if($item->is_available)
                                        <span class="badge bg-success position-absolute top-0 end-0 m-2">Available</span>
                                    @else
                                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">Unavailable</span>
                                    @endif
                                </div>

                                <div class="mt-3">
                                    <h5 class="mb-1">{{ $item->name }}</h5>
                                    <p class="text-muted mb-2" style="font-size: 0.875rem;">
                                        {{ Str::limit($item->description, 60) }}
                                    </p>
                                    <p class="text-muted mb-2">
                                        <span class="badge bg-info">{{ $item->category }}</span>
                                    </p>
                                    <h5 class="text-primary mb-3">₦{{ number_format($item->price, 2) }}</h5>

                                    <div class="d-flex gap-2">
                                        <a href="{{ route('admin.food-items.edit', $item->id) }}"
                                           class="btn btn-sm btn-soft-primary flex-fill">
                                            <i class="ri-edit-line"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.food-items.destroy', $item->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete this item?');"
                                              class="flex-fill">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-soft-danger w-100">
                                                <i class="ri-delete-bin-line"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center py-5">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                    trigger="loop"
                                    colors="primary:#405189,secondary:#0ab39c"
                                    style="width:75px;height:75px">
                                </lord-icon>
                                <h5 class="mt-3">No Food Items Yet</h5>
                                <p class="text-muted">Start by adding your first food item.</p>
                                <a href="{{ route('admin.food-items.create') }}" class="btn btn-success mt-2">
                                    <i class="ri-add-line"></i> Add Food Item
                                </a>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($foodItems->hasPages())
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            {{ $foodItems->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            @endif

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
