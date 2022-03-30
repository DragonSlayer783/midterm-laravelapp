<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class EquipmentinfoForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('name', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Full Name'
        ])
            ->add('model_year', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Model Year'
            ])
            ->add('speed', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Speed'
            ])
            ->add('manu_id', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Manufactuer ID'
            ])
            ->add('submit', 'submit',[
                'label' => 'Submit'
            ]);
    }
}
