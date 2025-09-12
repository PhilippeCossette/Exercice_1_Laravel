@extends('master')
@section('title', 'FAQ')
@section('content')
<!-- Page Content-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder">Frequently Asked Questions</h1>
            <p class="lead fw-normal text-muted mb-0">Everything you need to know about our keyboards and services</p>
        </div>
        <div class="row gx-5">
            <div class="col-xl-8">
                <!-- FAQ Accordion 1: Orders & Shipping -->
                <h2 class="fw-bolder mb-3">Orders &amp; Shipping</h2>
                <div class="accordion mb-5" id="accordionOrders">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOrderOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOrderOne" aria-expanded="true" aria-controls="collapseOrderOne">
                                How long does shipping take?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="collapseOrderOne" aria-labelledby="headingOrderOne" data-bs-parent="#accordionOrders">
                            <div class="accordion-body">
                                Most orders are processed within 1-2 business days. Standard shipping typically takes 3-7 business days depending on your location. Expedited shipping options are available at checkout.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOrderTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOrderTwo" aria-expanded="false" aria-controls="collapseOrderTwo">
                                Can I track my order?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="collapseOrderTwo" aria-labelledby="headingOrderTwo" data-bs-parent="#accordionOrders">
                            <div class="accordion-body">
                                Yes! Once your order is shipped, you will receive a tracking number via email. You can use it to monitor your shipment through the carrier's website.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOrderThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOrderThree" aria-expanded="false" aria-controls="collapseOrderThree">
                                Do you ship internationally?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="collapseOrderThree" aria-labelledby="headingOrderThree" data-bs-parent="#accordionOrders">
                            <div class="accordion-body">
                                Yes, we ship to most countries worldwide. Shipping times and costs vary depending on your location. International customers are responsible for customs duties and taxes.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Accordion 2: Products & Support -->
                <h2 class="fw-bolder mb-3">Products &amp; Support</h2>
                <div class="accordion mb-5 mb-xl-0" id="accordionProducts">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingProductOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProductOne" aria-expanded="true" aria-controls="collapseProductOne">
                                Are your keyboards compatible with Mac and Windows?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="collapseProductOne" aria-labelledby="headingProductOne" data-bs-parent="#accordionProducts">
                            <div class="accordion-body">
                                Yes! All KeyCraft keyboards are fully compatible with both Mac and Windows systems. Some advanced features may require specific software available on our website.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingProductTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProductTwo" aria-expanded="false" aria-controls="collapseProductTwo">
                                What warranty do you offer?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="collapseProductTwo" aria-labelledby="headingProductTwo" data-bs-parent="#accordionProducts">
                            <div class="accordion-body">
                                All keyboards come with a 1-year manufacturer warranty covering defects in materials and workmanship. Extended warranty plans are also available during checkout.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingProductThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProductThree" aria-expanded="false" aria-controls="collapseProductThree">
                                How can I get technical support?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="collapseProductThree" aria-labelledby="headingProductThree" data-bs-parent="#accordionProducts">
                            <div class="accordion-body">
                                You can contact our support team via email at <a href="mailto:support@keycraft.com">support@keycraft.com</a>, or use our live chat during business hours. Our detailed support guides and FAQ section are also available online.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar: Contact Info & Social -->
            <div class="col-xl-4">
                <div class="card border-0 bg-light mt-xl-5">
                    <div class="card-body p-4 py-lg-5">
                        <div class="text-center">
                            <div class="h6 fw-bolder">Need more help?</div>
                            <p class="text-muted mb-4">
                                Contact our support team at
                                <br />
                                <a href="mailto:support@keycraft.com">support@keycraft.com</a>
                            </p>
                            <div class="h6 fw-bolder">Follow us</div>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection("content")