<?php

/* AdministrationAdminBundle:Default:index.html.twig */
class __TwigTemplate_b65a3e954c082ebb03c18df715e467ae2323287b1815c34dd4c8435c5b87e33d extends Twig_Template
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
        $__internal_160d6cb065a82a3749f39bb0bdb2180fead21b8a9d98233aa1db10828b1b4744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160d6cb065a82a3749f39bb0bdb2180fead21b8a9d98233aa1db10828b1b4744->enter($__internal_160d6cb065a82a3749f39bb0bdb2180fead21b8a9d98233aa1db10828b1b4744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdministrationAdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_160d6cb065a82a3749f39bb0bdb2180fead21b8a9d98233aa1db10828b1b4744->leave($__internal_160d6cb065a82a3749f39bb0bdb2180fead21b8a9d98233aa1db10828b1b4744_prof);

    }

    public function getTemplateName()
    {
        return "AdministrationAdminBundle:Default:index.html.twig";
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
", "AdministrationAdminBundle:Default:index.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/src/Administration/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
