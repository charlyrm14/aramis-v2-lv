@extends('dashboard/layouts/master')

@section('title', 'Retención - Cambio de plan / RXA')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <h2 class="fs-2x fw-bold my-5">Retención</h2>
        <!--begin::Form-->
        <form>
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2" role="tablist">
                    <!--begin:::Tab item-->
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general" aria-selected="true" role="tab">Información póliza</a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->
                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade active show" id="kt_ecommerce_add_product_general" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>General</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="row g-9 mb-5">
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-5 fw-semibold mb-2">No. cliente</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input  class="form-control form-control-solid" 
                                                    name="fi_numero_cliente" 
                                                    value="{{ $fi_numero_cliente }}" 
                                                    disabled>
                                            <!--end::Input-->
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-5 fw-semibold mb-2">No. producto</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input  class="form-control form-control-solid" 
                                                    name="fi_numero_producto"
                                                    value="{{ $fi_numero_producto }}" 
                                                    disabled>
                                            <!--end::Input-->
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-5 fw-semibold mb-2">No. póliza</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input  class="form-control form-control-solid" 
                                                    name="fc_numero_poliza" 
                                                    value="{{ $fc_numero_poliza }}"
                                                    disabled>
                                            <!--end::Input-->
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row g-9 mb-5">
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-5 fw-semibold mb-2">Plan actual</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input  class="form-control form-control-solid" 
                                                    name="fc_numero_poliza" 
                                                    {{-- value="{{ $asegurados->where('fi_tipo_asegurado_label', 'titular')->first()->plan_actual_id }}" --}}
                                                    value="FAMILIAR ADVANCED"
                                                    disabled>
                                                    
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Tipo retención</label>
                                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecciona" name="target_assign">
                                                    <option value="cambio_plan">Cambio de plan</option>
                                                    <option value="rxa">RXA</option>
                                                </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Datos nuevo plan</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="row g-9 mb-5">
                                        <!--begin::Col-->
                                        <div class="col-md-3 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">Producto</label>
                                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecciona" name="target_assign">
                                                <option value="130">130 - PLAN DE VIDA 4.0 </option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-3 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">Plan</label>
                                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecciona" name="target_assign">
                                                <option value="3">INDIVIDUAL ADVANCED</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-3 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-5 fw-semibold mb-2">Fecha inicio vigencia</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input  class="form-control form-control-solid" 
                                                    name="fecha_inicio_vigencia"
                                                    value="{{ now() }}"
                                                    disabled>
                                            <!--end::Input-->
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-3 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-5 fw-semibold mb-2">Modalidad</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input  class="form-control form-control-solid" 
                                                    name="identificador_guard"
                                                    value=""
                                                    placeholder="No aplicable para este producto"
                                                    disabled>
                                            <!--end::Input-->
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->
                            <!--begin::Asegurados-Titular-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2> Títular  </h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    @forelse ($asegurados->where('fi_tipo_asegurado_label', 'titular') as $asegurado_titular)
                                    <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">
                                                    {{ $asegurado_titular->fc_nombre_asegurado }}
                                                </a>
                                                <div class="fw-semibold text-muted">{{ $asegurado_titular->fc_email }}</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            {{ $asegurado_titular->fi_fecha_nacimiento }}
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Asegurados-Titular-->
                             <!--begin::Asegurados-Dependientes-->
                             <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2> Dependientes  </h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-end my-5">
                                        <button class="btn btn-success btn-sm rounded-pill"> 
                                            Agregar 
                                        </button>
                                    </div>
                                    @forelse ($asegurados->where('fi_tipo_asegurado_label', 'dependiente') as $asegurado_dependiente)
                                    <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">
                                                    {{ $asegurado_dependiente->fc_nombre_asegurado }}
                                                </a>
                                                <div class="fw-semibold text-muted">{{ $asegurado_dependiente->fc_email }}</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            {{ $asegurado_dependiente->fi_fecha_nacimiento }}
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Asegurados-Dependientes-->
                        </div>
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab content-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancelar</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                        Enviar a validación
                    </button>
                    <!--end::Button-->
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
@endsection