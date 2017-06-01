<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4d60b81ec89eeb4db76ac3566e01ab52dc8bfd05baae24f7c85c77f5ef0d21a0 extends Twig_Template
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
        $__internal_067ed7f5625c7da8663ec51e021c673aec86191f73ea61a0bdd0c1ec227546fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067ed7f5625c7da8663ec51e021c673aec86191f73ea61a0bdd0c1ec227546fb->enter($__internal_067ed7f5625c7da8663ec51e021c673aec86191f73ea61a0bdd0c1ec227546fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_067ed7f5625c7da8663ec51e021c673aec86191f73ea61a0bdd0c1ec227546fb->leave($__internal_067ed7f5625c7da8663ec51e021c673aec86191f73ea61a0bdd0c1ec227546fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
