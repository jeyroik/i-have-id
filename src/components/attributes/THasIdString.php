<?php
namespace jeyroik\components\attributes;

use jeyroik\components\THasAttributes;
use jeyroik\interfaces\attributes\IHaveIdString;

trait THasIdString
{
    use THasAttributes;

    public function getId(string $default = ''): string
    {
        return $this->getAttributeString(IHaveIdString::FIELD__ID, $default);
    }
}
