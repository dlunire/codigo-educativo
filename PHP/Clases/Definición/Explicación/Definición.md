# Tipos de clases en PHP

En PHP existen **tres (03) tipos principales de clases**, que se utilizan según la lógica de herencia y el propósito de uso dentro del proyecto:
**clases abstractas**, **clases regulares** y **clases finales**.
A continuación se explican sus características y se presentan ejemplos prácticos.

---

## 1. Clases Abstractas

Una **clase abstracta** no puede ser instanciada directamente, pero **sirve como base** para que otras clases la extiendan.
Es útil cuando se desea definir **propiedades o métodos comunes** que las clases hijas deben heredar o implementar.

```php
<?php

/**
 * ClaseAbstracta
 * 
 * Clase abstracta que no puede ser instanciada directamente.
 */
abstract class ClaseAbstracta {}

/**
 * ClaseRegular que extiende la clase abstracta.
 */
class ClaseRegular extends ClaseAbstracta {}

/**
 * ClaseFinal que extiende la clase abstracta.
 */
final class ClaseFinal extends ClaseAbstracta {}
```

> Las clases abstractas se utilizan como **plantillas base** para otras clases.

---

## 2. Clases Regulares

Una **clase regular** puede ser **instanciada directamente** y también **extendida** por otras clases (regulares, finales o abstractas).

```php
<?php

/**
 * ClaseRegular
 * 
 * Clase que puede ser instanciada y extendida.
 */
class ClaseRegular {}

/** @var ClaseRegular $instancia Ejemplo de instanciación */
$instancia = new ClaseRegular();

if ($instancia instanceof ClaseRegular) {
    // Aquí se ejecutan las instrucciones
}

/**
 * Ejemplos de herencia a partir de una clase regular.
 */
final class ClaseFinal extends ClaseRegular {}
class OtraClaseRegular extends ClaseRegular {}
abstract class ClaseAbstracta extends ClaseRegular {}
```

> Las clases regulares son **flexibles**, porque pueden **instanciarse** y **heredarse**.

---

## 3. Clases Finales

Una **clase final** puede ser instanciada directamente, pero **no puede ser extendida**.
Se utiliza cuando se quiere **proteger la implementación** y evitar que otras clases la modifiquen mediante herencia.

```php
<?php

/**
 * ClaseFinal
 * 
 * Clase que no puede ser extendida.
 */
final class ClaseFinal {}

/** @var ClaseFinal $instancia Ejemplo de instanciación */
$instancia = new ClaseFinal();

if ($instancia instanceof ClaseFinal) {
    ## Aquí se ejecutan las instrucciones si $instancia
    ## es una instancia de ClaseFinal.
}

/**
 * No se puede extender una clase final.
 * Este ejemplo generaría un error:
 */
class OtraClase extends ClaseFinal {} // ❌ Error
```

> Las clases finales son ideales para **cerrar la herencia** y **proteger el comportamiento interno** de la clase.

---

## Conclusión

| Tipo de clase | ¿Se puede instanciar? | ¿Se puede heredar? | Uso principal                    |
| ------------- | --------------------- | ------------------ | -------------------------------- |
| **Abstracta** | ❌ No                  | ✅ Sí               | Plantilla base para otras clases |
| **Regular**   | ✅ Sí                  | ✅ Sí               | Clase flexible, reutilizable     |
| **Final**     | ✅ Sí                  | ❌ No               | Proteger implementación final    |

---

> **En resumen:**
>
> * La **clase abstracta** define un modelo.
> * La **clase regular** crea estructuras reutilizables.
> * La **clase final** protege comportamientos definitivos.
