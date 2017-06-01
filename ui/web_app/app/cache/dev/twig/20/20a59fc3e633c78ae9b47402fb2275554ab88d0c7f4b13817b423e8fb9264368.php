<?php

/* AWSExploitationBundle:Default:index.html.twig */
class __TwigTemplate_7772cd38cb55dbfcf4c55145dcbc209a30927344f16d6e8e08b6960697bbedfe extends Twig_Template
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
        $__internal_179a16508b8de378c1e88b1767485d74e9d6cfda43e5d8e2e56b9464e7f88363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179a16508b8de378c1e88b1767485d74e9d6cfda43e5d8e2e56b9464e7f88363->enter($__internal_179a16508b8de378c1e88b1767485d74e9d6cfda43e5d8e2e56b9464e7f88363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AWSExploitationBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_179a16508b8de378c1e88b1767485d74e9d6cfda43e5d8e2e56b9464e7f88363->leave($__internal_179a16508b8de378c1e88b1767485d74e9d6cfda43e5d8e2e56b9464e7f88363_prof);

    }

    public function getTemplateName()
    {
        return "AWSExploitationBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AWSExploitationBundle:Default:index.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/src/AWS/ExploitationBundle/Resources/views/Default/index.html.twig");
    }
}
