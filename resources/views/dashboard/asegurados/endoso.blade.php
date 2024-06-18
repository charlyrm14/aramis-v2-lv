@extends('dashboard/layouts/master')

@section('title', 'Endoso')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <ul class="breadcrumb fw-semibold fs-8 my-1">
            <li class="breadcrumb-item text-muted">
                <a href="index.html" class="text-muted text-hover-primary">Inicio</a>
            </li>
            <li class="breadcrumb-item text-muted">Asegurado</li>
            <li class="breadcrumb-item text-muted">Endoso</li>
        </ul>
        <h2 class="fs-2x fw-bold my-5">Endoso</h2>
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::Messenger-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_tab_pane_endoso_titular">
                        Datos del títular
                    </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_tab_pane_endoso_contratante"> 
                        Datos del contratante 
                    </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_tab_pane_endoso_poliza"> Cambio póliza </a>
                </li>
                <!--end::Nav item-->
            </ul>
            <!--end::Messenger-->
            <!--begin::tabs-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kt_tab_pane_endoso_titular" role="tabpanel">
                    <div class="my-5">
                        <div class="mb-15">
                            <!--begin::Form-->
                            <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Nombre</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Nombre" data-bs-original-title="Nombre" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Nombre títular" name="target_title">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Apellido paterno</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Nombre" data-bs-original-title="Nombre" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Apellido paterno títular" name="target_title">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group--><!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Apellido materno</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Nombre" data-bs-original-title="Nombre" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Apellido materno títular" name="target_title">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                        <span class="indicator-label">Actualizar</span>
                                        <span class="indicator-progress">Por favor espera... 
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_tab_pane_endoso_contratante" role="tabpanel">
                    <div class="my-5">
                        <div class="mb-15">
                            <!--begin::Form-->
                            <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Nombre</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Nombre" data-bs-original-title="Nombre" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Nombre Contratante" name="target_title">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Apellido paterno</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Nombre" data-bs-original-title="Nombre" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Apellido paterno contratante" name="target_title">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group--><!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Apellido materno</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Nombre" data-bs-original-title="Nombre" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Apellido materno contratante" name="target_title">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                        <span class="indicator-label">Actualizar</span>
                                        <span class="indicator-progress">Por favor espera... 
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_tab_pane_endoso_poliza" role="tabpanel">
                    <div class="my-5">
                        <div class="mb-15">
                            <!--begin::Form-->
                            <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-5">
                                        Plan actual: INDIVUAL ESSENTIAL
                                    </label>
                                    <!--end::Label-->
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8">
                                    <label class="fs-6 fw-semibold mb-2">PLAN</label>
                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecciona un plan" name="target_assign">
                                        <option value="">Selecciona</option>
                                        <option value="1">ESSENTIAL</option>
                                        <option value="2">ADVANCED</option>
                                        <option value="3">ELITE</option>
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                        <span class="indicator-label">Cambiar</span>
                                        <span class="indicator-progress">Por favor espera... 
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::tabs-->
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
@endsection