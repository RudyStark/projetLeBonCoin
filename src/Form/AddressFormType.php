<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('street', TextType::class, [
				'label' => 'Street',
				'attr' => [
					'placeholder' => 'Street',
				],
			])
            ->add('city', TextType::class, [
				'label' => 'City',
	            'attr' => [
					'placeholder' => 'City',
				],
			])
            ->add('zip', IntegerType::class, [
				'label' => 'Zip',
	            'attr' => [
					'placeholder' => 'Zip',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
