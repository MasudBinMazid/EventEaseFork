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
  <div class="offer-grid">
    <div class="offer-item">🎟️ Ticket Booking</div>
    <div class="offer-item">📊 Event Analytics</div>
    <div class="offer-item">🎥 Live Streaming</div>
    <div class="offer-item">📢 Promotion Tools</div>
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
