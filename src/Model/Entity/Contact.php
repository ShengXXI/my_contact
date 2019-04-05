<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $gender
 * @property \Cake\I18n\FrozenTime $birthday
 * @property string $address
 * @property string|null $bank_account_id
 * @property string|null $bank_branch_id
 * @property string|null $avatar
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $updated
 *
 * @property \App\Model\Entity\BankAccount $bank_account
 * @property \App\Model\Entity\BankBranch $bank_branch
 * @property \App\Model\Entity\GroupContact[] $group_contacts
 */
class Contact extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'gender' => true,
        'birthday' => true,
        'address' => true,
        'bank_account_id' => true,
        'bank_branch_id' => true,
        'avatar' => true,
        'created' => true,
        'updated' => true,
        'bank_account' => true,
        'bank_branch' => true,
        'group_contacts' => true
    ];
}
