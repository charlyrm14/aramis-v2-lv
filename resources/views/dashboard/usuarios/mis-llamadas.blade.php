@extends('dashboard/layouts/master')

@section('title', 'Mis llamadas')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-md-12 mb-5 mb-xl-10">
                <!--begin::Card-->
                <div class="card card-flush h-xl-80 border-0">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Historial de llamadas</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->
                            <div class="card-toolbar">
                                <!--begin::Filters-->
                                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                                    <!--begin::Display range-->
                                    <div class="text-gray-600 fw-bold">Cargando rango de fechas...</div>
                                    <!--end::Display range-->
                                    <i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
                                </div>
                                <!--begin::Filters-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-100px"></th>
                                        <th class="text-end min-w-125px"></th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-outline ki-call fs-3 text-gray-600"></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">(+52) 55 3232 2451</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-8 d-block text-start ps-0">240712101113718_MIT_03380</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <span class="text-gray-500 fw-semibold fs-8 d-block text-start ps-0">ayer</span>
                                                <a   href="#"
                                                        class="badge badge-circle badge-primary"                                                   
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_informacion_llamada">
                                                    <i class="ki-outline ki-information-2 fs-3 text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-outline ki-call fs-3 text-gray-600"></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">(+52) 55 3232 2451</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-8 d-block text-start ps-0">240712101113718_MIT_03379</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <span class="text-gray-500 fw-semibold fs-8 d-block text-start ps-0">ayer</span>
                                                <a   href="#"
                                                        class="badge badge-circle badge-primary"                                                   
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_informacion_llamada">
                                                    <i class="ki-outline ki-information-2 fs-3 text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-outline ki-call fs-3 text-gray-600"></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">(+52) 55 3232 2451</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-8 d-block text-start ps-0">240712101113718_MIT_03378</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <span class="text-gray-500 fw-semibold fs-8 d-block text-start ps-0">ayer</span>
                                                <a   href="#"
                                                        class="badge badge-circle badge-primary"                                                   
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_informacion_llamada">
                                                    <i class="ki-outline ki-information-2 fs-3 text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-outline ki-call fs-3 text-gray-600"></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">(+52) 55 3232 2451</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-8 d-block text-start ps-0">240712101113718_MIT_03377</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <span class="text-gray-500 fw-semibold fs-8 d-block text-start ps-0">ayer</span>
                                                <a   href="#"
                                                        class="badge badge-circle badge-primary"                                                   
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_informacion_llamada">
                                                    <i class="ki-outline ki-information-2 fs-3 text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-outline ki-call fs-3 text-gray-600"></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">(+52) 55 3232 2451</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-8 d-block text-start ps-0">240712101113718_MIT_03376</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <span class="text-gray-500 fw-semibold fs-8 d-block text-start ps-0">ayer</span>
                                                <a   href="#"
                                                        class="badge badge-circle badge-primary"                                                   
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_informacion_llamada">
                                                    <i class="ki-outline ki-information-2 fs-3 text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <!--begin::Card-->
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->

@include('dashboard/usuarios/modal-info-llamada')
@endsection