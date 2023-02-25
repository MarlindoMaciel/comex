let mix = require('laravel-mix');

mix
  .sass('resources/scss/bootstrap.scss','public/bootstrap/bootstrap.css')  
  .sass('resources/scss/fancybox.scss','public/fancybox/fancybox.css')  
  .sass('resources/scss/fontawesome.scss','public/fontawesome/fontawesome.css')  
  .scripts('node_modules/jquery/dist/jquery.js', 'public/jquery/jquery.js')
  .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/bootstrap/bootstrap.js')
  .scripts('node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js', 'public/fancybox/fancybox.js');

   
