# Serie 0002 — Capítulo 01

## Estructura de clase

En este capítulo se profundiza en la **estructura interna de una clase**, centrándonos en los **niveles de acceso**, el **contexto de uso** y la **definición de constantes**.
Si desea conocer las definiciones generales y los tipos de clases, consulte la **Serie 0001**.

## Concepto teórico principal

### Niveles de acceso o visibilidad

En PHP existen tres (03) niveles principales de **visibilidad** aplicables a las propiedades, constantes y métodos de una clase:

* **Privadas (`private`)** → Solo pueden ser accedidas desde dentro de la misma clase.
* **Protegidas (`protected`)** → Pueden ser accedidas desde la clase donde se declaran y desde sus clases hijas.
* **Públicas (`public`)** → Pueden ser accedidas desde cualquier contexto, ya sea dentro o fuera de la clase.

### Clasificación por contexto de acceso

Además de la visibilidad, las propiedades y métodos —excepto las constantes de clase— pueden clasificarse según su **contexto de acceso**:

#### Propiedades y métodos de instancia

Son los que se acceden desde un **objeto** (instancia) de la clase.
Ejemplo:

```php
$object = new ClassName();

# Propiedad de instancia
$object->instance_property;

# Método de instancia
$object->instance_method();
```

También pueden invocarse dentro de la clase utilizando la referencia del objeto actual `$this` (*current object reference* en inglés):

```php
echo $this->instance_property;

$this->instance_method();
```

> El **operador de objeto (`->`)** se utiliza exclusivamente para acceder a las propiedades o métodos de **instancia**.

📎 [Revisar Ejemplo 01 — Propiedades y métodos de instancia][01]

#### Propiedades y métodos estáticos

Los miembros **estáticos** pertenecen a la clase en sí, no a sus instancias.
Se acceden usando el **operador de resolución de ámbito (`::`)**, así:

```php
echo ClassName::$property;
ClassName::method();
```

Y dentro de la clase se acceden mediante:

```php
/** Con `self` (acceso directo a la clase actual) */
echo self::$property;
self::method();

/** Con `static` (acceso dinámico en herencia) */
echo static::$property;
static::method();
```

📎 [Revisar Ejemplo 02 — Propiedades y métodos estáticos][02]

#### Constantes de clase

Las **constantes de clase** son valores inmutables que pertenecen a la clase misma y **no pueden cambiar** durante la ejecución del programa.
Pueden tener los mismos modificadores de visibilidad (`public`, `protected`, `private`).

Se declaran con la palabra reservada `const` y, por convención, deben escribirse en **mayúsculas**, utilizando el formato `SCREAMING_SNAKE_CASE` o `UPPER_SNAKE_CASE` cuando el nombre incluye varias palabras.

```php
/** Constante pública */
public const VERSION = "v0.0.1";

/** Constante protegida */
protected const PROTECTED_VERSION = "v0.0.1";

/** Constante privada */
private const PRIVATE_VERSION = "v0.0.1";
```

> 🧭 Más adelante se abordará el tema del **alcance de las constantes** dentro del contexto de herencia y encapsulación.
> Por ahora, concéntrese en las **constantes públicas**.

📎 [Revisar Ejemplo 03 — Constantes de clase][03]

## Notas de uso o advertencias

* Aunque las **propiedades públicas** permiten un acceso directo, no siempre es recomendable exponerlas.
  Más adelante, en el tema de **encapsulación**, se explicará por qué se prefiere el uso de métodos *getters* y *setters*.
* La variable `$this` solo puede usarse **dentro de un método de instancia**; no funciona en métodos estáticos.
* El **operador de objeto (`->`)** solo se aplica a **instancias**, nunca a nombres de clase.

## 🧩 Ejercicios sugeridos

1. Cree una clase llamada `Car` con una propiedad pública `$brand` y un método `show_brand()` que imprima el valor de esa propiedad.
2. Instancie la clase y acceda tanto a la propiedad como al método.
3. Cambie el nivel de visibilidad de `$brand` a `private` y observe el error.
4. Agregue un método que devuelva el valor de `$brand` sin accederla directamente desde fuera.

---

[01]: ../../Métodos%20y%20propiedades/InstanceClassName.php "Ver ejemplo de propiedades y métodos de instancia"
[02]: ../../Métodos%20y%20propiedades/StaticClassName.php "Ver ejemplo de propiedades y métodos estáticos"
[03]: ../../Métodos%20y%20propiedades/ConstantClassName.php "Ver ejemplo de constantes de clase"