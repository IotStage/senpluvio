<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9fb006fd3f8053c79e3849a45f647a4e4cd53074fe112021efc84617d8dbbb5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24e6849f47568638433eef8e72cc413bb9d3e329f92b4a11a72ab69fd3a16ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e6849f47568638433eef8e72cc413bb9d3e329f92b4a11a72ab69fd3a16ac4->enter($__internal_24e6849f47568638433eef8e72cc413bb9d3e329f92b4a11a72ab69fd3a16ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_24e6849f47568638433eef8e72cc413bb9d3e329f92b4a11a72ab69fd3a16ac4->leave($__internal_24e6849f47568638433eef8e72cc413bb9d3e329f92b4a11a72ab69fd3a16ac4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
