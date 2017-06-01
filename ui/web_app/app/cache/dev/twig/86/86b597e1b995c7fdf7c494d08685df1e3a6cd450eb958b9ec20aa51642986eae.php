<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9039bf570d387d836750decfe27f05fd2c040d1bae18848b6f7525dd27b92476 extends Twig_Template
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
        $__internal_4c7671c97f22d8ee9e14229c139cbcfb40a612c6e3dc5eabc27dca452a989087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7671c97f22d8ee9e14229c139cbcfb40a612c6e3dc5eabc27dca452a989087->enter($__internal_4c7671c97f22d8ee9e14229c139cbcfb40a612c6e3dc5eabc27dca452a989087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4c7671c97f22d8ee9e14229c139cbcfb40a612c6e3dc5eabc27dca452a989087->leave($__internal_4c7671c97f22d8ee9e14229c139cbcfb40a612c6e3dc5eabc27dca452a989087_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
