<?php

namespace PhpParser;

class Comment
{
    protected $text;
    protected $line;
<<<<<<< HEAD
    protected $filePos;
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e

    /**
     * Constructs a comment node.
     *
<<<<<<< HEAD
     * @param string $text         Comment text (including comment delimiters like /*)
     * @param int    $startLine    Line number the comment started on
     * @param int    $startFilePos File offset the comment started on
     */
    public function __construct($text, $startLine = -1, $startFilePos = -1) {
        $this->text = $text;
        $this->line = $startLine;
        $this->filePos = $startFilePos;
=======
     * @param string $text Comment text (including comment delimiters like /*)
     * @param int    $line Line number the comment started on
     */
    public function __construct($text, $line = -1) {
        $this->text = $text;
        $this->line = $line;
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    }

    /**
     * Gets the comment text.
     *
     * @return string The comment text (including comment delimiters like /*)
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Sets the comment text.
     *
     * @param string $text The comment text (including comment delimiters like /*)
<<<<<<< HEAD
     *
     * @deprecated Construct a new comment instead
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     */
    public function setText($text) {
        $this->text = $text;
    }

    /**
     * Gets the line number the comment started on.
     *
     * @return int Line number
     */
    public function getLine() {
        return $this->line;
    }

    /**
     * Sets the line number the comment started on.
     *
     * @param int $line Line number
<<<<<<< HEAD
     *
     * @deprecated Construct a new comment instead
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     */
    public function setLine($line) {
        $this->line = $line;
    }

    /**
<<<<<<< HEAD
     * Gets the file offset the comment started on.
     *
     * @return int File offset
     */
    public function getFilePos() {
        return $this->filePos;
    }

    /**
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     * Gets the comment text.
     *
     * @return string The comment text (including comment delimiters like /*)
     */
    public function __toString() {
        return $this->text;
    }

    /**
     * Gets the reformatted comment text.
     *
     * "Reformatted" here means that we try to clean up the whitespace at the
     * starts of the lines. This is necessary because we receive the comments
     * without trailing whitespace on the first line, but with trailing whitespace
     * on all subsequent lines.
     *
     * @return mixed|string
     */
    public function getReformattedText() {
        $text = trim($this->text);
<<<<<<< HEAD
        $newlinePos = strpos($text, "\n");
        if (false === $newlinePos) {
=======
        if (false === strpos($text, "\n")) {
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
            // Single line comments don't need further processing
            return $text;
        } elseif (preg_match('((*BSR_ANYCRLF)(*ANYCRLF)^.*(?:\R\s+\*.*)+$)', $text)) {
            // Multi line comment of the type
            //
            //     /*
            //      * Some text.
            //      * Some more text.
            //      */
            //
            // is handled by replacing the whitespace sequences before the * by a single space
            return preg_replace('(^\s+\*)m', ' *', $this->text);
        } elseif (preg_match('(^/\*\*?\s*[\r\n])', $text) && preg_match('(\n(\s*)\*/$)', $text, $matches)) {
            // Multi line comment of the type
            //
            //    /*
            //        Some text.
            //        Some more text.
            //    */
            //
            // is handled by removing the whitespace sequence on the line before the closing
            // */ on all lines. So if the last line is "    */", then "    " is removed at the
            // start of all lines.
            return preg_replace('(^' . preg_quote($matches[1]) . ')m', '', $text);
        } elseif (preg_match('(^/\*\*?\s*(?!\s))', $text, $matches)) {
            // Multi line comment of the type
            //
            //     /* Some text.
            //        Some more text.
<<<<<<< HEAD
            //          Indented text.
            //        Even more text. */
            //
            // is handled by removing the difference between the shortest whitespace prefix on all
            // lines and the length of the "/* " opening sequence.
            $prefixLen = $this->getShortestWhitespacePrefixLen(substr($text, $newlinePos + 1));
            $removeLen = $prefixLen - strlen($matches[0]);
            return preg_replace('(^\s{' . $removeLen . '})m', '', $text);
=======
            //        Even more text. */
            //
            // is handled by taking the length of the "/* " segment and leaving only that
            // many space characters before the lines. Thus in the above example only three
            // space characters are left at the start of every line.
            return preg_replace('(^\s*(?= {' . strlen($matches[0]) . '}(?!\s)))m', '', $text);
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
        }

        // No idea how to format this comment, so simply return as is
        return $text;
    }
<<<<<<< HEAD

    private function getShortestWhitespacePrefixLen($str) {
        $lines = explode("\n", $str);
        $shortestPrefixLen = INF;
        foreach ($lines as $line) {
            preg_match('(^\s*)', $line, $matches);
            $prefixLen = strlen($matches[0]);
            if ($prefixLen < $shortestPrefixLen) {
                $shortestPrefixLen = $prefixLen;
            }
        }
        return $shortestPrefixLen;
    }
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
}