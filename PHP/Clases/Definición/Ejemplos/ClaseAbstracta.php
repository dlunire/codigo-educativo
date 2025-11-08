<?php

/**
 * ClaseAbstracta
 * 
 * Clase abstracta que no puede ser instanciada directamente.
 * Sirve como base para que otras clases (regulares o finales) la extiendan.
 * 
 * @package Código Educativo
 * @author Código Entrópico (@centropiccode) <codigoentropico@gmail.com>
 * @author DLUnire Framework
 * @copyright 2025 Código Entrópico
 * @license MIT
 * @link https://github.com/dlunire/codigo-educativo/blob/master/LICENSE
 * @version v0.0.1
 */
abstract class ClaseAbstracta {
    // Clase base sin propiedades ni métodos por ahora
}

/**
 * `ClaseRegular`
 * 
 * Clase que extiende `ClaseAbstracta` y puede ser instanciada.
 */
class ClaseRegular extends ClaseAbstracta {
    // Implementación futura de ClaseRegular
}

/**
 * `ClaseFinal`
 * 
 * Clase que extiende `ClaseAbstracta` y está marcada como final.
 * No puede ser extendida por otras clases.
 */
final class ClaseFinal extends ClaseAbstracta {
    // Implementación futura de ClaseFinal
}
