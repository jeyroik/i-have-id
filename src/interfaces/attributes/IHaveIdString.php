<?php
namespace jeyroik\interfaces\attributes;

interface IHaveIdString extends IHaveId
{
    public function getId(string $default = ''): string;
}
