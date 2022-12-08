<div>
    Click the link below to verify your email
    <a class="checkout-steps-header__message-link font-family--serif link--secondary"
       title="Register"
       href="{{ env('APP_URL', '') }}/email/verify/{{$shipment->id}}"
       data-auth-required="true">Verify Email</a>
</div>
