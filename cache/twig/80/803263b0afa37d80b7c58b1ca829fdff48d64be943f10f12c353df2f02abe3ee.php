<?php

/* form.html.twig */
class __TwigTemplate_4574344062064393bc0fa660bb2f4bfa0ed963878408caad304b2254c0099a24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
  <header>
    <h2>";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
  </header>
  
  ";
        // line 9
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

  ";
        // line 11
        $this->loadTemplate("forms/form.html.twig", "form.html.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  46 => 11,  41 => 9,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}

  <header>
    <h2>{{ page.header.title }}</h2>
  </header>
  
  {{ content }}

  {% include \"forms/form.html.twig\" %}

{% endblock %}
", "form.html.twig", "/Users/gael/Sites/gael.local/grav/mysite/user/themes/mytheme/templates/form.html.twig");
    }
}
