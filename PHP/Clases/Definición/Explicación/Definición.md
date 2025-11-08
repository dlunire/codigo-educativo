# Tipos de clases en PHP

En PHP existen **tres (03) tipos principales de clases** que se utilizan dependiendo de la lógica de herencia y uso que queramos implementar en nuestro proyecto: **clases abstractas**, **clases regulares** y **clases finales**. A continuación se explican y se muestran ejemplos prácticos para cada caso.

---

## 1. Clase Abstracta

Una clase abstracta **no puede ser instanciada directamente**, pero sirve como base para que otras clases la extiendan. Es útil cuando queremos definir métodos o propiedades comunes que deben ser heredadas.

```php
<?php

/**
 * ClaseAbstracta
 * 
 * Clase abstracta que no puede ser instanciada directamente.
 */
abstract class ClaseAbstracta {}


# ClaseRegular que extiende la clase abstracta
class ClaseRegular extends ClaseAbstracta {}

# ClaseFinal que extiende la clase abstracta
final class ClaseFinal extends ClaseAbstracta {}
```

> Las clases abstractas se usan como **plantilla base** para otras clases.


## 2. Clase Regular

Una clase regular **puede ser instanciada directamente** y **también puede ser extendida** por otras clases (regulares, finales o abstractas).

```php
<?php

/**
 * ClaseRegular
 */
class ClaseRegular {}

/** @var ClaseRegular $instancia */
$instancia = new ClaseRegular();

if ($instancia instanceof ClaseRegular) {
    // Aquí se ejecutan las instrucciones
}

/**
 * La clase puede ser extendida por:
 * - Otra clase final
 * - Otra clase regular
 * - Una clase abstracta
 */
final class ClaseFinal extends ClaseRegular {}
class OtraClaseRegular extends ClaseRegular {}
abstract class ClaseAbstracta extends ClaseRegular {}
```

> Las clases regulares son **flexibles**, porque pueden ser instanciadas y heredadas.

## 3. Clase Final

Una clase final **puede ser instanciada directamente**, pero **no puede ser extendida**. Se usa cuando queremos impedir la herencia y proteger la implementación de la clase.

```php
<?php

/** ClaseFinal */
final class ClaseFinal {}

/** @var ClaseFinal $instancia */
$instancia = new ClaseFinal();

if ($instancia instanceof ClaseFinal) {
    ## Aquí se ejecutan las instrucciones si $instancia
    ## es una instancia de ClaseFinal.
}

## No se puede extender una clase final.
## Ejemplo de cómo no hacerse:
class OtraClase extends ClaseFinal {} // ❌ Error
```

> Las clases finales son ideales para **proteger la implementación** de una clase específica.

---

## Conclusión

* **Clase abstracta:** base que **no se puede instanciar**, solo extender.
* **Clase regular:** flexible, se puede instanciar y extender.
* **Clase final:** se puede instanciar, pero **no se puede extender**.

Este conocimiento es esencial para diseñar aplicaciones **robustas y escalables**, definiendo correctamente qué clases pueden ser utilizadas y heredadas en tu proyecto.
