<?php
$cpuProduct = array
  (
  array("Intel Core i3-7100","4,550"),
  array("Intel Core i3-7350K","6,990"),
  array("Intel Core i5-7400","7,250"),
  array("Intel Core i5-7500","7,850"),
  array("Intel Core i5-7600","8,750")
  );

function cpuCat() {
    <script>
		document.getElementById("demo").innerHTML = "My First JavaScript";
	</script>
}

?>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">cpuProduct[i][0]</a></h4>
                                <p>description description description description</p>
                                <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                                    <input type="hidden" name="cmd" value="_xclick">
                                    <input type="hidden" name="business" value="">
                                    <input type="hidden" name="item_name" value="cpuProduct[i][0]">
                                    <input type="hidden" name="item_number" value="123">
                                    <input type="hidden" name="amount" value="5.95">
                                    <input type="hidden" name="shipping" value="1.00">
                                    <input type="hidden" name="shipping2" value="0.50">
                                    <input type="hidden" name="handling" value="2.00">
                                    <input type="hidden" name="currency_code" value="THB">
                                    <input type="hidden" name="return" value="">
                                    <input type="hidden" name="undefined_quantity" value="1">
                                    <input type="submit" class="btn btn-success pull-right" name="submit" value="Add to Cart">
                                </form>
                                <script src="http://cdnjs.cloudflare.com/ajax/libs/minicart/3.0.6/minicart.min.js"></script>
                                <script>paypal.minicart.render();</script>
                            </div>
                        </div>
                    </div>