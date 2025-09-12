@extends('master')
@section('title', 'Contact Us')
@section('content')
<!-- Contact Page -->
<section class="py-5 my-4 vh-100">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                @isset($informations)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Your message has been sent successfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="bg-light p-4 rounded-4 shadow-sm">
                    <p><strong>Name:</strong> {{ $informations->name }}</p>
                    <p><strong>Email:</strong> {{ $informations->email }}</p>
                    <p><strong>Phone:</strong> {{ $informations->phone }}</p>
                    <p><strong>Message:</strong> {{ $informations->message }}</p>
                    <button class="btn btn-primary" onclick="window.location.href='{{ url('/') }}'">Go back to Shopping</button>
                </div>
                @else
                <!-- Form Card -->
                <div class="card shadow-sm border-0 rounded-4 p-4 p-md-5">
                    <div class="text-center mb-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-circle mb-3" style="width:60px; height:60px; display:flex; align-items:center; justify-content:center; margin:auto;">
                            <i class="bi bi-envelope fs-3"></i>
                        </div>
                        <h1 class="fw-bold mb-2">Get in Touch</h1>
                        <p class="text-muted mb-0">We'd love to hear from you</p>
                    </div>
                    <form method="post" id="contactForm" data-sb-form-api-token="API_TOKEN">
                        @csrf
                        <!-- Name input -->
                        <div class="form-floating mb-4">
                            <input name="name" class="form-control form-control-lg" id="name" type="text" placeholder="Enter your name" data-sb-validations="required" />
                            <label for="name">Full Name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email input -->
                        <div class="form-floating mb-4">
                            <input name="email" class="form-control form-control-lg" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email Address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone input -->
                        <div class="form-floating mb-4">
                            <input name="phone" class="form-control form-control-lg" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone Number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message textarea -->
                        <div class="form-floating mb-4">
                            <textarea name="message" class="form-control form-control-lg" id="message" placeholder="Enter your message" style="height: 12rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Success/Error Messages -->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3 text-success">
                                <div class="fw-bold">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">SB Forms</a>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center mb-3 text-danger">Error sending message!</div>
                        </div>
                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
                <!-- End Form Card -->
                @endisset
            </div>
        </div>
    </div>
</section>
@endsection("content")