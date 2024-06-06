<?php
/**
 * Plugin Name: KOL carteleria
 * Author: ddmalqui
 * Description: plugin pensado para gestion de la carteleria. 
 */

  //Insertar Javascript js y enviar ruta admin-ajax.php
add_action('wp_enqueue_scripts', 'dcms_insertar_js_carteleria');
add_action('admin_enqueue_scripts', 'dcms_insertar_js_carteleria');

function dcms_insertar_js_carteleria(){

	//if (!is_page('com')) return;
	wp_register_script('dcms_miscript_carteleria', '/wp-content/plugins/kol-carteleria/carteleria.js', array('jquery'), '1', true );
	wp_enqueue_script('dcms_miscript_carteleria');

	wp_localize_script('dcms_miscript_carteleria','dcms_vars_carteleria',['ajaxurl'=>admin_url('admin-ajax.php')]);
}

   add_shortcode('kol_plugin_menu_carteleria','KOL_plugin_menu_carteleria');
   add_shortcode('kol_plugin_samsung_carteleria','KOL_plugin_samsung_carteleria');
   add_shortcode('kol_plugin_motorola_carteleria','KOL_plugin_motorola_carteleria');
   add_shortcode('kol_plugin_iphone_carteleria','KOL_plugin_iphone_carteleria');
   add_shortcode('kol_plugin_huawei_carteleria','KOL_plugin_huawei_carteleria');
   add_shortcode('kol_plugin_lg_carteleria','KOL_plugin_lg_carteleria');
   add_shortcode('kol_plugin_nokia_carteleria','KOL_plugin_nokia_carteleria');
   add_shortcode('kol_plugin_xiaomi_carteleria','kol_plugin_xiaomi_carteleria');
   add_shortcode('kol_plugin_precios_carteleria','kol_plugin_precios_carteleria');
  


   // Register style sheet.
add_action( 'wp_enqueue_scripts', 'wpdocs_register_plugin_styles_carteleria' );

function wpdocs_register_plugin_styles_carteleria() {
   wp_register_style( 'my-plugin-carteleria', '/wp-content/plugins/kol-carteleria/custom-kol-carteleria.css' );
   wp_enqueue_style( 'my-plugin-carteleria' );
}


