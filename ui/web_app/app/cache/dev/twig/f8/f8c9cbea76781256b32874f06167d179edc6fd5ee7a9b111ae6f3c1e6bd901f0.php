<?php

/* NelmioApiDocBundle:Components:motd.html.twig */
class __TwigTemplate_d40bf141028fa9df93c1601c3e745b991ec164f1300239e2b5743ca932b7bb99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7e895fe68c913a9cadda0de082e3aa0779e70f070dafddfbdc38908bc64ce83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e895fe68c913a9cadda0de082e3aa0779e70f070dafddfbdc38908bc64ce83->enter($__internal_d7e895fe68c913a9cadda0de082e3aa0779e70f070dafddfbdc38908bc64ce83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_d7e895fe68c913a9cadda0de082e3aa0779e70f070dafddfbdc38908bc64ce83->leave($__internal_d7e895fe68c913a9cadda0de082e3aa0779e70f070dafddfbdc38908bc64ce83_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:motd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle:Components:motd.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
