<?php

/**
 * `ClaseRegular`
 * 
 * Clase regular que puede ser instanciada directamente, 
 * pero también extendida por otras clases (regulares, finales o abstractas).
 * 
 * @package Código Educativo
 * @author Código Entrópico (@centropiccode) <codigoentropico@gmail.com>
 * @author DLUnire Framework
 * @copyright 2025 Código Entrópico
 * @license MIT
 * @link https://github.com/dlunire/codigo-educativo/blob/master/LICENSE
 * @version v0.0.1
 */
class ClaseRegular {
}

/**
 * Instanciación de `ClaseRegular`
 *
 * @var ClaseRegular $instancia Es una instancia de `ClaseRegular`
 */
$instancia = new ClaseRegular();

/**
 * Verificación de instancia
 * 
 * Se puede comprobar si $instancia es realmente una instancia de ClaseRegular
 * mediante la palabra reservada `instanceof`.
 */
if ($instancia instanceof ClaseRegular) {
    /**
     * Aquí van las instrucciones que se ejecutan 
     * cuando $instancia es una instancia de ClaseRegular.
     */
}

/**
 * La clase `ClaseRegular` puede ser extendida por:
 * - Otra clase final.
 * - Otra clase regular.
 * - Una clase abstracta.
 */

/**
 * Ejemplos de extensiones
 */
final class ClaseFinal extends ClaseRegular {}
class OtraClaseRegular extends ClaseRegular {}
abstract class ClaseAbstracta extends ClaseRegular {}
