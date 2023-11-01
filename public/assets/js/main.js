$(document).ready(function() {
    $("#news-slider").owlCarousel({
        items: 1, // Number of items to display
        itemsDesktop: [1199, 3], // Number of items on desktop screens (width >= 1199px)
        itemsDesktopSmall: [980, 2], // Number of items on smaller desktop screens (width >= 980px)
        itemsTablet: [768, 2], // Number of items on tablet screens (width >= 768px)
        itemsMobile: [600, 1], // Number of items on mobile screens (width >= 600px)
        navigation: true, // Show navigation buttons
        navigationText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"], // Custom navigation button content
        pagination: true, // Show pagination dots
        autoPlay: 5000, // Autoplay interval in milliseconds (5 seconds)
        stopOnHover: true, // Pause autoplay on hover
        slideSpeed: 300, // Slide transition speed in milliseconds
        rewindNav: true, // Enable navigation rewind (go to the first item after the last)
        responsive: true, // Enable responsive behavior
        responsiveRefreshRate: 200 // Refresh rate for responsive layout changes
    });
});
