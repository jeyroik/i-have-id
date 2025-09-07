<?php
namespace jeyroik\interfaces\attributes;

interface IHaveIdInt extends IHaveId
{
    public function getId(int $default = 0): int;
}
