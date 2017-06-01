<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0a0cabb643b7498f0ddafd2eb9119e8f75ab953dde6b264f6d82285fd9faa824 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c61ab30363e022c0bf7265a1e4380cb71f8d40d0dce8b8b8332d3e1947e67731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61ab30363e022c0bf7265a1e4380cb71f8d40d0dce8b8b8332d3e1947e67731->enter($__internal_c61ab30363e022c0bf7265a1e4380cb71f8d40d0dce8b8b8332d3e1947e67731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c61ab30363e022c0bf7265a1e4380cb71f8d40d0dce8b8b8332d3e1947e67731->leave($__internal_c61ab30363e022c0bf7265a1e4380cb71f8d40d0dce8b8b8332d3e1947e67731_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_94a5b67e81d307108f69d650e7c7205bd744fb15266a0c433ab4db15de9dbbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a5b67e81d307108f69d650e7c7205bd744fb15266a0c433ab4db15de9dbbda->enter($__internal_94a5b67e81d307108f69d650e7c7205bd744fb15266a0c433ab4db15de9dbbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_94a5b67e81d307108f69d650e7c7205bd744fb15266a0c433ab4db15de9dbbda->leave($__internal_94a5b67e81d307108f69d650e7c7205bd744fb15266a0c433ab4db15de9dbbda_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
