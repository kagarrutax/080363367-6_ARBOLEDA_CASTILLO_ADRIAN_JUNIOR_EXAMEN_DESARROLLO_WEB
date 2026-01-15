<div class="modal fade" id="editProductModal{{ $product->id }}" tabindex="-1"
    aria-labelledby="editProductModalLabel{{ $product->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content glass-card border-0 p-3">
            <div class="modal-header border-0">
                <h3 class="modal-title fw-bold text-white" id="editProductModalLabel{{ $product->id }}">
                    <i class="fas fa-edit me-2 text-info"></i>Editar Producto
                </h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.update', $product) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-4">
                        <div class="col-12">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Nombre del
                                Producto</label>
                            <input type="text" name="name" class="form-control bg-dark text-white border-secondary"
                                value="{{ $product->name }}" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Descripción</label>
                            <textarea name="description" rows="3"
                                class="form-control bg-dark text-white border-secondary">{{ $product->description }}</textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Precio ($)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-secondary border-secondary text-white">$</span>
                                <input type="number" step="0.01" name="price"
                                    class="form-control bg-dark text-white border-secondary"
                                    value="{{ $product->price }}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Stock</label>
                            <input type="number" name="stock" class="form-control bg-dark text-white border-secondary"
                                value="{{ $product->stock }}" required>
                        </div>

                        <div class="col-12 mt-5">
                            <button type="submit" class="btn btn-premium w-100 py-3">
                                <i class="fas fa-sync me-2"></i>Actualizar Producto
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>