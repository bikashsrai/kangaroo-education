(function ($) {
  $(document).ready(function () {
    $(document).on("click", "#FilterContainer", function (e) {
      e.preventDefault();

      var category = $(this).data("category");

      $.ajax({
        url: wpAjax.ajaxUrl,
        data: { action: "filter", category: category },
        type: "post",
        success: function (result) {
          $("#FilterContainer").html(result);
        },
        error: function (result) {
          console.warn(result);
        },
      });
    });
  });
})(jQuery);
/* Remove empty paragraphs with &nbsp; */

