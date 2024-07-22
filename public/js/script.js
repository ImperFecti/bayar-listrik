document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("calculator-form");
  const dailyUsageInput = document.getElementById("daily-usage");
  const dailyKwhSpan = document.getElementById("daily-kwh");
  const dailyTariffInput = document.getElementById("daily-tariff");
  const golonganSelect = document.getElementById("golongan");
  const monthlyTariffHeading = document.getElementById("monthly-tariff");
  const calculateBtn = document.getElementById("calculate-btn");
  const resetBtn = document.getElementById("reset-btn");

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

  function resetFields() {
    dailyUsageInput.value = "";
    dailyKwhSpan.textContent = "0";
    dailyTariffInput.value = "Rp. 0";
    monthlyTariffHeading.textContent = "Rp. 0";
    golonganSelect.selectedIndex = 0;
  }

  calculateBtn.addEventListener("click", function () {
    if (form.checkValidity()) {
      updateCalculations();
    } else {
      form.reportValidity();
    }
  });

  resetBtn.addEventListener("click", resetFields);
});
