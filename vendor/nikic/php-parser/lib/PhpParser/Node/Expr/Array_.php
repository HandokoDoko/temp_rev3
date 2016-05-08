<?php

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

class Array_ extends Expr
{
<<<<<<< HEAD
    // For use in "kind" attribute
    const KIND_LONG = 1;  // array() syntax
    const KIND_SHORT = 2; // [] syntax

=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    /** @var ArrayItem[] Items */
    public $items;

    /**
     * Constructs an array node.
     *
     * @param ArrayItem[] $items      Items of the array
     * @param array       $attributes Additional attributes
     */
    public function __construct(array $items = array(), array $attributes = array()) {
        parent::__construct($attributes);
        $this->items = $items;
    }

    public function getSubNodeNames() {
        return array('items');
    }
}
