@extends('dashboard/layouts/master')

@section('title', 'Productos')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <div class="col-md-12 d-flex align-items-center mb-5 mb-lg-0">
                <!--begin::Sort & Filter-->
                <div class="d-flex flex-stack flex-wrap gap-4">
                    <!--begin::Sort-->
                    <div class="d-flex align-items-center flex-wrap gap-3 gap-xl-9">
                        <!--begin::Type-->
                        <div class="d-flex align-items-center fw-bold">
                            <!--begin::Label-->
                            <div class="text-muted fs-7">Aseguradora</div>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-hide-search="true" data-control="select2" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                <option></option>
                                <option value="Show All" selected="selected">Mostrar todo</option>
                                <option value="axa">AXA</option>
                                <option value="metlife">METLIFE</option>
                                <option value="chubb">CHUBB</option>
                                <option value="zurich">ZURICH</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Type-->
                    </div>
                    <!--end::Sort-->
                </div>
                <!--end::Sort & Filter-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            @forelse($productos as $key => $producto)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="d-flex flex-stack">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                                <div class="symbol-label fs-2 fw-semibold text-inverse-danger">
                                <i class="ki-outline ki-shield-tick fs-2tx"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <!--begin:Author-->
                                <div class="flex-grow-1 me-2">
                                    <a class="text-gray-800 text-hover-primary fs-6 fw-bold"
                                        data-bs-toggle="tooltip" 
                                        data-bs-original-title="{{ $producto->fc_descripcion_producto }}">
                                        {{ Str::limit($producto->fc_descripcion_producto, 18, '...') }}
                                    </a>
                                    <span class="text-muted fw-semibold d-block fs-7">
                                        {{ $producto->fc_descripcion_aseguradora }}
                                    </span>
                                </div>
                                <!--end:Author-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <div class="d-flex flex-stack mt-3 mb-1">
                            <a  href="{{ $producto->fc_kit_url }}"
                                class="btn btn-sm btn-light-primary rounded-pill fs-8 p-2"
                                download> 
                                <i class="ki-duotone ki-cloud-download">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i> Kit bienvenida
                            </a>
                            <a  href="{{ $producto->fc_url_condiciones }}"
                                class="btn btn-sm btn-light-info rounded-pill fs-8 p-2"
                                download> 
                                <i class="ki-duotone ki-cloud-download">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i> Condiciones
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
@endsection