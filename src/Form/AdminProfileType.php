<?php

namespace App\Form;

use App\Entity\LogInUsers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class AdminProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Email field mapped to the entity
            ->add('email', EmailType::class, [
                'label' => 'Login Email',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Enter your email',
                ],
            ])
            
            // Password fields NOT mapped to entity directly
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false, // password is handled manually
                'required' => false, // leave blank if not changing
                'first_options' => [
                    'label' => 'New Password',
                    'attr' => [
                        'placeholder' => 'Enter new password (leave blank to keep current)',
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirm New Password',
                    'attr' => [
                        'placeholder' => 'Confirm new password',
                    ],
                ],
                'invalid_message' => 'The password fields must match.',
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LogInUsers::class,
        ]);
    }
}
