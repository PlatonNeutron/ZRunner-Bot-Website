<div id="paypal-button-container" align="center"></div>

<script
		src="https://www.paypal.com/sdk/js?client-id=AfQ0QYmBUDl3D9UwQ4oX1jV_qX65ON9q5pdb_BYk4ELsoSnUVx4kEZaHJWj2qraazHk8JY0SZYwZ1TJl&currency=EUR"></script>

	<script>
		// Render the PayPal button into #paypal-button-container
		paypal.Buttons({

			// Set up the transaction
			createOrder: function (data, actions) {
				return actions.order.create({
					purchase_units: [{
						amount: {
							value: '0.01'
						},
						description: "Une sorte de test à la pizza"
					}]
				});
			},

			// Finalize the transaction
			onApprove: function (data, actions) {
				return actions.order.capture().then(function (details) {
					// Show a success message to the buyer
					alert('Transaction completed by ' + details.payer.name.given_name + '!');
					return fetch('http://127.0.0.1:8080/api/paypal/receive', {
						method: 'post',
						headers: {
							'content-type': 'application/json'
						},
						body: JSON.stringify({
							orderID: data.orderID,
							payerID: data.payerID
						})
					});
				});
			}


		}).render('#paypal-button-container');
	</script>

	<!-- https://developer.paypal.com/docs/checkout/integrate/#6-verify-the-transaction -->