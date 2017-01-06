<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kokyodb Entity
 *
 * @property int $id
 * @property string $category
 * @property string $subcategory
 * @property string $scientific_name
 * @property string $japanese_name
 * @property string $class_taxon
 * @property string $class_taxon_ja
 * @property string $order_taxon
 * @property string $order_taxon_ja
 * @property string $family
 * @property string $family_ja
 * @property string $subfamily
 * @property string $subfamily_ja
 * @property bool $first_survey
 * @property bool $monitor_survey
 * @property bool $second_survey
 * @property string $redlist_moe
 * @property string $redlist_tokyo
 * @property string $bibiliographies
 * @property string $notes
 * @property string $link_url
 */
class Kokyodb extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
