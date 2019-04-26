		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
   		<base href="https://thuytinhhoangson.com/"/>
        <meta name="generator" content="TYPO3 4.6 CMS"/>
        <meta name="language" content="de"/>
        <meta name="revisit-after" content="14 days"/>
        <meta name="robots" content="all"/>
        <link rel="stylesheet" type="text/css" href="<?php echo public_url()?>site/css/stylesheet_cd5544beb4.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="<?php echo public_url()?>site/css/global.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="<?php echo public_url()?>site/css/en.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="<?php echo public_url()?>site/css/typo3.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="<?php echo public_url()?>site/css/print.css" media="print"/>
        <link rel="stylesheet" type="text/css" href="<?php echo public_url()?>site/css/thickbox.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="<?php echo public_url()?>site/css/kw.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="<?php echo public_url()?>site/css/custom.css?ver=1" media="screen"/>
        <link rel="stylesheet" type="text/css" href="<?php echo public_url()?>site/css/info.css" media="screen"/>
        <script src="<?php echo public_url()?>site/js/common.js" type="text/javascript"></script>
        <script src="<?php echo public_url()?>site/js/swfobject.js" type="text/javascript"></script>
        <script src="<?php echo public_url()?>site/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo public_url()?>site/js/googleAnalytics.js" type="text/javascript"></script>
        <script src="<?php echo public_url()?>site/js/thickbox.js" type="text/javascript"></script>
        <script src="<?php echo public_url()?>site/js/javascript_757c080409.js" type="text/javascript"></script>
        <title>
            <?php if(isset($info)){ 
                echo $info->title;}
            else if(isset($product)){
                echo $product->site_title;
            }else {echo "Thủy tinh cao cấp";}?>
        </title>
        <meta name="keywords" content="<?php if(isset($info)){ 
                                                    echo $info->title;
                                                     echo $info->meta_key;
                                                    
                                        }
                                        else if(isset($product)){
                                             echo $product->name;
                                              echo $product->meta_key;
                                        }
                                        else{echo "<br/> Thủy tinh cao cấp.";}?>" />
        <meta name="description" content="<?php if(isset($info)){ 
                                                    //echo $info->title;
                                                    echo $info->meta_desc;
                                                    
                                        }
                                        else if(isset($product)){
                                             //echo $product->name;
                                             echo $product->meta_desc;
                                        }
                                        else{echo "Thủy tinh cao cấp.";}?>" />
        <script type="text/javascript" src="<?php echo public_url()?>site/js/slideshow.js"></script>
        <link type="text/css" media="screen" rel="stylesheet" href="<?php echo public_url()?>site/css/colorbox.css"/>
        <script type="text/javascript" src="<?php echo public_url()?>site/js/jquery.colorbox.js"></script>
        <!-- Latest compiled and minified CSS -->
         
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
         
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery(".rzcolorbox").colorbox(
                    current: "Image {current} of {total}",
                    maxHeight: "80%",
                    opacity: "0.85",
                    transition: "fade",
                    speed: 350,
                    slideshowSpeed: 2500,
                    previous: "previous",
                    next: "next",
                    close: "<img src='/fileadmin/templates/images/pop_close.png' />"
                });
        </script> -->
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css"/>
        <style>
            .cc-window {
                box-shadow: -5px 0 10px 0 rgba(0,0,0,0.65);
            }

            @media screen and (min-width: 415px) {
                .cc-window .cc-message {
                    padding-right: 30px;
                }
            }
        </style>
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script> -->
        <script type="text/javascript">
            $(function(){
                  $('#myCarousel').carousel();
                });
        </script>
        <!-- <script>
            window.addEventListener("load", function() {
                window.cookieconsent.initialise({
                    "palette": {
                        "popup": {
                            "background": "#189DD9",
                            "text": "#ffffff"
                        },
                        "button": {
                            "background": "#ffffff",
                            "text": "#189DD9"
                        }
                    },
                    "position": "bottom",
                    "content": {
                        "message": "We use Cookies on this Website to enhance the user experience and provide the best possible Service. By continuing to browse this Website, you consent to our use of Cookies.",
                        "dismiss": "OK",
                        "link": "Learn more",
                        "href": "/en/meta-navigation-footer/data-protection.html"
                    },
                    "elements": {
                        link: '<a aria-label="{{link}}" tabindex="0" class="cc-link thickbox" href="{{href}}" target="_blank">{{link}}</a>'
                    },
                    onPopupOpen: function(status) {
                        tb_init(".cc-link");
                    }

                })
            });
        </script> -->
        <!-- Facebook Pixel Code -->
      <!--   <script>
            !function(f, b, e, v, n, t, s) {
                if (f.fbq)
                    return;
                n = f.fbq = function() {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                }

                ;
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '281919352679919');
            fbq('track', 'PageView');
        </script> -->
        <!-- <noscript>
            <img height="1" width="1" src="https://www.facebook.com/tr?id=281919352679919&ev=PageView
&noscript=1"/>
        </noscript>
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            try {
                var pageTracker = _gat._getTracker("UA-8310365-1");
                pageTracker._trackPageview();
            } catch (err) {}
        </script> -->