document.addEventListener('DOMContentLoaded', () => {
  const viewport = document.querySelector('.teachers-slider__viewport');
  const track = document.querySelector('.teachers-slider__track');
  const btnPrev = document.querySelector('.teachers-arrow--left');
  const btnNext = document.querySelector('.teachers-arrow--right');

  if (!viewport || !track || !btnPrev || !btnNext) return;

  const getStep = () => {
    const card = track.querySelector('.teacher-card');
    if (!card) return 300;

    const gap = parseFloat(getComputedStyle(track).gap) || 0;
    const cardW = card.getBoundingClientRect().width;

    return cardW + gap;
  };

  const isMobile = () => window.innerWidth < 900;

  btnNext.addEventListener('click', (e) => {
    e.preventDefault();
    if (isMobile()) return;
    viewport.scrollBy({ left: getStep(), behavior: 'smooth' });
  });

  btnPrev.addEventListener('click', (e) => {
    e.preventDefault();
    if (isMobile()) return;
    viewport.scrollBy({ left: -getStep(), behavior: 'smooth' });
  });
});
