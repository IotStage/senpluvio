<?php

/* AWSMonitoringBundle:Default:index.html.twig */
class __TwigTemplate_e862dda5341b14f9e36e821a846c9c6ba203e4b07a5f46012651ea23c89b3b94 extends Twig_Template
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
        $__internal_69a3c6395ebc2012d597712f6ee5518be6adc7abc15d8aab3da3e3efd34a7086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a3c6395ebc2012d597712f6ee5518be6adc7abc15d8aab3da3e3efd34a7086->enter($__internal_69a3c6395ebc2012d597712f6ee5518be6adc7abc15d8aab3da3e3efd34a7086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AWSMonitoringBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_69a3c6395ebc2012d597712f6ee5518be6adc7abc15d8aab3da3e3efd34a7086->leave($__internal_69a3c6395ebc2012d597712f6ee5518be6adc7abc15d8aab3da3e3efd34a7086_prof);

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
