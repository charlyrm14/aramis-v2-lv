<div class="modal fade" id="kt_modal_enviar_por_correo" tabindex="-1" aria-hidden="true">
    <!--begin::Modal header-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header flex-stack">
                <!--begin::Title-->
                <h2>Enviar póliza</h2>
                <!--end::Title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
                <!--begin::Options-->
                <div data-kt-element="options">
                    <!--begin::Wrapper-->
                    <div class="pb-10">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="auth_option" value="sms" id="kt_modal_two_factor_authentication_option_2" />
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_modal_two_factor_authentication_option_2">
                            <i class="ki-outline ki-message-text-2 fs-4x me-4"></i>
                            <span class="d-block fw-semibold text-start">
                                <span class="text-gray-900 fw-bold d-block fs-3">sanchezhuerta@email.com</span>
                                <span class="text-muted fw-semibold fs-6">SANCHEZ HUERTA EDUARDO</span>
                            </span>
                        </label>
                        <!--end::Option-->
                        <div class="my-5 fv-row fv-plugins-icon-container">
						<!--begin::Label-->
                                <label class="form-label mb-3">
                                    Correo alterno
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="top_up_amount" placeholder="Correo electrónico alterno" value="" autocomplete="off">
                                <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>
                    </div>
                    <!--end::Options-->
                    <!--begin::Action-->
                    <button class="btn btn-primary w-100" data-kt-element="options-select">Enviar</button>
                    <!--end::Action-->
                </div>
                <!--end::Options-->
            </div>
            <!--begin::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal header-->
</div>