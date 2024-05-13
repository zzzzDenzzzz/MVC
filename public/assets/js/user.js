// Pagination
const divTable = document.querySelector(".table-responsive");
divTable.addEventListener("click", (e) => {
  if (e.target.className === "page-link") {
    e.preventDefault();
    let page = +e.target.dataset.page;
    if (page) {
      fetch("../app/core/Action.php", {
        method: "POST",
        body: JSON.stringify({ page: page }),
      })
        .then((response) => response.text())
        .then((data) => {
          divTable.innerHTML = data;
        });
    }
  }
});

// Search
const sField = document.getElementById("search");
const loader = document.getElementById("loader");
sField.addEventListener("input", (e) => {
  let search = e.target.value.trim();
  if (search.length > 2) {
    fetch("../../app/core/Action.php", {
      method: "POST",
      body: JSON.stringify({ search: search }),
    })
      .then((response) => response.text())
      .then((data) => {
        loader.style.display = "block";
        setTimeout(() => {
          divTable.innerHTML = data;
          let instance = new Mark(divTable);
          instance.mark(search);
          loader.style.display = "none";
        }, 500);
      });
  }
});
