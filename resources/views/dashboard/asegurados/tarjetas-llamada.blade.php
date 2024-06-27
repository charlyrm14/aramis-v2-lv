@extends('dashboard/layouts/master')

@section('title', 'Resultado búsqueda llamada')

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
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0 table-responsive">
                <!--begin:::Tabs-->
                <div>
                    <h2 class="fs-2x fw-bold my-5"> Resultados </h2>
                    <h6 class="text-muted">Origen: 240626102500338_MIT_03386</h6>
                </div>
                <!--end:::Tabs-->
                <!--begin::User-->
                <div class="row gx-9 gy-6 my-5">
                    <!--begin::Col-->
                    <div class="col-xl-6" data-kt-billing-element="card">
                        <!--begin::Card-->
                        <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6 shadow">
                            <!--begin::Info-->
                            <div class="d-flex flex-column py-2">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/media/svg/card-logos/american-express.svg') }}" alt="" class="me-4">
                                    <!--end::Icon-->
                                    <!--begin::Details-->
                                    <div>
                                        <div class="fs-4 fw-bold">crd.0000EgKXkf111hbhLHV8pEGp</div>
                                        <div class="fs-6 fw-semibold text-gray-500">Últimos digitos: 0000</div>
                                        <div class="fs-6 fw-semibold text-gray-500">Fecha: 2024-06-07 14:00</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center py-2">
                                <button class="btn btn-sm btn-light-primary btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Seleccionar</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6" data-kt-billing-element="card">
                        <!--begin::Card-->
                        <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6 shadow">
                            <!--begin::Info-->
                            <div class="d-flex flex-column py-2">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/media/svg/card-logos/mastercard.svg') }}" alt="" class="me-4">
                                    <!--end::Icon-->
                                    <!--begin::Details-->
                                    <div>
                                        <div class="fs-4 fw-bold">crd.0000EgKXkf111hbhLHV8pEGp</div>
                                        <div class="fs-6 fw-semibold text-gray-500">Últimos digitos: 0000</div>
                                        <div class="fs-6 fw-semibold text-gray-500">Fecha: 2024-06-07 14:00</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center py-2">
                                <button class="btn btn-sm btn-light-primary btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Seleccionar</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6" data-kt-billing-element="card">
                        <!--begin::Card-->
                        <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6 shadow">
                            <!--begin::Info-->
                            <div class="d-flex flex-column py-2">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/media/svg/card-logos/american-express.svg') }}" alt="" class="me-4">
                                    <!--end::Icon-->
                                    <!--begin::Details-->
                                    <div>
                                        <div class="fs-4 fw-bold">crd.0000EgKXkf111hbhLHV8pEGp</div>
                                        <div class="fs-6 fw-semibold text-gray-500">Últimos digitos: 0000</div>
                                        <div class="fs-6 fw-semibold text-gray-500">Fecha: 2024-06-07 14:00</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center py-2">
                                <button class="btn btn-sm btn-light-primary btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Seleccionar</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Notice-->
                        <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6 shadow">
                            <!--begin::Info-->
                            <div class="d-flex flex-column py-2">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/media/svg/card-logos/visa.svg') }}" alt="" class="me-4">
                                    <!--end::Icon-->
                                    <!--begin::Details-->
                                    <div>
                                        <div class="fs-4 fw-bold">crd.0000EgKXkf111hbhLHV8pEGp</div>
                                        <div class="fs-6 fw-semibold text-gray-500">Últimos digitos: 0000</div>
                                        <div class="fs-6 fw-semibold text-gray-500">Fecha: 2024-06-07 14:00</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center py-2">
                                <button class="btn btn-sm btn-light-primary btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Seleccionar</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
</div>
@endsection