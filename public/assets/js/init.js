//Hook up the tweet display

$(document).ready(function () {
  $(".countdown").countdown(
    {
      date: "07 March 2025 18:30:00",
      format: "on",
    },

    function () {
      // callback function
      alert("Campaing has been end!");
    }
  );
});
