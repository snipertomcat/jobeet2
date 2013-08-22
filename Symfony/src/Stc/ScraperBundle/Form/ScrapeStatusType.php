<?php

namespace Stc\ScraperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ScrapeStatusType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url')
            ->add('content_type')
            ->add('http_code')
            ->add('header_size')
            ->add('request_size')
            ->add('filetime')
            ->add('ssl_verify_result')
            ->add('redirect_count')
            ->add('total_time')
            ->add('namelookup_time')
            ->add('connect_time')
            ->add('pretransfer_time')
            ->add('size_upload')
            ->add('size_download')
            ->add('speed_download')
            ->add('speed_upload')
            ->add('download_content_length')
            ->add('upload_content_length')
            ->add('starttransfer_time')
            ->add('redirect_time')
            ->add('certinfo')
            ->add('primary_ip')
            ->add('primary_port')
            ->add('local_ip')
            ->add('local_port')
            ->add('redirect_url')
            ->add('created_at')
            ->add('updated_at')
            ->add('scrapecontent');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Stc\ScraperBundle\Entity\ScrapeStatus'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'stc_scraperbundle_scrapestatustype';
    }
}
