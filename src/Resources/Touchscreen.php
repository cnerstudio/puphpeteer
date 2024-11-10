<?php

namespace Nesk\Puphpeteer\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void tap(float $x, float $y)
 * @method-extended void tap(float $x, float $y)
 * @method void touchStart(float $x, float $y)
 * @method-extended void touchStart(float $x, float $y)
 * @method void touchMove(float $x, float $y)
 * @method-extended void touchMove(float $x, float $y)
 * @method void touchEnd()
 * @method-extended void touchEnd()
 */
class Touchscreen extends BasicResource
{
}
