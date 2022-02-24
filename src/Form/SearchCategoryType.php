<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\SearchByCategory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('category',EntityType::class,['class' => Category::class,
        'choice_label' => 'title' ,
        'label' => 'Catégorie' ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SearchByCategory::class,
        ]);
    }
}