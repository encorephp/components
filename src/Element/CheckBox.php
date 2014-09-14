<?php

namespace Encore\Wx\Element;

class CheckBox implements \Encore\Giml\ElementInterface
{
    use \Encore\Giml\ElementTrait;
    use Traits\Wx;
    use Traits\Sizable;
    use Traits\Positionable;
    use Traits\Events;

    protected $events = [
        'onClick' => wxEVT_CHECKBOX
    ];

    public function init()
    {
        $id = $this->collection->getTrueId($this->id);

        $this->element = new \wxCheckBox($this->parent->getParent()->getRaw(), $id, $this->text ?: $this->value, $this->getPosition(), $this->getSize());

        $this->bindEvents();

        $this->parent->getRaw()->Add($this->element);
    }
}