@extends('layouts.app')

@section('content')
    <div class="glass-card p-4 animate-up">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold m-0"><i class="fas fa-list me-3"></i>Lista de Productos</h2>
            <span class="badge bg-info text-dark p-2">{{ $products->count() }} Productos en total</span>
        </div>

        <div class="table-responsive">
            <table class="table table-glass table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th class="text-end">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td class="text-secondary fw-bold">#{{ $product->id }}</td>
                            <td class="fw-semibold">{{ $product->name }}</td>
                            <td class="text-secondary small">{{ Str::limit($product->description, 50) }}</td>
                            <td class="fw-bold">${{ number_format($product->price, 2) }}</td>
                            <td>
                                @if($product->stock <= 5)
                                    <span class="badge bg-danger badge-stock"><i class="fas fa-exclamation-triangle me-1"></i>
                                        {{ $product->stock }}</span>
                                @elseif($product->stock <= 20)
                                    <span class="badge bg-warning text-dark badge-stock">{{ $product->stock }}</span>
                                @else
                                    <span class="badge bg-success badge-stock">{{ $product->stock }}</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('products.edit', $product) }}"
                                        class="btn btn-outline-info btn-sm rounded-3">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST"
                                        onsubmit="return confirm('¿Está seguro de eliminar este producto?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-3">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5">
                                <i class="fas fa-folder-open fa-3x text-secondary mb-3"></i>
                                <p class="text-secondary mb-0">No hay productos registrados aún.</p>
                                <a href="{{ route('products.create') }}"
                                    class="text-info text-decoration-none fw-bold mt-2 d-inline-block">
                                    Crea el primer producto ahora
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection