<?php

namespace Nesk\Puphpeteer\Resources;

use Nesk\Puphpeteer\Traits\AliasesEvaluationMethods;
use Nesk\Puphpeteer\Traits\AliasesSelectionMethods;

/**
 * @property mixed $isolatedHandle
 * @property-read string|null $id
 * @property-read bool $disposed
 * @property-read \Nesk\Puphpeteer\Resources\Frame $frame
 * @method mixed getProperty(mixed $propertyName)
 * @method-extended mixed getProperty(mixed $propertyName)
 * @method array|string[]|\Nesk\Puphpeteer\Resources\JSHandle[] getProperties()
 * @method-extended array|string[]|\Nesk\Puphpeteer\Resources\JSHandle[] getProperties()
 * @method mixed evaluate(\Nesk\Rialto\Data\JsFunction $pageFunction, mixed ...$args)
 * @method-extended mixed evaluate(callable|\Nesk\Rialto\Data\JsFunction $pageFunction, mixed ...$args)
 * @method mixed evaluateHandle(\Nesk\Rialto\Data\JsFunction $pageFunction, mixed ...$args)
 * @method-extended mixed evaluateHandle(callable|\Nesk\Rialto\Data\JsFunction $pageFunction, mixed ...$args)
 * @method mixed jsonValue()
 * @method-extended mixed jsonValue()
 * @method string toString()
 * @method-extended string toString()
 * @method mixed remoteObject()
 * @method-extended mixed remoteObject()
 * @method void dispose()
 * @method-extended void dispose()
 * @method \Nesk\Puphpeteer\Resources\ElementHandle|mixed[] asElement()
 * @method-extended \Nesk\Puphpeteer\Resources\ElementHandle|mixed[] asElement()
 * @method \Nesk\Puphpeteer\Resources\ElementHandle|mixed[]|null waitForSelector(mixed $selector, array $options = [])
 * @method-extended \Nesk\Puphpeteer\Resources\ElementHandle|mixed[]|null waitForSelector(mixed $selector, array<string, mixed> $options = null)
 * @method bool isVisible()
 * @method-extended bool isVisible()
 * @method bool isHidden()
 * @method-extended bool isHidden()
 * @method mixed toElement(mixed $tagName)
 * @method-extended mixed toElement(mixed $tagName)
 * @method \Nesk\Puphpeteer\Resources\Frame|null contentFrame()
 * @method-extended \Nesk\Puphpeteer\Resources\Frame|null contentFrame()
 * @method mixed clickablePoint(mixed $offset = null)
 * @method-extended mixed clickablePoint(mixed $offset = null)
 * @method void hover(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method-extended void hover(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method void click(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, mixed $options = null)
 * @method-extended void click(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, mixed $options = null)
 * @method mixed|null drag(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, mixed|\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $target)
 * @method-extended mixed|null drag(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, mixed|\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $target)
 * @method void dragEnter(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, mixed $data = null)
 * @method-extended void dragEnter(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, mixed $data = null)
 * @method void dragOver(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, mixed $data = null)
 * @method-extended void dragOver(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, mixed $data = null)
 * @method void drop(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, mixed $data = null)
 * @method-extended void drop(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, mixed $data = null)
 * @method void dragAndDrop(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, \Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $target, array $options = [])
 * @method-extended void dragAndDrop(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, \Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $target, array{ $delay: float } $options = null)
 * @method string[] select(string ...$values)
 * @method-extended string[] select(string ...$values)
 * @method void uploadFile(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, string ...$paths)
 * @method-extended void uploadFile(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, string ...$paths)
 * @method mixed queryAXTree(string $name = null, string $role = null)
 * @method-extended mixed queryAXTree(string $name = null, string $role = null)
 * @method void tap(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method-extended void tap(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method void touchStart(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method-extended void touchStart(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method void touchMove(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method-extended void touchMove(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method void touchEnd(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method-extended void touchEnd(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method void focus()
 * @method-extended void focus()
 * @method void type(string $text, mixed $options = null)
 * @method-extended void type(string $text, mixed $options = null)
 * @method void press(mixed $key, mixed $options = null)
 * @method-extended void press(mixed $key, mixed $options = null)
 * @method mixed|null boundingBox()
 * @method-extended mixed|null boundingBox()
 * @method mixed|null boxModel()
 * @method-extended mixed|null boxModel()
 * @method mixed screenshot(mixed $options = null)
 * @method-extended mixed screenshot(mixed $options = null)
 * @method bool isIntersectingViewport(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, array $options = [])
 * @method-extended bool isIntersectingViewport(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector, array{ $threshold: float } $options = null)
 * @method void scrollIntoView(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method-extended void scrollIntoView(\Nesk\Puphpeteer\Resources\ElementHandle|mixed[] $selector)
 * @method void autofill(mixed $data)
 * @method-extended void autofill(mixed $data)
 */
class ElementHandle extends JSHandle
{
    use AliasesEvaluationMethods;
    use AliasesSelectionMethods;
}
