<?php


namespace sinri\XMindWriter\XMapContent;


use sinri\XMindWriter\core\XMapNodeEntity;
use XMLWriter;

class XMapContentLabelEntity extends XMapNodeEntity
{
    /**
     * @var string the content of the label
     */
    protected $textContent;

    public function __construct($text)
    {
        $this->textContent = $text;
    }

    /**
     * @return string
     */
    public function getTextContent()
    {
        return $this->textContent;
    }

    /**
     * @param string $textContent
     * @return XMapContentLabelEntity
     */
    public function setTextContent($textContent)
    {
        $this->textContent = $textContent;
        return $this;
    }

    /**
     * @param XMLWriter $xmlWriter
     * @return void
     */
    protected function writeThisNode($xmlWriter)
    {
        $xmlWriter->startElement($this->nodeTag());
        $xmlWriter->text($this->textContent);
        $xmlWriter->endElement();
    }

    protected function nodeTag()
    {
        return "label";
    }
}