<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Registration Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $dob
 * @property string $phone
 * @property string $address
 * @property int $course_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Course $course
 */
class Registration extends Entity
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
        'name' => true,
        'email' => true,
        'dob' => true,
        'phone' => true,
        'address' => true,
        'course_id' => true,
        'created' => true,
        'course' => true
    ];
}