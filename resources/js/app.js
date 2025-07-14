// event untuk back to top button

document.addEventListener("DOMContentLoaded", function () {
  const isDesktop = window.innerWidth >= 992;

  document.querySelectorAll('.nav-item.dropdown').forEach(function (dropdown) {
    if (isDesktop) {
      dropdown.classList.add('dropdown-hover');
    } else {
      dropdown.classList.remove('dropdown-hover');
    }
  });

  if (!isDesktop) {
    document.querySelectorAll('.dropdown-menu .dropdown-item').forEach(function (item) {
      item.addEventListener('click', function () {
        const dropdown = item.closest('.dropdown');
        const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
        const instance = bootstrap.Dropdown.getInstance(toggle);
        if (instance) {
          instance.hide();
        }
      });
    });
  }
});
