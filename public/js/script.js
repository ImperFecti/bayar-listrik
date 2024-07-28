// Ensure the page scrolls to the top when the user navigates away
window.onbeforeunload = function () {
  window.scrollTo(0, 0);
};

document.addEventListener("DOMContentLoaded", function () {
  // Select form elements
  const form = document.getElementById("calculator-form");
  const dailyUsageInput = document.getElementById("daily-usage");
  const dailyKwhSpan = document.getElementById("daily-kwh");
  const dailyTariffInput = document.getElementById("daily-tariff");
  const golonganSelect = document.getElementById("golongan");
  const monthlyTariffHeading = document.getElementById("monthly-tariff");
  const calculateBtn = document.getElementById("calculate-btn");
  const resetBtn = document.getElementById("reset-btn");

  // Function to escape HTML characters to prevent XSS attacks
  function escapeHtml(text) {
    const map = {
      "&": "&amp;",
      "<": "&lt;",
      ">": "&gt;",
      '"': "&quot;",
      "'": "&#039;",
    };
    return text.replace(/[&<>"']/g, function (m) {
      return map[m];
    });
  }

  // Function to update the tariff calculations based on user input
  function updateCalculations() {
    const dailyUsage = parseFloat(dailyUsageInput.value) || 0;
    const kwh = dailyUsage / 1000;
    dailyKwhSpan.textContent = escapeHtml(kwh.toFixed(1));

    const tariffRate = parseFloat(golonganSelect.value);
    const dailyTariff = kwh * tariffRate;
    dailyTariffInput.value = `Rp. ${escapeHtml(dailyTariff.toFixed(0))}`;

    const monthlyTariff = dailyTariff * 30;
    monthlyTariffHeading.textContent = `Rp. ${escapeHtml(
      monthlyTariff.toFixed(0)
    )}`;
  }

  // Function to reset all form fields
  function resetFields() {
    dailyUsageInput.value = "";
    dailyKwhSpan.textContent = "0";
    dailyTariffInput.value = "Rp. 0";
    monthlyTariffHeading.textContent = "Rp. 0";
    golonganSelect.selectedIndex = 0;
  }

  // Event listener to handle the calculate button click
  calculateBtn.addEventListener("click", function () {
    if (form.checkValidity()) {
      updateCalculations();
    } else {
      form.reportValidity();
    }
  });

  // Event listener to handle the reset button click
  resetBtn.addEventListener("click", resetFields);
});

// JavaScript for fade-in effect on scroll
document.addEventListener("DOMContentLoaded", function () {
  const elements = document.querySelectorAll(".fade-in");

  // Function to check if elements should fade in based on scroll position
  function checkFadeIn() {
    const triggerHeight = window.innerHeight * 0.75;

    elements.forEach((element) => {
      const elementTop = element.getBoundingClientRect().top;

      if (elementTop < triggerHeight) {
        element.classList.add("show");
      } else {
        element.classList.remove("show");
      }
    });
  }

  // Add scroll event listener to check for fade-in effect
  window.addEventListener("scroll", checkFadeIn);
  checkFadeIn(); // Initial check in case elements are already in view
});
