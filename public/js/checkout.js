// Create a Stripe client.
var stripe = Stripe('pk_test_HBWgmEGAk3y5pUBWDN7iGI7n');

// Create an instance of Elements.
var elements = stripe.elements();

var card = elements.create('card');

stripe.createToken(card).then(function(result) {
    // Handle result.error or result.token
});
