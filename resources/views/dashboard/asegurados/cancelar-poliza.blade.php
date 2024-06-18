@extends('dashboard/layouts/master')

@section('title', 'Cancelación póliza')

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
            <li class="breadcrumb-item text-muted">Cancelación</li>
        </ul>
        <h2 class="fs-2x fw-bold my-5">Cancelación</h2>
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::Messenger-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_tab_pane_cancelacion_titular">
                        Información póliza
                    </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_tab_pane_cancelacion_historico_ocurrencias"> 
                        Histórico de ocurrencias
                    </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_tab_pane_cancelacion_retencion"> 
                        Retención póliza 
                    </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_tab_pane_cancelar_poliza"> 
                        Cancelar póliza 
                    </a>
                </li>
                <!--end::Nav item-->
            </ul>
            <!--end::Messenger-->
            <!--begin::tabs-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kt_tab_pane_cancelacion_titular" role="tabpanel">
                    <div class="my-5">
                        <div class="mb-15">
                            <!--begin::Info-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Descripción plan</a>
                                        <span class="fw-semibold d-block fs-6">FAMILIAR ADVANCED</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Número plan campaña</a>
                                        <span class="fw-semibold d-block fs-6">1</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Clave asegurado</a>
                                        <span class="fw-semibold d-block fs-6">371778FHNRL1008</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Número certificado</a>
                                        <span class="fw-semibold d-block fs-6">UNICO</span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-10"></div>
                            <!--end::Info-->
                            <!--begin::Info-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Prima total</a>
                                        <span class="fw-semibold d-block fs-6">43.00</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Fecha emisión</a>
                                        <span class="fw-semibold d-block fs-6">1</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Fecha inicio vigencia</a>
                                        <span class="fw-semibold d-block fs-6">2023-07-24</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Fecha fin vigencia</a>
                                        <span class="fw-semibold d-block fs-6">2023-07-24</span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-10"></div>
                            <!--end::Info-->
                            <!--begin::Info-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Nombre asegurado</a>
                                        <span class="fw-semibold d-block fs-6">VARGAS-GOMEZ-FERNANDO LUIS</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Tipo asegurado</a>
                                        <span class="fw-semibold d-block fs-6">TITULAR</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Correo</a>
                                        <span class="fw-semibold d-block fs-6">FERNANDOVARGAS_G@HOTMAIL.COM</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">RFC</a>
                                        <span class="fw-semibold d-block fs-6">VAGF690530</span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-10"></div>
                            <!--end::Info-->
                            <!--begin::Info-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Sexo</a>
                                        <span class="fw-semibold d-block fs-6">M</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Fecha nacimiento</a>
                                        <span class="fw-semibold d-block fs-6">1969-05-30</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Estado civil</a>
                                        <span class="fw-semibold d-block fs-6">0 - NO DECLARADO</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a class="text-gray-500 fw-bold text-hover-primary mb-1 fs-5">Dirección</a>
                                        <span class="fw-semibold d-block fs-6">LAGO CANTEMUAL</span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-10"></div>
                            <!--end::Info-->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_tab_pane_cancelacion_historico_ocurrencias" role="tabpanel">
                    <div class="my-5">
                        <div class="mb-15">
                            <!--begin::Historico-->
                            <div class="timeline timeline-border-dashed">
                                <!-- item -->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-tablet-text-up fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">RECIBOS FISCALES</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">2023-09-26 04:57:75</div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <!--begin::Record-->
                                            <div class="border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                                <!--begin::Label-->
                                                <div class="min-w-175px pe-2">
                                                    <span class="badge badge-light"> TIPO OCURRENCIA: GENERACIÓN INICIAL DE RECIBO FISCAL</span>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Record-->
                                            <!--begin::Record-->
                                            <div class="border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                                <!--begin::Title-->
                                                <a href="#" class="fs-6 text-muted text-hover-primary fw-semibold w-375px min-w-200px">Descripción</a>
                                                <p class="my-2">
                                                    FERNANDO LUIS|VARGAS|GOMEZ|VAGF690530|LAGO CANTEMUAL|249|CUMBRES DEL LAGO|QUERETARO|22|MEXICO|FERNANDOVARGAS_G@HOTMAIL.COM|F
                                                </p>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Record-->
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!-- end item -->
                                <!-- item -->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-tablet-text-up fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">INFORMATIVA</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">2023-07-27 15:15:02</div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <!--begin::Record-->
                                            <div class="border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                                <!--begin::Label-->
                                                <div class="min-w-175px pe-2">
                                                    <span class="badge badge-light">TIPO OCURRENCIA: GENERICA</span>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Record-->
                                            <!--begin::Record-->
                                            <div class="border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                                <!--begin::Title-->
                                                <a href="#" class="fs-6 text-muted text-hover-primary fw-semibold w-375px min-w-200px">Descripción</a>
                                                <p class="my-2">
                                                    DATOS FISCALES: ALTERACIONES/ITENES #: (DESDE > PARA)?#22: > VAGF690530?#19: > FERNANDO LUIS?#20: > VARGAS?#21: > GOMEZ?#23: > FERNANDOVARGAS_G@HOTMAIL.COM?#24: > 27/07/2023?
                                                </p>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Record-->
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!-- end item -->
                            </div>
                            <!--end::Historico-->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_tab_pane_cancelacion_retencion" role="tabpanel">
                    <div class="my-5">
                        <div class="mb-15">
                            <!--begin::Form-->
                            <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Medio retención</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Medio retención" data-bs-original-title="Medio retención" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecciona uno" name="target_assign">
                                        <option value="">Selecciona...</option>
                                        <option value="1">1. RETENCIÓN POR SPEECH</option>
                                        <option value="2">2. RETENCIÓN POR HERRAMIENTA</option>
                                    </select>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Herramienta de retención</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Herramienta retención" data-bs-original-title="Herramienta retención" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecciona uno" name="target_assign">
                                        <option value="">Selecciona...</option>
                                        <option value="1">1. BONIFICACIÓN CUOTA</option>
                                        <option value="2">2. CANCELACIÓN Y RECAPTURA</option>
                                    </select>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Comentarios</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Nombre" data-bs-original-title="Nombre" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Comentarios"></textarea>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                        <span class="indicator-label">Registrar retención</span>
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
                <div class="tab-pane fade" id="kt_tab_pane_cancelar_poliza" role="tabpanel">
                    <div class="my-5">
                        <div class="mb-15">
                            <!--begin::Form-->
                            <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Tipo de ocurrencia</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Tipo de ocurrencia" data-bs-original-title="Tipo de ocurrencia" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecciona uno" name="target_assign">
                                        <option value="">Selecciona...</option>
                                        <option value="1">1. CANCELACION POR REEXPEDICION</option>
                                        <option value="2">2. A PETICIÓN DE ASEGURADORA</option>
                                    </select>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Comentarios</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Nombre" data-bs-original-title="Nombre" data-kt-initialized="1">
                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Comentarios"></textarea>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                        <span class="indicator-label">Validar cancelación</span>
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