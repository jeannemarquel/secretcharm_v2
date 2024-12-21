function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }
  
  window.addEventListener('scroll', function() {
    var scrollToTopBtn = document.getElementById('scrollToTopBtn');
    if (window.scrollY > 20) {
      scrollToTopBtn.style.display = 'block';
    } else {
      scrollToTopBtn.style.display = 'none';
    }
  });
  