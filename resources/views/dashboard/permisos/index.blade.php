@extends('dashboard/layouts/master')

@section('title', 'Usuarios')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card border-0 ">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                        <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Filtar resultados" />
                    </div>
                    <!--end::Search-->
                </div>
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <!--begin::Add product-->
                    <a  href="#" 
                        class="btn btn-primary d-flex justify-content-between align-items-center gap-5">
                        Nuevo usuario
                    </a>
                    <!--end::Add product-->
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0 table-responsive">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                    <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">Nombre</th>
                            <th class="min-w-125px">Correo</th>
                            <th class="min-w-125px">Perfil</th>
                            <th class="text-end min-w-70px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-3">
                                        <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                                            Carlos Ramos
                                        </a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">
                                            
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-gray-600 text-hover-primary mb-1">
                                    cramos@tiprotec.com
                                </a>
                            </td>
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-success"> ADMIN </div>
                                <!--end::Badges-->
                            </td>
                            <td class="text-end">
                                <a  href="{{ route('usuarios.perfil', 1) }}" 
                                    class="btn btn-sm btn-primary btn-flex btn-center btn-active-light-primary rounded-pill">
                                    Seleccionar <i class="ki-outline ki-right fs-5 ms-1"></i>
                                </a>
                            </td>
                        </tr>  
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
                <!--begin::Pagination-->
                <div id="" class="row">
                    <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
                        <div>
                            <select name="kt_ecommerce_products_table_length" aria-controls="kt_ecommerce_products_table" class="form-select form-select-solid form-select-sm" id="dt-length-0">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <label for="dt-length-0"></label>
                        </div>
                    </div>
                    <div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dt-paging paging_simple_numbers">
                            <ul class="pagination">
                                <li class="dt-paging-button page-item disabled">
                                    <a class="page-link previous" aria-controls="kt_ecommerce_products_table" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1">
                                        <i class="previous"></i>
                                    </a>
                                </li>
                                <li class="dt-paging-button page-item active">
                                    <a href="#" class="page-link" aria-controls="kt_ecommerce_products_table" aria-current="page" data-dt-idx="0" tabindex="0">1</a>
                                </li>
                                <li class="dt-paging-button page-item">
                                    <a href="#" class="page-link" aria-controls="kt_ecommerce_products_table" data-dt-idx="1" tabindex="0">2</a>
                                </li>
                                <li class="dt-paging-button page-item">
                                    <a href="#" class="page-link" aria-controls="kt_ecommerce_products_table" data-dt-idx="2" tabindex="0">3</a>
                                </li>
                                <li class="dt-paging-button page-item">
                                    <a href="#" class="page-link" aria-controls="kt_ecommerce_products_table" data-dt-idx="3" tabindex="0">4</a>
                                </li>
                                <li class="dt-paging-button page-item">
                                    <a href="#" class="page-link" aria-controls="kt_ecommerce_products_table" data-dt-idx="4" tabindex="0">5</a>
                                </li>
                                <li class="dt-paging-button page-item">
                                    <a href="#" class="page-link next" aria-controls="kt_ecommerce_products_table" aria-label="Next" data-dt-idx="next" tabindex="0">
                                        <i class="next"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end::Pagination-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
@endsection