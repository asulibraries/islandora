<?php

namespace Drupal\islandora\Plugin\ContextReaction;

use Drupal\islandora\PresetReaction\PresetReaction;

/**
 * Unpublish context reaction.
 *
 * @ContextReaction(
 *   id = "unpublish_reaction",
 *   label = @Translation("Unpublish")
 * )
 */
class UnpublishReaction extends PresetReaction {}
