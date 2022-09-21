<?php
$shopping_cart=150;
$tipo = 'periférico';
$shipping_price = 0;

if($shopping_cart<20){
    if($tipo=='cable'){
        echo "No se puede enviar" . '<br />';
    } else {
        echo "Los gastos de envío son 4.99€" . '<br />';
        $shipping_price =  $shopping_cart + 4.99;
    }
} else if ($shopping_cart>20 && $shopping_cart<50) {
    echo "Los gastos de envío son 4.99€" . '<br />';
    $shipping_price =  $shopping_cart + 4.99;
} else if ($shopping_cart>50 && $shopping_cart<150) {
    echo "los portes son gratis" . '<br />';
} else {
    echo "Codigo de descuento GIMBERNAT_20_%". '<br />';
    $shipping_price =  $shopping_cart -  ($shopping_cart* 20 / 100);
}
    echo "El preció de la compra es " . $shipping_price . "€";