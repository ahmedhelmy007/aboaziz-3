<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SermonType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('chainId')->add('categoryId')->add('fridaySermon')->add('title')->add('description')->add('sermonDate')->add('hijriDate')->add('place')->add('elements')->add('imagePath')->add('imageAlt')->add('rmPath')->add('ramPath')->add('mp3Path')->add('videoPath')->add('amrPath')->add('file3gpPath')->add('created')->add('modified')->add('sermonStatus');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Sermon'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_sermon';
    }


}
