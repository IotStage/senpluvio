<?php

/* :default:index.html.twig */
class __TwigTemplate_6a8a89e6d48b23ec772090129e293ceb4dbe6a185b50b3493f7fc90666127ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d724bc0b2d8ac6efff94fc94b1695cbec208d329dca1afc23b777f605d446e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d724bc0b2d8ac6efff94fc94b1695cbec208d329dca1afc23b777f605d446e8->enter($__internal_1d724bc0b2d8ac6efff94fc94b1695cbec208d329dca1afc23b777f605d446e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d724bc0b2d8ac6efff94fc94b1695cbec208d329dca1afc23b777f605d446e8->leave($__internal_1d724bc0b2d8ac6efff94fc94b1695cbec208d329dca1afc23b777f605d446e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14edfdb4090f2985793ad7bb7df4fa35b1447c8ab1faa6298dc5443470c36244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14edfdb4090f2985793ad7bb7df4fa35b1447c8ab1faa6298dc5443470c36244->enter($__internal_14edfdb4090f2985793ad7bb7df4fa35b1447c8ab1faa6298dc5443470c36244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<!--header-->
\t\t<div class=\"header\">
\t\t\t<div class=\"container\">\t
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aws_exploitation_usage_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"SenPluvio\"></a>
\t\t\t\t</div>

\t\t\t\t<div class=\"top-nav\">
\t\t\t\t\t<span class=\"menu\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/menu.png"), "html", null, true);
        echo "\" alt=\"\"> </span>
\t\t\t\t\t<ul>

\t\t\t\t\t";
        // line 16
        $this->displayBlock('menu', $context, $blocks);
        // line 23
        echo "

\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t<!--fin header-->

\t<!-- contenu -->
\t\t<div class=\"bodycontent\">
\t\t\t";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "\t\t</div>
\t<!-- fin contenu -->

\t<!-- footer -->
\t\t<!--div class=\"footer\">
\t\t\t<div class=\"container\">
        \t    <p class=\"footer-class\"><a >Copyright © 2017 </a><a href=\"#\" target=\"_blank\">Ecole Supérieure Polytechnique</a> / LPAO-SF</a> </p> 
\t\t\t</div>
\t\t</div-->
\t<!-- fin footer -->

";
        
        $__internal_14edfdb4090f2985793ad7bb7df4fa35b1447c8ab1faa6298dc5443470c36244->leave($__internal_14edfdb4090f2985793ad7bb7df4fa35b1447c8ab1faa6298dc5443470c36244_prof);

    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5dfcc2c72b11f2c5f6f4c14c1f30123a17fcdca1a94c0451ead8de442752189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dfcc2c72b11f2c5f6f4c14c1f30123a17fcdca1a94c0451ead8de442752189->enter($__internal_b5dfcc2c72b11f2c5f6f4c14c1f30123a17fcdca1a94c0451ead8de442752189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 17
        echo "\t\t\t\t\t\t<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aws_exploitation_usage_realtime");
        echo "\" >Temps réel</a></li>
\t\t\t\t\t\t<li><a href=\"\" >Monitoring</a></li>
\t\t\t\t\t\t<li><a href=\"\" >Administration</a></li>
\t\t\t\t\t\t<li><a href=\"\" >Contact</a></li>
\t\t\t\t\t\t<li><a href=\"\" >Galerie</a></li>
\t\t\t\t\t";
        
        $__internal_b5dfcc2c72b11f2c5f6f4c14c1f30123a17fcdca1a94c0451ead8de442752189->leave($__internal_b5dfcc2c72b11f2c5f6f4c14c1f30123a17fcdca1a94c0451ead8de442752189_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_50e3efa5860893ab95b72bc8228ddfb809d8c386ab4ef775bbfda2875a6b46f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e3efa5860893ab95b72bc8228ddfb809d8c386ab4ef775bbfda2875a6b46f5->enter($__internal_50e3efa5860893ab95b72bc8228ddfb809d8c386ab4ef775bbfda2875a6b46f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "\t\t\t";
        
        $__internal_50e3efa5860893ab95b72bc8228ddfb809d8c386ab4ef775bbfda2875a6b46f5->leave($__internal_50e3efa5860893ab95b72bc8228ddfb809d8c386ab4ef775bbfda2875a6b46f5_prof);

    }

    // line 51
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e413c791cbcc7517f359252757d4a24d6d5fb968608924758ef65f3ca28aaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e413c791cbcc7517f359252757d4a24d6d5fb968608924758ef65f3ca28aaab->enter($__internal_2e413c791cbcc7517f359252757d4a24d6d5fb968608924758ef65f3ca28aaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 52
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
\t<link href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

";
        
        $__internal_2e413c791cbcc7517f359252757d4a24d6d5fb968608924758ef65f3ca28aaab->leave($__internal_2e413c791cbcc7517f359252757d4a24d6d5fb968608924758ef65f3ca28aaab_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b649385f0e04b51fd527a50de9f91ad6d034255de3fe2a5fd7730d4b00d6c28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b649385f0e04b51fd527a50de9f91ad6d034255de3fe2a5fd7730d4b00d6c28a->enter($__internal_b649385f0e04b51fd527a50de9f91ad6d034255de3fe2a5fd7730d4b00d6c28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

\t<!--script type=\"text/javascript\" src=\"js/move-top.js\"></script>
\t<script type=\"text/javascript\" src=\"js/easing.js\"></script-->

\t<script type=\"application/x-javascript\">
\t    addEventListener(\"load\", function() {
\t        setTimeout(hideURLbar, 0);
\t    }, false);
\t    function hideURLbar(){
\t        window.scrollTo(0,1);
\t    }
\t</script>

\t<script>
\t\t\t\$(\"span.menu\").click(function(){
\t\t\t\t\$(\".top-nav ul\").slideToggle(500, function(){
\t\t\t\t});
\t\t\t});
\t</script>
\t
";
        
        $__internal_b649385f0e04b51fd527a50de9f91ad6d034255de3fe2a5fd7730d4b00d6c28a->leave($__internal_b649385f0e04b51fd527a50de9f91ad6d034255de3fe2a5fd7730d4b00d6c28a_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 59,  163 => 58,  157 => 57,  147 => 53,  142 => 52,  136 => 51,  129 => 37,  123 => 36,  109 => 17,  103 => 16,  85 => 38,  83 => 36,  68 => 23,  66 => 16,  60 => 13,  51 => 9,  44 => 4,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

\t<!--header-->
\t\t<div class=\"header\">
\t\t\t<div class=\"container\">\t
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"{{ path('aws_exploitation_usage_index') }}\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"SenPluvio\"></a>
\t\t\t\t</div>

\t\t\t\t<div class=\"top-nav\">
\t\t\t\t\t<span class=\"menu\"><img src=\"{{ asset('images/menu.png') }}\" alt=\"\"> </span>
\t\t\t\t\t<ul>

\t\t\t\t\t{% block menu %}
\t\t\t\t\t\t<li><a href=\"{{ path('aws_exploitation_usage_realtime') }}\" >Temps réel</a></li>
\t\t\t\t\t\t<li><a href=\"\" >Monitoring</a></li>
\t\t\t\t\t\t<li><a href=\"\" >Administration</a></li>
\t\t\t\t\t\t<li><a href=\"\" >Contact</a></li>
\t\t\t\t\t\t<li><a href=\"\" >Galerie</a></li>
\t\t\t\t\t{% endblock %}


\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t<!--fin header-->

\t<!-- contenu -->
\t\t<div class=\"bodycontent\">
\t\t\t{% block content %}
\t\t\t{% endblock %}
\t\t</div>
\t<!-- fin contenu -->

\t<!-- footer -->
\t\t<!--div class=\"footer\">
\t\t\t<div class=\"container\">
        \t    <p class=\"footer-class\"><a >Copyright © 2017 </a><a href=\"#\" target=\"_blank\">Ecole Supérieure Polytechnique</a> / LPAO-SF</a> </p> 
\t\t\t</div>
\t\t</div-->
\t<!-- fin footer -->

{% endblock %}

{% block stylesheets %}
\t<link href=\"{{ asset('bootstrap/css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
\t<link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

{% endblock %}

{% block javascripts %}
\t<script type=\"text/javascript\" src=\"{{ asset('jquery/jquery.min.js') }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('bootstrap/js/bootstrap.js') }}\"></script>

\t<!--script type=\"text/javascript\" src=\"js/move-top.js\"></script>
\t<script type=\"text/javascript\" src=\"js/easing.js\"></script-->

\t<script type=\"application/x-javascript\">
\t    addEventListener(\"load\", function() {
\t        setTimeout(hideURLbar, 0);
\t    }, false);
\t    function hideURLbar(){
\t        window.scrollTo(0,1);
\t    }
\t</script>

\t<script>
\t\t\t\$(\"span.menu\").click(function(){
\t\t\t\t\$(\".top-nav ul\").slideToggle(500, function(){
\t\t\t\t});
\t\t\t});
\t</script>
\t
{% endblock %}
", ":default:index.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/app/Resources/views/default/index.html.twig");
    }
}
