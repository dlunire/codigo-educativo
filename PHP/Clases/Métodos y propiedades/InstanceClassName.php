<?php
/**
 * Ejemplo básico de acceso a propiedades y métodos de instancia
 * 
 * Este archivo muestra cómo acceder a las propiedades y métodos
 * a través de un objeto (instancia) de clase.
 * 
 * También introduce la diferencia entre el ámbito de objeto (`$this`)
 * y el ámbito de clase (`self`, `static`), que se explicará en mayor detalle
 * en el ejemplo siguiente.
 * 
 * Copyright (c) 2025 David E Luna M
 * Licensed under the MIT License.
 * 
 * @author Código Entrópico (@centropiccode)
 * @copyright (c) 2025 David E Luna M (codigoentropico@gmail.com)
 * @license MIT
 */

/**
 * Ejemplo 01
 * ------------------------------------------
 * 
 * Propiedades y métodos de objeto o instancia.
 * 
 * En este ejemplo mostramos cómo acceder a las propiedades y métodos
 * mediante un objeto instanciado de la clase.
 */
final class InstanceClassName
{
    /** @var string $instance_property Propiedad de instancia */
    public string $instance_property = "Valor de la propiedad";

    /**
     * Método de instancia de clase.
     * 
     * @return void
     */
    public function instance_method(): void
    {
        echo $this->instance_property;
    }
}

/** @var InstanceClassName $object Ejemplo de cómo instanciar la clase */
$object = new InstanceClassName();

/** Se llama al método `instance_method` */
$object->instance_method();

/** También se puede acceder a la propiedad, porque es pública */
echo $object->instance_property;

/**
 * Nota:
 * El nombre `InstanceClassName` es el que hemos definido para esta clase,
 * pero puede asignar cualquier otro nombre si lo desea. 
 * 
 * En estos ejemplos los nombres se presentan en inglés, con el fin de
 * fomentar desde el inicio las convenciones internacionales de codificación.
 * 
 * Más adelante se incluirá un capítulo exclusivo dedicado a las guías de estilo,
 * donde aprenderá a escribir código limpio, legible y mantenible.
 */
