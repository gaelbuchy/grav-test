<?php

/* portfolio.html.twig */
class __TwigTemplate_2865b7c38ba1b540d4bccdd12889f49c22bc519562ec22ac7a9d9fb35bcd7aa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "portfolio.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 4
        $context["base_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        // line 5
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 7
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 12
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
<div class=\"portfolio-grid\">
  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 19
            echo "    ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                // line 20
                echo "      <div class=\"row\">
    ";
            }
            // line 22
            echo "      <div class=\"col col-6\">
        <a href=\"";
            // line 23
            echo $this->getAttribute($context["child"], "url", array());
            echo "\">
          <img src=\"";
            // line 24
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["child"], "media", array()), "images", array())), "url", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["child"], "title", array());
            echo "\">

          <div class=\"hover-back\"><div class=\"image-title h3\">";
            // line 26
            echo $this->getAttribute($context["child"], "title", array());
            echo "</div></div>
        </a>
      </div>
     ";
            // line 29
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                // line 30
                echo "      </div>
    ";
            }
            // line 32
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  98 => 30,  96 => 29,  90 => 26,  83 => 24,  79 => 23,  76 => 22,  72 => 20,  69 => 19,  52 => 18,  48 => 16,  45 => 15,  41 => 1,  38 => 12,  36 => 11,  33 => 8,  31 => 7,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
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

{% set collection = page.collection() %}
{% set base_url = page.url %}
{% set feed_url = base_url %}

{% if base_url == '/' %}
  {% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
  {% set feed_url = base_url~'/'~page.slug %}
{% endif  %}

{% block content %}

<div class=\"portfolio-grid\">
  {% for child in collection %}
    {% if loop.index is odd %}
      <div class=\"row\">
    {% endif %}
      <div class=\"col col-6\">
        <a href=\"{{ child.url }}\">
          <img src=\"{{ (child.media.images|first).url }}\" alt=\"{{ child.title }}\">

          <div class=\"hover-back\"><div class=\"image-title h3\">{{ child.title }}</div></div>
        </a>
      </div>
     {% if loop.index is even %}
      </div>
    {% endif %}
  {% endfor %}
{% endblock %}



", "portfolio.html.twig", "/Users/gael/Sites/gael.local/grav/mysite/user/themes/mytheme/templates/portfolio.html.twig");
    }
}
