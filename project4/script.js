function scalePage() {
  const wrapper = document.getElementById('scaleWrapper');
  const designWidth = 1440;
  const windowWidth = window.innerWidth;
  const scale = windowWidth / designWidth;
  wrapper.style.transform = 'scale(' + scale + ')';
  wrapper.style.transformOrigin = 'top left';
  document.body.style.height = (wrapper.offsetHeight * scale) + 'px';
}

scalePage();
window.addEventListener('resize', scalePage);