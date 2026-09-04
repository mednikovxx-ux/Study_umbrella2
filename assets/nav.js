document.addEventListener('DOMContentLoaded', () => {
  const header = document.getElementById('siteHeader');
  const burger = document.getElementById('burgerToggle');

  const mainDropdown = document.getElementById('mainDropdown');
  const mainBtn = document.getElementById('mainMenuToggle');

  const switchDropdown = document.getElementById('switchDropdown');
  const switchBtn = document.getElementById('switchToggle');

  const navMainGroup = document.querySelector('.nav-main-group');
  const navMainBtn = document.querySelector('.nav-main-toggle');

  const subGroups = document.querySelectorAll('.nav-sub-group');

  const closeDesktop = () => {
    mainDropdown?.classList.remove('dropdown--open');
    switchDropdown?.classList.remove('dropdown--open');
  };

  // ---------- DESKTOP dropdowns ----------
  if (mainBtn && mainDropdown) {
    mainBtn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      const willOpen = !mainDropdown.classList.contains('dropdown--open');
      closeDesktop();
      mainDropdown.classList.toggle('dropdown--open', willOpen);
    });
  }

  if (switchBtn && switchDropdown) {
    switchBtn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      const willOpen = !switchDropdown.classList.contains('dropdown--open');
      closeDesktop();
      switchDropdown.classList.toggle('dropdown--open', willOpen);
    });
  }

  // ---------- MOBILE burger ----------
  if (header && burger) {
    const burgerText = burger.querySelector('.burger__text');

    burger.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();

      const isOpen = header.classList.toggle('header--mobile-open');

      burger.classList.toggle('burger--open', isOpen);
      if (burgerText) burgerText.textContent = isOpen ? 'Закрыть' : 'Главная';
    });
  }

  // ---------- MOBILE "Главная" inside burger ----------
  if (navMainBtn && navMainGroup) {
    navMainBtn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      navMainGroup.classList.toggle('nav-main-group--open');
    });
  }

  // ---------- MOBILE 2nd level ----------
  subGroups.forEach((group) => {
    const btn = group.querySelector('.nav-sub-toggle');
    if (!btn) return;

    btn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      group.classList.toggle('nav-sub-group--open');
    });
  });

  // ---------- prevent closing when clicking inside header ----------
  header?.addEventListener('click', (e) => {
    e.stopPropagation();
  });

  // ---------- click outside: close desktop dropdowns only ----------
  document.addEventListener('click', () => {
    closeDesktop();
  });

  // ---------- click a link inside dropdowns -> close ----------
  document.querySelectorAll('.dropdown__menu a').forEach(a => {
    a.addEventListener('click', () => closeDesktop());
  });
});
