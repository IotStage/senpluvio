<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_2613f5640449cda8ef81d2bede35a9ecf25d31757e13298dfb783d4ca0b78d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f6bed80c7d19d5323f8fe9be0e53efe37da0c8964ce7a51d779c645a645ce9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6bed80c7d19d5323f8fe9be0e53efe37da0c8964ce7a51d779c645a645ce9d->enter($__internal_4f6bed80c7d19d5323f8fe9be0e53efe37da0c8964ce7a51d779c645a645ce9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6bed80c7d19d5323f8fe9be0e53efe37da0c8964ce7a51d779c645a645ce9d->leave($__internal_4f6bed80c7d19d5323f8fe9be0e53efe37da0c8964ce7a51d779c645a645ce9d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_34d5a1b40535c67a919d67b2e2d66ae49a79ab3424f94555cd3bd9196c61d980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d5a1b40535c67a919d67b2e2d66ae49a79ab3424f94555cd3bd9196c61d980->enter($__internal_34d5a1b40535c67a919d67b2e2d66ae49a79ab3424f94555cd3bd9196c61d980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_34d5a1b40535c67a919d67b2e2d66ae49a79ab3424f94555cd3bd9196c61d980->leave($__internal_34d5a1b40535c67a919d67b2e2d66ae49a79ab3424f94555cd3bd9196c61d980_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
", "NelmioApiDocBundle::resource.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resource.html.twig");
    }
}
