<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7c4536fb5590c09d817b3c2fa38a17cf88c71952fcc2dcfb45dfebd5fd2d7069 extends Twig_Template
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
        $__internal_348a7c24ae92e9bfe8478ea8bc179a978dc136c42ba88b37a47ad4061869c50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348a7c24ae92e9bfe8478ea8bc179a978dc136c42ba88b37a47ad4061869c50f->enter($__internal_348a7c24ae92e9bfe8478ea8bc179a978dc136c42ba88b37a47ad4061869c50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_348a7c24ae92e9bfe8478ea8bc179a978dc136c42ba88b37a47ad4061869c50f->leave($__internal_348a7c24ae92e9bfe8478ea8bc179a978dc136c42ba88b37a47ad4061869c50f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
