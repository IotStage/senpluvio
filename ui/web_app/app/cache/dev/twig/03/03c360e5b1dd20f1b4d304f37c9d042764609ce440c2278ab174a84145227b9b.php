<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_386be47e9a647af68bed1e5b73fe274a87a82818c51117836dade791363bdab1 extends Twig_Template
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
        $__internal_4c0d02f1d981a6c36886ef43b96f60c9f42ce0cf3925fc868a675f79b5ee0713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0d02f1d981a6c36886ef43b96f60c9f42ce0cf3925fc868a675f79b5ee0713->enter($__internal_4c0d02f1d981a6c36886ef43b96f60c9f42ce0cf3925fc868a675f79b5ee0713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c0d02f1d981a6c36886ef43b96f60c9f42ce0cf3925fc868a675f79b5ee0713->leave($__internal_4c0d02f1d981a6c36886ef43b96f60c9f42ce0cf3925fc868a675f79b5ee0713_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a23b2e6c7df2530e0eba2087dcbf10a0c7af29751f79724b9eba26bb579fb76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a23b2e6c7df2530e0eba2087dcbf10a0c7af29751f79724b9eba26bb579fb76->enter($__internal_3a23b2e6c7df2530e0eba2087dcbf10a0c7af29751f79724b9eba26bb579fb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3a23b2e6c7df2530e0eba2087dcbf10a0c7af29751f79724b9eba26bb579fb76->leave($__internal_3a23b2e6c7df2530e0eba2087dcbf10a0c7af29751f79724b9eba26bb579fb76_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_faf5d82de34811b1abc2f79aded5a16cd78934c0941b62357f36c9f5d9adfdab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf5d82de34811b1abc2f79aded5a16cd78934c0941b62357f36c9f5d9adfdab->enter($__internal_faf5d82de34811b1abc2f79aded5a16cd78934c0941b62357f36c9f5d9adfdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_faf5d82de34811b1abc2f79aded5a16cd78934c0941b62357f36c9f5d9adfdab->leave($__internal_faf5d82de34811b1abc2f79aded5a16cd78934c0941b62357f36c9f5d9adfdab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8ebcb49ac8aa0afba05dd4218d7d86e71301f3b963a4de44aeeaa255c5b97e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ebcb49ac8aa0afba05dd4218d7d86e71301f3b963a4de44aeeaa255c5b97e4->enter($__internal_f8ebcb49ac8aa0afba05dd4218d7d86e71301f3b963a4de44aeeaa255c5b97e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f8ebcb49ac8aa0afba05dd4218d7d86e71301f3b963a4de44aeeaa255c5b97e4->leave($__internal_f8ebcb49ac8aa0afba05dd4218d7d86e71301f3b963a4de44aeeaa255c5b97e4_prof);

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
