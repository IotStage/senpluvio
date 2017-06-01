<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a72086a20c58262f5cdd3d5f63b61819f37617d266dd31bd7fb9d56960052892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7234118e0b75bcc957bf44eccf58a4c2eb41b3f1ce95b1c573623593c1631431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7234118e0b75bcc957bf44eccf58a4c2eb41b3f1ce95b1c573623593c1631431->enter($__internal_7234118e0b75bcc957bf44eccf58a4c2eb41b3f1ce95b1c573623593c1631431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7234118e0b75bcc957bf44eccf58a4c2eb41b3f1ce95b1c573623593c1631431->leave($__internal_7234118e0b75bcc957bf44eccf58a4c2eb41b3f1ce95b1c573623593c1631431_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ec0addaecb9b6053b9af0927b49a1bf6fcd0e0a1f38188979d5e355de2c68dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec0addaecb9b6053b9af0927b49a1bf6fcd0e0a1f38188979d5e355de2c68dd->enter($__internal_5ec0addaecb9b6053b9af0927b49a1bf6fcd0e0a1f38188979d5e355de2c68dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5ec0addaecb9b6053b9af0927b49a1bf6fcd0e0a1f38188979d5e355de2c68dd->leave($__internal_5ec0addaecb9b6053b9af0927b49a1bf6fcd0e0a1f38188979d5e355de2c68dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_522020d4d14b90e17b2ee68e5e94805efe9cb6ef2271cc5b98c984908c9949d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522020d4d14b90e17b2ee68e5e94805efe9cb6ef2271cc5b98c984908c9949d9->enter($__internal_522020d4d14b90e17b2ee68e5e94805efe9cb6ef2271cc5b98c984908c9949d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_522020d4d14b90e17b2ee68e5e94805efe9cb6ef2271cc5b98c984908c9949d9->leave($__internal_522020d4d14b90e17b2ee68e5e94805efe9cb6ef2271cc5b98c984908c9949d9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bec1950cb931bdfbe7f852fa76e572b1221edc0a4659598322eacdf22a0552e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bec1950cb931bdfbe7f852fa76e572b1221edc0a4659598322eacdf22a0552e->enter($__internal_1bec1950cb931bdfbe7f852fa76e572b1221edc0a4659598322eacdf22a0552e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1bec1950cb931bdfbe7f852fa76e572b1221edc0a4659598322eacdf22a0552e->leave($__internal_1bec1950cb931bdfbe7f852fa76e572b1221edc0a4659598322eacdf22a0552e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
