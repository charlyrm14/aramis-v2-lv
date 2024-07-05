@extends('dashboard/layouts/master')

@section('title', 'Reportes')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Chart widget 19-->
                <div class="card card-flush h-80 mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Ventas</span>
                            <span class="text-gray-500 pt-2 fw-semibold fs-6">8k ventas en el mes</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Nav-->
                            <ul class="nav" id="kt_chart_widget_19_tabs">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light active fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_19_tab_1" href="#kt_chart_widget_19_tab_content_1">2024</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4" data-bs-toggle="tab" id="kt_chart_widget_19_tab_2" href="#kt_chart_widget_19_tab_content_2">Por mes</a>
                                </li>
                            </ul>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0">
                        <!--begin::Tab Content (ishlamayabdi)-->
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_chart_widget_19_tab_content_1">
                                <!--begin::Chart container-->
                                <div id="kt_charts_widget_19_chart_1" class="w-100 h-400px mb-13 mt-n4"></div>
                                <!--end::Chart container-->
                                <!--begin::Items-->
                                <div class="m-0">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">ABA</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">AXA</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-danger fs-base">
                                                <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">CHUBB</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0.2%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">METLIFE</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4.1%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">ZURICH</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>8.3%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Chart widget 19-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-8 mb-xl-10">
                <!--begin::Table Widget 4-->
                <div class="card card-flush h-xl-80">
                    <!--begin::Card header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Reportes</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Actions-->
                        <div class="card-toolbar">
                            <!--begin::Filters-->
                            <div class="d-flex flex-stack flex-wrap gap-4">
                                <!--begin::Search-->
                                <div class="position-relative my-1">
                                    <i class="ki-outline ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-4"></i>
                                    <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Buscar" />
                                </div>
                                <!--end::Search-->
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
                                    <th class="min-w-100px">Nombre</th>
                                    <th class="text-end min-w-125px">Acciones</th>
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
                                                    <i class="ki-outline ki-document fs-3 text-gray-600"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Cotizaciones</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">{{ now() }}</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light-primary btn-sm">
                                            Seleccionar 
                                                <i class="ki-duotone ki-arrow-right">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-outline ki-file-deleted fs-3 text-gray-600"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Cancelaciones</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">{{ now() }}</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light-primary btn-sm">
                                            Seleccionar 
                                                <i class="ki-duotone ki-arrow-right">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-outline ki-wallet fs-3 text-gray-600"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Cartera AXA</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">{{ now() }}</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light-primary btn-sm">
                                            Seleccionar 
                                                <i class="ki-duotone ki-arrow-right">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-outline ki-car-2 fs-3 text-gray-600"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Siniestros</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">{{ now() }}</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light-primary btn-sm">
                                            Seleccionar 
                                                <i class="ki-duotone ki-arrow-right">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-outline ki-credit-cart fs-3 text-gray-600"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Tokens</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">{{ now() }}</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light-primary btn-sm">
                                            Seleccionar 
                                                <i class="ki-duotone ki-arrow-right">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Table Widget 4-->
                <!--begin::Row-->
                <div class="row gx-5 gx-xl-10 my-10">
                    <!--begin::Col-->
                    <div class="col-md-4 mb-5 mb-xl-10">
                        <!--begin::List widget 1-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">Pólizas externas</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Pólizas</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-outline ki-arrow-up-right fs-2 text-success me-2"></i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">241</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Archivos</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-outline ki-arrow-down-right fs-2 text-danger me-2"></i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">33</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Procesadas</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-outline ki-arrow-up-right fs-2 text-success me-2"></i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">200</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">No procesadas</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-outline ki-arrow-up-right fs-2 text-success me-2"></i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">41</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 1-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 mb-5 mb-xl-10">
                        <!--begin::List widget 2-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">Pólizas internas</span>
                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">ARAMIS</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Pólizas</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-outline ki-arrow-down-right fs-2 text-danger me-2"></i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">52</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Enviadas</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-outline ki-arrow-down-right fs-2 text-danger me-2"></i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">48</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">No enviadas</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-outline ki-arrow-down-right fs-2 text-danger me-2"></i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">4</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Porcentaje</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">86.01 %</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List widget 2-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 mb-5 mb-xl-10">
                        <!--begin::List widget 2-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">General</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Archivos</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-outline ki-arrow-down-right fs-2 text-danger me-2"></i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">34</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Registros</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-outline ki-arrow-down-right fs-2 text-danger me-2"></i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">252</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">Tokenizadas</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-outline ki-arrow-down-right fs-2 text-danger me-2"></i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">252</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2">No tokenizadas</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-outline ki-arrow-down-right fs-2 text-danger me-2"></i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6">0</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List widget 2-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->

@endsection