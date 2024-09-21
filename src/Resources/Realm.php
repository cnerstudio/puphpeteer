<?php

namespace Nesk\Puphpeteer\Resources;

/**
 * @property \Nesk\Puphpeteer\Resources\TaskManager $taskManager
 * @property-read mixed $environment
 * @property-read bool $disposed
 * @method mixed adoptHandle(mixed $handle)
 * @method-extended mixed adoptHandle(mixed $handle)
 * @method mixed transferHandle(mixed $handle)
 * @method-extended mixed transferHandle(mixed $handle)
 * @method mixed evaluateHandle(\Nesk\Rialto\Data\JsFunction $pageFunction, mixed ...$args)
 * @method-extended mixed evaluateHandle(callable|\Nesk\Rialto\Data\JsFunction $pageFunction, mixed ...$args)
 * @method mixed evaluate(\Nesk\Rialto\Data\JsFunction $pageFunction, mixed ...$args)
 * @method-extended mixed evaluate(callable|\Nesk\Rialto\Data\JsFunction $pageFunction, mixed ...$args)
 * @method mixed waitForFunction(\Nesk\Rialto\Data\JsFunction $pageFunction, array $options = [], mixed ...$args)
 * @method-extended mixed waitForFunction(callable|\Nesk\Rialto\Data\JsFunction $pageFunction, array{ $polling: 'raf'|'mutation'|float, $timeout: float, $root: \Nesk\Puphpeteer\Resources\ElementHandle|mixed[], $signal: mixed } $options = null, mixed ...$args)
 * @method \Nesk\Puphpeteer\Resources\JSHandle|mixed[] adoptBackendNode(float $backendNodeId = null)
 * @method-extended \Nesk\Puphpeteer\Resources\JSHandle|mixed[] adoptBackendNode(float $backendNodeId = null)
 * @method void dispose()
 * @method-extended void dispose()
 */
class Realm
{
}
