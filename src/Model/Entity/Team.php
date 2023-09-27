<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity
 *
 * @property int $id
 * @property string|null $youth
 * @property int|null $total_players
 * @property string|null $time
 * @property int|null $field
 * @property int|null $club_id
 * @property string|null $team_link
 *
 * @property \App\Model\Entity\Coach[] $coaches
 * @property \App\Model\Entity\Club $club
 * @property \App\Model\Entity\Player[] $players
 */
class Team extends Entity
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
        'youth' => true,
        'total_players' => true,
        'time' => true,
        'field' => true,
        'club_id' => true,
        'team_link' => true,
        'coaches' => true,
        'club' => true,
        'players' => true,
    ];
}
