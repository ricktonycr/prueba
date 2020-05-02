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

/* default.html.twig */
class __TwigTemplate_2f60aabeb20463cd82df3814e3ea4ff23c1bd9a6fe8d497ce6804404181f35ab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<section class=\"single-page-title\">
    <div class=\"container text-center\">
        <h2>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
    </div>
</section>

<section class=\"ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 13
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<section class=\"single-page-title\">
    <div class=\"container text-center\">
        <h2>{{ page.title }}</h2>
    </div>
</section>

<section class=\"ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            {{ content }}
        </div>
    </div>
</section>
{% endblock %}
", "default.html.twig", "/home1/aduni/prueba/user/themes/x-corporation/templates/default.html.twig");
    }
}
