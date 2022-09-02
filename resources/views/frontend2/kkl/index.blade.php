@extends('layouts.front2')

@section('meta')
    <meta name="description" content="Sisem ini merupakan sistem yang dikelola lansung oleh Prodi SI ITB AD. Sebagai media informasi dan Kegiatan Progaram Studi Sistem Informasi ITB AD">
    <meta name="author" content="XRha">
    <meta name="keywords" content="ITB AD, SI, Sistem Informasi, KKL, Skripsi, Sisfo, Akademik, Prodi">
    <meta name="robots" content="index, follow">
@endsection

@section('title')
    Pengajual Judul KKL
@endsection

@section('content2')

<section class="section checkout">
    <div class="container">
        <header class="entry-header">
            <h2 class="entry-title">Pengajuan Judul KKL</h2>
        </header>
        <div class="entry-content">
            <form class="woocommerce-checkout">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="woocommerce-billing-fields">
                            <h3 class="title-7 m-b-15">Detail Mahasiswa</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">First Name
                                            <span class="required">*</span>
                                        </label>
                                        <input class="au-input-2" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Name
                                            <span class="required">*</span>
                                        </label>
                                        <input class="au-input-2" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Company Name</label>
                                <input class="au-input-2" type="text">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Country
                                    <span class="required">*</span>
                                </label>
                                <div class="rs1-select2 js-select-simple select--no-search rs1-select2--lower m-b-20">
                                    <select name="country">
                                        <option>USA</option>
                                        <option>UK</option>
                                        <option>VietNam</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Street address
                                    <span class="required">*</span>
                                </label>
                                <input class="au-input-2" type="text" placeholder="House number and street name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Postcode / ZIP</label>
                                <input class="au-input-2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Town / City
                                    <span class="required">*</span>
                                </label>
                                <input class="au-input-2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone
                                    <span class="required">*</span>
                                </label>
                                <input class="au-input-2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address
                                    <span class="required">*</span>
                                </label>
                                <input class="au-input-2" type="email" required>
                            </div>
                            <div class="form-group form-group--check m-t-0 m-b-47">
                                <input class="au-checkbox" type="checkbox" checked="checked" id="cre1">
                                <label for="cre1">Create an account?</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="woocommerce-additional-fields">
                            <h3 class="title-7 m-b-15">Additional information</h3>
                            <div class="form-group">
                                <label class="au-label-2">Order Note</label>
                                <textarea class="au-textarea-2" name="order-note" placeholder="Note about your order, eg. special notes fordelivery."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="woocommerce-checkout-review-order">
                <h3 class="title-7 m-b-15">Your order</h3>
                <table class="shop_table woocommerce-checkout-review-order-table">
                    <thead>
                        <tr>
                            <th class="product-name">product</th>
                            <th class="product-total">total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td class="product-name">Black Lamp x 1</td>
                            <td class="product-total">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>40</span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>40</span>
                            </td>
                        </tr>
                        <tr class="shipping-subtotal">
                            <th>Shipping</th>
                            <td>Free shipping</td>
                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>40</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="woocommerce-checkout-payment">
                <ul class="wc_payment_methods">
                    <li class="wc_payment_method payment_method_cheque">
                        <div class="form-group form-group--check m-t-0 m-b-47">
                            <input class="au-checkbox" type="checkbox" checked="checked" id="cre2">
                            <label for="cre2">Check payment</label>
                        </div>
                        <div class="payment_box payment_method_cheque">
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                        </div>
                    </li>
                    <li class="wc_payment_method payment_method_paypal">
                        <div class="form-group form-group--check m-t-0 m-b-47">
                            <input class="au-checkbox" type="checkbox" id="cre3">
                            <label for="cre3">paypal</label>
                        </div>
                        <span class="payment_desc">
                            <img src="images/icon/paypal.png" alt="Paypal">
                            <a href="#">What is Paypal?</a>
                        </span>
                    </li>
                </ul>
                <div class="place-order">
                    <a class="au-btn au-btn--solid au-btn-lg" href="#">Place order</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection