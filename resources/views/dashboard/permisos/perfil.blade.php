@extends('dashboard/layouts/master')

@section('title', 'Perfil de Carlos')

@section('content')
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
                            <img src="{{ asset('assets/media/avatars/blank.png') }}" alt="image" />
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
                                        Carlos Ramos
                                    </a>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                    <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                        <i class="ki-outline ki-user fs-4 me-1"></i>
                                        ADMIN
                                    </a>
                                    <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                        <i class="ki-outline ki-sms fs-4 me-1"></i> 
                                            cramos@tiprotec.com
                                    </a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div class="border border-success border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-base">Últimas vez activo</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500">{{ now() }}</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-base">Fecha registro</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500">2022-09-01</div>
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
                            Detalles perfil
                        </a>
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->

        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Información usuario</h3>
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
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('assets/media/svg/avatars/blank.svg') }})">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('assets/media/avatars/blank.png') }})"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="ki-outline ki-pencil fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki-outline ki-cross fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="ki-outline ki-cross fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Hint-->
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nombre</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row">
                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Max" />
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row">
                                        <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Smith" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Correo</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="cramos@tiprotec.com" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Teléfono contacto</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">País</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
                                    <option value="">Selecciona un país...</option>
                                    <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                    <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                    <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                    <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Comunicación</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Options-->
                                <div class="d-flex align-items-center mt-3">
                                    <!--begin::Option-->
                                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <input class="form-check-input" name="communication[]" type="checkbox" value="1" />
                                        <span class="fw-semibold ps-2 fs-6">Correo</span>
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check form-check-custom form-check-inline form-check-solid">
                                        <input class="form-check-input" name="communication[]" type="checkbox" value="2" />
                                        <span class="fw-semibold ps-2 fs-6">Teléfono</span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Guardar cambios</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Basic info-->

        <!--begin::Notifications-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_notifications" aria-expanded="true" aria-controls="kt_account_notifications">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Permisos</h3>
                </div>
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_notifications" class="collapse show">
                <!--begin::Form-->
                <form class="form">
                    <!--begin::Card body-->
                    <div class="card-body border-top px-9 pt-3 pb-4">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-row-dashed border-gray-300 align-middle gy-6">
                                <tbody class="fs-6 fw-semibold">
                                    <!--begin::Table row-->
                                    <tr>
                                        <td>Módulo cancelaciones</td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_email">Ver</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_email">Crear</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_phone">Editar</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_phone">Eliminar</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--begin::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <td>Módulo endosos</td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_email">Ver</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_email">Crear</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_phone">Editar</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_phone">Eliminar</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--begin::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <td>Módulo cambios de plan</td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_email">Ver</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_email">Crear</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_phone">Editar</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_phone">Eliminar</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--begin::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <td>Módulo ventas</td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_email">Ver</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_email">Crear</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_phone">Editar</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_phone">Eliminar</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--begin::Table row-->
                                    <!--begin::Table row-->
                                    <tr>
                                        <td>Módulo cambio método de pago</td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_email">Ver</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_email">Crear</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone"data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_phone">Editar</label>
                                            </div>
                                        </td>
                                        <td class="w-125px">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                <label class="form-check-label ps-2" for="kt_settings_notification_phone">Eliminar</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--begin::Table row-->
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button class="btn btn-light btn-active-light-primary me-2">Cancelar</button>
                        <button class="btn btn-primary px-6">Guardar cambios</button>
                    </div>
                    <!--end::Card footer-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Notifications-->

        <!--begin::Deactivate Account-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Eliminar usuario</h3>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_deactivate" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_deactivate_form" class="form">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <i class="ki-outline ki-information fs-2tx text-warning me-4"></i>
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Estas a punto de eliminar este usuario</h4>
                                    <div class="fs-6 text-gray-700">Por razones de seguridad, requerimos que confirmes que deseas eliminar a este usuario. Se te pedira una contraseña para confirmar la eliminación del usuario 
                                    <br />
                                    <a class="fw-bold" href="#">Ler más</a></div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--begin::Form input row-->
                        <div class="form-check form-check-solid fv-row">
                            <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
                            <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">Confirmo que deseo eliminar usuario</label>
                        </div>
                        <!--end::Form input row-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Eliminar usuario</button>
                    </div>
                    <!--end::Card footer-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Deactivate Account-->
    </div>
    <!--end::Container-->
</div>
@endsection