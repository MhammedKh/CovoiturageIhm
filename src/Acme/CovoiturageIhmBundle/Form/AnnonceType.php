<?php

namespace Acme\CovoiturageIhmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marqueVoiture')
            ->add('nombrePlace')
            ->add('prixPlace')
            ->add('dateDep')
            ->add('heureDep')
            ->add('villeDep')
            ->add('villeArr')
            ->add('lieuDep')
            ->add('commentaire')
            ->add('status')
            ->add('dateIns')
            ->add('fumeur')
            ->add('musique')
            ->add('discussion')
            ->add('idUtilisateur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\CovoiturageIhmBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_covoiturageihmbundle_annonce';
    }
}
