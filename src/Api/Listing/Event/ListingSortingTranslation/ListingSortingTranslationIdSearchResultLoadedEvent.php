<?php declare(strict_types=1);

namespace Shopware\Api\Listing\Event\ListingSortingTranslation;

use Shopware\Api\Entity\Search\IdSearchResult;
use Shopware\Context\Struct\TranslationContext;
use Shopware\Framework\Event\NestedEvent;

class ListingSortingTranslationIdSearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'listing_sorting_translation.id.search.result.loaded';

    /**
     * @var IdSearchResult
     */
    protected $result;

    public function __construct(IdSearchResult $result)
    {
        $this->result = $result;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): TranslationContext
    {
        return $this->result->getContext();
    }

    public function getResult(): IdSearchResult
    {
        return $this->result;
    }
}