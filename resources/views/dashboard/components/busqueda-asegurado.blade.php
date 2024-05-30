<!--begin::Search form-->
<div class="card rounded-0 border-0 bgi-no-repeat bgi-position-x-end bgi-size-cover" style="background-color: #FFFFFF; background-size: auto 100%; background-image: url(assets/media/misc/taieri.svg)">
    <!--begin::body-->
    <div class="card-body container-xxl pt-10 pb-8">
        <!--begin::Title-->
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="fw-semibold me-3">Buscar asegurado</h1>
        </div>
        <!--end::Title-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Block-->
            <div class="d-lg-flex justify-content-center align-lg-items-center">
                <form action="{{ route('asegurados.busqueda') }}" method="GET" autocomplete="off">
                    <!--begin::Simple form-->
                    <div class="rounded d-flex flex-column flex-lg-row align-items-lg-center bg-body p-5 w-xxl-850px h-lg-60px me-lg-10 my-5 border border-primary">
                        <!--begin::Row-->
                        <div class="row flex-grow-1 mb-5 mb-lg-0">
                            <!--begin::Col-->
                            <div class="col-lg-6 d-flex align-items-center mb-3 mb-lg-0">
                                <i class="ki-outline ki-magnifier fs-1 text-gray-500 me-1"></i>
                                <!--begin::Input-->
                                <input  type="text" 
                                        class="form-control form-control-flush flex-grow-1" 
                                        name="query" 
                                        placeholder="Ejemplo: Juan Perez" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 d-flex align-items-center mb-5 mb-lg-0">
                                <!--begin::Desktop separartor-->
                                <div class="bullet bg-secondary d-none d-lg-block h-30px w-2px me-5"></div>
                                <!--end::Desktop separartor-->
                                <i class="ki-outline ki-user fs-1 text-gray-500 me-1"></i>
                                <!--begin::Select-->
                                <select class="form-select border-0 flex-grow-1" data-control="select2" data-placeholder="Category" data-hide-search="true" name="tipo_busqueda">
                                    <option value="fc_nombre_asegurado" selected="selected">Nombre</option>
                                    <option value="fc_rfc">RFC</option>
                                    <option value="fc_valor_item">Póliza aseguradora</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Action-->
                        <div class="min-w-150px text-end">
                            <button type="submit" class="btn btn-primary" id="kt_advanced_search_button_1">Buscar</button>
                        </div>
                        <!--end::Action-->
                    </div>
                </form>
                <!--end::Simple form-->
            </div>
            <!--end::Block-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::body-->
</div>
<!--end::Search form-->