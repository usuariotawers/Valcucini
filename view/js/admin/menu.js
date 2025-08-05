document.querySelectorAll('.btn-sideBar-SubMenu').forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    e.preventDefault();

    let parentLi = this.parentNode;
    let submenu = parentLi.querySelector('ul');

    if (submenu) {
      submenu.classList.toggle('show-submenu');
    }
  });
});
