@extends('dashboard/layouts/master')

@section('title', 'Inicio')

@section('content')

@include('dashboard/components/busqueda-asegurado')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Row-->
        <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                <!--begin::Card widget 20-->
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">7</span>
                            <!--end::Amount-->
                            <!--begin::Subtitle-->
                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Llamadas el día de hoy</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end pt-0">
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                            <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                <span>3 ventas concretadas</span>
                                <span>72%</span>
                            </div>
                            <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 20-->
                <!--begin::Card widget 7-->
                <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">37</span>
                            <!--end::Amount-->
                            <!--begin::Subtitle-->
                            <span class="text-gray-500 pt-1 fw-semibold fs-6">Asegurados nuevos en el mes</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column justify-content-end pe-0">
                        <!--begin::Title-->
                        <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">120 asegurados nuevos hoy</span>
                        <!--end::Title-->
                        <!--begin::Users group-->
                        <div class="symbol-group symbol-hover flex-nowrap">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                            </div>
                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+30</span>
                            </a>
                        </div>
                        <!--end::Users group-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 7-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                <!--begin::Card widget 17-->
                <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <!--begin::Currency-->
                                <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
                                <!--end::Currency-->
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                                <!--end::Amount-->
                                <!--begin::Badge-->
                                <span class="badge badge-light-success fs-base">
                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
                                <!--end::Badge-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Subtitle-->
                            <span class="text-gray-500 pt-1 fw-semibold fs-6">Tus ventas en abril</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                        <!--begin::Chart-->
                        <div class="d-flex flex-center me-5 pt-2">
                            <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
                        </div>
                        <!--end::Chart-->
                        <!--begin::Labels-->
                        <div class="d-flex flex-column content-justify-center flex-row-fluid">
                            <!--begin::Label-->
                            <div class="d-flex fw-semibold align-items-center">
                                <!--begin::Bullet-->
                                <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="text-gray-500 flex-grow-1 me-4">Hoy</div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fw-semibold align-items-center my-3">
                                <!--begin::Bullet-->
                                <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="text-gray-500 flex-grow-1 me-4">Ayer</div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fw-semibold align-items-center">
                                <!--begin::Bullet-->
                                <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="text-gray-500 flex-grow-1 me-4">Lunes</div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Labels-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 17-->
                <!--begin::List widget 26-->
                <div class="card card-flush h-lg-50">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title text-gray-800 fw-bold">Enlaces externos</h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <a href="#" class="text-primary fw-semibold fs-6 me-2">My Wallet</a>
                            <!--end::Section-->
                            <!--begin::Action-->
                            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                <i class="ki-outline ki-exit-right-corner fs-2"></i>
                            </button>
                            <!--end::Action-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <a href="#" class="text-primary fw-semibold fs-6 me-2">Reportes</a>
                            <!--end::Section-->
                            <!--begin::Action-->
                            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                <i class="ki-outline ki-exit-right-corner fs-2"></i>
                            </button>
                            <!--end::Action-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <a href="#" class="text-primary fw-semibold fs-6 me-2">Mi correo</a>
                            <!--end::Section-->
                            <!--begin::Action-->
                            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                <i class="ki-outline ki-exit-right-corner fs-2"></i>
                            </button>
                            <!--end::Action-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::LIst widget 26-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xxl-6">
                <!--begin::Engage widget 10-->
                <div class="card card-flush h-md-100">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('assets/media/stock/900x600/42.png')">
                        <!--begin::Wrapper-->
                        <div class="mb-10">
                            <!--begin::Title-->
                            <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                            <span class="me-2">Esto es lo que has logrado durante este mes, ¡siéntete orgulloso!
                            <br />
                            <span class="position-relative d-inline-block text-danger">
                                <a href="pages/user-profile/overview.html" class="text-danger opacity-75-hover">¡Felicidades!</a>
                                <!--begin::Separator-->
                                <span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                <!--end::Separator-->
                            </span></div>
                            <!--end::Title-->
                            <!--begin::Action-->
                            <div class="text-center">
                                <a href='#' class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Mis recompensas</a>
                            </div>
                            <!--begin::Action-->
                        </div>
                        <!--begin::Wrapper-->
                        <!--begin::Illustration-->
                        <img class="mx-auto h-150px h-lg-200px theme-light-show" src="assets/media/illustrations/misc/upgrade.svg" alt="" />
                        <img class="mx-auto h-150px h-lg-200px theme-dark-show" src="assets/media/illustrations/misc/upgrade-dark.svg" alt="" />
                        <!--end::Illustration-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 10-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row gx-5 gx-xl-10">
            <div class="col-md-12">
                <!--begin::Chart widget 24-->
                <div class="card card-flush overflow-hidden h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header py-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Estadísticas</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Reporte por estado</span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Chart widget 24-->
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row Call-->
        <div class="row gx-5 gx-xl-10 sticky-top fixed-bottom my-5">
            <div class="col-md-12 my-2">
                <div class="card shadow bg-secondary border border-1 border-success">
                    <div class="card-body p-2">
                        <div class="d-flex flex-stack py-4 px-3">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-55px symbol-circle">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" class="img-thumbnail">
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">(+52) 55-0011-2233</a>
                                    <div class="fw-semibold text-muted">ID: testing_dev_24052024</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <button class="btn btn-danger btn-sm d-flex- justify-content-between gap-3 rounded-pill"> 
                                    <i class="bi bi-telephone-x"></i>Finalizar 
                                </button>
                            </div>
                            <!--end::Access menu-->
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Row Call-->

    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
@endsection