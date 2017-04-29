<?php

/* partials/base.html.twig */
class __TwigTemplate_f97054b43f4ffa7aeb65b665c8ecb87dc6b5d44064356fe6de3d02993b715ffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "    </head>
    <body class=\"";
        // line 30
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">

        <div id=\"header\">

            <div class=\"container\">
                <div class=\"container-inner\">
                    <div class=\"row\">                
                        <div class=\"col col-4\">
                            <a class=\"nav-toggle\" href=\"#\"><i class=\"kube- h3\"></i></a>
                            <a class=\"logo\" href=\"";
        // line 39
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\"><h2>";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</h2></a>
                        </div>
                        <div class=\"col col-8 text-right menu\">";
        // line 41
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 41)->display($context);
        echo "</div>
                    </div>        
                </div>
            </div>
        </div>  


        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "
        <footer>
            <div class=\"container\">
                <div class=\"container-inner\"> 
                    <div class=\"row h3\">                
                        <div class=\"col col-6 address\">                            
                            ";
        // line 63
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "contact", array()), "address", array()), "html", null, true));
        echo "                            
                        </div>

                        <div class=\"col col-6 contact\">
                            <ul class=\"unstyled\">
                                <li>";
        // line 68
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "contact", array()), "phone", array());
        echo "</li>
                                <li>";
        // line 69
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "contact", array()), "email", array());
        echo "</li>
                                <li>";
        // line 70
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()), "instagram", array());
        echo "</li>
                            </ul>                                                                     
                        </div>                    
                    </div>
                </div>
            </div>
        </footer>


        <script>
          var nav = responsiveNav(\".nav-collapse\", {
            customToggle: \".nav-toggle\"
          });

            ";
        // line 84
        $context["background"] = (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "background_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "background_color", array()), (isset($context["white"]) ? $context["white"] : null))) : ((isset($context["white"]) ? $context["white"] : null)));
        // line 85
        echo "          \$('body').css('background-color', '";
        echo (isset($context["background"]) ? $context["background"] : null);
        echo "');
        </script>

    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\" />

        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\">
        ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 13
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/kube.min.js"), "method");
        // line 14
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/responsive-nav.min.js"), "method");
        // line 15
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/custom.js"), "method");
        // line 16
        echo "        ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/kube.min.css"), "method");
        // line 20
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/responsive-nav.css"), "method");
        // line 21
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css"), "method");
        // line 22
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/template.css"), "method");
        // line 23
        echo "        ";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "
            <div class=\"container main-page-container\">
                <div class=\"container-inner\">                    
                    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "                </div>
            </div>

        ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 52,  213 => 53,  211 => 52,  206 => 49,  203 => 48,  199 => 23,  196 => 22,  193 => 21,  190 => 20,  187 => 19,  184 => 18,  180 => 16,  177 => 15,  174 => 14,  171 => 13,  168 => 12,  165 => 11,  155 => 24,  153 => 18,  148 => 17,  146 => 11,  141 => 9,  138 => 8,  136 => 7,  128 => 6,  125 => 5,  122 => 4,  111 => 85,  109 => 84,  92 => 70,  88 => 69,  84 => 68,  76 => 63,  68 => 57,  66 => 48,  56 => 41,  49 => 39,  37 => 30,  34 => 29,  32 => 4,  27 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon.png') }}\" />

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/kube.min.js') %}
            {% do assets.addJs('theme://js/responsive-nav.min.js') %}
            {% do assets.addJs('theme://js/custom.js') %}
        {% endblock %}
        {{ assets.js() }}
        {% block stylesheets %}
            {% do assets.addCss('theme://css/kube.min.css') %}
            {% do assets.addCss('theme://css/responsive-nav.css') %}
            {% do assets.addCss('theme://css/font-awesome.min.css') %}
            {% do assets.addCss('theme://css-compiled/template.css') %}
        {% endblock %}
        {{ assets.css() }}

        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\">
        {% endblock head%}
    </head>
    <body class=\"{{ page.header.body_classes }}\">

        <div id=\"header\">

            <div class=\"container\">
                <div class=\"container-inner\">
                    <div class=\"row\">                
                        <div class=\"col col-4\">
                            <a class=\"nav-toggle\" href=\"#\"><i class=\"kube- h3\"></i></a>
                            <a class=\"logo\" href=\"{{ base_url_absolute }}\"><h2>{{ site.title }}</h2></a>
                        </div>
                        <div class=\"col col-8 text-right menu\">{% include 'partials/navigation.html.twig' %}</div>
                    </div>        
                </div>
            </div>
        </div>  


        {% block body %}

            <div class=\"container main-page-container\">
                <div class=\"container-inner\">                    
                    {% block content %}{% endblock %}
                </div>
            </div>

        {% endblock %}

        <footer>
            <div class=\"container\">
                <div class=\"container-inner\"> 
                    <div class=\"row h3\">                
                        <div class=\"col col-6 address\">                            
                            {{ site.contact.address|nl2br }}                            
                        </div>

                        <div class=\"col col-6 contact\">
                            <ul class=\"unstyled\">
                                <li>{{ site.contact.phone }}</li>
                                <li>{{ site.contact.email }}</li>
                                <li>{{ site.social.instagram }}</li>
                            </ul>                                                                     
                        </div>                    
                    </div>
                </div>
            </div>
        </footer>


        <script>
          var nav = responsiveNav(\".nav-collapse\", {
            customToggle: \".nav-toggle\"
          });

            {% set background = page.header.background_color|default(white) %}
          \$('body').css('background-color', '{{ background }}');
        </script>

    </body>
</html>
", "partials/base.html.twig", "/Users/gael/Sites/gael.local/grav/mysite/user/themes/mytheme/templates/partials/base.html.twig");
    }
}
