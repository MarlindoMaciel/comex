let mix = require('laravel-mix');

mix
  .sass('resources/scss/bootstrap.scss','public/bootstrap/bootstrap.css')  
  .sass('resources/scss/fontawesome.scss','public/fontawesome/fontawesome.css')  
  
  .styles('resources/css/comex.scss','public/comex/comex.css')
  .styles('node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css','public/fancybox/fancybox.css')
  .styles('node_modules/datatables.net-dt/css/jquery.dataTables.css','public/datatables/datatables.css')  
  .styles('node_modules/datatables.net-buttons-dt/css/buttons.dataTables.css','public/datatables/buttons.dataTables.css')  
  
  .scripts('resources/js/comex.js', 'public/comex/comex.js')
  .scripts('node_modules/jquery/dist/jquery.js', 'public/jquery/jquery.js')
  .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/bootstrap/bootstrap.js')
  .scripts('node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js', 'public/fancybox/fancybox.js')
  .scripts('node_modules/datatables.net/js/jquery.dataTables.js', 'public/datatables/jquery.dataTables.js')
  .scripts('node_modules/datatables.net-dt/js/dataTables.dataTables.js', 'public/datatables/dataTables.dataTables.js')
  .scripts('node_modules/datatables.net-buttons-dt/js/buttons.dataTables.js', 'public/datatables/buttons.dataTables.js')

  .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.js.map','public/bootstrap/bootstrap.bundle.js.map')  

  .copyDirectory('resources/images', 'public/comex/imagens')
  .copyDirectory('node_modules/datatables.net-dt/images', 'public/datatables/images')
  .copyDirectory('node_modules/datatables.net-dt/types', 'public/datatables/types');
   

  