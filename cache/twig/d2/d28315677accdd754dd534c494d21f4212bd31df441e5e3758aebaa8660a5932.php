<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/head.html.twig */
class __TwigTemplate_5b08d79918f6c4ddbc6a851dac404cb1919de4c3e2fc8fbc5672cbb781915f8a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<title>";
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " ";
        } else {
            echo " ";
            echo $this->getAttribute(($context["site"] ?? null), "title", []);
            echo " ";
        }
        echo "</title>
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        // line 3
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 6
        $this->loadTemplate("partials/metadata.html.twig", "partials/head.html.twig", 6)->display($context);
        // line 7
        echo "
";
        // line 8
        if (($context["favicon"] ?? null)) {
            // line 9
            echo "<link rel=\"icon\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . ($context["favicon"] ?? null)));
            echo "\">
";
        }
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 13
        echo "<link href='//fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
";
        // line 16
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://fonts/font-awesome/css/font-awesome.min.css", 1 => 101], "method");
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/style.css", 1 => 101], "method");
        // line 18
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/mobile-menu.css", 1 => 101], "method");
        // line 19
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/custom.css", 1 => 101], "method");
        // line 20
        echo " ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
";
    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 25
            echo "        <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/mobile-menu.js"], "method");
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/flexSlider/jquery.flexslider-min.js"], "method");
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scripts.js"], "method");
        // line 33
        echo "
    ";
        // line 34
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 34,  129 => 33,  126 => 32,  123 => 31,  120 => 30,  118 => 29,  115 => 28,  110 => 25,  107 => 24,  104 => 23,  97 => 20,  95 => 19,  93 => 18,  91 => 17,  89 => 16,  84 => 13,  81 => 12,  77 => 23,  74 => 22,  72 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  56 => 6,  51 => 3,  45 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<title>{% if header.title %}{{ header.title }} {% else %} {{ site.title }} {% endif %}</title>
{% block head %}
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
{% include 'partials/metadata.html.twig' %}

{% if favicon %}
<link rel=\"icon\" href=\"{{ url('theme://img/' ~ favicon) }}\">
{% endif %}

{% block stylesheets %}
<link href='//fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
{% do assets.add('theme://fonts/font-awesome/css/font-awesome.min.css', 101) %}
{% do assets.add('theme://css/style.css', 101) %}
{% do assets.add('theme://css/mobile-menu.css', 101) %}
{% do assets.add('theme://css/custom.css', 101) %}
 {{ assets.css() }}
{% endblock %}

{% block javascripts %}
    {% if browser.getBrowser == 'msie' and browser.getVersion <= 9 %}
        <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    {% endif %}

    {% do assets.addJs('jquery', 101) %}
    {% do assets.add('theme://js/mobile-menu.js') %}
    {% do assets.add('theme://js/flexSlider/jquery.flexslider-min.js') %}
    {% do assets.add('theme://js/scripts.js') %}

    {{ assets.js() }}

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
{% endblock %}
{% endblock head %}
", "partials/head.html.twig", "/home1/aduni/prueba/user/themes/x-corporation/templates/partials/head.html.twig");
    }
}
