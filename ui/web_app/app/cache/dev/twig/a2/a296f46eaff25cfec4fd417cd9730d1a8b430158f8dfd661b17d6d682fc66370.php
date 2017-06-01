<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_47ca1acf2cb9f2e866574738c07b71ea5dd0c084111624ac28366c80a9c2e37b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_cac956076df46cf64ecaf57341f88428a27ba6b670417d6512740f23ccc2a251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac956076df46cf64ecaf57341f88428a27ba6b670417d6512740f23ccc2a251->enter($__internal_cac956076df46cf64ecaf57341f88428a27ba6b670417d6512740f23ccc2a251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cac956076df46cf64ecaf57341f88428a27ba6b670417d6512740f23ccc2a251->leave($__internal_cac956076df46cf64ecaf57341f88428a27ba6b670417d6512740f23ccc2a251_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d3196f3dd61fd49d67dcdf80d60bf375a8a135216ba8a7ab21fa42a7861e517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3196f3dd61fd49d67dcdf80d60bf375a8a135216ba8a7ab21fa42a7861e517->enter($__internal_4d3196f3dd61fd49d67dcdf80d60bf375a8a135216ba8a7ab21fa42a7861e517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4d3196f3dd61fd49d67dcdf80d60bf375a8a135216ba8a7ab21fa42a7861e517->leave($__internal_4d3196f3dd61fd49d67dcdf80d60bf375a8a135216ba8a7ab21fa42a7861e517_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4038bfb79dbb58d717c34724e43756110f5ad0ba94ef7bcda950652b5e9d2094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4038bfb79dbb58d717c34724e43756110f5ad0ba94ef7bcda950652b5e9d2094->enter($__internal_4038bfb79dbb58d717c34724e43756110f5ad0ba94ef7bcda950652b5e9d2094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4038bfb79dbb58d717c34724e43756110f5ad0ba94ef7bcda950652b5e9d2094->leave($__internal_4038bfb79dbb58d717c34724e43756110f5ad0ba94ef7bcda950652b5e9d2094_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
