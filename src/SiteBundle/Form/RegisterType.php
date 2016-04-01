<?php

namespace SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegisterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("username",  TextType::class, array(
                "label"=>false,
                'attr'=>array('placeholder'=>'Login')
            ))
            ->add("password", RepeatedType::class, array(
                        'type' => PasswordType::class,
                        'invalid_message' => 'Hasła muszą być takie same.',
                        'first_options'  => array('label' => false, 'attr'=>array('placeholder'=>'Hasło')),
                        'second_options' => array('label' => false, 'attr'=>array('placeholder'=>'Powtórz'))))
            ->add("email", EmailType::class, array(
                "label"=>false,
                'attr'=>array('placeholder'=>'E-mail')
            ))
            ->add("save", SubmitType::class, array(
                "label"=>"Zarejestruj",
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SiteBundle\Entity\User'
        ));
    }

    public function getName() {
        return "user_register_type";
    }

}
