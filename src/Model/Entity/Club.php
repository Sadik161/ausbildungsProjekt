<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Club Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $adress
 * @property int|null $coach_id
 * @property int|null $teams_id
 *
 * @property \App\Model\Entity\Coach $coach
 * @property \App\Model\Entity\Team $team
 */
class Club extends Entity
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
		'adress' => true,
		'coach_id' => true,
		'teams_id' => true,
		'coach' => true,
		'team' => true,
	];
}
