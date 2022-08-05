@extends('padrao.padrao')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Form-->
            <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
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
                                            <input type="text" name="name" class="form-control mb-2" placeholder="Nome" value="{{old('name')}}" />
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
                                            <input type="text" name="valor" class="form-control mb-2" placeholder="Valor de Plano" value="{{old('valor')}}" />
                                            <!--end::Description-->
                                        </div>
                                        <div>
                                            <!--begin::Label-->
                                            <label class="required form-label">Taxa de Performace</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="taxa_performance" class="form-control mb-2" placeholder="Taxa de Performance" value="{{old('taxa_perfomance')}}" />
                                            <!--end::Description-->
                                        </div>
                                        <div>
                                            <!--begin::Label-->
                                            <label class="required form-label">Quantidade de Niveis</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="qtd_nivel" class="form-control mb-2" placeholder="Numero de Niveis" value="{{old('qtd_nivel')}}" />
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
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::Inventory-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Inventory</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">SKU</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="sku" class="form-control mb-2" placeholder="SKU Number" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Enter the product SKU.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Barcode</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="sku" class="form-control mb-2" placeholder="Barcode Number" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Enter the product barcode number.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Quantity</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="d-flex gap-3">
                                                <input type="number" name="shelf" class="form-control mb-2" placeholder="On shelf" value="" />
                                                <input type="number" name="warehouse" class="form-control mb-2" placeholder="In warehouse" />
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Enter the product quantity.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Allow Backorders</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="form-check form-check-custom form-check-solid mb-2">
                                                <input class="form-check-input" type="checkbox" value="" />
                                                <label class="form-check-label">Yes</label>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Allow customers to purchase products that are out of stock.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Inventory-->
                                <!--begin::Variations-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Variations</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                            <!--begin::Label-->
                                            <label class="form-label">Add Product Variations</label>
                                            <!--end::Label-->
                                            <!--begin::Repeater-->
                                            <div id="kt_ecommerce_add_product_options">
                                                <!--begin::Form group-->
                                                <div class="form-group">
                                                    <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                                                        <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                                                            <!--begin::Select2-->
                                                            <div class="w-100 w-md-200px">
                                                                <select class="form-select" name="product_option" data-placeholder="Select a variation" data-kt-ecommerce-catalog-add-product="product_option">
                                                                    <option></option>
                                                                    <option value="color">Color</option>
                                                                    <option value="size">Size</option>
                                                                    <option value="material">Material</option>
                                                                    <option value="style">Style</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Select2-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control mw-100 w-200px" name="product_option_value" placeholder="Variation" />
                                                            <!--end::Input-->
                                                            <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                                                <span class="svg-icon svg-icon-2">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																							<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																						</svg>
																					</span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Form group-->
                                                <!--begin::Form group-->
                                                <div class="form-group mt-5">
                                                    <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																				<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
                                                        <!--end::Svg Icon-->Add another variation</button>
                                                </div>
                                                <!--end::Form group-->
                                            </div>
                                            <!--end::Repeater-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Variations-->
                                <!--begin::Shipping-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Shipping</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Input-->
                                            <div class="form-check form-check-custom form-check-solid mb-2">
                                                <input class="form-check-input" type="checkbox" id="kt_ecommerce_add_product_shipping_checkbox" value="1" />
                                                <label class="form-check-label">This is a physical product</label>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set if the product is a physical or digital item. Physical products may require shipping.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Shipping form-->
                                        <div id="kt_ecommerce_add_product_shipping" class="d-none mt-10">
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="form-label">Weight</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <input type="text" name="weight" class="form-control mb-2" placeholder="Product weight" value="" />
                                                <!--end::Editor-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a product weight in kilograms (kg).</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="form-label">Dimension</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                                                    <input type="number" name="width" class="form-control mb-2" placeholder="Width (w)" value="" />
                                                    <input type="number" name="height" class="form-control mb-2" placeholder="Height (h)" value="" />
                                                    <input type="number" name="length" class="form-control mb-2" placeholder="Lengtn (l)" value="" />
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Enter the product dimensions in centimeters (cm).</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Shipping form-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Shipping-->
                                <!--begin::Meta options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Meta Options</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label">Meta Tag Title</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label">Meta Tag Description</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <div id="kt_ecommerce_add_product_meta_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"></div>
                                            <!--end::Editor-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a meta tag description to the product for increased SEO ranking.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">Meta Tag Keywords</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <input id="kt_ecommerce_add_product_meta_keywords" name="kt_ecommerce_add_product_meta_keywords" class="form-control mb-2" />
                                            <!--end::Editor-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a list of keywords that the product is related to. Separate the keywords by adding a comma
                                                <code>,</code>between each keyword.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Meta options-->
                            </div>
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
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
