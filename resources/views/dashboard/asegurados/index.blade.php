@extends('dashboard/layouts/master')

@section('title', 'Resultado búsqueda')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card border-0 ">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                        <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Filtar resultados" />
                    </div>
                    <!--end::Search-->
                </div>
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <!--begin::Add product-->
                    <a  href="#" 
                        class="btn btn-primary d-flex justify-content-between align-items-center gap-5"
                        data-bs-toggle="modal"
                        data-bs-target="#kt_modal_nuevo_asegurado">
                        Nuevo asegurado
                    </a>
                    <!--end::Add product-->
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0 table-responsive">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                    <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">Nombre</th>
                            <th class="min-w-125px">RFC</th>
                            <th class="min-w-125px">Fecha nacimiento</th>
                            <th class="text-end min-w-70px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @forelse ($asegurados as $asegurado)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-3">
                                        <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                                            {{ $asegurado->fc_nombre_asegurado }}
                                        </a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">
                                            {{ $asegurado->fc_email }}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-gray-600 text-hover-primary mb-1">
                                    {{ $asegurado->fc_rfc }}
                                </a>
                            </td>
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-success"> {{ $asegurado->fi_fecha_nacimiento }} </div>
                                <!--end::Badges-->
                            </td>
                            <td class="text-end">
                                <a  href="#" 
                                    class="btn btn-sm btn-primary btn-flex btn-center btn-active-light-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_verbal_id">
                                    Seleccionar <i class="ki-outline ki-right fs-5 ms-1"></i>
                                </a>
                            </td>
                        </tr>  
                        @empty
                        @endforelse
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->

@include('dashboard/asegurados/verbal-id')

@endsection