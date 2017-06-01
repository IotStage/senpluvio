<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_666705acd448152eb19f211690e28465fcaecdb709f9ce7cfab310b2cb332e8e extends Twig_Template
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
        $__internal_3cad1d9741aae1b7cd6ae7c14dc8813c41ef593734d2dac6349a415b306dc606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cad1d9741aae1b7cd6ae7c14dc8813c41ef593734d2dac6349a415b306dc606->enter($__internal_3cad1d9741aae1b7cd6ae7c14dc8813c41ef593734d2dac6349a415b306dc606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3cad1d9741aae1b7cd6ae7c14dc8813c41ef593734d2dac6349a415b306dc606->leave($__internal_3cad1d9741aae1b7cd6ae7c14dc8813c41ef593734d2dac6349a415b306dc606_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
