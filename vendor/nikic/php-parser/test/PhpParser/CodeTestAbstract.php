<?php

namespace PhpParser;

abstract class CodeTestAbstract extends \PHPUnit_Framework_TestCase
{
    protected function getTests($directory, $fileExtension) {
        $it = new \RecursiveDirectoryIterator($directory);
        $it = new \RecursiveIteratorIterator($it, \RecursiveIteratorIterator::LEAVES_ONLY);
        $it = new \RegexIterator($it, '(\.' . preg_quote($fileExtension) . '$)');

        $tests = array();
        foreach ($it as $file) {
            $fileName = realpath($file->getPathname());
            $fileContents = file_get_contents($fileName);
<<<<<<< HEAD
            $fileContents = canonicalize($fileContents);
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e

            // evaluate @@{expr}@@ expressions
            $fileContents = preg_replace_callback(
                '/@@\{(.*?)\}@@/',
                function($matches) {
                    return eval('return ' . $matches[1] . ';');
                },
                $fileContents
            );

            // parse sections
<<<<<<< HEAD
            $parts = preg_split("/\n-----(?:\n|$)/", $fileContents);
=======
            $parts = array_map('trim', explode('-----', $fileContents));
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e

            // first part is the name
            $name = array_shift($parts) . ' (' . $fileName . ')';
            $shortName = basename($fileName, '.test');

            // multiple sections possible with always two forming a pair
            $chunks = array_chunk($parts, 2);
            foreach ($chunks as $i => $chunk) {
                $dataSetName = $shortName . (count($chunks) > 1 ? '#' . $i : '');
<<<<<<< HEAD
                list($expected, $mode) = $this->extractMode($chunk[1]);
=======
                list($expected, $mode) = $this->extractMode(canonicalize($chunk[1]));
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
                $tests[$dataSetName] = array($name, $chunk[0], $expected, $mode);
            }
        }

        return $tests;
    }

    private function extractMode($expected) {
        $firstNewLine = strpos($expected, "\n");
        if (false === $firstNewLine) {
            $firstNewLine = strlen($expected);
        }

        $firstLine = substr($expected, 0, $firstNewLine);
        if (0 !== strpos($firstLine, '!!')) {
            return [$expected, null];
        }

        $expected = (string) substr($expected, $firstNewLine + 1);
        return [$expected, substr($firstLine, 2)];
    }
}
