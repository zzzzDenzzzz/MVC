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
      setTimeout(() => {
        Swal.fire({
          icon: data.answer,
          title: data.answer,
          html: data?.errors,
        });
        if (data.answer === "success") {
          addCityForm.reset();
        }
        btnAddSubmit.textContent = "Save";
        btnAddSubmit.disabled = false;
      }, 1000);
    });
});