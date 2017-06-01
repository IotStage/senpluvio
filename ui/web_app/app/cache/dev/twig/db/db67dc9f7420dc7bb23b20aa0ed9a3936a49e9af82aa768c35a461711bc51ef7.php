<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_6c4b700cb2a6ac3c45403d5ac1b38fda7c7e959bcaabcf740befa6f15d49f4d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_260ad80596ff13a9a5e7c32ba3b68c326990962fe0d05180763081950de090ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260ad80596ff13a9a5e7c32ba3b68c326990962fe0d05180763081950de090ca->enter($__internal_260ad80596ff13a9a5e7c32ba3b68c326990962fe0d05180763081950de090ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_260ad80596ff13a9a5e7c32ba3b68c326990962fe0d05180763081950de090ca->leave($__internal_260ad80596ff13a9a5e7c32ba3b68c326990962fe0d05180763081950de090ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae5ba1f6d92c289e3241977dee7298ce59e457e3a65ce50b5c1505148c7267fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5ba1f6d92c289e3241977dee7298ce59e457e3a65ce50b5c1505148c7267fe->enter($__internal_ae5ba1f6d92c289e3241977dee7298ce59e457e3a65ce50b5c1505148c7267fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ae5ba1f6d92c289e3241977dee7298ce59e457e3a65ce50b5c1505148c7267fe->leave($__internal_ae5ba1f6d92c289e3241977dee7298ce59e457e3a65ce50b5c1505148c7267fe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f265c50f6e93151f30d9f7ba5668d327e523f64870061c991628c9cabeb8b383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f265c50f6e93151f30d9f7ba5668d327e523f64870061c991628c9cabeb8b383->enter($__internal_f265c50f6e93151f30d9f7ba5668d327e523f64870061c991628c9cabeb8b383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f265c50f6e93151f30d9f7ba5668d327e523f64870061c991628c9cabeb8b383->leave($__internal_f265c50f6e93151f30d9f7ba5668d327e523f64870061c991628c9cabeb8b383_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_385adfda839f9ebd0943f0317c389820cd35215138ccdbb40c92268c3cb7791a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385adfda839f9ebd0943f0317c389820cd35215138ccdbb40c92268c3cb7791a->enter($__internal_385adfda839f9ebd0943f0317c389820cd35215138ccdbb40c92268c3cb7791a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_385adfda839f9ebd0943f0317c389820cd35215138ccdbb40c92268c3cb7791a->leave($__internal_385adfda839f9ebd0943f0317c389820cd35215138ccdbb40c92268c3cb7791a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_734e01768fb95ccf13d7de5317b95ab70331f64476f51daf79accb95c13fd6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734e01768fb95ccf13d7de5317b95ab70331f64476f51daf79accb95c13fd6ff->enter($__internal_734e01768fb95ccf13d7de5317b95ab70331f64476f51daf79accb95c13fd6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_734e01768fb95ccf13d7de5317b95ab70331f64476f51daf79accb95c13fd6ff->leave($__internal_734e01768fb95ccf13d7de5317b95ab70331f64476f51daf79accb95c13fd6ff_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
