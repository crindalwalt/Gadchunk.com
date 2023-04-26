<html class="no-js" lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <x-layouts.links />

</head>

<body class="home_supermarket">
    {{-- <div class="main-wrapper main-wrapper-3"> --}}


    {{ $slot }}



    <x-layouts.footer />

    <!-- fraimwork - jquery include -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    {{-- <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sw/eetalert2.all.min.js "></script> --}}

    <!-- animation - jquery include -->
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!-- carousel - jquery include -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!-- filtering & masonry layout - jquery include -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('assets/js/mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>

    <!-- custom - jquery include -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('demo_assets/js/custom.js') }}"></script>
    <script src="{{ asset('custom/user.js') }}"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function() {
            /*------------------------------------------
                --------------------------------------------
               Stripe Payment Code
                --------------------------------------------
                --------------------------------------------*/

            // ====================== Cash On Delivery  ==============================
            $(document).on("click", '.check_payment_method', function() {

                val = $(this).data('value');

                // ============ IF Stripe ===================
                if (val == 'stripe') {
                    var $form = $(".require-validation");
                    $('form.require-validation').bind('submit', function(e) {
                        var $form = $(".require-validation"),
                            inputSelector = ['input[type=email]', 'input[type=password]',
                                'input[type=text]', 'input[type=file]',
                                'textarea'
                            ].join(', '),
                            $inputs = $form.find('.required').find(inputSelector),
                            $errorMessage = $form.find('div.error'),
                            valid = true;
                        $errorMessage.addClass('hide');
                        $('.has-error').removeClass('has-error');
                        $inputs.each(function(i, el) {
                            var $input = $(el);
                            if ($input.val() === '') {
                                $input.parent().addClass('has-error');
                                $errorMessage.removeClass('hide');
                                e.preventDefault();

                            }
                        });
                        if (!$form.data('cc-on-file')) {
                            e.preventDefault();
                            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                            Stripe.createToken({
                                number: $('.card-number').val(),
                                cvc: $('.card-cvc').val(),
                                exp_month: $('.card-expiry-month').val(),
                                exp_year: $('.card-expiry-year').val()
                            }, stripeResponseHandler);
                        }

                    });
                    /*------------------------------------------
                      --------------------------------------------
                        Stripe Response Handler
                        --------------------------------------------
                        --------------------------------------------*/
                    function stripeResponseHandler(status, response) {
                        if (response.error) {
                            $('.error')
                                .removeClass('hide')
                                .find('.alert')
                                .text(response.error.message);
                        } else {
                            /* token contains id, last4, and card type */
                            var token = response['id'];
                            $form.find('input[type=text]').empty();
                            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                            $form.get(0).submit();
                        }
                    }
                    $("#payment_method").val(val);
                } else {
                    $("#payment_method").val(val);
                }

            })
        });
    </script>
    {{-- </div> --}}
</body>

</html>
