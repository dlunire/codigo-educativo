<?php

/**
 * `ClaseFinal`
 * 
 * Clase final que puede ser instanciada directamente, 
 * pero **no puede ser extendida** por ninguna otra clase.
 * 
 * @package Código Educativo
 * @author Código Entrópico (@centropiccode) <codigoentropico@gmail.com>
 * @author DLUnire Framework
 * @copyright 2025 Código Entrópico
 * @license MIT
 * @link https://github.com/dlunire/codigo-educativo/blob/master/LICENSE
 * @version v0.0.1
 */
final class ClaseFinal {}

/**
 * Instanciación de `ClaseFinal`
 *
 * @var ClaseFinal $instancia Es una instancia de `ClaseFinal`
 */
$instancia = new ClaseFinal();

/**
 * Verificación de instancia
 * 
 * Se puede comprobar si $instancia es realmente una instancia de ClaseFinal
 * mediante la palabra reservada `instanceof`.
 */
if ($instancia instanceof ClaseFinal) {
    /**
     * Aquí van las instrucciones que se ejecutan 
     * cuando $instancia es una instancia de ClaseFinal.
     */
}

/**
 * Nota importante:
 * La clase `ClaseFinal` **no puede ser extendida**.
 * Intentar crear una clase que herede de ella generará un error fatal en PHP.
 *
 * Ejemplo (esto NO se puede hacer):
 *
 * class OtraClase extends ClaseFinal {} // ❌ Error: no se puede extender una clase final
 */
