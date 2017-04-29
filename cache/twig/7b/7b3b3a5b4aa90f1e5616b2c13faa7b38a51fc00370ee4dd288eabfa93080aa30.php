<?php

/* forms/form.html.twig */
class __TwigTemplate_803076766b7738ac999cd8347f261508374e377fd358d0ada8d02aba8ab670f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/default/form.html.twig", "forms/form.html.twig", 1);
        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/default/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_classes($context, array $blocks = array())
    {
        // line 4
        echo "  class=\"";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array());
        echo " forms\"
";
    }

    // line 7
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 8
        echo "  <br>
";
    }

    // line 11
    public function block_button_classes($context, array $blocks = array())
    {
        // line 12
        echo "  class=\"";
        echo (($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array()), "button")) : ("button"));
        echo " btn btn-big\"
";
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  48 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'forms/default/form.html.twig' %}

{% block form_classes %}
  class=\"{{ form.classes }} forms\"
{% endblock %}

{% block inner_markup_buttons_start %}
  <br>
{% endblock %}

{% block button_classes %}
  class=\"{{ button.classes|default('button') }} btn btn-big\"
{% endblock %}
", "forms/form.html.twig", "/Users/gael/Sites/gael.local/grav/mysite/user/themes/mytheme/templates/forms/form.html.twig");
    }
}
