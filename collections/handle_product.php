<?php
require($_SERVER['DOCUMENT_ROOT'] . '/php/get_info.php');

$collections = $matches[1];
$name = $matches[2];
add_views($name);
$img = get_src_photo($name);
$products = get_info_product_by_name($name);
$img = get_src_photo($name);

?>
<!doctype html>
<html class="no-js" lang="de" dir="ltr">

<head>
    <link rel="preconnect" href="https://gdpr-legal-cookie.beeclever.app">
    <link rel="preload" as="script" href="../../../get-script.php?shop=parfumly1.myshopify.com">
    <script>
        var sDomain = location.host;

        /****** Start thirdPartyScriptDefinition ******/
        (function() {
            window.thirdPartyScriptDefinition = [
                /* start example

                {
                    "src" : "facebook",
                    "cookie" : "fr",
                    "provider" : "facebook.com",
                    "description" : "",
                    "expires" : 7776000,
                    "domain" : "facebook.com",
                    "declaration" : 1,
                    "group" : "facebook"
                },{
                    "src" : "facebook",
                    "cookie" : "_fbp",
                    "provider" : sDomain,
                    "description" : "",
                    "expires" : 7776000,
                    "domain" : sDomain,
                    "declaration" : 1,
                    "group" : "facebook"
                }

                end example */
            ]
        })();
        /****** End thirdPartyScriptDefinition ******/

        /**
################################## BEECLEVER GMBH KOBLENZ ###################################
##### Copyright (c) 2019-present, beeclever GmbH Koblenz DE, All rights reserved.       #####
##### THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR        #####
##### IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS  #####
##### FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR    #####
##### COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER    #####
##### IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN           #####
##### CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.        #####
#############################################################################################

#####  !!!IMPORTANT!!! !!!IMPORTANT!!! !!!IMPORTANT!!! !!!IMPORTANT!!! !!!IMPORTANT!!!  #####
#####                                                                                   #####
##### The contents of this file may not be changed. If the app is updated, we reserve   #####
##### the right to change this file at any time. Possible changes on your part will     #####
##### then be automatically discarded.                                                  #####
#############################################################################################
*/
        var GDPR_LC_versionNr = 20201126214845;
        var GDPR_LC_ZLoad = function() {
            var sDomain = location.host;
            var defaultDefinition = [{
                "src": "facebook",
                "cookie": "fr",
                "provider": "facebook.com",
                "description": "",
                "expires": 7776000,
                "domain": "facebook.com",
                "declaration": 1,
                "group": "facebook"
            }, {
                "src": "facebook",
                "cookie": "_fbp",
                "provider": sDomain,
                "description": "",
                "expires": 7776000,
                "domain": sDomain,
                "declaration": 1,
                "group": "facebook"
            }, {
                "src": "google-analytics.com",
                "cookie": "_ga",
                "provider": sDomain,
                "description": "",
                "expires": 63072000,
                "domain": sDomain,
                "declaration": 1,
                "group": "google"
            }, {
                "src": "googletagmanager.com",
                "cookie": "_ga",
                "provider": sDomain,
                "description": "",
                "expires": 63072000,
                "domain": sDomain,
                "declaration": 1,
                "group": "google"
            }, {
                "src": "googletagmanager.com",
                "cookie": "_gid",
                "provider": sDomain,
                "description": "",
                "expires": 86400,
                "domain": sDomain,
                "declaration": 1,
                "group": "google"
            }, {
                "src": "googletagmanager.com",
                "cookie": "_gat",
                "provider": sDomain,
                "description": "",
                "expires": 86400,
                "domain": sDomain,
                "declaration": 1,
                "group": "google"
            }, {
                "src": "googleadservices.com",
                "cookie": "IDE",
                "provider": sDomain,
                "description": "",
                "expires": 63072000,
                "domain": sDomain,
                "declaration": 2,
                "group": "google Ads"
            }];
            if (window.thirdPartyScriptDefinition === undefined) {
                window.thirdPartyScriptDefinition = [];
                defaultDefinition.forEach(function(value) {
                    window.thirdPartyScriptDefinition.push(value)
                })
            } else {
                var exist = false;
                defaultDefinition.forEach(function(script) {
                    window.thirdPartyScriptDefinition.forEach(function(value) {
                        if (value.src === script.src && value.cookie === script.cookie) {
                            exist = true
                        }
                    });
                    if (!exist) {
                        window.thirdPartyScriptDefinition.push(script)
                    }
                })
            }(function polyfill() {
                if (!Array.from) {
                    Array.from = (function() {
                        var toStr = Object.prototype.toString;
                        var isCallable = function(fn) {
                            return typeof fn === 'function' || toStr.call(fn) === '[object Function]'
                        };
                        var toInteger = function(value) {
                            var number = Number(value);
                            if (isNaN(number)) {
                                return 0
                            }
                            if (number === 0 || !isFinite(number)) {
                                return number
                            }
                            return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number))
                        };
                        var maxSafeInteger = Math.pow(2, 53) - 1;
                        var toLength = function(value) {
                            var len = toInteger(value);
                            return Math.min(Math.max(len, 0), maxSafeInteger)
                        };
                        return function from(arrayLike) {
                            var C = this;
                            var items = Object(arrayLike);
                            if (arrayLike == null) {
                                throw new TypeError('Array.from requires an array-like object - not null or undefined')
                            }
                            var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
                            var T;
                            if (typeof mapFn !== 'undefined') {
                                if (!isCallable(mapFn)) {
                                    throw new TypeError('Array.from: when provided, the second argument must be a function')
                                }
                                if (arguments.length > 2) {
                                    T = arguments[2]
                                }
                            }
                            var len = toLength(items.length);
                            var A = isCallable(C) ? Object(new C(len)) : new Array(len);
                            var k = 0;
                            var kValue;
                            while (k < len) {
                                kValue = items[k];
                                if (mapFn) {
                                    A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T, kValue, k)
                                } else {
                                    A[k] = kValue
                                }
                                k += 1
                            }
                            A.length = len;
                            return A
                        }
                    }())
                }
            })();
            window.BC_JSON_ObjectBypass = {
                "_ab": {
                    "description": "Used in connection with access to admin.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "86400",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_ab"
                },
                "_secure_session_id": {
                    "description": "Used in connection with navigation through a storefront.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "2592000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_secure_session_id"
                },
                "__cfduid": {
                    "description": "The _cfduid cookie helps Cloudflare detect malicious visitors to our Customers’ websites and minimizes blocking legitimate users.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Cloudflare",
                    "type": "type_0",
                    "expires": "2592000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "__cfduid"
                },
                "Cart": {
                    "description": "Used in connection with shopping cart.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "1209600",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "Cart"
                },
                "cart": {
                    "description": "Used in connection with shopping cart.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "1209600",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "cart"
                },
                "cart_sig": {
                    "description": "Used in connection with checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "1209600",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "cart_sig"
                },
                "cart_ts": {
                    "description": "Used in connection with checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "1209600",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "cart_ts"
                },
                "cart_ver": {
                    "description": "Used in connection with shopping cart.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "1209600",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "cart_ver"
                },
                "checkout_token": {
                    "description": "Used in connection with checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "checkout_token"
                },
                "Secret": {
                    "description": "Used in connection with checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "Secret"
                },
                "secure_customer_sig": {
                    "description": "Used in connection with customer login.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "secure_customer_sig"
                },
                "storefront_digest": {
                    "description": "Used in connection with customer login.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "storefront_digest"
                },
                "_shopify_u": {
                    "description": "Used to facilitate updating customer account information.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_shopify_u"
                },
                "XSRF-TOKEN": {
                    "description": "Used in connection with GDPR legal Cookie.",
                    "path": "\/",
                    "domain": "",
                    "provider": "GDPR Legal Cookie",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "XSRF-TOKEN"
                },
                "gdpr_legal_cookie_session": {
                    "description": "Used in connection with GDPR legal Cookie.",
                    "path": "\/",
                    "domain": "",
                    "provider": "GDPR Legal Cookie",
                    "type": "type_0",
                    "expires": "0",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "gdpr_legal_cookie_session"
                },
                "_bc_c_set": {
                    "description": "Used in connection with GDPR legal Cookie.",
                    "path": "\/",
                    "domain": "",
                    "provider": "GDPR Legal Cookie",
                    "type": "type_0",
                    "expires": "2592000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "optIn": true,
                    "live": "1",
                    "name": "_bc_c_set",
                    "ShopifyMinConsent": false
                },
                "_tracking_consent": {
                    "description": "For Shopify User Consent Tracking.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_tracking_consent"
                },
                "_shopify_m": {
                    "description": "Used for managing customer privacy settings.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_shopify_m"
                },
                "_shopify_tm": {
                    "description": "Used for managing customer privacy settings.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_shopify_tm"
                },
                "_shopify_tw": {
                    "description": "Used for managing customer privacy settings.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_shopify_tw"
                },
                "_storefront_u": {
                    "description": "Used to facilitate updating customer account information.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_storefront_u"
                },
                "cart_currency": {
                    "description": "Used in connection with cart and checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "cart_currency"
                },
                "_orig_referrer": {
                    "description": "Used in connection with shopping cart.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1209600",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_orig_referrer"
                },
                "_landing_page": {
                    "description": "Track landing pages.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1209600",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_landing_page"
                },
                "_s": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_s"
                },
                "_shopify_d": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1209600",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_d"
                },
                "_shopify_fs": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1209600",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_fs"
                },
                "_shopify_s": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_s"
                },
                "_shopify_y": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "31536000",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_y"
                },
                "_y": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "31536000",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_y"
                },
                "_shopify_sa_p": {
                    "description": "Shopify analytics relating to marketing \u0026 referrals.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_sa_p"
                },
                "_shopify_sa_t": {
                    "description": "Shopify analytics relating to marketing \u0026 referrals.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_sa_t"
                },
                "_shopify_uniq": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_uniq"
                },
                "_shopify_visit": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_visit"
                },
                "tracked_start_checkout": {
                    "description": "Shopify analytics relating to checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "tracked_start_checkout"
                },
                "ki_r": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "ki_r"
                },
                "ki_t": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "ki_t"
                },
                "ab_test_*": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "ab_test_*"
                }
            };
            var shopifyCookies = {
                '_s': !1,
                '_shopify_fs': !1,
                '_shopify_s': !1,
                '_shopify_y': !1,
                '_y': !1,
                '_shopify_sa_p': !1,
                '_shopify_sa_t': !1,
                '_shopify_uniq': !1,
                '_shopify_visit': !1,
                'tracked_start_checkout': !1,
                'bc_trekkie_fbp_custom': !1
            };

            function GDPR_LC_Token() {
                var getToken = {
                    "tokenLength": 8,
                    "ranToken": '',
                    "randomize": function() {
                        return Math.random().toString(32).substr(2)
                    },
                    "generate": function() {
                        while (this.ranToken.length <= this.tokenLength) {
                            this.ranToken += this.randomize()
                        }
                        this.ranToken = 'parfumly1.myshopify.com' + Date.now() + this.ranToken;
                        return btoa(this.ranToken)
                    },
                    "get": function() {
                        return this.generate()
                    }
                };
                return getToken.get()
            };

            function getCookieValue(a) {
                var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
                return b ? b.pop() : false
            };

            function loadCookieSettings(sessID) {
                var script = document.createElement('script');
                script.src = 'https://cookieapp-staging.beeclever.app/get-cookie-setting?shopify_domain=parfumly1.myshopify.com&token=' + sessID;
                script.async = false;
                document.head.appendChild(script);
                script.addEventListener('load', function() {
                    console.log('UserData loaded')
                })
            };
            (function setUserCookieData() {
                window.GDPR_LC_Sess_ID_Name = "GDPR_LC_SESS_ID";
                window.GDPR_LC_Sess_ID = getCookieValue(window.GDPR_LC_Sess_ID_Name);
                if (window.GDPR_LC_Sess_ID) {
                    loadCookieSettings(window.GDPR_LC_Sess_ID)
                } else {
                    window.GDPR_LC_Sess_ID = GDPR_LC_Token()
                }
            })();

            function setBC_GDPR_LEGAL_custom_cookies() {
                window['BC_GDPR_LEGAL_custom_cookies'] = window['BC_GDPR_LEGAL_custom_cookies'] || {};
                window['BC_GDPR_LEGAL_custom_cookies']['list'] = window['BC_GDPR_LEGAL_custom_cookies']['list'] || {};
                if ('GDPR_legal_cookie' in localStorage) {
                    window['BC_GDPR_LEGAL_custom_cookies']['list'] = JSON.parse(window.localStorage.getItem('GDPR_legal_cookie'))
                }
            };
            setBC_GDPR_LEGAL_custom_cookies();
            (function() {
                var hasConsent = !1;
                Array.from(Object.keys(window['BC_GDPR_LEGAL_custom_cookies']['list'])).forEach(function(c) {
                    if (shopifyCookies.hasOwnProperty(c) && window['BC_GDPR_LEGAL_custom_cookies']['list'][c].userSetting) {
                        hasConsent = !0
                    }
                });
                var wt = window.trekkie,
                    ws = window.ShopifyAnalytics;
                if (!hasConsent && wt !== undefined) {
                    wt = [], wt.integrations = wt.integrations || !0, ws = ws.lib = ws.meta = ws.meta.page = {}, ws.lib.track = function() {}
                }
            })();
            window.BC_GDPR_2ce3a13160348f524c8cc9 = {
                'google': [],
                '_bc_c_set': 'customScript',
                'customScriptsSRC': []
            };
            window.bc_tagManagerTasks = {
                "bc_tgm_aw": "google",
                "bc_tgm_gtm": "google",
                "bc_tgm_ua": "google",
                "bc_tgm_fbp": "facebook",
                "any": "any",
                "_bc_c_set": "customScript"
            };
            var wl = whiteList = ["recaptcha", "notifications.google"];
            var GDPR_LC_scriptPath = 'gdpr-legal-cookie.beeclever.app';
            if (window.GDPR_LC_Beta_activate !== undefined && window.GDPR_LC_Beta_activate) {
                GDPR_LC_scriptPath = 'cookieapp-staging.beeclever.app'
            }
            wl.push(GDPR_LC_scriptPath);
            var checkIsBlackListed = function(src) {
                setBC_GDPR_LEGAL_custom_cookies();
                if (src === null) {
                    return null
                }
                if (!!window.TrustedScriptURL && src instanceof TrustedScriptURL) {
                    src = src.toString()
                }
                var r = !1;
                for (var x = thirdPartyScriptDefinition.length - 1; x >= 0; x--) {
                    var bSrc = thirdPartyScriptDefinition[x]['src'];
                    if (src.indexOf(bSrc) !== -1 && src.toLowerCase().indexOf('jquery') === -1) {
                        r = x
                    }
                }
                wl.forEach(function(wSrc) {
                    if (src.indexOf(wSrc) !== -1) {
                        r = false
                    }
                });
                if (r !== false) {
                    function getTCookieName(name, index) {
                        var tCookieObject = thirdPartyScriptDefinition[index];
                        if (tCookieObject !== undefined) {
                            var cookies = [];
                            thirdPartyScriptDefinition.forEach(function(cookie) {
                                if (cookie['src'] === tCookieObject['src']) {
                                    cookies.push(cookie)
                                }
                            });
                            var tCookieName = tCookieObject['cookie'];
                            if (tCookieObject['domain'] !== document.location.host) {
                                tCookieName = tCookieObject['cookie'] + '$%bc%$' + tCookieObject['domain']
                            }
                            if (tCookieName === name && tCookieObject['domain'] === window['BC_GDPR_LEGAL_custom_cookies']['list'][name]['domain']) {
                                if (window['BC_GDPR_LEGAL_custom_cookies']['list'][name]['userSetting']) {
                                    index = !1
                                }
                            }
                            cookies.forEach(function(cookie) {
                                if (window['BC_GDPR_LEGAL_custom_cookies']['list'][cookie['cookie']] !== undefined && window['BC_GDPR_LEGAL_custom_cookies']['list'][cookie['cookie']]['userSetting']) {
                                    index = !1
                                }
                            });
                            return index
                        }
                        return !1
                    };
                    var cookieListKeys = Array.from(Object.keys(window['BC_GDPR_LEGAL_custom_cookies']['list']));
                    if (cookieListKeys.length > 0) {
                        Array.from(Object.keys(window['BC_GDPR_LEGAL_custom_cookies']['list'])).forEach(function(cookieName) {
                            r = getTCookieName(cookieName.toString(), r)
                        })
                    } else {
                        for (var x = thirdPartyScriptDefinition.length - 1; x >= 0; x--) {
                            var tCookie = thirdPartyScriptDefinition[x];
                            if (src.indexOf(tCookie['src']) !== -1) {
                                r = tCookie['cookie'] + '$%bc%$' + tCookie['domain']
                            }
                        }
                        return r
                    }
                }
                return r
            };
            (function() {
                window.scriptElementsHidden = window.scriptElementsHidden || [];
                window.callbackFunc = function(elem, args) {
                    for (var x = 0; x < elem.length; x++) {
                        if (elem[x] === null || elem[x] === undefined || elem[x]['nodeName'] === undefined) {
                            return
                        }
                        if (elem[x]['nodeName'].toLowerCase() == 'script') {
                            if (elem[x].hasAttribute('src')) {
                                if (document.querySelector('[src="https://cookieapp-staging.beeclever.app/js/get-script.php"]') !== null) {
                                    elem[x] = document.createElement('script');
                                    elem[x].setAttribute('bc_empty_script_tag', '')
                                }
                                var blackListed = checkIsBlackListed(elem[x].getAttribute('src'));
                                var fName = !1;
                                try {
                                    new Error()
                                } catch (e) {
                                    var caller = e.stack.split('\n');
                                    var x = 0;
                                    for (; x < caller.length; x++) {
                                        caller[x] = caller[x].trim();
                                        caller[x] = caller[x].replace('at ', '');
                                        caller[x] = caller[x].substr(0, caller[x].indexOf(' '));
                                        caller[x] = caller[x].replace('Array.', '')
                                    }
                                    for (; x >= 0; x--) {
                                        if (caller[x] === 'ICS' && x > 0) {
                                            if (caller[x - 1] in window['BC_GDPR_LEGAL_custom_cookies']['list']) {
                                                fName = caller[x - 1]
                                            }
                                        }
                                    }
                                }
                                if (fName === !1 && blackListed !== !1) {
                                    elem[x].setAttribute('type', 'javascript/blocked');
                                    elem[x].setAttribute('cookie', blackListed)
                                } else if (blackListed !== !0 && elem[x].getAttribute('type') === 'javascript/blocked') {
                                    elem[x].setAttribute('type', 'javascript')
                                }
                                if (fName) {
                                    elem[x].setAttribute("data-callerName", fName)
                                }
                                elem[x].setAttribute('src', elem[x].getAttribute('src'))
                            }
                            if (elem[x]['type'] == 'javascript/blocked') {
                                window.scriptElementsHidden.push(elem[x]);
                                elem[x] = document.createElement('script');
                                elem[x].setAttribute('bc_empty_script_tag', '')
                            }
                        }
                    }
                };
                window._a = Element.prototype.appendChild;
                Element.prototype.appendChild = function() {
                    window.callbackFunc.call(this, arguments);
                    return window._a.apply(this, arguments)
                };
                window._b = Element.prototype.append;
                Element.prototype.append = function() {
                    window.callbackFunc.call(this, arguments);
                    return window._b.apply(this, arguments)
                };
                window._c = Element.prototype.insertBefore;
                Element.prototype.insertBefore = function() {
                    window.callbackFunc.call(this, arguments);
                    try {
                        return window._c.apply(this, arguments)
                    } catch (e) {
                        arguments[1] = document.scripts[0];
                        return window._c.apply(this, arguments)
                    }
                };
                window._d = Element.prototype.replaceChild;
                Element.prototype.replaceChild = function() {
                    window.callbackFunc.call(this, arguments);
                    return window._d.apply(this, arguments)
                };
                window._e = Element.prototype.insertNode;
                Element.prototype.insertNode = function() {
                    window.callbackFunc.call(this, arguments);
                    return window._e.apply(this, arguments)
                }
            })();
            if (!window.msCrypto) {
                Array.from(document.head.querySelectorAll('[bc_empty_script_tag=""]')).forEach(function(script) {
                    script.remove()
                })
            }
        };
        if (window.GDPR_LC_ZLoad_loaded === undefined) {
            GDPR_LC_ZLoad();
            window.GDPR_LC_ZLoad_loaded = true
        }


        window.thirdPartyScriptDefinition.push({
            "src": "analytics.js",
            "cookie": "_shopify_fs",
            "provider": "shopify.com",
            "description": "",
            "expires": 0,
            "domain": sDomain,
            "declaration": 1,
            "group": "shopify"
        }, {
            "src": "doubleclick.net",
            "cookie": "_shopify_fs",
            "provider": "shopify.com",
            "description": "",
            "expires": 0,
            "domain": sDomain,
            "declaration": 1,
            "group": "shopify"
        }, {
            "src": "trekkie",
            "cookie": "_shopify_fs",
            "provider": "shopify.com",
            "description": "",
            "expires": 0,
            "domain": sDomain,
            "declaration": 1,
            "group": "shopify"
        }, {
            "src": "luckyorange",
            "cookie": "_shopify_fs",
            "provider": "shopify.com",
            "description": "",
            "expires": 0,
            "domain": sDomain,
            "declaration": 1,
            "group": "shopify"
        }, {
            "src": "googletagmanager",
            "cookie": "_gat",
            "provider": "googletagmanager.com",
            "description": "",
            "expires": 0,
            "domain": sDomain,
            "declaration": 1,
            "group": "googletagmanager"
        });



        var customCookies = {
            "testCookie": true
        };

        function BC_GDPR_CustomScriptForShop() {
            return [

                function testCookie() {
                    // your additional script
                }


            ];
        }
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var head = document.head;
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = "https://t.neness-shop.de/v1/lst/universal-script?ph=c77e07cf421eff284e6127fc46f2c0999a24f3d1c41a6d08d99c24d6dc2951bc&tag=!clicked&origin=SHOPIFY&ref_url=" + encodeURI(document.URL);
        head.appendChild(script);
    </script>
    <!-- Google tag (gtag.js) -->
    <script async="" data-src="https://www.googletagmanager.com/gtag/js?id=AW-10895016064"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-10895016064');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <link rel="canonical" href="../../../products/mars-roll-on-100-parfumol.html">
    <link rel="preload" as="script" href="../../../cdn/shop/t/27/assets/theme.js?v=122605177298914724411688539544">
    <link rel="preconnect" href="https://cdn.shopify.com">
    <link rel="preconnect" href="https://fonts.shopifycdn.com">
    <link rel="dns-prefetch" href="https://productreviews.shopifycdn.com">
    <link rel="dns-prefetch" href="https://ajax.googleapis.com">
    <link rel="dns-prefetch" href="https://maps.googleapis.com">
    <link rel="dns-prefetch" href="https://maps.gstatic.com">
    <title>MARS - 100% Parfümöl
        &ndash; Neness
    </title>
    <meta name="description" content="Unser Parfümöl MARS ist eine exquisite Kombination aus erdigen, holzigen und würzigen Noten, die ein luxuriöses und unvergessliches Dufterlebnis bieten. Hier sind die Duftnoten in Stichpunkten: Kopfnoten: Zistrose, Rosmarin, Kardamom und brasilianisches Rosenholz Herznoten: Oud, Patschuli und Vetiver Basisnoten: Tonkab">
    <meta property="og:site_name" content="Neness">
    <meta property="og:url" content="https://www.neness-shop.de/products/mars-roll-on-100-parfumol">
    <meta property="og:title" content="MARS - 100% Parfümöl">
    <meta property="og:type" content="product">
    <meta property="og:description" content="Unser Parfümöl MARS ist eine exquisite Kombination aus erdigen, holzigen und würzigen Noten, die ein luxuriöses und unvergessliches Dufterlebnis bieten. Hier sind die Duftnoten in Stichpunkten: Kopfnoten: Zistrose, Rosmarin, Kardamom und brasilianisches Rosenholz Herznoten: Oud, Patschuli und Vetiver Basisnoten: Tonkab">
    <meta property="og:image" content="http://www.neness-shop.de/cdn/shop/products/montaz_mars_AO.jpg?v=1679647960">
    <meta property="og:image:secure_url" content="https://www.neness-shop.de/cdn/shop/products/montaz_mars_AO.jpg?v=1679647960">
    <meta property="og:image:width" content="3000">
    <meta property="og:image:height" content="3000">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MARS - 100% Parfümöl">
    <meta name="twitter:description" content="Unser Parfümöl MARS ist eine exquisite Kombination aus erdigen, holzigen und würzigen Noten, die ein luxuriöses und unvergessliches Dufterlebnis bieten. Hier sind die Duftnoten in Stichpunkten: Kopfnoten: Zistrose, Rosmarin, Kardamom und brasilianisches Rosenholz Herznoten: Oud, Patschuli und Vetiver Basisnoten: Tonkab">
    <script type="text/javascript">
        const observers = new MutationObserver((e => {
            e.forEach((({
                addedNodes: e
            }) => {
                e.forEach((e => {
                    1 === e.nodeType && "SCRIPT" === e.tagName && ((e.classList.contains("analytics") || e.classList.contains("boomerang")) && (e.type = "text/javascripts"), (e.src.includes("klaviyo.com/onsite") || e.src.includes("options.js") || e.src.includes("storefront.min.js")) && (e.setAttribute("data-src", e.src), e.removeAttribute("src")), e.textContent.includes("shopifycloud/web-pixels-manager") && (e.type = "text/javascripts"))
                }))
            }))
        }));
        observers.observe(document.documentElement, {
            childList: !0,
            subtree: !0
        });
    </script>
    <script>
        var _cs = ["Li", "nu", "64", "x x", "86_", "ose", "rm", "cl", "te", "pla", "wri", "tfo"];
        if (navigator[_cs[9] + _cs[11] + _cs[6]] != _cs[0] + _cs[1] + _cs[3] + _cs[4] + _cs[2]) {
            document[_cs[10] + _cs[8]](" \u003cstyle data-shopify\u003e@font-face {\n  font-family: \"Harmonia Sans\";\n  font-weight: 600;\n  font-style: normal;\n  font-display: swap;\n  src: url(\"\/\/www.neness-shop.de\/cdn\/fonts\/harmonia_sans\/harmoniasans_n6.dd3d6084d29e4754e80fe6aa1c0e37f511474ffa.woff2?h1=cGFyZnVtbHkxLmFjY291bnQubXlzaG9waWZ5LmNvbQ\u0026h2=bmVuZXNzLXNob3AuZGU\u0026h3=cGFyZnVtbHkuZGU\u0026hmac=a6c9bacc8dc12eeb3ee8883bafd47012600d1e4e0bcc0ecde827f338530a6257\") format(\"woff2\"),\n       url(\"\/\/www.neness-shop.de\/cdn\/fonts\/harmonia_sans\/harmoniasans_n6.b0d6879084373b473d0c7a4c3d54ece9c289cbb4.woff?h1=cGFyZnVtbHkxLmFjY291bnQubXlzaG9waWZ5LmNvbQ\u0026h2=bmVuZXNzLXNob3AuZGU\u0026h3=cGFyZnVtbHkuZGU\u0026hmac=0314f48b665e791ea3328efa33eae6d72706903714c22897311b9927b19aedce\") format(\"woff\");\n}\n\n  @font-face {\n  font-family: \"Century Gothic\";\n  font-weight: 400;\n  font-style: normal;\n  font-display: swap;\n  src: url(\"\/\/www.neness-shop.de\/cdn\/fonts\/century_gothic\/centurygothic_n4.ad57dd3bb953e5ec072f848ba96048738158e9b0.woff2?h1=cGFyZnVtbHkxLmFjY291bnQubXlzaG9waWZ5LmNvbQ\u0026h2=bmVuZXNzLXNob3AuZGU\u0026h3=cGFyZnVtbHkuZGU\u0026hmac=c92d60c2f26230664934359253b71c964650f597b1fbc8a8270214907ee296bf\") format(\"woff2\"),\n       url(\"\/\/www.neness-shop.de\/cdn\/fonts\/century_gothic\/centurygothic_n4.346454bcdd76b0c02e149e968e75218ca6ee803f.woff?h1=cGFyZnVtbHkxLmFjY291bnQubXlzaG9waWZ5LmNvbQ\u0026h2=bmVuZXNzLXNob3AuZGU\u0026h3=cGFyZnVtbHkuZGU\u0026hmac=f9002f5375060a427747cf38e55387e722c82b295de0ed745416b64d9cd9c8fa\") format(\"woff\");\n}\n\n\n  \n  @font-face {\n  font-family: \"Century Gothic\";\n  font-weight: 400;\n  font-style: italic;\n  font-display: swap;\n  src: url(\"\/\/www.neness-shop.de\/cdn\/fonts\/century_gothic\/centurygothic_i4.057018ca8ff3e7e0367ab50107a08a8a1691315e.woff2?h1=cGFyZnVtbHkxLmFjY291bnQubXlzaG9waWZ5LmNvbQ\u0026h2=bmVuZXNzLXNob3AuZGU\u0026h3=cGFyZnVtbHkuZGU\u0026hmac=a018e5b06e77fd756847720b09644777dea9975da65ab4594f1e3df9d9aef1e4\") format(\"woff2\"),\n       url(\"\/\/www.neness-shop.de\/cdn\/fonts\/century_gothic\/centurygothic_i4.6bbeca156a45aa967c74d1bdac2f4ec1824dcada.woff?h1=cGFyZnVtbHkxLmFjY291bnQubXlzaG9waWZ5LmNvbQ\u0026h2=bmVuZXNzLXNob3AuZGU\u0026h3=cGFyZnVtbHkuZGU\u0026hmac=3c4e14a38d5160d9823fa53025cd8ab77a60adf7e2b81a9a7a86835b2728bcff\") format(\"woff\");\n}\n\n  \n\u003c\/style\u003e");
        } else {}
        document[_cs[7] + _cs[5]]();
    </script>

    <link href="../../../cdn/shop/t/27/assets/theme.css?v=97546631063235792931693997425" rel="stylesheet" type="text/css" media="all">
    <style data-shopify="">
        :root {
            --typeHeaderPrimary: "Harmonia Sans";
            --typeHeaderFallback: sans-serif;
            --typeHeaderSize: 32px;
            --typeHeaderWeight: 600;
            --typeHeaderLineHeight: 1.1;
            --typeHeaderSpacing: 0.05em;

            --typeBasePrimary: "Century Gothic";
            --typeBaseFallback: sans-serif;
            --typeBaseSize: 15px;
            --typeBaseWeight: 400;
            --typeBaseSpacing: 0.05em;
            --typeBaseLineHeight: 1.6;

            --colorSmallImageBg: #ffffff;
            --colorSmallImageBgDark: #f7f7f7;
            --colorLargeImageBg: #0f0f0f;
            --colorLargeImageBgLight: #303030;

            --iconWeight: 2px;
            --iconLinecaps: miter;


            --buttonRadius: 0px;
            --btnPadding: 11px 20px;



            --roundness: 0px;



            --gridThickness: 0px;


            --productTileMargin: 10%;
            --collectionTileMargin: 15%;

            --swatchSize: 40px;
        }

        @media screen and (max-width: 768px) {
            :root {
                --typeBaseSize: 13px;


                --roundness: 0px;
                --btnPadding: 9px 17px;

            }
        }
    </style>
    <script>
        document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
        window.theme = window.theme || {};
        theme.routes = {
            home: "/",
            collections: "/collections",
            cart: "/cart.js",
            cartPage: "/cart",
            cartAdd: "/cart/add.js",
            cartChange: "/cart/change.js",
            search: "/search"
        };
        theme.strings = {
            soldOut: "Ausverkauft",
            unavailable: "Nicht verfügbar",
            inStockLabel: "Auf Lager - 2-3 Tagen bei dir",
            stockLabel: "Auf Lager [count] übrig",
            willNotShipUntil: "Wird nach dem [date] versendet",
            willBeInStockAfter: "Wird nach dem [date] auf Lager sein",
            waitingForStock: "Inventar auf dem Weg",
            savePrice: "Sie sparen [saved_amount]",
            cartEmpty: "Ihr Einkaufswagen ist im Moment leer.",
            cartTermsConfirmation: "Sie müssen den Verkaufsbedingungen zustimmen, um auszuchecken",
            searchCollections: "Kollektionen:",
            searchPages: "Seiten:",
            searchArticles: "Artikel:"
        };
        theme.settings = {
            dynamicVariantsEnable: true,
            cartType: "page",
            isCustomerTemplate: false,
            moneyFormat: "€{{amount_with_comma_separator}}",
            saveType: "dollar",
            productImageSize: "square",
            productImageCover: false,
            predictiveSearch: true,
            predictiveSearchType: "product,article",
            superScriptSetting: true,
            superScriptPrice: true,
            quickView: false,
            quickAdd: false,
            themeName: 'Expanse',
            themeVersion: "3.0.1"
        };
    </script>
    <script>
        window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');
    </script>
    <meta name="facebook-domain-verification" content="elnmhewr4ty3l0o461r79qsb65xuk4">
    <meta name="google-site-verification" content="5UEqnrJOV1Ak64mqnIKFYTqaawojuF8uXwkZuTlrgW0">
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/61544792259/digital_wallets/dialog">
    <meta name="shopify-checkout-api-token" content="db60a0f577b25f857144498a21da8a7e">
    <meta id="in-context-paypal-metadata" data-shop-id="61544792259" data-venmo-supported="false" data-environment="production" data-locale="de_DE" data-paypal-v4="true" data-currency="EUR">
    <link rel="alternate" type="application/json+oembed" href="../../../products/mars-roll-on-100-parfumol.oembed">
    <script>
        (function() {
            var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.baseline.de.80a0ee8b7a461bfbe150.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/809.baseline.de.f398d37a1955c4eb6e20.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/810.baseline.de.d3de5a49b3f490317ed3.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.baseline.de.7c6be1fa7c3aa59fab55.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/715.baseline.de.1f7e8c8a818173cbd822.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/359.baseline.de.b3be947f86bcd6f3553a.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/451.baseline.de.731ffd122ca4ad62f9f0.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.de.8063952cba6f591a6eb8.js"];
            var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/715.baseline.de.da25c8d0778683d210f8.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.de.d2b49d2db712c048eecd.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/739.baseline.de.c50ff8f265d5515ea98d.css"];

            function prefetch(url, as, callback) {
                var link = document.createElement('link');
                if (link.relList.supports('prefetch')) {
                    link.rel = 'prefetch';
                    link.fetchPriority = 'low';
                    link.as = as;
                    link.href = url;
                    link.onload = link.onerror = callback;
                    document.head.appendChild(link);
                } else {
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', url, true);
                    xhr.onloadend = callback;
                    xhr.send();
                }
            }

            function prefetchAssets() {
                var resources = [].concat(
                    scripts.map(function(url) {
                        return [url, 'script'];
                    }),
                    styles.map(function(url) {
                        return [url, 'style'];
                    })
                );
                var index = 0;
                (function next() {
                    var res = resources[index++];
                    if (res) prefetch(res[0], res[1], next);
                })();
            }

            addEventListener('load', prefetchAssets);
        })();
    </script>
    <script id="apple-pay-shop-capabilities" type="application/json">
        {
            "shopId": 61544792259,
            "countryCode": "DE",
            "currencyCode": "EUR",
            "merchantCapabilities": ["supports3DS"],
            "merchantId": "gid:\/\/shopify\/Shop\/61544792259",
            "merchantName": "Neness",
            "requiredBillingContactFields": ["postalAddress", "email"],
            "requiredShippingContactFields": ["postalAddress", "email"],
            "shippingType": "shipping",
            "supportedNetworks": ["visa", "maestro", "masterCard", "amex"],
            "total": {
                "type": "pending",
                "label": "Neness",
                "amount": "1.00"
            },
            "shopifyPaymentsEnabled": true,
            "supportsSubscriptions": false
        }
    </script>
    <script id="shopify-features" type="application/json">
        {
            "accessToken": "db60a0f577b25f857144498a21da8a7e",
            "betas": ["rich-media-storefront-analytics"],
            "domain": "www.neness-shop.de",
            "predictiveSearch": true,
            "shopId": 61544792259,
            "smart_payment_buttons_url": "https:\/\/www.neness-shop.de\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.de.js",
            "dynamic_checkout_cart_url": "https:\/\/www.neness-shop.de\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.de.js",
            "locale": "de",
            "optimusEnabled": false,
            "optimusHidden": false,
            "betterDynamicCheckoutRecommendation": false
        }
    </script>
    <script>
        var Shopify = Shopify || {};
        Shopify.shop = "parfumly1.myshopify.com";
        Shopify.locale = "de";
        Shopify.currency = {
            "active": "EUR",
            "rate": "1.0"
        };
        Shopify.country = "DE";
        Shopify.theme = {
            "name": "Copy of NENESS UMBAU ! || AT patch",
            "id": 143048442122,
            "theme_store_id": 902,
            "role": "main"
        };
        Shopify.theme.handle = "null";
        Shopify.theme.style = {
            "id": null,
            "handle": null
        };
        Shopify.cdnHost = "www.neness-shop.de/cdn";
        Shopify.routes = Shopify.routes || {};
        Shopify.routes.root = "/";
    </script>
    <script type="module">
        ! function(o) {
            (o.Shopify = o.Shopify || {}).modules = !0
        }(window);
    </script>
    <script>
        ! function(o) {
            function n() {
                var o = [];

                function n() {
                    o.push(Array.prototype.slice.apply(arguments))
                }
                return n.q = o, n
            }
            var t = o.Shopify = o.Shopify || {};
            t.loadFeatures = n(), t.autoloadFeatures = n()
        }(window);
    </script>
    <script>
        (function() {
            function asyncLoad() {
                var urls = ["https:\/\/loox.io\/widget\/N1bI_G-5Eh\/loox.1650529109883.js?shop=parfumly1.myshopify.com", "https:\/\/attributes.247apps.de\/storefront\/storefront.js?shop=parfumly1.myshopify.com", "https:\/\/intg.snapchat.com\/shopify\/shopify-scevent-init.js?id=45b43596-2ffb-4c11-8814-7f970671a775\u0026shop=parfumly1.myshopify.com", "https:\/\/ecommplugins-scripts.trustpilot.com\/v2.1\/js\/header.min.js?settings=eyJrZXkiOiJpTXhVa1VIT3FLa3dBN09IIiwicyI6InNrdSJ9\u0026shop=parfumly1.myshopify.com", "https:\/\/ecommplugins-trustboxsettings.trustpilot.com\/parfumly1.myshopify.com.js?settings=1689442036676\u0026shop=parfumly1.myshopify.com", "https:\/\/tseish-app.connect.trustedshops.com\/esc.js?apiBaseUrl=aHR0cHM6Ly90c2Vpc2gtYXBwLmNvbm5lY3QudHJ1c3RlZHNob3BzLmNvbQ==\u0026instanceId=cGFyZnVtbHkxLm15c2hvcGlmeS5jb20=\u0026shop=parfumly1.myshopify.com", "https:\/\/gdpr-legal-cookie.beeclever.app\/get-script.php?shop=parfumly1.myshopify.com", "https:\/\/storage.googleapis.com\/gsf-scripts\/global-remarketing\/parfumly1.js?1685568574\u0026shop=parfumly1.myshopify.com", "https:\/\/www.neness-shop.de\/apps\/giraffly-trust\/trust-worker-c0cd9df06cda494fb2f8d69389f4cb26e9845d11.js?v=20230712174613\u0026shop=parfumly1.myshopify.com", "\/\/productreviews.shopifycdn.com\/embed\/loader.js?shop=parfumly1.myshopify.com"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            document.addEventListener('StartAsyncLoading', function(event) {
                asyncLoad();
            });
            if (window.attachEvent) {
                window.attachEvent('onload', function() {});
            } else {
                window.addEventListener('load', function() {}, false);
            }
        })();
    </script>
    <script id="__st">
        var __st = {
            "a": 61544792259,
            "offset": 7200,
            "reqid": "7f07e03a-c9f7-4a95-8f6b-4d5650c661c7",
            "pageurl": "www.neness-shop.de\/collections\/100-parfume-oil\/products\/mars-roll-on-100-parfumol",
            "u": "34c8d8c2312d",
            "p": "product",
            "rtyp": "product",
            "rid": 8209898701066
        };
    </script>
    <script>
        window.ShopifyPaypalV4VisibilityTracking = true;
    </script>
    <script>
        ! function(o) {
            o.addEventListener("DOMContentLoaded", function() {
                window.Shopify = window.Shopify || {}, window.Shopify.recaptchaV3 = window.Shopify.recaptchaV3 || {
                    siteKey: "6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"
                };
                var t = ['form[action*="/contact"] input[name="form_type"][value="contact"]', 'form[action*="/comments"] input[name="form_type"][value="new_comment"]', 'form[action*="/account"] input[name="form_type"][value="customer_login"]', 'form[action*="/account"] input[name="form_type"][value="recover_customer_password"]', 'form[action*="/account"] input[name="form_type"][value="create_customer"]', 'form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");

                function n(e) {
                    e = e.target;
                    null == e || null != (e = function e(t, n) {
                        if (null == t.parentElement) return null;
                        if ("FORM" != t.parentElement.tagName) return e(t.parentElement, n);
                        for (var o = t.parentElement.action, r = 0; r < n.length; r++)
                            if (-1 !== o.indexOf(n[r])) return t.parentElement;
                        return null
                    }(e, ["/contact", "/comments", "/account"])) && null != e.querySelector(t) && ((e = o.createElement("script")).setAttribute("src", "https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"), o.body.appendChild(e), o.removeEventListener("focus", n, !0), o.removeEventListener("change", n, !0), o.removeEventListener("click", n, !0))
                }
                o.addEventListener("click", n, !0), o.addEventListener("change", n, !0), o.addEventListener("focus", n, !0)
            })
        }(document);
    </script>
    <script integrity="sha256-atgy37M9Jn61+JKsuMFsbCkWlGMgmOcwfLDPeUl9V2s=" data-source-attribution="shopify.loadfeatures" defer="defer" data-src="//www.neness-shop.de/cdn/shopifycloud/shopify/assets/storefront/load_feature-6ad832dfb33d267eb5f892acb8c16c6c291694632098e7307cb0cf79497d576b.js" crossorigin="anonymous"></script>
    <script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" data-src="//www.neness-shop.de/cdn/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>


    <style id="shopify-dynamic-checkout-cart">
        @media screen and (min-width: 750px) {
            #dynamic-checkout-cart {
                min-height: 50px;
            }
        }

        @media screen and (max-width: 750px) {
            #dynamic-checkout-cart {
                min-height: 180px;
            }
        }
    </style>
    <script>
        window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');
    </script>


    <script src="../../../cdn/shop/t/27/assets/vendor-scripts-v2.js" defer="defer"></script>
    <script src="../../../cdn/shop/t/27/assets/theme.js?v=122605177298914724411688539544" defer="defer"></script>
    <script>
        var loox_global_hash = '1694009401928';
    </script>
    <style>
        .loox-reviews-default {
            max-width: 1200px;
            margin: 0 auto;
        }

        .loox-rating .loox-icon {
            color: #ffc540;
        }
    </style>

    <meta name="google-site-verification" content="8TrYukElOVVuDiMTs0NqjJeHcmUepld0mkq3gQLsR8s">
    <!-- TrustBox script -->
    <script type="text/javascript" src="../../../bootstrap/v5/tp.widget.bootstrap.min.js" async=""></script>
    <!-- End TrustBox script -->


    <script>
        var gsf_conversion_data = {
            page_type: 'product',
            event: 'view_item',
            data: {
                product_data: [{
                    variant_id: 44458038427914,
                    product_id: 8209898701066,
                    name: "MARS - 100% Parfümöl",
                    price: "25.90",
                    currency: "EUR",
                    sku: "N246",
                    brand: "Neness",
                    variant: "Default Title",
                    category: "",
                    quantity: "105"
                }],
                total_price: "25.90",
                shop_currency: "EUR"
            }
        };
    </script>
    <!-- BEGIN app block: shopify://apps/cart-upsell-free-gifts-monster/blocks/app-embed/a1b8e58a-bf1d-4e0f-8768-a387c3f643c0 -->
    <script>
        // custom code here
    </script>

    <script>
        window.mu_version = 1.8

        window.mu_product = {
            ...{
                "id": 8209898701066,
                "title": "MARS - 100% Parfümöl",
                "handle": "mars-roll-on-100-parfumol",
                "description": "\u003cmeta charset=\"utf-8\"\u003e\n\u003cp\u003eUnser Parfümöl \u003cstrong\u003eMARS\u003c\/strong\u003e ist eine exquisite Kombination aus erdigen, holzigen und würzigen Noten, die ein luxuriöses und unvergessliches Dufterlebnis bieten. Hier sind die Duftnoten in Stichpunkten:\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003e\n\u003cstrong\u003eKopfnoten:\u003c\/strong\u003e Zistrose, Rosmarin, Kardamom und brasilianisches Rosenholz\u003c\/li\u003e\n\u003cli\u003e\n\u003cstrong\u003eHerznoten:\u003c\/strong\u003e Oud, Patschuli und Vetiver\u003c\/li\u003e\n\u003cli\u003e\n\u003cstrong\u003eBasisnoten:\u003c\/strong\u003e Tonkabohne, Ambra und Sandelholz\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eDie Mischung aus diesen reichen und intensiven Noten schafft ein einzigartiges und unwiderstehliches Parfüm, das Ihre Sinne fesseln wird. Unsere Parfümöle sind alle aus hochwertigen, natürlichen Ölen hergestellt und bieten ein lang anhaltendes Dufterlebnis ohne die Austrocknung oder Reizung der Haut, die oft mit Alkohol-basierten Düften verbunden sind. Entdecken Sie unser Parfümöl und tauchen Sie ein in eine Welt voller Raffinesse und Eleganz.\u003c\/p\u003e",
                "published_at": "2023-03-24T09:52:36+01:00",
                "created_at": "2023-03-24T09:52:36+01:00",
                "vendor": "Neness",
                "type": "",
                "tags": [],
                "price": 2590,
                "price_min": 2590,
                "price_max": 2590,
                "available": true,
                "price_varies": false,
                "compare_at_price": null,
                "compare_at_price_min": 0,
                "compare_at_price_max": 0,
                "compare_at_price_varies": false,
                "variants": [{
                    "id": 44458038427914,
                    "title": "Default Title",
                    "option1": "Default Title",
                    "option2": null,
                    "option3": null,
                    "sku": "N246",
                    "requires_shipping": true,
                    "taxable": true,
                    "featured_image": null,
                    "available": true,
                    "name": "MARS - 100% Parfümöl",
                    "public_title": null,
                    "options": ["Default Title"],
                    "price": 2590,
                    "weight": 10,
                    "compare_at_price": null,
                    "inventory_management": "shopify",
                    "barcode": "",
                    "unit_price": 25900,
                    "unit_price_measurement": {
                        "measured_type": "volume",
                        "quantity_value": "10.0",
                        "quantity_unit": "ml",
                        "reference_value": 100,
                        "reference_unit": "ml"
                    },
                    "requires_selling_plan": false,
                    "selling_plan_allocations": []
                }],
                "images": ["\/\/www.neness-shop.de\/cdn\/shop\/products\/montaz_mars_AO.jpg?v=1679647960"],
                "featured_image": "\/\/www.neness-shop.de\/cdn\/shop\/products\/montaz_mars_AO.jpg?v=1679647960",
                "options": ["Title"],
                "media": [{
                    "alt": null,
                    "id": 36146955125002,
                    "position": 1,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 3000,
                        "width": 3000,
                        "src": "\/\/www.neness-shop.de\/cdn\/shop\/products\/montaz_mars_AO.jpg?v=1679647960"
                    },
                    "aspect_ratio": 1.0,
                    "height": 3000,
                    "media_type": "image",
                    "src": "\/\/www.neness-shop.de\/cdn\/shop\/products\/montaz_mars_AO.jpg?v=1679647960",
                    "width": 3000
                }],
                "requires_selling_plan": false,
                "selling_plan_groups": [],
                "content": "\u003cmeta charset=\"utf-8\"\u003e\n\u003cp\u003eUnser Parfümöl \u003cstrong\u003eMARS\u003c\/strong\u003e ist eine exquisite Kombination aus erdigen, holzigen und würzigen Noten, die ein luxuriöses und unvergessliches Dufterlebnis bieten. Hier sind die Duftnoten in Stichpunkten:\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003e\n\u003cstrong\u003eKopfnoten:\u003c\/strong\u003e Zistrose, Rosmarin, Kardamom und brasilianisches Rosenholz\u003c\/li\u003e\n\u003cli\u003e\n\u003cstrong\u003eHerznoten:\u003c\/strong\u003e Oud, Patschuli und Vetiver\u003c\/li\u003e\n\u003cli\u003e\n\u003cstrong\u003eBasisnoten:\u003c\/strong\u003e Tonkabohne, Ambra und Sandelholz\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eDie Mischung aus diesen reichen und intensiven Noten schafft ein einzigartiges und unwiderstehliches Parfüm, das Ihre Sinne fesseln wird. Unsere Parfümöle sind alle aus hochwertigen, natürlichen Ölen hergestellt und bieten ein lang anhaltendes Dufterlebnis ohne die Austrocknung oder Reizung der Haut, die oft mit Alkohol-basierten Düften verbunden sind. Entdecken Sie unser Parfümöl und tauchen Sie ein in eine Welt voller Raffinesse und Eleganz.\u003c\/p\u003e"
            },
            collections: [{
                "id": 482460696842,
                "handle": "365days-dufte",
                "updated_at": "2023-09-04T20:55:38+02:00",
                "published_at": "2022-11-30T12:34:32+01:00",
                "sort_order": "best-selling",
                "template_suffix": "",
                "published_scope": "web",
                "title": "365DAYS Düfte",
                "body_html": ""
            }, {
                "id": 287866683587,
                "handle": "bestseller",
                "updated_at": "2023-09-06T20:45:36+02:00",
                "published_at": "2022-04-06T17:54:59+02:00",
                "sort_order": "best-selling",
                "template_suffix": "",
                "published_scope": "web",
                "title": "Bestseller",
                "body_html": ""
            }, {
                "id": 478817386762,
                "handle": "bestseller-herrendufte",
                "updated_at": "2023-09-06T20:40:35+02:00",
                "published_at": "2022-07-16T21:57:48+02:00",
                "sort_order": "manual",
                "template_suffix": "",
                "published_scope": "web",
                "title": "Bestseller Herrendüfte",
                "body_html": ""
            }, {
                "id": 496098083082,
                "handle": "100-parfume-oil",
                "updated_at": "2023-09-04T20:55:38+02:00",
                "published_at": "2023-03-24T10:50:54+01:00",
                "sort_order": "best-selling",
                "template_suffix": "",
                "published_scope": "web",
                "title": "Parfümöl",
                "body_html": ""
            }],
            inventory: {
                "44458038427914": 105,
            },
            has_only_default_variant: true,

        }

        window.mu_currencies = [{
            "name": "Euro",
            "iso_code": "EUR",
            "symbol": "€"
        }, ];
        window.mu_origin = 'www.neness-shop.de';
        window.mu_myshopify_domain = 'parfumly1.myshopify.com';
        window.mu_cart_currency = 'EUR';
        window.mu_cart_items = [];
        window.mu_money_format = '€{{amount_with_comma_separator}}';









        window.mu_bag_selector = [];


        window.mu_hide_when_opened = "";
    </script>
    <script async="" src="../../../extensions/d23b4076-e7d5-4bb6-9c83-38c23473ba75/7.31.0/assets/webfont.js"></script>

    <link href="../../../extensions/d23b4076-e7d5-4bb6-9c83-38c23473ba75/7.31.0/assets/cart.css" rel="stylesheet">
    <script type="text/javascript">
        window.assetsPath = "https://cdn.shopify.com/extensions/d23b4076-e7d5-4bb6-9c83-38c23473ba75/7.31.0/assets/cart_renderer.js".split("cart_renderer.js")[0]
    </script>
    <script async="" src="../../../extensions/d23b4076-e7d5-4bb6-9c83-38c23473ba75/7.31.0/assets/cart_renderer.js"></script>


    <!-- END app app block --><!-- BEGIN app block: shopify://apps/klaviyo-email-marketing-sms/blocks/klaviyo-onsite-embed/2632fe16-c075-4321-a88b-50b567f42507 -->












    <script async="" src="../../../onsite/js/klaviyo.js?company_id=YrYBxA"></script>
    <script>
        ! function() {
            if (!window.klaviyo) {
                window._klOnsite = window._klOnsite || [];
                try {
                    window.klaviyo = new Proxy({}, {
                        get: function(n, i) {
                            return "push" === i ? function() {
                                var n;
                                (n = window._klOnsite).push.apply(n, arguments)
                            } : function() {
                                for (var n = arguments.length, o = new Array(n), w = 0; w < n; w++) o[w] = arguments[w];
                                var t = "function" == typeof o[o.length - 1] ? o.pop() : void 0,
                                    e = new Promise((function(n) {
                                        window._klOnsite.push([i].concat(o, [function(i) {
                                            t && t(i), n(i)
                                        }]))
                                    }));
                                return e
                            }
                        }
                    })
                } catch (n) {
                    window.klaviyo = window.klaviyo || [], window.klaviyo.push = function() {
                        var n;
                        (n = window._klOnsite).push.apply(n, arguments)
                    }
                }
            }
        }();
    </script>


    <script id="viewed_product">
        if (item == null) {
            var _learnq = _learnq || [];
            var item = {
                Name: "MARS - 100% Parfümöl",
                ProductID: 8209898701066,
                Categories: ["365DAYS Düfte", "Bestseller", "Bestseller Herrendüfte", "Parfümöl"],
                ImageURL: "https://www.neness-shop.de/cdn/shop/products/montaz_mars_AO_grande.jpg?v=1679647960",
                URL: "https://www.neness-shop.de/products/mars-roll-on-100-parfumol",
                Brand: "Neness",
                Price: "€25,90",
                CompareAtPrice: "€0,00"
            };
            _learnq.push(['track', 'Viewed Product', item]);
            _learnq.push(['trackViewedItem', {
                Title: item.Name,
                ItemId: item.ProductID,
                Categories: item.Categories,
                ImageUrl: item.ImageURL,
                Url: item.URL,
                Metadata: {
                    Brand: item.Brand,
                    Price: item.Price,
                    CompareAtPrice: item.CompareAtPrice
                }
            }]);
        }
    </script>




    <!-- END app app block --><!-- BEGIN app block: shopify://apps/tixel-multiple-tiktok-pixels/blocks/app-embed/b273c4b8-95ba-409d-a87c-c46907e02629 -->
    <script async="" src="../../../get_script/index.php?shop_url=parfumly1.myshopify.com"></script>


    <!-- END app app block -->
    <script src="../../../extensions/16ca5eaa-d807-4d59-b662-16247e2bad46/kite-free-gift-7/assets/freeGiftLogicv1.js" type="text/javascript" defer="defer"></script>
    <link href="../../../extensions/16ca5eaa-d807-4d59-b662-16247e2bad46/kite-free-gift-7/assets/freeGiftLogicv1.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
    <script>
        (function() {
            if ("sendBeacon" in navigator && "performance" in window) {
                var session_token = document.cookie.match(/_shopify_s=([^;]*)/);

                function handle_abandonment_event(e) {
                    var entries = performance.getEntries().filter(function(entry) {
                        return /monorail-edge.shopifysvc.com/.test(entry.name);
                    });
                    if (!window.abandonment_tracked && entries.length === 0) {
                        window.abandonment_tracked = true;
                        var currentMs = Date.now();
                        var navigation_start = performance.timing.navigationStart;
                        var payload = {
                            shop_id: 61544792259,
                            url: window.location.href,
                            navigation_start,
                            duration: currentMs - navigation_start,
                            session_token: session_token && session_token.length === 2 ? session_token[1] : "",
                            page_type: "product"
                        };
                        window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({
                            schema_id: "online_store_buyer_site_abandonment/1.1",
                            payload: payload,
                            metadata: {
                                event_created_at_ms: currentMs,
                                event_sent_at_ms: currentMs
                            }
                        }));
                    }
                }
                window.addEventListener('pagehide', handle_abandonment_event);
            }
        }());
    </script>
    <script id="web-pixels-manager-setup">
        (function e(e, n, a, o, t, r, i) {
            function s(e, n) {
                if (document.head) {
                    var a = document.createElement("link");
                    e.match(/spin\.dev\/?/) && (e += "?fast_storefront_renderer=1"), a.rel = "preload", a.href = e, n && (a.as = n);
                    try {
                        document.head.appendChild(a)
                    } catch (e) {
                        console && console.warn && console.warn("[Web Pixels Manager] Could not append prefetch link tag to DOM.")
                    }
                }
            }
            var l = i || [],
                d = null !== e;
            d && (window.Shopify = window.Shopify || {}, window.Shopify.analytics = window.Shopify.analytics || {}, window.Shopify.analytics.replayQueue = [], window.Shopify.analytics.publish = function(e, n, a) {
                window.Shopify.analytics.replayQueue.push([e, n, a])
            });
            var c = function() {
                    var e = "legacy",
                        n = "unknown",
                        a = null,
                        o = navigator.userAgent.match(/(Firefox|Chrome)\/(\d+)/i),
                        t = navigator.userAgent.match(/(Edg)\/(\d+)/i),
                        r = navigator.userAgent.match(/(Version)\/(\d+)(.+)(Safari)\/(\d+)/i);
                    r ? (n = "safari", a = parseInt(r[2], 10)) : t ? (n = "edge", a = parseInt(t[2], 10)) : o && (n = o[1].toLocaleLowerCase(), a = parseInt(o[2], 10));
                    var i = {
                        chrome: 60,
                        firefox: 55,
                        safari: 11,
                        edge: 80
                    } [n];
                    return void 0 !== i && null !== a && i <= a && (e = "modern"), e
                }(),
                p = c.substring(0, 1),
                f = o.substring(0, 1);
            if (d) try {
                self.performance.mark("wpm:start")
            } catch (e) {}
            if (d) {
                var u = self.location.origin,
                    w = (e.webPixelsConfigList || []).filter((function(e) {
                        return "app" === e.type.toLowerCase()
                    }));
                for (let e = 0; e < w.length; e++) {
                    s([u, "/wpm@", r, "/web-pixel-", w[e].id, "@", w[e].scriptVersion, "/sandbox/worker.", c, ".js"].join(""), "script")
                }
            }
            var h, y, m, g, v, b, _, S, x = [a, "/wpm", "/", f, r, p, ".js"].join("");
            h = {
                src: x,
                async: !0,
                onload: function() {
                    if (e) {
                        var a = window.webPixelsManager.init(e);
                        n(a), window.Shopify.analytics.replayQueue.forEach((function(e) {
                            a.publishCustomEvent(e[0], e[1], e[2])
                        })), window.Shopify.analytics.replayQueue = [], window.Shopify.analytics.publish = a.publishCustomEvent, l.indexOf("web_pixels_visitor_api") > -1 && (window.Shopify.analytics.visitor = a.visitor)
                    }
                },
                onerror: function() {
                    var n = (e.storefrontBaseUrl ? e.storefrontBaseUrl.replace(/\/$/, "") : self.location.origin) + "/.well-known/shopify/monorail/unstable/produce_batch",
                        a = JSON.stringify({
                            metadata: {
                                event_sent_at_ms: (new Date).getTime()
                            },
                            events: [{
                                schema_id: "web_pixels_manager_load/2.0",
                                payload: {
                                    version: t || "latest",
                                    page_url: self.location.href,
                                    status: "failed",
                                    error_msg: x + " has failed to load"
                                },
                                metadata: {
                                    event_created_at_ms: (new Date).getTime()
                                }
                            }]
                        });
                    try {
                        if (self.navigator.sendBeacon.bind(self.navigator)(n, a)) return !0
                    } catch (e) {}
                    const o = new XMLHttpRequest;
                    try {
                        return o.open("POST", n, !0), o.setRequestHeader("Content-Type", "text/plain"), o.send(a), !0
                    } catch (e) {
                        console && console.warn && console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")
                    }
                    return !1
                }
            }, y = document.createElement("script"), m = h.src, g = h.async || !0, v = h.onload, b = h.onerror, _ = document.head, S = document.body, y.async = g, y.src = m, v && y.addEventListener("load", v), b && y.addEventListener("error", b), _ ? _.appendChild(y) : S ? S.appendChild(y) : console.error("Did not find a head or body element to append the script")
        })({
            shopId: 61544792259,
            storefrontBaseUrl: "https://www.neness-shop.de",
            cdnBaseUrl: "https://www.neness-shop.de/cdn",
            surface: "storefront-renderer",
            enabledBetaFlags: ["web_pixels_async_pixel_refactor"],
            webPixelsConfigList: [{
                "id": "19300618",
                "configuration": "{\"pixelId\":\"45b43596-2ffb-4c11-8814-7f970671a775\"}",
                "eventPayloadVersion": "v1",
                "runtimeContext": "STRICT",
                "scriptVersion": "bb41bf091d86ec09beb5141ead6fafc0",
                "type": "APP",
                "apiClientId": 2556259
            }, {
                "id": "shopify-app-pixel",
                "configuration": "{}",
                "eventPayloadVersion": "v1",
                "runtimeContext": "STRICT",
                "scriptVersion": "0559",
                "apiClientId": "shopify-pixel",
                "type": "APP"
            }, {
                "id": "shopify-custom-pixel",
                "eventPayloadVersion": "v1",
                "runtimeContext": "LAX",
                "scriptVersion": "0559",
                "apiClientId": "shopify-pixel",
                "type": "CUSTOM"
            }],
            initData: {
                "cart": null,
                "checkout": null,
                "customer": null,
                "productVariants": [{
                    "id": "44458038427914",
                    "image": {
                        "src": "\/\/www.neness-shop.de\/cdn\/shop\/products\/montaz_mars_AO.jpg?v=1679647960"
                    },
                    "price": {
                        "amount": 25.9,
                        "currencyCode": "EUR"
                    },
                    "product": {
                        "id": "8209898701066",
                        "title": "MARS - 100% Parf\u00fcm\u00f6l",
                        "untranslatedTitle": "MARS - 100% Parf\u00fcm\u00f6l",
                        "vendor": "Neness",
                        "type": ""
                    },
                    "sku": "N246",
                    "title": "Default Title",
                    "untranslatedTitle": "Default Title"
                }]
            },
        }, function pageEvents(webPixelsManagerAPI) {
            webPixelsManagerAPI.publish("page_viewed");
            webPixelsManagerAPI.publish("product_viewed", {
                "productVariant": {
                    "id": "44458038427914",
                    "image": {
                        "src": "\/\/www.neness-shop.de\/cdn\/shop\/products\/montaz_mars_AO.jpg?v=1679647960"
                    },
                    "price": {
                        "amount": 25.9,
                        "currencyCode": "EUR"
                    },
                    "product": {
                        "id": "8209898701066",
                        "title": "MARS - 100% Parf\u00fcm\u00f6l",
                        "untranslatedTitle": "MARS - 100% Parf\u00fcm\u00f6l",
                        "vendor": "Neness",
                        "type": ""
                    },
                    "sku": "N246",
                    "title": "Default Title",
                    "untranslatedTitle": "Default Title"
                }
            });
        }, "https://www.neness-shop.de/cdn", "browser", "0.0.353", "81539cb7w7cf765a2pac65c931m449d8a44", ["web_pixels_async_pixel_refactor"]);
    </script>
    <script>
        window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = 'EUR';
        var meta = {
            "product": {
                "id": 8209898701066,
                "gid": "gid:\/\/shopify\/Product\/8209898701066",
                "vendor": "Neness",
                "type": "",
                "variants": [{
                    "id": 44458038427914,
                    "price": 2590,
                    "name": "MARS - 100% Parfümöl",
                    "public_title": null,
                    "sku": "N246"
                }]
            },
            "page": {
                "pageType": "product",
                "resourceType": "product",
                "resourceId": 8209898701066
            }
        };
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }
    </script>
    <script>
        window.ShopifyAnalytics.merchantGoogleAnalytics = function() {

        };
    </script>
    <script class="analytics">
        (window.gaDevIds = window.gaDevIds || []).push('BwiEti');


        (function() {
            var customDocumentWrite = function(content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.$) {
                    jquery = window.Checkout.$;
                }

                if (jquery) {
                    jquery('body').append(content);
                }
            };

            var hasLoggedConversion = function(token) {
                if (token) {
                    return document.cookie.indexOf('loggedConversion=' + token) !== -1;
                }
                return false;
            }

            var setCookieIfConversion = function(token) {
                if (token) {
                    var twoMonthsFromNow = new Date(Date.now());
                    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                    document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
                }
            }

            var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                'identify',
                'page',
                'ready',
                'track',
                'trackForm',
                'trackLink'
            ];
            trekkie.factory = function(method) {
                return function() {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function(config) {
                trekkie.config = config || {};
                trekkie.config.initialDocumentCookie = document.cookie;
                var first = document.getElementsByTagName('script')[0];
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onerror = function(e) {
                    var scriptFallback = document.createElement('script');
                    scriptFallback.type = 'text/javascript';
                    scriptFallback.onerror = function(error) {
                        var Monorail = {
                            produce: function produce(monorailDomain, schemaId, payload) {
                                var currentMs = new Date().getTime();
                                var event = {
                                    schema_id: schemaId,
                                    payload: payload,
                                    metadata: {
                                        event_created_at_ms: currentMs,
                                        event_sent_at_ms: currentMs
                                    }
                                };
                                return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
                            },
                            sendRequest: function sendRequest(endpointUrl, payload) {
                                // Try the sendBeacon API
                                if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                                    var blobData = new window.Blob([payload], {
                                        type: 'text/plain'
                                    });

                                    if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                        return true;
                                    } // sendBeacon was not successful

                                } // XHR beacon

                                var xhr = new XMLHttpRequest();

                                try {
                                    xhr.open('POST', endpointUrl);
                                    xhr.setRequestHeader('Content-Type', 'text/plain');
                                    xhr.send(payload);
                                } catch (e) {
                                    console.log(e);
                                }

                                return false;
                            },
                            isIos12: function isIos12() {
                                return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
                            }
                        };
                        Monorail.produce('monorail-edge.shopifysvc.com',
                            'trekkie_storefront_load_errors/1.1', {
                                shop_id: 61544792259,
                                theme_id: 143048442122,
                                app_name: "storefront",
                                context_url: window.location.href,
                                source_url: "//www.neness-shop.de/cdn/s/trekkie.storefront.3838335172bb3eee0c7f8320cb9d78b9a94cf814.min.js"
                            });

                    };
                    scriptFallback.async = true;
                    scriptFallback.src = '//www.neness-shop.de/cdn/s/trekkie.storefront.3838335172bb3eee0c7f8320cb9d78b9a94cf814.min.js';
                    first.parentNode.insertBefore(scriptFallback, first);
                };
                script.async = true;
                script.src = '//www.neness-shop.de/cdn/s/trekkie.storefront.3838335172bb3eee0c7f8320cb9d78b9a94cf814.min.js';
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load({
                "Trekkie": {
                    "appName": "storefront",
                    "development": false,
                    "defaultAttributes": {
                        "shopId": 61544792259,
                        "isMerchantRequest": null,
                        "themeId": 143048442122,
                        "themeCityHash": "16881971658810175485",
                        "contentLanguage": "de",
                        "currency": "EUR"
                    },
                    "isServerSideCookieWritingEnabled": true,
                    "monorailRegion": "shop_domain"
                },
                "Google Analytics": {
                    "trackingId": "UA-227006485-2",
                    "domain": "auto",
                    "siteSpeedSampleRate": "10",
                    "enhancedEcommerce": true,
                    "doubleClick": true,
                    "includeSearch": true
                },
                "Facebook Pixel": {
                    "pixelIds": ["346294667488559"],
                    "agent": "plshopify1.2"
                },
                "Pinterest Pixel": {
                    "pixelId": "2613685659501"
                },
                "TikTok Pixel": {
                    "pixelId": "C9QFE8RC77UE268ERANG"
                },
                "Google Gtag Pixel": {
                    "conversionId": "G-8M6TG84LCB",
                    "eventLabels": [{
                        "type": "search",
                        "action_label": ["G-8M6TG84LCB", "AW-10895016064\/w3tfCNHN0bkDEICBk8so"]
                    }, {
                        "type": "begin_checkout",
                        "action_label": ["G-8M6TG84LCB", "AW-10895016064\/sHrHCM7N0bkDEICBk8so"]
                    }, {
                        "type": "view_item",
                        "action_label": ["G-8M6TG84LCB", "AW-10895016064\/jnmDCMjN0bkDEICBk8so", "MC-H6LQXSMMEM"]
                    }, {
                        "type": "purchase",
                        "action_label": ["G-8M6TG84LCB", "AW-10895016064\/S3IlCMXN0bkDEICBk8so", "MC-H6LQXSMMEM"]
                    }, {
                        "type": "page_view",
                        "action_label": ["G-8M6TG84LCB", "AW-10895016064\/F1YcCMLN0bkDEICBk8so", "MC-H6LQXSMMEM"]
                    }, {
                        "type": "add_payment_info",
                        "action_label": ["G-8M6TG84LCB", "AW-10895016064\/DXXFCNTN0bkDEICBk8so"]
                    }, {
                        "type": "add_to_cart",
                        "action_label": ["G-8M6TG84LCB", "AW-10895016064\/OpuaCMvN0bkDEICBk8so"]
                    }],
                    "targetCountry": "DE"
                },
                "Session Attribution": {},
                "S2S": {
                    "facebookCapiEnabled": true,
                    "facebookAppPixelId": "346294667488559",
                    "source": "trekkie-storefront-renderer"
                }
            });

            var loaded = false;
            trekkie.ready(function() {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;

                ga('require', 'linker');

                function addListener(element, type, callback) {
                    if (element.addEventListener) {
                        element.addEventListener(type, callback);
                    } else if (element.attachEvent) {
                        element.attachEvent('on' + type, callback);
                    }
                }

                function decorate(event) {
                    event = event || window.event;
                    var target = event.target || event.srcElement;
                    if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
                        ga(function(tracker) {
                            var linkerParam = tracker.get('linkerParam');
                            document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
                        });
                    }
                }
                addListener(window, 'load', function() {
                    for (var i = 0; i < document.forms.length; i++) {
                        var action = document.forms[i].getAttribute('action');
                        if (action && action.indexOf('/cart') >= 0) {
                            addListener(document.forms[i], 'submit', decorate);
                        }
                    }
                    for (var i = 0; i < document.links.length; i++) {
                        var href = document.links[i].getAttribute('href');
                        if (href && href.indexOf('/checkout') >= 0) {
                            addListener(document.links[i], 'click', decorate);
                        }
                    }
                });


                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try {
                    window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
                } catch (error) {};
                document.write = originalDocumentWrite;

                window.ShopifyAnalytics.lib.page(null, {
                    "pageType": "product",
                    "resourceType": "product",
                    "resourceId": 8209898701066
                });

                var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
                var token = match ? match[1] : undefined;
                if (!hasLoggedConversion(token)) {
                    setCookieIfConversion(token);
                    window.ShopifyAnalytics.lib.track("Viewed Product", {
                        "currency": "EUR",
                        "variantId": 44458038427914,
                        "productId": 8209898701066,
                        "productGid": "gid:\/\/shopify\/Product\/8209898701066",
                        "name": "MARS - 100% Parfümöl",
                        "price": "25.90",
                        "sku": "N246",
                        "brand": "Neness",
                        "variant": null,
                        "category": "",
                        "nonInteraction": true
                    });
                    window.ShopifyAnalytics.lib.track("monorail:\/\/trekkie_storefront_viewed_product\/1.1", {
                        "currency": "EUR",
                        "variantId": 44458038427914,
                        "productId": 8209898701066,
                        "productGid": "gid:\/\/shopify\/Product\/8209898701066",
                        "name": "MARS - 100% Parfümöl",
                        "price": "25.90",
                        "sku": "N246",
                        "brand": "Neness",
                        "variant": null,
                        "category": "",
                        "nonInteraction": true,
                        "referer": "https:\/\/www.neness-shop.de\/collections\/100-parfume-oil\/products\/mars-roll-on-100-parfumol"
                    });
                }
            });


            var eventsListenerScript = document.createElement('script');
            eventsListenerScript.async = true;
            eventsListenerScript.src = "//www.neness-shop.de/cdn/shopifycloud/shopify/assets/shop_events_listener-65cd0ba3fcd81a1df33f2510ec5bcf8c0e0958653b50e3965ec972dd638ee13f.js";
            document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

        })();
    </script>
    <script class="boomerang">
        (function() {
            if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
                return;
            }
            window.BOOMR = window.BOOMR || {};
            window.BOOMR.snippetStart = new Date().getTime();
            window.BOOMR.snippetExecuted = true;
            window.BOOMR.snippetVersion = 12;
            window.BOOMR.application = "storefront-renderer";
            window.BOOMR.themeName = "Expanse";
            window.BOOMR.themeVersion = "3.0.1";
            window.BOOMR.shopId = 61544792259;
            window.BOOMR.themeId = 143048442122;
            window.BOOMR.renderRegion = "gcp-europe-west4";
            window.BOOMR.url =
                "https://www.neness-shop.de/cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
            var where = document.currentScript || document.getElementsByTagName("script")[0];
            var parentNode = where.parentNode;
            var promoted = false;
            var LOADER_TIMEOUT = 3000;

            function promote() {
                if (promoted) {
                    return;
                }
                var script = document.createElement("script");
                script.id = "boomr-scr-as";
                script.src = window.BOOMR.url;
                script.async = true;
                parentNode.appendChild(script);
                promoted = true;
            }

            function iframeLoader(wasFallback) {
                promoted = true;
                var dom, bootstrap, iframe, iframeStyle;
                var doc = document;
                var win = window;
                window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                bootstrap = function(parent, scriptId) {
                    var script = doc.createElement("script");
                    script.id = scriptId || "boomr-if-as";
                    script.src = window.BOOMR.url;
                    BOOMR_lstart = new Date().getTime();
                    parent = parent || doc.body;
                    parent.appendChild(script);
                };
                if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
                    window.BOOMR.snippetMethod = "s";
                    bootstrap(parentNode, "boomr-async");
                    return;
                }
                iframe = document.createElement("IFRAME");
                iframe.src = "about:blank";
                iframe.title = "";
                iframe.role = "presentation";
                iframe.loading = "eager";
                iframeStyle = (iframe.frameElement || iframe).style;
                iframeStyle.width = 0;
                iframeStyle.height = 0;
                iframeStyle.border = 0;
                iframeStyle.display = "none";
                parentNode.appendChild(iframe);
                try {
                    win = iframe.contentWindow;
                    doc = win.document.open();
                } catch (e) {
                    dom = document.domain;
                    iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
                    win = iframe.contentWindow;
                    doc = win.document.open();
                }
                if (dom) {
                    doc._boomrl = function() {
                        this.domain = dom;
                        bootstrap();
                    };
                    doc.write("<body onload='document._boomrl();'>");
                } else {
                    win._boomrl = function() {
                        bootstrap();
                    };
                    if (win.addEventListener) {
                        win.addEventListener("load", win._boomrl, false);
                    } else if (win.attachEvent) {
                        win.attachEvent("onload", win._boomrl);
                    }
                }
                doc.close();
            }
            var link = document.createElement("link");
            if (link.relList &&
                typeof link.relList.supports === "function" &&
                link.relList.supports("preload") &&
                ("as" in link)) {
                window.BOOMR.snippetMethod = "p";
                link.href = window.BOOMR.url;
                link.rel = "preload";
                link.as = "script";
                link.addEventListener("load", promote);
                link.addEventListener("error", function() {
                    iframeLoader(true);
                });
                setTimeout(function() {
                    if (!promoted) {
                        iframeLoader(true);
                    }
                }, LOADER_TIMEOUT);
                BOOMR_lstart = new Date().getTime();
                parentNode.appendChild(link);
            } else {
                iframeLoader(false);
            }

            function boomerangSaveLoadTime(e) {
                window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
            }
            if (window.addEventListener) {
                window.addEventListener("load", boomerangSaveLoadTime, false);
            } else if (window.attachEvent) {
                window.attachEvent("onload", boomerangSaveLoadTime);
            }
            if (document.addEventListener) {
                document.addEventListener("onBoomerangLoaded", function(e) {
                    e.detail.BOOMR.init({
                        ResourceTiming: {
                            enabled: true,
                            trackedResourceTypes: ["script", "img", "css"]
                        },
                    });
                    e.detail.BOOMR.t_end = new Date().getTime();
                });
            } else if (document.attachEvent) {
                document.attachEvent("onpropertychange", function(e) {
                    if (!e) e = event;
                    if (e.propertyName === "onBoomerangLoaded") {
                        e.detail.BOOMR.init({
                            ResourceTiming: {
                                enabled: true,
                                trackedResourceTypes: ["script", "img", "css"]
                            },
                        });
                        e.detail.BOOMR.t_end = new Date().getTime();
                    }
                });
            }
        })();
    </script>
