<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4770ae4287887e37b3858f640315e735bb3a3b7b67c39e49569fe6fb20d9f91a extends Twig_Template
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
        $__internal_868ea9afbedfeeb8bb8d2cccdf42aaf184a60b51bb6817e8b24854be807a05a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868ea9afbedfeeb8bb8d2cccdf42aaf184a60b51bb6817e8b24854be807a05a5->enter($__internal_868ea9afbedfeeb8bb8d2cccdf42aaf184a60b51bb6817e8b24854be807a05a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_868ea9afbedfeeb8bb8d2cccdf42aaf184a60b51bb6817e8b24854be807a05a5->leave($__internal_868ea9afbedfeeb8bb8d2cccdf42aaf184a60b51bb6817e8b24854be807a05a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
