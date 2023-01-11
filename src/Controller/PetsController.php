<?php
namespace App\Controller;



class PetsController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);
    // Configure the login action to not require authentication, preventing
    // the infinite redirect loop issue
    $this->Authentication->addUnauthenticatedActions(['login', 'view','register']);}

    public function view($name)
    {
        $petsTable = $this->fetchTable("pets");
        $pet = $petsTable->find()->where(['name' => $name])->first();
        
        $this->set(compact('pet'));
    }


    
}
