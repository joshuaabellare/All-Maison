<?php
 namespace MailPoetVendor; if (!defined('ABSPATH')) exit; class Swift_CharacterReader_GenericFixedWidthReader implements \MailPoetVendor\Swift_CharacterReader { private $width; public function __construct($width) { $this->width = $width; } public function getCharPositions($string, $startOffset, &$currentMap, &$ignoredChars) { $strlen = \strlen($string); $ignored = $strlen % $this->width; $ignoredChars = $ignored ? \substr($string, -$ignored) : ''; $currentMap = $this->width; return ($strlen - $ignored) / $this->width; } public function getMapType() { return self::MAP_TYPE_FIXED_LEN; } public function validateByteSequence($bytes, $size) { $needed = $this->width - $size; return $needed > -1 ? $needed : -1; } public function getInitialByteSize() { return $this->width; } } 