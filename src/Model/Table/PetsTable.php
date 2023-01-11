<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PetsTable extends Table
{

    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->belongsTo('Users', [
            'className' => 'Users',
            'foreignKey' => 'users_id'
        ]);
    }
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->requirePresence('name', 'create')
            ->notEmptyString('name','Name Should not be Empty')
            ->add('name', [
                'unique' => [
                    'rule' => 'validateUnique',
                    'provider' => 'table',
                    'message' => 'Name already exist'
                ],
                'minLength' => [
                    'rule' => ['minLength', 2],
                    'message' => 'Name should be at least 2 characters'
                ]
            ])
            ->requirePresence('type', 'create')
            ->notEmptyString('type', 'Type should not be left empty');
        return $validator;
    }


}