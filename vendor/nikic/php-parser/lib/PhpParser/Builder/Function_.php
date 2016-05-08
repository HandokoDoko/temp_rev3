<?php

namespace PhpParser\Builder;

use PhpParser;
use PhpParser\Node;
use PhpParser\Node\Stmt;

class Function_ extends FunctionLike
{
    protected $name;
    protected $stmts = array();

    /**
     * Creates a function builder.
     *
     * @param string $name Name of the function
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * Adds a statement.
     *
     * @param Node|PhpParser\Builder $stmt The statement to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addStmt($stmt) {
        $this->stmts[] = $this->normalizeNode($stmt);

        return $this;
    }

    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() {
        return new Stmt\Function_($this->name, array(
<<<<<<< HEAD
            'byRef'      => $this->returnByRef,
            'params'     => $this->params,
            'returnType' => $this->returnType,
            'stmts'      => $this->stmts,
        ), $this->attributes);
    }
}
=======
            'byRef'  => $this->returnByRef,
            'params' => $this->params,
            'stmts'  => $this->stmts,
        ), $this->attributes);
    }
}
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
