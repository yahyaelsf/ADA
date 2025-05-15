// back-to-top button functionality
const backToTopButton = document.getElementById("back-to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 1000) {
    backToTopButton.classList.add("visible");
  } else {
    backToTopButton.classList.remove("visible");
  }
});

// When clicked, scroll to top
backToTopButton.addEventListener("click", (e) => {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
// Start mobile toggle
document.addEventListener("DOMContentLoaded", function () {
  // Mobile menu toggle
  const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
  const mainNav = document.getElementById("main-nav");

  mobileMenuToggle.addEventListener("click", function () {
    mainNav.classList.toggle("active");
  });

  // Handle dropdown menus on mobile
  const dropdownItems = document.querySelectorAll(".nav-item.dropdown");

  dropdownItems.forEach((item) => {
    const link = item.querySelector("a");
    const dropdownMenu = item.querySelector(".dropdown-menu-p");

    // Only attach click event for mobile view
    const handleDropdownClick = function (e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        item.classList.toggle("active");
        dropdownMenu.classList.toggle("active");
      }
    };

    link.addEventListener("click", handleDropdownClick);
  });

  // Close mobile menu when clicking outside
  document.addEventListener("click", function (e) {
    if (
      !mainNav.contains(e.target) &&
      !mobileMenuToggle.contains(e.target) &&
      mainNav.classList.contains("active")
    ) {
      mainNav.classList.remove("active");

      // Close any open dropdowns
      dropdownItems.forEach((item) => {
        item.classList.remove("active");
        const dropdownMenu = item.querySelector(".dropdown-menu-p");
        if (dropdownMenu) {
          dropdownMenu.classList.remove("active");
        }
      });
    }
  });

  // Handle window resize
  window.addEventListener("resize", function () {
    if (window.innerWidth > 768 && mainNav.classList.contains("active")) {
      mainNav.classList.remove("active");

      // Reset dropdowns
      dropdownItems.forEach((item) => {
        item.classList.remove("active");
        const dropdownMenu = item.querySelector(".dropdown-menu-p");
        if (dropdownMenu) {
          dropdownMenu.classList.remove("active");
        }
      });
    }
  });
});
