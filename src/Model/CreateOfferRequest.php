<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class CreateOfferRequest extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'ean' => [ 'model' => null, 'array' => false ],
            'condition' => [ 'model' => Condition::class, 'array' => false ],
            'reference' => [ 'model' => null, 'array' => false ],
            'onHoldByRetailer' => [ 'model' => null, 'array' => false ],
            'unknownProductTitle' => [ 'model' => null, 'array' => false ],
            'pricing' => [ 'model' => Pricing::class, 'array' => false ],
            'stock' => [ 'model' => StockCreate::class, 'array' => false ],
            'fulfilment' => [ 'model' => Fulfilment::class, 'array' => false ],
        ];
    }

    /**
     * @var string The EAN number associated with this product. Note: in case an ISBN is provided, the ISBN will be
     * replaced with the actual EAN belonging to this ISBN.
     */
    public $ean;

    /**
     * @var Condition
     */
    public $condition;

    /**
     * @var string A user-defined reference that helps you identify this particular offer when receiving data from us.
     * This element can optionally be left empty and has a maximum amount of 20 characters.
     */
    public $reference;

    /**
     * @var bool Indicates whether or not you want to put this offer for sale on the bol.com website. Defaults to false.
     */
    public $onHoldByRetailer;

    /**
     * @var string In case the item is not known to bol.com you can use this field to identify this particular product.
     * Note: in case the product is known to bol.com, the unknown product title will not be stored.
     */
    public $unknownProductTitle;

    /**
     * @var Pricing
     */
    public $pricing;

    /**
     * @var StockCreate
     */
    public $stock;

    /**
     * @var Fulfilment
     */
    public $fulfilment;
}
