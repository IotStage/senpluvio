<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f40708491d9af06bc043f6e5009dc3f57434196e8d44f82028041f41af5eef38 extends Twig_Template
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
        $__internal_f754851e9fe7d25c974f318b70624348e3b3a3c4bb09dd50d95ced8fd233bb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f754851e9fe7d25c974f318b70624348e3b3a3c4bb09dd50d95ced8fd233bb8e->enter($__internal_f754851e9fe7d25c974f318b70624348e3b3a3c4bb09dd50d95ced8fd233bb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f754851e9fe7d25c974f318b70624348e3b3a3c4bb09dd50d95ced8fd233bb8e->leave($__internal_f754851e9fe7d25c974f318b70624348e3b3a3c4bb09dd50d95ced8fd233bb8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
