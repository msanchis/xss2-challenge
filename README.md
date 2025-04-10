# Reto: XSS Reflejado Simple

## Descripción

Este reto consiste en una aplicación web muy básica desarrollada en PHP que simula una funcionalidad de búsqueda. La aplicación contiene una vulnerabilidad intencionada de **Cross-Site Scripting (XSS) Reflejado**.

El objetivo es identificar y explotar esta vulnerabilidad para conseguir la flag.

## Archivos del Reto

*   `xss_php/index.php`: El código fuente de la aplicación web vulnerable. Contiene la lógica que refleja la entrada del usuario y establece la cookie con la flag.
*   `xss_php/Dockerfile`: Define cómo construir la imagen Docker para el servicio web PHP/Apache.
*   `docker-compose.yml`: Orquesta el despliegue del contenedor de la aplicación web.

## Vulnerabilidad

La aplicación toma el parámetro `q` de la URL (`$_GET['q']`) y lo muestra directamente en la página HTML sin ningún tipo de sanitización o codificación. Esto permite inyectar código HTML y JavaScript arbitrario que será ejecutado por el navegador del usuario que visite la URL manipulada.

```php
// index.php (Fragmento vulnerable)
<?php
// ...
$query = isset($_GET['q']) ? $_GET['q'] : "";
// ...
if ($query) {
    // ¡Vulnerabilidad! Se imprime $query directamente sin escapar.
    echo "<p>Mostrando resultados para: $query</p>";
}
?>
