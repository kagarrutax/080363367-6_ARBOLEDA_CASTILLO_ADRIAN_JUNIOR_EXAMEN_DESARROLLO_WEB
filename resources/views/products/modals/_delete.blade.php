<div class="modal fade" id="deleteProductModal{{ $product->id }}" tabindex="-1"
    aria-labelledby="deleteProductModalLabel{{ $product->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content glass-card border-0 p-3">
            <div class="modal-header border-0">
                <h3 class="modal-title fw-bold text-white" id="deleteProductModalLabel{{ $product->id }}">
                    <i class="fas fa-exclamation-triangle me-2 text-danger"></i>Confirmar Eliminación
                </h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body text-center py-4">
                <p class="text-secondary fs-5">¿Estás seguro de que deseas eliminar el producto <br><strong
                        class="text-white">"{{ $product->name }}"</strong>?</p>
                <p class="text-danger small mt-2"><i class="fas fa-info-circle me-1"></i> Esta acción no se puede
                    deshacer.</p>
            </div>
            <div class="modal-footer border-0 justify-content-center gap-3">
                <button type="button" class="btn btn-outline-secondary px-4 py-2"
                    data-bs-dismiss="modal">Cancelar</button>
                <form action="{{ route('products.destroy', $product) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger px-4 py-2 fw-bold">
                        <i class="fas fa-trash me-2"></i>Eliminar Definitivamente
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>