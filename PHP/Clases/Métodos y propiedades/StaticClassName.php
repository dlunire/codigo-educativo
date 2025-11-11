<?php

/**
 * Ejemplo básico de acceso a propiedades y métodos estáticos
 * 
 * Este archivo muestra cómo acceder a las propiedades y métodos
 * directamente desde la clase, sin necesidad de crear una instancia.
 * 
 * Este enfoque ilustra el ámbito de clase (`self`, `static`), en contraste
 * con el ámbito de objeto (`$this`), abordado en el ejemplo anterior.
 * 
 * Copyright (c) 2025 David E Luna M
 * Licensed under the MIT License.
 * 
 * @author Código Entrópico (@centropiccode)
 * @copyright (c) 2025 David E Luna M (codigoentropico@gmail.com)
 * @license MIT
 */

/**
 * Ejemplo 02
 * ------------------------------------------
 * 
 * Propiedades y métodos de clase (estáticos).
 * 
 * En este ejemplo mostramos cómo definir y acceder a miembros estáticos.
 * 
 * > Nota: puede asignar cualquier nombre a la clase; sin embargo, se recomienda
 * > utilizar nombres en inglés para fomentar las convenciones profesionales
 * > de nomenclatura.
 */
final class StaticClassName {
    /** @var string $property Propiedad estática */
    public static string $property = "Valor de la propiedad estática";

    /**
     * Método estático de clase.
     * 
     * @return void
     */
    public static function method(): void {
        /** Acceso por medio de `self` */
        echo self::$property;

        /** Acceso por medio de `static` */
        echo static::$property;
    }
}

/** Acceso directo a la propiedad estática */
echo StaticClassName::$property;

/** Acceso directo al método estático */
StaticClassName::method();

/**
 * Nota:
 * El nombre `StaticClassName` es el que hemos definido en este ejemplo,
 * pero puede asignar cualquier otro nombre de acuerdo a sus necesidades.
 * 
 * Más adelante, se incluirán capítulos dedicados a la diferencia entre
 * `self`, `static` y `$this`, para entender cómo afectan el comportamiento
 * de los métodos y propiedades en herencia y contexto de ejecución.
 */
