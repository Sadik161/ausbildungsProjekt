<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TeamsCoach Entity
 *
 * @property int $id
 * @property int|null $coach_id
 * @property int|null $team_id
 *
 * @property \App\Model\Entity\Coach $coach
 * @property \App\Model\Entity\Team $team
 */
class TeamsCoach extends Entity
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
        'coach_id' => true,
        'team_id' => true,
        'coach' => true,
        'team' => true,
    ];
}
