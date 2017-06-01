<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3046b212c39ff650791482dab36bae5bdd57b3c43b641507690b10e68871ddde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_a1aacf03e6e156e601bf179cc9359e5bc8659d191cf0d535a5e764a9f7b85efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1aacf03e6e156e601bf179cc9359e5bc8659d191cf0d535a5e764a9f7b85efa->enter($__internal_a1aacf03e6e156e601bf179cc9359e5bc8659d191cf0d535a5e764a9f7b85efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1aacf03e6e156e601bf179cc9359e5bc8659d191cf0d535a5e764a9f7b85efa->leave($__internal_a1aacf03e6e156e601bf179cc9359e5bc8659d191cf0d535a5e764a9f7b85efa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c0517c1a728dc4bb50d5a827e1deb3a7d7dd05452c720055cc447583a856bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0517c1a728dc4bb50d5a827e1deb3a7d7dd05452c720055cc447583a856bee->enter($__internal_6c0517c1a728dc4bb50d5a827e1deb3a7d7dd05452c720055cc447583a856bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6c0517c1a728dc4bb50d5a827e1deb3a7d7dd05452c720055cc447583a856bee->leave($__internal_6c0517c1a728dc4bb50d5a827e1deb3a7d7dd05452c720055cc447583a856bee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_db03264dee5a0e599cc7fa208eb23670b61a750c54492e3da75d6354f6b00180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db03264dee5a0e599cc7fa208eb23670b61a750c54492e3da75d6354f6b00180->enter($__internal_db03264dee5a0e599cc7fa208eb23670b61a750c54492e3da75d6354f6b00180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_db03264dee5a0e599cc7fa208eb23670b61a750c54492e3da75d6354f6b00180->leave($__internal_db03264dee5a0e599cc7fa208eb23670b61a750c54492e3da75d6354f6b00180_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2138e07aa5b59d3ae7803da08b1b0d5dc804fd8f3f78faf0c44d6499fd3eb78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2138e07aa5b59d3ae7803da08b1b0d5dc804fd8f3f78faf0c44d6499fd3eb78e->enter($__internal_2138e07aa5b59d3ae7803da08b1b0d5dc804fd8f3f78faf0c44d6499fd3eb78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2138e07aa5b59d3ae7803da08b1b0d5dc804fd8f3f78faf0c44d6499fd3eb78e->leave($__internal_2138e07aa5b59d3ae7803da08b1b0d5dc804fd8f3f78faf0c44d6499fd3eb78e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
