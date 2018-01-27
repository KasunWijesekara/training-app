<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $mainimage
 * @property \Cake\I18n\FrozenTime $created
 * @property bool $status
 *
 * @property \App\Model\Entity\Brochure[] $brochures
 * @property \App\Model\Entity\Quotation[] $quotations
 * @property \App\Model\Entity\Registration[] $registrations
 */
class Course extends Entity
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
        'title' => true,
        'description' => true,
        'mainimage' => true,
        'created' => true,
        'status' => true,
        'brochures' => true,
        'quotations' => true,
        'registrations' => true
    ];
}
