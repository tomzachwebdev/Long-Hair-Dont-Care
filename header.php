<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Dec 29 2021 16:04:56 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="61a644c49f4ce900cf07666e" data-wf-site="61a644c49f4ce955f607666b">
<head>
  <meta charset="utf-8">
  <title>Long Hair Don't Care - Hair Growth Multivitamin</title>
  <meta content="Long Hair Don't Care" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta name="description" content="Long Hair Don't Care provides hair growth multivitamins to promote longer hair, skin and nails. Ban the pink tax, high quality made in America Products at affordable prices">

  <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />


  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="<?php bloginfo( 'template_directory'); ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="<?php bloginfo('template_directory');?>/images/webclip.png" rel="apple-touch-icon">
  <?php wp_head(); ?>
</head>
<body <?php body_class("body"); ?>>
  <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navigation w-nav">

  <div class="navigation-items">
      <a href="<?php bloginfo('url');?>" aria-current="page" class="logo-link w-nav-brand w--current"><img src="<?php bloginfo('template_directory');?>/images/wordmark-rose.png" width="132" sizes="(max-width: 479px) 100vw, 132px" srcset="<?php bloginfo( "template_directory" )?>/images/wordmark-rose-p-500.png 500w, <?php bloginfo('template_directory');?>/images/wordmark-rose-p-800.png 800w, <?php bloginfo('template_directory');?>/images/wordmark-rose-p-1080.png 1080w, <?php bloginfo('template_directory');?>/images/wordmark-rose.png 1920w" alt="" class="logo-image"></a>
      

      <div class="navigation-wrap">
      <nav role="navigation" class="navigation-items w-nav-menu" style="transform: translateY(0px) translateX(0px);">
        <?php 
            $menuItems = wp_get_nav_menu_items('top-menu');
            if (is_array($menuItems) || is_object($menuItems) && !empty($menuItems)){
                foreach ($menuItems as $item){
                  echo '<a class="navigation-item w-nav-link" href="' . $item->url . '">' . $item->title . '</a>';
                }
          }else{
            echo "no items found";
          }
          ?>
          </nav>

        <div data-node-type="commerce-cart-wrapper" data-open-product="" data-wf-cart-type="rightSidebar" data-wf-cart-query="" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper cart">
          <a href="<?php echo wc_get_cart_url(); ?>" data-node-type="commerce-cart-open-link" class="w-commerce-commercecartopenlink button cc-cart w-inline-block">
            <div class="w-inline-block">Cart</div>
            <div class="w-commerce-commercecartopenlinkcount cart-quantity"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
          </a>

          <div data-node-type="commerce-cart-container-wrapper" style="display:none" class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-rightSidebar">
            <div data-node-type="commerce-cart-container" class="w-commerce-commercecartcontainer cart-container">
              <div class="w-commerce-commercecartheader cart-header">
                <h4 class="heading-jumbo-tiny">your cart</h4>
                <a href="#" data-node-type="commerce-cart-close-link" class="w-commerce-commercecartcloselink close-button w-inline-block"><img src="<?php bloginfo( 'template_directory');?>/images/close-icon.svg" alt="" class="icon"></a>
              </div>

              <div class="w-commerce-commercecartformwrapper">
                <form data-node-type="commerce-cart-form" style="display:none" class="w-commerce-commercecartform">
                  <script type="text/x-wf-template" id="wf-template-338fcf85-0add-3b81-68ce-59ae991bfb80"></script>
                  <div class="w-commerce-commercecartlist cart-list" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-338fcf85-0add-3b81-68ce-59ae991bfb80"></div>
                  <div class="w-commerce-commercecartfooter cart-footer">
                    <div class="w-commerce-commercecartlineitem cart-line-item">
                      <div>Subtotal</div>
                      <div class="w-commerce-commercecartordervalue paragraph-bigger"></div>
                    </div>
                    <div>
                      <div data-node-type="commerce-cart-quick-checkout-actions">
                        <a data-node-type="commerce-cart-apple-pay-button" style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat" class="w-commerce-commercecartapplepaybutton apple-pay">
                          <div></div>
                        </a>
                        <a data-node-type="commerce-cart-quick-checkout-button" style="display:none" class="w-commerce-commercecartquickcheckoutbutton pay-with-browser"><svg class="w-commerce-commercequickcheckoutgoogleicon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewbox="0 0 16 16">
                            <defs>
                              <polygon id="google-mark-a" points="0 .329 3.494 .329 3.494 7.649 0 7.649"></polygon>
                              <polygon id="google-mark-c" points=".894 0 13.169 0 13.169 6.443 .894 6.443"></polygon>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                              <path fill="#4285F4" d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469"></path>
                              <path fill="#34A853" d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16"></path>
                              <g transform="translate(0 4)">
                                <mask id="google-mark-b" fill="#fff">
                                  <use xlink:href="#google-mark-a"></use>
                                </mask>
                                <path fill="#FBBC04" d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337" mask="url(#google-mark-b)"></path>
                              </g>
                              <mask id="google-mark-d" fill="#fff">
                                <use xlink:href="#google-mark-c"></use>
                              </mask>
                              <path fill="#EA4335" d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291" mask="url(#google-mark-d)"></path>
                            </g>
                          </svg><svg class="w-commerce-commercequickcheckoutmicrosofticon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16">
                            <g fill="none" fill-rule="evenodd">
                              <polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon>
                              <polygon fill="#7DB902" points="15 7 9 7 9 1 15 1"></polygon>
                              <polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9"></polygon>
                              <polygon fill="#FFB700" points="15 15 9 15 9 9 15 9"></polygon>
                            </g>
                          </svg>
                          <div>Pay with browser.</div>
                        </a>
                      </div>
                      <div style="position:relative" data-wf-paypal-button="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;color&quot;:&quot;black&quot;,&quot;shape&quot;:&quot;rect&quot;,&quot;label&quot;:&quot;paypal&quot;,&quot;tagline&quot;:false,&quot;note&quot;:false}">
                        <div style="position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;z-index:999;cursor:auto"></div>
                      </div>
                      <a href="checkout.html" value="Continue to Checkout" data-node-type="cart-checkout-button" class="w-commerce-commercecartcheckoutbutton button" data-loading-text="Hang Tight...">Continue to Checkout</a>
                    </div>
                  </div>
                </form>
                <div class="w-commerce-commercecartemptystate">
                  <div class="paragraph-light">No items found.</div>
                </div>
                <div style="display:none" data-node-type="commerce-cart-error" class="w-commerce-commercecarterrorstate status-message cc-error-message">
                  <div class="w-cart-error-msg" data-w-cart-quantity-error="Product is not available in this quantity." data-w-cart-general-error="Something went wrong when adding this item to the cart." data-w-cart-checkout-error="Checkout is disabled on this site." data-w-cart-cart_order_min-error="Cart failed." data-w-cart-subscription_error-error="Cart failed.">Product is not available in this quantity.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-button w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
 
        <img src="<?php bloginfo("template_directory");?>/images/menu-icon_1menu-icon.png" width="22" alt="" class="menu-icon"></div>
            
      </div>
    </div>
  </div>