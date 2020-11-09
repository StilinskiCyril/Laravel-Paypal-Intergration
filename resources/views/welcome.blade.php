<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body>
<script
    src="https://www.paypal.com/sdk/js?client-id=AeARNnpdlvkaNRUpf9_qyIxP1ebTZ5vUDvKBPkXDkfGGT-SSIKmfmmvddHHrk1_rFjzwNxVlisedp6Ms"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
</script>

<div id="paypal-button-container"></div>

<script>
    // This function displays Smart Payment Buttons on your web page.
</script>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                redirect_urls: {
                    return_url: 'http://localhost:8001/execute-payment'
                },
                purchase_units: [{
                    amount: {
                        value: '20.01'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            // return actions.order.capture().then(function(details) {
            //     // This function shows a transaction success message to your buyer.
            //     alert('Transaction completed by ' + details.payer.name.given_name);
            // });
            return actions.redirect();
        }
    }).render('#paypal-button-container');
</script>

</body>
</html>
