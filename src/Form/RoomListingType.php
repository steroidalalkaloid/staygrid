<?php
// src/Form/RoomListingType.php

namespace App\Form;

use App\Entity\RoomListing;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType; // For image upload
use Symfony\Component\Validator\Constraints\File;

class RoomListingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('category', ChoiceType::class, [
                'label' => 'Room Category',
                'choices' => [
                    'Studio Deluxe' => 'Studio Deluxe',
                    'Executive Suite' => 'Executive Suite',
                    'Family Apartment' => 'Family Apartment',
                    'Other' => 'Other',
                ],
                'placeholder' => '--- Select a Category ---',
                'required' => false,
            ])
            ->add('number', TextType::class, [
                'label' => 'Room Number/Code',
                'attr' => ['placeholder' => 'e.g. 343223'],
            ])
            ->add('pricePerNight', NumberType::class, [
                'label' => 'Price Per Night ($)',
                'html5' => true,
            ])
            ->add('capacity', NumberType::class, [
                'label' => 'Max Capacity (Guests)',
                'html5' => true,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
            ])
            ->add('isAvailable', CheckboxType::class, [
                'label' => 'Room is currently available?',
                'required' => false,
            ])
            ->add('image', FileType::class, [
                'label' => 'Room Image',
                'mapped' => false, // This field is not directly mapped to the entity
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file (JPEG, PNG, WebP)',
                    ])
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RoomListing::class,
        ]);
    }
}
