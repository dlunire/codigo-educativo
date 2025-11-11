<?php

/**
 * Ejemplo 0003: Constantes de clase
 * ------------------------------------------
 * 
 * Este archivo ilustra cómo definir y acceder a **constantes** dentro de las clases.
 * 
 * Las constantes son valores inmutables asociados a la clase, no a la instancia.
 * Esto significa que pueden accederse sin crear un objeto, usando el nombre
 * de la clase seguido del operador de resolución de ámbito `::`.
 * 
 * Copyright (c) 2025 David E Luna M
 * Licensed under the MIT License.
 * 
 * @author Código Entrópico (@centropiccode)
 * @copyright (c) 2025 David E Luna M (codigoentropico@gmail.com)
 * @license MIT
 */


/**
 * Tome en cuenta:
 * - En los ejemplos donde no se utilizarán las clases en otros archivos,
 *   se declaran como `final class ...`.
 * - El propósito es ayudarle a construir el **modelo mental** correcto de
 *   cuándo debe usar cada tipo de clase.
 */
final class ConstantClassName
{
    /** 
     * Constante sin modificador de acceso.
     * 
     * Es pública por defecto.
     * 
     * @var string 
     */
    const VERSION = "v0.0.1";

    /** @var string Constante pública explícita */
    public const PUBLIC_VERSION = "v0.0.1";

    /** @var string Constante protegida */
    protected const PROTECTED_VERSION = "v0.0.1";

    /** @var string Constante privada */
    private const PRIVATE_VERSION = "v0.0.1";

    /**
     * Método estático de clase utilizado para imprimir las constantes.
     * 
     * Muestra cómo se accede a las constantes dentro del ámbito interno de la clase.
     * 
     * @return void
     */
    public static function print_constants(): void
    {
        /** Uso con `self` (referencia a la clase actual, sin herencia dinámica) */
        echo self::VERSION;
        echo self::PUBLIC_VERSION;
        echo self::PROTECTED_VERSION;
        echo self::PRIVATE_VERSION;

        /** Uso con `static` (permite herencia dinámica en clases derivadas) */
        echo static::VERSION;
        echo static::PUBLIC_VERSION;
        echo static::PROTECTED_VERSION;
        echo static::PRIVATE_VERSION;
    }
}

/**
 * Acceso a constantes desde fuera de la clase.
 * ------------------------------------------
 */
echo ConstantClassName::PUBLIC_VERSION;
echo ConstantClassName::VERSION;

/**
 * No se puede acceder a:
 *  - ConstantClassName::PROTECTED_VERSION;
 *  - ConstantClassName::PRIVATE_VERSION;
 * 
 * Ya que son constantes **encapsuladas** (protegidas o privadas).
 * 
 * Este tema —el **alcance de los miembros de clase**— se explicará más adelante.
 * Por ahora, concéntrese en las **constantes públicas**, que se declaran así:
 * 
 * public const VERSION = "v0.0.1";
 * 
 * o de forma simplificada:
 * 
 * const VERSION = "v0.0.1";
 */
