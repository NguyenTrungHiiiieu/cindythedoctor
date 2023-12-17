document.addEventListener('DOMContentLoaded', function() {
    const stripe = Stripe('YOUR_STRIPE_PUBLIC_KEY');
    const checkoutButton = document.getElementById('checkout-button');
    const productSelect = document.getElementById('product-select');

    checkoutButton.addEventListener('click', function() {
        fetch('create-checkout-session.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ priceId: productSelect.value }),
            })
            .then(response => response.json())
            .then(session => stripe.redirectToCheckout({ sessionId: session.id }))
            .then(result => { if (result.error) alert(result.error.message); })
            .catch(error => console.error('Error:', error));
    });
});