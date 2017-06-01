<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2bc295b8a69782e1bf7ee1daa5ee42aa83391127e9a83baae8f000c0f36db85c extends Twig_Template
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
        $__internal_2b3d097a404416437f4a72ec13ef5b9d5baaf30608eeda2147c5859fc56ea523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3d097a404416437f4a72ec13ef5b9d5baaf30608eeda2147c5859fc56ea523->enter($__internal_2b3d097a404416437f4a72ec13ef5b9d5baaf30608eeda2147c5859fc56ea523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2b3d097a404416437f4a72ec13ef5b9d5baaf30608eeda2147c5859fc56ea523->leave($__internal_2b3d097a404416437f4a72ec13ef5b9d5baaf30608eeda2147c5859fc56ea523_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
