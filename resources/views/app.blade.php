<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
        
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>

<script>
    var documentClassList = document.documentElement.classList;
    documentClassList && documentClassList.remove('no-js')
</script>
<script>
    var CONVERTRI_CONSTANTS = {
        UPSELL_EXPIRES_IN: 7,
        CSS_PREFIX: 'cvt-1568371626-',
        STICKY_PREFIX: 'sticky-',
        PAGESET_IDENTIFIER: '25ca15bf-f225-11ec-aeb6-06deec350f13',
        AUTOWEBINAR: 'false',
    }
</script>
<script>
    var convertriParameters = {
        "tabletModeWidth": 1452,
        "mobilePageEnabled": !0,
        "facebookAppId": "",
        "appServer": "https:\/\/app.convertri.com",
        "assetUrlTemplate": "https:\/\/cdn.convertri.com\/{assetPath}?v=2024-04-09-07-44-55",
        "formApiServer": "https:\/\/form.convertri.com",
        "pageId": "48471e69-fe3d-11ee-b426-065481b2b00f",
        "accountId": "ec38b49e-9a26-11ea-abef-0697e5ca793e",
        "accountType": "PRO",
        "accountCurrency": "usd",
        "form": {
            "notifications": {
                "enabled": !1,
                "subject": "New submission on your form",
                "includeQueryParams": !0
            }
        },
        "cart": {
            "mode": "live",
            "productId": 0,
            "ccStatementMessage": "",
            "isOneClickUpsell": !1,
            "checkout": {
                "enabled": !1,
                "mode": "live",
                "checkout": {
                    "title": "Checkout",
                    "logo": null,
                    "skin": "fresh",
                    "orderHeading": "Your Order",
                    "shippingHeading": "Shipping",
                    "taxHeading": "Tax",
                    "callToAction": "Pay by debit or credit card",
                    "totalLabel": "Total",
                    "stepOneTitle": "Step 1 of 2",
                    "stepOneDescription": "Step 1 description",
                    "stepTwoTitle": "Step 2 of 2",
                    "stepTwoDescription": "Step 2 description",
                    "textBelowButton": "Text Below Button",
                    "storeAllowAdjustQuantity": !0,
                    "storeShowRelatedProducts": !1
                },
                "addresses": {
                    "requiredAddress": null,
                    "isPrimaryDeliveryAddress": !1,
                    "billingAddressHeading": "Billing Address",
                    "address1Label": "Street Address",
                    "address2Label": "Address Line 2",
                    "cityLabel": "City",
                    "stateLabel": "State \/ Region",
                    "countryLabel": "Country",
                    "zipCodeLabel": "ZIP Code",
                    "deliveryAddressHeading": "Delivery Address",
                    "alternateDeliveryAddressToggleLabel": "Check the box to use a different delivery address",
                    "primaryDeliveryAddressToggleLabel": "Check to use a different billing address"
                },
                "contactDetails": {
                    "heading": "Contact Details",
                    "fullNameLabel": "Name",
                    "firstNameLabel": "First Name",
                    "lastNameLabel": "Last Name",
                    "emailLabel": "Enter your best e-mail",
                    "enablePhone": !1,
                    "phoneLabel": "Phone Number",
                    "nameLabel": "Name",
                    "nameStyle": "fullname"
                },
                "paymentDetails": {
                    "heading": "Payment Details",
                    "creditCardNumberLabel": "Enter Your Credit Card Number",
                    "expiryDateLabel": "Expiry Date",
                    "cvvLabel": "Enter Your CVV"
                },
                "bumpOffers": [],
                "cartAbandonment": {
                    "targetServiceKey": null,
                    "target": null,
                    "removeProspectAfterCheckout": !1
                },
                "preCheckout": {
                    "productGroupId": null,
                    "heading": "Which one do you want?",
                    "checkoutButtonLabel": "Buy Now",
                    "cancelButtonLabel": "Cancel"
                }
            }
        },
        "isCartSetUp": !1,
        "apiSubmissionRedirectUrl": null,
        "passFormDataInRedirectUrl": !1,
        "stayOnPage": !1,
        "stripeCountryCode": "",
        "stripePublishableKey": "pk_live_SunjWL0YM63LDGlxd6cJhZMo00ICKCO1EB",
        "stripeWalletPaymentMethodsEnabled": !1,
        "paypalClientId": "",
        "navigateWithinIframe": !1,
        "radioButtonElementsOrder": [],
        "fontData": {
            "stylesheetUrls": ["https:\/\/fonts.googleapis.com\/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLibre+Baskerville%3A400%2Citalic%2C700%7CRoboto%3A100%2C100italic%2C300%2C300italic%2C400%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C300%2C300italic%2C400%2Citalic%2C700%2C700italic%2C900%2C900italic"],
            "fontFaceDeclarations": [{
                "fontFamily": "Open Sans",
                "fontStyle": "normal",
                "fontWeight": 300,
                "src": ["url(https:\/\/cdn.convertri.com\/font\/open-sans-300.eot?#iefix) format('embedded-opentype')", "url(https:\/\/cdn.convertri.com\/font\/open-sans-300.ttf) format('truetype')"]
            }, {
                "fontFamily": "Open Sans",
                "fontStyle": "normal",
                "fontWeight": 400,
                "src": ["url(https:\/\/cdn.convertri.com\/font\/open-sans-400.eot?#iefix) format('embedded-opentype')", "url(https:\/\/cdn.convertri.com\/font\/open-sans-400.ttf) format('truetype')"]
            }, {
                "fontFamily": "Open Sans",
                "fontStyle": "normal",
                "fontWeight": 600,
                "src": ["url(https:\/\/cdn.convertri.com\/font\/open-sans-600.eot?#iefix) format('embedded-opentype')", "url(https:\/\/cdn.convertri.com\/font\/open-sans-600.ttf) format('truetype')"]
            }, {
                "fontFamily": "Open Sans",
                "fontStyle": "normal",
                "fontWeight": 700,
                "src": ["url(https:\/\/cdn.convertri.com\/font\/open-sans-700.eot?#iefix) format('embedded-opentype')", "url(https:\/\/cdn.convertri.com\/font\/open-sans-700.ttf) format('truetype')"]
            }, {
                "fontFamily": "Open Sans",
                "fontStyle": "normal",
                "fontWeight": 800,
                "src": ["url(https:\/\/cdn.convertri.com\/font\/open-sans-800.eot?#iefix) format('embedded-opentype')", "url(https:\/\/cdn.convertri.com\/font\/open-sans-800.ttf) format('truetype')"]
            }, {
                "fontFamily": "Open Sans",
                "fontStyle": "italic",
                "fontWeight": 300,
                "src": ["url(https:\/\/cdn.convertri.com\/font\/open-sans-italic-300.eot?#iefix) format('embedded-opentype')", "url(https:\/\/cdn.convertri.com\/font\/open-sans-italic-300.ttf) format('truetype')"]
            }, {
                "fontFamily": "Open Sans",
                "fontStyle": "italic",
                "fontWeight": 400,
                "src": ["url(https:\/\/cdn.convertri.com\/font\/open-sans-italic-400.eot?#iefix) format('embedded-opentype')", "url(https:\/\/cdn.convertri.com\/font\/open-sans-italic-400.ttf) format('truetype')"]
            }, {
                "fontFamily": "Open Sans",
                "fontStyle": "italic",
                "fontWeight": 600,
                "src": ["url(https:\/\/cdn.convertri.com\/font\/open-sans-italic-600.eot?#iefix) format('embedded-opentype')", "url(https:\/\/cdn.convertri.com\/font\/open-sans-italic-600.ttf) format('truetype')"]
            }, {
                "fontFamily": "Open Sans",
                "fontStyle": "italic",
                "fontWeight": 700,
                "src": ["url(https:\/\/cdn.convertri.com\/font\/open-sans-italic-700.eot?#iefix) format('embedded-opentype')", "url(https:\/\/cdn.convertri.com\/font\/open-sans-italic-700.ttf) format('truetype')"]
            }, {
                "fontFamily": "Open Sans",
                "fontStyle": "italic",
                "fontWeight": 800,
                "src": ["url(https:\/\/cdn.convertri.com\/font\/open-sans-italic-800.eot?#iefix) format('embedded-opentype')", "url(https:\/\/cdn.convertri.com\/font\/open-sans-italic-800.ttf) format('truetype')"]
            }]
        },
        "featureGates": {
            "cart-2nd-release": !0,
            "stripe-wallet-payment-methods": !0,
            "stripe-wallet-payment-methods-all-modals": !0,
            "stripe-wallet-payment-methods-on-page": !0
        },
        "scriptConsent": {
            "enabled": !1,
            "heading": "Nom nom! Cookies!",
            "message": "We use cookies to personalise content and ads, to provide social media features and to analyse our traffic. We also share information about your use of our site with our social media, advertising and analytics partners. Is this okay with you?",
            "privacyPolicyUrl": "",
            "requiredForTrackerCookies": !1
        },
        "skipLegacyPaymentGateways": !0,
        "dynamicLinks": []
    };
    var warningMessages = {
        "useDefault": !0,
        "valueIsRequired": "This value is required.",
        "emailValidation": "This is not a valid email address.",
        "phoneValidation": "This is not a valid phone number."
    };
    var submitMessages = {
        "sendingForm": "Sending form...",
        "SENDING_FORM": "Sending form..."
    };
    var dataLayer = []
