<?php
/**
 * Created by PhpStorm.
 * User: Sarra
 * Date: 02/01/2017
 * Time: 02:12
 */

namespace UtilisateurBundle\Form;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;

class ProRegistrationType extends RegistrationFormType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('boutique', null,[
                "label"=> "Nom du boutique"
            ])
            ->add('categorie', null,[
                "label"=> "Catégorie"
            ])
        ;
    }


    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'user_pro_registration';
    }
}