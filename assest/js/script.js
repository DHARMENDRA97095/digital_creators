// Our Portfolio
const buttons = document.querySelectorAll(".filter-btns .btn");
const projects = document.querySelectorAll(".project");

buttons.forEach((btn) => {
  btn.addEventListener("click", () => {
    // Active class
    buttons.forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");

    const filter = btn.dataset.filter;

    projects.forEach((project) => {
      const category = project.dataset.category;

      if (filter === "all" || filter === category) {
        project.style.display = "block";
      } else {
        project.style.display = "none";
      }
    });
  });
});
