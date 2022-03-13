<?php
$mensaje="";

if (empty($_SESSION['usuario'])) {
    $mensaje="Para Empezar a comprar Inicie Sesión";
}else{

if (isset($_POST['btnAccion'])) {
    switch ($_POST['btnAccion']) {
        case 'Agregar':
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $ID=openssl_decrypt($_POST['id'], COD, KEY);
                $mensaje.="Ok ID ".$ID."<br/>";
            } else {
                $mensaje.="Upss... ID incorrecto ".$ID."<br/>";
            }
            if (is_string(openssl_decrypt($_POST['nombre'], COD, KEY))) {
                $NOMBRE=openssl_decrypt($_POST['nombre'], COD, KEY);
                $mensaje.="Ok NOMBRE ".$NOMBRE."<br/>";
            }else{$mensaje.="Upss... Algo pasa con el nombre ".$ID."<br/>"; break;}
            if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                $PRECIO=openssl_decrypt($_POST['precio'], COD, KEY);
                $mensaje.="Ok PRECIO ".$PRECIO."<br/>";
            }else{$mensaje.="Upss... Algo pasa con el precio ".$PRECIO."<br/>"; break;}
            if (is_numeric(openssl_decrypt($_POST['cantidad'], COD, KEY))) {
                $CANTIDAD=openssl_decrypt($_POST['cantidad'], COD, KEY);
                $mensaje.="Ok CANTIDAD ".$CANTIDAD."<br/>";
            }else{$mensaje.="Upss... Algo pasa con la cantidad ".$CANTIDAD."<br/>"; break;}
            
            if (!isset($_SESSION['CARRITO'])) {
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'PRECIO'=>$PRECIO,
                    'CANTIDAD'=>$CANTIDAD,
                );
                $_SESSION['CARRITO'][0]=$producto;
                $mensaje= "Libro agregado al carrito";
            }else {
                $idProductos=array_column($_SESSION['CARRITO'],"ID");
                if (in_array($ID, $idProductos)) {
                    echo "<script>alert('El libro ya ha sido agregado anteriormente al carrito...');</script>";
                    $mensaje="";
                }else {
                    $numeroProductos=count($_SESSION['CARRITO']);
                    $producto=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOMBRE,
                        'PRECIO'=>$PRECIO,
                        'CANTIDAD'=>$CANTIDAD,
                    );
                    $_SESSION['CARRITO'][$numeroProductos]=$producto;
                    $mensaje= "Libro agregado al carrito";
                }
            }
            //$mensaje=print_r($_SESSION, true);
            
            break;
        
        case 'Eliminar':
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $ID=openssl_decrypt($_POST['id'], COD, KEY);
                foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
                    if ($producto['ID']==$ID) {
                        unset($_SESSION['CARRITO'][$indice]);
                        echo "<script>alert('Elemento borrado...');</script>";
                    }
                }
            } else {
                $mensaje.="Upss... ID incorrecto ".$ID."<br/>";
            }
            break;
    }
}
}
?>