document.addEventListener("DOMContentLoaded", function () {
  const sidebar = document.querySelector(".dashboard-sideBar");
  const toggleBtns = document.querySelectorAll(".btn-menu-dashboard");
  const body = document.body;

  toggleBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      sidebar.classList.toggle("hide");
      body.classList.toggle("sidebar-hidden");
    });
  });
});
