<?php

namespace Stc\ScraperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ScrapeContentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('headers')
            ->add('data');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Stc\ScraperBundle\Entity\ScrapeContent'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'stc_scraperbundle_scrapecontenttype';
    }
}