add_action('wp_enqueue_scripts','wpdocs_register_plugin_styles_carteleria_ex');
function wpdocs_register_plugin_styles_carteleria_ex(){
 wp_enqueue_style('my-new-style-2', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
}

function KOL_plugin_menu_carteleria()
{    
   ?>
<div class="col-inner" id="menu-carteleria">
    <section id="section_2066640776">
        <div class="bg section-bg fill bg-fill bg-loaded">
        </div>
        <div class="section-content relative">
            <div id="gap-147690990" class="gap-element clearfix" style="display:block; height:auto;">
            </div>
            <div class="row align-center" id="row-168505593">
                <div id="col-1143958130" class="col small-12 large-12">
                    <div class="col-inner text-center">
                        <div class="row large-columns-4 medium-columns-4 small-columns-2 row-small">
                            <div class="product-category col">
                                <div class="col-inner">
                                    <a href="https://kolaccesorios.com/carteleria-samsung/">
                                        <div class="box box-category has-hover box-push">
                                            <strong style="background-color: white;padding: 10px;">SAMSUNG</strong>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-category col">
                                <div class="col-inner">
                                    <a href="https://kolaccesorios.com/carteleria-motorola/">
                                        <div class="box box-category has-hover box-push">
                                            <strong style="background-color: white;padding: 10px;">MOTOROLA</strong>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-category col">
                                <div class="col-inner">
                                    <a href="https://kolaccesorios.com/carteleria-iphone/">
                                        <div class="box box-category has-hover box-push">
                                            <strong style="background-color: white;padding: 10px;">IPHONE</strong>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-category col">
                                <div class="col-inner">
                                    <a href="https://kolaccesorios.com/carteleria-huawei/">
                                        <div class="box box-category has-hover box-push">
                                            <strong style="background-color: white;padding: 10px;">HUAWEI</strong>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-category col">
                                <div class="col-inner">
                                    <a href="https://kolaccesorios.com/carteleria-lg/">
                                        <div class="box box-category has-hover box-push">
                                            <strong style="background-color: white;padding: 10px;">LG</strong>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-category col">
                                <div class="col-inner">
                                    <a href="https://kolaccesorios.com/carteleria-nokia/">
                                        <div class="box box-category has-hover box-push">
                                            <strong style="background-color: white;padding: 10px;">NOKIA</strong>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-category col">
                                <div class="col-inner">
                                    <a href="https://kolaccesorios.com/carteleria-xiaomi/">
                                        <div class="box box-category has-hover box-push">
                                            <strong style="background-color: white;padding: 10px;">XIAOMI</strong>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-category col">
                                <div class="col-inner">
                                    <a href="https://kolaccesorios.com/carteleria-precios/">
                                        <div class="box box-category has-hover box-push">
                                            <strong style="background-color: white;padding: 10px;">CARTELERIA MANUAL</strong>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php

   return ob_get_clean();
  }

   function KOL_plugin_samsung_carteleria()
       {    
      ?>
<a class="no-print" href="https://kolaccesorios.com/menu-carteleria/">
    <img src="https://kolaccesorios.com/wp-content/uploads/2022/05/menu-2.png"
        style="width: 50px;position: absolute;left: 20px;top: 250px;z-index: 999999;">
</a>

<div class="explicacion no-print" class='explicacion'>
    <ul>
        <li>
            Seleccionar el estilo de la carteleria apropiada para el local.
        </li>
        <li>
            Duplicar o eliminar los elemento segun la necesidad del local.
        </li>
        <li>
            Presionar ctl + p y guardar como pdf.
        </li>
        <li>
            Enviar el PDF a redes y la carteleria sera entregada con el pedido.
        </li>
        <li>
            <strong>NO SE GUARDAN LOS CAMBIOS UNA VEZ REFRESCADA LA PAGINA</strong>
        </li>
    </ul>
</div>

<button type="button" onclick="opcion0()" class="no-print">Diseño</button>
<button type="button" onclick="opcion1()" class="no-print">Diseño 2</button>
<button type="button" onclick="opcion2()" class="no-print">Diseño 3</button>
<button type="button" onclick="opcion3()" class="no-print">Diseño 4</button>
<button type="button" onclick="opcionglassplano()" style="color: #f2b20c;" class="no-print">Glass Plano</button>
<button type="button" onclick="opcionglasscomp()" style="color: #ec20ff;" class="no-print">Glass Completo</button>

<div id="wrapper" class="l-container opcion0">
    <div id="outer" class="row">

        <div id="body" class="clearfix">
            <div class="main right main-maker l-box col">
                <div id="review-body" class="section-body">
                    <div class="makers">
                        <ul>
                        <li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div><a href="samsung_galaxy_s24_ultra-12771.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s24-ultra-5g-sm-s928-stylus.jpg
            title="Samsung Galaxy S24 Ultra Android smartphone. Announced Jan 2024. Features 6.8&Prime;  display, Snapdragon 8 Gen 3 chipset, 5000 mAh battery, 1024 GB storage, 12 GB RAM, Corning Gorilla Glass Armor."><strong><span>Galaxy
                S24 Ultra</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_s24+-12772.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s24-plus-5g-sm-s926.jpg
            title="Samsung Galaxy S24+ Android smartphone. Announced Jan 2024. Features 6.7&Prime;  display, Snapdragon 8 Gen 3 chipset, 4900 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass Victus 2."><strong><span>Galaxy
                S24+</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_s24-12773.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s24-5g-sm-s921.jpg
            title="Samsung Galaxy S24 Android smartphone. Announced Jan 2024. Features 6.2&Prime;  display, Snapdragon 8 Gen 3 chipset, 4000 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass Victus 2."><strong><span>Galaxy
                S24</span></strong></a>
</li>

<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a25-12555.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a25.jpg
            title="Samsung Galaxy A25 Android smartphone. Announced Dec 2023. Features 6.5&Prime;  display, Exynos 1280 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Galaxy
                A25</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a15_5g-12638.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a15-5g-new.jpg
            title="Samsung Galaxy A15 5G Android smartphone. Announced Dec 2023. Features 6.5&Prime;  display, Dimensity 6100+ chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Galaxy
                A15 5G</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a15-12637.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a15-lte-.jpg
            title="Samsung Galaxy A15 Android smartphone. Announced Dec 2023. Features 6.5&Prime;  display, Helio G99 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Galaxy
                A15</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_s23_fe-12520.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s23-fe.jpg
            title="Samsung Galaxy S23 FE Android smartphone. Announced Oct 2023. Features 6.4&Prime;  display, Exynos 2200 chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                S23 FE</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a05s-12584.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a05s.jpg
            title="Samsung Galaxy A05s Android smartphone. Announced Sep 2023. Features 6.7&Prime;  display, Snapdragon 680 4G chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Galaxy
                A05s</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a05-12583.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a05.jpg
            title="Samsung Galaxy A05 Android smartphone. Announced Sep 2023. Features 6.7&Prime;  display, MT6769V chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Galaxy
                A05</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_f34-12453.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-f34.jpg
            title="Samsung Galaxy F34 Android smartphone. Announced Aug 2023. Features 6.5&Prime;  display, Exynos 1280 chipset, 6000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                F34</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_z_fold5-12418.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-fold5-5g.jpg
            title="Samsung Galaxy Z Fold5 Android smartphone. Announced Jul 2023. Features 7.6&Prime;  display, Snapdragon 8 Gen 2 chipset, 4400 mAh battery, 1024 GB storage, 12 GB RAM."><strong><span>Galaxy
                Z Fold5</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_z_flip5-12252.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-flip5-5g.jpg
            title="Samsung Galaxy Z Flip5 Android smartphone. Announced Jul 2023. Features 6.7&Prime;  display, Snapdragon 8 Gen 2 chipset, 3700 mAh battery, 512 GB storage, 8 GB RAM."><strong><span>Galaxy
                Z Flip5</span></strong></a>
</li>

<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_m34_5g-11290.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-m34-5g.jpg
            title="Samsung Galaxy M34 5G Android smartphone. Announced Jul 2023. Features 6.5&Prime;  display, Exynos 1280 chipset, 6000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                M34 5G</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_f54-12239.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-f54-5g.jpg
            title="Samsung Galaxy F54 Android smartphone. Announced Jun 2023. Features 6.7&Prime;  display, Exynos 1380 chipset, 6000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Galaxy
                F54</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a24_4g-12176.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a24-4g-2.jpg
            title="Samsung Galaxy A24 4G Android smartphone. Announced Apr 2023. Features 6.5&Prime;  display, Helio G99 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Galaxy
                A24 4G</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_f14-12175.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-f14.jpg
            title="Samsung Galaxy F14 Android smartphone. Announced Mar 2023. Features 6.6&Prime;  display, Exynos 1330 chipset, 6000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                F14</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_m54-12189.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-m54-5g.jpg
            title="Samsung Galaxy M54 Android smartphone. Announced Mar 2023. Features 6.7&Prime;  display, Exynos 1380 chipset, 6000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                M54</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a54-12070.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a54.jpg
            title="Samsung Galaxy A54 Android smartphone. Announced Mar 2023. Features 6.4&Prime;  display, Exynos 1380 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                A54</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a34-12074.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a34.jpg
            title="Samsung Galaxy A34 Android smartphone. Announced Mar 2023. Features 6.6&Prime;  display, Dimensity 1080 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                A34</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_m14-12160.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-m14-5g-sm-m146.jpg
            title="Samsung Galaxy M14 Android smartphone. Announced Mar 2023. Features 6.6&Prime;  display, Exynos 1330 chipset, 6000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                M14</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_s23_ultra-12024.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s23-ultra-5g.jpg
            title="Samsung Galaxy S23 Ultra Android smartphone. Announced Feb 2023. Features 6.8&Prime;  display, Snapdragon 8 Gen 2 chipset, 5000 mAh battery, 1024 GB storage, 12 GB RAM, Corning Gorilla Glass Victus 2."><strong><span>Galaxy
                S23 Ultra</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_s23+-12083.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s23-plus-5g.jpg
            title="Samsung Galaxy S23+ Android smartphone. Announced Feb 2023. Features 6.6&Prime;  display, Snapdragon 8 Gen 2 chipset, 4700 mAh battery, 512 GB storage, 8 GB RAM, Corning Gorilla Glass Victus 2."><strong><span>Galaxy
                S23+</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_s23-12082.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s23-5g.jpg
            title="Samsung Galaxy S23 Android smartphone. Announced Feb 2023. Features 6.1&Prime;  display, Snapdragon 8 Gen 2 chipset, 3900 mAh battery, 512 GB storage, 8 GB RAM, Corning Gorilla Glass Victus 2."><strong><span>Galaxy
                S23</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a14-12151.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a14-4g.jpg
            title="Samsung Galaxy A14 Android smartphone. Announced Feb 2023. Features 6.6&Prime;  display, MT6769 Helio G80 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Galaxy
                A14</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a14_5g-12004.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a14-5g.jpg
            title="Samsung Galaxy A14 5G Android smartphone. Announced Jan 2023. Features 6.6&Prime;  display, Exynos 1330 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Galaxy
                A14 5G</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_f04-12054.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-f04-new.jpg
            title="Samsung Galaxy F04 Android smartphone. Announced Jan 2023. Features 6.5&Prime;  display, MT6765 Helio P35 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Galaxy
                F04</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_m04-12022.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-m04-.jpg
            title="Samsung Galaxy M04 Android smartphone. Announced Dec 2022. Features 6.5&Prime;  display, MT6765 Helio P35 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Galaxy
                M04</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a04e-11945.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a04e.jpg
            title="Samsung Galaxy A04e Android smartphone. Announced Oct 2022. Features 6.5&Prime;  display, MT6765 Helio P35 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Galaxy
                A04e</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a04s-11803.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a04s.jpg
            title="Samsung Galaxy A04s Android smartphone. Announced Aug 2022. Features 6.5&Prime;  display, Exynos 850 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Galaxy
                A04s</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a04-11817.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a04.jpg
            title="Samsung Galaxy A04 Android smartphone. Announced Aug 2022. Features 6.5&Prime;  display, MT6765 Helio P35 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Galaxy
                A04</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_z_fold4-11737.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-fold4.jpg
            title="Samsung Galaxy Z Fold4 Android smartphone. Announced Aug 2022. Features 7.6&Prime;  display, Snapdragon 8+ Gen 1 chipset, 4400 mAh battery, 1024 GB storage, 12 GB RAM."><strong><span>Galaxy
                Z Fold4</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_z_flip4-11538.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-flip4-5g.jpg
            title="Samsung Galaxy Z Flip4 Android smartphone. Announced Aug 2022. Features 6.7&Prime;  display, Snapdragon 8+ Gen 1 chipset, 3700 mAh battery, 512 GB storage, 8 GB RAM."><strong><span>Galaxy
                Z Flip4</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a23_5g-11736.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a23-5g.jpg
            title="Samsung Galaxy A23 5G Android smartphone. Announced Aug 2022. Features 6.6&Prime;  display, Snapdragon 695 5G chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                A23 5G</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_m13_5g-11633.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-m13-5g.jpg
            title="Samsung Galaxy M13 5G Android smartphone. Announced Jul 2022. Features 6.5&Prime;  display, Dimensity 700 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Galaxy
                M13 5G</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_m13_(india)-11654.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-m13-4g-india.jpg
            title="Samsung Galaxy M13 (India) Android smartphone. Announced Jul 2022. Features 6.6&Prime;  display, Exynos 850 chipset, 6000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                M13 (India)</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_a13_(sm_a137)-11665.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a13-a137.jpg
            title="Samsung Galaxy A13 (SM-A137) Android smartphone. Announced Jun 2022. Features 6.6&Prime;  display, MT6769V chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                A13 (SM-A137)</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_xcover6_pro-11600.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-xcover6-pro-r.jpg
            title="Samsung Galaxy Xcover6 Pro Android smartphone. Announced Jun 2022. Features 6.6&Prime;  display, Snapdragon 778G 5G chipset, 4050 mAh battery, 128 GB storage, 6 GB RAM, MIL-STD-810H compliant, Corning Gorilla Glass Victus+."><strong><span>Galaxy
                Xcover6 Pro</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_f13-11624.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-f13.jpg
            title="Samsung Galaxy F13 Android smartphone. Announced Jun 2022. Features 6.6&Prime;  display, Exynos 850 chipset, 6000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                F13</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_m13-11564.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                         src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-m13.jpg
            title="Samsung Galaxy M13 Android smartphone. Announced May 2022. Features 6.6&Prime;  display, Exynos 850 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Galaxy
                M13</span></strong></a>
</li>
<li>
    <div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div>
    <a href="samsung_galaxy_tab_s6_lite_(2022)-11524.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
<img                                        
            src=https://fdn2.gsmarena.com/vv/bigpic/galaxy-tab-s6-lite-2022-lte-sm-p619-.jpg
            title="Samsung Galaxy Tab S6 Lite (2022) Android tablet. Announced May 2022. Features 10.4&Prime;  display, Snapdragon 732G chipset, 7040 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Galaxy
                Tab S6 Lite (2022)</span></strong></a>
</li>

                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div>
                                <a href="samsung_galaxy_s20_fe_2022-11459.php">
                                        <img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo">
                                        <img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s20-fe-5g.jpg
                                        title="Samsung Galaxy S20 FE 2022 Android smartphone. Announced Apr 2022. Features 6.5&Prime;  display, Snapdragon 865 5G chipset, 4500 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Galaxy
                                            S20 FE 2022</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a73_5g-11257.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a73-5g.jpg
                                        title="Samsung Galaxy A73 5G Android smartphone. Announced Mar 2022. Features 6.7&Prime;  display, Snapdragon 778G 5G chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            A73 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a53_5g-11268.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a53-5g-.jpg
                                        title="Samsung Galaxy A53 5G Android smartphone. Announced Mar 2022. Features 6.5&Prime;  display, Exynos 1280 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            A53 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a33_5g-11429.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a33-5g.jpg
                                        title="Samsung Galaxy A33 5G Android smartphone. Announced Mar 2022. Features 6.4&Prime;  display, Exynos 1280 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            A33 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a23-11373.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a23.jpg
                                        title="Samsung Galaxy A23 Android smartphone. Announced Mar 2022. Features 6.6&Prime;  display, Snapdragon 680 4G chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            A23</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s22_ultra_5g-11251.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s22-ultra-5g.jpg
                                        title="Samsung Galaxy S22 Ultra 5G Android smartphone. Announced Feb 2022. Features 6.8&Prime;  display, Exynos 2200 chipset, 5000 mAh battery, 1024 GB storage, 12 GB RAM, Corning Gorilla Glass Victus+."><strong><span>Galaxy
                                            S22 Ultra</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s22+_5g-11252.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s22-plus-5g.jpg"
                                        title="Samsung Galaxy S22+ 5G Android smartphone. Announced Feb 2022. Features 6.6&Prime;  display, Exynos 2200 chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus+."><strong><span>Galaxy
                                            S22 +</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s22+_5g-11252.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s22-5g.jpg"
                                        title="Samsung Galaxy S22+ 5G Android smartphone. Announced Feb 2022. Features 6.6&Prime;  display, Exynos 2200 chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus+."><strong><span>Galaxy
                                            S22</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s22+_5g-11252.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s23-5g.jpg"
                                        title="Samsung Galaxy S23+ 5G Android smartphone. Announced Feb 2022. Features 6.6&Prime;  display, Exynos 2200 chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus+."><strong><span>Galaxy
                                            S23</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s22+_5g-11252.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s23-plus-5g.jpg"
                                        title="Samsung Galaxy S22+ 5G Android smartphone. Announced Feb 2022. Features 6.6&Prime;  display, Exynos 2200 chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus+."><strong><span>Galaxy
                                            S23 +</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s22+_5g-11252.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s23-ultra-5g.jpg"
                                        title="Samsung Galaxy S22+ 5G Android smartphone. Announced Feb 2022. Features 6.6&Prime;  display, Exynos 2200 chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus+."><strong><span>Galaxy
                                            S23 Ultra</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s22+_5g-11252.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s23-fe.jpg"
                                        title="Samsung Galaxy S22+ 5G Android smartphone. Announced Feb 2022. Features 6.6&Prime;  display, Exynos 2200 chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus+."><strong><span>Galaxy
                                            S23 Fe</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s22_5g-11253.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s22-5g.jpg
                                        title="Samsung Galaxy S22 5G Android smartphone. Announced Feb 2022. Features 6.1&Prime;  display, Exynos 2200 chipset, 3700 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus+."><strong><span>Galaxy</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s21_fe_5g-10954.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-fe-5g.jpg
                                        title="Samsung Galaxy S21 FE 5G Android smartphone. Announced Jan 2022. Features 6.4&Prime;  display, Snapdragon 888 5G chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus."><strong><span>Galaxy
                                            S21 FE 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a13_5g-11149.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a13-5g-.jpg
                                        title="Samsung Galaxy A13 5G Android smartphone. Announced Dec 2021. Features 6.5&Prime;  display, MediaTek MT6833 Dimensity 700 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Galaxy
                                            A13 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a03-11244.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a03.jpg
                                        title="Samsung Galaxy A03 Android smartphone. Announced Nov 2021. Features 6.5&Prime;  display, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Galaxy
                                            A03</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a03_core-11215.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a03-core.jpg
                                        title="Samsung Galaxy A03 Core Android smartphone. Announced Nov 2021. Features 6.5&Prime;  display, Unisoc SC9863A chipset, 5000 mAh battery, 32 GB storage, 2 GB RAM."><strong><span>Galaxy
                                            A03 Core</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a03s-10937.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a03s.jpg
                                        title="Samsung Galaxy A03s Android smartphone. Announced Aug 2021. Features 6.5&Prime;  display, MediaTek MT6765 Helio P35 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Galaxy
                                            A03s</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a52s_5g-11039.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a52s-5g.jpg
                                        title="Samsung Galaxy A52s 5G Android smartphone. Announced Aug 2021. Features 6.5&Prime;  display, Snapdragon 778G 5G chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            A52s 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_z_fold3_5g-10906.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-fold3-5g.jpg
                                        title="Samsung Galaxy Z Fold3 5G Android smartphone. Announced Aug 2021. Features 7.6&Prime;  display, Snapdragon 888 5G chipset, 4400 mAh battery, 512 GB storage, 12 GB RAM."><strong><span>Galaxy
                                            Z Fold3 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_z_flip3_5g-11044.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-flip3-5g.jpg
                                        title="Samsung Galaxy Z Flip3 5G Android smartphone. Announced Aug 2021. Features 6.7&Prime;  display, Snapdragon 888 5G chipset, 3300 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Galaxy
                                            Z Flip 3</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_z_flip3_5g-11044.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-flip4-5g.jpg"
                                        title="Samsung Galaxy Z Flip3 5G Android smartphone. Announced Aug 2021. Features 6.7&Prime;  display, Snapdragon 888 5G chipset, 3300 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Galaxy
                                            Z Flip 4</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a22_5g-10873.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a22-5g.jpg
                                        title="Samsung Galaxy A22 5G Android smartphone. Announced Jun 2021. Features 6.6&Prime;  display, MediaTek MT6833 Dimensity 700 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Galaxy
                                            A22 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a22-10948.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a22.jpg
                                        title="Samsung Galaxy A22 Android smartphone. Announced Jun 2021. Features 6.4&Prime;  display, MT6769V chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Galaxy
                                            A22</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a72-10469.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a72-4g.jpg
                                        title="Samsung Galaxy A72 Android smartphone. Announced Mar 2021. Features 6.7&Prime;  display, Snapdragon 720G chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            A72</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a52_5g-10631.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a52-5g.jpg
                                        title="Samsung Galaxy A52 5G Android smartphone. Announced Mar 2021. Features 6.5&Prime;  display, Snapdragon 750G 5G chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            A52 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a52-10641.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a52-4g.jpg
                                        title="Samsung Galaxy A52 Android smartphone. Announced Mar 2021. Features 6.5&Prime;  display, Snapdragon 720G chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            A52</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a32-10753.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a32-4g-new.jpg
                                        title="Samsung Galaxy A32 Android smartphone. Announced Feb 2021. Features 6.4&Prime;  display, MT6769V chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            A32</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s21_ultra_5g-10596.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-ultra-5g-.jpg
                                        title="Samsung Galaxy S21 Ultra 5G Android smartphone. Announced Jan 2021. Features 6.8&Prime;  display, Exynos 2100 chipset, 5000 mAh battery, 512 GB storage, 16 GB RAM, Corning Gorilla Glass Victus."><strong><span>Galaxy
                                            S21 Ultra 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s21+_5g-10625.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-plus-5g-.jpg
                                        title="Samsung Galaxy S21+ 5G Android smartphone. Announced Jan 2021. Features 6.7&Prime;  display, Exynos 2100 chipset, 4800 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus."><strong><span>Galaxy
                                            S21+ 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s21_5g-10626.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-5g-r.jpg
                                        title="Samsung Galaxy S21 5G Android smartphone. Announced Jan 2021. Features 6.2&Prime;  display, Exynos 2100 chipset, 4000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus."><strong><span>Galaxy
                                            S21 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a32_5g-10648.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a32-5g.jpg
                                        title="Samsung Galaxy A32 5G Android smartphone. Announced Jan 2021. Features 6.5&Prime;  display, MediaTek MT6853 Dimensity 720 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            A32 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a12-10604.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a12-sm-a125.jpg
                                        title="Samsung Galaxy A12 Android smartphone. Announced Nov 2020. Features 6.5&Prime;  display, MT6765 Helio P35 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Galaxy
                                            A12</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a02-10708.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a02.jpg
                                        title="Samsung Galaxy A02 Android smartphone. Announced Jan 2021. Features 6.5&Prime;  display, MT6739W chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Galaxy
                                            A02</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a02s-10603.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a02s-sm-a025-new.jpg
                                        title="Samsung Galaxy A02s Android smartphone. Announced Nov 2020. Features 6.5&Prime;  display, Snapdragon 450 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Galaxy
                                            A02s</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s20_fe-10428.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s20-fe-4g.jpg
                                        title="Samsung Galaxy S20 FE Android smartphone. Announced Sep 2020. Features 6.5&Prime;  display, Exynos 990 chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Galaxy
                                            S20 FE</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a42_5g-10412.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a42-5g.jpg
                                        title="Samsung Galaxy A42 5G Android smartphone. Announced Sep 2020. Features 6.6&Prime;  display, Snapdragon 750 5G chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Galaxy
                                            A42</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_note20_ultra-10355.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note20-ultra-.jpg
                                        title="Samsung Galaxy Note20 Ultra Android smartphone. Announced Aug 2020. Features 6.9&Prime;  display, Exynos 990 chipset, 4500 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass Victus."><strong><span>Galaxy
                                            Note20 Ultra</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_note20-10338.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src=https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note20-5g-r.jpg
                                        title="Samsung Galaxy Note20 Android smartphone. Announced Aug 2020. Features 6.7&Prime;  display, Exynos 990 chipset, 4300 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            Note20</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a01_core-10314.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a01core-sm-a013.jpg"
                                        title="Samsung Galaxy A01 Core Android smartphone. Announced Jul 2020. Features 5.3″  display, MT6739 chipset, 3000 mAh battery, 32 GB storage, 2 GB RAM."><strong><span>Galaxy
                                            A01 Core</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a21s-10239.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a21s-.jpg"
                                        title="Samsung Galaxy A21s Android smartphone. Announced May 2020. Features 6.5″  display, Exynos 850 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Galaxy
                                            A21s</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a21-10172.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a21-r.jpg"
                                        title="Samsung Galaxy A21 Android smartphone. Announced Apr 2020. Features 6.5″  display, MT6765 Helio P35 chipset, 4000 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>Galaxy
                                            A21</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a31-10149.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a31.jpg"
                                        title="Samsung Galaxy A31 Android smartphone. Announced Mar 2020. Features 6.4″  display, MT6768 Helio P65 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Galaxy
                                            A31</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a11-10132.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a11.jpg"
                                        title="Samsung Galaxy A11 Android smartphone. Announced Mar 2020. Features 6.4″  display, Snapdragon 450 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Galaxy
                                            A11</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s20_ultra-10084.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s20-ultra-.jpg"
                                        title="Samsung Galaxy S20 Ultra Android smartphone. Announced Feb 2020. Features 6.9″  display, Exynos 990 chipset, 5000 mAh battery, 512 GB storage, 16 GB RAM, Corning Gorilla Glass 6."><strong><span>Galaxy
                                            S20 Ultra</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s20+-10080.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s20-plus.jpg"
                                        title="Samsung Galaxy S20+ Android smartphone. Announced Feb 2020. Features 6.7″  display, Exynos 990 chipset, 4500 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 6."><strong><span>Galaxy
                                            S20+</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s20-10081.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s20-.jpg"
                                        title="Samsung Galaxy S20 Android smartphone. Announced Feb 2020. Features 6.2″  display, Exynos 990 chipset, 4000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 6."><strong><span>Galaxy
                                            S20</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_z_flip-10054.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-flip-01.jpg"
                                        title="Samsung Galaxy Z Flip Android smartphone. Announced Feb 2020. Features 6.7″  display, Snapdragon 855+ chipset, 3300 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Galaxy
                                            Z Flip</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_note10_lite-10003.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/sasmung-galaxy-note10-lite-r.jpg"
                                        title="Samsung Galaxy Note10 Lite Android smartphone. Announced Jan 2020. Features 6.7″  display, Exynos 9810 chipset, 4500 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Galaxy
                                            Note10 Lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s10_lite-9917.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/sasmung-galaxy-s10-lite-.jpg"
                                        title="Samsung Galaxy S10 Lite Android smartphone. Announced Jan 2020. Features 6.7″  display, Snapdragon 855 chipset, 4500 mAh battery, 512 GB storage, 8 GB RAM, Corning Gorilla Glass 3+."><strong><span>Galaxy
                                            S10 Lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a01-9999.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a01.jpg"
                                        title="Samsung Galaxy A01 Android smartphone. Announced Dec 2019. Features 5.7″  display, Snapdragon 439 chipset, 3000 mAh battery, 32 GB storage, 2 GB RAM."><strong><span>Galaxy
                                            A01</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a71-9995.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a71.jpg"
                                        title="Samsung Galaxy A71 Android smartphone. Announced Dec 2019. Features 6.7″  display, Snapdragon 730 chipset, 4500 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Galaxy
                                            A71</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a51-9963.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a51-sm-a515.jpg"
                                        title="Samsung Galaxy A51 Android smartphone. Announced Dec 2019. Features 6.5″  display, Exynos 9611 chipset, 4000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Galaxy
                                            A51</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a20s-9852.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a20s-sm-a207.jpg"
                                        title="Samsung Galaxy A20s Android smartphone. Announced Sep 2019. Features 6.5″  display, Snapdragon 450 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Galaxy
                                            A20s</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_note10+-9732.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note10-plus-.jpg"
                                        title="Samsung Galaxy Note10+ Android smartphone. Announced Aug 2019. Features 6.8″  display, Exynos 9825 chipset, 4300 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass 6."><strong><span>Galaxy
                                            Note10+</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_note10-9788.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note10-.jpg"
                                        title="Samsung Galaxy Note10 Android smartphone. Announced Aug 2019. Features 6.3″  display, Exynos 9825 chipset, 3500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 6."><strong><span>Galaxy
                                            Note10</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a10s-9793.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a10s.jpg"
                                        title="Samsung Galaxy A10s Android smartphone. Announced Aug 2019. Features 6.2″  display, MT6762 Helio P22 chipset, 4000 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>Galaxy
                                            A10s</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s10+-9535.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s10-plus-new.jpg"
                                        title="Samsung Galaxy S10+ Android smartphone. Announced Feb 2019. Features 6.4″  display, Exynos 9820 chipset, 4100 mAh battery, 1024 GB storage, 12 GB RAM, Corning Gorilla Glass 6."><strong><span>Galaxy
                                            S10+</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s10-9536.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s10.jpg"
                                        title="Samsung Galaxy S10 Android smartphone. Announced Feb 2019. Features 6.1″  display, Exynos 9820 chipset, 3400 mAh battery, 512 GB storage, 8 GB RAM, Corning Gorilla Glass 6."><strong><span>Galaxy
                                            S10</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s10e-9537.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s10e.jpg"
                                        title="Samsung Galaxy S10e Android smartphone. Announced Feb 2019. Features 5.8″  display, Exynos 9820 chipset, 3100 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            S10e</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a70-9646.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a70.jpg"
                                        title="Samsung Galaxy A70 Android smartphone. Announced Mar 2019. Features 6.7″  display, Snapdragon 675 chipset, 4500 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Galaxy
                                            A70</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a50-9554.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a50-sm-a505f-ds.jpg"
                                        title="Samsung Galaxy A50 Android smartphone. Announced Feb 2019. Features 6.4″  display, Exynos 9610 chipset, 4000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Galaxy
                                            A50</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a30-9579.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a30.jpg"
                                        title="Samsung Galaxy A30 Android smartphone. Announced Feb 2019. Features 6.4″  display, Exynos 7904 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Galaxy
                                            A30</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a20-9640.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a20.jpg"
                                        title="Samsung Galaxy A20 Android smartphone. Announced Mar 2019. Features 6.4″  display, Exynos 7884 chipset, 4000 mAh battery, 32 GB storage, 3 GB RAM, Corning Gorilla Glass 3."><strong><span>Galaxy
                                            A20</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a10-9580.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a10.jpg"
                                        title="Samsung Galaxy A10 Android smartphone. Announced Feb 2019. Features 6.2″  display, Exynos 7884 chipset, 3400 mAh battery, 32 GB storage, 4 GB RAM."><strong><span>Galaxy
                                            A10</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_note9-9163.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note9-r1.jpg"
                                        title="Samsung Galaxy Note9 Android smartphone. Announced Aug 2018. Features 6.4″  display, Exynos 9810 chipset, 4000 mAh battery, 512 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            Note9</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j6+-9334.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j6-plus-sm-j610f.jpg"
                                        title="Samsung Galaxy J6+ Android smartphone. Announced Sep 2018. Features 6.0″  display, Snapdragon 425 chipset, 3300 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Galaxy
                                            J6+</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j4_core-9397.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j4-core-sm-g410g.jpg"
                                        title="Samsung Galaxy J4 Core Android smartphone. Announced Nov 2018. Features 6.0″  display, Snapdragon 425 chipset, 3300 mAh battery, 16 GB storage, 1000 MB RAM."><strong><span>Galaxy
                                            J4 Core</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j4+-9335.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j4-plus-sm-j415f.jpg"
                                        title="Samsung Galaxy J4+ Android smartphone. Announced Sep 2018. Features 6.0″  display, Snapdragon 425 chipset, 3300 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>Galaxy
                                            J4+</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j2_core-9255.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j2-core.jpg"
                                        title="Samsung Galaxy J2 Core Android smartphone. Announced Aug 2018. Features 5.0″  display, Exynos 7570 Quad chipset, 2600 mAh battery, 16 GB storage, 1000 MB RAM, Corning Gorilla Glass (unspecified version)."><strong><span>Galaxy
                                            J2 Core</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j8-9205.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j8-j800.jpg"
                                        title="Samsung Galaxy J8 Android smartphone. Announced May 2018. Features 6.0″  display, Snapdragon 450 chipset, Dual: 16 MP (f/1.7, AF) + 5 MP primary camera, 16 MP front camera, 3500 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Galaxy
                                            J8</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j6-9203.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j6-j600.jpg"
                                        title="Samsung Galaxy J6 Android smartphone. Announced May 2018. Features 5.6″  display, Exynos 7870 Octa chipset, 13 MP primary camera, 8 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass (unspecified version)."><strong><span>Galaxy
                                            J6</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j4-9204.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j4-j400.jpg"
                                        title="Samsung Galaxy J4 Android smartphone. Announced May 2018. Features 5.5″  display, Exynos 7570 Quad chipset, 13 MP primary camera, 5 MP front camera, 3000 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>Galaxy
                                            J4</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s9+-8967.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s9-plus-blue.jpg"
                                        title="Samsung Galaxy S9+ Android smartphone. Announced Feb 2018. Features 6.2″  display, Exynos 9810 chipset, Dual: 12 MP (f/1.5-2.4, 26mm, 1/2.55″, 1.4µm, dual pixel PDAF) + 12MP primary camera, 8 MP front camera, 3500 mAh battery, 256 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            S9+</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s9-8966.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s9-.jpg"
                                        title="Samsung Galaxy S9 Android smartphone. Announced Feb 2018. Features 5.8″  display, Exynos 9810 chipset, 12 MP primary camera, 8 MP front camera, 3000 mAh battery, 256 GB storage, 4 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            S9</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j2_pro_(2018)-8904.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j2-2018-sm-j250-.jpg"
                                        title="Samsung Galaxy J2 Pro (2018) Android smartphone. Announced Jan 2018. Features 5.0″  display, Snapdragon 425 chipset, 8 MP primary camera, 5 MP front camera, 2600 mAh battery, 16 GB storage, 2 GB RAM, Corning Gorilla Glass (unspecified version)."><strong><span>Galaxy
                                            J2 Pro (2018)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a8+_(2018)-8790.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a8-plus-a730f.jpg"
                                        title="Samsung Galaxy A8+ (2018) Android smartphone. Announced Dec 2017. Features 6.0″  display, Exynos 7885 chipset, 16 MP primary camera, Dual: 16 MP (f/1.9, 1/3.1”, 1.0µm) + 8 MP front camera, 3500 mAh battery, 64 GB storage, 6 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A8+ (2018)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a8_(2018)-8886.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a8-a530f.jpg"
                                        title="Samsung Galaxy A8 (2018) Android smartphone. Announced Dec 2017. Features 5.6″  display, Exynos 7885 chipset, 16 MP primary camera, Dual: 16 MP (f/1.9, 1/3.1”, 1.0µm) + 8 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A8 (2018)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_note8-8505.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note-8-sm-n950.jpg"
                                        title="Samsung Galaxy Note8 Android smartphone. Announced Aug 2017. Features 6.3″  display, Exynos 8895 chipset, 3300 mAh battery, 256 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            Note8</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s8-8161.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s8-.jpg"
                                        title="Samsung Galaxy S8 Android smartphone. Announced Mar 2017. Features 5.8″  display, Exynos 8895 chipset, 12 MP primary camera, 8 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            S8</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s8+-8523.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s8-plus-.jpg"
                                        title="Samsung Galaxy S8+ Android smartphone. Announced Mar 2017. Features 6.2″  display, Exynos 8895 chipset, 12 MP primary camera, 8 MP front camera, 3500 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Galaxy
                                            S8+</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a7_(2017)-8335.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a7-2017.jpg"
                                        title="Samsung Galaxy A7 (2017) Android smartphone. Announced Jan 2017. Features 5.7″  display, Exynos 7880 chipset, 16 MP primary camera, 16 MP front camera, 3600 mAh battery, 32 GB storage, 3 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A7 (2017)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a5_(2017)-8494.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a5-2017-new.jpg"
                                        title="Samsung Galaxy A5 (2017) Android smartphone. Announced Jan 2017. Features 5.2″  display, Exynos 7880 chipset, 16 MP primary camera, 16 MP front camera, 3000 mAh battery, 64 GB storage, 3 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A5 (2017)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a3_(2017)-8336.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a3-2017.jpg"
                                        title="Samsung Galaxy A3 (2017) Android smartphone. Announced Jan 2017. Features 4.7″  display, Exynos 7870 Octa chipset, 13 MP primary camera, 8 MP front camera, 2350 mAh battery, 16 GB storage, 2 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A3 (2017)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_grand_prime_plus-8385.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j2-prime-2016.jpg"
                                        title="Samsung Galaxy Grand Prime Plus Android smartphone. Announced Nov 2016. Features 5.0″  display, MT6737T chipset, 8 MP primary camera, 5 MP front camera, 2600 mAh battery, 16 GB storage, 1.5 GB RAM."><strong><span>Galaxy
                                            Grand Prime Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j2_prime-8424.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j2-prime-2016.jpg"
                                        title="Samsung Galaxy J2 Prime Android smartphone. Announced Nov 2016. Features 5.0″  display, MT6737T chipset, 8 MP primary camera, 5 MP front camera, 2600 mAh battery, 16 GB storage, 1.5 GB RAM."><strong><span>Galaxy
                                            J2 Prime</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a8_(2016)-7801.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a8-2016r1-.jpg"
                                        title="Samsung Galaxy A8 (2016) Android smartphone. Announced Sep 2016. Features 5.7″  display, Exynos 7420 Octa chipset, 16 MP primary camera, 8 MP front camera, 3300 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>Galaxy
                                            A8 (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j5_prime-8342.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j5-prime.jpg"
                                        title="Samsung Galaxy J5 Prime Android smartphone. Announced Sep 2016. Features 5.0″  display, Exynos 7570 Quad chipset, 13 MP primary camera, 5 MP front camera, 2400 mAh battery, 32 GB storage, 2 GB RAM, Corning Gorilla Glass (market dependent)."><strong><span>Galaxy
                                            J5 Prime</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j7_prime-8314.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j7-prime.jpg"
                                        title="Samsung Galaxy J7 Prime Android smartphone. Announced Sep 2016. Features 5.5″  display, Exynos 7870 Octa chipset, 13 MP primary camera, 8 MP front camera, 3300 mAh battery, 64 GB storage, 3 GB RAM, Corning Gorilla Glass (market dependent)."><strong><span>Galaxy
                                            J7 Prime</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j7_prime-8314.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j7-nxt-sm-j701fds.jpg"
                                        title="Samsung Galaxy J7 Neo Android smartphone. Announced Sep 2016. Features 5.5″  display, Exynos 7870 Octa chipset, 13 MP primary camera, 8 MP front camera, 3300 mAh battery, 64 GB storage, 3 GB RAM, Corning Gorilla Glass (market dependent)."><strong><span>Galaxy
                                            J7 Neo</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j2_pro_(2016)-8228.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j2-2016-new.jpg"
                                        title="Samsung Galaxy J2 Pro (2016) Android smartphone. Announced Jul 2016. Features 5.0″  display, Spreadtrum SC8830 chipset, 8 MP primary camera, 5 MP front camera, 2600 mAh battery, 16 GB storage, 2 GB RAM."><strong><span>Galaxy
                                            J2 Pro (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j2_(2016)-8083.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j2-2016-new.jpg"
                                        title="Samsung Galaxy J2 (2016) Android smartphone. Announced Jul 2016. Features 5.0″  display, Spreadtrum SC8830 chipset, 8 MP primary camera, 5 MP front camera, 2600 mAh battery, 8 GB storage, 1.5 GB RAM."><strong><span>Galaxy
                                            J2 (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a9_pro_(2016)-7903.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a9-pro1.jpg"
                                        title="Samsung Galaxy A9 Pro (2016) Android smartphone. Announced Mar 2016. Features 6.0″  display, Snapdragon 652 chipset, 16 MP primary camera, 8 MP front camera, 5000 mAh battery, 32 GB storage, 4 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A9 Pro (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j7_(2016)-7870.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j7-2016.jpg"
                                        title="Samsung Galaxy J7 (2016) Android smartphone. Announced Mar 2016. Features 5.5″  display, Snapdragon 617 chipset, 13 MP primary camera, 5 MP front camera, 3300 mAh battery, 16 GB storage, 2 GB RAM."><strong><span>Galaxy
                                            J7 (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j5_(2016)-7869.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j5-2016r.jpg"
                                        title="Samsung Galaxy J5 (2016) Android smartphone. Announced Mar 2016. Features 5.2″  display, Snapdragon 410 chipset, 13 MP primary camera, 5 MP front camera, 3100 mAh battery, 16 GB storage, 2 GB RAM."><strong><span>Galaxy
                                            J5 (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s7-7821.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s7--.jpg"
                                        title="Samsung Galaxy S7 Android smartphone. Announced Feb 2016. Features 5.1″  display, Exynos 8890 Octa chipset, 12 MP primary camera, 5 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            S7</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s7_edge-7945.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s7-edge-.jpg"
                                        title="Samsung Galaxy S7 edge Android smartphone. Announced Feb 2016. Features 5.5″  display, Snapdragon 820 chipset, 12 MP primary camera, 5 MP front camera, 3600 mAh battery, 128 GB storage, 4 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            S7 edge</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j1_(2016)-7864.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j1-2016.jpg"
                                        title="Samsung Galaxy J1 (2016) Android smartphone. Announced Jan 2016. Features 4.5″  display, Spreadtrum SC9830 chipset, 5 MP primary camera, 2 MP front camera, 2050 mAh battery, 8 GB storage, 1000 MB RAM."><strong><span>Galaxy
                                            J1 (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a9_(2016)-7641.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a9-pro1.jpg"
                                        title="Samsung Galaxy A9 (2016) Android smartphone. Announced Dec 2015. Features 6.0″  display, Snapdragon 652 chipset, 13 MP primary camera, 8 MP front camera, 4000 mAh battery, 32 GB storage, 3 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A9 (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a7_(2016)-7759.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a7-2016.jpg"
                                        title="Samsung Galaxy A7 (2016) Android smartphone. Announced Dec 2015. Features 5.5″  display, Exynos 7580 Octa chipset, 13 MP primary camera, 5 MP front camera, 3300 mAh battery, 16 GB storage, 3 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A7 (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a5_(2016)-7789.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a5-2016.jpg"
                                        title="Samsung Galaxy A5 (2016) Android smartphone. Announced Dec 2015. Features 5.2″  display, Exynos 7580 Octa chipset, 13 MP primary camera, 5 MP front camera, 2900 mAh battery, 16 GB storage, 2 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A5 (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a3_(2016)-7791.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a3-2016.jpg"
                                        title="Samsung Galaxy A3 (2016) Android smartphone. Announced Dec 2015. Features 4.7″  display, Exynos 7578 chipset, 13 MP primary camera, 5 MP front camera, 2300 mAh battery, 16 GB storage, 1.5 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A3 (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j3_(2016)-7760.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j3.jpg"
                                        title="Samsung Galaxy J3 (2016) Android smartphone. Announced Mar 2016. Features 5.0″  display, Spreadtrum SC9830 chipset, 8 MP primary camera, 5 MP front camera, 2600 mAh battery, 16 GB storage, 2 GB RAM, Asahi Dragontrail Glass."><strong><span>Galaxy
                                            J3 (2016)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j1_ace-7673.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j1-ace.jpg"
                                        title="Samsung Galaxy J1 Ace Android smartphone. Announced Aug 2015. Features 4.3″  display, Spreadtrum SC9830 chipset, 5 MP primary camera, 2 MP front camera, 1850 mAh battery, 8 GB storage, 1000 MB RAM."><strong><span>Galaxy
                                            J1 Ace</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_note5-7431.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note5.jpg"
                                        title="Samsung Galaxy Note5 Android smartphone. Announced Aug 2015. Features 5.7″  display, Exynos 7420 Octa chipset, 16 MP primary camera, 5 MP front camera, 3000 mAh battery, 128 GB storage, 4 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            Note5</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s4_mini_i9195i-7468.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s4-mini-plus-gt-i9195i.jpg"
                                        title="Samsung Galaxy S4 mini I9195I Android smartphone. Announced Jun 2015. Features 4.3″  display, Snapdragon 410 chipset, 8 MP primary camera, 1.9 MP front camera, 1900 mAh battery, 8 GB storage, 1.5 GB RAM, To be confirmed."><strong><span>Galaxy
                                            S4 mini</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a8-7249.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-a8-.jpg"
                                        title="Samsung Galaxy A8 Android smartphone. Announced Jul 2015. Features 5.7″  display, Snapdragon 615 chipset, 16 MP primary camera, 5 MP front camera, 3050 mAh battery, 32 GB storage, 2 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A8</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j7-7185.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j7-j700f.jpg"
                                        title="Samsung Galaxy J7 Android smartphone. Announced Jun 2015. Features 5.5″  display, Snapdragon 615 chipset, 13 MP primary camera, 5 MP front camera, 3000 mAh battery, 16 GB storage, 1.5 GB RAM."><strong><span>Galaxy
                                            J7</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j5-7184.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j5-sm-j500f.jpg"
                                        title="Samsung Galaxy J5 Android smartphone. Announced Jun 2015. Features 5.0″  display, Snapdragon 410 chipset, 13 MP primary camera, 5 MP front camera, 2600 mAh battery, 16 GB storage, 1.5 GB RAM."><strong><span>Galaxy
                                            J5</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s6_plus-7270.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s6-edge.jpg"
                                        title="Samsung Galaxy S6 Plus Android smartphone. Announced Q3 2015. Features 5.5″  display, Exynos 7420 Octa chipset, 16 MP primary camera, 5 MP front camera, 3000 mAh battery, 32 GB storage, 4 GB RAM, To be confirmed."><strong><span>Galaxy
                                            S6 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s6_edge-7079.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s6-edge.jpg"
                                        title="Samsung Galaxy S6 edge Android smartphone. Announced Mar 2015. Features 5.1″  display, Exynos 7420 Octa chipset, 16 MP primary camera, 5 MP front camera, 2600 mAh battery, 128 GB storage, 3 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            S6 edge</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s6_duos-7377.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s6.jpg"
                                        title="Samsung Galaxy S6 Duos Android smartphone. Announced Jun 2015. Features 5.1″  display, Exynos 7420 Octa chipset, 16 MP primary camera, 5 MP front camera, 2550 mAh battery, 128 GB storage, 3 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            S6 Duos</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_s6-6849.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s6.jpg"
                                        title="Samsung Galaxy S6 Android smartphone. Announced Mar 2015. Features 5.1″  display, Exynos 7420 Octa chipset, 16 MP primary camera, 5 MP front camera, 2550 mAh battery, 128 GB storage, 3 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            S6</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j2-7357.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j2.jpg"
                                        title="Samsung Galaxy J2 Android smartphone. Announced Sep 2015. Features 4.7″  display, Exynos 3475 Quad chipset, 5 MP primary camera, 2 MP front camera, 2000 mAh battery, 8 GB storage, 1000 MB RAM."><strong><span>Galaxy
                                            J2</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_j1-6907.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-j1-sm-j100h1.jpg"
                                        title="Samsung Galaxy J1 Android smartphone. Announced Jan 2015. Features 4.3″  display, Spreadtrum chipset, 5 MP primary camera, 2 MP front camera, 1850 mAh battery, 4 GB storage, 512 MB RAM."><strong><span>Galaxy
                                            J1</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_core_prime-6716.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-core-prime.jpg"
                                        title="Samsung Galaxy Core Prime Android smartphone. Announced Nov 2014. Features 4.5″  display, Snapdragon 410 chipset, 5 MP primary camera, 2 MP front camera, 2000 mAh battery, 8 GB storage, 1000 MB RAM."><strong><span>Galaxy
                                            Core Prime</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_a3-6762.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/samsung-a3.jpg"
                                        title="Samsung Galaxy A3 Android smartphone. Announced Oct 2014. Features 4.5″  display, Snapdragon 410 chipset, 8 MP primary camera, 5 MP front camera, 1900 mAh battery, 16 GB storage, 1.5 GB RAM, Corning Gorilla Glass 4."><strong><span>Galaxy
                                            A3</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="samsung_galaxy_grand_prime-6708.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-grand-prime-sm-g530h.jpg"
                                        title="Samsung Galaxy Grand Prime Android smartphone. Announced Sep 2014. Features 5.0″  display, Snapdragon 410 chipset, 8 MP primary camera, 5 MP front camera, 2600 mAh battery, 8 GB storage, 1000 MB RAM."><strong><span>Galaxy
                                            Grand Prime</span></strong></a>
                            </li>
                        </ul>
                        <br class="clear">
                    </div>

                </div>

                <br class="clearfix">

            </div>

        </div><!-- id body -->
    </div><!-- id outer -->
</div>

<?php
      
          return ob_get_clean();
         }


   function KOL_plugin_motorola_carteleria()
         {    
        ?>
<a class="no-print" href="https://kolaccesorios.com/menu-carteleria/">
    <img src="https://kolaccesorios.com/wp-content/uploads/2022/05/menu-2.png"
        style="width: 50px;position: absolute;left: 20px;top: 250px;z-index: 999999;">
</a>

<div class="explicacion no-print" class='explicacion'>
    <ul>
        <li>
            Seleccionar el estilo de la carteleria apropiada para el local.
        </li>
        <li>
            Duplicar o eliminar los elemento segun la necesidad del local.
        </li>
        <li>
            Presionar ctl + p y guardar como pdf (sin margenes).
        </li>
        <li>
            Enviar el PDF a redes y la carteleria sera entregada con el pedido.
        </li>
        <li>
            <strong>NO SE GUARDAN LOS CAMBIOS UNA VEZ REFRESCADA LA PAGINA</strong>
        </li>
    </ul>
</div>

<button type="button" onclick="opcion0()" class="no-print">Diseño</button>
<button type="button" onclick="opcion1()" class="no-print">Diseño 2</button>
<button type="button" onclick="opcion2()" class="no-print">Diseño 3</button>
<button type="button" onclick="opcion3()" class="no-print">Diseño 4</button>
<button type="button" onclick="opcionglassplano()" style="color: green;" class="no-print">Glass Plano</button>
<button type="button" onclick="opcionglasscomp()" style="color: #c378f4;" class="no-print">Glass Completo</button>

<div id="wrapper" class="l-container opcion0">
    <div id="outer" class="row">

        <div id="body" class="clearfix">
            <div class="main right main-maker l-box col">
                <div id="review-body" class="section-body">
                    <div class="makers">
                        <ul>
                        <li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g_play_(2024)-12798.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img
            src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-play-2024-.jpg
            title="Motorola Moto G Play (2024) Android smartphone. Announced Jan 2024. Features 6.5&Prime;  display, Snapdragon 680 4G chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                G Play (2024)</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g34-12759.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g34-china.jpg
            title="Motorola Moto G34 Android smartphone. Announced Dec 2023. Features 6.5&Prime;  display, Snapdragon 695 5G chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Moto
                G34</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_edge_(2023)-12620.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-2023.jpg
            title="Motorola Edge (2023) Android smartphone. Announced Oct 2023. Features 6.6&Prime;  display, MediaTek Dimensity 7030 chipset, 4400 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Edge
                (2023)</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_edge_40_neo-12467.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-40-neo.jpg
            title="Motorola Edge 40 Neo Android smartphone. Announced Sep 2023. Features 6.55&Prime;  display, MediaTek Dimensity 7030 chipset, 5000 mAh battery, 256 GB storage, 12 GB RAM, Corning Gorilla Glass 3."><strong><span>Edge
                40 Neo</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g54-12543.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g54.jpg
            title="Motorola Moto G54 Android smartphone. Announced Sep 2023. Features 6.5&Prime;  display, Dimensity 7020 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Moto
                G54</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g54_power-12503.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g54-10.jpg
            title="Motorola Moto G54 Power Android smartphone. Announced Sep 2023. Features 6.5&Prime;  display, Dimensity 7020 chipset, 6000 mAh battery, 256 GB storage, 12 GB RAM."><strong><span>Moto
                G54 Power</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g84-12526.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g84.jpg
            title="Motorola Moto G84 Android smartphone. Announced Aug 2023. Features 6.5&Prime;  display, Snapdragon 695 5G chipset, 5000 mAh battery, 256 GB storage, 12 GB RAM."><strong><span>Moto
                G84</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g14-12447.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/mototola-g14.jpg
            title="Motorola Moto G14 Android smartphone. Announced Aug 2023. Features 6.5&Prime;  display, Unisoc Tiger T616 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM, Panda glass."><strong><span>Moto
                G14</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_razr_40_ultra-12169.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-razr-40-ultra.jpg
            title="Motorola Razr 40 Ultra Android smartphone. Announced Jun 2023. Features 6.9&Prime;  display, Snapdragon 8+ Gen 1 chipset, 3800 mAh battery, 512 GB storage, 12 GB RAM."><strong><span>Razr
                40 Ultra</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_razr_40-12311.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-razr-40.jpg
            title="Motorola Razr 40 Android smartphone. Announced Jun 2023. Features 6.9&Prime;  display, Snapdragon 7 Gen 1 chipset, 4200 mAh battery, 256 GB storage, 12 GB RAM."><strong><span>Razr
                40</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g_stylus_5g_(2023)-12301.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img
            src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-stylus-5g-2023.jpg
            title="Motorola Moto G Stylus 5G (2023) Android smartphone. Announced May 2023. Features 6.6&Prime;  display, Snapdragon 6 Gen 1 chipset, 5000 mAh battery, 256 GB storage, 6 GB RAM."><strong><span>Moto
                G Stylus 5G (2023)</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_edge_40-12204.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-40.jpg
            title="Motorola Edge 40 Android smartphone. Announced May 2023. Features 6.55&Prime;  display, Dimensity 8020 chipset, 4400 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Edge
                40</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_edge+_(2023)-12251.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-plus-2023.jpg
            title="Motorola Edge+ (2023) Android smartphone. Announced May 2023. Features 6.67&Prime;  display, Snapdragon 8 Gen 2 chipset, 5100 mAh battery, 512 GB storage, 8 GB RAM, Corning Gorilla Glass Victus."><strong><span>Edge+
                (2023)</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g_stylus_(2023)-12250.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img
            src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-stylus-2023.jpg
            title="Motorola Moto G Stylus (2023) Android smartphone. Announced May 2023. Features 6.5&Prime;  display, MT6769 Helio G85 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                G Stylus (2023)</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g_(2023)-12249.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-5g-2023.jpg
            title="Motorola Moto G (2023) Android smartphone. Announced May 2023. Features 6.5&Prime;  display, Snapdragon 480+ 5G chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                G (2023)</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_watch_200-12033.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img
            src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-watch-200-.jpg
            title="Motorola Moto Watch 200 watch. Announced May 2023. Features 1.78&Prime;  display, 355 mAh battery."><strong><span>Moto
                Watch 200</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_watch_70-11984.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-watch-70.jpg
            title="Motorola Moto Watch 70 watch. Announced May 2023. Features 1.69&Prime;  display, 355 mAh battery."><strong><span>Moto
                Watch 70</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g_power_5g-12219.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img
            src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-power-5g.jpg
            title="Motorola Moto G Power 5G Android smartphone. Announced Apr 2023. Features 6.5&Prime;  display, Dimensity 930 chipset, 5000 mAh battery, 256 GB storage, 6 GB RAM."><strong><span>Moto
                G Power 5G</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_edge_40_pro-12127.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-40-pro.jpg
            title="Motorola Edge 40 Pro Android smartphone. Announced Apr 2023. Features 6.67&Prime;  display, Snapdragon 8 Gen 2 chipset, 4600 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass Victus."><strong><span>Edge
                40 Pro</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_defy_2-12141.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-defy-2-new.jpg
            title="Motorola Defy 2 Android smartphone. Announced Feb 2023. Features 6.6&Prime;  display, Dimensity 930 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM, MIL-STD-810H compliant, Corning Gorilla Glass Victus."><strong><span>Defy
                2</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g73-12079.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g73.jpg
            title="Motorola Moto G73 Android smartphone. Announced Jan 2023. Features 6.5&Prime;  display, Dimensity 930 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Moto
                G73</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g53-12028.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g53.jpg
            title="Motorola Moto G53 Android smartphone. Announced Dec 2022. Features 6.5&Prime;  display, Snapdragon 480+ 5G chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Moto
                G53</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g23-12088.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g23-r.jpg
            title="Motorola Moto G23 Android smartphone. Announced Jan 2023. Features 6.5&Prime;  display, MT6769Z Helio G85 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM, Panda glass."><strong><span>Moto
                G23</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g13-12091.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g13.jpg
            title="Motorola Moto G13 Android smartphone. Announced Jan 2023. Features 6.5&Prime;  display, MT6769Z Helio G85 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM, Panda glass."><strong><span>Moto
                G13</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_e13-12090.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e13-new.jpg
            title="Motorola Moto E13 Android smartphone. Announced Jan 2023. Features 6.5&Prime;  display, Unisoc T606 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Moto
                E13</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_thinkphone-12059.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-thinkphone.jpg
            title="Motorola ThinkPhone Android smartphone. Announced Jan 2023. Features 6.6&Prime;  display, Snapdragon 8+ Gen 1 chipset, 5000 mAh battery, 512 GB storage, 12 GB RAM, MIL-STD-810H compliant, Corning Gorilla Glass Victus."><strong><span>ThinkPhone</span></strong></a>
</li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_x40-11961.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-x40.jpg
            title="Motorola Moto X40 Android smartphone. Announced Dec 2022. Features 6.7&Prime;  display, Snapdragon 8 Gen 2 chipset, 4600 mAh battery, 512 GB storage, 12 GB RAM."><strong><span>Moto
                X40</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g_play_(2023)-11957.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img
            src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-play-2023.jpg
            title="Motorola Moto G Play (2023) Android smartphone. Announced Dec 2022. Features 6.5&Prime;  display, MT6765 Helio G37 chipset, 5000 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>Moto
                G Play (2023)</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_e32_(india)-11920.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img
            src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e32-india.jpg
            title="Motorola Moto E32 (India) Android smartphone. Announced Oct 2022. Features 6.5&Prime;  display, MT6765V chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                E32 (India)</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g72-11910.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g72-5g-.jpg
            title="Motorola Moto G72 Android smartphone. Announced Sep 2022. Features 6.6&Prime;  display, Helio G99 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Moto
                G72</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_e22i-11884.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e22i.jpg
            title="Motorola Moto E22i Android smartphone. Announced Sep 2022. Features 6.5&Prime;  display, MT6765V chipset, 4020 mAh battery, 64 GB storage, 2 GB RAM."><strong><span>Moto
                E22i</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_e22-11883.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e22.jpg
            title="Motorola Moto E22 Android smartphone. Announced Sep 2022. Features 6.5&Prime;  display, MT6765V chipset, 4020 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                E22</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_edge_30_ultra-11206.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-edge30-ultra.jpg
            title="Motorola Edge 30 Ultra Android smartphone. Announced Sep 2022. Features 6.67&Prime;  display, Snapdragon 8+ Gen 1 chipset, 4610 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass 5."><strong><span>Edge
                30 Ultra</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_edge_30_fusion-11851.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-edge30-fusion.jpg
            title="Motorola Edge 30 Fusion Android smartphone. Announced Sep 2022. Features 6.55&Prime;  display, Snapdragon 888+ 5G chipset, 4400 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass 5."><strong><span>Edge
                30 Fusion</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_edge_30_neo-11635.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-edge30-neo-.jpg
            title="Motorola Edge 30 Neo Android smartphone. Announced Sep 2022. Features 6.28&Prime;  display, Snapdragon 695 5G chipset, 4020 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Edge
                30 Neo</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_e22s-11837.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e22s.jpg
            title="Motorola Moto E22s Android smartphone. Announced Aug 2022. Features 6.5&Prime;  display, MT6765V chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                E22s</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_edge_(2022)-11777.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-2022.jpg
            title="Motorola Edge (2022) Android smartphone. Announced Aug 2022. Features 6.6&Prime;  display, MediaTek Dimensity 1050 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Edge
                (2022)</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_tab_g62-11746.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-tab-g62.jpg
            title="Motorola Moto Tab G62 Android tablet. Announced Aug 2022. Features 10.6&Prime;  display, Snapdragon 680 4G chipset, 7700 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                Tab G62</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_x30_pro-11366.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-x30-pro.jpg
            title="Motorola Moto X30 Pro Android smartphone. Announced Aug 2022. Features 6.7&Prime;  display, Snapdragon 8+ Gen 1 chipset, 4610 mAh battery, 512 GB storage, 12 GB RAM."><strong><span>Moto
                X30 Pro</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_s30_pro-11750.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-s30-pro.jpg
            title="Motorola Moto S30 Pro Android smartphone. Announced Aug 2022. Features 6.55&Prime;  display, Snapdragon 888+ 5G chipset, 4400 mAh battery, 512 GB storage, 12 GB RAM."><strong><span>Moto
                S30 Pro</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_razr_2022-11752.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-razr-2022-1.jpg
            title="Motorola Razr 2022 Android smartphone. Announced Aug 2022. Features 6.7&Prime;  display, Snapdragon 8+ Gen 1 chipset, 3500 mAh battery, 512 GB storage, 12 GB RAM."><strong><span>Razr
                2022</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g62_(india)-11754.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g62.jpg
            title="Motorola Moto G62 (India) Android smartphone. Announced Aug 2022. Features 6.5&Prime;  display, Snapdragon 695 5G chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Moto
                G62 (India)</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g32-11733.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g32.jpg
            title="Motorola Moto G32 Android smartphone. Announced Jul 2022. Features 6.5&Prime;  display, Snapdragon 680 4G chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Moto
                G32</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g62_5g-11602.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g62.jpg
            title="Motorola Moto G62 5G Android smartphone. Announced Jun 2022. Features 6.5&Prime;  display, Snapdragon 480+ 5G chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                G62 5G</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_g42-11608.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g42-r.jpg
            title="Motorola Moto G42 Android smartphone. Announced Jun 2022. Features 6.4&Prime;  display, Snapdragon 680 4G chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                G42</span></strong></a></li>
<li><div id="acciones">
        <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="varx">
        <p>x</p>
    </div> <a href="motorola_moto_e32s-11555.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"> <img src=https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e32.jpg
            title="Motorola Moto E32s Android smartphone. Announced May 2022. Features 6.5&Prime;  display, MT6765V chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                E32s</span></strong></a></li>

                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g71s-11531.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g82.jpg"
                                        title="Motorola Moto G71s Android smartphone. Announced May 2022. Features 6.6″  display, Snapdragon 695 5G chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Moto
                                            G71s</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g82-11508.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g82.jpg"
                                        title="Motorola Moto G82 Android smartphone. Announced May 2022. Features 6.6″  display, Snapdragon 695 5G chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Moto
                                            G82</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e32-11485.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e32.jpg"
                                        title="Motorola Moto E32 Android smartphone. Announced May 2022. Features 6.5″  display, Unisoc T606 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            E32</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_edge_30-11500.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-30-.jpg"
                                        title="Motorola Edge 30 Android smartphone. Announced Apr 2022. Features 6.5″  display, Snapdragon 778G+ 5G chipset, 4020 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Edge
                                            30</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g_stylus_5g_(2022)-11462.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-stylus-5g-2022-r1.jpg"
                                        title="Motorola Moto G Stylus 5G (2022) Android smartphone. Announced Apr 2022. Features 6.8″  display, Snapdragon 695 5G chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Moto
                                            G Stylus 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g_(2022)-11491.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-5g-2022.jpg"
                                        title="Motorola Moto G (2022) Android smartphone. Announced Apr 2022. Features 6.5″  display, MediaTek MT6833 Dimensity 700 chipset, 5000 mAh battery, 256 GB storage, 6 GB RAM."><strong><span>Moto
                                            G (2022)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g52-11457.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g52.jpg"
                                        title="Motorola Moto G52 Android smartphone. Announced Apr 2022. Features 6.6″  display, Snapdragon 680 4G chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Moto
                                            G52</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g22-11365.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g22.jpg"
                                        title="Motorola Moto G22 Android smartphone. Announced Mar 2022. Features 6.5″  display, MT6765V chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                                            G22</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_edge_30_pro-11320.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-30-pro.jpg"
                                        title="Motorola Edge 30 Pro Android smartphone. Announced Jan 2022. Features 6.7″  display, Snapdragon 8 Gen 1 chipset, 4800 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass 3."><strong><span>Edge
                                            30 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g200_5g-11222.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g200-5g-glacier-green.jpg"
                                        title="Motorola Moto G200 5G Android smartphone. Announced Nov 2021. Features 6.8″  display, Snapdragon 888+ 5G chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Moto
                                            G200 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g71_5g-11223.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g71-5g-neptune-green.jpg"
                                        title="Motorola Moto G71 5G Android smartphone. Announced Nov 2021. Features 6.4″  display, Snapdragon 695 5G chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Moto
                                            G71 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g51_5g-11194.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g51-5g-bright-silver.jpg"
                                        title="Motorola Moto G51 5G Android smartphone. Announced Nov 2021. Features 6.8″  display, Snapdragon 480+ 5G chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Moto
                                            G51 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g41-11224.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g41-pearl-gold.jpg"
                                        title="Motorola Moto G41 Android smartphone. Announced Nov 2021. Features 6.4″  display, MediaTek Helio G85 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Moto
                                            G41</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g31-11225.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g31-baby-blue.jpg"
                                        title="Motorola Moto G31 Android smartphone. Announced Nov 2021. Features 6.4″  display, MediaTek Helio G85 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                                            G31</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e30-11199.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e30.jpg"
                                        title="Motorola Moto E30 Android smartphone. Announced Nov 2021. Features 6.5″  display, Unisoc T700 chipset, 5000 mAh battery, 32 GB storage, 2 GB RAM."><strong><span>Moto
                                            E30</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e40-11112.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e40-r.jpg"
                                        title="Motorola Moto E40 Android smartphone. Announced Oct 2021. Features 6.5″  display, Unisoc T700 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            E40</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g60-10861.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g60.jpg"
                                        title="Motorola Moto G60 Android smartphone. Announced Apr 2021. Features 6.8″  display, Snapdragon 732G chipset, 6000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Moto
                                            G60</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e20-11072.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e20.jpg"
                                        title="Motorola Moto E20 Android smartphone. Announced Sep 2021. Features 6.5″  display, Unisoc T606 chipset, 4000 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>Moto
                                            E20</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_edge_(2021)-11061.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-2021.jpg"
                                        title="Motorola Edge (2021) Android smartphone. Announced Aug 2021. Features 6.8″  display, Snapdragon 778G 5G chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Edge
                                            (2021)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g60s-11047.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g60s.jpg"
                                        title="Motorola Moto G60S Android smartphone. Announced Aug 2021. Features 6.8″  display, Helio G95 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Moto
                                            G60S</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_edge_20_pro-11004.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-edge20-pro-.jpg"
                                        title="Motorola Edge 20 Pro Android smartphone. Announced Jul 2021. Features 6.7″  display, Snapdragon 870 5G chipset, 4500 mAh battery, 256 GB storage, 12 GB RAM, Corning Gorilla Glass 5."><strong><span>Edge
                                            20 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_edge_20-11034.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-20.jpg"
                                        title="Motorola Edge 20 Android smartphone. Announced Jul 2021. Features 6.7″  display, Snapdragon 778G 5G chipset, 4000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Edge
                                            20</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_edge_20_lite-11035.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-20-lite-.jpg"
                                        title="Motorola Edge 20 Lite Android smartphone. Announced Jul 2021. Features 6.7″  display, MediaTek MT6853V Dimensity 720 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Edge
                                            20 Lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g20-10828.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g20-.jpg"
                                        title="Motorola Moto G20 Android smartphone. Announced Apr 2021. Features 6.5″  display, Unisoc T700 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                                            G20</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g100-10791.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g100-1.jpg"
                                        title="Motorola Moto G100 Android smartphone. Announced Mar 2021. Features 6.7″  display, Snapdragon 870 5G chipset, 5000 mAh battery, 256 GB storage, 12 GB RAM."><strong><span>Moto
                                            G100</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g50-10789.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g50-r.jpg"
                                        title="Motorola Moto G50 Android smartphone. Announced Mar 2021. Features 6.5″  display, Snapdragon 480 5G chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                                            G50</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g10_power-10778.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g10-power.jpg"
                                        title="Motorola Moto G10 Power Android smartphone. Announced Mar 2021. Features 6.5″  display, Snapdragon 460 chipset, 6000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            G10 Power</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e7i_power-11000.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e7-power.jpg"
                                        title="Motorola Moto E7i Power Android smartphone. Announced Feb 2021. Features 6.51″  display, Unisoc SC9863A chipset, 5000 mAh battery, 32 GB storage, 2 GB RAM."><strong><span>Moto
                                            E7i Power</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e7_power-10738.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e7-power.jpg"
                                        title="Motorola Moto E7 Power Android smartphone. Announced Feb 2021. Features 6.51″  display, MediaTek MT6762G Helio G25 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            E7 Power</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g30-10724.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g30.jpg"
                                        title="Motorola Moto G30 Android smartphone. Announced Feb 2021. Features 6.5″  display, Snapdragon 662 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Moto
                                            G30</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g10-10723.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g10.jpg"
                                        title="Motorola Moto G10 Android smartphone. Announced Feb 2021. Features 6.5″  display, Snapdragon 460 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                                            G10</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e6i-10734.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e6i.jpg"
                                        title="Motorola Moto E6i Android smartphone. Announced Feb 2021. Features 6.1″  display, Unisoc SC9863A chipset, 3000 mAh battery, 32 GB storage, 2 GB RAM."><strong><span>Moto
                                            E6i</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g_stylus_(2021)-10583.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-stylus-2021.jpg"
                                        title="Motorola Moto G Stylus (2021) Android smartphone. Announced Jan 2021. Features 6.8″  display, Snapdragon 678 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                                            G Stylus (2021)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e7-10511.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e7-r1.jpg"
                                        title="Motorola Moto E7 Android smartphone. Announced Nov 2020. Features 6.5″  display, MediaTek MT6762G Helio G25 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            E7</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g9_power-10574.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g9-power.jpg"
                                        title="Motorola Moto G9 Power Android smartphone. Announced Nov 2020. Features 6.8″  display, Snapdragon 662 chipset, 6000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                                            G9 Power</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g9_plus-10432.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g9-plus-new.jpg"
                                        title="Motorola Moto G9 Plus Android smartphone. Announced Sep 2020. Features 6.81″  display, Snapdragon 730G chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Moto
                                            G9 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e7_plus-10436.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e7-plus.jpg"
                                        title="Motorola Moto E7 Plus Android smartphone. Announced Sep 2020. Features 6.5″  display, Snapdragon 460 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            E7 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g9_play-10387.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g9-play.jpg"
                                        title="Motorola Moto G9 Play Android smartphone. Announced Aug 2020. Features 6.5″  display, Snapdragon 662 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                                            G9 Play</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_one_fusion-10317.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-one-fusion-1.jpg"
                                        title="Motorola One Fusion Android smartphone. Announced Jul 2020. Features 6.5″  display, Snapdragon 710 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>One
                                            Fusion</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_one_fusion+-10290.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-one-fusion-plus.jpg"
                                        title="Motorola One Fusion+ Android smartphone. Announced Jun 2020. Features 6.5″  display, Snapdragon 730 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>One
                                            Fusion+</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_one_vision_plus-10374.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g8-plus.jpg"
                                        title="Motorola One Vision Plus Android smartphone. Announced Jul 2020. Features 6.3″  display, Snapdragon 665 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>One
                                            Vision Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_edge+_(2020)-10119.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-plus.jpg"
                                        title="Motorola Edge+ (2020) Android smartphone. Announced Apr 2020. Features 6.7″  display, Snapdragon 865 5G chipset, 5000 mAh battery, 256 GB storage, 12 GB RAM, Corning Gorilla Glass 5."><strong><span>Edge+
                                            (2020)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_edge-10133.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-midnight-magenta.jpg"
                                        title="Motorola Edge Android smartphone. Announced Apr 2020. Features 6.7″  display, Snapdragon 765G 5G chipset, 4500 mAh battery, 256 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Edge</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g8_power_lite-10154.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g8-power-lite.jpg"
                                        title="Motorola Moto G8 Power Lite Android smartphone. Announced Apr 2020. Features 6.5″  display, MT6765 Helio P35 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            G8 Power Lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e6s_(2020)-10135.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e6s-2020.jpg"
                                        title="Motorola Moto E6s (2020) Android smartphone. Announced Mar 2020. Features 6.1″  display, MT6762 Helio P22 chipset, 3000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            E6s (2020)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g8-10051.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g8.jpg"
                                        title="Motorola Moto G8 Android smartphone. Announced Mar 2020. Features 6.4″  display, Snapdragon 665 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            G8</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g_stylus-10057.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-stylus-.jpg"
                                        title="Motorola Moto G Stylus Android smartphone. Announced Feb 2020. Features 6.4″  display, Snapdragon 665 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Moto
                                            G Stylus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g8_power-10052.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-power-r.jpg"
                                        title="Motorola Moto G8 Power Android smartphone. Announced Feb 2020. Features 6.4″  display, Snapdragon 665 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            G8 Power</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_one_hyper-9944.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-one-hyper-.jpg"
                                        title="Motorola One Hyper Android smartphone. Announced Dec 2019. Features 6.5″  display, Snapdragon 675 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>One
                                            Hyper</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g8_play-9918.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g8-play-r.jpg"
                                        title="Motorola Moto G8 Play Android smartphone. Announced Oct 2019. Features 6.2″  display, MT6771 Helio P70M chipset, 4000 mAh battery, 32 GB storage, 2 GB RAM."><strong><span>Moto
                                            G8 Play</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e6_play-9932.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e6-play.jpg"
                                        title="Motorola Moto E6 Play Android smartphone. Announced Oct 2019. Features 5.5″  display, MT6739 chipset, 3000 mAh battery, 32 GB storage, 2 GB RAM."><strong><span>Moto
                                            E6 Play</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g8_plus-9916.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g8-plus.jpg"
                                        title="Motorola Moto G8 Plus Android smartphone. Announced Oct 2019. Features 6.3″  display, Snapdragon 665 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            G8 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_one_macro-9900.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-one-macro-10.jpg"
                                        title="Motorola One Macro Android smartphone. Announced Oct 2019. Features 6.2″  display, MT6771 Helio P70 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>One
                                            Macro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e6_plus-9831.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e6-plus-.jpg"
                                        title="Motorola Moto E6 Plus Android smartphone. Announced Sep 2019. Features 6.1″  display, MT6762 Helio P22 chipset, 3000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Moto
                                            E6 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_one_zoom-9745.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-one-zoom-r1.jpg"
                                        title="Motorola One Zoom Android smartphone. Announced Sep 2019. Features 6.39″  display, Snapdragon 675 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM, Panda King glass."><strong><span>One
                                            Zoom</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_one_action-9739.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-one-action-aqua-teal.jpg"
                                        title="Motorola One Action Android smartphone. Announced Aug 2019. Features 6.3″  display, Exynos 9609 chipset, 3500 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>One
                                            Action</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e6-9682.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e6-xt2005-navy-blue.jpg"
                                        title="Motorola Moto E6 Android smartphone. Announced Jul 2019. Features 5.5″  display, Snapdragon 435 chipset, 3000 mAh battery, 16 GB storage, 2 GB RAM."><strong><span>Moto
                                            E6</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_one_vision-9647.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-one-vision.jpg"
                                        title="Motorola One Vision Android smartphone. Announced May 2019. Features 6.3″  display, Exynos 9609 chipset, 3500 mAh battery, 128 GB storage, 4 GB RAM, Corning Gorilla Glass (unspecified version)."><strong><span>One
                                            Vision</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g7_plus-9533.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g7-plus.jpg"
                                        title="Motorola Moto G7 Plus Android smartphone. Announced Feb 2019. Features 6.2″  display, Snapdragon 636 chipset, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            G7 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g7-9357.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g7.jpg"
                                        title="Motorola Moto G7 Android smartphone. Announced Feb 2019. Features 6.2″  display, Snapdragon 632 chipset, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            G7</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g7_power-9527.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g7-power.jpg"
                                        title="Motorola Moto G7 Power Android smartphone. Announced Feb 2019. Features 6.2″  display, Snapdragon 632 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3 (market dependent)."><strong><span>Moto
                                            G7 Power</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g7_play-9532.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g7-play.jpg"
                                        title="Motorola Moto G7 Play Android smartphone. Announced Feb 2019. Features 5.7″  display, Snapdragon 632 chipset, 3000 mAh battery, 32 GB storage, 3 GB RAM, Corning Gorilla Glass 3 (market dependent)."><strong><span>Moto
                                            G7 Play</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_z3-9283.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-z3-play-.jpg"
                                        title="Motorola Moto Z3 Android smartphone. Announced Aug 2018. Features 6.01″  display, Snapdragon 835 chipset, Dual: 12 MP (f/2.0, 1.25µm) + 12 MP primary camera, 8 MP front camera, 3000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            Z3</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_z3_play-9003.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-z3-play-.jpg"
                                        title="Motorola Moto Z3 Play Android smartphone. Announced Jun 2018. Features 6.01″  display, Snapdragon 636 chipset, 3000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            Z3 Play</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e5_play_go-9270.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e5-play-android-go-edition.jpg"
                                        title="Motorola Moto E5 Play Go Android smartphone. Announced Jul 2018. Features 5.2″  display, Snapdragon 425 chipset, 8 MP primary camera, 5 MP front camera, 2800 mAh battery, 16 GB storage, 1000 MB RAM."><strong><span>Moto
                                            E5 Play Go</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e5_play-9175.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e5-play.jpg"
                                        title="Motorola Moto E5 Play Android smartphone. Announced Apr 2018. Features 5.2″  display, Snapdragon 425 chipset, 8 MP primary camera, 5 MP front camera, 2800 mAh battery, 16 GB storage, 2 GB RAM."><strong><span>Moto
                                            E5 Play</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e5_plus-9095.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e5-plus.jpg"
                                        title="Motorola Moto E5 Plus Android smartphone. Announced Apr 2018. Features 6.0″  display, Snapdragon 425 chipset, 12 MP primary camera, 5 MP front camera, 5000 mAh battery, 32 GB storage, 3 GB RAM, Corning Gorilla Glass (unspecified version)."><strong><span>Moto
                                            E5 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e5-9008.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e5.jpg"
                                        title="Motorola Moto E5 Android smartphone. Announced Apr 2018. Features 5.7″  display, Snapdragon 425 chipset, 13 MP primary camera, 5 MP front camera, 4000 mAh battery, 32 GB storage, 2 GB RAM, Corning Gorilla Glass (unspecified version)."><strong><span>Moto
                                            E5</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g6_play-9002.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g6-play-r1.jpg"
                                        title="Motorola Moto G6 Play Android smartphone. Announced Apr 2018. Features 5.7″  display, Snapdragon 430 chipset, 13 MP primary camera, 8 MP, LED flash, 1080p@30fps or 5 MP front camera, 4000 mAh battery, 32 GB storage, 3 GB RAM, Corning Gorilla Glass (unspecified version)."><strong><span>Moto
                                            G6 Play</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g6_plus-9001.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g6-plus-r1.jpg"
                                        title="Motorola Moto G6 Plus Android smartphone. Announced Apr 2018. Features 5.9″  display, Snapdragon 630 chipset, Dual: 12 MP (f/1.7, dual pixel PDAF) + 5 MP primary camera, 8 MP front camera, 3200 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            G6 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g6-9000.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g6-r1.jpg"
                                        title="Motorola Moto G6 Android smartphone. Announced Apr 2018. Features 5.7″  display, Snapdragon 450 chipset, Dual: 12 MP (f/1.8, PDAF) + 5 MP primary camera, 8 MP or 16 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            G6</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_x5-8999.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-x5-r.jpg"
                                        title="Motorola Moto X5 Android smartphone. Not announced yet. Features 5.9″  display, Dual: 12 MP (f/1.8, 1.4µm, dual pixel PDAF) + 8 MP primary camera, Dual: 16 MP + 8 MP front camera, 3300 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            X5</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_x4-8634.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-x4.jpg"
                                        title="Motorola Moto X4 Android smartphone. Announced Aug 2017. Features 5.2″  display, Snapdragon 630 chipset, Dual: 12 MP (f/2.0, 1.4µm, dual pixel PDAF) + 8 MP primary camera, 16 MP front camera, 3000 mAh battery, 64 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            X4</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g5s_plus-8699.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g5s.jpg"
                                        title="Motorola Moto G5S Plus Android smartphone. Announced Aug 2017. Features 5.5″  display, Snapdragon 625 chipset, Dual: 13 MP (f/2.0, AF) + 13 MP primary camera, 8 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            G5S Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g5s-8698.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g5s-plus.jpg"
                                        title="Motorola Moto G5S Android smartphone. Announced Aug 2017. Features 5.2″  display, Snapdragon 430 chipset, 16 MP primary camera, 5 MP front camera, 3000 mAh battery, 32 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            G5S</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_z2_force-8693.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-z2-force-.jpg"
                                        title="Motorola Moto Z2 Force Android smartphone. Announced Jul 2017. Features 5.5″  display, Snapdragon 835 chipset, Dual: 12 MP primary camera, 5 MP front camera, 2730 mAh battery, 128 GB storage, 6 GB RAM, Shatterproof."><strong><span>Moto
                                            Z2 Force</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e4_plus-8722.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e4-plus.jpg"
                                        title="Motorola Moto E4 Plus Android smartphone. Announced Jun 2017. Features 5.5″  display, MT6737 chipset, 13 MP primary camera, 5 MP front camera, 5000 mAh battery, 32 GB storage, 3 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            E4 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e4-8721.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e4.jpg"
                                        title="Motorola Moto E4 Android smartphone. Announced Jun 2017. Features 5.0″  display, MT6737 chipset, 8 MP primary camera, 5 MP front camera, 2800 mAh battery, 16 GB storage, 2 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            E4</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_z2_play-8674.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-z2-play.jpg"
                                        title="Motorola Moto Z2 Play Android smartphone. Announced Jun 2017. Features 5.5″  display, Snapdragon 626 chipset, 12 MP primary camera, 5 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            Z2 Play</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_c_plus-8646.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-c-plus-.jpg"
                                        title="Motorola Moto C Plus Android smartphone. Announced May 2017. Features 5.0″  display, MT6737 chipset, 8 MP primary camera, 2 MP front camera, 4000 mAh battery, 16 GB storage, 2 GB RAM."><strong><span>Moto
                                            C Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_c-8645.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-c.jpg"
                                        title="Motorola Moto C Android smartphone. Announced May 2017. Features 5.0″  display, MT6737M chipset, 5 MP primary camera, 2 MP front camera, 2350 mAh battery, 16 GB storage, 1000 MB RAM."><strong><span>Moto
                                            C</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g5_plus-8453.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g5-plus1.jpg"
                                        title="Motorola Moto G5 Plus Android smartphone. Announced Feb 2017. Features 5.2″  display, Snapdragon 625 chipset, 12 MP primary camera, 5 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            G5 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g5-8454.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g5-r1.jpg"
                                        title="Motorola Moto G5 Android smartphone. Announced Feb 2017. Features 5.0″  display, Snapdragon 430 chipset, 13 MP primary camera, 5 MP front camera, 2800 mAh battery, 32 GB storage, 3 GB RAM, Scratch-resistant glass."><strong><span>Moto
                                            G5</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_z_play-8310.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-z-play.jpg"
                                        title="Motorola Moto Z Play Android smartphone. Announced Aug 2016. Features 5.5″  display, Snapdragon 625 chipset, 16 MP primary camera, 5 MP front camera, 3510 mAh battery, 32 GB storage, 3 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            Z Play</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_z_force-8093.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-z-force.jpg"
                                        title="Motorola Moto Z Force Android smartphone. Announced Jun 2016. Features 5.5″  display, Snapdragon 820 chipset, 21 MP primary camera, 5 MP front camera, 3500 mAh battery, 64 GB storage, 4 GB RAM, Shatterproof."><strong><span>Moto
                                            Z Force</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_z-8094.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-z.jpg"
                                        title="Motorola Moto Z Android smartphone. Announced Jun 2016. Features 5.5″  display, Snapdragon 820 chipset, 13 MP primary camera, 5 MP front camera, 2600 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 4."><strong><span>Moto
                                            Z</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g4_plus-8050.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g4-plus-r.jpg"
                                        title="Motorola Moto G4 Plus Android smartphone. Announced May 2016. Features 5.5″  display, Snapdragon 617 chipset, 16 MP primary camera, 5 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            G4 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g4-8103.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g4-.jpg"
                                        title="Motorola Moto G4 Android smartphone. Announced May 2016. Features 5.5″  display, Snapdragon 617 chipset, 13 MP primary camera, 5 MP front camera, 3000 mAh battery, 32 GB storage, 2 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            G4</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g4_play-8104.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g4-play.jpg"
                                        title="Motorola Moto G4 Play Android smartphone. Announced May 2016. Features 5.0″  display, Snapdragon 410 chipset, 8 MP primary camera, 5 MP front camera, 2800 mAh battery, 16 GB storage, 2 GB RAM."><strong><span>Moto
                                            G4 Play</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_e-6376.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-e.jpg"
                                        title="Motorola Moto E Android smartphone. Announced May 2014. Features 4.3″  display, Snapdragon 200 chipset, 5 MP primary camera, 1980 mAh battery, 4 GB storage, 1000 MB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            E</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_g-5831.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/motorola-moto-g-ofic.jpg"
                                        title="Motorola Moto G Android smartphone. Announced Nov 2013. Features 4.5″  display, Snapdragon 400 chipset, 5 MP primary camera, 1.3 MP front camera, 2070 mAh battery, 16 GB storage, 1000 MB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="motorola_moto_x-5601.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/moto-x.jpg"
                                        title="Motorola Moto X Android smartphone. Announced Aug 2013. Features 4.7″  display, Snapdragon S4 Pro chipset, 10 MP primary camera, 2 MP front camera, 2200 mAh battery, 64 GB storage, 2 GB RAM, Corning Gorilla Glass 3."><strong><span>Moto
                                            X</span></strong></a>
                            </li>
                        </ul>

                    </div>

                </div>

            </div>

        </div><!-- id body -->
    </div><!-- id outer -->
</div>


<?php
        
            return ob_get_clean();
           }

  function KOL_plugin_iphone_carteleria()
           {    
          ?>
<a class="no-print" href="https://kolaccesorios.com/menu-carteleria/">
    <img src="https://kolaccesorios.com/wp-content/uploads/2022/05/menu-2.png"
        style="width: 50px;position: absolute;left: 20px;top: 250px;z-index: 999999;">
</a>

<div class="explicacion no-print" class='explicacion'>
    <ul>
        <li>
            Seleccionar el estilo de la carteleria apropiada para el local.
        </li>
        <li>
            Duplicar o eliminar los elemento segun la necesidad del local.
        </li>
        <li>
            Presionar ctl + p y guardar como pdf (sin margenes).
        </li>
        <li>
            Enviar el PDF a redes y la carteleria sera entregada con el pedido.
        </li>
        <li>
            <strong>NO SE GUARDAN LOS CAMBIOS UNA VEZ REFRESCADA LA PAGINA</strong>
        </li>
    </ul>
</div>

<button type="button" onclick="opcion0()" class="no-print">Diseño</button>
<button type="button" onclick="opcion1()" class="no-print">Diseño 2</button>
<button type="button" onclick="opcion2()" class="no-print">Diseño 3</button>
<button type="button" onclick="opcion3()" class="no-print">Diseño 4</button>
<button type="button" onclick="opcionglassplano()" style="color: green;" class="no-print">Glass Plano</button>
<button type="button" onclick="opcionglasscomp()" style="color: #c378f4;" class="no-print">Glass Completo</button>

<div id="wrapper" class="l-container opcion0">
    <div id="outer" class="row">

        <div id="body" class="clearfix">
            <div class="main right main-maker l-box col">
                <div class="section-body">
                    <div class="makers">
                        <ul>

                        <li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_iphone_15_pro_max-12548.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-15-pro-max.jpg
            title="Apple iPhone 15 Pro Max smartphone. Announced Sep 2023. Features 6.7&Prime;  display, Apple A17 Pro chipset, 4441 mAh battery, 1024 GB storage, 8 GB RAM, Ceramic Shield glass."><strong><span>iPhone
                15 Pro Max</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_iphone_15_pro-12557.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-15-pro.jpg
            title="Apple iPhone 15 Pro smartphone. Announced Sep 2023. Features 6.1&Prime;  display, Apple A17 Pro chipset, 3274 mAh battery, 1024 GB storage, 8 GB RAM, Ceramic Shield glass."><strong><span>iPhone
                15 Pro</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_iphone_15_plus-12558.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-15-plus-.jpg
            title="Apple iPhone 15 Plus smartphone. Announced Sep 2023. Features 6.7&Prime;  display, Apple A16 Bionic chipset, 4383 mAh battery, 512 GB storage, 6 GB RAM, Ceramic Shield glass."><strong><span>iPhone
                15 Plus</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_iphone_15-12559.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-15.jpg
            title="Apple iPhone 15 smartphone. Announced Sep 2023. Features 6.1&Prime;  display, Apple A16 Bionic chipset, 3349 mAh battery, 512 GB storage, 6 GB RAM, Ceramic Shield glass."><strong><span>iPhone
                15</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_watch_ultra_2-12560.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-watch-ultra2.jpg
            title="Apple Watch Ultra 2 watch. Announced Sep 2023. Features 1.92&Prime;  display, Apple S9 chipset, 564 mAh battery, 64 GB storage, MIL-STD 810H certified, Sapphire crystal glass."><strong><span>Watch
                Ultra 2</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_watch_series_9-12561.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-watch-series9.jpg
            title="Apple Watch Series 9 watch. Announced Sep 2023. Features 1.9&Prime;  display, Apple S9 chipset, 308 mAh battery, 64 GB storage, IP6X certified, Sapphire crystal glass."><strong><span>Watch
                Series 9</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_watch_series_9_aluminum-12562.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
            src=https://fdn2.gsmarena.com/vv/bigpic/apple-watch-series9-aluminum.jpg
            title="Apple Watch Series 9 Aluminum watch. Announced Sep 2023. Features 1.9&Prime;  display, Apple S9 chipset, 308 mAh battery, 64 GB storage, IP6X certified, Ion-X strengthened glass."><strong><span>Watch
                Series 9 Aluminum</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_ipad_pro_12_9_(2022)-11939.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
            src=https://fdn2.gsmarena.com/vv/bigpic/apple-ipad-pro-129-2022.jpg
            title="Apple iPad Pro 12.9 (2022) tablet. Announced Oct 2022. Features 12.9&Prime;  display, Apple M2 chipset, 10758 mAh battery, 2048 GB storage, 16 GB RAM, Scratch-resistant glass."><strong><span>iPad
                Pro 12.9 (2022)</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_ipad_pro_11_(2022)-11940.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-ipad-pro-11-2022.jpg
            title="Apple iPad Pro 11 (2022) tablet. Announced Oct 2022. Features 11.0&Prime;  display, Apple M2 chipset, 7538 mAh battery, 2048 GB storage, 16 GB RAM, Scratch-resistant glass."><strong><span>iPad
                Pro 11 (2022)</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_ipad_(2022)-11941.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-ipad-10-2022.jpg
            title="Apple iPad (2022) tablet. Announced Oct 2022. Features 10.9&Prime;  display, Apple A14 Bionic chipset, 7606 mAh battery, 256 GB storage, 4 GB RAM, Scratch-resistant glass."><strong><span>iPad
                (2022)</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_iphone_14_pro_max-11773.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
            src=https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-14-pro-max-.jpg
            title="Apple iPhone 14 Pro Max smartphone. Announced Sep 2022. Features 6.7&Prime;  display, Apple A16 Bionic chipset, 4323 mAh battery, 1024 GB storage, 6 GB RAM, Ceramic Shield glass."><strong><span>iPhone
                14 Pro Max</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_iphone_14_pro-11860.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-14-pro.jpg
            title="Apple iPhone 14 Pro smartphone. Announced Sep 2022. Features 6.1&Prime;  display, Apple A16 Bionic chipset, 3200 mAh battery, 1024 GB storage, 6 GB RAM, Ceramic Shield glass."><strong><span>iPhone
                14 Pro</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_iphone_14_plus-11862.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-14-plus.jpg
            title="Apple iPhone 14 Plus smartphone. Announced Sep 2022. Features 6.7&Prime;  display, Apple A15 Bionic chipset, 4323 mAh battery, 512 GB storage, 6 GB RAM, Ceramic Shield glass."><strong><span>iPhone
                14 Plus</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_iphone_14-11861.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-14.jpg
            title="Apple iPhone 14 smartphone. Announced Sep 2022. Features 6.1&Prime;  display, Apple A15 Bionic chipset, 3279 mAh battery, 512 GB storage, 6 GB RAM, Ceramic Shield glass."><strong><span>iPhone
                14</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_watch_ultra-11827.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-watch-ultra.jpg
            title="Apple Watch Ultra watch. Announced Sep 2022. Features 1.92&Prime;  display, Apple S8 chipset, 542 mAh battery, 32 GB storage, MIL-STD 810H certified, Sapphire crystal glass."><strong><span>Watch
                Ultra</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_watch_series_8-11866.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/apple-watch-8.jpg
            title="Apple Watch Series 8 watch. Announced Sep 2022. Features 1.9&Prime;  display, Apple S8 chipset, 308 mAh battery, 32 GB storage, 1000 MB RAM, IP6X certified, Sapphire crystal glass."><strong><span>Watch
                Series 8</span></strong></a></li>
<li>  <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div> <a href="apple_watch_series_8_aluminum-11864.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
            src=https://fdn2.gsmarena.com/vv/bigpic/apple-watch-8-aluminum.jpg
            title="Apple Watch Series 8 Aluminum watch. Announced Sep 2022. Features 1.9&Prime;  display, Apple S8 chipset, 308 mAh battery, 32 GB storage, 1000 MB RAM, IP6X certified, Ion-X strengthened glass."><strong><span>Watch
                Series 8 Aluminum</span></strong></a></li>

                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_se_(2022)-11410.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-se-2022.jpg"
                                        title="Apple iPhone SE (2022) smartphone. Announced Mar 2022. Features 4.7″  display, Apple A15 Bionic chipset, 2018 mAh battery, 256 GB storage, 4 GB RAM, Ion-strengthened glass."><strong><span>iPhone
                                            SE (2022)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_13_pro_max-11089.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-13-pro-max.jpg"
                                        title="Apple iPhone 13 Pro Max smartphone. Announced Sep 2021. Features 6.7″  display, Apple A15 Bionic chipset, 4352 mAh battery, 1024 GB storage, 6 GB RAM, Scratch-resistant ceramic glass."><strong><span>iPhone
                                            13 Pro Max</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_13_pro-11102.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-13-pro.jpg"
                                        title="Apple iPhone 13 Pro smartphone. Announced Sep 2021. Features 6.1″  display, Apple A15 Bionic chipset, 3095 mAh battery, 1024 GB storage, 6 GB RAM, Scratch-resistant ceramic glass."><strong><span>iPhone
                                            13 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_13-11103.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-13.jpg"
                                        title="Apple iPhone 13 smartphone. Announced Sep 2021. Features 6.1″  display, Apple A15 Bionic chipset, 3240 mAh battery, 512 GB storage, 4 GB RAM, Scratch-resistant ceramic glass."><strong><span>iPhone
                                            13</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_13_mini-11104.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-13-mini.jpg"
                                        title="Apple iPhone 13 mini smartphone. Announced Sep 2021. Features 5.4″  display, Apple A15 Bionic chipset, 2438 mAh battery, 512 GB storage, 4 GB RAM, Scratch-resistant ceramic glass."><strong><span>iPhone
                                            13 mini</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_12_pro_max-10237.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-12-pro-max-.jpg"
                                        title="Apple iPhone 12 Pro Max smartphone. Announced Oct 2020. Features 6.7″  display, Apple A14 Bionic chipset, 3687 mAh battery, 512 GB storage, 6 GB RAM, Scratch-resistant ceramic glass."><strong><span>iPhone
                                            12 Pro Max</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_12_pro-10508.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-12-pro--.jpg"
                                        title="Apple iPhone 12 Pro smartphone. Announced Oct 2020. Features 6.1″  display, Apple A14 Bionic chipset, 2815 mAh battery, 512 GB storage, 6 GB RAM, Scratch-resistant ceramic glass."><strong><span>iPhone
                                            12 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_12-10509.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-12.jpg"
                                        title="Apple iPhone 12 smartphone. Announced Oct 2020. Features 6.1″  display, Apple A14 Bionic chipset, 2815 mAh battery, 256 GB storage, 4 GB RAM, Scratch-resistant ceramic glass."><strong><span>iPhone
                                            12</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_12_mini-10510.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-12-mini.jpg"
                                        title="Apple iPhone 12 mini smartphone. Announced Oct 2020. Features 5.4″  display, Apple A14 Bionic chipset, 2227 mAh battery, 256 GB storage, 4 GB RAM, Scratch-resistant ceramic glass."><strong><span>iPhone
                                            12 mini</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_se_(2020)-10170.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-se-2020.jpg"
                                        title="Apple iPhone SE (2020) smartphone. Announced Apr 2020. Features 4.7″  display, Apple A13 Bionic chipset, 1821 mAh battery, 256 GB storage, 3 GB RAM, Ion-strengthened glass."><strong><span>iPhone
                                            SE (2020)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_11_pro_max-9846.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-11-pro.jpg"
                                        title="Apple iPhone 11 Pro Max smartphone. Announced Sep 2019. Features 6.5″  display, Apple A13 Bionic chipset, 3969 mAh battery, 512 GB storage, 4 GB RAM, Scratch-resistant glass."><strong><span>iPhone
                                            11 Pro Max</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_11_pro-9847.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-11-pro-max-.jpg"
                                        title="Apple iPhone 11 Pro smartphone. Announced Sep 2019. Features 5.8″  display, Apple A13 Bionic chipset, 3046 mAh battery, 512 GB storage, 4 GB RAM, Scratch-resistant glass."><strong><span>iPhone
                                            11 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_11-9848.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-11.jpg"
                                        title="Apple iPhone 11 smartphone. Announced Sep 2019. Features 6.1″  display, Apple A13 Bionic chipset, 3110 mAh battery, 256 GB storage, 4 GB RAM, Scratch-resistant glass."><strong><span>iPhone
                                            11</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_xs_max-9319.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-xs-max-new1.jpg"
                                        title="Apple iPhone XS Max smartphone. Announced Sep 2018. Features 6.5″  display, Apple A12 Bionic chipset, Dual: 12 MP (f/1.8, 26mm, 1/2.55″, 1.4µm) + 12 MP primary camera, 7 MP front camera, 3174 mAh battery, 512 GB storage, 4 GB RAM, Scratch-resistant glass."><strong><span>iPhone
                                            XS Max</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_xs-9318.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-xs-new.jpg"
                                        title="Apple iPhone XS smartphone. Announced Sep 2018. Features 5.8″  display, Apple A12 Bionic chipset, Dual: 12 MP (f/1.8, 26mm, 1/2.55″, 1.4µm) + 12 MP primary camera, 7 MP front camera, 2658 mAh battery, 512 GB storage, 4 GB RAM, Scratch-resistant glass."><strong><span>iPhone
                                            XS</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_xr-9320.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-xr-new.jpg"
                                        title="Apple iPhone XR smartphone. Announced Sep 2018. Features 6.1″  display, Apple A12 Bionic chipset, 12 MP primary camera, 7 MP front camera, 2942 mAh battery, 256 GB storage, 3 GB RAM, Scratch-resistant glass."><strong><span>iPhone
                                            XR</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_x-8858.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-x.jpg"
                                        title="Apple iPhone X smartphone. Announced Sep 2017. Features 5.8″  display, Apple A11 Bionic chipset, Dual: 12 MP (f/1.8, 28mm, 1.22µm) + 12 MP primary camera, 7 MP front camera, 2716 mAh battery, 256 GB storage, 3 GB RAM, Scratch-resistant glass."><strong><span>iPhone
                                            X</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_8_plus-8131.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-8-plus-new.jpg"
                                        title="Apple iPhone 8 Plus smartphone. Announced Sep 2017. Features 5.5″  display, Apple A11 Bionic chipset, Dual: 12 MP (f/1.8, 28mm, OIS) + 12 MP primary camera, 7 MP front camera, 2691 mAh battery, 256 GB storage, 3 GB RAM, Ion-strengthened glass."><strong><span>iPhone
                                            8 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_8-8573.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-8-new.jpg"
                                        title="Apple iPhone 8 smartphone. Announced Sep 2017. Features 4.7″  display, Apple A11 Bionic chipset, 12 MP primary camera, 7 MP front camera, 1821 mAh battery, 256 GB storage, 2 GB RAM, Ion-strengthened glass."><strong><span>iPhone
                                            8</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_7_plus-8065.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-7-plus-r2.jpg"
                                        title="Apple iPhone 7 Plus smartphone. Announced Sep 2016. Features 5.5″  display, Apple A10 Fusion chipset, Dual: 12 MP (f/1.8, 28mm, 1/3″, OIS) + 12 MP primary camera, 7 MP front camera, 2900 mAh battery, 256 GB storage, 3 GB RAM, Ion-strengthened glass."><strong><span>iPhone
                                            7 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_7-8064.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-7r4.jpg"
                                        title="Apple iPhone 7 smartphone. Announced Sep 2016. Features 4.7″  display, Apple A10 Fusion chipset, 12 MP primary camera, 7 MP front camera, 1960 mAh battery, 256 GB storage, 2 GB RAM, Ion-strengthened glass."><strong><span>iPhone
                                            7</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_se-7969.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-5se-ofic.jpg"
                                        title="Apple iPhone SE smartphone. Announced Mar 2016. Features 4.0″  display, Apple A9 chipset, 12 MP primary camera, 1.2 MP front camera, 1624 mAh battery, 128 GB storage, 2 GB RAM."><strong><span>iPhone
                                            SE</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_6s_plus-7243.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-6s-plus.jpg"
                                        title="Apple iPhone 6s Plus smartphone. Announced Sep 2015. Features 5.5″  display, Apple A9 chipset, 12 MP primary camera, 5 MP front camera, 2750 mAh battery, 128 GB storage, 2 GB RAM, Ion-strengthened glass."><strong><span>iPhone
                                            6s Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_6s-7242.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-6s1.jpg"
                                        title="Apple iPhone 6s smartphone. Announced Sep 2015. Features 4.7″  display, Apple A9 chipset, 12 MP primary camera, 5 MP front camera, 1715 mAh battery, 128 GB storage, 2 GB RAM, Ion-strengthened glass."><strong><span>iPhone
                                            6s</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_6_plus-6665.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-6-plus2.jpg"
                                        title="Apple iPhone 6 Plus smartphone. Announced Sep 2014. Features 5.5″  display, Apple A8 chipset, 8 MP primary camera, 1.2 MP front camera, 2915 mAh battery, 128 GB storage, 1000 MB RAM, Ion-strengthened glass."><strong><span>iPhone
                                            6 Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_6-6378.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-6-4.jpg"
                                        title="Apple iPhone 6 smartphone. Announced Sep 2014. Features 4.7″  display, Apple A8 chipset, 8 MP primary camera, 1.2 MP front camera, 1810 mAh battery, 128 GB storage, 1000 MB RAM, Ion-strengthened glass."><strong><span>iPhone
                                            6</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_5s-5685.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-5s-ofic.jpg"
                                        title="Apple iPhone 5s smartphone. Announced Sep 2013. Features 4.0″  display, Apple A7 chipset, 8 MP primary camera, 1.2 MP front camera, 1560 mAh battery, 64 GB storage, 1000 MB RAM, Corning Gorilla Glass."><strong><span>iPhone
                                            5s</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="apple_iphone_5c-5690.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-5c-new2.jpg"
                                        title="Apple iPhone 5c smartphone. Announced Sep 2013. Features 4.0″  display, Apple A6 chipset, 8 MP primary camera, 1.2 MP front camera, 1510 mAh battery, 32 GB storage, 1000 MB RAM."><strong><span>iPhone
                                            5c</span></strong></a>
                            </li>
                        </ul>
                        <br class="clear">
                    </div>

                </div>

                <br class="clearfix">

            </div>

        </div><!-- id body -->
    </div><!-- id outer -->
</div>


<?php
          
              return ob_get_clean();
             }
  

  function KOL_plugin_huawei_carteleria()
           {    
          ?>
<a class="no-print" href="https://kolaccesorios.com/menu-carteleria/">
    <img src="https://kolaccesorios.com/wp-content/uploads/2022/05/menu-2.png"
        style="width: 50px;position: absolute;left: 20px;top: 250px;z-index: 999999;">
</a>

<div class="explicacion no-print" class='explicacion'>
    <ul>
        <li>
            Seleccionar el estilo de la carteleria apropiada para el local.
        </li>
        <li>
            Duplicar o eliminar los elemento segun la necesidad del local.
        </li>
        <li>
            Presionar ctl + p y guardar como pdf (sin margenes).
        </li>
        <li>
            Enviar el PDF a redes y la carteleria sera entregada con el pedido.
        </li>
        <li>
            <strong>NO SE GUARDAN LOS CAMBIOS UNA VEZ REFRESCADA LA PAGINA</strong>
        </li>
    </ul>
</div>

<button type="button" onclick="opcion0()" class="no-print">Diseño</button>
<button type="button" onclick="opcion1()" class="no-print">Diseño 2</button>
<button type="button" onclick="opcion2()" class="no-print">Diseño 3</button>
<button type="button" onclick="opcion3()" class="no-print">Diseño 4</button>
<button type="button" onclick="opcionglassplano()" style="color: green;" class="no-print">Glass Plano</button>
<button type="button" onclick="opcionglasscomp()" style="color: #c378f4;" class="no-print">Glass Completo</button>

<div id="wrapper" class="l-container opcion0">
    <div id="outer" class="row">

        <div id="body" class="clearfix">
            <div class="main right main-maker l-box col">
                <div id="review-body" class="section-body">
                    <div class="makers">
                        <ul>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p_smart_2021-10475.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p-smart-2021.jpg"
                                        title="Huawei P smart 2021 Android smartphone. Announced Sep 2020. Features 6.67″  display, Kirin 710A chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>P
                                            smart 2021</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p_smart_s-10292.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-enjoy-10s.jpg"
                                        title="Huawei P Smart S Android smartphone. Announced Jun 2020. Features 6.3″  display, Kirin 710F chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>P
                                            Smart S</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p_smart_2020-10212.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p-smart-2020-.jpg"
                                        title="Huawei P smart 2020 Android smartphone. Announced Apr 2020. Features 6.21″  display, Kirin 710 chipset, 3400 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>P
                                            smart 2020</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p_smart_2019-9409.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p-smart-2019.jpg"
                                        title="Huawei P smart 2019 Android smartphone. Announced Dec 2018. Features 6.21″  display, Kirin 710 chipset, 3400 mAh battery, 64 GB storage, 3 GB RAM."><strong><span>P
                                            smart 2019</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_mate_20_lite-9284.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-mate-20-lite-r1.jpg"
                                        title="Huawei Mate 20 lite Android smartphone. Announced Aug 2018. Features 6.3″  display, Kirin 710 chipset, Dual: 20 MP (f/1.8, PDAF) + 2 MP primary camera, Dual: 24 MP + 2 MP front camera, 3750 mAh battery, 64 GB storage, 6 GB RAM."><strong><span>Mate
                                            20 lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p20-9107.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p20-.jpg"
                                        title="Huawei P20 Android smartphone. Announced Mar 2018. Features 5.8″  display, Kirin 970 chipset, 3400 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>P20</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p20_lite-9098.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p20-lite-.jpg"
                                        title="Huawei P20 lite Android smartphone. Announced Mar 2018. Features 5.84″  display, Kirin 659 chipset, 3000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>P20
                                            lite</span></strong></a>
                            </li>s
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p_smart-8961.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p-smart-.jpg"
                                        title="Huawei P smart Android smartphone. Announced Dec 2017. Features 5.65″  display, Kirin 659 chipset, Dual: 13 MP (AF) + 2 MP primary camera, 8 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>P
                                        </span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_mate_10-8877.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-mate10-.jpg"
                                        title="Huawei Mate 10 Android smartphone. Announced Oct 2017. Features 5.9″  display, Kirin 970 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass (unspecified version)."><strong><span>Mate
                                            10</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_mate_10_lite-8857.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-mate-10-lite.jpg"
                                        title="Huawei Mate 10 Lite Android smartphone. Announced Oct 2017. Features 5.9″  display, Kirin 659 chipset, Dual: 16 MP (f/2.2, 27mm, PDAF) + 2 MP primary camera, Dual: 13 MP (f/2.0, 26mm) + 2 MP front camera, 3340 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Mate
                                            10 Lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p10_plus-8515.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p10-plus-r1.jpg"
                                        title="Huawei P10 Plus Android smartphone. Announced Feb 2017. Features 5.5″  display, Kirin 960 chipset, Dual: 12 MP (f/1.8, 28mm, OIS) + 20 MP primary camera, 8 MP front camera, 3750 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>P10
                                            Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p10-8514.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p10-.jpg"
                                        title="Huawei P10 Android smartphone. Announced Feb 2017. Features 5.1″  display, Kirin 960 chipset, Dual: 12 MP (f/2.2, 28mm, OIS) + 20 MP primary camera, 8 MP front camera, 3200 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 5."><strong><span>P10</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p10_lite-8598.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p10-lite.jpg"
                                        title="Huawei P10 Lite Android smartphone. Announced Feb 2017. Features 5.2″  display, Kirin 658 chipset, 12 MP primary camera, 8 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>P10
                                            Lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_mate_9-8073.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-mate-9.jpg"
                                        title="Huawei Mate 9 Android smartphone. Announced Nov 2016. Features 5.9″  display, Kirin 960 chipset, Dual: 12 MP (f/2.2, 27mm, 1/2.9″, 1.25µm) + 20 MP primary camera, 8 MP front camera, 4000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Mate
                                            9</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p9_lite-7983.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p9-lite-r1.jpg"
                                        title="Huawei P9 lite Android smartphone. Announced Apr 2016. Features 5.2″  display, Kirin 650 chipset, 13 MP primary camera, 8 MP front camera, 3000 mAh battery, 16 GB storage, 3 GB RAM."><strong><span>P9
                                            lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p9_plus-7745.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p9-plus.jpg"
                                        title="Huawei P9 Plus Android smartphone. Announced Apr 2016. Features 5.5″  display, Kirin 955 chipset, Dual: 12 MP primary camera, 8 MP front camera, 3400 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>P9
                                            Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="huawei_p8lite-7201.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/huawei-p8-lite1.jpg"
                                        title="Huawei P8lite Android smartphone. Announced Apr 2015. Features 5.0″  display, Kirin 620 chipset, 13 MP primary camera, 5 MP front camera, 2200 mAh battery, 16 GB storage, 2 GB RAM, Corning Gorilla Glass 3."><strong><span>P8lite</span></strong></a>
                            </li>
                        </ul>
                        <br class="clear">
                    </div>

                </div>

                <br class="clearfix">

            </div>

        </div><!-- id body -->
    </div><!-- id outer -->
</div>



<?php
          
              return ob_get_clean();
             }

function KOL_plugin_lg_carteleria()
           {    
          ?>
<a class="no-print" href="https://kolaccesorios.com/menu-carteleria/">
    <img src="https://kolaccesorios.com/wp-content/uploads/2022/05/menu-2.png"
        style="width: 50px;position: absolute;left: 20px;top: 250px;z-index: 999999;">
</a>

<div class="explicacion no-print" class='explicacion'>
    <ul>
        <li>
            Seleccionar el estilo de la carteleria apropiada para el local.
        </li>
        <li>
            Duplicar o eliminar los elemento segun la necesidad del local.
        </li>
        <li>
            Presionar ctl + p y guardar como pdf (sin margenes).
        </li>
        <li>
            Enviar el PDF a redes y la carteleria sera entregada con el pedido.
        </li>
        <li>
            <strong>NO SE GUARDAN LOS CAMBIOS UNA VEZ REFRESCADA LA PAGINA</strong>
        </li>
    </ul>
</div>

<button type="button" onclick="opcion0()" class="no-print">Diseño</button>
<button type="button" onclick="opcion1()" class="no-print">Diseño 2</button>
<button type="button" onclick="opcion2()" class="no-print">Diseño 3</button>
<button type="button" onclick="opcion3()" class="no-print">Diseño 4</button>
<button type="button" onclick="opcionglassplano()" style="color: green;" class="no-print">Glass Plano</button>
<button type="button" onclick="opcionglasscomp()" style="color: #c378f4;" class="no-print">Glass Completo</button>

<div id="wrapper" class="l-container opcion0">
    <div id="outer" class="row">

        <div id="body" class="clearfix">
            <div class="main right main-maker l-box col">
                <div id="review-body" class="section-body">
                    <div class="makers">
                        <ul>
                        <li><div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_ultra_tab-11751.php"><img 
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/lg_ultratab.jpg
            title="LG Ultra Tab Android tablet. Announced Aug 2022. Features 10.35&Prime;  display, Snapdragon 680 4G chipset, 7040 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Ultra
                Tab</span></strong></a></li>
<li><div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_w41_pro-10742.php"><img 
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/lg-w41-pro.jpg
            title="LG W41 Pro Android smartphone. Announced Feb 2021. Features 6.55&Prime;  display, MT6765G Helio G35 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>W41
                Pro</span></strong></a></li>
<li><div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_w41+-10743.php"><img 
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/lg-w41-plus.jpg
            title="LG W41+ Android smartphone. Announced Feb 2021. Features 6.55&Prime;  display, MT6765G Helio G35 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>W41+</span></strong></a>
</li>
<li><div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_w41-10744.php"><img 
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/lg-w41.jpg
            title="LG W41 Android smartphone. Announced Feb 2021. Features 6.55&Prime;  display, MT6765G Helio G35 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>W41</span></strong></a>
</li>
<li><div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_w31+-10585.php"><img 
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/lg-w31-plus.jpg
            title="LG W31+ Android smartphone. Announced Nov 2020. Features 6.52&Prime;  display, MT6762 Helio P22 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>W31+</span></strong></a>
</li>
<li><div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_w31-10586.php"><img 
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/lg-w31.jpg
            title="LG W31 Android smartphone. Announced Nov 2020. Features 6.52&Prime;  display, MT6762 Helio P22 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>W31</span></strong></a>
</li>
<li><div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_w11-10587.php"><img 
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/lg-w11.jpg
            title="LG W11 Android smartphone. Announced Nov 2020. Features 6.52&Prime;  display, MT6762 Helio P22 chipset, 4000 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>W11</span></strong></a>
</li>
<li><div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k92_5g-10564.php"><img 
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src=https://fdn2.gsmarena.com/vv/bigpic/lg-k92-5g.jpg
            title="LG K92 5G Android smartphone. Announced Sep 2020. Features 6.7&Prime;  display, Snapdragon 690 5G chipset, 4000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>K92
                5G</span></strong></a></li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k62-10464.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k62.jpg"
                                        title="LG K62 Android smartphone. Announced Sep 2020. Features 6.6″  display, MT6765 Helio P35 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM, MIL-STD-810G compliant."><strong><span>LG K62</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_q52-10558.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-q52.jpg"
                                        title="LG Q52 Android smartphone. Announced Sep 2020. Features 6.6″  display, MT6765 Helio P35 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM, MIL-STD-810G compliant."><strong><span>LG Q52</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k52-10463.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k52.jpg"
                                        title="LG K52 Android smartphone. Announced Sep 2020. Features 6.6″  display, MT6765 Helio P35 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM, MIL-STD-810G compliant."><strong><span>LG K52</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k42-10459.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k42.jpg"
                                        title="LG K42 Android smartphone. Announced Sep 2020. Features 6.6″  display, MT6762 Helio P22 chipset, 4000 mAh battery, 64 GB storage, 3 GB RAM, MIL-STD-810G compliant."><strong><span>LG K42</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k71-10458.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-stylo6.jpg"
                                        title="LG K71 Android smartphone. Announced Sep 2020. Features 6.8″  display, MT6765 Helio P35 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>LG K71</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k22-10597.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k22.jpg"
                                        title="LG K22 Android smartphone. Announced Sep 2020. Features 6.2″  display, Snapdragon 215 chipset, 3000 mAh battery, 64 GB storage, 3 GB RAM, MIL-STD-810G compliant."><strong><span>LG K22</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_q92_5g-10368.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-q92.jpg"
                                        title="LG Q92 5G Android smartphone. Announced Aug 2020. Features 6.67″  display, Snapdragon 765G 5G chipset, 4000 mAh battery, 128 GB storage, 6 GB RAM, MIL-STD-810G compliant."><strong><span>LG Q92
                                            5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_q31-10451.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-q31.jpg"
                                        title="LG Q31 Android smartphone. Announced Sep 2020. Features 5.7″  display, MT6762 Helio P22 chipset, 3000 mAh battery, 32 GB storage, 3 GB RAM, MIL-STD-810G compliant."><strong><span>LG Q31</span></strong></a>
                            </li>
                            <li>LG 
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k31-10382.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k31.jpg"
                                        title="LG K31 Android smartphone. Announced Aug 2020. Features 5.7″  display, MT6762 Helio P22 chipset, 3000 mAh battery, 32 GB storage, 2 GB RAM, MIL-STD-810G compliant."><strong><span>LG K31</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_q61-10257.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-q61.jpg"
                                        title="LG Q61 Android smartphone. Announced May 2020. Features 6.53″  display, MT6765 Helio P35 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM, MIL-STD-810G compliant, Scratch-resistant glass."><strong><span>LG Q61</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_velvet-10340.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-velvet-4g.jpg"
                                        title="LG Velvet Android smartphone. Announced Jul 2020. Features 6.8″  display, Snapdragon 845 chipset, 4300 mAh battery, 128 GB storage, 6 GB RAM, MIL-STD-810G compliant."><strong><span>LG Velvet</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_velvet_5g-10209.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-velvet-.jpg"
                                        title="LG Velvet 5G Android smartphone. Announced May 2020. Features 6.8″  display, Snapdragon 765G 5G chipset, 4300 mAh battery, 128 GB storage, 8 GB RAM, MIL-STD-810G compliant."><strong><span>LG Velvet
                                            5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k61-10088.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k61-new.jpg"
                                        title="LG K61 Android smartphone. Announced Feb 2020. Features 6.53″  display, MT6765 Helio P35 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM, MIL-STD-810G compliant, Scratch-resistant glass."><strong><span>LG K61</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k51s-10087.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k51s.jpg"
                                        title="LG K51S Android smartphone. Announced Feb 2020. Features 6.55″  display, MT6765 Helio P35 chipset, 4000 mAh battery, 64 GB storage, 3 GB RAM, MIL-STD-810G compliant, Scratch-resistant glass."><strong><span>LG K51S</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k41s-10086.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k41ss.jpg"
                                        title="LG K41S Android smartphone. Announced Feb 2020. Features 6.55″  display, MT6762 Helio P22 chipset, 4000 mAh battery, 32 GB storage, 3 GB RAM, MIL-STD-810G compliant, Scratch-resistant glass."><strong><span>LG K41S</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k20_(2019)-9828.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k20-2019.jpg"
                                        title="LG K20 (2019) Android smartphone. Announced Aug 2019. Features 5.45″  display, MT6739 chipset, 3000 mAh battery, 16 GB storage, 1000 MB RAM, MIL-STD-810G compliant."><strong><span>LG K20
                                            (2019)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k40s-9805.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/kg-k40s-.jpg"
                                        title="LG K40S Android smartphone. Announced Aug 2019. Features 6.1″  display, MT6762 Helio P22 chipset, 3500 mAh battery, 32 GB storage, 3 GB RAM, MIL-STD-810G compliant."><strong><span>LG K40S</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k50s-9804.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k50s-.jpg"
                                        title="LG K50S Android smartphone. Announced Aug 2019. Features 6.5″  display, MT6762 Helio P22 chipset, 4000 mAh battery, 32 GB storage, 3 GB RAM, MIL-STD-810G compliant."><strong><span>LG K50S</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_q60-9585.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-q60-.jpg"
                                        title="LG Q60 Android smartphone. Announced Feb 2019. Features 6.26″  display, MT6762 Helio P22 chipset, 3500 mAh battery, 64 GB storage, 3 GB RAM, MIL-STD-810G compliant."><strong><span>LG Q60</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k50-9586.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k50-.jpg"
                                        title="LG K50 Android smartphone. Announced Feb 2019. Features 6.26″  display, MT6762 Helio P22 chipset, 3500 mAh battery, 32 GB storage, 3 GB RAM, MIL-STD-810G compliant."><strong><span>LG K50</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k40-9587.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k40-.jpg"
                                        title="LG K40 Android smartphone. Announced Feb 2019. Features 5.7″  display, MT6762 Helio P22 chipset, 3000 mAh battery, 32 GB storage, 3 GB RAM, MIL-STD-810G compliant."><strong><span>LG K40</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k11_plus-9278.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k11-plus.jpg"
                                        title="LG K11 Plus Android smartphone. Announced Jul 2018. Features 5.3″  display, MT6750 chipset, 13 MP primary camera, 5 MP front camera, 3000 mAh battery, 32 GB storage, 3 GB RAM, MIL-STD-810G compliant."><strong><span>LG K11
                                            Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k10_(2018)-9074.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k10-2018-.jpg"
                                        title="LG K10 (2018) Android smartphone. Announced Feb 2018. Features 5.3″  display, MT6750 chipset, 13 MP or 8 MP primary camera, 8 MP or 5 MP front camera, 3000 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>LG K10
                                            (2018)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k8_(2018)-9073.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k8-2018-.jpg"
                                        title="LG K8 (2018) Android smartphone. Announced Feb 2018. Features 5.0″  display, Snapdragon 210 chipset, 8 MP primary camera, 5 MP front camera, 2500 mAh battery, 32 GB storage, 2 GB RAM, Corning Gorilla Glass 3."><strong><span>LG K8
                                            (2018)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k10_(2017)-8491.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k10-2017.jpg"
                                        title="LG K10 (2017) Android smartphone. Announced Dec 2016. Features 5.3″  display, MT6750 chipset, 13 MP primary camera, 5 MP front camera, 2800 mAh battery, 32 GB storage, 2 GB RAM."><strong><span>LG K10
                                            (2017)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k8_(2017)-8490.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k8-2017.jpg"
                                        title="LG K8 (2017) Android smartphone. Announced Dec 2016. Features 5.0″  display, Snapdragon 425 chipset, 13 MP primary camera, 5 MP front camera, 2500 mAh battery, 16 GB storage, 1.5 GB RAM, Corning Gorilla Glass 3."><strong><span>LG K8
                                            (2017)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k10-7849.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k10.jpg"
                                        title="LG K10 Android smartphone. Announced Jan 2016. Features 5.3″  display, Snapdragon 410 chipset, 13 MP primary camera, 5 MP (f/2.4) or 8 MP front camera, 2300 mAh battery, 16 GB storage, 1.5 GB RAM, Corning Gorilla Glass 3."><strong><span>LG K10</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k10-7849.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://www.lg.com/ar/images/celulares/md06056636/gallery/Desktop2.jpg"
                                        title="LG K10 Android smartphone. Announced Jan 2016. Features 5.3″  display, Snapdragon 410 chipset, 13 MP primary camera, 5 MP (f/2.4) or 8 MP front camera, 2300 mAh battery, 16 GB storage, 1.5 GB RAM, Corning Gorilla Glass 3."><strong><span>LG K9</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k10-7849.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://http2.mlstatic.com/D_NQ_NP_754156-MLA41326540295_042020-O.jpg"
                                        title="LG K10 Android smartphone. Announced Jan 2016. Features 5.3″  display, Snapdragon 410 chipset, 13 MP primary camera, 5 MP (f/2.4) or 8 MP front camera, 2300 mAh battery, 16 GB storage, 1.5 GB RAM, Corning Gorilla Glass 3."><strong><span>LG K12 Prime</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k10-7849.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-k4-2017.jpg"
                                        title="LG K10 Android smartphone. Announced Jan 2016. Features 5.3″  display, Snapdragon 410 chipset, 13 MP primary camera, 5 MP (f/2.4) or 8 MP front camera, 2300 mAh battery, 16 GB storage, 1.5 GB RAM, Corning Gorilla Glass 3."><strong><span>LG K4 2017</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k10-7849.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-x-power3.jpg
                                        title="LG K10 Android smartphone. Announced Jan 2016. Features 5.3″  display, Snapdragon 410 chipset, 13 MP primary camera, 5 MP (f/2.4) or 8 MP front camera, 2300 mAh battery, 16 GB storage, 1.5 GB RAM, Corning Gorilla Glass 3."><strong><span>LG X Power</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="lg_k10-7849.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-q6.jpg"
                                        title="LG K10 Android smartphone. Announced Jan 2016. Features 5.3″  display, Snapdragon 410 chipset, 13 MP primary camera, 5 MP (f/2.4) or 8 MP front camera, 2300 mAh battery, 16 GB storage, 1.5 GB RAM, Corning Gorilla Glass 3."><strong><span>LG Q6</span></strong></a>
                            </li>
                        </ul>
                        <br class="clear">
                    </div>

                </div>

                <br class="clearfix">

            </div>

        </div><!-- id body -->
    </div><!-- id outer -->
</div>


<?php
          
              return ob_get_clean();
             }
  
function KOL_plugin_nokia_carteleria()
             {    
            ?>
<a class="no-print" href="https://kolaccesorios.com/menu-carteleria/">
    <img src="https://kolaccesorios.com/wp-content/uploads/2022/05/menu-2.png"
        style="width: 50px;position: absolute;left: 20px;top: 250px;z-index: 999999;">
</a>

<div class="explicacion no-print" class='explicacion'>
    <ul>
        <li>
            Seleccionar el estilo de la carteleria apropiada para el local.
        </li>
        <li>
            Duplicar o eliminar los elemento segun la necesidad del local.
        </li>
        <li>
            Presionar ctl + p y guardar como pdf (Con Margen).
        </li>
        <li>
            Enviar el PDF a redes y la carteleria sera entregada con el pedido.
        </li>
        <li>
            <strong>NO SE GUARDAN LOS CAMBIOS UNA VEZ REFRESCADA LA PAGINA</strong>
        </li>
    </ul>
</div>

<button type="button" onclick="opcion0()" class="no-print">Diseño</button>
<button type="button" onclick="opcion1()" class="no-print">Diseño 2</button>
<button type="button" onclick="opcion2()" class="no-print">Diseño 3</button>
<button type="button" onclick="opcion3()" class="no-print">Diseño 4</button>
<button type="button" onclick="opcionglassplano()" style="color: green;" class="no-print">Glass Plano</button>
<button type="button" onclick="opcionglasscomp()" style="color: #c378f4;" class="no-print">Glass Completo</button>

<div id="wrapper" class="l-container opcion0">
    <div id="outer" class="row">

        <div id="body" class="clearfix">
            <div class="main right main-maker l-box col">
                <div id="review-body" class="section-body">
                    <div class="makers">
                        <ul>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="nokia_3_4-10404.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/nokia-34.jpg"
                                        title="Nokia 3.4 Android smartphone. Announced Sep 2020. Features 6.39″  display, Snapdragon 460 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>3.4</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="nokia_2_4-10460.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/nokia-24.jpg"
                                        title="Nokia 2.4 Android smartphone. Announced Sep 2020. Features 6.5″  display, MT6762 Helio P22 chipset, 4500 mAh battery, 64 GB storage, 3 GB RAM."><strong><span>2.4</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="nokia_1_3-10143.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/nokia-13.jpg"
                                        title="Nokia 1.3 Android smartphone. Announced Mar 2020. Features 5.71″  display, Snapdragon 215 chipset, 3000 mAh battery, 16 GB storage, 1000 MB RAM."><strong><span>1.3</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="nokia_3_1_plus-9364.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/nokia-31-plus-.jpg"
                                        title="Nokia 3.1 Plus Android smartphone. Announced Oct 2018. Features 6.0″  display, MT6762 Helio P22 chipset, 3500 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>3.1
                                            Plus</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="nokia_7_1-9354.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/nokia-71-plus.jpg"
                                        title="Nokia 7.1 Android smartphone. Announced Oct 2018. Features 5.84″  display, Snapdragon 636 chipset, 3060 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>7.1</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="nokia_5_1_plus_(nokia_x5)-9246.php"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/nokia-x5-51-plus.jpg"
                                        title="Nokia 5.1 Plus (Nokia X5) Android smartphone. Announced Jul 2018. Features 5.86″  display, MT6771 Helio P60 chipset, Dual: 13 MP (f/2.0, PDAF) + 5 MP primary camera, 8 MP front camera, 3060 mAh battery, 64 GB storage, 6 GB RAM."><strong><span>5.1
                                            Plus (Nokia X5)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="nokia_5_1-9214.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/nokia-51.jpg"
                                        title="Nokia 5.1 Android smartphone. Announced May 2018. Features 5.5″  display, MediaTek Helio P18 chipset, 16 MP primary camera, 8 MP front camera, 2970 mAh battery, 32 GB storage, 3 GB RAM, Corning Gorilla Glass (unspecified version)."><strong><span>5.1</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="nokia_3_1-9215.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/nokia-31.jpg"
                                        title="Nokia 3.1 Android smartphone. Announced May 2018. Features 5.2″  display, MT6750 chipset, 13 MP primary camera, 8 MP front camera, 2990 mAh battery, 32 GB storage, 3 GB RAM, Corning Gorilla Glass 3."><strong><span>3.1</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="nokia_2_1-9216.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/nokia-21-.jpg"
                                        title="Nokia 2.1 Android smartphone. Announced May 2018. Features 5.5″  display, Snapdragon 425 chipset, 8 MP primary camera, 5 MP front camera, 4000 mAh battery, 8 GB storage, 1000 MB RAM, Corning Gorilla Glass 3."><strong><span>2.1</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="nokia_6_1-8972.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/nokia-6-2018.jpg"
                                        title="Nokia 6.1 Android smartphone. Announced Jan 2018. Features 5.5″  display, Snapdragon 630 chipset, 3000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>6.1</span></strong></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- id body -->
    </div><!-- id outer -->
</div>

<?php
            
                return ob_get_clean();
               }
    
               function KOL_plugin_xiaomi_carteleria()
               {    
              ?>
<a class="no-print" href="https://kolaccesorios.com/menu-carteleria/">
    <img src="https://kolaccesorios.com/wp-content/uploads/2022/05/menu-2.png"
        style="width: 50px;position: absolute;left: 20px;top: 250px;z-index: 999999;">
</a>

<div class="explicacion no-print" class='explicacion'>
    <ul>
        <li>
            Seleccionar el estilo de la carteleria apropiada para el local.
        </li>
        <li>
            Duplicar o eliminar los elemento segun la necesidad del local.
        </li>
        <li>
            Presionar ctl + p y guardar como pdf (sin margenes).
        </li>
        <li>
            Enviar el PDF a redes y la carteleria sera entregada con el pedido.
        </li>
        <li>
            <strong>NO SE GUARDAN LOS CAMBIOS UNA VEZ REFRESCADA LA PAGINA</strong>
        </li>
    </ul>
</div>

<button type="button" onclick="opcion0()" class="no-print">Diseño</button>
<button type="button" onclick="opcion1()" class="no-print">Diseño 2</button>
<button type="button" onclick="opcion2()" class="no-print">Diseño 3</button>
<button type="button" onclick="opcion3()" class="no-print">Diseño 4</button>
<button type="button" onclick="opcionglassplano()" style="color: green;" class="no-print">Glass Plano</button>
<button type="button" onclick="opcionglasscomp()" style="color: #c378f4;" class="no-print">Glass Completo</button>

<div id="wrapper" class="l-container opcion0">
    <div id="outer" class="row">

        <div id="body" class="clearfix">
            <div class="main right main-maker l-box col">
                <div id="review-body" class="section-body">
                    <div class="makers">
                        <ul>
                        <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_13c-12689.php"><img
                                        src='https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png' title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-13c.jpg" 
                                        title="Xiaomi Redmi 13C Android smartphone. Announced Nov 2023. Features 6.74″  display, MT6769Z Helio G85 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass."><strong>
<span>
                                            Redmi 13C</span></strong></a>
                            </li>
                        <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_13_4g-12750.php"><img
                                        src='https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png' title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-13-4g.jpg" 
                                        title="Xiaomi Redmi Note 13 4G Android smartphone. Announced Jan 2024. Features 6.67″  display, Snapdragon 685 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>
                                            Redmi Note 13 4G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_13c-12689.php"><img
                                        src='https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png' title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-13c.jpg" 
                                        title="Xiaomi Redmi 13C Android smartphone. Announced Nov 2023. Features 6.74″  display, MT6769Z Helio G85 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass."><strong><span>
                                            Redmi 13C</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11t_pro+-11549.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11t-pro-plus.jpg"
                                        title="Xiaomi Redmi Note 11T Pro+ Android smartphone. Announced May 2022. Features 6.6″  display, MediaTek Dimensity 8100 chipset, 4400 mAh battery, 512 GB storage, 8 GB RAM."><strong><span>Redmi
                                            Note 11T Pro+</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11t_pro-11550.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11t-pro.jpg"
                                        title="Xiaomi Redmi Note 11T Pro Android smartphone. Announced May 2022. Features 6.6″  display, MediaTek Dimensity 8100 chipset, 5080 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Redmi
                                            Note 11T Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11se-11551.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11se.jpg"
                                        title="Xiaomi Redmi Note 11SE Android smartphone. Announced May 2022. Features 6.5″  display, MediaTek MT6833 Dimensity 700 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM."><strong><span>Redmi
                                            Note 11SE</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_10_prime_2022-11519.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-10-.jpg"
                                        title="Xiaomi Redmi 10 Prime 2022 Android smartphone. Announced May 2022. Features 6.5″  display, MediaTek Helio G88 chipset, 6000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            10 Prime 2022</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_m4_5g-11427.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m4-5g.jpg"
                                        title="Xiaomi Poco M4 5G Android smartphone. Announced Apr 2022. Features 6.58″  display, MediaTek MT6833 Dimensity 700 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Poco
                                            M4 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_f4_gt-11479.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-f4-gt.jpg"
                                        title="Xiaomi Poco F4 GT Android smartphone. Announced Apr 2022. Features 6.67″  display, Snapdragon 8 Gen 1 chipset, 4700 mAh battery, 256 GB storage, 12 GB RAM, Corning Gorilla Glass Victus."><strong><span>Poco
                                            F4 GT</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_10a-11449.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-10a.jpg"
                                        title="Xiaomi Redmi 10A Android smartphone. Announced Mar 2022. Features 6.53″  display, MediaTek MT6762G Helio G25 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Redmi
                                            10A</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11s_5g-11419.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11s-5g.jpg"
                                        title="Xiaomi Redmi Note 11S 5G Android smartphone. Announced Mar 2022. Features 6.6″  display, MediaTek MT6833P Dimensity 810 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            Note 11S 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_10_5g-11425.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11e.jpg"
                                        title="Xiaomi Redmi 10 5G Android smartphone. Announced Mar 2022. Features 6.58″  display, MediaTek MT6833 Dimensity 700 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            10 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11_pro+_5g-11180.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note11-pro-plus-new.jpg"
                                        title="Xiaomi Redmi Note 11 Pro+ 5G Android smartphone. Announced Oct 2021. Features 6.67″  display, MediaTek Dimensity 920 chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 11 Pro+ 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_10c-11418.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-10c.jpg"
                                        title="Xiaomi Redmi 10C Android smartphone. Announced Mar 2022. Features 6.71″  display, Snapdragon 680 4G chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM, Corning Gorilla Glass."><strong><span>Redmi
                                            10C</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11e_pro-11395.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11e-pro.jpg"
                                        title="Xiaomi Redmi Note 11E Pro Android smartphone. Announced Mar 2022. Features 6.67″  display, Snapdragon 695 5G chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM."><strong><span>Redmi
                                            Note 11E Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11e-11396.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11e.jpg"
                                        title="Xiaomi Redmi Note 11E Android smartphone. Announced Mar 2022. Features 6.58″  display, MediaTek MT6833 Dimensity 700 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Redmi
                                            Note 11E</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_x4_pro_5g-11371.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-x4-pro.jpg"
                                        title="Xiaomi Poco X4 Pro 5G Android smartphone. Announced Feb 2022. Features 6.67″  display, Snapdragon 695 5G chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Poco
                                            X4 Pro 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_m4_pro-11388.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m4-pro.jpg"
                                        title="Xiaomi Poco M4 Pro Android smartphone. Announced Feb 2022. Features 6.43″  display, Helio G96 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Poco
                                            M4 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_10_2022-11357.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11-4g.jpg"
                                        title="Xiaomi Redmi 10 2022 Android smartphone. Announced Feb 2022. Features 6.5″  display, MediaTek Helio G88 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            10 2022</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11_pro_5g-11333.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11-pro-5g-global.jpg"
                                        title="Xiaomi Redmi Note 11 Pro 5G Android smartphone. Announced Jan 2022. Features 6.67″  display, Snapdragon 695 5G chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 11 Pro 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11_pro-11334.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11-pro-global.jpg"
                                        title="Xiaomi Redmi Note 11 Pro Android smartphone. Announced Jan 2022. Features 6.67″  display, Helio G96 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 11 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11s-11335.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11s-global.jpg"
                                        title="Xiaomi Redmi Note 11S Android smartphone. Announced Jan 2022. Features 6.43″  display, Helio G96 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            Note 11S</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11-11336.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11-global.jpg"
                                        title="Xiaomi Redmi Note 11 Android smartphone. Announced Jan 2022. Features 6.43″  display, Snapdragon 680 4G chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            Note 11</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_11i_hypercharge_5g-11186.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-11i-hypercharge.jpg"
                                        title="Xiaomi 11i HyperCharge 5G Android smartphone. Announced Jan 2022. Features 6.67″  display, MediaTek Dimensity 920 chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>11i
                                            HyperCharge 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_11i-11185.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-11i.jpg"
                                        title="Xiaomi 11i Android smartphone. Announced Jan 2022. Features 6.67″  display, MediaTek Dimensity 920 chipset, 5160 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>11i</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11t_5g-11217.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11t-5g.jpg"
                                        title="Xiaomi Redmi Note 11T 5G Android smartphone. Announced Nov 2021. Features 6.6″  display, MediaTek MT6833P Dimensity 810 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            Note 11T 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_11_4g-11241.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11-4g.jpg"
                                        title="Xiaomi Redmi Note 11 4G Android smartphone. Announced Nov 2021. Features 6.5″  display, MediaTek Helio G88 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Redmi
                                            Note 11 4G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_m4_pro_5g-11193.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m4-pro-5g.jpg"
                                        title="Xiaomi Poco M4 Pro 5G Android smartphone. Announced Nov 2021. Features 6.6″  display, MediaTek MT6833P Dimensity 810 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Poco
                                            M4 Pro 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_10_lite-11137.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-10-lite.jpg"
                                        title="Xiaomi Redmi Note 10 Lite Android smartphone. Announced Oct 2021. Features 6.67″  display, Snapdragon 720G chipset, 5020 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 10 Lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_9i_sport-11129.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-9i-sport.jpg"
                                        title="Xiaomi Redmi 9i Sport Android smartphone. Announced Sep 2021. Features 6.53″  display, MediaTek MT6762G Helio G25 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Redmi
                                            9i Sport</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_9a_sport-11128.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-9a-sport.jpg"
                                        title="Xiaomi Redmi 9A Sport Android smartphone. Announced Sep 2021. Features 6.53″  display, MediaTek MT6762G Helio G25 chipset, 5000 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>Redmi
                                            9A Sport</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_9_activ-11127.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-9-activ.jpg"
                                        title="Xiaomi Redmi 9 Activ Android smartphone. Announced Sep 2021. Features 6.53″  display, MediaTek MT6765G Helio G35 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Redmi
                                            9 Activ</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_11t_pro-11100.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-11t-pro.jpg"
                                        title="Xiaomi 11T Pro Android smartphone. Announced Sep 2021. Features 6.67″  display, Snapdragon 888 5G chipset, 5000 mAh battery, 256 GB storage, 12 GB RAM, Corning Gorilla Glass Victus."><strong><span>11T
                                            Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_11t-11099.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-11t.jpg"
                                        title="Xiaomi 11T Android smartphone. Announced Sep 2021. Features 6.67″  display, MediaTek MT6893 Dimensity 1200 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus."><strong><span>11T</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_11_lite_5g_ne-11101.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-11-lite-5g-ne.jpg"
                                        title="Xiaomi 11 Lite 5G NE Android smartphone. Announced Sep 2021. Features 6.55″  display, Snapdragon 778G 5G chipset, 4250 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>11
                                            Lite 5G NE</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_10_prime-11079.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-10-.jpg"
                                        title="Xiaomi Redmi 10 Prime Android smartphone. Announced Sep 2021. Features 6.5″  display, MediaTek Helio G88 chipset, 6000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            10 Prime</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_10-11060.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-10-.jpg"
                                        title="Xiaomi Redmi 10 Android smartphone. Announced Aug 2021. Features 6.5″  display, MediaTek Helio G88 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            10</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mix_4-11040.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-mix-4.jpg"
                                        title="Xiaomi Mix 4 Android smartphone. Announced Aug 2021. Features 6.67″  display, Snapdragon 888+ 5G chipset, 4500 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass Victus."><strong><span>Mix
                                            4</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_x3_gt-10949.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-10-pro-china-new.jpg"
                                        title="Xiaomi Poco X3 GT Android smartphone. Announced Jul 2021. Features 6.6″  display, MediaTek MT6891Z Dimensity 1100 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus."><strong><span>Poco
                                            X3 GT</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_f3_gt-10886.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-f3-gt.jpg"
                                        title="Xiaomi Poco F3 GT Android smartphone. Announced Jul 2021. Features 6.67″  display, MediaTek MT6893 Dimensity 1200 chipset, 5065 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Poco
                                            F3 GT</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_10t_5g-11008.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-10t-5g.jpg"
                                        title="Xiaomi Redmi Note 10T 5G Android smartphone. Announced Jul 2021. Features 6.5″  display, MediaTek MT6833 Dimensity 700 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            Note 10T 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_8_2021-10919.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note8-2021.jpg"
                                        title="Xiaomi Redmi Note 8 2021 Android smartphone. Announced May 2021. Features 6.3″  display, MediaTek Helio G85 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 8 2021</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_m3_pro_5g-10857.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m3-pro-5g.jpg"
                                        title="Xiaomi Poco M3 Pro 5G Android smartphone. Announced May 2021. Features 6.5″  display, MediaTek MT6833 Dimensity 700 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Poco
                                            M3 Pro 5G</span></strong></a>
                            </li>

                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_11x_pro-10776.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi11x-pro.jpg"
                                        title="Xiaomi Mi 11X Pro Android smartphone. Announced Apr 2021. Features 6.67″  display, Snapdragon 888 5G chipset, 4520 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            11X Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_11x-10775.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi11x.jpg"
                                        title="Xiaomi Mi 11X Android smartphone. Announced Apr 2021. Features 6.67″  display, Snapdragon 870 5G chipset, 4520 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            11X</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_mix_fold-10817.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-mix-fold.jpg"
                                        title="Xiaomi Mi Mix Fold Android smartphone. Announced Mar 2021. Features 8.01″  display, Snapdragon 888 5G chipset, 5020 mAh battery, 512 GB storage, 16 GB RAM."><strong><span>Mi
                                            Mix Fold</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_11_ultra-10737.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi11-ultra-5g-k1.jpg"
                                        title="Xiaomi Mi 11 Ultra Android smartphone. Announced Mar 2021. Features 6.81″  display, Snapdragon 888 5G chipset, 5000 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass Victus."><strong><span>Mi
                                            11 Ultra</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_11_pro-10816.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-11-pro-5g.jpg"
                                        title="Xiaomi Mi 11 Pro Android smartphone. Announced Mar 2021. Features 6.81″  display, Snapdragon 888 5G chipset, 5000 mAh battery, 256 GB storage, 12 GB RAM, Corning Gorilla Glass Victus."><strong><span>Mi
                                            11 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_11i-10777.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-11i-5g.jpg"
                                        title="Xiaomi Mi 11i Android smartphone. Announced Mar 2021. Features 6.67″  display, Snapdragon 888 5G chipset, 4520 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            11i</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_11_lite_5g-10815.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-11-lite-5g.jpg"
                                        title="Xiaomi Mi 11 Lite 5G Android smartphone. Announced Mar 2021. Features 6.55″  display, Snapdragon 780G chipset, 4250 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 6."><strong><span>Mi
                                            11 Lite 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_11_lite-10665.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-11-lite-4g.jpg"
                                        title="Xiaomi Mi 11 Lite Android smartphone. Announced Mar 2021. Features 6.55″  display, Snapdragon 732G chipset, 4250 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            11 Lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_x3_pro-10802.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-x3-pro-.jpg"
                                        title="Xiaomi Poco X3 Pro Android smartphone. Announced Mar 2021. Features 6.67″  display, Snapdragon 860 chipset, 5160 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 6."><strong><span>Poco
                                            X3 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_f3-10758.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-f3.jpg"
                                        title="Xiaomi Poco F3 Android smartphone. Announced Mar 2021. Features 6.67″  display, Snapdragon 870 5G chipset, 4520 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Poco
                                            F3</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_10s-10780.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-10s.jpg"
                                        title="Xiaomi Mi 10S Android smartphone. Announced Mar 2021. Features 6.67″  display, Snapdragon 870 5G chipset, 4780 mAh battery, 256 GB storage, 12 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            10S</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_10_pro-10662.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note10-pro.jpg"
                                        title="Xiaomi Redmi Note 10 Pro Android smartphone. Announced Mar 2021. Features 6.67″  display, Snapdragon 732G chipset, 5020 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 10 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_10_5g-10768.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note10-5g.jpg"
                                        title="Xiaomi Redmi Note 10 5G Android smartphone. Announced Mar 2021. Features 6.5″  display, MediaTek MT6833 Dimensity 700 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            Note 10 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_10s-10769.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note10s.jpg"
                                        title="Xiaomi Redmi Note 10S Android smartphone. Announced Mar 2021. Features 6.43″  display, Helio G95 chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            Note 10S</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_10-10247.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note10--.jpg"
                                        title="Xiaomi Redmi Note 10 Android smartphone. Announced Mar 2021. Features 6.43″  display, Snapdragon 678 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            Note 10</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_10_pro_max-10770.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note10-pro-india.jpg"
                                        title="Xiaomi Redmi Note 10 Pro Max Android smartphone. Announced Mar 2021. Features 6.67″  display, Snapdragon 732G chipset, 5020 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 10 Pro Max</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_9t-10661.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-9t-5g.jpg"
                                        title="Xiaomi Redmi Note 9T Android smartphone. Announced Jan 2021. Features 6.53″  display, MediaTek MT6853 Dimensity 800U chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 9T</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_9t-10670.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-9-power.jpg"
                                        title="Xiaomi Redmi 9T Android smartphone. Announced Jan 2021. Features 6.53″  display, Snapdragon 662 chipset, 6000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            9T</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_10i_5g-10615.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-10i-5g.jpg"
                                        title="Xiaomi Mi 10i 5G Android smartphone. Announced Jan 2021. Features 6.67″  display, Snapdragon 750G 5G chipset, 4820 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            10i 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_11-10656.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi11.jpg"
                                        title="Xiaomi Mi 11 Android smartphone. Announced Dec 2020. Features 6.81″  display, Snapdragon 888 5G chipset, 4600 mAh battery, 256 GB storage, 12 GB RAM, Corning Gorilla Glass Victus."><strong><span>Mi
                                            11</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_9_pro_5g-10582.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note9-pro.jpg"
                                        title="Xiaomi Redmi Note 9 Pro 5G Android smartphone. Announced Nov 2020. Features 6.67″  display, Snapdragon 750G 5G chipset, 4820 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 9 Pro 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_9_4g-10609.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note9-4g.jpg"
                                        title="Xiaomi Redmi Note 9 4G Android smartphone. Announced Nov 2020. Features 6.53″  display, Snapdragon 662 chipset, 6000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            Note 9 4G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_m3-10599.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m3-.jpg"
                                        title="Xiaomi Poco M3 Android smartphone. Announced Nov 2020. Features 6.53″  display, Snapdragon 662 chipset, 6000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Poco
                                            M3</span></strong></a>
                            </li>s
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_10t_pro_5g-10437.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-10t-5g-pro.jpg"
                                        title="Xiaomi Mi 10T Pro 5G Android smartphone. Announced Sep 2020. Features 6.67″  display, Snapdragon 865 5G chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            10T Pro 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_10t_5g-10473.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-10t-5g-.jpg"
                                        title="Xiaomi Mi 10T 5G Android smartphone. Announced Sep 2020. Features 6.67″  display, Snapdragon 865 5G chipset, 5000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            10T 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_10t_lite_5g-10480.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-10t-lite-.jpg"
                                        title="Xiaomi Mi 10T Lite 5G Android smartphone. Announced Sep 2020. Features 6.67″  display, Snapdragon 750G 5G chipset, 4820 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            10T Lite 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_poco_x3-10461.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-x3.jpg"
                                        title="Xiaomi Poco X3 Android smartphone. Announced Sep 2020. Features 6.67″  display, Snapdragon 732G chipset, 6000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Poco
                                            X3</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_9a-10279.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-9a-1.jpg"
                                        title="Xiaomi Redmi 9A Android smartphone. Announced Jun 2020. Features 6.53″  display, MediaTek MT6762G Helio G25 chipset, 5000 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Redmi
                                            9A</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_9c-10278.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-9c-.jpg"
                                        title="Xiaomi Redmi 9C Android smartphone. Announced Jun 2020. Features 6.53″  display, MediaTek MT6765G Helio G35 chipset, 5000 mAh battery, 128 GB storage, 4 GB RAM."><strong><span>Redmi
                                            9C</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_9-10233.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-9.jpg"
                                        title="Xiaomi Redmi 9 Android smartphone. Announced Jun 2020. Features 6.53″  display, MT6769V chipset, 5020 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 3."><strong><span>Redmi
                                            9</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_9_pro-10217.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-9-pro-global-.jpg"
                                        title="Xiaomi Redmi Note 9 Pro Android smartphone. Announced Apr 2020. Features 6.67″  display, Snapdragon 720G chipset, 5020 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 9 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_9-10192.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-9.jpg"
                                        title="Xiaomi Redmi Note 9 Android smartphone. Announced Apr 2020. Features 6.53″  display, MediaTek Helio G85 chipset, 5020 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 9</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_note_10_lite-10183.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-note-10-lite-.jpg"
                                        title="Xiaomi Mi Note 10 Lite Android smartphone. Announced Apr 2020. Features 6.47″  display, Snapdragon 730G chipset, 5260 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            Note 10 Lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_10_youth_5g-10207.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-10-youth-5g-.jpg"
                                        title="Xiaomi Mi 10 Youth 5G Android smartphone. Announced Apr 2020. Features 6.57″  display, Snapdragon 765G 5G chipset, 4160 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            10 Youth 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_10_lite_5g-10159.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi10-lite-5g.jpg"
                                        title="Xiaomi Mi 10 Lite 5G Android smartphone. Announced Mar 2020. Features 6.57″  display, Snapdragon 765G 5G chipset, 4160 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            10 Lite 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_9s-10147.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-9-pro.jpg"
                                        title="Xiaomi Redmi Note 9S Android smartphone. Announced Mar 2020. Features 6.67″  display, Snapdragon 720G chipset, 5020 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 9S</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_10_pro_5g-10055.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-10-pro-5g.jpg"
                                        title="Xiaomi Mi 10 Pro 5G Android smartphone. Announced Feb 2020. Features 6.67″  display, Snapdragon 865 5G chipset, 4500 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            10 Pro 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_10_5g-10082.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-10-5g.jpg"
                                        title="Xiaomi Mi 10 5G Android smartphone. Announced Feb 2020. Features 6.67″  display, Snapdragon 865 5G chipset, 4780 mAh battery, 256 GB storage, 12 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            10 5G</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_8t-9946.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-8t.jpg"
                                        title="Xiaomi Redmi Note 8T Android smartphone. Announced Nov 2019. Features 6.3″  display, Snapdragon 665 chipset, 4000 mAh battery, 128 GB storage, 4 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 8T</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_note_10_pro-9945.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-note10-.jpg"
                                        title="Xiaomi Mi Note 10 Pro Android smartphone. Announced Nov 2019. Features 6.47″  display, Snapdragon 730G chipset, 5260 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            Note 10 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_note_10-9936.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-note10-.jpg"
                                        title="Xiaomi Mi Note 10 Android smartphone. Announced Nov 2019. Features 6.47″  display, Snapdragon 730G chipset, 5260 mAh battery, 256 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            Note 10</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_8-9800.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-8.jpg"
                                        title="Xiaomi Redmi 8 Android smartphone. Announced Oct 2019. Features 6.22″  display, Snapdragon 439 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            8</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_8a-9897.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-8a.jpg"
                                        title="Xiaomi Redmi 8A Android smartphone. Announced Sep 2019. Features 6.22″  display, Snapdragon 439 chipset, 5000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            8A</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_9_pro-9891.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-9-pro.jpg"
                                        title="Xiaomi Mi 9 Pro Android smartphone. Announced Sep 2019. Features 6.39″  display, Snapdragon 855+ chipset, 4000 mAh battery, 512 GB storage, 12 GB RAM, Corning Gorilla Glass 6."><strong><span>Mi
                                            9 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_9_lite-9862.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-cc9-.jpg"
                                        title="Xiaomi Mi 9 Lite Android smartphone. Announced Sep 2019. Features 6.39″  display, Snapdragon 710 chipset, 4030 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            9 Lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_8_pro-9812.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-8-pro-.jpg"
                                        title="Xiaomi Redmi Note 8 Pro Android smartphone. Announced Aug 2019. Features 6.53″  display, Helio G90T chipset, 4500 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 8 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_a3-9769.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-a3.jpg"
                                        title="Xiaomi Mi A3 Android smartphone. Announced Jul 2019. Features 6.09″  display, Snapdragon 665 chipset, 4030 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            A3</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_7a-9716.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-7a-mzb8008in.jpg"
                                        title="Xiaomi Redmi 7A Android smartphone. Announced May 2019. Features 5.45″  display, Snapdragon 439 chipset, 4000 mAh battery, 32 GB storage, 3 GB RAM."><strong><span>Redmi
                                            7A</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_8-9814.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-8-1.jpg"
                                        title="Xiaomi Redmi Note 8 Android smartphone. Announced Aug 2019. Features 6.3″  display, Snapdragon 665 chipset, 4000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 8</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_9t-9738.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-9t.jpg"
                                        title="Xiaomi Mi 9T Android smartphone. Announced Jun 2019. Features 6.39″  display, Snapdragon 730 chipset, 4000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            9T</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_7-9498.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-7.jpg"
                                        title="Xiaomi Redmi 7 Android smartphone. Announced Mar 2019. Features 6.26″  display, Snapdragon 632 chipset, 4000 mAh battery, 64 GB storage, 4 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            7</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_7_pro-9521.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-7-pro.jpg"
                                        title="Xiaomi Redmi Note 7 Pro Android smartphone. Announced Feb 2019. Features 6.3″  display, Snapdragon 675 chipset, 4000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 7 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_9_se-9583.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-9-se.jpg"
                                        title="Xiaomi Mi 9 SE Android smartphone. Announced Feb 2019. Features 5.97″  display, Snapdragon 712 chipset, 3070 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            9 SE</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_9-9507.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-9-.jpg"
                                        title="Xiaomi Mi 9 Android smartphone. Announced Feb 2019. Features 6.39″  display, Snapdragon 855 chipset, 3300 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass 6."><strong><span>Mi
                                            9</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_go-9534.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-go.jpg"
                                        title="Xiaomi Redmi Go Android smartphone. Announced Jan 2019. Features 5.0″  display, Snapdragon 425 chipset, 3000 mAh battery, 16 GB storage, 1000 MB RAM."><strong><span>Redmi
                                            Go</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_7-9513.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-7.jpg"
                                        title="Xiaomi Redmi Note 7 Android smartphone. Announced Jan 2019. Features 6.3″  display, Snapdragon 660 chipset, 4000 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 5."><strong><span>Redmi
                                            Note 7</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_redmi_note_6_pro-9333.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-6-pro-r.jpg"
                                        title="Xiaomi Redmi Note 6 Pro Android smartphone. Announced Sep 2018. Features 6.26″  display, Snapdragon 636 chipset, 4000 mAh battery, 64 GB storage, 6 GB RAM, Corning Gorilla Glass (unspecified version)."><strong><span>Redmi
                                            Note 6 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_8_pro-9336.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-8-pro-.jpg"
                                        title="Xiaomi Mi 8 Pro Android smartphone. Announced Sep 2018. Features 6.21″  display, Snapdragon 845 chipset, 3000 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5."><strong><span>Mi
                                            8 Pro</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_8_lite-9329.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-8-lite-.jpg"
                                        title="Xiaomi Mi 8 Lite Android smartphone. Announced Sep 2018. Features 6.26″  display, Snapdragon 660 chipset, 3350 mAh battery, 128 GB storage, 6 GB RAM."><strong><span>Mi
                                            8 Lite</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_a2_lite_(redmi_6_pro)-9247.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-a2-lite.jpg"
                                        title="Xiaomi Mi A2 Lite (Redmi 6 Pro) Android smartphone. Announced Jul 2018. Features 5.84″  display, Snapdragon 625 chipset, Dual: 12 MP (f/2.2, 1.25 μm, PDAF) + 5 MP primary camera, 5 MP front camera, 4000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Mi
                                            A2 Lite (Redmi 6 Pro)</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_a2_lite_(redmi_6_pro)-9247.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-6a.jpg"
                                        title="Xiaomi Redmi 6/A6 Android smartphone. Announced Jul 2018. Features 5.84″  display, Snapdragon 625 chipset, Dual: 12 MP (f/2.2, 1.25 μm, PDAF) + 5 MP primary camera, 5 MP front camera, 4000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Xiaomi Redmi 6A</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_a2_lite_(redmi_6_pro)-9247.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-a1.jpg"
                                        title="Xiaomi Mi A1 Android smartphone. Announced Jul 2018. Features 5.84″  display, Snapdragon 625 chipset, Dual: 12 MP (f/2.2, 1.25 μm, PDAF) + 5 MP primary camera, 5 MP front camera, 4000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Xiaomi Mi A1</span></strong></a>
                            </li>
                            <li>
                                <div id="acciones">
                                    <div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div onclick="duplicar(this)" class="no-print" id="duplicar"><i
                                            class="fa fa-files-o" aria-hidden="true"></i></div>
                                </div>
                                <div class="varx"><p>x</p></div><a href="xiaomi_mi_a2_lite_(redmi_6_pro)-9247.php"><img
                                        src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo"
                                        class="img-logo"><img
                                        src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-5-plus.jpg"
                                        title="Xiaomi Redmi 5 Plus Android smartphone. Announced Jul 2018. Features 5.84″  display, Snapdragon 625 chipset, Dual: 12 MP (f/2.2, 1.25 μm, PDAF) + 5 MP primary camera, 5 MP front camera, 4000 mAh battery, 64 GB storage, 4 GB RAM."><strong><span>Xiaomi Redmi 5 Plus</span></strong></a>
                            </li>
                        </ul>
                        <br class="clear">
                    </div>

                </div>

                <br class="clearfix">

            </div>

        </div><!-- id body -->
    </div><!-- id outer -->
</div>

<?php
              
                  return ob_get_clean();
                 }
  
function KOL_plugin_precios_carteleria()
                 {    
                ?>
<a class="no-print" href="https://kolaccesorios.com/menu-carteleria/">
    <img src="https://kolaccesorios.com/wp-content/uploads/2022/05/menu-2.png"
        style="width: 50px;position: absolute;left: 20px;top: 250px;z-index: 999999;">
</a>

<div class="explicacion no-print" class='explicacion'>
    <ul>
        <li>
            Agregar los precios/Equetas que se quieren imprimir, usar el boton.
        </li>
        <li>
            Duplicar o eliminar los elemento segun la necesidad.
        </li>
        <li>
            Presionar CTL + P y guardar como pdf (Con Margenes).
        </li>
        <li>
            Enviar el PDF a redes y la arteleria sera entregada.
        </li>
        <li>
            <strong>NO SE GUARDAN LOS CAMBIOS UNA VEZ REFRESCADA LA PAGINA</strong>
        </li>
    </ul>
</div>

<input type="text" id="addprecio" style="width: 30%;margin-left: 30px;" name="addprecio" class="no-print"
    placeholder="Etiqueta" size="30">
<button type="button" onclick="agregarPrecio()" class="no-print">Agregar Etiqueta</button>

<div id="wrapper" class="l-container opcion0">
    <div id="outer" class="row">

        <div id="body" class="precios clearfix">
            <div class="main right main-maker l-box col">
                <div id="review-body" class="section-body">
                    <div class="makers">
                        <ul id="precios-ul">

                        </ul>
                    </div>

                </div>


            </div>

        </div><!-- id body -->
    </div><!-- id outer -->
</div>
<?php
                
                    return ob_get_clean();
                   }
        
     