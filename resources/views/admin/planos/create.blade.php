@extends('padrao.padrao')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Form-->

            <form class="form d-flex flex-column flex-lg-row" action="{{route('admin.planos.store')}}" method="post">
                @csrf
                <!--begin::Aside column-->

                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin:::Tabs-->

                    <!--end:::Tabs-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Dados Planos</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->


                                        <div>
                                            <!--begin::Label-->
                                            <label class="required form-label">Nome do Plano</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="name" class="form-control mb-2"
                                                   placeholder="Nome" value="{{old('name')}}"/>
                                            <!--end::Input-->
                                            <!--begin::Description-->

                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div>
                                            <!--begin::Label-->
                                            <label class="required form-label">Valor do Plano</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="valor" class="form-control mb-2"
                                                   placeholder="Valor de Plano" value="{{old('valor')}}"/>
                                            <!--end::Description-->
                                        </div>
                                        <div>
                                            <!--begin::Label-->
                                            <label class="required form-label">Taxa de Performace</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="taxa_performance" class="form-control mb-2"
                                                   placeholder="Taxa de Performance"
                                                   value="{{old('taxa_perfomance')}}"/>
                                            <!--end::Description-->
                                        </div>
                                        <div>
                                            <!--begin::Label-->
                                            <label class="required form-label">Quantidade de Niveis</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="qtd_nivel" class="form-control mb-2"
                                                   placeholder="Numero de Niveis" value="{{old('qtd_nivel')}}"/>
                                            <!--end::Description-->
                                        </div>


                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->
                                <!--begin::Media-->

                                <!--end::Pricing-->
                            </div>
                        </div>
                        <!--end::Tab pane-->

                    </div>
                    <!--end::Tab content-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{route('admin.planos.index')}}"
                           id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label">Salvar</span>
                            <span class="indicator-progress">Carregando...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Container-->
    </div>

@endsection
