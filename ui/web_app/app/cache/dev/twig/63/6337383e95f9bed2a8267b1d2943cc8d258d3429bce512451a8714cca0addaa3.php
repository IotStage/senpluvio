<?php

/* AWSExploitationBundle:Default:realtime.html.twig */
class __TwigTemplate_5a016e819414933d04809a286dfd8c594a8d57b4f0a747278ac18fb9b77b6d15 extends Twig_Template
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
        $__internal_3e162da4bcd0dd63d7c50d5816b69e91185ca2427966b7b44cf512929ff2e3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e162da4bcd0dd63d7c50d5816b69e91185ca2427966b7b44cf512929ff2e3ea->enter($__internal_3e162da4bcd0dd63d7c50d5816b69e91185ca2427966b7b44cf512929ff2e3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AWSExploitationBundle:Default:realtime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e162da4bcd0dd63d7c50d5816b69e91185ca2427966b7b44cf512929ff2e3ea->leave($__internal_3e162da4bcd0dd63d7c50d5816b69e91185ca2427966b7b44cf512929ff2e3ea_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ccc0d657fd119183e3b14699df0da588d377665e36465014084d077195851ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc0d657fd119183e3b14699df0da588d377665e36465014084d077195851ac7->enter($__internal_ccc0d657fd119183e3b14699df0da588d377665e36465014084d077195851ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"col-xs-12 col-md-12 col-sm-12 col-lg-12\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-10 col-md-10 col-sm-7 col-lg-7\">
\t\t\t\t\t<div id=\"map\" class=\"map\"></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-10 col-md-10 col-sm-4 col-lg-4\">
\t\t\t\t\t<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_ccc0d657fd119183e3b14699df0da588d377665e36465014084d077195851ac7->leave($__internal_ccc0d657fd119183e3b14699df0da588d377665e36465014084d077195851ac7_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_804a398f298ff7b4fb1975490cd95f0d91eac641bd7ea197e1bb25ba7b175957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804a398f298ff7b4fb1975490cd95f0d91eac641bd7ea197e1bb25ba7b175957->enter($__internal_804a398f298ff7b4fb1975490cd95f0d91eac641bd7ea197e1bb25ba7b175957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_804a398f298ff7b4fb1975490cd95f0d91eac641bd7ea197e1bb25ba7b175957->leave($__internal_804a398f298ff7b4fb1975490cd95f0d91eac641bd7ea197e1bb25ba7b175957_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_254e13d85a6bd617e8ad8f77400d51cf8588d2b7aaf534fbabc9242ba0df2b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254e13d85a6bd617e8ad8f77400d51cf8588d2b7aaf534fbabc9242ba0df2b9c->enter($__internal_254e13d85a6bd617e8ad8f77400d51cf8588d2b7aaf534fbabc9242ba0df2b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("leaflet/leaflet.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Highcharts/js/highcharts.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Highcharts/js/modules/exporting.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mapping.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t<script type=\"text/javascript\">
\t    ";
        // line 36
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
\t</script>

";
        
        $__internal_254e13d85a6bd617e8ad8f77400d51cf8588d2b7aaf534fbabc9242ba0df2b9c->leave($__internal_254e13d85a6bd617e8ad8f77400d51cf8588d2b7aaf534fbabc9242ba0df2b9c_prof);

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
        return array (  118 => 36,  112 => 33,  107 => 31,  103 => 30,  99 => 29,  93 => 27,  87 => 26,  78 => 23,  74 => 22,  69 => 21,  63 => 20,  42 => 4,  36 => 3,  11 => 1,);
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
\t\t\t\t\t<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
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
\t{{ parent() }}
\t
\t<script src=\"{{ asset('leaflet/leaflet.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('Highcharts/js/highcharts.js') }}\"></script>
\t<script src=\"{{ asset('Highcharts/js/modules/exporting.js') }}\"></script>

\t<script src=\"{{ asset('js/mapping.js') }}\" type=\"text/javascript\"></script>
\t
\t<script type=\"text/javascript\">
\t    {{ chart(chart) }}
\t</script>

{% endblock %}


", "AWSExploitationBundle:Default:realtime.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/src/AWS/ExploitationBundle/Resources/views/Default/realtime.html.twig");
    }
}
