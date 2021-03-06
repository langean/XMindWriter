<?php


namespace sinri\XMindWriter\XMapContent;

use sinri\XMindWriter\core\XMapNodeEntity;
use XMLWriter;

/**
 * A position element represents a 2-D geographic position.
 * Class XMapContentPositionEntity
 * @package sinri\XMindWriter\XMapContent
 */
class XMapContentPositionEntity extends XMapNodeEntity
{
    /**
     * @var int `svg:x` the horizontal coordinate of this position (in pixels)
     */
    protected $attrSvgX;

    /**
     * @return int
     */
    public function getAttrSvgX()
    {
        return $this->attrSvgX;
    }

    /**
     * @param int $attrSvgX
     * @return XMapContentPositionEntity
     */
    public function setAttrSvgX($attrSvgX)
    {
        $this->attrSvgX = $attrSvgX;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttrSvgY()
    {
        return $this->attrSvgY;
    }

    /**
     * @param int $attrSvgY
     * @return XMapContentPositionEntity
     */
    public function setAttrSvgY($attrSvgY)
    {
        $this->attrSvgY = $attrSvgY;
        return $this;
    }
    /**
     * @var int `svg:y` the vertical coordinate of this position (in pixels)
     */
    protected $attrSvgY;

    public function __construct($x,$y)
    {
        $this->attrSvgX=$x;
        $this->attrSvgY=$y;
    }

    protected function nodeTag()
    {
        return "position";
    }

    /**
     * @param XMLWriter $xmlWriter
     * @return void
     */
    protected function writeThisNode($xmlWriter)
    {
        $xmlWriter->startElement($this->nodeTag());

        $xmlWriter->writeAttribute("svg:x",$this->attrSvgX);
        $xmlWriter->writeAttribute("svg:y",$this->attrSvgY);

        $xmlWriter->endElement();
    }
}