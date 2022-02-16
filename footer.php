<div class="section">
    <div class="container">
      <div class="w-layout-grid footer">
        <a href="index.html" id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971b-87e29718" aria-current="page" class="logo-link w-inline-block w--current"><img src="<?php bloginfo( "template_directory" ) ?>/images/full-cherry.svg" width="65" alt="" class="logo-footer"></a>
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971d-87e29718" class="label">Menu</div>
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971f-87e29718" class="links-section-footer">
        <?php 
            $menuItems = wp_get_nav_menu_items('footer-menu');
            if (is_array($menuItems) || is_object($menuItems) && !empty($menuItems)){
                foreach ($menuItems as $item){
                  echo '<a class="footer-link" href="' . $item->url . '">' . $item->title . '</a>';
                }
          }else{
            echo "no items found";
          }
          ?>
          <!-- <a href="index.html" aria-current="page" class="footer-link w--current">Home</a>
          <a href="about.html" class="footer-link">About</a>
          <a href="contact.html" class="footer-link">Contact</a>
          <a href="products.html" class="footer-link">Products</a> -->
          <!-- <a href="#" class="footer-link">Blog</a> -->
        </div>
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29724-87e29718" class="label">Categories</div>
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29726-87e29718" class="links-section-footer">
          <div class="w-dyn-list">
            <div role="list" class="w-dyn-items">
              <div role="listitem" class="w-dyn-item">
                <!-- <a href="#" class="footer-link"></a> -->
                <?php 
                    $menuItems = wp_get_nav_menu_items('categories-menu');
                    if (is_array($menuItems) || is_object($menuItems) && !empty($menuItems)){
                        foreach ($menuItems as $item){
                        echo '<a class="footer-link" href="' . $item->url . '">' . $item->title . '</a>';
                        }
                }else{
                    echo "no items found";
                }
                ?>
              </div>
            </div>
            <!-- <div class="status-message w-dyn-empty">
              <div>No items found.</div>
            </div> -->
          </div>
        </div>
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2972d-87e29718" class="label">Help</div>
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2972f-87e29718" class="links-section-footer">
        <?php 
            $menuItems = wp_get_nav_menu_items('help-menu');
            if (is_array($menuItems) || is_object($menuItems) && !empty($menuItems)){
                foreach ($menuItems as $item){
                  echo '<a class="footer-link" href="' . $item->url . '">' . $item->title . '</a>';
                }
          }else{
            echo "no items found";
          }
          ?>
          <!-- <a href="" class="footer-link">Shipping</a>
          <a href="contact.html" class="footer-link">Returns &amp; Exchange</a>
          <a href="contact.html" class="footer-link">Product Care</a> -->
        </div>
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29736-87e29718" class="label">Follow</div>
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29738-87e29718" class="links-section-footer">
          <a href="https://www.instagram.com/longhairdontcarebeauty/" target="_blank" class="footer-link">Instagram</a>
          <a href="https://www.tiktok.com/@longhairdontcarebeauty" target="_blank" class="footer-link">TikTok</a>
          <a href="https://www.facebook.com/longhairdontcarebeauty/" target="_blank" class="footer-link">Facebook</a>
          <a href="https://twitter.com/longhairdontcarebeauty" target="_blank" class="footer-link">Twitter</a>
        </div>
      </div>
    </div>
  </div>
    <?php wp_footer(); ?>
</body>
</html>