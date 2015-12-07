<?php
declare(strict_types=1);

namespace Linio\Component\Input\Node;

use Linio\Component\Input\Instantiator\SetInstantiator;

class ObjectNode extends BaseNode
{
    public function __construct()
    {
        $this->instantiator = new SetInstantiator();
    }

    public function getValue(string $field, $value)
    {
        $this->checkConstraints($field, $value);

        return $this->instantiator->instantiate($this->type, $value);
    }
}
