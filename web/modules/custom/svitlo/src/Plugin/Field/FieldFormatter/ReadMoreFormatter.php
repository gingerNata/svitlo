<?php
/**
 * Created by PhpStorm.
 * User: nata
 * Date: 02.07.18
 * Time: 15:12
 */

namespace Drupal\svitlo\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'ReadMore' formatter.
 *
 * @FieldFormatter(
 *   id = "ReadMore",
 *   label = @Translation("Read more"),
 *   field_types = {
 *     "text_long"
 *   }
 * )
 */
class ReadMoreFormatter extends FormatterBase {


  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    $summary[] = $this->t('Add read more link.');
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      // Render each element as markup.
      $text = $this->t("Text of song");
      $button = "<a href='#' id='read-more' class='arrow-down'>$text</a>";
      $element[$delta] = ['#markup' => $button . '<div class="hidden-text">' . $item->value . '</div>'];
      $element[$delta]['#attached']['library'][] =  'svitlo/svitlo';
    }

    return $element;
  }

}