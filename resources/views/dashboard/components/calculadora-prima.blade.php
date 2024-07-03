<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Calcular prima</a>
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-outline ki-cross-square fs-2"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Message(template for in)-->
            <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                <div class="row mb-5">
                    <!--begin::Col-->
                    <div class="col-md-12 fv-row fv-plugins-icon-container p-0">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">Producto</label>
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecciona" name="target_assign">
                            <option value="130">130 - PLAN DE VIDA 4.0 </option>
                            <option value="138">138 - TRAVEL ANNUAL </option>
                        </select>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-12 fv-row fv-plugins-icon-container p-0 my-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">Plan</label>
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecciona" name="target_assign">
                            <option value="130">1 </option>
                            <option value="138">2 </option>
                            <option value="138">3 </option>
                        </select>
                    </div>
                    <!--end::Col-->
                    <div class="row p-0 my-5 container-asegurados-clc">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">Tipo asegurado</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecciona" name="target_assign">
                                <option value="1">Titular</option>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row fv-plugins-icon-container p-0">
                            <label class="required fs-6 fw-semibold mb-2">Fecha nacimiento</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Selecciona fecha" name="due_date" />
                                <!--end::Datepicker-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- Begin::Boton Agregar -->
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success btn-sm rounded-pill d-flex justify-contenter-between align-items-center gap-5" id="btn-add-asegurado-clc"> 
                            Agregar
                            <i class="ki-duotone ki-plus-square fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </button>
                    </div>
                    <!-- End::Boton Agregar -->
                    <!-- Begin::Boton Calcular -->
                    <button class="btn btn-primary rounded my-10"> Calcular </button>
                    <!-- End::Boton Calcular -->
                </div>
            </form>
            <!--end::Message(template for in)-->
            <!--begin::Resultado cotización-->
            <div class="separator separator-content border-success my-10"> Resultado </div>
            <div class="d-flex justify-content-between align-items-center my-5">
                <p class="fs-3 text-gray-900 fw-bolder text-end">Prima calculada</p>
                <span class="badge badge-light-success fs-base fw-bolder fs-3">
					$269 USD
                </span>
            </div>
            <!--end::Resultado cotización-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Messenger-->
</div>