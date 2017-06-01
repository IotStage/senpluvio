<?php

/* AWSMonitoringBundle:Default:index.html.twig */
class __TwigTemplate_c4482f236c12b6dc05207656a9732f262934d7674cd05ad4c2c1be1c65d192e6 extends Twig_Template
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
        $__internal_118a74276d2742ebe6c321cb71f672005d4015b594f1e7c8cd71e5cc0d91cb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118a74276d2742ebe6c321cb71f672005d4015b594f1e7c8cd71e5cc0d91cb38->enter($__internal_118a74276d2742ebe6c321cb71f672005d4015b594f1e7c8cd71e5cc0d91cb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AWSMonitoringBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_118a74276d2742ebe6c321cb71f672005d4015b594f1e7c8cd71e5cc0d91cb38->leave($__internal_118a74276d2742ebe6c321cb71f672005d4015b594f1e7c8cd71e5cc0d91cb38_prof);

    }

    public function getTemplateName()
    {
        return "AWSMonitoringBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AWSMonitoringBundle:Default:index.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/src/AWS/MonitoringBundle/Resources/views/Default/index.html.twig");
    }
}
