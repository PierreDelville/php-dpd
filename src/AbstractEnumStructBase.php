<?php

namespace Dpd;

abstract class AbstractEnumStructBase
{

    public static function valueIsValid($value): bool
    {
        return ($value === null) || in_array($value, static::getValidValues(), true);
    }
}