<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2c7aa22622668e9bdc93641eae6deb06d2edbb57fcafe6fd600be83ea2cd07e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b02aa4a96d96d962aea6d9862c5613e2834984c174fa750e71e05a8ae7a9879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b02aa4a96d96d962aea6d9862c5613e2834984c174fa750e71e05a8ae7a9879->enter($__internal_5b02aa4a96d96d962aea6d9862c5613e2834984c174fa750e71e05a8ae7a9879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b02aa4a96d96d962aea6d9862c5613e2834984c174fa750e71e05a8ae7a9879->leave($__internal_5b02aa4a96d96d962aea6d9862c5613e2834984c174fa750e71e05a8ae7a9879_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a35c067699720784804b34f6a9f5ad73aa31477a7667ce3636e2f04e1afa493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a35c067699720784804b34f6a9f5ad73aa31477a7667ce3636e2f04e1afa493->enter($__internal_4a35c067699720784804b34f6a9f5ad73aa31477a7667ce3636e2f04e1afa493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a35c067699720784804b34f6a9f5ad73aa31477a7667ce3636e2f04e1afa493->leave($__internal_4a35c067699720784804b34f6a9f5ad73aa31477a7667ce3636e2f04e1afa493_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84a3e36ca1c73c478c04d512808b5449d02e381504f4e02cc0d9e888dd41e6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a3e36ca1c73c478c04d512808b5449d02e381504f4e02cc0d9e888dd41e6c9->enter($__internal_84a3e36ca1c73c478c04d512808b5449d02e381504f4e02cc0d9e888dd41e6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84a3e36ca1c73c478c04d512808b5449d02e381504f4e02cc0d9e888dd41e6c9->leave($__internal_84a3e36ca1c73c478c04d512808b5449d02e381504f4e02cc0d9e888dd41e6c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70ef0c753c01adc541eb7be5e5d176bd6ef1da2e9563c55519cd7fa98837fbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ef0c753c01adc541eb7be5e5d176bd6ef1da2e9563c55519cd7fa98837fbc8->enter($__internal_70ef0c753c01adc541eb7be5e5d176bd6ef1da2e9563c55519cd7fa98837fbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_70ef0c753c01adc541eb7be5e5d176bd6ef1da2e9563c55519cd7fa98837fbc8->leave($__internal_70ef0c753c01adc541eb7be5e5d176bd6ef1da2e9563c55519cd7fa98837fbc8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
