<?php

namespace PhpParser;

class NodeDumper
{
<<<<<<< HEAD
    private $dumpComments;

    /**
     * Constructs a NodeDumper.
     *
     * @param array $options Boolean option 'dumpComments' controls whether comments should be
     *                       dumped
     */
    public function __construct(array $options = []) {
        $this->dumpComments = !empty($options['dumpComments']);
    }

=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    /**
     * Dumps a node or array.
     *
     * @param array|Node $node Node or array to dump
     *
     * @return string Dumped value
     */
    public function dump($node) {
        if ($node instanceof Node) {
            $r = $node->getType() . '(';

            foreach ($node->getSubNodeNames() as $key) {
                $r .= "\n    " . $key . ': ';

                $value = $node->$key;
                if (null === $value) {
                    $r .= 'null';
                } elseif (false === $value) {
                    $r .= 'false';
                } elseif (true === $value) {
                    $r .= 'true';
                } elseif (is_scalar($value)) {
                    $r .= $value;
                } else {
                    $r .= str_replace("\n", "\n    ", $this->dump($value));
                }
            }
<<<<<<< HEAD

            if ($this->dumpComments && $comments = $node->getAttribute('comments')) {
                $r .= "\n    comments: " . str_replace("\n", "\n    ", $this->dump($comments));
            }
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
        } elseif (is_array($node)) {
            $r = 'array(';

            foreach ($node as $key => $value) {
                $r .= "\n    " . $key . ': ';

                if (null === $value) {
                    $r .= 'null';
                } elseif (false === $value) {
                    $r .= 'false';
                } elseif (true === $value) {
                    $r .= 'true';
                } elseif (is_scalar($value)) {
                    $r .= $value;
                } else {
                    $r .= str_replace("\n", "\n    ", $this->dump($value));
                }
            }
<<<<<<< HEAD
        } elseif ($node instanceof Comment) {
            return $node->getReformattedText();
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
        } else {
            throw new \InvalidArgumentException('Can only dump nodes and arrays.');
        }

        return $r . "\n)";
    }
}
