
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<img src="{%static 'images/img15.jpg' %}" class="logo" alt="Razorpay logo">
<form action="" method ="POST">
    

<input type="text" name="name" placeholder="Entername" id="name"><br><br>
<input type="text" name="amount" placeholder="Enter Amount" id="amount"><br><br>
<input type="button" name="button" value="Pay Now" onclick="MakePayment()">
</form>

<script>
    function MakePayment(){

        var name=$("#name").val();
        var amount=$("#amount").val();
        var options = {
    "key": "rzp_test_UwIguEImAmLafI", // Enter the Key ID generated from the Dashboard
    "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": name,
    "description": "QSFINANCIALS",
    "image": "https://image.shutterstock.com/image-vector/qs-q-s-silver-grey-260nw-602016065.jpgssss",
    //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
   // "Account_id":"",
    "handler": function (response){
        jQuery.ajax({
            type:"POST",
            url:"payment.php",
            data:"pay_id="+response.razorpay_payment_id+"&amount="+amount+"$name="+name,
            success:function(result){
                window.location.href="success.php"
            }


        });
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9999999999"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
    rzp1.open();
    
}
    
</script>
      
        
    

   
    
    
