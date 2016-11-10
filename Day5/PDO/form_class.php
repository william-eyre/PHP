<?php
class FormClass
{
    private $tag;
    private $xhtml;

    public function __construct($xhtml = true)
    {
        $this->xhtml = $xhtml;
    }

    function startForm($action = '#', $method = 'post')
    {
        $str = "<form action=\"$action\" method= \"$method\" >";
        return $str;
    }

    function endForm()
    {
        return "</form>";
    }

    function addLabelFor($text)
    {
        $str = "<label>$text</label>";
        return $str;
    }

    function addInput($type, $name, $value)
    {
        $str ="<input type='$type' name ='$name' value='$value' />";
        return $str;
    }

    function startTag($tag)
    {
        $this->tag = $tag;
        $str = "<$tag>";
        return $str;
    }

    function endTag($tag = '')
    {
        $str= $tag ? "</$tag>" : "</$this->tag>";
        $this->tag = '';
        return $str;
    }

    function emptyTag($tag)
    {
        return "<$tag />";
    }
}