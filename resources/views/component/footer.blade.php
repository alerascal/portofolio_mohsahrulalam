<footer class="footer bg-dark text-light py-4">
  <div class="container">
    <div class="footer-inner border-top pt-4">
      <!-- Logo di tengah -->
      <div class="footer-logo fw-bold text-center">
        Moh Sahrul Alamsyah
      </div>

      <!-- Socials di bawah logo -->
      <nav class="socials d-flex gap-3 justify-content-center mt-3" role="navigation" aria-label="Social Media Links">
        @if($socialLinks->isEmpty())
          <p class="text-center">No social links available.</p>
        @else
          @foreach($socialLinks as $link)
            <a href="{{ $link->url }}" target="_blank" aria-label="Visit my {{ $link->name }}" class="text-light fs-4" title="{{ $link->name }}">
              <i class="{{ $link->icon }}"></i>
            </a>
          @endforeach
        @endif
      </nav>

      <!-- Navigasi tambahan -->
      <div class="footer-links d-flex gap-3 justify-content-center mt-3">
        <a href="#about" class="text-light">About</a>
        <a href="#contact" class="text-light">Contact</a>
        <a href="#" class="text-light">Privacy Policy</a>
      </div>

      <!-- Copyright -->
      <div class="text-center mt-3">
        &copy; {{ date('Y') }} Moh Sahrul Alamsyah
      </div>
    </div>
  </div>
</footer>