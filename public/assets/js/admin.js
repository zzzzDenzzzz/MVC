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
          document.querySelector(".table-responsive").innerHTML = data;
        });
    }
  }
});

addCityForm = document.getElementById("addCityForm");
btnAddSubmit = document.getElementById("btn-add-submit");

addCityForm.addEventListener("submit", (e) => {
  e.preventDefault();
  btnAddSubmit.textContent = "Saving...";
  btnAddSubmit.disabled = true;

  fetch("../app/core/Action.php", {
    method: "POST",
    body: new FormData(addCityForm),
  })
    .then((response) => response.json())
    .then((data) => {
      Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Your work has been saved",
        showConfirmButton: false,
        timer: 1500
      });
      if (data.answer == "success") {
        addCityForm.reset();
      }
      btnAddSubmit.textContent = "Save";
      btnAddSubmit.disabled = false;
    });
});
