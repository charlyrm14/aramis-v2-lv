<!--begin::Aside-->
<div id="kt_aside" class="aside overflow-visible overflow-lg-auto" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Logo-->
    <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-8" id="kt_aside_logo">
        <a href="{{ route('home') }}">
            <img alt="Logo" src="https://aramis.insuranceservices.mx/apple-touch-icon.png" class="h-55px" />
        </a>
    </div>
    <!--end::Logo-->
    <!--begin::Nav-->
    <div class="aside-nav d-flex flex-column align-lg-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
        <!--begin::Primary menu-->
        <div class="hover-scroll-y scroll-ms my-2 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6" data-kt-menu="true">
                <!--begin:Menu item-->
                <a href="{{ route('home') }}">
                    <div data-kt-menu-placement="right-start" class="menu-item here show py-2" data-bs-toggle="tooltip" data-bs-original-title="Inicio">
                        <!--begin:Menu link-->
                        <span class="menu-link menu-center">
                            <span class="menu-icon me-0">
                                <i class="ki-outline ki-home-2 fs-2x"></i>
                            </span>
                        </span>
                        <!--end:Menu link-->
                    </div>
                </a>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <a href="#">
                    <div data-kt-menu-placement="right-start" class="menu-item here show py-2" data-bs-toggle="tooltip" data-bs-original-title="My Wallet">
                        <!--begin:Menu link-->
                        <span class="menu-link menu-center">
                            <span class="menu-icon me-0">
                                <i class="ki-outline ki-wallet fs-2x"></i>
                            </span>
                        </span>
                        <!--end:Menu link-->
                    </div>
                </a>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <a href="#">
                    <div data-kt-menu-placement="right-start" class="menu-item here show py-2" data-bs-toggle="tooltip" data-bs-original-title="Chat">
                        <!--begin:Menu link-->
                        <span class="menu-link menu-center">
                            <span class="menu-icon me-0">
                                <i class="ki-outline ki-messages fs-2x"></i>
                            </span>
                        </span>
                        <!--end:Menu link-->
                    </div>
                </a>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <a href="{{ route('usuarios.mis.llamadas', 1) }}">
                    <div data-kt-menu-placement="right-start" class="menu-item here show py-2" data-bs-toggle="tooltip" data-bs-original-title="Mis llamadas">
                        <!--begin:Menu link-->
                        <span class="menu-link menu-center">
                            <span class="menu-icon me-0">
                                <i class="ki-outline ki-call fs-2x"></i>
                            </span>
                        </span>
                        <!--end:Menu link-->
                    </div>
                </a>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <a href="{{ route('reportes.index') }}">
                    <div data-kt-menu-placement="right-start" class="menu-item here show py-2" data-bs-toggle="tooltip" data-bs-original-title="Reportes">
                        <!--begin:Menu link-->
                        <span class="menu-link menu-center">
                            <span class="menu-icon me-0">
                                <i class="ki-outline ki-chart-simple-3 fs-2x"></i>
                            </span>
                        </span>
                        <!--end:Menu link-->
                    </div>
                </a>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <a href="{{ route('usuarios.index') }}">
                    <div data-kt-menu-placement="right-start" class="menu-item here show py-2" data-bs-toggle="tooltip" data-bs-original-title="Usuarios">
                        <!--begin:Menu link-->
                        <span class="menu-link menu-center">
                            <span class="menu-icon me-0">
                                <i class="ki-outline ki-people fs-2x">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </span>
                        </span>
                        <!--end:Menu link-->
                    </div>
                </a>
                <!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Primary menu-->
    </div>
    <!--end::Nav-->
    <!--begin::Footer-->
    <div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
        <!--begin::Menu-->
        <div class="mb-7" data-bs-toggle="tooltip" data-bs-original-title="Acciones rápidas">
            <button type="button" class="btn btm-sm btn-custom btn-icon" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" title="Quick actions">
                <i class="ki-outline ki-notification-status fs-1"></i>
            </button>
            <!--begin::Menu 2-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Acciones rápidas</div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mb-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a  href="#" 
                        class="menu-link px-3"
                        data-bs-toggle="modal"
                        data-bs-target="#kt_modal_nuevo_asegurado">Nuevo asegurado</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Nueva venta rápida</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mt-3 opacity-75"></div>
                <!--end::Menu separator-->
            </div>
            <!--end::Menu 2-->
        </div>
        <!--end::Menu-->

        <div class="mb-7" data-bs-toggle="tooltip" data-bs-original-title="Necesitas ayuda?">
            <div href="#" 
                class="symbol symbol-40px symbol-circle"
                data-bs-toggle="modal"
                data-bs-target="#kt_modal_avatar_aramis">
                <img alt="Pic" src="https://www.anuarioseguros.lat/admin/storage/images/WOWlogo.jpg" class="img-thumbnail">
            </div>
        </div>

    </div>
    <!--end::Footer-->
</div>
