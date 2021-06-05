function openProductModal(btn_id) {
  var product_image = $(`#img_id_${btn_id}`).attr("src");
  var product_title = $(`#title_id_${btn_id}`).text();
  var product_price = $(`#price_id_${btn_id}`).text();
  $("#modal_product_title").text(product_title);
  $("#modal_product_price").text(product_price);
  $("#modal_product_image").attr("src", product_image);
  $("#product_modal").modal("show");
}
