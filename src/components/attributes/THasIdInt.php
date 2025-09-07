<?php
namespace jeyroik\components\attributes;

use jeyroik\components\THasAttributes;
use jeyroik\interfaces\attributes\IHaveIdInt;

trait THasIdInt
{
    use THasAttributes;

    public function getId(int $default = 0): int
    {
        return $this->getAttribute(IHaveIdInt::FIELD__ID, $default);
    }
}
