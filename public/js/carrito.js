$(document).ready(function() {
  $(".add-to-cart").on("submit", function (e) {
    e.preventDefault();

    var $form = $(this);
    var $button = $form.find("[type='submit']");

    $.ajax({
      url: $form.attr("action"),
      method: $form.attr("method"),
      data: $form.serialize(),
      beforeSend: function () {
        $button.val("Cargando...");
      },
      success: function ( data ) {
        $button.css("background-color","#00c853").val("Agregado");

        $(".circle-shopping-cart").html(data.products_count);
        setTimeout(function () {
          restartButton($button);
        },2000);
      },
      error: function (err) {
        console.log(err);
        $button.css("background-color","#d50000").val("Error");
        setTimeout(function () {
          restartButton($button);
        },2000);
      }
    });
    return false;
  });

  function restartButton() {
    $button.val("Agregar al carrito").attr("style","");
  }
});
