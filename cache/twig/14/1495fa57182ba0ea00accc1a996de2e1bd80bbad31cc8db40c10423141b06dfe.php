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

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_0549cc4746952741d105a0dd12e6a772a691e404c598cd269fdb5afe657bb45d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"head-search\">
    <div class=\"input-group\">
        <input type=\"text\" class=\"form-control header-search-input\" placeholder=\"";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER");
        echo "\" value=\"";
        echo ($context["query"] ?? null);
        echo "\" data-header-search-input=\"";
        echo ($context["base_url"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []);
        echo "/query\" />
        ";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "display_button", [])) {
            // line 5
            echo "            <span class=\"input-group-btn\">
              <button type=\"submit\" class=\"btn btn-primary header-search-submit\">Search</button>
            </span>
        ";
        }
        // line 9
        echo "    </div>
</div>

<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-header-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length >= ";
        // line 17
        echo $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.simplesearch.min_query_length", 1 => 3], "method");
        echo ") {
            event.preventDefault();
            window.location.href = input.data('header-search-input') + '";
        // line 19
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        echo "' + input.val();
        }
    });

    \$('.header-search-submit').on('click', function(event) {
        event.preventDefault();
        window.location.href = input.data('header-search-input') + '";
        // line 25
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        echo "' + input.val();
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  66 => 19,  61 => 17,  51 => 9,  45 => 5,  43 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"head-search\">
    <div class=\"input-group\">
        <input type=\"text\" class=\"form-control header-search-input\" placeholder=\"{{\"PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER\"|t}}\" value=\"{{ query }}\" data-header-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route}}/query\" />
        {% if config.plugins.simplesearch.display_button %}
            <span class=\"input-group-btn\">
              <button type=\"submit\" class=\"btn btn-primary header-search-submit\">Search</button>
            </span>
        {% endif %}
    </div>
</div>

<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-header-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length >= {{ config.get('plugins.simplesearch.min_query_length', 3) }}) {
            event.preventDefault();
            window.location.href = input.data('header-search-input') + '{{ config.system.param_sep }}' + input.val();
        }
    });

    \$('.header-search-submit').on('click', function(event) {
        event.preventDefault();
        window.location.href = input.data('header-search-input') + '{{ config.system.param_sep }}' + input.val();
    });
});
</script>
", "partials/simplesearch_searchbox.html.twig", "/home1/aduni/prueba/user/themes/x-corporation/templates/partials/simplesearch_searchbox.html.twig");
    }
}
