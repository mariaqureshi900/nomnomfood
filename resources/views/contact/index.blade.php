@extends('layouts.app')

@section('content')
    <section class="contact-hero">
        <h1>Contact Us</h1>
        <p>We are here to help you. Get in touch with us anytime.</p>
    </section>

    <section class="contact-container">
        <div class="contact-info">
            <div class="info-box">
                <h3>📍 Address</h3>
                <p>Karachi, Pakistan</p>
            </div>

            <div class="info-box">
                <h3>📞 Phone</h3>
                <p>+92 300 1234567</p>
                <p>+92 000 3678042</p>
            </div>

            <div class="info-box">
                <h3>📧 Email</h3>
                <p>support@foodpandaclone.com</p>
            </div>
        </div>

        <div class="contact-form">
            <form>
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="Your Email">
                <textarea placeholder="Your Message"></textarea>
                <button type="button">Send Message</button>
            </form>
        </div>
    </section>
@endsection