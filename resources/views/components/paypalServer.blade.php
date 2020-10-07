<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<div id="paypal-button-container" class="d-flex justify-content-center"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AX4gE82P9XhJyjhlDLtDSK3wCVuEoP6F0w5QEbvSN2mG1dpnPp8SGjMkxgt657Ba-pbzc-FvVTXkVSee&vault=true" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'pill',
          color: 'gold',
          layout: 'vertical',
          label: 'subscribe'
      },
      createSubscription: function(data, actions) {
        return actions.subscription.create({
          'plan_id': 'P-9111131838727315ML5YMCTI'
        });
      },
      onApprove: function(data, actions) {
        alert('You have successfully created subscription ' + data.subscriptionID);
      }
  }).render('#paypal-button-container');
</script>
</html>