<?php

namespace MorgenBord\WallabagWidgetBundle;

use App\Entity\Widget;
use App\Event\RegisterWidgetEvent;
use App\Interfaces\ParametersFormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class OtherWidgetParameters implements ParametersFormTypeInterface
{
    public const WIDGET_NAME = 'Other Demo Widget';
    public const WIDGET_SHORT_NAME = 'other_widget';
    public const TWIG_FILE = '@WallabagWidget/other_widget.html.twig';

    public function onMorningBordRegisterWidget(RegisterWidgetEvent $event)
    {
        $widget = new Widget();
        $widget->setName(self::WIDGET_NAME);
        $widget->setShortName(self::WIDGET_SHORT_NAME);
        $widget->setTwigFile(self::TWIG_FILE);
        $widget->setParameterFormFqcn(OtherWidgetParameters::class);
        
        $event->addWidget($widget);
    }

    public function createParametersForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('note', TextareaType::class, [
                'label' => 'Note',
                'required' => false,
            ])
        ;
    }
}