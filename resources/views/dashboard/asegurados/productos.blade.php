@extends('dashboard/layouts/master')

@section('title', 'Productos asegurado')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xxl-8">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="image" />
                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">
                                        {{ $asegurado->fc_nombre_asegurado }}
                                    </a>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                    <i class="ki-outline ki-profile-circle fs-4 me-1"></i> {{ $asegurado->fc_rfc }} </a>
                                    <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                        <i class="ki-outline ki-geolocation fs-4 me-1"></i>
                                        {{ $asegurado->estadoRepublica->fc_descripcion_estado }}
                                    </a>
                                    <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                        <i class="ki-outline ki-sms fs-4 me-1"></i> 
                                            {{ !is_null($asegurado->fc_email) ? $asegurado->fc_email : 'Sin correo electrónico'}}
                                </a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                            <!--begin::Actions-->
                            <div class="d-flex my-4">
                                <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_nuevo_producto">Nuevo producto</a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>
                                            <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ !$productos->isEmpty() ? $productos->count()  : 0 }}" data-kt-countup-prefix="">0</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500">Productos contratados</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>
                                            <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="3">0</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500">Productos cancelados</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
                <!--begin::Navs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" data-bs-toggle="tab" href="#kt_tab_pane_1">
                            Productos contratados
                        </a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5"data-bs-toggle="tab" href="#kt_tab_pane_2">Información general</a>
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->

        <div class="card mb-5 mb-xxl-8">
            <div class="card-body pt-9 pb-0">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                        <div>
                            <!--begin::Body-->
                            <div class="card-body pt-6">
                                <!--begin::Nav-->
                                <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-75px h-75px p-3 active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab">
                                            <!--begin::Image-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-outline ki-car fs-1"></i>
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Bullet-->
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> AXA </span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-75px h-75px p-3" id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2" aria-selected="false" role="tab" tabindex="-1">
                                            <!--begin::Image-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-outline ki-car fs-1"></i>
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Bullet-->
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> CHUBB </span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-75px h-75px p-3" id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3" aria-selected="false" role="tab" tabindex="-1">
                                            <!--begin::Image-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-outline ki-shield-search fs-1"></i>
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Bullet-->
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> ZURICH </span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-75px h-75px p-3" id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4" aria-selected="false" role="tab" tabindex="-1">
                                            <!--begin::Image-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-outline ki-shield-search fs-1"></i>
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Bullet-->
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> ABA </span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                        <!--begin::Link-->
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-75px h-75px p-3" id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5" aria-selected="false" role="tab" tabindex="-1">
                                            <!--begin::Image-->
                                            <div class="nav-icon mb-3">
                                                <i class="ki-outline ki-shield-search fs-1"></i>
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Bullet-->
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> METLIFE </span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Nav-->
                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade active show" id="kt_stats_widget_16_tab_1" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_1">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">NOMBRE PRODUCTO</th>
                                                        <th class="p-0 pb-3 min-w-100px text-end pe-13">ESTATUS</th>
                                                        <th class="p-0 pb-3 w-125px text-end pe-7">ACCIONES</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    @forelse ($productos as $producto)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <i class="ki-duotone ki-heart-circle text-primary fs-4x">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                                                                        {{ $producto->fc_descripcion_producto }}
                                                                    </a>
                                                                    <span class="text-gray-500 fw-semibold d-block fs-7">
                                                                        {{ $producto->fi_numero_cliente . '_' . $producto->fi_numero_producto . '_' . $producto->fc_numero_poliza }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="badge badge-{{ $producto->fc_estatus_poliza == 'V' ? 'success' : 'danger' }} fw-bold me-auto px-3 py-2 fs-2 rounded-circle">
                                                                {{ $producto->fc_estatus_poliza }}
                                                            </span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div class="me-0">
                                                                <button class="btn btn-sm btn-primary rounded-pill" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    Acciones
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Opciones</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a  href="#"
                                                                            data-bs-toggle="modal" 
                                                                            data-bs-target="#kt_modal_producto_informacion"
                                                                            data-bs-nombre-producto="{{ $producto->fc_descripcion_producto }}"
                                                                            data-bs-llave-poliza="{{ $producto->fi_numero_cliente . '_' . $producto->fi_numero_producto . '_' . $producto->fc_numero_poliza }}" 
                                                                            class="menu-link flex-stack px-3"> 
                                                                            <i class="ki-duotone ki-tablet-text-down fs-3">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                                <span class="path3"></span>
                                                                                <span class="path4"></span>
                                                                            </i>
                                                                            Información producto
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a  href="#" 
                                                                            class="menu-link flex-stack px-3"
                                                                            download="#"> 
                                                                            <i class="ki-duotone ki-cloud-download">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </i>
                                                                            Descargar PDF
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a  href="#" 
                                                                            data-bs-toggle="modal" 
                                                                            data-bs-target="#kt_modal_enviar_por_correo"
                                                                            class="menu-link flex-stack px-3"> 
                                                                            <i class="ki-duotone ki-send">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </i>
                                                                            Enviar por correo
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a  href="{{ route('asegurados.retencion', [
                                                                            $producto->fi_numero_cliente,
                                                                            $producto->fi_numero_producto,
                                                                            $producto->fc_numero_poliza
                                                                        ]) }}" 
                                                                            class="menu-link flex-stack px-3"> 
                                                                            <i class="ki-duotone ki-arrow-right-left">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </i>
                                                                            Cambio plan / RXA
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a  href="{{ route('asegurados.endoso', [
                                                                                $producto->fi_numero_cliente,
                                                                                $producto->fi_numero_producto,
                                                                                $producto->fc_numero_poliza
                                                                            ]) }}"
                                                                            class="menu-link flex-stack px-3"> 
                                                                            <i class="ki-duotone ki-setting-2">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </i>
                                                                            Endosos
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a  href="{{ route('asegurados.cancelacion', [
                                                                                $producto->fi_numero_cliente,
                                                                                $producto->fi_numero_producto,
                                                                                $producto->fc_numero_poliza
                                                                            ]) }}"
                                                                            class="menu-link flex-stack px-3"> 
                                                                            <i class="ki-duotone ki-file-deleted">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </i>
                                                                            Cancelar póliza
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu 3-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                        
                                                    @endforelse
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->

                                    <!--end::Table container-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                        <!--begin::Basic info-->
                        <div>
                            <!--begin::Card header-->
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <h3 class="fw-bold m-0">Información personal</h3>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--begin::Card header-->
                            <!--begin::Content-->
                            <div id="kt_account_settings_profile_details" class="collapse show">
                                <!--begin::Form-->
                                <form id="kt_account_profile_details_form" class="form">
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Nombre completo</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="fc_nombre_asegurado" class="form-control form-control-lg form-control-solid" placeholder="Nombre completo" value="{{ $asegurado->fc_nombre_asegurado }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Correo electrónico</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="email" name="fc_email" class="form-control form-control-lg form-control-solid" placeholder="Correo electrónico" value="{{ $asegurado->fc_email }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">RFC</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="fc_rfc" class="form-control form-control-lg form-control-solid" placeholder="RFC" value="{{ $asegurado->fc_rfc }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Fecha nacimiento</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="fi_fecha_nacimiento" class="form-control form-control-lg form-control-solid" placeholder="Fecha nacimiento" value="{{ $asegurado->fi_fecha_nacimiento }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Dirección</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="fc_direccion" class="form-control form-control-lg form-control-solid" placeholder="Dirección" value="{{ $asegurado->fc_direccion }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Colonia</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="fc_colonia" class="form-control form-control-lg form-control-solid" placeholder="Colonia" value="{{ $asegurado->fc_colonia }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Ciudad</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="fc_ciudad" class="form-control form-control-lg form-control-solid" placeholder="Ciudad" value="{{ $asegurado->fc_ciudad }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Código Postal</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="fc_codigo_postal" class="form-control form-control-lg form-control-solid" placeholder="Código postal" value="{{ $asegurado->fc_codigo_postal }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Actions-->
                                    <div class="card-footer d-flex justify-content-end py-6 px-9"></div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Basic info-->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end::Container-->
</div>
<!--end::Content-->

@include('dashboard/asegurados/producto-informacion')
@include('dashboard/asegurados/producto-nuevo')
@include('dashboard/asegurados/enviar-poliza-correo')

@endsection

@push('js')
<script src="{{ asset('assets/dashboard/productos/informacion-producto.js') }}" type="module"></script>
@endpush
