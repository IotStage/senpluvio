<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_a43cc37a4a77a9e184f6bb5d59e00fb864be02fc0a26b8dc33f6d0bd9913b3cf extends Twig_Template
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
        $__internal_8f027628e97e510f87e042ddf1e0d2e6ffa4bbf7d32dcd2e316293f1a11f7fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f027628e97e510f87e042ddf1e0d2e6ffa4bbf7d32dcd2e316293f1a11f7fd1->enter($__internal_8f027628e97e510f87e042ddf1e0d2e6ffa4bbf7d32dcd2e316293f1a11f7fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8f027628e97e510f87e042ddf1e0d2e6ffa4bbf7d32dcd2e316293f1a11f7fd1->leave($__internal_8f027628e97e510f87e042ddf1e0d2e6ffa4bbf7d32dcd2e316293f1a11f7fd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
