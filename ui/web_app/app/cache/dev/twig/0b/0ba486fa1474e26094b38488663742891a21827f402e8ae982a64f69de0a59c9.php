<?php

/* AWSExploitationBundle:Default:realtime.html.twig */
class __TwigTemplate_c9e9cb9b4f0f17e1e4440e83a3abf4432b1eab8529f5d607c4ef0f461c8fe95f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", "AWSExploitationBundle:Default:realtime.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adf61c49bac02e7c01064c5cf52c5fc1a37f7ceb8ae57bb7b11cf526608f0e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf61c49bac02e7c01064c5cf52c5fc1a37f7ceb8ae57bb7b11cf526608f0e4d->enter($__internal_adf61c49bac02e7c01064c5cf52c5fc1a37f7ceb8ae57bb7b11cf526608f0e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AWSExploitationBundle:Default:realtime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adf61c49bac02e7c01064c5cf52c5fc1a37f7ceb8ae57bb7b11cf526608f0e4d->leave($__internal_adf61c49bac02e7c01064c5cf52c5fc1a37f7ceb8ae57bb7b11cf526608f0e4d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cdda1c0ac40b4b47806eababc17534d684be7e2c052fc0e869382849af06401b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdda1c0ac40b4b47806eababc17534d684be7e2c052fc0e869382849af06401b->enter($__internal_cdda1c0ac40b4b47806eababc17534d684be7e2c052fc0e869382849af06401b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"col-xs-12 col-md-12 col-sm-12 col-lg-12\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-10 col-md-10 col-sm-7 col-lg-7\">
\t\t\t\t\t<div id=\"map\" class=\"map\"></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-10 col-md-10 col-sm-4 col-lg-4\">
\t\t\t\t\t<div></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_cdda1c0ac40b4b47806eababc17534d684be7e2c052fc0e869382849af06401b->leave($__internal_cdda1c0ac40b4b47806eababc17534d684be7e2c052fc0e869382849af06401b_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9aee2f5325a1152c3e4f1bbfd9dacec33b4d00a93948576f58c57cde4fae0ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aee2f5325a1152c3e4f1bbfd9dacec33b4d00a93948576f58c57cde4fae0ec4->enter($__internal_9aee2f5325a1152c3e4f1bbfd9dacec33b4d00a93948576f58c57cde4fae0ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("leaflet/leaflet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mapping.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9aee2f5325a1152c3e4f1bbfd9dacec33b4d00a93948576f58c57cde4fae0ec4->leave($__internal_9aee2f5325a1152c3e4f1bbfd9dacec33b4d00a93948576f58c57cde4fae0ec4_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a75fa8a70d3144f7cf11906453fcdee8c213bd672d220818e3be35c9fb0de03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a75fa8a70d3144f7cf11906453fcdee8c213bd672d220818e3be35c9fb0de03->enter($__internal_3a75fa8a70d3144f7cf11906453fcdee8c213bd672d220818e3be35c9fb0de03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("leaflet/leaflet.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mapping.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_3a75fa8a70d3144f7cf11906453fcdee8c213bd672d220818e3be35c9fb0de03->leave($__internal_3a75fa8a70d3144f7cf11906453fcdee8c213bd672d220818e3be35c9fb0de03_prof);

    }

    public function getTemplateName()
    {
        return "AWSExploitationBundle:Default:realtime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  93 => 27,  87 => 26,  78 => 23,  74 => 22,  69 => 21,  63 => 20,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:index.html.twig\" %}

{% block content %}
\t<div class=\"col-xs-12 col-md-12 col-sm-12 col-lg-12\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-10 col-md-10 col-sm-7 col-lg-7\">
\t\t\t\t\t<div id=\"map\" class=\"map\"></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-10 col-md-10 col-sm-4 col-lg-4\">
\t\t\t\t\t<div></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"{{ asset('leaflet/leaflet.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
\t<link href=\"{{ asset('css/mapping.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block javascripts %}
\t<script src=\"{{ asset('leaflet/leaflet.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('js/mapping.js') }}\" type=\"text/javascript\"></script>
{% endblock %}


", "AWSExploitationBundle:Default:realtime.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/src/AWS/ExploitationBundle/Resources/views/Default/realtime.html.twig");
    }
}
