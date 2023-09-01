<?php

namespace Zehntech\Readability\Nodes\DOM;

use Zehntech\Readability\Nodes\NodeTrait;

/**
 * @method getAttribute($attribute)
 * @method hasAttribute($attribute)
 */
class DOMNode extends \DOMNode
{
    use NodeTrait;
}
