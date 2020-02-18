<?php

namespace Drupal\islandora\Plugin\ContextReaction;

use Drupal\islandora\PresetReaction\PresetReaction;

/**
 * Unpublish context reaction.
 *
 * @ContextReaction(
 *   id = "unpublish_reaction",
 *   label = @Translation("Index")
 * )
 */
class UnpublishReaction extends PresetReaction {}
