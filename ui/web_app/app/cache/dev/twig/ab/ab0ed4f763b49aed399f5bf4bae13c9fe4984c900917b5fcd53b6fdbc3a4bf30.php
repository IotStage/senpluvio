<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_390ca84f20db55b73e3682e08e6aa5e3e177a7c633193ddfd53d989d73a1c33a extends Twig_Template
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
        $__internal_d2c9e83e98575c60aa139e40dbbe39ef4005ac196342098f481bfa369409bcf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c9e83e98575c60aa139e40dbbe39ef4005ac196342098f481bfa369409bcf5->enter($__internal_d2c9e83e98575c60aa139e40dbbe39ef4005ac196342098f481bfa369409bcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d2c9e83e98575c60aa139e40dbbe39ef4005ac196342098f481bfa369409bcf5->leave($__internal_d2c9e83e98575c60aa139e40dbbe39ef4005ac196342098f481bfa369409bcf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
