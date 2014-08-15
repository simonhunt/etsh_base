// Responsive Navigation Script
(function ($, Drupal, window, document, undefined) {
  $(document).ready(function() {
    $('.menu-button').sidr({
      name: 'sidr-responsive-menu',
      side: 'left',
      source: '#responsive-menu',
      renaming: false,
      body: '#page',
      speed: 250
    });
  });
}(jQuery, Drupal, this, this.document));
