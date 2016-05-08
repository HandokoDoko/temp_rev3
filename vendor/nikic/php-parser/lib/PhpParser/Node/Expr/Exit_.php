<?php

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

class Exit_ extends Expr
{
<<<<<<< HEAD
    /* For use in "kind" attribute */
    const KIND_EXIT = 1;
    const KIND_DIE = 2;

=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    /** @var null|Expr Expression */
    public $expr;

    /**
     * Constructs an exit() node.
     *
     * @param null|Expr $expr       Expression
     * @param array                    $attributes Additional attributes
     */
    public function __construct(Expr $expr = null, array $attributes = array()) {
        parent::__construct($attributes);
        $this->expr = $expr;
    }

    public function getSubNodeNames() {
        return array('expr');
    }
}
