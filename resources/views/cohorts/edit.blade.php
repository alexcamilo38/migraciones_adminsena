@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Actualizar Ficha</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('cohorts.update', $cohorts) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Código de la Ficha -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Código de la Ficha
                            </label>
                            <input
                                type="text"
                                name="code"
                                class="form-control"
                                value="{{ old('code', $cohorts->code) }}"
                                placeholder="Ingrese el código o número de la ficha"
                                required>
                        </div>

                        <!-- Fechas Inicio / Fin (Distribuidas en 2 columnas) -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Fecha de Inicio
                                </label>
                                <input
                                    type="date"
                                    name="start_date"
                                    class="form-control"
                                    value="{{ old('start_date', $cohorts->start_date) }}"
                                    required>
                            </div>

                            <!-- CAMPO AGREGADO: Fecha de Fin -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Fecha de Fin
                                </label>
                                <input
                                    type="date"
                                    name="end_date"
                                    class="form-control"
                                    value="{{ old('end_date', $cohorts->end_date) }}"
                                    required>
                            </div>
                        </div>

                        <!-- Horario -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Horario
                            </label>
                            <input
                                type="text"
                                name="schedule"
                                class="form-control"
                                value="{{ old('schedule', $cohorts->schedule) }}"
                                placeholder="Ingrese el horario (Ej. 07:00 a 13:00)">
                        </div>

                        <!-- Oferta -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Oferta
                            </label>

                            <select name="offer_id" class="form-select" required>
                                <option value="">Seleccione una oferta...</option>

                                @foreach($offer as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('offer_id', $cohorts->offer_id) == $item->id ? 'selected' : '' }}>
                                        Oferta #{{ $item->id }} - {{ $item->shift }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Botones de Acción -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-success">
                                Actualizar Ficha
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection