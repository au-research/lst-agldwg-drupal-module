<?php

namespace Drupal\lst_agldwg\Plugin\TypedDataFilter;

use Drupal\Core\Render\BubbleableMetadata;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\TypedData\DataDefinitionInterface;
use Drupal\Core\TypedData\Type\StringInterface;
use Drupal\typed_data\DataFilterBase;

use Drupal\Core\Entity\TypedData\EntityDataDefinitionInterface;

/**
 * A data filter which gets the email address of a comment's parent,
 * if there is one, or an empty string otherwise.
 *
 * @DataFilter(
 *   id = "comment_parent_email",
 *   label = @Translation("Get the email address of a comment's parent."),
 * )
 */
class FormatParentEmailFilter extends DataFilterBase {

    /**
     * {@inheritdoc}
     */
    public function canFilter(DataDefinitionInterface $definition) {
        return $definition->getDataType() == 'entity:comment';
    }

    /**
     * {@inheritdoc}
     */
    public function filtersTo(DataDefinitionInterface $definition,
                              array $arguments) {
        return DataDefinition::create('string');
    }

    /**
     * {@inheritdoc}
     */
    public function filter(DataDefinitionInterface $definition, $value,
                           array $arguments,
                           BubbleableMetadata $bubbleable_metadata = NULL) {
        if ($value->hasParentComment()) {
            $pc = $value->getParentComment();
            $ae = $pc->getAuthorEmail();
            return $ae;
        } else {
            // No parent comment.
            return '';
        }
  }

}
