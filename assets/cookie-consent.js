document.addEventListener('DOMContentLoaded', function () {
  const banner = document.getElementById('cookieBanner');
  const btn = document.getElementById('cookieAccept');

  if (!banner || !btn) return;

  if (localStorage.getItem('cookiesAccepted') === 'true') return;

  setTimeout(() => {
    banner.classList.add('cookie-banner--visible');
  }, 600);

  btn.addEventListener('click', () => {
    localStorage.setItem('cookiesAccepted', 'true');
    banner.classList.remove('cookie-banner--visible');
  });
});
