<?php

/* AWSExploitationBundle:Default:index.html.twig */
class __TwigTemplate_2ca12342ce944aaf79c01f301489cbd33a37d913153132e02def1409be248bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", "AWSExploitationBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d50ad090026d04c735eb996dbb15f6a316b4e473139962ffd61859328d42710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d50ad090026d04c735eb996dbb15f6a316b4e473139962ffd61859328d42710->enter($__internal_0d50ad090026d04c735eb996dbb15f6a316b4e473139962ffd61859328d42710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AWSExploitationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d50ad090026d04c735eb996dbb15f6a316b4e473139962ffd61859328d42710->leave($__internal_0d50ad090026d04c735eb996dbb15f6a316b4e473139962ffd61859328d42710_prof);

    }

    public function getTemplateName()
    {
        return "AWSExploitationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
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
", "AWSExploitationBundle:Default:index.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/src/AWS/ExploitationBundle/Resources/views/Default/index.html.twig");
    }
}
