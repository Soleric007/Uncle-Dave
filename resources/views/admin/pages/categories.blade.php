@extends('admin.layouts.ad')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Food Categories</h4>
                        <div class="page-title-right">
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-success">
                                <i class="ri-add-line align-middle"></i> Add New Category
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

            <!-- Categories Table -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">All Categories</h5>
                        </div>
                        <div class="card-body">
                            @if($categories->count() > 0)
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 50px;">#</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col" style="width: 150px;">Food Items</th>
                                                <th scope="col" style="width: 200px;" class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $index => $category)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                                        <i class="ri-folder-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0">{{ $category->name }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info">{{ $category->foodItems->count() }} items</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-flex gap-2 justify-content-end">
                                                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                               class="btn btn-sm btn-soft-primary">
                                                                <i class="ri-edit-line"></i> Edit
                                                            </a>
                                                            <a href="{{ route('admin.deleteCategory', $category->id) }}"
                                                               class="btn btn-sm btn-soft-danger"
                                                               onclick="return confirm('Are you sure you want to delete this category?');">
                                                                <i class="ri-delete-bin-line"></i> Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="text-center py-5">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                        trigger="loop"
                                        colors="primary:#405189,secondary:#0ab39c"
                                        style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-3">No Categories Yet</h5>
                                    <p class="text-muted">Start by adding your first category.</p>
                                    <a href="{{ route('admin.categories.create') }}" class="btn btn-success mt-2">
                                        <i class="ri-add-line"></i> Add Category
                                    </a>
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
