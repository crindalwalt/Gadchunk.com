<html class="no-js" lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/Gadchunk-logo.png') }}">

    <x-layouts.links />

</head>

<body>
    @include('template.flash-message')



    {{ $slot }}



    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('custom/user.js') }}"></script>

    <!-- fraimwork - jquery include -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- custom - jquery include -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('demo_assets/js/custom.js') }}"></script>

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
