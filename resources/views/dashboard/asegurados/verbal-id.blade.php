<div class="modal fade" id="kt_modal_verbal_id" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Confirmar información</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">Verifica los datos del usuario</div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Users-->
                <div class="mb-5">
                    <!--begin::List-->
                    <div class="mh-375px scroll-y me-n7 pe-7">
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 active" data-bs-toggle="tab" href="#kt_tab_pane_verbal_asegurado_numero_rfc">
                                    Número y RFC
                                </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_tab_pane_verbal_asegurado_direccion"> Dirección </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_tab_pane_verbal_asegurado_fechas"> Fecha</a>
                            </li>
                            <!--end::Nav item-->
                        </ul>
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
                <!--begin::tabs-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="kt_tab_pane_verbal_asegurado_numero_rfc" role="tabpanel">
                        <div class="my-5">
                            <div class="mb-15">
                                <!--begin::List-->
                                <div class="pb-10">
                                    <!--begin::Option-->
                                    <div class="my-2">
                                        <input type="radio" class="btn-check" name="numero_rfc" value="casa" checked="checked" id="kt_modal_two_factor_authentication_option_1">
                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_1">
                                            <i class="ki-outline ki-phone fs-3x me-4"></i>
                                            <span class="d-block fw-semibold text-start">
                                                <span class="text-gray-900 fw-bold d-block fs-3">Casa</span>
                                                <span class="text-muted fw-semibold fs-6">+(52) 55 9900 0099</span>
                                            </span>
                                        </label>
                                    </div>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <div class="my-2">
                                        <input type="radio" class="btn-check" name="numero_rfc" value="celular" id="kt_modal_two_factor_authentication_option_2">
                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_2">
                                            <i class="ki-outline ki-phone fs-3x me-4"></i>
                                            <span class="d-block fw-semibold text-start">
                                                <span class="text-gray-900 fw-bold d-block fs-3">Celular</span>
                                                <span class="text-muted fw-semibold fs-6">+(52) 55 9900 0099</span>
                                            </span>
                                        </label>
                                    </div>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <div class="my-2">
                                        <input type="radio" class="btn-check" name="numero_rfc" value="fc_rfc" id="kt_modal_two_factor_authentication_option_3">
                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_3">
                                            <i class="ki-outline ki-user fs-3x me-4"></i>
                                            <span class="d-block fw-semibold text-start">
                                                <span class="text-gray-900 fw-bold d-block fs-3">RFC</span>
                                                <span class="text-muted fw-semibold fs-6">SAHF821021</span>
                                            </span>
                                        </label>
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::List-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kt_tab_pane_verbal_asegurado_direccion" role="tabpanel">
                        <div class="my-5">
                            <div class="mb-15">
                                <!--begin::List-->
                                <div class="pb-10">
                                    <!--begin::Option-->
                                    <div class="my-2">
                                        <input type="radio" class="btn-check" name="direccion" value="a" checked="checked" id="kt_modal_two_factor_authentication_option_4">
                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_4">
                                            <i class="ki-outline ki-geolocation-home fs-3x me-4"></i>
                                            <span class="d-block fw-semibold text-start">
                                                <span class="text-gray-900 fw-bold d-block fs-3">A</span>
                                                <span class="text-muted fw-semibold fs-6">Calle: RUBENS, 33, S/N Estado: SAN JUAN BENITO JUAREZ
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <div class="my-2">
                                        <input type="radio" class="btn-check" name="direccion" value="b" id="kt_modal_two_factor_authentication_option_5">
                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_5">
                                            <i class="ki-outline ki-geolocation-home fs-3x me-4"></i>
                                            <span class="d-block fw-semibold text-start">
                                                <span class="text-gray-900 fw-bold d-block fs-3">B</span>
                                                <span class="text-muted fw-semibold fs-6">CP: 77518, Ciudad: CIUDAD DE MEXICO, Estado: Ciudad de México
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::List-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kt_tab_pane_verbal_asegurado_fechas" role="tabpanel">
                        <div class="my-5">
                            <div class="mb-15">
                                <!--begin::List-->
                                <div class="pb-10">
                                    <!--begin::Option-->
                                    <div class="my-2">
                                        <input type="radio" class="btn-check" name="fd_fecha_nacimiento" value="a" checked="checked" id="kt_modal_two_factor_authentication_option_6">
                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_6">
                                            <i class="ki-outline ki-calendar fs-3x me-4"></i>
                                            <span class="d-block fw-semibold text-start">
                                                <span class="text-gray-900 fw-bold d-block fs-3">FECHA DE NACIMIENTO</span>
                                                <span class="text-muted fw-semibold fs-6">1982-10-21
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::List-->
                            </div>
                        </div>
                    </div>
                </div>                       
                <!--end::tabs-->
                <!--begin::Notice-->
                <div class="d-flex justify-content-between">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancelar</button>
                    <a href="{{ route('asegurados.productos', $asegurado->id) }}" class="btn btn-lg btn-primary">Validar 
                        <i class="ki-outline ki-arrow-right fs-3 ms-1 me-0"></i>
                    </a>
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>