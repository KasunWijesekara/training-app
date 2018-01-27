<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Brochure Entity
 *
 * @property int $id
 * @property int $course_id
 * @property string $title
 * @property string $pdffile
 * @property \Cake\I18n\FrozenTime $created
 * @property bool $status
 *
 * @property \App\Model\Entity\Course $course
 */
class Brochure extends Entity
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
        'course_id' => true,
        'title' => true,
        'pdffile' => true,
        'created' => true,
        'status' => true,
        'course' => true
    ];
}
