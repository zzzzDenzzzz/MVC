//Hook up the tweet display

$(document).ready(function () {
  $(".countdown").countdown(
    {
      date: "31 May 2024 13:57:00",
      format: "on",
    },

    function () {
      // callback function
      alert("All!");
    }
  );
});
