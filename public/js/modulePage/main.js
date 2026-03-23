/* === TIPPY JS === */
const template = document.getElementById("template");

tippy("#headerMenu", {
  content: template.innerHTML,
  placement: "bottom",
  interactive: true,
  trigger: "click",
  allowHTML: true,
});

/* === BUSCADOR === */
const cards = document.querySelectorAll(".card");

document.addEventListener("keyup", (event) => {
  if (event.target.matches("#search")) {
    document.querySelectorAll(".card__title").forEach((element, idx) => {
      element.textContent
        .toLowerCase()
        .includes(event.target.value.toLowerCase())
        ? cards[idx].classList.remove("filtro")
        : cards[idx].classList.add("filtro");
    });
  }
});
