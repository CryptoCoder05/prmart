<!--==========================================================Main footer-------------------------------------------------------->
<div class="clearfix"></div>
<!--<footer class="text-center" id="footer">&copy; Copyright 2018-2020 electronics</footer>-->
<script>
function detailsmodal(id) {
  var data = {"id" : id};
  jQuery.ajax({
    url : '/electronics/details_model.php',
    method : "post",
    data : data,
    success : function(data){
      jQuery('body').append(data);
      jQuery('#details-modal').modal('toggle');
    },
    error : function(){
      alert("Something went wrong!");
    }
  });
}

function update_cart(mode,edit_id,edit_size){
  var data = {"mode" : mode, "edit_id" : edit_id, "edit_size" : edit_size};
  jQuery.ajax({
   url : '/electronics/admin/parsers/update_cart.php',
    method : "post",
    data : data,
    success : function(){location.reload();},
    error : function(){
      alert("Something went wrong!");
    },
  });
}

function add_to_cart(){
  jQuery('#modal_errors').html("");
  var size = jQuery('#size').val();
  var quantity = jQuery('#quantity').val();
  var available = jQuery('#available').val();
  var error = '';
  var data = jQuery('#add_product_form').serialize();
  if(size == '' || quantity == 0){
    error += '<p class="text-danger text-center">You must choose a size and quantity!</p>';
    jQuery('#modal_errors').html(error);
    return;
  }
  else if(quantity > available){
    error += '<p class="text-danger text-center">There are only '+available+' available!</p>';
    jQuery('#modal_errors').html(error);
    return;
  }
  else{
    jQuery.ajax({
      url : '/electronics/admin/parsers/add_cart.php',
      method : 'post',
      data : data,
      success : function(){
        location.reload();
      },
      error : function(){alert("Something went wrong!");}

    });
  }
}
</script>
<!--==========================================================End of Main footer-------------------------------------------------------->
<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45" id="footer">
  <div class="flex-w p-b-90">
    <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
      <h4 class="s-text12 p-b-30">
        GET IN TOUCH
      </h4>

      <div>
        <p class="s-text7 w-size27">
          Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
        </p>

        <div class="flex-m p-t-30">
          <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
          <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
          <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
          <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
          <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
        </div>
      </div>
    </div>

    <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
      <h4 class="s-text12 p-b-30">
        Categories
      </h4>

      <ul>
        <li class="p-b-9">
          <a href="#" class="s-text7">
            Men
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Women
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Dresses
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Sunglasses
          </a>
        </li>
      </ul>
    </div>

    <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
      <h4 class="s-text12 p-b-30">
        Links
      </h4>

      <ul>
        <li class="p-b-9">
          <a href="#" class="s-text7">
            Search
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            About Us
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Contact Us
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Returns
          </a>
        </li>
      </ul>
    </div>

    <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
      <h4 class="s-text12 p-b-30">
        Help
      </h4>

      <ul>
        <li class="p-b-9">
          <a href="#" class="s-text7">
            Track Order
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Returns
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Shipping
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            FAQs
          </a>
        </li>
      </ul>
    </div>

    <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
      <h4 class="s-text12 p-b-30">
        Newsletter
      </h4>

      <form>
        <div class="effect1 w-size9">
          <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
          <span class="effect1-line"></span>
        </div>

        <div class="w-size2 p-t-20">
          <!-- Button -->
          <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
            Subscribe
          </button>
        </div>

      </form>
    </div>
  </div>

  <div class="t-center p-l-15 p-r-15">
    <a href="#">
      <img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
    </a>

    <a href="#">
      <img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
    </a>

    <a href="#">
      <img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
    </a>

    <a href="#">
      <img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
    </a>

    <a href="#">
      <img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
    </a>

    <div class="t-center s-text8 p-t-20">
      Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    </div>
  </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
  <span class="symbol-btn-back-to-top">
    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
  </span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<script type="text/javascript">
  $(".selection-1").select2({
    minimumResultsForSearch: 20,
    dropdownParent: $('#dropDownSelect1')
  });
</script>
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>
<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
  $('.block2-btn-addcart').each(function(){
    var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
    $(this).on('click', function(){
      swal(nameProduct, "is added to cart !", "success");
    });
  });

  $('.block2-btn-addwishlist').each(function(){
    var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
    $(this).on('click', function(){
      swal(nameProduct, "is added to wishlist !", "success");
    });
  });
</script>
<script src="js/main.js"></script>

</body>
</html>
