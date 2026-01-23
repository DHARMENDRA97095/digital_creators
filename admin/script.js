function showForm(formId) {
  document.querySelectorAll(".form-box").forEach((form) => {
    form.classList.remove("active");
  });
  document.getElementById(formId).classList.add("active");
}

// Special Hotel Page

AOS.init({
  duration: 1000,
  // offset:100
});

// ------------------Header----------------------

const mobileMenu = document.getElementById("mobileMenu");
const mobileMenuBtn = document.getElementById("mobileMenuBtn");
const closeMenuBtn = document.getElementById("closeMenuBtn");

mobileMenuBtn.addEventListener("click", () => {
  mobileMenu.style.right = "0";
});

closeMenuBtn.addEventListener("click", () => {
  mobileMenu.style.right = "-250px";
});

// ------footer scroll up------------

document.addEventListener("DOMContentLoaded", () => {
  const scrollToTopButton = document.getElementById("scroll-to-top");

  // Show or hide the button based on scroll position
  window.onscroll = function () {
    if (
      document.body.scrollTop > 200 ||
      document.documentElement.scrollTop > 200
    ) {
      scrollToTopButton.style.display = "block";
    } else {
      scrollToTopButton.style.display = "none";
    }
  };

  // Scroll to the top when the button is clicked
  scrollToTopButton.onclick = function () {
    // Use smooth scrolling behavior
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  };
});

// ---------------Room Show Case ----------------

/* -----------------Hotel Container ------------------- */

function selectDate(type) {
  const input = document.getElementById(type + "Input");

  input.showPicker();

  input.addEventListener("change", () => {
    const dateText = document.getElementById(type + "Text");
    dateText.textContent = input.value;
  });
}

// -------------------Welcome Section -------------------

// Show Scroll-to-Top Button
const topBtn = document.getElementById("topBtn");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    topBtn.style.display = "block";
  } else {
    topBtn.style.display = "none";
  }
});

// Scroll to top
topBtn.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// ---------------------Get Offer ------------------------

window.addEventListener("scroll", () => {
  const section = document.querySelector(".offer-section");
  const pos = section.getBoundingClientRect().top;
  const windowHeight = window.innerHeight;

  if (pos < windowHeight - 100) {
    section.classList.add("show");
  }
});

// ----------------Hotel Room -----------------

//   ----------------------services Page -----------------

document.querySelectorAll(".service-card").forEach((card) => {
  card.addEventListener("click", () => {
    alert("You clicked: " + card.innerText);
  });
});

// ---------------Contact Page ---------------

document
  .querySelector(".direction-btn")
  .addEventListener("mouseover", function () {
    this.style.color = "#4bab79";
  });

document
  .querySelector(".direction-btn")
  .addEventListener("mouseout", function () {
    this.style.color = "#79c693";
  });

// -------------------contact News Letter Section-------------

document
  .getElementById("newsletterForm")
  .addEventListener("submit", function (e) {
    e.preventDefault(); // stop page refresh

    const email = document.getElementById("emailInput").value.trim();

    if (email === "") {
      alert("Please enter your email address.");
      return;
    }

    // Optional email pattern check
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      return;
    }

    // Success message
    alert("Thank you! Your email has been submitted: " + email);

    // Clear field after submit
    document.getElementById("newsletterForm").reset();
  });

// ----------------- COntact Form Submit Section------------------

document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault();

  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let subject = document.getElementById("subject").value.trim();
  let message = document.getElementById("message").value.trim();

  if (!name || !email || !subject || !message) {
    alert("Please fill all fields!");
    return;
  }

  alert("Your message has been sent successfully!");
  this.reset();
});

// ------------------- Book btn in property -------------------
