@extends('layouts.app')

@section('title', 'Home')

@section('extra-css')
  <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('content')
<!-- 🔹 Hero Section -->
<section class="hero-section">
  {{-- Banner Slider --}}
  <div class="slider-container">
    <div class="slider" id="slider">
      <a href="https://eventease.com/event1" class="slide-link active" target="_blank">
        <img src="{{ asset('assets/images/banner1.jpg') }}" class="slide-img" />
      </a>
      <a href="https://eventease.com/event2" class="slide-link" target="_blank">
        <img src="{{ asset('assets/images/banner2.jpg') }}" class="slide-img" />
      </a>
      <a href="https://eventease.com/event3" class="slide-link" target="_blank">
        <img src="{{ asset('assets/images/banner3.jpg') }}" class="slide-img" />
      </a>
    </div>
    <button class="slider-btn prev" id="prevBtn">←</button>
    <button class="slider-btn next" id="nextBtn">→</button>
  </div>

  {{-- Embedded YouTube Video --}}
  <div class="video-section">
    <iframe width="100%" height="300"
      src="https://www.youtube.com/embed/1La4QzGeaaQ?rel=0&autoplay=0"
      title="EventEase Promo"
      frameborder="0"
      allowfullscreen>
    </iframe>
  </div>
</section>

<!-- 🔹 Upcoming Events -->
<section class="upcoming-events">
  <h2>Explore Upcoming Events</h2>
  <div class="event-cards">
    <a href="https://eventease.com/tech-summit" class="event-card" target="_blank">
      <img src="{{ asset('assets/images/tech.png') }}" alt="Tech Summit">
      <div class="card-info">
        <h3>Tech Summit 2025</h3>
        <p>March 15 • Convention Center</p>
      </div>
    </a>

    <a href="https://eventease.com/music-fest" class="event-card" target="_blank">
      <img src="{{ asset('assets/images/music.png') }}" alt="Music Fest">
      <div class="card-info">
        <h3>Music Fest Live</h3>
        <p>April 10 • Open Air Arena</p>
      </div>
    </a>

    <a href="https://eventease.com/startup-fair" class="event-card" target="_blank">
      <img src="{{ asset('assets/images/startup.png') }}" alt="Startup Fair">
      <div class="card-info">
        <h3>Startup Fair</h3>
        <p>May 5 • Tech Hub Hall</p>
      </div>
    </a>
  </div>
</section>


<!-- 🔹 Our Offerings -->
<section class="our-offerings">
  <h2>Our Offerings</h2>
  <p class="offer-subtitle">Explore the key features that make Tickify the perfect choice for event organizers!</p>
  <div class="offer-grid">
    <div class="offer-item">
      <img src="{{ asset('assets/icons/ticket-purchase.png') }}" alt="Easy Ticket Purchase" />
      <h3>Easy Ticket Purchase</h3>
      <p>Browse, and purchase tickets for a variety of events, from concerts to conferences, all from your device with ease and convenience.</p>
    </div>

    <div class="offer-item">
      <img src="{{ asset('assets/icons/ticket-delivery.png') }}" alt="Instant Ticket Delivery" />
      <h3>Instant Ticket Delivery</h3>
      <p>Receive your tickets immediately upon purchase via email. If preferred, users can also opt to receive their tickets on WhatsApp.</p>
    </div>

    <div class="offer-item">
      <img src="{{ asset('assets/icons/payment-methods.png') }}" alt="Multiple Payment Methods" />
      <h3>Multiple Payment Methods</h3>
      <p>Enjoy flexible payment options with bKash, Nagad, Upay, Visa, Mastercard, and more, ensuring secure and smooth transactions.</p>
    </div>

    <div class="offer-item">
      <img src="{{ asset('assets/icons/tickipass.png') }}" alt="Tickipass Feature" />
      <h3>Tickipass Feature</h3>
      <p>Access purchased tickets instantly with Tickipass, displaying QR codes from your device, eliminating the need for printed e-ticket PDFs.</p>
    </div>

    <div class="offer-item">
      <img src="{{ asset('assets/icons/dashboard.png') }}" alt="Comprehensive Dashboard" />
      <h3>Comprehensive Dashboard</h3>
      <p>Access real-time sales reports and attendance data through our user-friendly dashboard, providing valuable insights at your fingertips.</p>
    </div>

    <div class="offer-item">
      <img src="{{ asset('assets/icons/scanning.png') }}" alt="Smooth Scanning" />
      <h3>Smooth Scanning</h3>
      <p>Streamline the entry process with our efficient ticket scanning system, ensuring a hassle-free experience for attendees and organizers.</p>
    </div>
  </div>
</section>


<!-- 🔹 FAQ Section -->
<section class="faq-section">
  <h2>Frequently Asked Questions</h2>
  <div class="faq">
    <h3>🎫 How do I buy a ticket?</h3>
    <p>You can book tickets through the Events section after logging in.</p>

    <h3>📍 Where are the events hosted?</h3>
    <p>We host both online and offline events. Locations are shown on each event card.</p>

    <h3>🔄 Can I refund or reschedule?</h3>
    <p>Yes, depending on the event organizer's policy. See event terms for details.</p>
  </div>
</section>
@endsection

@section('extra-js')
  <script src="{{ asset('assets/js/home.js') }}"></script>
@endsection
