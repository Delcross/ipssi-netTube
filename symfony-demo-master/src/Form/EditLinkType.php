<?php

namespace App\Form;

use App\Entity\EditLink;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\DateTimeNow;

class EditLinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('createdAt')
            ->add('published')
            ->add('url')
            ->add('description')
            ->add('category')
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'firstname',
            ])
            ->add('submit', SubmitType::class) // Add a submit button
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EditLink::class,
        ]);
    }
}
