<div class="modal fade" id="createProductModal" tabindex="-1" aria-labelledby="createProductModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content glass-card border-0 p-3">
            <div class="modal-header border-0">
                <h3 class="modal-title fw-bold text-white" id="createProductModalLabel">
                    <i class="fas fa-plus-circle me-2 text-info"></i>Registrar Producto
                </h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-12">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Nombre del
                                Producto</label>
                            <input type="text" name="name" class="form-control bg-dark text-white border-secondary"
                                required>
                        </div>

                        <div class="col-12">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Descripción</label>
                            <textarea name="description" rows="3"
                                class="form-control bg-dark text-white border-secondary"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Precio ($)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-secondary border-secondary text-white">$</span>
                                <input type="number" step="0.01" name="price"
                                    class="form-control bg-dark text-white border-secondary" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Stock Inicial</label>
                            <input type="number" name="stock" class="form-control bg-dark text-white border-secondary"
                                value="0" required>
                        </div>

                        <div class="col-12 mt-5">
                            <button type="submit" class="btn btn-premium w-100 py-3">
                                <i class="fas fa-save me-2"></i>Guardar Producto
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>