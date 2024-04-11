(function () {
  const listElement = document.querySelectorAll(".menu__item--show");
  const element = document.querySelectorAll(".list__button--click");
  const list = document.querySelector(".menu__links");
  const menu = document.querySelector(".menu__hamburguer");

  element.forEach((elements) => {
    elements.addEventListener("click", () => {
      let height = 0;
      let submenu = elements.nextElementSibling;
      elements.classList.toggle("menu__item--active");
      console.log(submenu.scrollHeight);

      if (submenu.clientHeight === 0) {
        height = submenu.scrollHeight;
      }

      submenu.style.height = `${height}px`;
    });
  });

  const addClick = () => {
    listElement.forEach((element) => {
      element.addEventListener("click", () => {
        let subMenu = element.children[1];
        let height = 0;
        element.classList.toggle("menu__item--active");

        console.log(subMenu.clientHeight);

        if (subMenu.clientHeight === 0) {
          height = subMenu.scrollHeight;
        }

        subMenu.style.height = `${height}px`;
      });
    });
  };

  const deleteStyleHeight = () => {
    listElement.forEach((element) => {
      if (element.children[1].getAttribute("style")) {
        element.children[1].removeAttribute("style");
        element.classList.remove("menu__item--active");
      }
    });
  };

  window.addEventListener("resize", () => {
    if (window.innerWidth > 800) {
      deleteStyleHeight();
      if (list.classList.contains("menu__links--show")) {
        list.classList.remove("menu__links--show");
      }
    } else {
      addClick();
    }
  });

  if (window.innerWidth <= 800) {
    addClick();
  }

  menu.addEventListener("click", () =>
    list.classList.toggle("menu__links--show")
  );
})();