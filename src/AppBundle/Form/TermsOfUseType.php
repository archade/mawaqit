<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;


class TermsOfUseType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('save', SubmitType::class, [
                'label' => "tou.label" ,
                'attr' => [
                    'class' => 'btn btn-primary btn-lg',
                ]
            ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }

}
