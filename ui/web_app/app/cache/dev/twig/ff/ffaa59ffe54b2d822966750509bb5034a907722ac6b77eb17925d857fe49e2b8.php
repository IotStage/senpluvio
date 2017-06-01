<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_01f80125a3db7de8d1e6d3342b4d2be216d64d7fbf4fea51074747670983f6a6 extends Twig_Template
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
        $__internal_034b63f19b447c4aad48a7b1086aa0f0d929aa4cd31b36a10fc4de275b751d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034b63f19b447c4aad48a7b1086aa0f0d929aa4cd31b36a10fc4de275b751d9f->enter($__internal_034b63f19b447c4aad48a7b1086aa0f0d929aa4cd31b36a10fc4de275b751d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_034b63f19b447c4aad48a7b1086aa0f0d929aa4cd31b36a10fc4de275b751d9f->leave($__internal_034b63f19b447c4aad48a7b1086aa0f0d929aa4cd31b36a10fc4de275b751d9f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8fa12be41bb5af243127480d424f12bdfd137340cba811573028e2623f8883db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa12be41bb5af243127480d424f12bdfd137340cba811573028e2623f8883db->enter($__internal_8fa12be41bb5af243127480d424f12bdfd137340cba811573028e2623f8883db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8fa12be41bb5af243127480d424f12bdfd137340cba811573028e2623f8883db->leave($__internal_8fa12be41bb5af243127480d424f12bdfd137340cba811573028e2623f8883db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a17f61ce46eb8b1f7d7377e58b1e7e8c8231ac1db5d7b1f99607569566d7d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a17f61ce46eb8b1f7d7377e58b1e7e8c8231ac1db5d7b1f99607569566d7d42->enter($__internal_3a17f61ce46eb8b1f7d7377e58b1e7e8c8231ac1db5d7b1f99607569566d7d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a17f61ce46eb8b1f7d7377e58b1e7e8c8231ac1db5d7b1f99607569566d7d42->leave($__internal_3a17f61ce46eb8b1f7d7377e58b1e7e8c8231ac1db5d7b1f99607569566d7d42_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a75cc3b763fd354644c1a31414a56c135fe14f0408a892c277df53b2a0c2dbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75cc3b763fd354644c1a31414a56c135fe14f0408a892c277df53b2a0c2dbbe->enter($__internal_a75cc3b763fd354644c1a31414a56c135fe14f0408a892c277df53b2a0c2dbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a75cc3b763fd354644c1a31414a56c135fe14f0408a892c277df53b2a0c2dbbe->leave($__internal_a75cc3b763fd354644c1a31414a56c135fe14f0408a892c277df53b2a0c2dbbe_prof);

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