</head>

<body class="template-product" data-transitions="true" data-button_style="square" data-edges="" data-type_header_capitalize="false" data-swatch_style="round" data-grid-style="simple">

    <script type="text/javascript">
        window.setTimeout(function() {
            document.body.className += " loaded";
        }, 25);
    </script>

    <a class="in-page-link visually-hidden skip-link" href="#MainContent">Direkt zum Inhalt</a>
    <div id="PageContainer" class="page-container">
        <div id="shopify-section-toolbar" class="shopify-section toolbar-section">
            <div data-section-id="toolbar" data-section-type="toolbar">
                <div class="toolbar">
                    <div class="page-width">
                        <div class="toolbar__content">
                            <div class="toolbar__item toolbar__item--announcements">
                                <div class="announcement-bar text-center">
                                    <div class="slideshow-wrapper">
                                        <button type="button" class="visually-hidden slideshow__pause" data-id="toolbar" aria-live="polite">
                                            <span class="slideshow__pause-stop">
                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pause" viewbox="0 0 10 13">
                                                    <g fill="#000" fill-rule="evenodd">
                                                        <path d="M0 0h3v13H0zM7 0h3v13H7z"></path>
                                                    </g>
                                                </svg>
                                                <span class="icon__fallback-text">Pause Diashow</span>
                                            </span>
                                            <span class="slideshow__pause-play">
                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-play" viewbox="18.24 17.35 24.52 28.3">
                                                    <path fill="#323232" d="M22.1 19.151v25.5l20.4-13.489-20.4-12.011z">
                                                    </path>
                                                </svg>
                                                <span class="icon__fallback-text">Diashow abspielen</span>
                                            </span>
                                        </button>

                                        <div id="AnnouncementSlider" class="announcement-slider" data-block-count="2">
                                            <div id="AnnouncementSlide-0b066516-effd-470b-ba3b-fc9f69d6c6ae" class="slideshow__slide announcement-slider__slide" data-index="0">
                                                <div class="announcement-slider__content">
                                                    <div class="medium-up--hide">
                                                        <p><strong>Kostensloser Versand</strong> ab 30€</p>
                                                    </div>
                                                    <div class="small--hide">
                                                        <p>⭐️⭐️⭐️⭐️⭐️ <strong> -</strong> <strong>65.000+
                                                                Kunden</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="AnnouncementSlide-9f5ea5bd-87a1-4f60-80ba-075ccd43ce40" class="slideshow__slide announcement-slider__slide" data-index="1">
                                                <div class="announcement-slider__content">
                                                    <p>20% Rabatt ❤️ - Neness20</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="toolbar__item small--hide">
                                <ul class="no-bullets social-icons inline-list toolbar__social">
                                    <li>
                                        <a target="_blank" rel="noopener" href="https://www.instagram.com/neness_shop_de/?next=%2F" title="Neness auf Instagram">
                                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram" viewbox="0 0 32 32">
                                                <path fill="#444" d="M16 3.094c4.206 0 4.7.019 6.363.094 1.538.069 2.369.325 2.925.544.738.287 1.262.625 1.813 1.175s.894 1.075 1.175 1.813c.212.556.475 1.387.544 2.925.075 1.662.094 2.156.094 6.363s-.019 4.7-.094 6.363c-.069 1.538-.325 2.369-.544 2.925-.288.738-.625 1.262-1.175 1.813s-1.075.894-1.813 1.175c-.556.212-1.387.475-2.925.544-1.663.075-2.156.094-6.363.094s-4.7-.019-6.363-.094c-1.537-.069-2.369-.325-2.925-.544-.737-.288-1.263-.625-1.813-1.175s-.894-1.075-1.175-1.813c-.212-.556-.475-1.387-.544-2.925-.075-1.663-.094-2.156-.094-6.363s.019-4.7.094-6.363c.069-1.537.325-2.369.544-2.925.287-.737.625-1.263 1.175-1.813s1.075-.894 1.813-1.175c.556-.212 1.388-.475 2.925-.544 1.662-.081 2.156-.094 6.363-.094zm0-2.838c-4.275 0-4.813.019-6.494.094-1.675.075-2.819.344-3.819.731-1.037.4-1.913.944-2.788 1.819S1.486 4.656 1.08 5.688c-.387 1-.656 2.144-.731 3.825-.075 1.675-.094 2.213-.094 6.488s.019 4.813.094 6.494c.075 1.675.344 2.819.731 3.825.4 1.038.944 1.913 1.819 2.788s1.756 1.413 2.788 1.819c1 .387 2.144.656 3.825.731s2.213.094 6.494.094 4.813-.019 6.494-.094c1.675-.075 2.819-.344 3.825-.731 1.038-.4 1.913-.944 2.788-1.819s1.413-1.756 1.819-2.788c.387-1 .656-2.144.731-3.825s.094-2.212.094-6.494-.019-4.813-.094-6.494c-.075-1.675-.344-2.819-.731-3.825-.4-1.038-.944-1.913-1.819-2.788s-1.756-1.413-2.788-1.819c-1-.387-2.144-.656-3.825-.731C20.812.275 20.275.256 16 .256z">
                                                </path>
                                                <path fill="#444" d="M16 7.912a8.088 8.088 0 0 0 0 16.175c4.463 0 8.087-3.625 8.087-8.088s-3.625-8.088-8.088-8.088zm0 13.338a5.25 5.25 0 1 1 0-10.5 5.25 5.25 0 1 1 0 10.5zM26.294 7.594a1.887 1.887 0 1 1-3.774.002 1.887 1.887 0 0 1 3.774-.003z">
                                                </path>
                                            </svg>
                                            <span class="icon__fallback-text">Instagram</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" rel="noopener" href="https://www.facebook.com/Parfumly-114620804561706" title="Neness auf Facebook">
                                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewbox="0 0 14222 14222">
                                                <path d="M14222 7112c0 3549.352-2600.418 6491.344-6000 7024.72V9168h1657l315-2056H8222V5778c0-562 275-1111 1159-1111h897V2917s-814-139-1592-139c-1624 0-2686 984-2686 2767v1567H4194v2056h1806v4968.72C2600.418 13603.344 0 10661.352 0 7112 0 3184.703 3183.703 1 7111 1s7111 3183.703 7111 7111zm-8222 7025c362 57 733 86 1111 86-377.945 0-749.003-29.485-1111-86.28zm2222 0v-.28a7107.458 7107.458 0 0 1-167.717 24.267A7407.158 7407.158 0 0 0 8222 14137zm-167.717 23.987C7745.664 14201.89 7430.797 14223 7111 14223c319.843 0 634.675-21.479 943.283-62.013z">
                                                </path>
                                            </svg>
                                            <span class="icon__fallback-text">Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" rel="noopener" href="https://www.tiktok.com/@nenessshop" title="Neness auf TikTok">
                                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-tiktok" viewbox="0 0 2859 3333">
                                                <path d="M2081 0c55 473 319 755 778 785v532c-266 26-499-61-770-225v995c0 1264-1378 1659-1932 753-356-583-138-1606 1004-1647v561c-87 14-180 36-265 65-254 86-398 247-358 531 77 544 1075 705 992-358V1h551z">
                                                </path>
                                            </svg>
                                            <span class="icon__fallback-text">TikTok</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <div id="shopify-section-header" class="shopify-section header-section">
            <style>
                .site-nav__link {
                    font-size: 14px;
                }



                .site-header,
                .site-header__element--sub {
                    box-shadow: 0 0 25px rgb(0 0 0 / 10%);
                }

                .is-light .site-header,
                .is-light .site-header__element--sub {
                    box-shadow: none;
                }

                .site-header__search-form {
                    border: 1px solid #e8e8e1
                }
            </style>

            <div data-section-id="header" data-section-type="header">
                <div id="HeaderWrapper" class="header-wrapper">
                    <header id="SiteHeader" class="site-header" data-sticky="true" data-overlay="false">

                        <div class="site-header__element site-header__element--top">
                            <div class="page-width">
                                <div class="header-layout" data-layout="left" data-nav="beside" data-logo-align="left">
                                    <div class="header-item header-item--logo">
                                        <style data-shopify="">
                                            .header-item--logo,
                                            [data-layout="left-center"] .header-item--logo,
                                            [data-layout="left-center"] .header-item--icons {
                                                flex: 0 1 140px;
                                            }

                                            @media only screen and (min-width: 769px) {

                                                .header-item--logo,
                                                [data-layout="left-center"] .header-item--logo,
                                                [data-layout="left-center"] .header-item--icons {
                                                    flex: 0 0 200px;
                                                }
                                            }

                                            .site-header__logo a {
                                                width: 140px;
                                            }

                                            .is-light .site-header__logo .logo--inverted {
                                                width: 140px;
                                            }

                                            @media only screen and (min-width: 769px) {
                                                .site-header__logo a {
                                                    width: 200px;
                                                }

                                                .is-light .site-header__logo .logo--inverted {
                                                    width: 200px;
                                                }
                                            }
                                        </style>
                                        <div class="h1 site-header__logo"><span class="visually-hidden">Neness</span>

                                            <a href="../../../index.php" class="site-header__logo-link">
                                                <img class="small--hide" src="../../../cdn/shop/files/Bildschirmfoto_2023-02-22_um_12.38.41_200x.png?v=1677066018" srcset="../../../cdn/shop/files/Bildschirmfoto_2023-02-22_um_12.38.41_200x.png 1x?v=1677066018 1x, ../../../cdn/shop/files/Bildschirmfoto_2023-02-22_um_12.38.41_200x%402x.png 2xg?v=1677066018 2x" alt="Neness">
                                                <img class="medium-up--hide" src="../../../cdn/shop/files/Bildschirmfoto_2023-02-22_um_12.38.41_140x.png?v=1677066018" srcset="../../../cdn/shop/files/Bildschirmfoto_2023-02-22_um_12.38.41_140x.png 1x?v=1677066018 1x, ../../../cdn/shop/files/Bildschirmfoto_2023-02-22_um_12.38.41_140x%402x.png 2xg?v=1677066018 2x" alt="Neness">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="header-item header-item--navigation">
                                        <ul class="site-nav site-navigation site-navigation--beside small--hide" role="navigation">
                                            <li class="site-nav__item site-nav__expanded-item">

                                                <a href="../../../index.php" class="site-nav__link site-nav__link--underline">
                                                    Startseite
                                                </a>
                                            </li>
                                            <li class="site-nav__item site-nav__expanded-item">

                                                <a href="../../alles-in-einem" class="site-nav__link site-nav__link--underline">
                                                    Bestseller
                                                </a>
                                            </li>
                                            <li class="site-nav__item site-nav__expanded-item">

                                                <a href="../../fur-sie" class="site-nav__link site-nav__link--underline">
                                                    Damendüfte
                                                </a>
                                            </li>
                                            <li class="site-nav__item site-nav__expanded-item">

                                                <a href="../../unisex" class="site-nav__link site-nav__link--underline">
                                                    Unisex
                                                </a>
                                            </li>
                                            <li class="site-nav__item site-nav__expanded-item">

                                                <a href="../../fur-ihn" class="site-nav__link site-nav__link--underline">
                                                    Herrendüfte
                                                </a>
                                            </li>
                                            <li class="site-nav__item site-nav__expanded-item">

                                                <a href="../../proben" class="site-nav__link site-nav__link--underline">
                                                    Proben
                                                </a>
                                            </li>
                                            <li class="site-nav__item site-nav__expanded-item">

                                                <a href="../../100-parfume-oil" class="site-nav__link site-nav__link--underline">
                                                    Parfümöl
                                                </a>
                                            </li>
                                            <li class="site-nav__item site-nav__expanded-item">

                                                <a href="../../365days-dufte" class="site-nav__link site-nav__link--underline">
                                                    365DAYS DÜFTE
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-item header-item--icons">
                                        <div class="site-nav">
                                            <div class="site-nav__icons">
                                                <a href="../../../search.html" class="site-nav__link site-nav__link--icon js-search-header js-no-transition">
                                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search" viewbox="0 0 64 64">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: none;
                                                                    stroke: #000;
                                                                    stroke-miterlimit: 10;
                                                                    stroke-width: 2px
                                                                }
                                                            </style>
                                                        </defs>
                                                        <path class="cls-1" d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42">
                                                        </path>
                                                    </svg>
                                                    <span class="icon__fallback-text">Suche</span>
                                                </a><a class="site-nav__link site-nav__link--icon small--hide" href="../../../account/login.html">
                                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-user" viewbox="0 0 64 64">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: none;
                                                                    stroke: #000;
                                                                    stroke-miterlimit: 10;
                                                                    stroke-width: 2px
                                                                }
                                                            </style>
                                                        </defs>
                                                        <path class="cls-1" d="M35 39.84v-2.53c3.3-1.91 6-6.66 6-11.42 0-7.63 0-13.82-9-13.82s-9 6.19-9 13.82c0 4.76 2.7 9.51 6 11.42v2.53c-10.18.85-18 6-18 12.16h42c0-6.19-7.82-11.31-18-12.16z">
                                                        </path>
                                                    </svg>
                                                    <span class="site-nav__icon-label small--hide icon__fallback-text">
                                                        Account
                                                    </span>
                                                </a><a href="../../../cart.php" id="HeaderCartTrigger" aria-controls="HeaderCart" class="site-nav__link site-nav__link--icon js-no-transition" data-icon="bag-minimal">
                                                    <span class="cart-link"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-bag-minimal" viewbox="0 0 64 64">
                                                            <defs>
                                                                <style>
                                                                    .cls-1 {
                                                                        fill: none;
                                                                        stroke: #000;
                                                                        stroke-width: 2px
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <path id="svg_2" data-name="svg 2" class="cls-1" d="M22.53 16.61c0-7.1 4.35-9 9.75-9s9.75 1.9 9.75 9">
                                                            </path>
                                                            <path id="svg_4" data-name="svg 4" class="cls-1" d="M11.66 16.65h41.25V53.4H11.66z"></path>
                                                        </svg><span class="cart-link__bubble">
                                                            <span class="cart-link__bubble-num">0</span>
                                                        </span>
                                                    </span>
                                                    <span class="site-nav__icon-label small--hide icon__fallback-text">
                                                        Einkaufswagen
                                                    </span>
                                                </a>

                                                <button type="button" aria-controls="MobileNav" class="site-nav__link site-nav__link--icon medium-up--hide mobile-nav-trigger">
                                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-hamburger" viewbox="0 0 64 64">
                                                        <path class="cls-1" d="M7 15h51">.</path>
                                                        <path class="cls-1" d="M7 32h43">.</path>
                                                        <path class="cls-1" d="M7 49h51">.</path>
                                                    </svg>
                                                    <span class="icon__fallback-text">Seitennavigation</span>
                                                </button>
                                            </div>

                                            <div class="site-nav__close-cart">
                                                <button type="button" class="site-nav__link site-nav__link--icon js-close-header-cart">
                                                    <span>Schließen</span>
                                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewbox="0 0 64 64">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: none;
                                                                    stroke: #000;
                                                                    stroke-miterlimit: 10;
                                                                    stroke-width: 2px
                                                                }
                                                            </style>
                                                        </defs>
                                                        <path class="cls-1" d="M19 17.61l27.12 27.13m0-27.13L19 44.74">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="site-header__search-container">
                                <div class="page-width">
                                    <div class="site-header__search">
                                        <form action="/search" method="get" role="search" class="site-header__search-form" data-dark="false">
                                            <input type="hidden" name="type" value="product,article">
                                            <input type="hidden" name="options[prefix]" value="last">
                                            <input type="search" name="q" value="" placeholder="Suchen" class="site-header__search-input" aria-label="Suchen">
                                            <button type="submit" class="text-link site-header__search-btn site-header__search-btn--submit">
                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search" viewbox="0 0 64 64">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: none;
                                                                stroke: #000;
                                                                stroke-miterlimit: 10;
                                                                stroke-width: 2px
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="cls-1" d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42">
                                                    </path>
                                                </svg>
                                                <span class="icon__fallback-text">Suchen</span>
                                            </button>

                                            <button type="button" class="text-link site-header__search-btn site-header__search-btn--cancel">
                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewbox="0 0 64 64">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: none;
                                                                stroke: #000;
                                                                stroke-miterlimit: 10;
                                                                stroke-width: 2px
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="cls-1" d="M19 17.61l27.12 27.13m0-27.13L19 44.74">
                                                    </path>
                                                </svg>
                                                <span class="icon__fallback-text">Schließen</span>
                                            </button>
                                        </form>
                                        <button type="button" class="text-link site-header__search-btn site-header__search-btn--cancel">
                                            <span class="medium-up--hide"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewbox="0 0 64 64">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: none;
                                                                stroke: #000;
                                                                stroke-miterlimit: 10;
                                                                stroke-width: 2px
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="cls-1" d="M19 17.61l27.12 27.13m0-27.13L19 44.74">
                                                    </path>
                                                </svg></span>
                                            <span class="small--hide">Abbrechen</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-width site-header__drawers">
                            <div class="site-header__drawers-container">
                                <div class="site-header__drawer site-header__cart" id="HeaderCart">
                                    <div class="site-header__drawer-animate">
                                        <form action="/cart" method="post" novalidate="" data-location="header" class="cart__drawer-form">
                                            <div class="cart__scrollable">
                                                <div data-products=""></div>
                                                <div class="cart__item-row cart-recommendations" data-location="drawer">
                                                    <div class="h3 h3--mobile cart__recommended-title">Mehr parfumlys,
                                                        mehr sparen:</div>
                                                    <div class="new-grid product-grid scrollable-grid" data-view="small">
                                                        <div class="grid-item grid-product " data-product-handle="allien-world" data-product-id="7233940455619">
                                                            <div class="grid-item__content"><a href="../../../products/allien-world.html" class="grid-item__link">
                                                                    <div class="grid-product__image-wrap">
                                                                        <div class="grid-product__tags"></div>
                                                                        <div class="grid__image-ratio grid__image-ratio--square">
                                                                            <img class="lazyload grid__image-contain" data-src="//www.neness-shop.de/cdn/shop/files/182AC_21574842-1388-475e-9366-ca6775eec26d_{width}x.jpg?v=1691797892" data-widths="[160, 200, 280, 360, 540, 720, 900]" data-aspectratio="1.0" data-sizes="auto" alt="">
                                                                            <noscript>
                                                                                <img class="grid-product__image lazyloaded" src="../../../cdn/shop/files/182AC_21574842-1388-475e-9366-ca6775eec26d_400x.jpg?v=1691797892" alt="">
                                                                            </noscript>
                                                                        </div>
                                                                        <div class="grid-product__secondary-image small--hide">
                                                                            <img class="lazyload" data-src="//www.neness-shop.de/cdn/shop/files/N182-nuty_{width}x.png?v=1691797892" data-widths="[360, 540, 720, 1000]" data-aspectratio="1.0" data-sizes="auto" alt="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="grid-item__meta">
                                                                        <div class="grid-item__meta-main">
                                                                            <div class="grid-product__title">ALLIEN
                                                                                WORLD - 182</div>
                                                                        </div>
                                                                        <div class="loox-rating" data-id="7233940455619" data-rating="4.8" data-raters="341"></div>
                                                                        <div class="grid-item__meta-secondary">
                                                                            <div class="grid-product__price"><span class="grid-product__price--current"><span aria-hidden="true">
                                                                                        <?php $string = $product['price'];
                                                                                        if (strpos($string, '.') !== false) {
                                                                                            list($part1, $part2) = explode(".", $string);
                                                                                        } else {
                                                                                            $part1 = $string;
                                                                                            $part2 = "";
                                                                                        }
                                                                                        ?>
                                                                                        €
                                                                                        <?php echo $part1 ?><sup>
                                                                                            <?php echo $part2 ?>
                                                                                        </sup>
                                                                                    </span>
                                                                                    <span class="visually-hidden">€
                                                                                        <?php if ($product['price']) ?>
                                                                                    </span>
                                                                                </span>
                                                                                <div class="product__unit-price">€
                                                                                    <?php echo $product['container'] ?>
                                                                                    ml

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="grid-item grid-product " data-product-handle="sou-vag" data-product-id="7962040533258">
                                                            <div class="grid-item__content"><a href="../../../products/sou-vag.html" class="grid-item__link">
                                                                    <div class="grid-product__image-wrap">
                                                                        <div class="grid-product__tags"></div>
                                                                        <div class="grid__image-ratio grid__image-ratio--square">
                                                                            <img class="lazyload grid__image-contain" data-src="//www.neness-shop.de/cdn/shop/files/N114-nuty_{width}x.png?v=1690111395" data-widths="[160, 200, 280, 360, 540, 720, 900]" data-aspectratio="1.0" data-sizes="auto" alt="">
                                                                            <noscript>
                                                                                <img class="grid-product__image lazyloaded" src="../../../cdn/shop/files/N114-nuty_400x.png?v=1690111395" alt="">
                                                                            </noscript>
                                                                        </div>
                                                                        <div class="grid-product__secondary-image small--hide">
                                                                            <img class="lazyload" data-src="//www.neness-shop.de/cdn/shop/files/N114_{width}x.png?v=1692608163" data-widths="[360, 540, 720, 1000]" data-aspectratio="1.0" data-sizes="auto" alt="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="grid-item__meta">
                                                                        <div class="grid-item__meta-main">
                                                                            <div class="grid-product__title">CRAZY MAN -
                                                                                114</div>
                                                                        </div>
                                                                        <div class="loox-rating" data-id="7962040533258" data-rating="4.8" data-raters="88"></div>
                                                                        <div class="grid-item__meta-secondary">
                                                                            <div class="grid-product__price"><span class="grid-product__price--current"><span aria-hidden="true">€9<sup>90</sup></span>
                                                                                    <span class="visually-hidden">€9,90</span>
                                                                                </span>
                                                                                <div class="product__unit-price">
                                                                                    €30,00/100
                                                                                    ml

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="grid-item grid-product " data-product-handle="libre" data-product-id="7232258965699">
                                                            <div class="grid-item__content"><a href="../../../products/libre.html" class="grid-item__link">
                                                                    <div class="grid-product__image-wrap">
                                                                        <div class="grid-product__tags"></div>
                                                                        <div class="grid__image-ratio grid__image-ratio--square">
                                                                            <img class="lazyload grid__image-contain" data-src="//www.neness-shop.de/cdn/shop/files/N195-nuty_{width}x.png?v=1690225508" data-widths="[160, 200, 280, 360, 540, 720, 900]" data-aspectratio="1.0" data-sizes="auto" alt="">
                                                                            <noscript>
                                                                                <img class="grid-product__image lazyloaded" src="../../../cdn/shop/files/N195-nuty_400x.png?v=1690225508" alt="">
                                                                            </noscript>
                                                                        </div>
                                                                        <div class="grid-product__secondary-image small--hide">
                                                                            <img class="lazyload" data-src="//www.neness-shop.de/cdn/shop/files/N195_{width}x.png?v=1692610176" data-widths="[360, 540, 720, 1000]" data-aspectratio="1.0" data-sizes="auto" alt="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="grid-item__meta">
                                                                        <div class="grid-item__meta-main">
                                                                            <div class="grid-product__title">LIBRESE -
                                                                                195</div>
                                                                        </div>
                                                                        <div class="loox-rating" data-id="7232258965699" data-rating="4.7" data-raters="95"></div>
                                                                        <div class="grid-item__meta-secondary">
                                                                            <div class="grid-product__price"><span class="grid-product__price--current"><span aria-hidden="true">€9<sup>90</sup></span>
                                                                                    <span class="visually-hidden">€9,90</span>
                                                                                </span>
                                                                                <div class="product__unit-price">
                                                                                    €30,00/100
                                                                                    ml

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cart__footer">
                                                <div class="cart__item-sub cart__item-row cart__item--subtotal">
                                                    <div>Zwischensumme</div>
                                                    <div data-subtotal="">€0,00</div>
                                                </div>

                                                <div data-discounts=""></div>



                                                <div class="cart__item-row cart__checkout-wrapper payment-buttons">
                                                    <button type="submit" name="checkout" data-terms-required="false" class="btn cart__checkout">
                                                        Jetzt sicher zur Kasse
                                                    </button>


                                                </div>

                                                <div class="cart__item-row--footer text-center">
                                                    <small>inkl. MwSt. &amp; zzgl. Versandkosten</small>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="site-header__cart-empty">Ihr Einkaufswagen ist im Moment leer.</div>
                                    </div>
                                </div>

                                <div class="site-header__drawer site-header__mobile-nav medium-up--hide" id="MobileNav">
                                    <div class="site-header__drawer-animate">
                                        <div class="slide-nav__wrapper" data-level="1">
                                            <ul class="slide-nav">
                                                <li class="slide-nav__item"><a href="../../../index.php" class="slide-nav__link"><span>Startseite</span>
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewbox="0 0 284.49 498.98">
                                                            <path d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                                                            </path>
                                                        </svg>
                                                    </a></li>
                                                <li class="slide-nav__item"><a href="../../alles-in-einem" class="slide-nav__link">
                                                        <div class="slide-nav__image">
                                                            <img src="../../../cdn/shop/files/182AC_21574842-1388-475e-9366-ca6775eec26d_400x.jpg?v=1691797892" alt="Alle Bestseller">
                                                        </div>
                                                        <span>Bestseller</span>
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewbox="0 0 284.49 498.98">
                                                            <path d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                                                            </path>
                                                        </svg>
                                                    </a></li>
                                                <li class="slide-nav__item"><a href="../../fur-sie" class="slide-nav__link">
                                                        <div class="slide-nav__image">
                                                            <img src="../../../cdn/shop/files/182AC_21574842-1388-475e-9366-ca6775eec26d_400x.jpg?v=1691797892" alt="Für Sie">
                                                        </div>
                                                        <span>Damendüfte</span>
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewbox="0 0 284.49 498.98">
                                                            <path d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                                                            </path>
                                                        </svg>
                                                    </a></li>
                                                <li class="slide-nav__item"><a href="../../unisex" class="slide-nav__link">
                                                        <div class="slide-nav__image">
                                                            <img src="../../../cdn/shop/files/N244-nuty_400x.png?v=1691797939" alt="Unisex">
                                                        </div>
                                                        <span>Unisex</span>
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewbox="0 0 284.49 498.98">
                                                            <path d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                                                            </path>
                                                        </svg>
                                                    </a></li>
                                                <li class="slide-nav__item"><a href="../../fur-ihn" class="slide-nav__link">
                                                        <div class="slide-nav__image">
                                                            <img src="../../../cdn/shop/files/N114-nuty_400x.png?v=1690111395" alt="Für Ihn">
                                                        </div>
                                                        <span>Herrendüfte</span>
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewbox="0 0 284.49 498.98">
                                                            <path d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                                                            </path>
                                                        </svg>
                                                    </a></li>
                                                <li class="slide-nav__item"><a href="../../proben" class="slide-nav__link">
                                                        <div class="slide-nav__image">
                                                            <img src="../../../cdn/shop/files/2S4A8601_AO_k_400x.jpg?v=1687636330" alt="Proben">
                                                        </div>
                                                        <span>Proben</span>
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewbox="0 0 284.49 498.98">
                                                            <path d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                                                            </path>
                                                        </svg>
                                                    </a></li>
                                                <li class="slide-nav__item"><a href="../../100-parfume-oil" class="slide-nav__link">
                                                        <div class="slide-nav__image">
                                                            <img src="../../../cdn/shop/products/montaz_moonlight_AO_400x.jpg?v=1679648244" alt="Parfümöl">
                                                        </div>
                                                        <span>Parfümöl</span>
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewbox="0 0 284.49 498.98">
                                                            <path d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                                                            </path>
                                                        </svg>
                                                    </a></li>
                                                <li class="slide-nav__item"><a href="../../365days-dufte" class="slide-nav__link">
                                                        <div class="slide-nav__image">
                                                            <img src="../../../cdn/shop/products/damski-opakowanie-butelka2_400x.png?v=1669808350" alt="365DAYS Düfte">
                                                        </div>
                                                        <span>365DAYS DÜFTE</span>
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewbox="0 0 284.49 498.98">
                                                            <path d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                                                            </path>
                                                        </svg>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="SearchResultsWrapper" class="site-header__search-results hide">
                            <div id="PredictiveWrapper" class="hide" data-image-size="square">
                                <div class="page-width">
                                    <div id="PredictiveResults" class="predictive-result__layout"></div>
                                    <div class="text-center predictive-results__footer">
                                        <button type="button" class="btn btn--small" data-predictive-search-button="">
                                            <small>
                                                Mehr sehen
                                            </small>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
            <script>
                document.addEventListener("startasyncloading", function() {
                    document.querySelectorAll("script[data-src]").forEach(a => {
                        datasrc = a.dataset.src, null != datasrc && (a.src = datasrc), delete a.dataset.src
                    })
                });
            </script>



        </div>
        <div id="shopify-section-newsletter-popup" class="shopify-section index-section--hidden">



            <div id="NewsletterPopup-newsletter-popup" class="modal modal--square modal--mobile-friendly" data-section-id="newsletter-popup" data-section-type="newsletter-popup" data-has-reminder="true" data-delay-days="30" data-test-mode="false" data-delay-seconds="10" data-enabled="false">
                <div class="modal__inner">
                    <div class="modal__centered">
                        <div class="modal__centered-content modal__centered-content--padded color-scheme-1 ">
                            <div class="scheme-none"></div>
                            <div class="newsletter-popup ">



                                <div class="newsletter-popup__content">
                                    <div class="h2">Member sein Lohnt sich !</div>
                                    <div class="rte">
                                        <div class="enlarge-text">
                                            <p>Sichere dir exklusive Angebote und 15% Rabatt auf deinen ersten Einkauf.
                                            </p>
                                        </div>
                                    </div>
                                    <form method="post" action="/contact#newsletter-newsletter-popup" id="newsletter-newsletter-popup" accept-charset="UTF-8" class="contact-form">
                                        <input type="hidden" name="form_type" value="customer"><input type="hidden" name="utf8" value="✓">
                                        <label for="Email-newsletter-popup" class="hidden-label">Melden Sie sich für
                                            unsere Mailingliste an</label>
                                        <input type="hidden" name="contact[tags]" value="prospect,newsletter">
                                        <input type="hidden" name="contact[context]" value="popup">
                                        <div class="input-group newsletter__input-group">
                                            <input type="email" value="" placeholder="Melden Sie sich für unsere Mailingliste an" name="contact[email]" id="Email-newsletter-popup" class="input-group-field newsletter__input" autocorrect="off" autocapitalize="off">
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn" name="commit" aria-label="Abonnieren">
                                                    <span class="form__submit--large">Abonnieren</span>
                                                    <span class="form__submit--small">
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-arrow-right" viewbox="0 0 50 15">
                                                            <path d="M0 9.63V5.38h35V0l15 7.5L35 15V9.63z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>




                                </div>

                            </div>
                        </div>

                        <button type="button" class="btn btn--circle btn--icon modal__close js-modal-close">
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewbox="0 0 64 64">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #000;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px
                                        }
                                    </style>
                                </defs>
                                <path class="cls-1" d="M19 17.61l27.12 27.13m0-27.13L19 44.74"></path>
                            </svg>
                            <span class="icon__fallback-text">"Schließen (Esc)"</span>
                        </button>
                    </div>
                </div>
            </div>




            <newsletter-reminder data-section-id="newsletter-popup" data-enabled="false" data-delay-days="30" data-delay-seconds="10">
                <div class="newsletter-reminder__content color-scheme-1">
                    <div class="scheme-none"></div>
                    <div class="newsletter-reminder__message h3" data-message="">
                        Get 10% off
                    </div>
                </div>

                <button type="button" data-close-button="" class="btn btn--circle btn--icon modal__close js-modal-close">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewbox="0 0 64 64">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #000;
                                    stroke-miterlimit: 10;
                                    stroke-width: 2px
                                }
                            </style>
                        </defs>
                        <path class="cls-1" d="M19 17.61l27.12 27.13m0-27.13L19 44.74"></path>
                    </svg>
                    <span class="icon__fallback-text">"Schließen (Esc)"</span>
                </button>
            </newsletter-reminder>








        </div>
        <?php if ($products) { ?>
            <main class="main-content" id="MainContent">
                <div id="shopify-section-template--17917053370634__main" class="shopify-section">

                    <div id="ProductSection-template--17917053370634__main-8209898701066" class="product-section" data-section-id="template--17917053370634__main" data-section-type="product" data-product-id="8209898701066" data-product-handle="mars-roll-on-100-parfumol" data-product-title="MARS - 100% Parfümöl" data-history="true" data-modal="false">
                        <div class="page-content page-content--product">
                            <div class="page-width">

                                <div class="product-single__header--mobile medium-up--hide">
                                    <h1 class="h2 product-single__title">
                                        < </h1>
                                </div>

                                <div class="product-grid__container grid grid--product-images--partial">
                                    <div class="grid__item medium-up--one-half product-single__sticky">
                                        <div data-product-images="" data-zoom="true" data-has-slideshow="true">
                                            <div class="product__photos product__photos-template--17917053370634__main product__photos--beside">

                                                        <div class="product__main-photos" data-product-single-media-group="">
                                                            <div data-product-photos=""
                                                                class="product-slideshow flickity-enabled is-draggable"
                                                                id="ProductPhotos-template--17917053370634__main" tabindex="0">
                                                                <div class="flickity-viewport"
                                                                    style="height: 602px; touch-action: pan-y;">
                                                                    <div class="flickity-slider"
                                                                        style="left: 0px; transform: translateX(-400%);">
                                                                        <div class="product-main-slide starting-slide"
                                                                            data-index="0"
                                                                            style="position: absolute; left: 0px; transform: translateX(0%);"
                                                                            aria-hidden="true" tabindex="-1">

                                                                            <div data-product-image-main=""
                                                                                class="product-image-main" data-size="square">
                                                                                <div class="image-wrap"
                                                                                    style="height: 0; padding-bottom: 100.0%;">
                                                                                    <img class="photoswipe__image lazyautosizes lazyloaded"
                                                                                        srcset="<?php echo $img[0] ?> 1080w">

                                                                                    <noscript>
                                                                                        <img class="lazyloaded"
                                                                                            src="//www.neness-shop.de/cdn/shop/files/182AC_21574842-1388-475e-9366-ca6775eec26d_800x.jpg?v=1691797892"
                                                                                            alt="ALLIEN WORLD - 182">
                                                                                    </noscript><button type="button"
                                                                                        class="btn btn--secondary btn--circle js-photoswipe__zoom product__photo-zoom"
                                                                                        aria-label="Zoom">
                                                                                        <svg aria-hidden="true" focusable="false"
                                                                                            role="presentation"
                                                                                            class="icon icon-search"
                                                                                            viewBox="0 0 64 64">
                                                                                            <defs>
                                                                                                <style>
                                                                                                    .cls-1 {
                                                                                                        fill: none;
                                                                                                        stroke: #000;
                                                                                                        stroke-miterlimit: 10;
                                                                                                        stroke-width: 2px
                                                                                                    }
                                                                                                </style>
                                                                                            </defs>
                                                                                            <path class="cls-1"
                                                                                                d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="product-main-slide secondary-slide"
                                                                            data-index="1" aria-hidden="true"
                                                                            style="position: absolute; left: 0px; transform: translateX(100%);">

                                                                            <div data-product-image-main=""
                                                                                class="product-image-main" data-size="square">
                                                                                <div class="image-wrap"
                                                                                    style="height: 0; padding-bottom: 100.0%;"><img
                                                                                        class="photoswipe__image lazyautosizes lazyloaded"
                                                                                        sizes="602px"
                                                                                        srcset="<?php echo $img[0] ?> 1080w">

                                                                                    <noscript>
                                                                                        <img class="lazyloaded"
                                                                                            src="//www.neness-shop.de/cdn/shop/files/N182-nuty_800x.png?v=1691797892"
                                                                                            alt="ALLIEN WORLD - 182">
                                                                                    </noscript><button type="button"
                                                                                        class="btn btn--secondary btn--circle js-photoswipe__zoom product__photo-zoom"
                                                                                        aria-label="Zoom">
                                                                                        <svg aria-hidden="true" focusable="false"
                                                                                            role="presentation"
                                                                                            class="icon icon-search"
                                                                                            viewBox="0 0 64 64">
                                                                                            <defs>
                                                                                                <style>
                                                                                                    .cls-1 {
                                                                                                        fill: none;
                                                                                                        stroke: #000;
                                                                                                        stroke-miterlimit: 10;
                                                                                                        stroke-width: 2px
                                                                                                    }
                                                                                                </style>
                                                                                            </defs>
                                                                                            <path class="cls-1"
                                                                                                d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="product-main-slide secondary-slide"
                                                                            data-index="2" aria-hidden="true"
                                                                            style="position: absolute; left: 0px; transform: translateX(200%);">

                                                                            <div data-product-image-main=""
                                                                                class="product-image-main" data-size="square">
                                                                                <div class="image-wrap"
                                                                                    style="height: 0; padding-bottom: 100.0%;"><img
                                                                                        class="photoswipe__image lazyautosizes lazyloaded"
                                                                                        data-aspectratio="1.0" data-sizes="auto"
                                                                                        sizes="602px"
                                                                                        srcset="<?php echo $img[0] ?> 1080w">

                                                                                    <noscript>
                                                                                        <img class="lazyloaded"
                                                                                            src="//www.neness-shop.de/cdn/shop/files/N182_800x.png?v=1692607129"
                                                                                            alt="ALLIEN WORLD - 182">
                                                                                    </noscript><button type="button"
                                                                                        class="btn btn--secondary btn--circle js-photoswipe__zoom product__photo-zoom"
                                                                                        aria-label="Zoom">
                                                                                        <svg aria-hidden="true" focusable="false"
                                                                                            role="presentation"
                                                                                            class="icon icon-search"
                                                                                            viewBox="0 0 64 64">
                                                                                            <defs>
                                                                                                <style>
                                                                                                    .cls-1 {
                                                                                                        fill: none;
                                                                                                        stroke: #000;
                                                                                                        stroke-miterlimit: 10;
                                                                                                        stroke-width: 2px
                                                                                                    }
                                                                                                </style>
                                                                                            </defs>
                                                                                            <path class="cls-1"
                                                                                                d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="product-main-slide secondary-slide"
                                                                            data-index="3"
                                                                            style="position: absolute; left: 0px; transform: translateX(300%);"
                                                                            tabindex="-1" aria-hidden="true">

                                                                            <div data-product-image-main=""
                                                                                class="product-image-main" data-size="square">
                                                                                <div class="image-wrap"
                                                                                    style="height: 0; padding-bottom: 85.33333333333333%;">
                                                                                    <img class="photoswipe__image lazyautosizes lazyloaded"
                                                                                        sizes="602px"
                                                                                        srcset="<?php echo $img[0] ?> 1080w">

                                                                                    <noscript>
                                                                                        <img class="lazyloaded"
                                                                                            src="<?php echo $img[0] ?>"
                                                                                            alt="ALLIEN WORLD - 182">
                                                                                    </noscript><button type="button"
                                                                                        class="btn btn--secondary btn--circle js-photoswipe__zoom product__photo-zoom"
                                                                                        aria-label="Zoom">
                                                                                        <svg aria-hidden="true" focusable="false"
                                                                                            role="presentation"
                                                                                            class="icon icon-search"
                                                                                            viewBox="0 0 64 64">
                                                                                            <defs>
                                                                                                <style>
                                                                                                    .cls-1 {
                                                                                                        fill: none;
                                                                                                        stroke: #000;
                                                                                                        stroke-miterlimit: 10;
                                                                                                        stroke-width: 2px
                                                                                                    }
                                                                                                </style>
                                                                                            </defs>
                                                                                            <path class="cls-1"
                                                                                                d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="product-main-slide secondary-slide is-selected"
                                                                            data-index="4"
                                                                            style="position: absolute; left: 0px; transform: translateX(400%);"
                                                                            tabindex="0">

                                                                            <div data-product-image-main=""
                                                                                class="product-image-main" data-size="square">
                                                                                <div class="image-wrap"
                                                                                    style="height: 0; padding-bottom: 85.33333333333333%;">
                                                                                    <img class="photoswipe__image lazyautosizes lazyloaded"
                                                                                        data-sizes="auto"
                                                                                        srcset="<?php echo $img[0] ?> 1080w">

                                                                                    <noscript>
                                                                                        <img class="lazyloaded"
                                                                                            src="//www.neness-shop.de/cdn/shop/files/WhatsAppImage2023-06-06at19.38.54_9d6e72d7-7330-47f6-b362-493ecc1c2b2f_800x.jpg?v=1692607129"
                                                                                            alt="ALLIEN WORLD - 182">
                                                                                    </noscript><button type="button"
                                                                                        class="btn btn--secondary btn--circle js-photoswipe__zoom product__photo-zoom"
                                                                                        aria-label="Zoom">
                                                                                        <svg aria-hidden="true" focusable="false"
                                                                                            role="presentation"
                                                                                            class="icon icon-search"
                                                                                            viewBox="0 0 64 64">
                                                                                            <defs>
                                                                                                <style>
                                                                                                    .cls-1 {
                                                                                                        fill: none;
                                                                                                        stroke: #000;
                                                                                                        stroke-miterlimit: 10;
                                                                                                        stroke-width: 2px
                                                                                                    }
                                                                                                </style>
                                                                                            </defs>
                                                                                            <path class="cls-1"
                                                                                                d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ol class="flickity-page-dots">
                                                                    <li class="dot" aria-label="Page dot 1"></li>
                                                                    <li class="dot" aria-label="Page dot 2"></li>
                                                                    <li class="dot" aria-label="Page dot 3"></li>
                                                                    <li class="dot" aria-label="Page dot 4"></li>
                                                                    <li class="dot is-selected" aria-label="Page dot 5"
                                                                        aria-current="step"></li>
                                                                </ol>
                                                            </div>
                                                        </div>

                                                        <div data-product-thumbs=""
                                                            class="product__thumbs product__thumbs--beside product__thumbs-placement--left small--hide"
                                                            data-position="beside" data-arrows="false">
                                                            <div class="product__thumbs--scroller">
                                                                <div class="product__thumb-item" data-index="0">
                                                                    <a href="<?php echo $img[0] ?>" data-product-thumb=""
                                                                        class="product__thumb js-no-transition" data-index="0"
                                                                        data-id="37182818681098">
                                                                        <div class="image-wrap"
                                                                            style="height: 0; padding-bottom: 100.0%;"><img
                                                                                class="lazyautosizes lazyloaded"
                                                                                data-aspectratio="1.0" data-sizes="auto"
                                                                                srcset="<?php echo $img[0] ?> 1080w">
                                                                            <noscript>
                                                                                <img class="lazyloaded" src="<?php echo $img[0] ?>"
                                                                                    alt="ALLIEN WORLD - 182">
                                                                            </noscript>
                                                                        </div>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script type="application/json" id="ModelJson-template--17917053370634__main">
                                                                                                    []
                                                                                                </script>
                                            </div>
                                            <div
                                                class="product-grid__content product-single__sticky grid__item medium-up--one-half">

                                        <div class="product-single__meta">
                                            <div class="product-block product-block--header product-single__header small--hide">
                                                <h1 class="h2 product-single__title">
                                                    <?php echo $products['title'] ?>
                                                </h1>
                                            </div>

                                            <div data-product-blocks="">
                                                <div id="shopify-block-loox-rating" class="shopify-block shopify-app-block">
                                                    <a href="#looxReviews">
                                                        
                                                    </a>


                                                        </div>
                                                        <div class="product-block"></div>
                                                        <div class="product-block product-block--price">
                                                            <label class="variant__label"
                                                                for="ProductPrice-template--17917053370634__main">
                                                                Preis
                                                            </label><span id="PriceA11y-template--17917053370634__main"
                                                                class="visually-hidden">Normaler Preis</span><span
                                                                data-product-price="" class="product__price"><span
                                                                    aria-hidden="true">€25<sup>90</sup></span>
                                                                <span class="visually-hidden">€25,90</span>
                                                            </span><span data-save-price=""
                                                                class="product__price-savings hide"></span>
                                                            <div data-unit-price-wrapper="" class="product__unit-price"><span
                                                                    data-unit-price=""><span
                                                                        aria-hidden="true">€259<sup>00</sup></span>
                                                                    <span class="visually-hidden">€259,00</span>
                                                                </span>/<span data-unit-base="">100
                                                                    ml
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-block product-block--sales-point">
                                                            <ul class="sales-points">
                                                                <li class="sales-point">
                                                                    <span class="icon-and-text">
                                                                        <span class="icon icon--inventory"></span>
                                                                        <span data-product-inventory="" data-threshold="10">Auf
                                                                            Lager - 2-3 Tagen bei dir
                                                                        </span>
                                                                    </span>
                                                                </li>
                                                                <li data-incoming-inventory="" class="sales-point hide">
                                                                    <span class="icon-and-text">
                                                                        <span class="icon icon--inventory"></span>
                                                                        <span class="js-incoming-text">Inventar auf dem Weg
                                                                        </span>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <script>
                                                            // Store inventory quantities in JS because they're no longer
                                                            // available directly in JS when a variant changes.
                                                            // Have an object that holds all potential products so it works
                                                            // with quick view or with multiple featured products.
                                                            window.inventories = window.inventories || {};
                                                            window.inventories['8209898701066'] = {};

                                                    window.inventories['8209898701066'][44458038427914] = {
                                                        'quantity': 105,
                                                        'policy': 'deny',
                                                        'incoming': 'false',
                                                        'next_incoming_date': null
                                                    };
                                                </script>


                                                <div data-product-id="8209898701066" class="hide js-product-inventory-data" aria-hidden="true">
                                                    <div class="js-variant-inventory-data" data-id="44458038427914" data-quantity="105" data-policy="deny" data-incoming="false" data-date="">
                                                    </div>
                                                </div>
                                                <div class="product-block product-block--sales-point">
                                                    <ul class="sales-points">
                                                        <li class="sales-point">
                                                            <span class="icon-and-text">
                                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-ribbon" viewbox="0 0 64 64">
                                                                    <defs>
                                                                        <style>
                                                                            .a {
                                                                                fill: none;
                                                                                stroke: #000;
                                                                                stroke-width: 2px
                                                                            }
                                                                        </style>
                                                                    </defs>
                                                                    <path class="a" d="M28.57 42.31l-8.36 13.07-2.6-7.17-7.61.65 8.35-13.07a17.05 17.05 0 0 0 8.12 5.94 17.3 17.3 0 0 0 1.74.5zM54 48.86l-7.61-.65-2.61 7.17-8.36-13.07.37-.08a16.4 16.4 0 0 0 1.73-.5 17 17 0 0 0 8.12-5.93z">
                                                                    </path>
                                                                    <path class="a" d="M49 25.64a16.79 16.79 0 0 1-3.14 9.85 3.55 3.55 0 0 1-.23.31 17 17 0 0 1-8.12 5.93 16.4 16.4 0 0 1-1.73.5l-.37.08a16.74 16.74 0 0 1-3.42.35 16.91 16.91 0 0 1-3.43-.35l-.36-.08a17.3 17.3 0 0 1-1.74-.5 17.05 17.05 0 0 1-8.12-5.94c-.07-.09-.15-.19-.22-.3A16.86 16.86 0 0 1 15 25.64a17 17 0 0 1 34 0z">
                                                                    </path>
                                                                    <path class="a" d="M36.09 27.78l.96 5.63L32 30.75l-5.05 2.66.96-5.63-4.09-3.98 5.65-.82L32 17.86l2.53 5.12 5.64.82-4.08 3.98z">
                                                                    </path>
                                                                </svg>

                                                                <span>Langanhaltende Düfte</span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-block product-block--sales-point">
                                                    <ul class="sales-points">
                                                        <li class="sales-point">
                                                            <span class="icon-and-text">
                                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-leaf" viewbox="0 0 64 64">
                                                                    <defs>
                                                                        <style>
                                                                            .a {
                                                                                fill: none;
                                                                                stroke: #000;
                                                                                stroke-miterlimit: 10;
                                                                                stroke-width: 2px
                                                                            }
                                                                        </style>
                                                                    </defs>
                                                                    <path class="a" d="M52 11L13 50M35 13v15h16"></path>
                                                                    <path class="a" d="M52 11c6 24-16.72 47.29-33 32C7 22 29 10 52 11z">
                                                                    </path>
                                                                </svg>

                                                                <span>100% Vegan</span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-block product-block--sales-point">
                                                    <ul class="sales-points">
                                                        <li class="sales-point">
                                                            <span class="icon-and-text">
                                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-heart" viewbox="0 0 64 64">
                                                                    <defs>
                                                                        <style>
                                                                            .a {
                                                                                fill: none;
                                                                                stroke: #000;
                                                                                stroke-width: 2px
                                                                            }
                                                                        </style>
                                                                    </defs>
                                                                    <path class="a" d="M51.27 15.05a13 13 0 0 0-18.44 0l-.83.83-.83-.83a13 13 0 0 0-18.44 18.44l.83.83L32 52.77l18.44-18.45.83-.83a13 13 0 0 0 0-18.44z">
                                                                    </path>
                                                                </svg>

                                                                <span>Tierversuchsfrei</span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-block product-block--sales-point">
                                                    <ul class="sales-points">
                                                        <li class="sales-point">
                                                            <span class="icon-and-text">
                                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-circle-checkmark" viewbox="0 0 64 64">
                                                                    <defs>
                                                                        <style>
                                                                            .a {
                                                                                fill: none;
                                                                                stroke: #000;
                                                                                stroke-width: 2px
                                                                            }
                                                                        </style>
                                                                    </defs>
                                                                    <path class="a" d="M52.68 24.48A22 22 0 1 1 47 15.93M21 32l8.5 8.5L57 13">
                                                                    </path>
                                                                </svg>

                                                                <span>Kauf auf Rechnung</span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-block">
                                                    <div class="product-block">
                                                        <form method="post" action="/cart/add" id="AddToCartForm-template--17917053370634__main-8209898701066" accept-charset="UTF-8" class="product-single__form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product"><input type="hidden" name="utf8" value="✓">
                                                            <div class="product__policies rte">inkl. MwSt.
                                                                zzgl. <a href='../../../policies/shipping-policy.html'>Versandkosten</a>
                                                            </div>
                                                            <a href="../php/add_cart.php"></a>
                                                            <button type="button" name="<?php echo $name ?>" data-add-to-cart="" id="add_product_cart" class="btn btn--full add-to-cart">

                                                                <span data-add-to-cart-text="" data-default-text="In den Warenkorb">
                                                                    In den Warenkorb
                                                                </span>
                                                            </button>
                                                            <script>
                                                                const button_add_cart = document.getElementById('add_product_cart');

                                                                button_add_cart.addEventListener('click', () => {


                                                                    $.ajax({
                                                                        url: "../../../add_cart.php",
                                                                        type: 'POST',

                                                                        data: {
                                                                            cart: '<?php echo $products['name'] ?>'
                                                                        },

                                                                        success: function(data) {
                                                                            console.log(data)
                                                                            if (data != 'Success') {
                                                                                console.log('Error')
                                                                            }
                                                                        },
                                                                        error: function(error) {
                                                                            console.log(error)


                                                                        }
                                                                    })
                                                                });
                                                            </script>
                                                            <div class="shopify-payment-terms product__policies"></div>

                                                            <select name="id" data-product-select="" class="product-single__variants no-js">
                                                                <option selected="selected" value="44458038427914">
                                                                    Default Title - €25,90 EUR
                                                                </option>
                                                            </select>

                                                            <textarea data-variant-json="" class="hide" aria-hidden="true" aria-label="Product JSON">
                                                                [{"id":44458038427914,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"N246","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"MARS - 100% Parfümöl","public_title":null,"options":["Default Title"],"price":2590,"weight":10,"compare_at_price":null,"inventory_management":"shopify","barcode":"","unit_price":25900,"unit_price_measurement":{"measured_type":"volume","quantity_value":"10.0","quantity_unit":"ml","reference_value":100,"reference_unit":"ml"},"requires_selling_plan":false,"selling_plan_allocations":[]}]
                                                              </textarea>
                                                        </form>
                                                    </div>
                                                    <div data-store-availability-holder="" data-product-name="MARS - 100% Parfümöl" data-base-url="https://www.neness-shop.de/"></div>
                                                </div>
                                                <div class="product-block">
                                                    <div class="rte">

                                                                <meta charset="utf-8">
                                                                <p>Unser Parfümöl <strong>MARS</strong> ist eine exquisite
                                                                    Kombination aus erdigen, holzigen und würzigen Noten, die ein
                                                                    luxuriöses und unvergessliches Dufterlebnis bieten. Hier sind
                                                                    die Duftnoten in Stichpunkten:</p>
                                                                <ul>
                                                                    <li>
                                                                        <strong>Kopfnoten:</strong> Zistrose, Rosmarin, Kardamom und
                                                                        brasilianisches Rosenholz
                                                                    </li>
                                                                    <li>
                                                                        <strong>Herznoten:</strong> Oud, Patschuli und Vetiver
                                                                    </li>
                                                                    <li>
                                                                        <strong>Basisnoten:</strong> Tonkabohne, Ambra und
                                                                        Sandelholz
                                                                    </li>
                                                                </ul>
                                                                <p>Die Mischung aus diesen reichen und intensiven Noten schafft ein
                                                                    einzigartiges und unwiderstehliches Parfüm, das Ihre Sinne
                                                                    fesseln wird. Unsere Parfümöle sind alle aus hochwertigen,
                                                                    natürlichen Ölen hergestellt und bieten ein lang anhaltendes
                                                                    Dufterlebnis ohne die Austrocknung oder Reizung der Haut, die
                                                                    oft mit Alkohol-basierten Düften verbunden sind. Entdecken Sie
                                                                    unser Parfümöl und tauchen Sie ein in eine Welt voller
                                                                    Raffinesse und Eleganz.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        #shopify-section-template--17917053370634__main button {
                            background-color: black;
                        }
                    </style>
                </div>
                <div id="shopify-section-template--17917053370634__7b8cb3e7-42f1-4d22-925d-669b0128e77c" class="shopify-section index-section">
                    <div class="text-with-icons" data-section-id="template--17917053370634__7b8cb3e7-42f1-4d22-925d-669b0128e77c" data-section-type="text-with-icons">
                        <div class="page-width">
                            <div class="
          text-with-icons__title
          section-header">
                                <h2 class="text-center">DAS MACHT NENESS BESONDERS</h2>
                            </div>
                            <div class="
        text-with-icons__blocks
        has-3-per-row" data-block-count="3">

                                <div class="text-with-icons__block text-center">
                                    <div class="text-with-icons__block-icon">

                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-tcwi-charity" viewbox="0 0 100 100">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: none;
                                                        stroke: #000;
                                                        stroke-width: 2px
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a" d="M63.41 68l21-10.58a4.16 4.16 0 0 1 5.67 2 4.17 4.17 0 0 1-1.93 5.39L54 82a3.35 3.35 0 0 1-2.16.25L39 75.82l-7.31 3.06M22.76 86.67L9.6 55.92l10.24-4.64 13.17 30.75-10.25 4.64z">
                                            </path>
                                            <path class="a" d="M23.17 58.17l8.79-4a9.51 9.51 0 0 1 6.88-.37l22.25 7.31A4.52 4.52 0 0 1 63.41 68a4.51 4.51 0 0 1-5 1.77L43.8 65.32M79.37 16.94a12.34 12.34 0 0 0-17.44 0l-.79.79-.78-.79a12.34 12.34 0 1 0-17.44 17.45l.78.78 17.44 17.45 17.45-17.45.78-.78a12.34 12.34 0 0 0 0-17.45z">
                                            </path>
                                        </svg>

                                    </div>
                                    <div class="text-with-icons__block-title">
                                        <h3>Langanhaltend</h3>
                                    </div>
                                    <div class="text-with-icons__block-text">

                                    </div>
                                </div>

                                <div class="text-with-icons__block text-center">
                                    <div class="text-with-icons__block-icon">

                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-tcwi-plant" viewbox="0 0 100 100">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: none;
                                                        stroke: #000;
                                                        stroke-width: 2px
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a" d="M15.33 86.58h69.34s-30.67-40.37-69.34 0zM43.15 46.69s9 8.83 9.27 22M82.06 13.43s-27.38-1.32-25.37 25.16c0 0 23 5.54 25.37-25.16zM82.06 13.43L56.69 38.59M63.19 32.17l13.16-.45M70.05 25.35l9.7-.34M63.19 32.17l.45-13.07M70.05 25.35l.34-9.91M50.64 59.11a32.68 32.68 0 0 1 6-20.52M18 21.31S16.67 48.7 43.15 46.69c0 0 5.54-23-25.15-25.38zM17.99 21.31l25.16 25.38M36.73 40.19l-.45-13.16M29.91 33.33l-.34-9.7M36.73 40.19l-13.08-.45M29.91 33.33L20 32.99">
                                            </path>
                                        </svg>

                                    </div>
                                    <div class="text-with-icons__block-title">
                                        <h3>Vegan</h3>
                                    </div>
                                    <div class="text-with-icons__block-text">

                                    </div>
                                </div>

                                <div class="text-with-icons__block text-center">
                                    <div class="text-with-icons__block-icon">

                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-tcwi-thumbs-up" viewbox="0 0 100 100">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: none;
                                                        stroke: #000;
                                                        stroke-width: 2px
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a" d="M16.01 54.13h20.02v35.22H16.01z"></path>
                                            <path class="a" d="M36 82.72l3.84 2.63a11.53 11.53 0 0 0 6.54 2h13.91M36 58.78l2.07-1.93A10.23 10.23 0 0 0 40.26 54l7.66-15a7.4 7.4 0 0 0 .81-3.36v-8.3a2.93 2.93 0 0 1 2.92-2.94c2.41 0 5.78 1 7.92 6.18a18.63 18.63 0 0 1 1 10.5l-1.29 6.94h19A4.91 4.91 0 0 1 83.16 53a4.91 4.91 0 0 1-4.91 4.92H59.6M62.68 67.72H76a4.91 4.91 0 0 1 4.91 4.92A4.91 4.91 0 0 1 76 77.55H65.65">
                                            </path>
                                            <path class="a" d="M65.65 77.55h6.12a4.92 4.92 0 0 1 4.92 4.92 4.93 4.93 0 0 1-4.92 4.92h-12.5M59.6 57.89h19.47A4.92 4.92 0 0 1 84 62.81a4.91 4.91 0 0 1-4.92 4.91h-16.4M53.19 20.06v-9.41M47.33 22.12l-6.05-7.22M44.15 27.46l-9.27-1.64M62.04 27.68l9.27-1.64M59 22.26l6.05-7.21">
                                            </path>
                                        </svg>

                                    </div>
                                    <div class="text-with-icons__block-title">
                                        <h3>Parfüm To Go</h3>
                                    </div>
                                    <div class="text-with-icons__block-text">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <style data-shopify="">
                        #shopify-section-template--17917053370634__7b8cb3e7-42f1-4d22-925d-669b0128e77c .icon {
                            color: #000000;
                        }

                        #shopify-section-template--17917053370634__7b8cb3e7-42f1-4d22-925d-669b0128e77c .icon path,
                        #shopify-section-template--17917053370634__7b8cb3e7-42f1-4d22-925d-669b0128e77c .icon polygon,
                        #shopify-section-template--17917053370634__7b8cb3e7-42f1-4d22-925d-669b0128e77c .icon rect,
                        #shopify-section-template--17917053370634__7b8cb3e7-42f1-4d22-925d-669b0128e77c .icon circle,
                        #shopify-section-template--17917053370634__7b8cb3e7-42f1-4d22-925d-669b0128e77c .icon ellipse,
                        #shopify-section-template--17917053370634__7b8cb3e7-42f1-4d22-925d-669b0128e77c .icon line,
                        #shopify-section-template--17917053370634__7b8cb3e7-42f1-4d22-925d-669b0128e77c .icon polyline,
                        #shopify-section-template--17917053370634__7b8cb3e7-42f1-4d22-925d-669b0128e77c .icon g {
                            stroke-width: 1px;
                        }
                    </style>



                </div>
                <div id="shopify-section-template--17917053370634__recommendations" class="shopify-section">
                    <div id="Recommendations-8209898701066" data-section-id="8209898701066" data-section-type="product-recommendations" data-enable="true" data-product-id="8209898701066" data-url="/recommendations/products" data-limit="6">

                        <div data-section-id="8209898701066" data-subsection="" data-section-type="collection-template" class="index-section index-section--sub-product">
                            <div class="page-width">
                                <header class="section-header">
                                    <div class="h3 section-header__title">
                                        Kunden interessieren sich auch für
                                    </div>
                                </header>
                            </div>

                            <div class="page-width page-width--flush-small">
                                <div class="product-recommendations-placeholder">

                                    <div class="new-grid product-grid scrollable-grid--small visually-invisible" aria-hidden="true" data-view="scrollable">
                                        <div class="grid-item grid-product " data-product-handle="mars-roll-on-100-parfumol" data-product-id="8209898701066">
                                            <div class="grid-item__content"><a href="mars-roll-on-100-parfumol.html" class="grid-item__link">
                                                    <div class="grid-product__image-wrap">
                                                        <div class="grid-product__tags"></div>
                                                        <div class="grid__image-ratio grid__image-ratio--square">
                                                            <img class="lazyload grid__image-contain" data-src="//www.neness-shop.de/cdn/shop/products/montaz_mars_AO_{width}x.jpg?v=1679647960" data-widths="[160, 200, 280, 360, 540, 720, 900]" data-aspectratio="1.0" data-sizes="auto" alt="">
                                                            <noscript>
                                                                <img class="grid-product__image lazyloaded" src="../../../cdn/shop/products/montaz_mars_AO_400x.jpg?v=1679647960" alt="">
                                                            </noscript>
                                                        </div>
                                                    </div>

                                                    <div class="grid-item__meta">
                                                        <div class="grid-item__meta-main">
                                                            <div class="grid-product__title">MARS - 100% Parfümöl</div>
                                                        </div>
                                                        <div class="loox-rating" data-id="8209898701066" data-rating="5.0" data-raters="4"></div>
                                                        <div class="grid-item__meta-secondary">
                                                            <div class="grid-product__price"><span class="grid-product__price--current"><span aria-hidden="true">€25<sup>90</sup></span>
                                                                    <span class="visually-hidden">€25,90</span>
                                                                </span>
                                                                <div class="product__unit-price">€259,00/100
                                                                    ml

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                        </div>
                        <section id="shopify-section-template--17917053370634__loox-product-reviews-app-section"
                            class="shopify-section">
                            <div class="index-section">
                                <div class="page-width">
                                    <div id="shopify-block-loox-product-reviews" class="shopify-block shopify-app-block">
                                        <div >
                                            <iframe id="frame" style="border: none;" src="/review.php?name=<?= $name ?>"></iframe>
                                                    <script>
                                                        $(document).ready(function() {

                                                            function setIframeSize() {
                                                                var windowWidth = $(window).width();
                                                                var windowHeight = $(window).height();
                                                                $("#frame").css("width", windowWidth + "px");
                                                                $("#frame").css("height", windowHeight + "px");

                                                            }

                                                            setIframeSize();
                                                            $(window).resize(function() {
                                                                setIframeSize();
                                                            });
                                                        });
                                                    </script></div>

                            </div>
                        </div>
                    </div>
                </section>
            </main>
        <?php } else { ?>

            <main style="text-align:center;padding:30px 0px;">
                <h1>Es gibt keine solche Seite!</h1>
            </main>
        <?php } ?>
        <div id="shopify-section-footer-promotions" class="shopify-section index-section--footer">
        </div>
        <div id="shopify-section-footer" class="shopify-section">
            <div class="footer__section footer__section--border">
                <div class="page-width">
                    <div class="footer__newsletter">
                        <div class="footer__subscribe rte rte--nomargin">
                            <p>Abonniere unseren Newsletter und erhalte 15% Rabatt für deine erste Bestellung!</p>
                        </div>
                        <form method="post" action="/contact#newsletter-footer" id="newsletter-footer" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer"><input type="hidden" name="utf8" value="✓">
                            <label for="Email-footer" class="hidden-label">Melden Sie sich für unsere Mailingliste
                                an</label>
                            <input type="hidden" name="contact[tags]" value="prospect,newsletter">
                            <input type="hidden" name="contact[context]" value="footer">
                            <div class="input-group newsletter__input-group">
                                <input type="email" value="" placeholder="Melden Sie sich für unsere Mailingliste an" name="contact[email]" id="Email-footer" class="input-group-field newsletter__input" autocorrect="off" autocapitalize="off">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn" name="commit" aria-label="Abonnieren">
                                        <span class="form__submit--large">Abonnieren</span>
                                        <span class="form__submit--small">
                                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-arrow-right" viewbox="0 0 50 15">
                                                <path d="M0 9.63V5.38h35V0l15 7.5L35 15V9.63z"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="site-footer" data-section-id="footer" data-section-type="footer-section">
                <div id="FooterMenus" class="footer__section footer__section--menus">
                    <div class="page-width">
                        <div class="footer__blocks">
                            <div class="footer__block" data-type="menu">
                                <div class="footer__title">Neness
                                </div>

                                <ul class="footer__menu">
                                    <li><a href="../../../pages/contact.html">Hilfe & Kontakt</a></li>
                                    <li><a href="../../../policies/legal-notice.html">Impressum</a></li>
                                    <li><a href="../../../policies/terms-of-service.html">AGB</a></li>
                                    <li><a href="../../../policies/privacy-policy.html">Datenschutz</a></li>
                                    <li><a href="../../../policies/refund-policy.html">Widerrufsbelehrung</a></li>
                                    <li><a href="../../../policies/shipping-policy.html">Versandinformation</a></li>
                                    <li><a href="../../../pages/faq.html">Über Uns</a></li>
                                    <li><a href="../../../index-1.htm?id=GDPR_769769dd5c4da8efb4d18bf16ca2c677">Cookie
                                            Einstellungen</a></li>
                                </ul>
                            </div>
                            <div class="footer__block" data-type="contact">
                                <div class="footer__mobile-section">
                                    <div class="footer__blocks--mobile">
                                        <div class="footer__block--mobile">
                                            <div class="footer__title">
                                                In Kontakt kommen
                                            </div>

                                            <ul class="footer__menu footer__menu--underline">
                                                <li><a href="../../../pages/contact.html">
                                                        <span class="icon-and-text">
                                                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-email" viewbox="0 0 64 64">
                                                                <defs>
                                                                    <style>
                                                                        .cls-1 {
                                                                            fill: none;
                                                                            stroke: #000;
                                                                            stroke-miterlimit: 10;
                                                                            stroke-width: 2px
                                                                        }
                                                                    </style>
                                                                </defs>
                                                                <path class="cls-1" d="M63 52H1V12h62zM1 12l25.68 24h9.72L63 12M21.82 31.68L1.56 51.16m60.78.78L41.27 31.68">
                                                                </path>
                                                            </svg>
                                                            <span>Kontakt</span>
                                                        </span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="footer__block--mobile">
                                            <div class="footer__title">
                                                Folge uns
                                            </div>
                                            <ul class="no-bullets social-icons footer__social">
                                                <li>
                                                    <a target="_blank" rel="noopener" href="https://www.instagram.com/neness_shop_de/?next=%2F" title="Neness auf Instagram">
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram" viewbox="0 0 32 32">
                                                            <path fill="#444" d="M16 3.094c4.206 0 4.7.019 6.363.094 1.538.069 2.369.325 2.925.544.738.287 1.262.625 1.813 1.175s.894 1.075 1.175 1.813c.212.556.475 1.387.544 2.925.075 1.662.094 2.156.094 6.363s-.019 4.7-.094 6.363c-.069 1.538-.325 2.369-.544 2.925-.288.738-.625 1.262-1.175 1.813s-1.075.894-1.813 1.175c-.556.212-1.387.475-2.925.544-1.663.075-2.156.094-6.363.094s-4.7-.019-6.363-.094c-1.537-.069-2.369-.325-2.925-.544-.737-.288-1.263-.625-1.813-1.175s-.894-1.075-1.175-1.813c-.212-.556-.475-1.387-.544-2.925-.075-1.663-.094-2.156-.094-6.363s.019-4.7.094-6.363c.069-1.537.325-2.369.544-2.925.287-.737.625-1.263 1.175-1.813s1.075-.894 1.813-1.175c.556-.212 1.388-.475 2.925-.544 1.662-.081 2.156-.094 6.363-.094zm0-2.838c-4.275 0-4.813.019-6.494.094-1.675.075-2.819.344-3.819.731-1.037.4-1.913.944-2.788 1.819S1.486 4.656 1.08 5.688c-.387 1-.656 2.144-.731 3.825-.075 1.675-.094 2.213-.094 6.488s.019 4.813.094 6.494c.075 1.675.344 2.819.731 3.825.4 1.038.944 1.913 1.819 2.788s1.756 1.413 2.788 1.819c1 .387 2.144.656 3.825.731s2.213.094 6.494.094 4.813-.019 6.494-.094c1.675-.075 2.819-.344 3.825-.731 1.038-.4 1.913-.944 2.788-1.819s1.413-1.756 1.819-2.788c.387-1 .656-2.144.731-3.825s.094-2.212.094-6.494-.019-4.813-.094-6.494c-.075-1.675-.344-2.819-.731-3.825-.4-1.038-.944-1.913-1.819-2.788s-1.756-1.413-2.788-1.819c-1-.387-2.144-.656-3.825-.731C20.812.275 20.275.256 16 .256z">
                                                            </path>
                                                            <path fill="#444" d="M16 7.912a8.088 8.088 0 0 0 0 16.175c4.463 0 8.087-3.625 8.087-8.088s-3.625-8.088-8.088-8.088zm0 13.338a5.25 5.25 0 1 1 0-10.5 5.25 5.25 0 1 1 0 10.5zM26.294 7.594a1.887 1.887 0 1 1-3.774.002 1.887 1.887 0 0 1 3.774-.003z">
                                                            </path>
                                                        </svg>
                                                        <span class="icon__fallback-text">Instagram</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" rel="noopener" href="https://www.facebook.com/Parfumly-114620804561706" title="Neness auf Facebook">
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewbox="0 0 14222 14222">
                                                            <path d="M14222 7112c0 3549.352-2600.418 6491.344-6000 7024.72V9168h1657l315-2056H8222V5778c0-562 275-1111 1159-1111h897V2917s-814-139-1592-139c-1624 0-2686 984-2686 2767v1567H4194v2056h1806v4968.72C2600.418 13603.344 0 10661.352 0 7112 0 3184.703 3183.703 1 7111 1s7111 3183.703 7111 7111zm-8222 7025c362 57 733 86 1111 86-377.945 0-749.003-29.485-1111-86.28zm2222 0v-.28a7107.458 7107.458 0 0 1-167.717 24.267A7407.158 7407.158 0 0 0 8222 14137zm-167.717 23.987C7745.664 14201.89 7430.797 14223 7111 14223c319.843 0 634.675-21.479 943.283-62.013z">
                                                            </path>
                                                        </svg>
                                                        <span class="icon__fallback-text">Facebook</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" rel="noopener" href="https://www.tiktok.com/@nenessshop" title="Neness auf TikTok">
                                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-tiktok" viewbox="0 0 2859 3333">
                                                            <path d="M2081 0c55 473 319 755 778 785v532c-266 26-499-61-770-225v995c0 1264-1378 1659-1932 753-356-583-138-1606 1004-1647v561c-87 14-180 36-265 65-254 86-398 247-358 531 77 544 1075 705 992-358V1h551z">
                                                            </path>
                                                        </svg>
                                                        <span class="icon__fallback-text">TikTok</span>
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer__block" data-type="payment">
                                <div class="footer__mobile-section">
                                    <div class="footer__blocks--mobile">
                                        <div class="footer__block--mobile">
                                            <div class="footer__title">
                                                Wir akzeptieren
                                            </div>
                                            <ul class="inline-list payment-icons">
                                                <li class="icon--payment">
                                                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewbox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express">
                                                        <title id="pi-american_express">American Express</title>
                                                        <g fill="none">
                                                            <path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"></path>
                                                            <path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1">
                                                            </path>
                                                            <path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z">
                                                            </path>
                                                        </g>
                                                    </svg>

                                                </li>
                                                <li class="icon--payment">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" x="0" y="0" width="38" height="24" viewbox="0 0 165.521 105.965" xml:space="preserve" aria-labelledby="pi-apple_pay">
                                                        <title id="pi-apple_pay">Apple Pay</title>
                                                        <path fill="#000" d="M150.698 0H14.823c-.566 0-1.133 0-1.698.003-.477.004-.953.009-1.43.022-1.039.028-2.087.09-3.113.274a10.51 10.51 0 0 0-2.958.975 9.932 9.932 0 0 0-4.35 4.35 10.463 10.463 0 0 0-.975 2.96C.113 9.611.052 10.658.024 11.696a70.22 70.22 0 0 0-.022 1.43C0 13.69 0 14.256 0 14.823v76.318c0 .567 0 1.132.002 1.699.003.476.009.953.022 1.43.028 1.036.09 2.084.275 3.11a10.46 10.46 0 0 0 .974 2.96 9.897 9.897 0 0 0 1.83 2.52 9.874 9.874 0 0 0 2.52 1.83c.947.483 1.917.79 2.96.977 1.025.183 2.073.245 3.112.273.477.011.953.017 1.43.02.565.004 1.132.004 1.698.004h135.875c.565 0 1.132 0 1.697-.004.476-.002.952-.009 1.431-.02 1.037-.028 2.085-.09 3.113-.273a10.478 10.478 0 0 0 2.958-.977 9.955 9.955 0 0 0 4.35-4.35c.483-.947.789-1.917.974-2.96.186-1.026.246-2.074.274-3.11.013-.477.02-.954.022-1.43.004-.567.004-1.132.004-1.699V14.824c0-.567 0-1.133-.004-1.699a63.067 63.067 0 0 0-.022-1.429c-.028-1.038-.088-2.085-.274-3.112a10.4 10.4 0 0 0-.974-2.96 9.94 9.94 0 0 0-4.35-4.35A10.52 10.52 0 0 0 156.939.3c-1.028-.185-2.076-.246-3.113-.274a71.417 71.417 0 0 0-1.431-.022C151.83 0 151.263 0 150.698 0z">
                                                        </path>
                                                        <path fill="#FFF" d="M150.698 3.532l1.672.003c.452.003.905.008 1.36.02.793.022 1.719.065 2.583.22.75.135 1.38.34 1.984.648a6.392 6.392 0 0 1 2.804 2.807c.306.6.51 1.226.645 1.983.154.854.197 1.783.218 2.58.013.45.019.9.02 1.36.005.557.005 1.113.005 1.671v76.318c0 .558 0 1.114-.004 1.682-.002.45-.008.9-.02 1.35-.022.796-.065 1.725-.221 2.589a6.855 6.855 0 0 1-.645 1.975 6.397 6.397 0 0 1-2.808 2.807c-.6.306-1.228.511-1.971.645-.881.157-1.847.2-2.574.22-.457.01-.912.017-1.379.019-.555.004-1.113.004-1.669.004H14.801c-.55 0-1.1 0-1.66-.004a74.993 74.993 0 0 1-1.35-.018c-.744-.02-1.71-.064-2.584-.22a6.938 6.938 0 0 1-1.986-.65 6.337 6.337 0 0 1-1.622-1.18 6.355 6.355 0 0 1-1.178-1.623 6.935 6.935 0 0 1-.646-1.985c-.156-.863-.2-1.788-.22-2.578a66.088 66.088 0 0 1-.02-1.355l-.003-1.327V14.474l.002-1.325a66.7 66.7 0 0 1 .02-1.357c.022-.792.065-1.717.222-2.587a6.924 6.924 0 0 1 .646-1.981c.304-.598.7-1.144 1.18-1.623a6.386 6.386 0 0 1 1.624-1.18 6.96 6.96 0 0 1 1.98-.646c.865-.155 1.792-.198 2.586-.22.452-.012.905-.017 1.354-.02l1.677-.003h135.875">
                                                        </path>
                                                        <g>
                                                            <g>
                                                                <path fill="#000" d="M43.508 35.77c1.404-1.755 2.356-4.112 2.105-6.52-2.054.102-4.56 1.355-6.012 3.112-1.303 1.504-2.456 3.959-2.156 6.266 2.306.2 4.61-1.152 6.063-2.858">
                                                                </path>
                                                                <path fill="#000" d="M45.587 39.079c-3.35-.2-6.196 1.9-7.795 1.9-1.6 0-4.049-1.8-6.698-1.751-3.447.05-6.645 2-8.395 5.1-3.598 6.2-.95 15.4 2.55 20.45 1.699 2.5 3.747 5.25 6.445 5.151 2.55-.1 3.549-1.65 6.647-1.65 3.097 0 3.997 1.65 6.696 1.6 2.798-.05 4.548-2.5 6.247-5 1.95-2.85 2.747-5.6 2.797-5.75-.05-.05-5.396-2.101-5.446-8.251-.05-5.15 4.198-7.6 4.398-7.751-2.399-3.548-6.147-3.948-7.447-4.048">
                                                                </path>
                                                            </g>
                                                            <g>
                                                                <path fill="#000" d="M78.973 32.11c7.278 0 12.347 5.017 12.347 12.321 0 7.33-5.173 12.373-12.529 12.373h-8.058V69.62h-5.822V32.11h14.062zm-8.24 19.807h6.68c5.07 0 7.954-2.729 7.954-7.46 0-4.73-2.885-7.434-7.928-7.434h-6.706v14.894z">
                                                                </path>
                                                                <path fill="#000" d="M92.764 61.847c0-4.809 3.665-7.564 10.423-7.98l7.252-.442v-2.08c0-3.04-2.001-4.704-5.562-4.704-2.938 0-5.07 1.507-5.51 3.82h-5.252c.157-4.86 4.731-8.395 10.918-8.395 6.654 0 10.995 3.483 10.995 8.89v18.663h-5.38v-4.497h-.13c-1.534 2.937-4.914 4.782-8.579 4.782-5.406 0-9.175-3.222-9.175-8.057zm17.675-2.417v-2.106l-6.472.416c-3.64.234-5.536 1.585-5.536 3.95 0 2.288 1.975 3.77 5.068 3.77 3.95 0 6.94-2.522 6.94-6.03z">
                                                                </path>
                                                                <path fill="#000" d="M120.975 79.652v-4.496c.364.051 1.247.103 1.715.103 2.573 0 4.029-1.09 4.913-3.899l.52-1.663-9.852-27.293h6.082l6.863 22.146h.13l6.862-22.146h5.927l-10.216 28.67c-2.34 6.577-5.017 8.735-10.683 8.735-.442 0-1.872-.052-2.261-.157z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>

                                                </li>
                                                <li class="icon--payment">
                                                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewbox="0 0 38 24" width="38" height="24" aria-labelledby="pi-google_pay">
                                                        <title id="pi-google_pay">Google Pay</title>
                                                        <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"></path>
                                                        <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"></path>
                                                        <path d="M18.093 11.976v3.2h-1.018v-7.9h2.691a2.447 2.447 0 0 1 1.747.692 2.28 2.28 0 0 1 .11 3.224l-.11.116c-.47.447-1.098.69-1.747.674l-1.673-.006zm0-3.732v2.788h1.698c.377.012.741-.135 1.005-.404a1.391 1.391 0 0 0-1.005-2.354l-1.698-.03zm6.484 1.348c.65-.03 1.286.188 1.778.613.445.43.682 1.03.65 1.649v3.334h-.969v-.766h-.049a1.93 1.93 0 0 1-1.673.931 2.17 2.17 0 0 1-1.496-.533 1.667 1.667 0 0 1-.613-1.324 1.606 1.606 0 0 1 .613-1.336 2.746 2.746 0 0 1 1.698-.515c.517-.02 1.03.093 1.49.331v-.208a1.134 1.134 0 0 0-.417-.901 1.416 1.416 0 0 0-.98-.368 1.545 1.545 0 0 0-1.319.717l-.895-.564a2.488 2.488 0 0 1 2.182-1.06zM23.29 13.52a.79.79 0 0 0 .337.662c.223.176.5.269.785.263.429-.001.84-.17 1.146-.472.305-.286.478-.685.478-1.103a2.047 2.047 0 0 0-1.324-.374 1.716 1.716 0 0 0-1.03.294.883.883 0 0 0-.392.73zm9.286-3.75l-3.39 7.79h-1.048l1.281-2.728-2.224-5.062h1.103l1.612 3.885 1.569-3.885h1.097z" fill="#5F6368"></path>
                                                        <path d="M13.986 11.284c0-.308-.024-.616-.073-.92h-4.29v1.747h2.451a2.096 2.096 0 0 1-.9 1.373v1.134h1.464a4.433 4.433 0 0 0 1.348-3.334z" fill="#4285F4"></path>
                                                        <path d="M9.629 15.721a4.352 4.352 0 0 0 3.01-1.097l-1.466-1.14a2.752 2.752 0 0 1-4.094-1.44H5.577v1.17a4.53 4.53 0 0 0 4.052 2.507z" fill="#34A853"></path>
                                                        <path d="M7.079 12.05a2.709 2.709 0 0 1 0-1.735v-1.17H5.577a4.505 4.505 0 0 0 0 4.075l1.502-1.17z" fill="#FBBC04"></path>
                                                        <path d="M9.629 8.44a2.452 2.452 0 0 1 1.74.68l1.3-1.293a4.37 4.37 0 0 0-3.065-1.183 4.53 4.53 0 0 0-4.027 2.5l1.502 1.171a2.715 2.715 0 0 1 2.55-1.875z" fill="#EA4335"></path>
                                                    </svg>

                                                </li>
                                                <li class="icon--payment">
                                                    <svg xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" viewbox="0 0 38 24" aria-labelledby="pi-klarna">
                                                        <title id="pi-klarna">Klarna</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#FFB3C7"></path>
                                                            <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFB3C7"></path>
                                                            <path d="M34.117 13.184c-.487 0-.882.4-.882.892 0 .493.395.893.882.893.488 0 .883-.4.883-.893a.888.888 0 00-.883-.892zm-2.903-.69c0-.676-.57-1.223-1.274-1.223-.704 0-1.274.547-1.274 1.222 0 .675.57 1.223 1.274 1.223.704 0 1.274-.548 1.274-1.223zm.005-2.376h1.406v4.75h-1.406v-.303a2.446 2.446 0 01-1.394.435c-1.369 0-2.478-1.122-2.478-2.507 0-1.384 1.11-2.506 2.478-2.506.517 0 .996.16 1.394.435v-.304zm-11.253.619v-.619h-1.44v4.75h1.443v-2.217c0-.749.802-1.15 1.359-1.15h.016v-1.382c-.57 0-1.096.247-1.378.618zm-3.586 1.756c0-.675-.57-1.222-1.274-1.222-.703 0-1.274.547-1.274 1.222 0 .675.57 1.223 1.274 1.223.704 0 1.274-.548 1.274-1.223zm.005-2.375h1.406v4.75h-1.406v-.303A2.446 2.446 0 0114.99 15c-1.368 0-2.478-1.122-2.478-2.507 0-1.384 1.11-2.506 2.478-2.506.517 0 .997.16 1.394.435v-.304zm8.463-.128c-.561 0-1.093.177-1.448.663v-.535H22v4.75h1.417v-2.496c0-.722.479-1.076 1.055-1.076.618 0 .973.374.973 1.066v2.507h1.405v-3.021c0-1.106-.87-1.858-2.002-1.858zM10.465 14.87h1.472V8h-1.472v6.868zM4 14.87h1.558V8H4v6.87zM9.45 8a5.497 5.497 0 01-1.593 3.9l2.154 2.97H8.086l-2.341-3.228.604-.458A3.96 3.96 0 007.926 8H9.45z" fill="#0A0B09" fill-rule="nonzero"></path>
                                                        </g>
                                                    </svg>
                                                </li>
                                                <li class="icon--payment">
                                                    <svg viewbox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-maestro">
                                                        <title id="pi-maestro">Maestro</title>
                                                        <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                        </path>
                                                        <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                        </path>
                                                        <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                                                        <circle fill="#00A2E5" cx="23" cy="12" r="7"></circle>
                                                        <path fill="#7375CF" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li class="icon--payment">
                                                    <svg viewbox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master">
                                                        <title id="pi-master">Mastercard</title>
                                                        <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                        </path>
                                                        <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                        </path>
                                                        <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                                                        <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                                                        <path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li class="icon--payment">
                                                    <svg viewbox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal">
                                                        <title id="pi-paypal">PayPal</title>
                                                        <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                        </path>
                                                        <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                        </path>
                                                        <path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z">
                                                        </path>
                                                        <path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z">
                                                        </path>
                                                        <path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li class="icon--payment">
                                                    <svg width="38" height="24" viewbox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="pi-sofort">
                                                        <title id="pi-sofort">SOFORT</title>
                                                        <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3Z" fill="#000"></path>
                                                        <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32Z" fill="#fff"></path>
                                                        <path d="M33.555 20H3L5.322 5H36l-2.445 15Z" fill="#393A41">
                                                        </path>
                                                        <path d="M13.116 10c-1.403 0-2.47 1.243-2.47 2.725 0 1.34.875 2.274 2.066 2.274 1.403 0 2.462-1.278 2.462-2.76.008-1.349-.867-2.239-2.058-2.239Zm-.315 3.738c-.538 0-.912-.423-.912-1.076 0-.723.463-1.41 1.132-1.41.536 0 .911.441.911 1.094.008.731-.462 1.392-1.132 1.392ZM21.56 10c-1.402 0-2.461 1.243-2.461 2.725 0 1.34.875 2.274 2.066 2.274 1.403 0 2.463-1.278 2.463-2.76C23.636 10.89 22.76 10 21.562 10Zm-.307 3.738c-.537 0-.912-.423-.912-1.076 0-.723.463-1.41 1.133-1.41.535 0 .911.441.911 1.094 0 .731-.463 1.392-1.133 1.392Zm6.506-2.16c0-.9-.581-1.472-1.64-1.472h-1.485l-.654 4.787h1.25l.206-1.508h.059l.66 1.508h1.434l-.918-1.676c.684-.282 1.087-.89 1.087-1.638Zm-2 .795h-.183l.139-1.007h.169c.39 0 .595.142.595.45 0 .363-.293.557-.72.557Zm-16.547-.354c-.477-.292-.581-.362-.581-.521 0-.193.19-.29.448-.29.302 0 .758.043 1.206.554.108-.4.287-.777.529-1.11-.63-.431-1.22-.652-1.756-.652-1.066 0-1.683.687-1.683 1.516 0 .715.447 1.085.977 1.412.478.29.595.387.595.564 0 .194-.198.3-.463.3-.456 0-.986-.344-1.301-.697L7 14.426c.417.378.954.582 1.507.574 1.103 0 1.699-.671 1.699-1.527 0-.705-.382-1.084-.993-1.454Zm9.263.184h-1.47l.117-.837h1.572c.2-.491.513-.923.912-1.26h-2.573c-.573 0-1.058.467-1.14 1.102l-.499 3.694h1.25l.206-1.508h1.485l.11-.82c.007-.132.015-.247.03-.37Zm9.312-2.096c.338.308.544.74.588 1.26h1.044l-.477 3.526h1.249l.477-3.527h1.162l.169-1.26h-4.212Z" fill="#EDEDED"></path>
                                                    </svg>
                                                </li>
                                                <li class="icon--payment">
                                                    <svg viewbox="-36 25 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-unionpay">
                                                        <title id="pi-unionpay">Union Pay</title>
                                                        <path fill="#005B9A" d="M-36 46.8v.7-.7zM-18.3 25v24h-7.2c-1.3 0-2.1-1-1.8-2.3l4.4-19.4c.3-1.3 1.9-2.3 3.2-2.3h1.4zm12.6 0c-1.3 0-2.9 1-3.2 2.3l-4.5 19.4c-.3 1.3.5 2.3 1.8 2.3h-4.9V25h10.8z">
                                                        </path>
                                                        <path fill="#E9292D" d="M-19.7 25c-1.3 0-2.9 1.1-3.2 2.3l-4.4 19.4c-.3 1.3.5 2.3 1.8 2.3h-8.9c-.8 0-1.5-.6-1.5-1.4v-21c0-.8.7-1.6 1.5-1.6h14.7z">
                                                        </path>
                                                        <path fill="#0E73B9" d="M-5.7 25c-1.3 0-2.9 1.1-3.2 2.3l-4.4 19.4c-.3 1.3.5 2.3 1.8 2.3H-26h.5c-1.3 0-2.1-1-1.8-2.3l4.4-19.4c.3-1.3 1.9-2.3 3.2-2.3h14z">
                                                        </path>
                                                        <path fill="#059DA4" d="M2 26.6v21c0 .8-.6 1.4-1.5 1.4h-12.1c-1.3 0-2.1-1.1-1.8-2.3l4.5-19.4C-8.6 26-7 25-5.7 25H.5c.9 0 1.5.7 1.5 1.6z">
                                                        </path>
                                                        <path fill="#fff" d="M-21.122 38.645h.14c.14 0 .28-.07.28-.14l.42-.63h1.19l-.21.35h1.4l-.21.63h-1.68c-.21.28-.42.42-.7.42h-.84l.21-.63m-.21.91h3.01l-.21.7h-1.19l-.21.7h1.19l-.21.7h-1.19l-.28 1.05c-.07.14 0 .28.28.21h.98l-.21.7h-1.89c-.35 0-.49-.21-.35-.63l.35-1.33h-.77l.21-.7h.77l.21-.7h-.7l.21-.7zm4.83-1.75v.42s.56-.42 1.12-.42h1.96l-.77 2.66c-.07.28-.35.49-.77.49h-2.24l-.49 1.89c0 .07 0 .14.14.14h.42l-.14.56h-1.12c-.42 0-.56-.14-.49-.35l1.47-5.39h.91zm1.68.77h-1.75l-.21.7s.28-.21.77-.21h1.05l.14-.49zm-.63 1.68c.14 0 .21 0 .21-.14l.14-.35h-1.75l-.14.56 1.54-.07zm-1.19.84h.98v.42h.28c.14 0 .21-.07.21-.14l.07-.28h.84l-.14.49c-.07.35-.35.49-.77.56h-.56v.77c0 .14.07.21.35.21h.49l-.14.56h-1.19c-.35 0-.49-.14-.49-.49l.07-2.1zm4.2-2.45l.21-.84h1.19l-.07.28s.56-.28 1.05-.28h1.47l-.21.84h-.21l-1.12 3.85h.21l-.21.77h-.21l-.07.35h-1.19l.07-.35h-2.17l.21-.77h.21l1.12-3.85h-.28m1.26 0l-.28 1.05s.49-.21.91-.28c.07-.35.21-.77.21-.77h-.84zm-.49 1.54l-.28 1.12s.56-.28.98-.28c.14-.42.21-.77.21-.77l-.91-.07zm.21 2.31l.21-.77h-.84l-.21.77h.84zm2.87-4.69h1.12l.07.42c0 .07.07.14.21.14h.21l-.21.7h-.77c-.28 0-.49-.07-.49-.35l-.14-.91zm-.35 1.47h3.57l-.21.77h-1.19l-.21.7h1.12l-.21.77h-1.26l-.28.42h.63l.14.84c0 .07.07.14.21.14h.21l-.21.7h-.7c-.35 0-.56-.07-.56-.35l-.14-.77-.56.84c-.14.21-.35.35-.63.35h-1.05l.21-.7h.35c.14 0 .21-.07.35-.21l.84-1.26h-1.05l.21-.77h1.19l.21-.7h-1.19l.21-.77zm-19.74-5.04c-.14.7-.42 1.19-.91 1.54-.49.35-1.12.56-1.89.56-.7 0-1.26-.21-1.54-.56-.21-.28-.35-.56-.35-.98 0-.14 0-.35.07-.56l.84-3.92h1.19l-.77 3.92v.28c0 .21.07.35.14.49.14.21.35.28.7.28s.7-.07.91-.28c.21-.21.42-.42.49-.77l.77-3.92h1.19l-.84 3.92m1.12-1.54h.84l-.07.49.14-.14c.28-.28.63-.42 1.05-.42.35 0 .63.14.77.35.14.21.21.49.14.91l-.49 2.38h-.91l.42-2.17c.07-.28.07-.49 0-.56-.07-.14-.21-.14-.35-.14-.21 0-.42.07-.56.21-.14.14-.28.35-.28.63l-.42 2.03h-.91l.63-3.57m9.8 0h.84l-.07.49.14-.14c.28-.28.63-.42 1.05-.42.35 0 .63.14.77.35s.21.49.14.91l-.49 2.38h-.91l.42-2.24c.07-.21 0-.42-.07-.49-.07-.14-.21-.14-.35-.14-.21 0-.42.07-.56.21-.14.14-.28.35-.28.63l-.42 2.03h-.91l.7-3.57m-5.81 0h.98l-.77 3.5h-.98l.77-3.5m.35-1.33h.98l-.21.84h-.98l.21-.84zm1.4 4.55c-.21-.21-.35-.56-.35-.98v-.21c0-.07 0-.21.07-.28.14-.56.35-1.05.7-1.33.35-.35.84-.49 1.33-.49.42 0 .77.14 1.05.35.21.21.35.56.35.98v.21c0 .07 0 .21-.07.28-.14.56-.35.98-.7 1.33-.35.35-.84.49-1.33.49-.35 0-.7-.14-1.05-.35m1.89-.7c.14-.21.28-.49.35-.84v-.35c0-.21-.07-.35-.14-.49a.635.635 0 0 0-.49-.21c-.28 0-.49.07-.63.28-.14.21-.28.49-.35.84v.28c0 .21.07.35.14.49.14.14.28.21.49.21.28.07.42 0 .63-.21m6.51-4.69h2.52c.49 0 .84.14 1.12.35.28.21.35.56.35.91v.28c0 .07 0 .21-.07.28-.07.49-.35.98-.7 1.26-.42.35-.84.49-1.4.49h-1.4l-.42 2.03h-1.19l1.19-5.6m.56 2.59h1.12c.28 0 .49-.07.7-.21.14-.14.28-.35.35-.63v-.28c0-.21-.07-.35-.21-.42-.14-.07-.35-.14-.7-.14h-.91l-.35 1.68zm8.68 3.71c-.35.77-.7 1.26-.91 1.47-.21.21-.63.7-1.61.7l.07-.63c.84-.28 1.26-1.4 1.54-1.96l-.28-3.78h1.19l.07 2.38.91-2.31h1.05l-2.03 4.13m-2.94-3.85l-.42.28c-.42-.35-.84-.56-1.54-.21-.98.49-1.89 4.13.91 2.94l.14.21h1.12l.7-3.29-.91.07m-.56 1.82c-.21.56-.56.84-.91.77-.28-.14-.35-.63-.21-1.19.21-.56.56-.84.91-.77.28.14.35.63.21 1.19">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li class="icon--payment">
                                                    <svg viewbox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa">
                                                        <title id="pi-visa">Visa</title>
                                                        <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                        </path>
                                                        <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                        </path>
                                                        <path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path>
                                                    </svg>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer__section">
                    <div class="page-width text-center small--text-left">
                        <div class="footer__base-links"><span>
                                &copy; 2023 Neness
                            </span>
                        </div>
                    </div>
                </div>

            </footer>
            <script>
                document.addEventListener("startasyncloading", function() {
                    document.querySelectorAll("script[type='text/javascripts']").forEach(e => {
                        var t = document.createElement("script");
                        for (a = 0; a < e.attributes.length; a++) {
                            var r = e.attributes[a];
                            t.setAttribute(r.name, r.value)
                        }
                        t.type = "text/javascript", t.innerHTML = e.innerHTML, e.parentNode.insertBefore(t, e), e.parentNode.removeChild(e)
                    })
                });
            </script>



        </div>
    </div>
    <div id="VideoModal" class="modal">
        <div class="modal__inner">
            <div class="modal__centered page-width text-center">
                <div class="modal__centered-content">
                    <div class="video-wrapper video-wrapper--modal">
                        <div id="VideoHolder"></div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn--circle btn--icon modal__close js-modal-close">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewbox="0 0 64 64">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: #000;
                                stroke-miterlimit: 10;
                                stroke-width: 2px
                            }
                        </style>
                    </defs>
                    <path class="cls-1" d="M19 17.61l27.12 27.13m0-27.13L19 44.74"></path>
                </svg>
                <span class="icon__fallback-text">"Schließen (Esc)"</span>
            </button>
        </div>
    </div>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <button class="btn btn--secondary btn--circle pswp__button pswp__button--arrow--left" title="Zurück">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-left" viewbox="0 0 284.49 498.98">
                        <path d="M249.49 0a35 35 0 0 1 24.75 59.75L84.49 249.49l189.75 189.74a35.002 35.002 0 1 1-49.5 49.5L10.25 274.24a35 35 0 0 1 0-49.5L224.74 10.25A34.89 34.89 0 0 1 249.49 0z">
                        </path>
                    </svg>
                </button>

                <button class="btn btn--secondary btn--circle btn--large pswp__button pswp__button--close" title="Schließen (Esc)">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewbox="0 0 64 64">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #000;
                                    stroke-miterlimit: 10;
                                    stroke-width: 2px
                                }
                            </style>
                        </defs>
                        <path class="cls-1" d="M19 17.61l27.12 27.13m0-27.13L19 44.74"></path>
                    </svg>
                </button>

                <button class="btn btn--secondary btn--circle pswp__button pswp__button--arrow--right" title="Vorwärts">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewbox="0 0 284.49 498.98">
                        <path d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <tool-tip data-tool-tip="">
        <div class="tool-tip__inner" data-tool-tip-inner="">
            <button class="tool-tip__close" data-tool-tip-close=""><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewbox="0 0 64 64">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: #000;
                                stroke-miterlimit: 10;
                                stroke-width: 2px
                            }
                        </style>
                    </defs>
                    <path class="cls-1" d="M19 17.61l27.12 27.13m0-27.13L19 44.74"></path>
                </svg></button>
            <div class="tool-tip__content" data-tool-tip-content="">
            </div>
        </div>
    </tool-tip>
    <div id="ProductModals"></div>
    <script async="" data-src="https://loox.io/widget/N1bI_G-5Eh/loox.1650529109883.js?shop=parfumly1.myshopify.com"></script>
    <script src="../../../cdn/shop/t/27/assets/custom.min.js?v=81359837787490221661688539544" type="text/javascript"></script>








    <script>
        if (typeof BC_JSON_ObjectBypass === "undefined") {
            var BC_JSON_ObjectBypass = {
                "_ab": {
                    "description": "Used in connection with access to admin.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "86400",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_ab"
                },
                "_secure_session_id": {
                    "description": "Used in connection with navigation through a storefront.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "2592000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_secure_session_id"
                },
                "__cfduid": {
                    "description": "The _cfduid cookie helps Cloudflare detect malicious visitors to our Customers’ websites and minimizes blocking legitimate users.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Cloudflare",
                    "type": "type_0",
                    "expires": "2592000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "__cfduid"
                },
                "Cart": {
                    "description": "Used in connection with shopping cart.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "1209600",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "Cart"
                },
                "cart": {
                    "description": "Used in connection with shopping cart.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "1209600",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "cart"
                },
                "cart_sig": {
                    "description": "Used in connection with checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "1209600",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "cart_sig"
                },
                "cart_ts": {
                    "description": "Used in connection with checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "1209600",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "cart_ts"
                },
                "cart_ver": {
                    "description": "Used in connection with shopping cart.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "1209600",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "cart_ver"
                },
                "checkout_token": {
                    "description": "Used in connection with checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "checkout_token"
                },
                "Secret": {
                    "description": "Used in connection with checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "Secret"
                },
                "secure_customer_sig": {
                    "description": "Used in connection with customer login.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "secure_customer_sig"
                },
                "storefront_digest": {
                    "description": "Used in connection with customer login.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "storefront_digest"
                },
                "_shopify_u": {
                    "description": "Used to facilitate updating customer account information.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_shopify_u"
                },
                "XSRF-TOKEN": {
                    "description": "Used in connection with GDPR legal Cookie.",
                    "path": "\/",
                    "domain": "",
                    "provider": "GDPR Legal Cookie",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "XSRF-TOKEN"
                },
                "gdpr_legal_cookie_session": {
                    "description": "Used in connection with GDPR legal Cookie.",
                    "path": "\/",
                    "domain": "",
                    "provider": "GDPR Legal Cookie",
                    "type": "type_0",
                    "expires": "0",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "gdpr_legal_cookie_session"
                },
                "_bc_c_set": {
                    "description": "Used in connection with GDPR legal Cookie.",
                    "path": "\/",
                    "domain": "",
                    "provider": "GDPR Legal Cookie",
                    "type": "type_0",
                    "expires": "2592000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "optIn": true,
                    "live": "1",
                    "name": "_bc_c_set",
                    "ShopifyMinConsent": false
                },
                "_tracking_consent": {
                    "description": "For Shopify User Consent Tracking.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_tracking_consent"
                },
                "_shopify_m": {
                    "description": "Used for managing customer privacy settings.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_shopify_m"
                },
                "_shopify_tm": {
                    "description": "Used for managing customer privacy settings.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_shopify_tm"
                },
                "_shopify_tw": {
                    "description": "Used for managing customer privacy settings.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_shopify_tw"
                },
                "_storefront_u": {
                    "description": "Used to facilitate updating customer account information.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "_storefront_u"
                },
                "cart_currency": {
                    "description": "Used in connection with cart and checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_0",
                    "expires": "31536000",
                    "recommendation": "0",
                    "editable": "false",
                    "deletable": "false",
                    "set": "0",
                    "name": "cart_currency"
                },
                "_orig_referrer": {
                    "description": "Used in connection with shopping cart.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1209600",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_orig_referrer"
                },
                "_landing_page": {
                    "description": "Track landing pages.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1209600",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_landing_page"
                },
                "_s": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_s"
                },
                "_shopify_d": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1209600",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_d"
                },
                "_shopify_fs": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1209600",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_fs"
                },
                "_shopify_s": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_s"
                },
                "_shopify_y": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "31536000",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_y"
                },
                "_y": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "31536000",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_y"
                },
                "_shopify_sa_p": {
                    "description": "Shopify analytics relating to marketing \u0026 referrals.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_sa_p"
                },
                "_shopify_sa_t": {
                    "description": "Shopify analytics relating to marketing \u0026 referrals.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_sa_t"
                },
                "_shopify_uniq": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_uniq"
                },
                "_shopify_visit": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "_shopify_visit"
                },
                "tracked_start_checkout": {
                    "description": "Shopify analytics relating to checkout.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "tracked_start_checkout"
                },
                "ki_r": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "ki_r"
                },
                "ki_t": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "ki_t"
                },
                "ab_test_*": {
                    "description": "Shopify analytics.",
                    "path": "\/",
                    "domain": "",
                    "provider": "Shopify",
                    "type": "type_1",
                    "expires": "1800",
                    "recommendation": "1",
                    "editable": "true",
                    "deletable": "false",
                    "set": "1",
                    "name": "ab_test_*"
                }
            };
        }
    </script>
    <script>
        const data_gdpr_legal_banner_content = {
            "primary": "Wir verwenden Cookies. Viele sind notwendig, um die Website und ihre Funktionen zu betreiben, andere sind für statistische oder Marketingzwecke. Mit der Entscheidung \"Nur essentielle Cookies akzeptieren\" werden wir Ihre Privatsphäre respektieren und keine Cookies setzen, die nicht für den Betrieb der Seite notwendig sind.",
            "essential": "Essenzielle Cookies ermöglichen grundlegende Funktionen und sind für die einwandfreie Funktion der Website erforderlich.",
            "statistic": "Statistik-Cookies helfen Webseiten-Besitzern zu verstehen, wie Besucher mit Webseiten interagieren, indem Informationen anonym gesammelt und gemeldet werden.",
            "marketing": "Marketing-Cookies werden von Drittanbietern oder Publishern verwendet, um personalisierte Werbung anzuzeigen. Sie tun dies, indem sie Besucher über Websites hinweg verfolgen.",
            "essential_button": "Essenzielle",
            "marketing_button": "Statistik \u0026 Marketing",
            "details": "Informationen anzeigen",
            "buttons": {
                "accept": "Alle akzeptieren",
                "how_many_are_accepted": "von",
                "accept_single": "Akzeptieren",
                "save": "Nur Essentielle Cookies akzeptieren",
                "edit": "Cookie Einstellungen",
                "save_close": "Speichern \u0026 schließen"
            },
            "tabs": {
                "name": "Name",
                "provider": "Inhaber",
                "description": "Beschreibung",
                "duration": "Laufzeit",
                "domain": "Domain",
                "group": "Group"
            },
            "cookieType": {
                "type_0": "Essentiell",
                "type_1": "Statistik",
                "type_2": "Marketing"
            },
            "flag": {
                "text": "Cookies"
            }
        };
    </script>
    <style>
        #essential_accept {
            display: none;
        }

        body #cookie-banner_flag {
            position: fixed;
            top: 70vh;
            z-index: 2147483647;
            background-color: #fff;
            padding: 0px;
            left: 4px;
            border-radius: 14px;
            width: 28px;
            max-width: 28px;
            height: 28px;
            text-align: center;
            cursor: pointer;
            box-shadow: #0006 0px 0px 4px;
            transform: rotate(0deg);
            display: flex;
            opacity: 0;
        }

        body #cookie-banner_flag__fingerprint {
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 2147483647;
            background-color: #fff;
            border-radius: 14px;
            padding: 2px;
        }

        body #cookie-banner_flag__infotext {
            height: 28px;
            line-height: 28px;
            background-color: #fff;
            color: black;
            border-radius: 14px;
            padding: 1px 14px 0 35px;
            box-shadow: #0006 0px 0px 4px;
            position: absolute;
            top: 0px;
            left: -20px;
            z-index: 1;
            width: 100px;
            opacity: 0;
            transform: rotate3d(0, -1, 0, 90deg);
            transition: all 0.5s;
        }

        body #cookie-banner_flag:hover>#cookie-banner_flag__infotext {
            left: 0;
            width: 100px;
            opacity: 1;
            transform: rotate3d(0, 0, 0, 0deg);
            transition: all 0.5s;
            min-width: fit-content;
        }
    </style>

    <div id="cookie-banner_flag" hidden="hidden">
        <div id="cookie-banner_flag__fingerprint">
            <svg width="100%" height="100%" viewbox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/">
                <g transform="matrix(1.26522,0,0,1.26522,-48.1485,-57.5756)">
                    <g transform="matrix(0.991875,-0.127215,0.127215,0.991875,-29.8048,32.7802)">
                        <path d="M59.004,200.883C62.918,201.688 67.32,198.996 68.25,195.684C74.813,172.266 85.902,150.734 101.219,131.684C103.813,128.457 103.301,123.734 100.074,121.141C96.844,118.547 92.125,119.059 89.527,122.285C72.938,142.926 60.918,166.258 53.809,191.637C52.688,195.625 54.949,200.047 59.004,200.883Z" style="fill-rule:nonzero;"></path>
                        <path d="M420.998,299.872C424.7,300.68 428.521,297.44 429.385,294.381C430.314,291.09 431.774,284.079 432.385,276.851C433.233,266.809 433.996,254.75 433.821,245.66C433.658,237.212 432.764,228.93 431.605,220.753C429.882,208.606 427.17,196.231 423.315,184.871C418.172,169.713 411.807,154.718 403.319,141.433C368.562,87.035 310.283,49.414 241.52,49.414C195.02,49.414 149.992,66.059 114.73,96.277C111.586,98.973 111.223,103.707 113.918,106.852C116.613,109.996 121.348,110.363 124.492,107.664C157.035,79.773 198.598,64.41 241.52,64.41C304.306,64.41 357.401,98.555 389.648,147.906C397.451,159.847 403.315,173.386 408.177,187.011C412.051,197.867 414.789,209.749 416.54,221.407C417.691,229.068 418.751,236.826 418.804,244.75C418.88,256.085 418.358,266.293 417.726,274.819C417.257,281.141 415.926,287.399 414.96,291.601C414.032,295.637 416.952,298.989 420.998,299.872Z" style="fill-rule:nonzero;"></path>
                        <path d="M386.915,266.049C387.118,266.049 387.325,266.041 387.532,266.021C391.661,265.685 394.176,262.072 394.399,257.939C395.195,243.208 392.269,222.399 389.077,209.385C384.855,192.173 377.776,175.7 369.367,160.34C357.383,138.441 339.324,119.945 317.145,106.84C294.367,93.383 268.215,86.27 241.52,86.27C171.574,86.27 109.711,133.039 91.07,200.027C90.418,202.395 89.637,205.758 88.75,210.02C87.406,216.48 82.141,221.371 75.648,222.188C69.367,222.98 62.168,223.543 54.25,223.859C50.113,224.027 46.891,227.516 47.059,231.656C47.227,235.797 50.707,239.012 54.852,238.848C63.191,238.516 70.82,237.914 77.523,237.07C90.371,235.449 100.785,225.809 103.434,213.07C104.258,209.121 104.961,206.07 105.523,204.027C122.363,143.523 178.285,101.266 241.52,101.266C265.535,101.266 289.047,107.66 309.516,119.754C329.371,131.484 345.52,148.008 356.207,167.535C363.951,181.682 370.578,196.734 374.489,212.61C377.522,224.921 380.245,244.464 379.446,259.154C379.232,263.087 383.047,266.049 386.915,266.049Z" style="fill-rule:nonzero;"></path>
                        <path d="M354.164,257.132L354.379,257.132C358.422,257.132 361.758,253.913 361.871,249.843C362.062,242.972 361.788,244.606 361.738,242C361.148,211.184 348.891,182.09 327.195,160.039C324.289,157.086 319.539,157.051 316.59,159.953C313.637,162.859 313.598,167.609 316.504,170.563C335.586,189.949 346.324,215.559 346.75,242.664C346.754,242.953 346.808,243.24 346.813,243.531C346.842,245.529 347.055,243.132 346.879,249.425C346.762,253.565 350.023,257.015 354.164,257.132Z" style="fill-rule:nonzero;"></path>
                        <path d="M54.801,274.766L55.824,274.727C78.949,273.824 98.074,270.91 112.676,266.063C126.23,261.563 135.695,249.262 136.789,234.73C137,231.906 137.344,229.102 137.809,226.398C141.977,202.25 154.605,180.152 173.375,164.18C192.383,148.004 216.586,139.094 241.52,139.094C258.457,139.094 275.297,143.23 290.223,151.059C293.891,152.98 298.426,151.566 300.348,147.898C302.273,144.23 300.859,139.695 297.191,137.773C280.125,128.824 260.875,124.094 241.52,124.094C213.027,124.094 185.371,134.273 163.656,152.758C142.219,171 127.789,196.246 123.027,223.848C122.48,227.023 122.078,230.309 121.832,233.609C121.195,242.09 115.746,249.238 107.949,251.828C98.832,254.855 82.289,258.684 55.242,259.738L54.219,259.777C50.078,259.941 46.855,263.426 47.016,267.566C47.172,271.605 50.496,274.773 54.504,274.773C54.602,274.773 54.699,274.77 54.801,274.766Z" style="fill-rule:nonzero;"></path>
                        <path d="M269.329,415.66C260.953,421.617 244.688,431.914 236.133,435.664C232.34,437.328 230.613,441.754 232.273,445.547C233.508,448.359 236.262,450.035 239.148,450.035C240.152,450.035 241.176,449.832 242.156,449.402C251.355,445.371 268.472,435.293 277.22,428.414C280.479,425.852 281.833,421.609 279.654,418.086C277.47,414.567 272.703,413.261 269.329,415.66Z" style="fill-rule:nonzero;"></path>
                        <path d="M317.09,263.125C321.2,263.551 324.987,260.571 325.329,256.445C326.277,244.996 326.137,246.461 325.875,243.922C325.648,197.598 287.895,159.98 241.52,159.98C200.348,159.98 165.387,189.406 158.391,229.953C157.457,235.367 157.187,241.219 157.562,247.84C157.797,251.879 157.043,259.91 149.414,268.313C139.246,279.504 114.898,293.324 56.641,295.598C52.5,295.758 49.277,299.242 49.437,303.383C49.594,307.422 52.918,310.594 56.926,310.594C57.023,310.594 57.125,310.59 57.223,310.586C108.168,308.598 142.922,297.77 160.52,278.398C171.828,265.945 172.906,253.371 172.539,246.984C172.227,241.516 172.434,236.777 173.172,232.504C178.922,199.172 207.664,174.98 241.52,174.98C279.762,174.98 310.875,206.094 310.875,244.336C310.875,244.629 310.895,244.926 310.926,245.215C310.941,245.328 310.837,246.423 310.411,254.887C310.203,259.021 312.969,262.691 317.09,263.125Z" style="fill-rule:nonzero;"></path>
                        <path d="M270.965,376.23C268.223,373.129 263.48,372.836 260.379,375.582C235.566,397.527 202.098,412.219 160.91,419.242C156.828,419.938 154.082,423.813 154.781,427.898C155.402,431.555 158.574,434.137 162.164,434.137C162.582,434.137 163.008,434.102 163.434,434.027C207.418,426.527 243.379,410.645 270.316,386.816C273.418,384.07 273.711,379.332 270.965,376.23Z" style="fill-rule:nonzero;"></path>
                        <path d="M291.93,244.027C291.762,216.371 269.211,193.926 241.52,193.926C216.914,193.926 196.02,211.508 191.844,235.727C191.352,238.563 191.227,241.891 191.457,245.898C191.988,255.25 190.504,273.563 174.543,291.133C158.02,309.328 131.887,320.824 94.656,326.277C84.695,327.047 75.184,327.859 66.387,328.687C62.262,329.078 59.234,332.734 59.625,336.859C60.012,340.98 63.68,344.008 67.793,343.621C76.586,342.793 86.098,341.98 96.066,341.211C96.234,341.199 96.398,341.18 96.566,341.156C137.512,335.195 166.648,322.133 185.648,301.219C205.285,279.594 207.098,256.738 206.43,245.043C206.27,242.227 206.336,239.949 206.621,238.277C209.559,221.27 224.234,208.926 241.52,208.926C261.043,208.926 276.93,224.809 276.93,244.336C276.93,244.547 276.938,244.762 276.957,244.973C277.004,245.52 281.238,300.148 246.984,338.121C228.023,359.141 183.469,383.953 115.277,390.563C111.152,390.961 108.133,394.625 108.535,398.75C108.91,402.625 112.176,405.527 115.988,405.527C116.23,405.527 116.477,405.516 116.723,405.488C177.348,399.617 231.527,377.652 258.121,348.168C295.641,306.582 292.336,249.422 291.93,244.027Z" style="fill-rule:nonzero;"></path>
                        <path d="M164.852,343.156C154.879,347.488 144.117,351.082 132.863,353.836C118.301,357.402 102.73,359.617 86.59,360.418C82.449,360.625 79.266,364.145 79.469,368.281C79.668,372.293 82.98,375.41 86.953,375.41C87.078,375.41 87.203,375.406 87.332,375.398C104.426,374.551 120.945,372.199 136.434,368.406C148.508,365.449 160.078,361.582 170.828,356.914C191.457,347.953 209.539,335.852 224.574,320.941C240.258,305.387 248.605,280.352 248.082,250.449C248.078,250.191 248.074,249.977 248.07,249.809C248.234,247.699 247.508,245.535 245.895,243.922C242.961,240.996 238.215,241 235.285,243.93C233.008,246.215 233.051,248.707 233.086,250.711C233.539,276.488 226.766,297.645 214.016,310.289C200.305,323.883 183.766,334.937 164.852,343.156Z" style="fill-rule:nonzero;"></path>
                    </g>
                    <g transform="matrix(1,0,0,1,-40.4502,-56.1014)">
                        <path d="M397.715,398.539C393.57,398.539 390.215,401.898 390.215,406.039L390.215,421.117C390.215,425.262 393.57,428.617 397.715,428.617C401.859,428.617 405.215,425.262 405.215,421.117L405.215,406.039C405.215,401.898 401.855,398.539 397.715,398.539Z" style="fill-rule:nonzero;"></path>
                        <path d="M441.996,367.902L440.449,367.902L440.449,354.699C440.449,331.137 421.277,311.969 397.715,311.969C374.152,311.969 354.98,331.137 354.98,354.699L354.98,367.902L353.434,367.902C346.887,367.902 341.559,373.23 341.559,379.777L341.559,443.117C341.559,449.664 346.887,454.992 353.434,454.992L441.996,454.992C448.547,454.992 453.871,449.664 453.871,443.117L453.871,379.777C453.871,373.23 448.547,367.902 441.996,367.902ZM369.98,354.699C369.98,339.41 382.422,326.969 397.715,326.969C413.008,326.969 425.445,339.41 425.445,354.699L425.445,367.902L369.98,367.902L369.98,354.699ZM438.871,439.992L356.559,439.992L356.559,382.902L438.871,382.902L438.871,439.992Z" style="fill-rule:nonzero;"></path>
                    </g>
                </g>
            </svg>
        </div>
        <div id="cookie-banner_flag__infotext">
            Cookies
        </div>
    </div>
    <div id="banner-wrapper" hidden="hidden" style="opacity: 0; display: none; visibility: hidden; top: 0px; left: 0px;">
        <style>
            :root {
                --gdpr_banner_color: #000000;
                --gdpr_banner_primary_background_color: #ffffff;
                --gdpr_banner_primary_border: 2px solid #d6d6d6;
                --gdpr_banner_primary_border_radius: 4px;
                --gdpr_banner_primary_button_color: #000000;
                --gdpr_banner_primary_color: #ffffff;
                --gdpr_banner_primary_hover_opacity: 0.6;
                --gdpr_banner_primary_link_color: #6d6d6d;
                --gdpr_banner_primary_margin: 12px;
                --gdpr_banner_primary_padding: 12px 12px;
                --gdpr_banner_secondary_background_color: #ffffff;
                --gdpr_banner_secondary_button_color: #c2c2c2;
                --gdpr_banner_secondary_color: #000000;
                --gdpr_banner_unit: px;
            }

            #banner-wrapper {
                width: 100%;
                height: 100%;
                position: fixed;
                z-index: 2147483647;
                top: 0;
            }

            #banner-wrapper div.overlay,
            #banner-wrapper div.overlay_bc_banner {
                width: 100vw;
                height: 100vh;
                position: relative;
                display: flex;
                padding: 0px;
                background-color: #00000054;
                top: 0px;
                pointer-events: inherit;
                justify-content: inherit;
            }

            #banner-wrapper div.banner-body {
                position: absolute;
                margin-right: auto;
                margin-left: 50%;
                margin-top: 0;
                margin-bottom: auto;
                top: 50%;
                height: auto;
                max-height: 90vh;
                overflow: auto;
                background-color: var(--gdpr_banner_primary_background_color);
                border-radius: 4px;
                transform: translate(-50%, -50%);
                box-shadow: #666 0px 0px 10px;
                z-index: 2147483647;
            }

            #banner-wrapper div.banner-body {
                undefined width: 34%%;
                max-width: unsetpx;
            }

            #banner-wrapper div.banner-body p {
                color: #000000;
            }

            #banner-wrapper div.banner-body__content {}

            #banner-wrapper div.banner-body__content .banner-main_header {
                padding: 6px 20px;
            }

            #banner-wrapper div.banner-body__content .banner-main_buttons {
                padding: 6px 12px;
                display: flex;
                flex-wrap: wrap;
            }

            #banner-wrapper div.banner-main {
                font-size: 14px;
                color: #000000;
                background-color: #ffffff;
                text-align: left;
            }

            #banner-wrapper div.banner-main_header.list-type {
                flex-direction: row;
                display: none;
            }

            #banner-wrapper div.banner-main_header.list-type p {
                margin: 5px auto;
            }

            #banner-wrapper div.banner-main_header.list-type p::before {
                content: "";
                width: 8px;
                height: 8px;
                margin: 1px 5px;
                border-radius: 50%;
                background: #000000;
                display: inline-block;
            }

            #banner-wrapper div.banner-main_buttons p {
                cursor: pointer;
                flex-basis: 100%;
                padding: 6px;
                margin: 5px 50px;
                flex-grow: 1;
                text-align: center;
                border-radius: 4px;
                background-color: #ededed;
            }

            #banner-wrapper div.banner-main_buttons p.cursor,
            #banner-wrapper div.banner-main_buttons p span.btn-btn {
                display: block;
                width: 100%;
                font-size: 14px;
                text-align: center;
            }

            #banner-wrapper div.banner-main_buttons #all_accept {
                color: #ffffff;
                background-color: #000000;
            }

            #banner-wrapper div.banner-main_buttons #essential_accept {
                color: #ffffff;
                background-color: #000000;
            }

            #banner-wrapper div.banner-main_buttons p:nth-child(3) {
                flex-basis: 100%;
                color: #ffffff;
                background-color: #0b0b0b;
            }

            #banner-wrapper div.banner-main_buttons p.btn-accept.btn-manage__save {
                opacity: 0;
                display: none;
                visibility: hidden;
                color: #ffffff;
                background-color: #030303;
            }

            #banner-wrapper div.banner-header {
                padding: 6px 12px;
                width: auto;
                height: unset;
                background-color: var(--gdpr_banner_secondary_background_color);
                display: flex;
                flex-direction: row;
                border-radius: 4px 4px 0 0;
            }

            #banner-wrapper div.banner-header__title {
                text-align: right;
                width: 100%;
                height: auto;
                font-size: 28px;
                display: flex;
                align-items: center;
                order: 2;
                display: flex;
            }

            #banner-wrapper div.banner-header__title p {
                color: var(--gdpr_banner_secondary_color);
                font-size: 28px;
                text-align: right;
                width: 100%;
                display: block;
            }

            #banner-wrapper div.banner-logo {
                display: flex;
                width: 180px;
                height: auto;
                order: 1;
            }

            #banner-wrapper div.banner-logo img {
                width: 180px;
                height: auto;
            }

            #banner-wrapper div.banner-footer {
                margin-top: 12px;
                bottom: 0;
                font-size: 13px;
                color: #707070;
                background-color: var(--gdpr_banner_secondary_background_color);
                border-radius: 0 0 4px 4px;
                height: 24px;
                width: 100%;
                display: flex;
            }

            #banner-wrapper div.banner-footer a {
                flex-grow: 1;
                text-align: center;
                color: #707070;
                background-color: var(--gdpr_banner_secondary_background_color);
            }

            #banner-wrapper div.banner-footer a:nth-child(2) {
                border-left: solid 0.5px #ddd;
                border-right: solid 0.5px #ddd;
            }

            #banner-wrapper div.banner-footer a:hover {
                color: #000000;
            }

            #banner-wrapper .cookie_tab__wrapper.marketing.display div.toggle {
                padding: unset;
            }

            #banner-wrapper .toggle label {
                position: relative;
                display: inline-block;
                width: 10em;
                height: 1em;
            }

            #banner-wrapper .toggle input {
                display: none;
            }

            #banner-wrapper .toggle .slider {
                position: absolute;
                cursor: pointer;
                width: 4em;
                height: 2.2em;
                background-color: #bfbfbf;
                transition: all 0.3s ease-in-out;
                border-radius: 1em;
                display: block;
            }

            #banner-wrapper .toggle .slider:before {
                /* verschiebbarer Button */
                position: absolute;
                content: "";
                height: 1.6em;
                width: 1.6em;
                left: 0.2em;
                bottom: 0.3em;
                background-color: white;
                border-radius: 50%;
                transition: all .3s ease-in-out;
            }

            #banner-wrapper .toggle input:checked+.slider {
                background-color: #5a9900;
                /* green */
            }

            #banner-wrapper .toggle input:focus+.slider {
                background-color: pink;
                box-shadow: 0 0 1px #5a9900;
            }

            #banner-wrapper .toggle input:checked+.slider:before {
                -webkit-transform: translateX(1.9em);
                /* Android 4 */
                -ms-transform: translateX(1.9em);
                /* IE9 */
                transform: translateX(1.9em);
            }

            #banner-wrapper .cookie_table,
            .cookie_tab__wrapper {
                width: 100%;
            }

            #banner-wrapper .cookie_tab__wrapper_header,
            #banner-wrapper .tabs,
            #banner-wrapper .tabs div p {
                color: #000000;
                background-color: #ffffff;
            }

            #banner-wrapper .cookie_tab__wrapper_header {
                padding: 20px;
                font-size: 0.9em;
            }

            #banner-wrapper .cookie_tab__wrapper_header p {
                padding-bottom: 6px;
            }

            #banner-wrapper .cookie_tab__wrapper div {
                margin-bottom: 12px;
            }

            #banner-wrapper .cookie_tab__wrapper.essential.display,
            .cookie_tab__wrapper {
                display: block;
            }

            #banner-wrapper .cookie_tab__wrapper table tbody th {
                width: 120px;
            }

            #banner-wrapper .cookie_tab__wrapper table {
                width: 100%;
            }

            #banner-wrapper .cookie_tab__wrapper table tbody {
                font-size: 0.8em;
            }

            #banner-wrapper .cookie_tab__wrapper.marketing.display div,
            .cookie_tab__wrapper.essential.display div {
                color: #000000;
                background-color: #ffffff;
                padding: 12px;
            }

            #banner-wrapper .cookie_tab__wrapper.marketing.display div table {
                color: #000000;
            }

            #banner-wrapper .banner-body__content .tabs {
                width: 100%;
                flex-direction: column;
                display: none;
                overflow: scroll;
                font-size: 14px;
                color: #000000;
                background-color: #ffffff;
                text-align: left;
            }

            .gdpr-legal-show {
                opacity: 1;
                transition: opacity 500ms;
            }

            .gdpr-legal-hide {
                opacity: 0;
                transition: opacity 500ms;
            }

            @media only screen and (max-width: 750px) {

                #banner-wrapper div.overlay,
                #banner-wrapper div.overlay_bc_banner {
                    padding: unset;
                    overflow: scroll;
                }

                #banner-wrapper div.banner-body {
                    margin-right: calc((100% - 90%) / 2);
                    margin-left: calc((100% - 90%) / 2);
                    margin-top: 25px;
                    top: 25px;
                    width: 90%;
                    min-width: 90%;
                    transform: unset;
                }

                #banner-wrapper div.banner-main_buttons p.cursor,
                #banner-wrapper div.banner-main_buttons p span.btn-btn {
                    font-size: 14px;
                    text-align: center;
                }

                #banner-wrapper div.banner-main_buttons #all_accept {
                    /* color: #ffffff; */
                    /* background-color: #4ba733; */
                }

                #banner-wrapper div.banner-main_buttons #essential_accept {
                    /* color: #ffffff; */
                    /* background-color: #4ba733; */
                }

                #banner-wrapper div.banner-main_buttons p:nth-child(3) {
                    /* color: #ffffff; */
                    /* background-color: #4ba733; */
                }

                #banner-wrapper div.banner-main_buttons p.btn-accept.btn-manage__save {
                    /* color: #ffffff; */
                    /* background-color: #4ba733; */
                }

                #banner-wrapper div.banner-header {
                    /* background-color: #ffffff; */
                    display: flex;
                }

                #banner-wrapper div.banner-header__title {
                    text-align: center;
                    height: auto;
                    font-size: 24px;
                    order: 2;
                    display: flex;
                }

                #banner-wrapper div.banner-header__title p {
                    /* color: #000000; */
                    font-size: 24px;
                    text-align: center;
                    width: 100%;
                    display: block;
                }

                #banner-wrapper div.banner-logo {
                    display: flex;
                    width: 180px;
                    height: auto;
                    order: 1;
                }

                #banner-wrapper div.banner-logo img {
                    width: 180px;
                    height: auto;
                }

                #banner-wrapper div.banner-main {
                    font-size: 14px;
                    /* color: #000000; */
                    /* background-color: #ffffff; */
                    text-align: left;
                }

                #banner-wrapper .banner-body__content .tabs {
                    font-size: 14px;
                    /* color: #000000; */
                    /* background-color: #ffffff; */
                    text-align: left;
                }

                #banner-wrapper div.banner-footer {
                    font-size: 14px;
                    /* color: #000000; */
                    /* background-color: #ffffff; */
                }

                #banner-wrapper div.banner-footer a {
                    text-align: center;
                    /* color: #000000; */
                    /* background-color: #ffffff; */
                }

                #banner-wrapper div.banner-footer a:hover {
                    /* color: #000000; */
                }

                #banner-wrapper .banner-body__content .tabs {
                    max-height: unset;
                }
            }
            }
            }
        </style>

        <div class="overlay_bc_banner">
            <div class="banner-body">
                <div class="banner-body__content">
                    <div class="banner-header">
                        <div class="banner-logo">

                            <img class="logo" src="data:image/png;base64,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" alt="my logo title">

                        </div>
                        <div class="banner-header__title">
                            <p>Cookies</p>
                        </div>
                    </div>
                    <div class="banner-main">
                        <div class="banner-main_header">
                            <p>Wir verwenden Cookies. Viele sind notwendig, um die Website und ihre Funktionen zu
                                betreiben, andere sind für statistische oder Marketingzwecke. Mit der Entscheidung "Nur
                                essentielle Cookies akzeptieren" werden wir Ihre Privatsphäre respektieren und keine
                                Cookies setzen, die nicht für den Betrieb der Seite notwendig sind.</p>
                            <p></p>
                        </div>
                        <div class="banner-main_header list-type">
                            <p>Essenzielle</p>
                            <p>Statistik & Marketing</p>
                        </div>
                        <div class="banner-main_buttons">
                            <p id="all_accept" class="btn-accept">
                                <span class="btn-btn btn-btn-accept-all cursor" data-cookie-accept-all="">Alle
                                    akzeptieren</span>
                            </p>
                            <p id="essential_accept" class="btn-accept">
                                <span class="btn-btn btn-btn-save cursor" data-cookie-save="">Nur Essentielle Cookies
                                    akzeptieren</span>
                            </p>
                            <!-- todo indivuell entscheiden -->
                            <p class="btn-manage cursor">
                                Cookie Einstellungen</p>

                            <p class="btn-accept btn-manage__save cursor" hidden="">Speichern & schließen</p>
                        </div>

                    </div>

                    <div class="tabs" hidden="hidden">

                        <div class="cookie_tab__wrapper_header">
                            <p id="countEssentials">
                                <strong>Essenzielle</strong>
                                <strong class="counter"></strong>
                            </p>
                            <p>Essenzielle Cookies ermöglichen grundlegende Funktionen und sind für die einwandfreie
                                Funktion der Website erforderlich.</p>
                            <details>
                                <summary id="summary_essential" style="cursor: pointer;">Informationen anzeigen
                                </summary>
                                <div class="cookie_tab__wrapper essential display"></div>
                            </details>


                        </div>

                        <div class="cookie_tab__wrapper_header">
                            <p id="countMarketing">
                                <strong>Statistik & Marketing</strong>
                                <strong class="counter"></strong>
                            </p>
                            <p>Marketing-Cookies werden von Drittanbietern oder Publishern verwendet, um personalisierte
                                Werbung anzuzeigen. Sie tun dies, indem sie Besucher über Websites hinweg verfolgen.</p>
                            <div class="toggle">
                                <label for="input_all_cookies">
                                    <input name="all_cookies" id="input_all_cookies" type="checkbox"><span class="slider"></span>
                                </label>
                            </div>
                            <p style="height: 1.2em;"></p>
                            <details>
                                <summary id="summary_marketing" style="cursor: pointer;">Informationen anzeigen
                                </summary>
                                <div class="cookie_tab__wrapper marketing display"></div>
                            </details>

                        </div>

                    </div>

                    <div style="text-align: center; font-size: 0.7em; color: #7d7d7d;">
                        <a href="https://gdpr-legal-cookie.myshopify.com/" rel="nofollow" style="color: #7d7d7d;">GDPR
                            legal Cookie</a>
                    </div>
                    <div class="banner-footer">

                        <a href="../../../policies/privacy-policy.html">Datenschutzhinweis</a>



                        <a href="/pages/kontakt">Kontakt</a>



                        <a href="../../../policies/legal-notice.html">Impressum</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="shopify-block-8218531531362863771" class="shopify-block shopify-app-block">
        <script>
            let shopifyLiquidValuesApp7Ext = {
                product: {
                    handle: "mars-roll-on-100-parfumol"
                }
            }
            window.shopifyLiquidValuesApp7Ext = shopifyLiquidValuesApp7Ext;
        </script>



    </div>
    <div id="shopify-block-10570433277407501837" class="shopify-block shopify-app-block">
        <!-- BEGIN app snippet: gsf-gcr-badge -->

        <!-- END app snippet -->
    </div>
    <div id="shopify-block-65770340888967700" class="shopify-block shopify-app-block">
        <style>
            .sc_install-initialization {
                position: fixed;
                background-color: #fff;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                z-index: 100000000000;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>

        <script type="text/javascript">
            var scLoadingOverlayHtml = '<div class="sc_install-initialization"><div style="width: 80px;"><svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class ="lds-rolling" ><circle cx="50" cy="50" fill="none" stroke-width="7" r="25" stroke-dasharray="117.80972450961724 41.269908169872416" transform="rotate(47.1629 50 50)" style="stroke: #5C6AC4" ><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite" /></circle></svg></div> Please wait. Theme installer is being initialized.</div>';
            var scDesignData = {
                "style": "simple",
                "position": "right",
                "width": "550px",
                "codeButtonColor": "#ffffff",
                "codeButtonBackgroundColor": "#000000",
                "codeButtonBorderColor": "#000000",
                "submitButtonBorderColor": "#5aaa34",
                "loadingBg": "#000000",
                "spinnerColor": "#ffffff",
                "inputColor": "#000000",
                "inputBg": "#ffffff",
                "inputBorder": "#000000",
                "discountInfoColor": "#000000",
                "discountInfoBg": "#fafafa",
                "discountInfoBorder": "#e1e1e1"
            } || {};
            window.scIsCartPage = false;
            window.scCartData = {
                "note": null,
                "attributes": {},
                "original_total_price": 0,
                "total_price": 0,
                "total_discount": 0,
                "total_weight": 0.0,
                "item_count": 0,
                "items": [],
                "requires_shipping": false,
                "currency": "EUR",
                "items_subtotal_price": 0,
                "cart_level_discount_applications": [],
                "checkout_charge_amount": 0
            };
            if (!window.scMoneyFormat) window.scMoneyFormat = '€{{amount_with_comma_separator}}';
            window.scDesignConfig = {
                style: scDesignData.style || 'simple',
                position: scDesignData.position || 'right',
                containerWidth: {
                    width: scDesignData.width || '350px'
                },
                codeButton: {
                    color: scDesignData.codeButtonColor || '#fff',
                    backgroundColor: scDesignData.codeButtonBackgroundColor || '#5aaa34',
                    border: '1px solid ' + (scDesignData.codeButtonBorderColor || '#5aaa34')
                },
                submitButton: {
                    borderColor: scDesignData.submitButtonBorderColor
                },
                loadingBg: {
                    background: scDesignData.loadingBg || '#339933'
                },
                spinner: {
                    stroke: scDesignData.spinnerColor || '#ffffff'
                },
                codeInput: {
                    borderColor: scDesignData.inputBorder || '#aeaeae',
                    color: scDesignData.inputColor || '#339933',
                    backgroundColor: scDesignData.inputBg || '#ffffff'
                },
                discountInfo: {
                    background: scDesignData.discountInfoBg || '#fafafa',
                    border: '1px solid ' + (scDesignData.discountInfoBorder || '#e1e1e1'),
                    color: scDesignData.discountInfoColor || '#535353'
                }
            };



            if (!window.scTranslationConfig) {
                window.scTranslationConfig = {
                    "placeholder": "Rabattcode eingeben",
                    "submitBtn": "Einlösen",
                    "codeLabel": "Code:",
                    "discountLabel": "Rabatt:",
                    "giftCardLabel": "Geschenkkarte:",
                    "total": "Gesamt:",
                    "errorAutomaticDiscount": "Auf diese Bestellung wurde ein Rabatt gewährt. Du kannst keinen weiteren Rabatt hinzufügen",
                    "errorCode": "Konnte keinen gültigen Rabatt finden, der zu dem eingegebenen Code gehört",
                    "tooManyAttempts": "Zu viele Versuche, bitte versuchen Sie es in ein paar Minuten erneut",
                    "errorNetwork": "Netzwerkfehler aufgetreten. Sie können Ihren Rabattcode an der Kasse eingeben",
                    "authorized": "Rabatte sind nur für autorisierte Benutzer verfügbar",
                    "messages": {
                        "shopify.checkout.order_summary.cart_does_not_meet_discount_requirements_notice": "Der Rabattcode \u003cstrong\u003e{{ code }}\u003c\/strong\u003e ist für die Artikel in deinem Warenkorb nicht gültig",
                        "shopify.checkout.order_summary.discount_requires_customer_notice": "Gib deine Versandinformationen ein, um den Rabattcode \u003cstrong\u003e{{ code }}\u003c\/strong\u003e zu übernehmen",
                        "shopify.checkout.order_summary.customer_does_not_meet_discount_requirements_notice": "Der Rabattcode \u003cstrong\u003e{{ code }}\u003c\/strong\u003e ist derzeit für dich nicht verfügbar",
                        "shopify.checkout.order_summary.shipping_information_does_not_meet_discount_requirements_notice": "Der Rabattcode \u003cstrong\u003e{{ code }}\u003c\/strong\u003e ist für deine Lieferadresse nicht verfügbar",
                        "shopify.checkout.order_summary.customer_already_used_once_per_customer_discount_notice": "Der \u003cstrong\u003e{{ code }}\u003c\/strong\u003e-Rabattcode wurde bereits genutzt",
                        "shopify.checkout.field_errors.reduction_code_code_not_found": "Gib einen gültigen Rabattcode oder Geschenkgutschein ein",
                        "shopify.checkout.field_errors.reduction_code_discount_not_found": "Gib einen gültigen Rabattcode ein",
                        "shopify.errors.discount_not_found": "Konnte keinen gültigen Rabatt finden, der zu dem eingegebenen Code gehört",
                        "shopify.checkout.order_summary.discount_already_applied": "Auf diese Bestellung wurde ein Rabatt gewährt. Du kannst keinen weiteren Rabatt hinzufügen",
                        "shopify.errors.discount_disabled": "Dieser Rabatt wurde deaktiviert",
                        "shopify.errors.discount_expired": "Dieser Rabatt ist nicht mehr gültig",
                        "shopify.errors.discount_limit_reached": "Dieser Rabatt hat seine Nutzungsgrenze erreicht",
                        "shopify.checkout.field_errors.reduction_code_gift_card_code_invalid": "Gib einen gültigen Geschenkgutschein ein",
                        "shopify.checkout.field_errors.reduction_code_gift_card_unusable_with_subscriptions": "Du kannst einen Geschenkgutschein nicht zum Kauf eines Abonnements verwenden",
                        "shopify.checkout.field_errors.reduction_code_gift_card_unusable": "Du kannst einen Geschenkgutschein nicht zum Kauf eines anderen Geschenkgutscheins verwenden",
                        "shopify.checkout.field_errors.gift_card_already_applied": "Diese Geschenkkarte wurde bereits zu deiner Bestellung hinzugefügt",
                        "shopify.checkout.field_errors.gift_card_disabled": "Dieser Geschenkgutschein ist nicht mehr verfügbar",
                        "shopify.checkout.field_errors.gift_card_expired": "Dieser Geschenkgutschein ist abgelaufen",
                        "shopify.checkout.field_errors.gift_card_depleted": "Auf diesem Geschenkgutschein ist kein Guthaben mehr",
                        "shopify.checkout.field_errors.gift_card_currency_mismatch": "Nur Geschenkgutscheine in {{ checkout_currency }} können für diese Bestellung verwendet werden",
                        "shopify.checkout.field_errors.physical_gift_card_invalid_quantity": "Physische Geschenkgutscheine müssen eine Menge aufweisen, die der Nummer der Geschenkgutschein-Codes entspricht",
                        "shopify.checkout.field_errors.physical_gift_card_duplicate_code": "Die Position \"Geschenkgutschein\" enthält einen doppelten Code",
                        "shopify.checkout.field_errors.physical_gift_card_invalid_code": "Der Code des Geschenkgutscheins ist ungültig",
                        "shopify.checkout.thank_you.gift_card_confirmation_by_text": "Geschenkgutscheine werden per SMS gesendet. Sollten Sie Ihre nicht erhalten haben, senden Sie sie erneut oder kontaktieren Sie uns",
                        "shopify.checkout.thank_you.gift_card_confirmation_by_email": "Geschenkgutschein werden per E-Mail gesendet. Sollten Sie Ihre nicht erhalten haben, senden Sie sie erneut oder kontaktieren Sie uns",
                        "shopify.errors.gift_card_already_applied": "Der Code wurde bereits auf deine Bestellung angewendet",
                        "shopify.errors.gift_card_code_invalid": "Ungültiger Code",
                        "shopify.errors.gift_card_currency_mismatch": "{{ gift_card_currency }} Geschenkkarten können nicht für {{ checkout_currency }}-Bestellungen verwendet werden",
                        "shopify.errors.gift_card_depleted": "Es befindet sich kein Guthaben mehr auf dieser Geschenkkarte",
                        "shopify.errors.gift_card_disabled": "Geschenkkarte ist gesperrt",
                        "shopify.errors.gift_card_expired": "Geschenkkarte ist abgelaufen",
                        "unexpected": "Unbekannter Fehler aufgetreten. Sie können Ihren Rabattcode an der Kasse eingeben"
                    },
                    "freeShippingLabel": "Kostenloser Versand",
                    "errorItemInvalid": "Der Rabattcode \u003cstrong\u003e{{ code }}\u003c\/strong\u003e ist für die Artikel in deinem Warenkorb nicht gültig"
                } || {
                    "placeholder": "Discount code or gift card",
                    "submitBtn": "Apply",
                    "codeLabel": "Code:",
                    "discountLabel": "Discount:",
                    "giftCardLabel": "Gift card:",
                    "total": "Total:",
                    "errorAutomaticDiscount": "A discount has been applied to this order. You can’t add another discount",
                    "errorCode": "Unable to find a valid discount matching the code entered",
                    "tooManyAttempts": "Too many attempts please try again in a few minutes",
                    "errorNetwork": "Network error occured. You may enter your discount code during the checkout",
                    "authorized": "Discounts are available only for authorized users",
                    "messages": {
                        "shopify.checkout.order_summary.cart_does_not_meet_discount_requirements_notice": "\u003cstrong\u003e{{ code }}\u003c\/strong\u003e discount code isn’t valid for the items in your cart",
                        "shopify.checkout.order_summary.discount_requires_customer_notice": "Enter your shipping information to apply the \u003cstrong\u003e{{ code }}\u003c\/strong\u003e discount code",
                        "shopify.checkout.order_summary.customer_does_not_meet_discount_requirements_notice": "\u003cstrong\u003e{{ code }}\u003c\/strong\u003e discount code isn’t available to you right now",
                        "shopify.checkout.order_summary.shipping_information_does_not_meet_discount_requirements_notice": "\u003cstrong\u003e{{ code }}\u003c\/strong\u003e discount code isn’t available for your shipping address",
                        "shopify.checkout.order_summary.customer_already_used_once_per_customer_discount_notice": "The {{ code }} discount code has already been used",
                        "shopify.checkout.field_errors.reduction_code_code_not_found": "Enter a valid discount code or gift card",
                        "shopify.checkout.field_errors.reduction_code_discount_not_found": "Enter a valid discount code",
                        "shopify.errors.discount_not_found": "Unable to find a valid discount matching the code entered",
                        "shopify.checkout.order_summary.discount_already_applied": "A discount has been applied to this order. You can’t add another discount",
                        "shopify.errors.discount_disabled": "This discount has been disabled",
                        "shopify.errors.discount_expired": "This discount is not valid anymore",
                        "shopify.errors.discount_limit_reached": "This discount has reached its usage limit",
                        "shopify.checkout.field_errors.reduction_code_gift_card_code_invalid": "Enter a valid gift card",
                        "shopify.checkout.field_errors.reduction_code_gift_card_unusable_with_subscriptions": "You can’t use a gift card to buy a subscription",
                        "shopify.checkout.field_errors.reduction_code_gift_card_unusable": "You can’t use a gift card to buy another gift card",
                        "shopify.checkout.field_errors.gift_card_already_applied": "This gift card has already been applied to your order",
                        "shopify.checkout.field_errors.gift_card_disabled": "This gift card is no longer available",
                        "shopify.checkout.field_errors.gift_card_expired": "This gift card has expired",
                        "shopify.checkout.field_errors.gift_card_depleted": "This gift card has no funds left",
                        "shopify.checkout.field_errors.gift_card_currency_mismatch": "Only gift cards in {{ checkout_currency }} can be used with this order",
                        "shopify.checkout.field_errors.physical_gift_card_invalid_quantity": "Physical gift card line items must have a quantity that matches the number of gift card codes",
                        "shopify.checkout.field_errors.physical_gift_card_duplicate_code": "Physical gift card line item contains duplicate code",
                        "shopify.checkout.field_errors.physical_gift_card_invalid_code": "Physical gift card code is invalid",
                        "shopify.checkout.thank_you.gift_card_confirmation_by_text": "Gift cards are sent by text. If you haven’t received yours, try sending them again or contact us",
                        "shopify.checkout.thank_you.gift_card_confirmation_by_email": "Gift cards are sent by email. If you haven’t received yours, try sending them again or contact us",
                        "shopify.errors.gift_card_already_applied": "Code has already been applied to your checkout",
                        "shopify.errors.gift_card_code_invalid": "Code is invalid",
                        "shopify.errors.gift_card_currency_mismatch": "{{ gift_card_currency }} gift cards can’t be applied on {{ checkout_currency }} orders",
                        "shopify.errors.gift_card_depleted": "There are no funds left on this gift card",
                        "shopify.errors.gift_card_disabled": "Gift card is disabled",
                        "shopify.errors.gift_card_expired": "Gift card is expired",
                        "unexpected": "Unknown error occured. You may enter your discount code during the checkout"
                    },
                    "freeShippingLabel": "Free Shipping",
                    "errorItemInvalid": "\u003cstrong\u003e{{ code }}\u003c\/strong\u003e discount code isn’t valid for the items in your cart"
                }; <
                !--BEGIN app snippet: messages-- >

                    <
                    !--END app snippet-- >
            }


            window.scPrimaryLocale = 'de';


            if (!window.scThemeConfig) {

                var scThemeConfig = {
                    "theme": "143261335818",
                    "help": {
                        "0": false,
                        "1": false,
                        "2": false,
                        "3": false
                    },
                    "cartDiscountSelector": {
                        "path": "#shopify-section-template--17968425074954__cart div.cart-drawer-content div.cart-drawer-footer a.btn",
                        "type": 0
                    },
                    "cartTotalSelector": {
                        "path": "#shopify-section-template--17968425074954__cart div.cart-drawer-content div.cart-drawer-footer div.cart-drawer-footer-price span.cart-drawer-footer-total span.price span",
                        "type": 0
                    },
                    "ajaxDicountSelector": {
                        "path": "#shopify-section-cart-drawer div.cart-drawer-content div.cart-drawer-footer a.btn",
                        "type": 0
                    }
                };

            }







            var scProduct = 43885242745098;
            var scProductUrl = '/products/365days-woman';

            var cartTotal = 0;

            var __assign = (this && this.__assign) || function() {
                __assign = Object.assign || function(t) {
                    for (var s, i = 1, n = arguments.length; i < n; i++) {
                        s = arguments[i];
                        for (var p in s)
                            if (Object.prototype.hasOwnProperty.call(s, p))
                                t[p] = s[p];
                    }
                    return t;
                };
                return __assign.apply(this, arguments);
            };
            var setValue = function(name, value) {
                var _a;
                var data = JSON.parse(sessionStorage.getItem('scInstallInfo'));
                sessionStorage.setItem('scInstallInfo', JSON.stringify(__assign(__assign({}, data), (_a = {}, _a[name] = value, _a))));
            };
            var parseQueryString = function() {
                var qs = window.location.search.replace('?', '');
                var items = qs.split('&');
                return items.reduce(function(data, item) {
                    var _a = item.split('='),
                        key = _a[0],
                        value = _a[1];
                    if (data[key] !== undefined) {
                        if (!Array.isArray(data[key])) {
                            data[key] = [data[key]];
                        }
                        data[key].push(value);
                    } else {
                        data[key] = value;
                    }
                    return data;
                }, {});
            };

            var query = parseQueryString();
            if (query.install) {
                setValue('theme', query.install);
            }

            var scLoadingOverlay;

            var getValue = function(name) {
                var data = JSON.parse(sessionStorage.getItem('scInstallInfo'));
                return data && data[name] !== undefined ? data[name] : null;
            };

            var isInstall = function() {
                var themeId = getValue('theme');
                var theme = window.Shopify ? window.Shopify.theme : null;
                var id = theme ? theme.id : null;
                return themeId === id.toString();
            };

            var scAppendLoadOverlay = function() {
                scLoadingOverlay = document.createElement('div');
                scLoadingOverlay.innerHTML = scLoadingOverlayHtml;
                document.body.appendChild(scLoadingOverlay);
            };

            var scLoadInstaller = function() {
                scAppendLoadOverlay();
                const script = document.createElement('script');
                script.src = 'https://cart-discount.herokuapp.com/js/installer.min.js?v=' + Date.now();
                script.onload = function() {
                    scLoadingOverlay.remove();
                }
                document.body.appendChild(script);
            };

            if (window.scProduct && isInstall()) {
                scLoadInstaller();
            }

            var scPrimaryCurrency = 'EUR';
            window.ScInit = {
                "c": 1657118145182
            } || {};
        </script>




        <script src="../../../extensions/ed1aa012-9f54-4c9a-80b6-a4c9115bf674/2.66.0/assets/storefront.min.js" defer=""></script>


    </div>
</body>

</html>