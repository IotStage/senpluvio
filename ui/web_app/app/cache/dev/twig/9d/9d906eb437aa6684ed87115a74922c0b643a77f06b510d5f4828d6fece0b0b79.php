<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a32513c38f4617df0190c72e0fa70ef4b6cf4df0994d5e18b32d130861a115b extends Twig_Template
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
        $__internal_9540c2e77e3d9ac0095d8a3cb32065e8560c9c0b6c31d37e594dafac3476173e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9540c2e77e3d9ac0095d8a3cb32065e8560c9c0b6c31d37e594dafac3476173e->enter($__internal_9540c2e77e3d9ac0095d8a3cb32065e8560c9c0b6c31d37e594dafac3476173e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9540c2e77e3d9ac0095d8a3cb32065e8560c9c0b6c31d37e594dafac3476173e->leave($__internal_9540c2e77e3d9ac0095d8a3cb32065e8560c9c0b6c31d37e594dafac3476173e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
