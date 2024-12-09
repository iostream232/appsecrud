@extends('tablar::page')

@section('title')
    Tipos Aprendizaje1
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                       Lista de alumnos
                    </div>
                   
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('tipos-aprendizaje1s.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Registrar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            @if(config('tablar','display_alert'))
                @include('tablar::common.alert')
            @endif
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tipos Aprendizaje 1°</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    Mostrar
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="10" size="3"
                                               aria-label="Invoices count">
                                    </div>
                                    entradas
                                </div>
                                <div class="ms-auto text-muted">
                                    Buscar:
                                <div class="ms-2 d-inline-block">
                              <input type="text" id="searchInput" class="form-control form-control-sm" 
                                   placeholder="Buscar por nombre, estilo o ritmo" aria-label="Search">
                                </div>
                                </div>

                            </div>
                        </div>
                        <div class="table-responsive min-vh-100">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                <tr>
                                    <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                                           aria-label="Select all invoices"></th>
                                    <th class="w-1">No.
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-sm text-dark icon-thick" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="6 15 12 9 18 15"/>
                                        </svg>
                                    </th>
                                    
										<th>Nombre</th>
										<th>Estilo</th>
										<th>Ritmo</th>

                                    <th class="w-1"></th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse ($tiposAprendizaje1s as $tiposAprendizaje1)
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                   aria-label="Select tiposAprendizaje1"></td>
                                        <td>{{ ++$i }}</td>
                                        
											<td>{{ $tiposAprendizaje1->nombre }}</td>
											<td>{{ $tiposAprendizaje1->estilo }}</td>
											<td>{{ $tiposAprendizaje1->ritmo }}</td>
                                            <td class=" {{ $tiposAprendizaje1->ritmo === 'rapido' ? 'bg-success text-white' : '' }}
                                                        {{ $tiposAprendizaje1->ritmo === 'moderado' ? 'bg-warning text-dark' : '' }}
                                                        {{ $tiposAprendizaje1->ritmo === 'lento' ? 'bg-danger text-white' : '' }}">
                                        <td>
                                            <div class="btn-list flex-nowrap">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle align-text-top"
                                                            data-bs-toggle="dropdown">
                                                       Acciones
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                           href="{{ route('tipos-aprendizaje1s.show',$tiposAprendizaje1->id) }}">
                                                            Ver informacion
                                                        </a>
                                                        <a class="dropdown-item"
                                                           href="{{ route('tipos-aprendizaje1s.edit',$tiposAprendizaje1->id) }}">
                                                            Editar
                                                        </a>
                                                        <form
                                                            action="{{ route('tipos-aprendizaje1s.destroy',$tiposAprendizaje1->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                    onclick="if(!confirm('Do you Want to Proceed?')){return false;}"
                                                                    class="dropdown-item text-red"><i
                                                                    class="fa fa-fw fa-trash"></i>
                                                                Eliminar
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <td>No existen datos para mostrar</td>
                                @endforelse
                                </tbody>

                            </table>
                        </div>
                       <div class="card-footer d-flex align-items-center">
                            {!! $tiposAprendizaje1s->links('tablar::pagination') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');  // Referencia al input de búsqueda
        const tableRows = document.querySelectorAll('table tbody tr'); // Referencia a todas las filas de la tabla

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.toLowerCase(); // Convierte el valor de búsqueda a minúsculas

            tableRows.forEach(row => {
                // Obtén las celdas de cada fila que contienen "Nombre", "Estilo" y "Ritmo"
                const nombreCell = row.querySelector('td:nth-child(3)');
                const estiloCell = row.querySelector('td:nth-child(4)');
                const ritmoCell = row.querySelector('td:nth-child(5)');

                // Si alguna de las celdas contiene el texto de búsqueda, mostramos la fila
                const nombre = nombreCell ? nombreCell.textContent.toLowerCase() : '';
                const estilo = estiloCell ? estiloCell.textContent.toLowerCase() : '';
                const ritmo = ritmoCell ? ritmoCell.textContent.toLowerCase() : '';

                if (nombre.includes(searchTerm) || estilo.includes(searchTerm) || ritmo.includes(searchTerm)) {
                    row.style.display = '';  // Mostrar fila
                } else {
                    row.style.display = 'none';  // Ocultar fila
                }
            });
        });
    });
</script>
