@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="glass-card p-5 animate-up">
                <div class="mb-4 d-flex align-items-center">
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-sm me-3 border-0">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <h2 class="fw-bold m-0 text-white">Registrar Producto</h2>
                </div>

                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-12">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Nombre del
                                Producto</label>
                            <input type="text" name="name"
                                class="form-control bg-dark text-white border-secondary @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Descripción</label>
                            <textarea name="description" rows="3"
                                class="form-control bg-dark text-white border-secondary @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Precio ($)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-secondary border-secondary text-white">$</span>
                                <input type="number" step="0.01" name="price"
                                    class="form-control bg-dark text-white border-secondary @error('price') is-invalid @enderror"
                                    value="{{ old('price') }}" required>
                            </div>
                            @error('price')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Stock Inicial</label>
                            <input type="number" name="stock"
                                class="form-control bg-dark text-white border-secondary @error('stock') is-invalid @enderror"
                                value="{{ old('stock', 0) }}" required>
                            @error('stock')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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

    <style>
        .form-control:focus {
            background-color: #1e293b !important;
            border-color: #38bdf8 !important;
            box-shadow: 0 0 0 0.25rem rgba(56, 189, 248, 0.25);
            color: white !important;
        }
    </style>
@endsection