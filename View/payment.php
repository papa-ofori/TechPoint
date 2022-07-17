<?php
include("../controllers/cart_controller.php");
include("../settings/core.php");
$cartlist=view_cart_ctr();
//for the number of items in the cart
$cid= get_id();
$total= select_total_qty_from_cart_ctr($cid);
$total=$total[0];
$total1=$total['SUM(qty)'];

// total price controller
$overall_price = select_total_price_ctr($cid);
$overall_price = $overall_price[0];
$overall_price_a = $overall_price['SUM(products.product_price*cart.qty)'];

//select email
$user_email = select_email_ctr($cid);
// print_r($user_email);
$user_email = $user_email['customer_email'];
//print_r($user_email);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check out</title>
    <link rel="stylesheet" type="text/css" href="../css/summary.css">
    <script src="https://js.paystack.co/v1/inline.js"></script>
</head>
<body>
<div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Payment Summary</h2>
                <div class='line'></div>

                <?php
                        foreach ($cartlist as $oneproduct) {
                            $product_image = $oneproduct['product_image'];
                            $product_title = $oneproduct['product_title'];
                            $product_price = $oneproduct['product_price'];
                            $product_qty=  $oneproduct['qty'];
                            $itemtotal_price= $product_price * $product_qty;
                            echo "
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='../images/$product_image' class='full-width'></img>
              </td>
              <td>
                <br> <span class='thin'>$product_title($product_qty)</span>
                <br><br> <span class='thin small'> GHS $itemtotal_price<br><br></span>
              </td>

            </tr>

                        

                </table>";}?>

            <tr >
              <td >
                 <?php echo"
                <div class='price'><h5>Total Price:GHS $overall_price_a</h5> <h6>Subtotal:$total1 items</h6> </div>";?>
              </td>
            </tr>
          </tbody>

        
        <div class='line'></div>

</div>
</div>
        <div class='credit-info'>
          <div class='credit-info-content'>
             <div class="card-footer">
                     <form id="paymentForm">

                        <!-- customer email -->
                        <input type="hidden" name="uemail"  value="<?php echo$user_email?>" id="email-address" required />
                        <input type="hidden" id="amount" value="<?php echo$overall_price_a?>" name="amount" required />
                                       <div class="form-submit">
                        <button type="submit" value="submit"class='pay-btn' name="pay" onclick="payWithPaystack()"> Pay </button>
                    </div>
                </form>
            
            

          
      </div>
</div>
</body>
</html>
<script type="text/javascript">
    function payWithPaystack() {

    // store email and amount a variable
    var a = document.getElementById("email-address").value;
    var b = document.getElementById("amount").value;

    event.preventDefault();
    let handler = PaystackPop.setup({
    key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    currency:'GHS',
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
  },
  callback: function(response){
      //let message = 'Payment complete! Reference: ' + response.reference;
     // alert(message);
      // window.location = 'form_proc.php?email-address='+a+'&amount='+b;
      $.ajax({
    url: '../actions/form_proc.php?email-address='+a+'&amount='+b,
    success: function (response) {
        alert(response);
        windows.location = "products.php";
      // the transaction status is in response.data.status
    }
  });
  }
});
      handler.openIframe();
  }
</script>
