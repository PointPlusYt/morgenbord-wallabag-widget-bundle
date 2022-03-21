<?php

namespace MorgenBord\WallabagWidgetBundle;

use App\Entity\Widget;
use App\Event\RegisterWidgetEvent;
use App\Interfaces\ParametersFormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class WallabagWidgetParameters implements ParametersFormTypeInterface
{
    public const WIDGET_NAME = 'Wallabag Widget';
    public const WIDGET_SHORT_NAME = 'wallabag_widget';
    public const TWIG_FILE = '@WallabagWidget/widget.html.twig';

    public function onMorningBordRegisterWidget(RegisterWidgetEvent $event)
    {
        $widget = new Widget();
        $widget->setName(self::WIDGET_NAME);
        $widget->setShortName(self::WIDGET_SHORT_NAME);
        $widget->setTwigFile(self::TWIG_FILE);
        $widget->setParameterFormFqcn(WallabagWidgetBundle::class);
        
        $event->addWidget($widget);
    }
    
    public function createParametersForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('apikey', TextType::class, [
                'label' => 'Clé API',
                'required' => false,
            ])
        ;
    }
}