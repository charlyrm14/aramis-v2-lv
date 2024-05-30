<div class="modal fade" id="kt_modal_nuevo_asegurado" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2>Registrar nuevo cliente</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <form>
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Nombre</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="first-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Apellido paterno</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="last-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Apellido materno</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="last-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <label class="required fs-6 fw-semibold mb-2">Fecha de nacimiento</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Selecciona fecha" name="due_date" />
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="required fs-5 fw-semibold mb-2">RFC</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="last-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Email</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="last-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <label class="required fs-6 fw-semibold mb-2">Género</label>
							<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                <!--begin::Radio-->
                                <label class="btn btn-outline btn-active-primary btn-color-muted active" data-kt-button="true">
                                <!--begin::Input-->
                                <input class="btn-check" type="radio" name="method" value="1" />
                                <!--end::Input-->
                                Masculino</label>
                                <!--end::Radio-->
                                <!--begin::Radio-->
                                <label class="btn btn-outline btn-active-primary btn-color-muted" data-kt-button="true">
                                <!--begin::Input-->
                                <input class="btn-check" type="radio" name="method" checked="checked" value="2" />
                                <!--end::Input-->
                                Femenino</label>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Teléfono (Casa)</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="last-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Teléfono (Celular)</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="last-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Calle</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="first-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Número exterior</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="last-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Número interior</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="last-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Colonia</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="first-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Alcaldía/Municipio</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="last-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Código postal</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="last-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Ciudad</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="first-name">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="required fs-5 fw-semibold mb-2">Estado</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecciona un estado" name="target_assign">
                                <option value="">Selecciona...</option>
                                <option value="1">Aguascalientes</option>
                                <option value="2">Baja California</option>
                                <option value="3">Baja California Sur</option>
                                <option value="4">Campeche</option>
                                <option value="5">Coahuila</option>
                            </select>
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Col-->
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="reset" class="btn btn-outline btn-outline-danger btn-active-light-danger me-3" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-lg btn-primary">Registrar nuevo cliente 
                            <i class="ki-outline ki-arrow-right fs-3 ms-1 me-0"></i>
                        </button>
                    </div>
                </form>
                <!--end::Stepper-->
            </div>
            <!--begin::Modal body-->
        </div>
    </div>
</div>