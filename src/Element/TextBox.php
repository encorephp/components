<?php

namespace Encore\Wx\Element;

use wxTextCtrl;
use Encore\Giml\ElementTrait;
use Encore\Wx\Element\Traits\Wx;
use Encore\Wx\Element\Traits\Sizable;
use Encore\Wx\Element\Traits\Positionable;
use Encore\Wx\Element\Traits\Events;
use Encore\Wx\Element\Traits\Style;
use Encore\Giml\ElementInterface;

class TextBox implements ElementInterface
{
    use ElementTrait;
    use Wx;
    use Sizable;
    use Positionable;
    use Events;
    use Style;

    protected $events = [
        'onCut' => wxEVT_COMMAND_TEXT_CUT,
        'onEnter' => wxEVT_COMMAND_TEXT_ENTER,
        'onMaxLen' => wxEVT_COMMAND_TEXT_MAXLEN,
        'onPaste' => wxEVT_COMMAND_TEXT_PASTE,
        'onUpdated' => wxEVT_COMMAND_TEXT_UPDATED,
        'onUrl' => wxEVT_COMMAND_TEXT_URL
    ];

    protected $styles = [
        'processEnter' => wxTE_PROCESS_ENTER
    ];

    public function init()
    {
        $id = $this->collection->getTrueId($this->id);

        $this->element = new wxTextCtrl($this->parent->getParent()->getRaw(), $id, $this->value or wxEmptyString, $this->getPosition(), $this->getSize(), $this->buildStyles());

        $this->bindEvents();

        $this->parent->getRaw()->Add($this->element);
    }

    public function getValue()
    {
        if ($this->element) {
            $this->value = $this->element->GetValue();
        }

        return $this->value;
    }
}