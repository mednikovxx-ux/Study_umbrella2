const GS_ENDPOINT = "https://script.google.com/macros/s/AKfycbxNhucxWq1Qr91tCFACORRjioe57XDiX5AZWX1p9TIUCNjANcIKPSDUDVk3lL61pXxvww/exec";

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contactForm");
  if (!form) return;

  const started = document.getElementById("form_started_at");
  const page = document.getElementById("form_page");
  const submitBtn = form.querySelector(".contact-form__submit");

  let toast = document.getElementById("formToast");
  if (!toast) {
    toast = document.createElement("div");
    toast.id = "formToast";
    toast.className = "form-toast";
    document.body.appendChild(toast);
  }

  function showToast(type = "success", text = "") {
    toast.classList.remove("is-error");
    if (type === "error") toast.classList.add("is-error");

    toast.textContent = text || (type === "success"
      ? "✅ Заявка отправлена! Мы свяжемся с вами."
      : "❌ Не удалось отправить заявку. Попробуйте позже.");

    toast.classList.add("show");
    clearTimeout(showToast._t);
    showToast._t = setTimeout(() => toast.classList.remove("show"), 3500);
  }

  if (started) started.value = Date.now().toString();
  if (page) page.value = location.href;

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const fd = new FormData(form);

    // антибот: honeypot
    const company = (fd.get("company") || "").toString().trim();
    if (company) return;

    // антибот: слишком быстро
    const startedAt = Number(fd.get("form_started_at") || 0);
    if (startedAt && (Date.now() - startedAt) < 2500) return;

    const payload = {
      name: (fd.get("name") || "").toString().trim(),
      phone: (fd.get("phone") || "").toString().trim(),
      comment: (fd.get("comment") || "").toString().trim(),
      page: location.href,
      company,
      form_started_at: startedAt
    };

    if (!payload.name || !payload.phone) {
      showToast("error", "❌ Заполните имя и телефон.");
      return;
    }

    try {
      submitBtn.disabled = true;
      submitBtn.textContent = "Отправляем...";

      await fetch(GS_ENDPOINT, {
        method: "POST",
        mode: "no-cors",
        headers: { "Content-Type": "text/plain;charset=utf-8" },
        body: JSON.stringify(payload),
      });

      form.reset();
      if (started) started.value = Date.now().toString();
      if (page) page.value = location.href;

      showToast("success");
    } catch (err) {
      console.error("Form submit error:", err);
      showToast("error");
    } finally {
      submitBtn.disabled = false;
      submitBtn.textContent = "Отправить";
    }
  });
});
