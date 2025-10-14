@extends('admin.layouts.ad')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Food Item</h4>
                        <div class="page-title-right">
                            <a href="{{ route('admin.food-items.index') }}" class="btn btn-secondary">
                                <i class="ri-arrow-left-line"></i> Back to List
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update Food Item Details</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.food-items.update', $foodItem->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="name" class="form-label">Food Name <span class="text-danger">*</span></label>
                                    <input type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           id="name"
                                           name="name"
                                           value="{{ old('name', $foodItem->name) }}"
                                           required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                              id="description"
                                              name="description"
                                              rows="4"
                                              required>{{ old('description', $foodItem->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="price" class="form-label">Price (₦) <span class="text-danger">*</span></label>
                                        <input type="number"
                                               class="form-control @error('price') is-invalid @enderror"
                                               id="price"
                                               name="price"
                                               step="0.01"
                                               min="0"
                                               value="{{ old('price', $foodItem->price) }}"
                                               required>
                                        @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="category" class="form-label">Category</label>
                                        <select class="form-select @error('category') is-invalid @enderror"
                                                id="category"
                                                name="category">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $cat)
                                                <option value="{{ $cat->name }}" {{ old('category', $foodItem->category) == $cat->name ? 'selected' : '' }}>
                                                    {{ $cat->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Food Image</label>

                                    @if($foodItem->image)
                                        <div class="mb-2">
                                            <p class="text-muted mb-2">Current Image:</p>
                                            <img src="{{ asset('storage/' . $foodItem->image) }}"
                                                 alt="{{ $foodItem->name }}"
                                                 class="img-thumbnail"
                                                 style="max-width: 200px;">
                                        </div>
                                    @endif

                                    <input type="file"
                                           class="form-control @error('image') is-invalid @enderror"
                                           id="image"
                                           name="image"
                                           accept="image/*"
                                           onchange="previewImage(event)">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Leave empty to keep current image. Accepted formats: JPG, PNG, GIF (Max: 2MB)</small>

                                    <div id="imagePreview" class="mt-3" style="display: none;">
                                        <p class="text-muted mb-2">New Image Preview:</p>
                                        <img id="preview" src="" alt="Preview" class="img-thumbnail" style="max-width: 300px;">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input"
                                               type="checkbox"
                                               id="is_available"
                                               name="is_available"
                                               value="1"
                                               {{ old('is_available', $foodItem->is_available) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_available">
                                            Available for Order
                                        </label>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('admin.food-items.index') }}" class="btn btn-light">Cancel</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ri-save-line"></i> Update Food Item
                                    </button>
                                </div>
                            </form>
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

<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const preview = document.getElementById('preview');
        const previewDiv = document.getElementById('imagePreview');
        preview.src = reader.result;
        previewDiv.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
@endsection
