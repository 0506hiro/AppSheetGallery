document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.querySelector(".menu-toggle");
  const navMenu = document.querySelector(".main-nav");
  if (menuToggle && navMenu) {
    menuToggle.addEventListener("click", () => {
      navMenu.classList.toggle("active");
      menuToggle.classList.toggle("active");
    });
  }

  // メインメニューを右から表示する機能を追加
  const body = document.querySelector("body");
  if (menuToggle && navMenu && body) {
    menuToggle.addEventListener("click", () => {
      body.classList.toggle("drawer-open");
    });
  }
});