</script>
<script>
    var ConvertriScriptConsent = (function() {
        var CONSENT_COOKIE_NAME = 'convertriScriptConsent';
        var REJECTION_COOKIE_NAME = 'convertriScriptRejection';
        var COOKIE_EXPIRES_IN_10_YEARS = 10 * 365 * 24 * 60 * 60;
        var deferredScripts = [];
        return {
            addCode: addCode,
            areScriptsPermitted: areScriptsPermitted,
            wereScriptsRejected: wereScriptsRejected,
            consent: consent,
            reject: reject,
        };
        function addCode(scriptCode, afterNode) {
            var script = {
                code: scriptCode,
                afterNode: afterNode,
            };
            if (areScriptsPermitted()) {
                insertScript(script)
            } else {
                deferredScripts.push(script)
            }
        }
        function areScriptsPermitted() {
            if (!convertriParameters.scriptConsent.enabled) {
                return !0
            }
            return consentCookieExists()
        }
        function wereScriptsRejected() {
            if (!convertriParameters.scriptConsent.enabled) {
                return !1
            }
            return rejectionCookieExists()
        }
        function consent() {
            setConsentCookie();
            while (deferredScripts.length) {
                insertScript(deferredScripts.shift())
            }
        }
        function reject() {
            setRejectionCookie()
        }
        function insertScript(script) {
            var context = script.afterNode.parentElement;
            var beforeNode = script.afterNode.nextSibling;
            var range = document.createRange();
            range.selectNode(context);
            var fragment = range.createContextualFragment(script.code);
            context.insertBefore(fragment, beforeNode)
        }
        function setConsentCookie() {
            setCookie(CONSENT_COOKIE_NAME)
        }
        function setRejectionCookie() {
            setCookie(REJECTION_COOKIE_NAME)
        }
        function consentCookieExists() {
            return cookieExists(CONSENT_COOKIE_NAME)
        }
        function rejectionCookieExists() {
            return cookieExists(REJECTION_COOKIE_NAME)
        }
        function setCookie(name) {
            document.cookie = [name + '=true', 'max-age=' + COOKIE_EXPIRES_IN_10_YEARS, 'path=/', ].join(';')
        }
        function cookieExists(name) {
            return document.cookie.split(';').some(function(cookie) {
                return cookie.trim().startsWith(name + '=')
            })
        }
    }
    )()
</script>
<script type="module">
    try {
        const response = await fetch("https://shopify-gtm-suite.getelevar.com/configs/fe41c4563c0d7c23bc1e4a6395e5359bc531f1c7/config.json");
        const config = await response.json();
        const scriptUrl = config.script_src_custom_pages;

        if (scriptUrl) {
            const {handler} = await import(scriptUrl);
            await handler(config);
        }
    } catch (error) {
        console.error("Elevar Error:", error);
    }
</script>
<script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments)
        }
        ;
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
    }
    )(window, document, "clarity", "script", "ditkn9h35j");
</script>
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0]
          , j = d.createElement(s)
          , dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    }
    )(window, document, 'script', 'dataLayer', 'GTM-5Q6WRF3');
</script>
<!-- End Google Tag Manager -->
<script type="text/javascript" src="https://onsite.optimonk.com/script.js?account=82551" async></script>
<!-- begin Convert Experiences code-->
<script type="text/javascript" src="//cdn-4.convertexperiments.com/js/10045945-10046139.js"></script>
<!-- end Convert Experiences code -->
