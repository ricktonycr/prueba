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

/* partials/git_sync_repo_link.html.twig */
class __TwigTemplate_9d58fc48ecd738430c5f36c22fd3143381a8043b97bddd4c5a8b693c49cb6693 extends \Twig\Template
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
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link")) {
            // line 2
            echo "  ";
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", []) &&  !($context["presentationslides"] ?? null))) {
                // line 3
                echo "    ";
                $context["git_repo_link_url"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link");
                // line 4
                echo "    ";
                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                    // line 5
                    echo "      ";
                    if (twig_in_filter("github", ($context["git_repo_link_url"] ?? null))) {
                        // line 6
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 7
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", ($context["git_repo_link_url"] ?? null))) {
                        // line 8
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 9
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_repo_link_url"] ?? null))) {
                        // line 10
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 11
                        echo "      ";
                    } else {
                        // line 12
                        echo "        ";
                        $context["git_repo_link_icon"] = "git";
                        // line 13
                        echo "      ";
                    }
                    // line 14
                    echo "    ";
                } else {
                    // line 15
                    echo "      ";
                    $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                    // line 16
                    echo "    ";
                }
                // line 17
                echo "    ";
                if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                    // line 18
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                        // line 19
                        echo "        ";
                        $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                        // line 20
                        echo "      ";
                    } else {
                        // line 21
                        echo "        ";
                        if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                            // line 22
                            echo "          ";
                            $context["git_repo_link_text"] = "View Content Repository";
                            // line 23
                            echo "        ";
                        } else {
                            // line 24
                            echo "          ";
                            if ( !($context["presentationslides"] ?? null)) {
                                // line 25
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                // line 26
                                echo "          ";
                            } else {
                                // line 27
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                // line 28
                                echo "          ";
                            }
                            // line 29
                            echo "        ";
                        }
                        // line 30
                        echo "      ";
                    }
                    // line 31
                    echo "      ";
                    if ( !($context["presentationslides"] ?? null)) {
                        // line 32
                        echo "        <a class=\"";
                        echo ($context["link_classes"] ?? null);
                        echo "\" href=\"";
                        echo ($context["git_repo_link_url"] ?? null);
                        echo "\" title=\"";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "\" target=\"_blank\">
          <i class=\"fa fa-";
                        // line 33
                        echo ($context["git_repo_link_icon"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "</a>
      ";
                    }
                    // line 35
                    echo "    ";
                } else {
                    // line 36
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", [])) {
                        // line 37
                        echo "        ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", []);
                        // line 38
                        echo "      ";
                    } elseif (($context["presentationpagepath"] ?? null)) {
                        // line 39
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . ($context["presentationpagepath"] ?? null));
                        // line 40
                        echo "      ";
                    } else {
                        // line 41
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/" => "/"]));
                        // line 42
                        echo "      ";
                    }
                    // line 43
                    echo "      ";
                    if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) &&  !($context["presentationslides"] ?? null))) {
                        // line 44
                        echo "        ";
                        $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), [(("/" . $this->getAttribute(                        // line 45
($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                        // line 47
                        echo "      ";
                    }
                    // line 48
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                        // line 49
                        echo "        ";
                        $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                        // line 50
                        echo "      ";
                    } else {
                        // line 51
                        echo "        ";
                        if ( !($context["presentationslides"] ?? null)) {
                            // line 52
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                                // line 53
                                echo "            ";
                                $context["git_repo_link_text"] = "Edit this Page";
                                // line 54
                                echo "          ";
                            } else {
                                // line 55
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                // line 56
                                echo "          ";
                            }
                            // line 57
                            echo "        ";
                        } else {
                            // line 58
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text"))) {
                                // line 59
                                echo "            ";
                                $context["git_repo_link_text"] = "Edit these Slides";
                                // line 60
                                echo "          ";
                            } else {
                                // line 61
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                // line 62
                                echo "          ";
                            }
                            // line 63
                            echo "        ";
                        }
                        // line 64
                        echo "      ";
                    }
                    // line 65
                    echo "      ";
                    if (($context["presentationslides"] ?? null)) {
                        echo "(";
                    }
                    echo "<a class=\"";
                    echo ($context["link_classes"] ?? null);
                    echo "\" href=\"";
                    echo ($context["git_repo_link_url"] ?? null);
                    echo "\" title=\"";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "\" target=\"_blank\"><i class=\"fa fa-";
                    echo ($context["git_repo_link_icon"] ?? null);
                    echo "\" aria-hidden=\"true\"></i>";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "</a>";
                    if (($context["presentationslides"] ?? null)) {
                        echo ")";
                    }
                    // line 66
                    echo "    ";
                }
                // line 67
                echo "  ";
            }
        } else {
            // line 69
            echo "  ";
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", []) || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", []) && twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", []))))) {
                // line 70
                echo "    ";
                $context["admin_panel_appearance_url"] = ($this->getAttribute(($context["grav"] ?? null), "base_url", []) . "/admin/plugins/git-sync");
                // line 71
                echo "    ";
                if ( !($context["presentationslides"] ?? null)) {
                    // line 72
                    echo "      <a class=\"";
                    echo ($context["link_classes"] ?? null);
                    echo "\" href=\"";
                    echo ($context["admin_panel_appearance_url"] ?? null);
                    echo "\" title=\"Setup Git Sync\">
        <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>
    ";
                }
                // line 75
                echo "  ";
            } else {
                // line 76
                echo "    ";
                if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", []) &&  !($context["presentationslides"] ?? null))) {
                    // line 77
                    echo "      ";
                    $context["git_sync_repo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", []);
                    // line 78
                    echo "      ";
                    $context["git_sync_repo_link"] = twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]);
                    // line 79
                    echo "      ";
                    if (twig_in_filter("github", ($context["git_sync_repo_link"] ?? null))) {
                        // line 80
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 81
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 82
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", ($context["git_sync_repo_link"] ?? null))) {
                        // line 83
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 84
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 85
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_sync_repo_link"] ?? null))) {
                        // line 86
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 87
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("src/master", ["user/" => "/"]));
                        // line 88
                        echo "      ";
                    } else {
                        // line 89
                        echo "        ";
                        $context["git_repo_link_icon"] = "git";
                        // line 90
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 91
                        echo "      ";
                    }
                    // line 92
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", [])) {
                        // line 93
                        echo "        ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", []);
                        // line 94
                        echo "      ";
                    } elseif (($context["presentationpagepath"] ?? null)) {
                        // line 95
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . ($context["presentationpagepath"] ?? null));
                        // line 96
                        echo "      ";
                    } else {
                        // line 97
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/" => "/"]));
                        // line 98
                        echo "      ";
                    }
                    // line 99
                    echo "      ";
                    if ( !twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                        // line 100
                        echo "        ";
                        $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                        // line 101
                        echo "      ";
                    }
                    // line 102
                    echo "      ";
                    if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                        // line 103
                        echo "        ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                            // line 104
                            echo "          ";
                            $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                            // line 105
                            echo "        ";
                        } else {
                            // line 106
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link_text"))) {
                                // line 107
                                echo "            ";
                                $context["git_repo_link_text"] = "View Content Repository";
                                // line 108
                                echo "          ";
                            } else {
                                // line 109
                                echo "            ";
                                if ( !($context["presentationslides"] ?? null)) {
                                    // line 110
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                    // line 111
                                    echo "            ";
                                } else {
                                    // line 112
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                    // line 113
                                    echo "            ";
                                }
                                // line 114
                                echo "          ";
                            }
                            // line 115
                            echo "        ";
                        }
                        // line 116
                        echo "        ";
                        if ( !($context["presentationslides"] ?? null)) {
                            // line 117
                            echo "          <a class=\"";
                            echo ($context["link_classes"] ?? null);
                            echo "\" href=\"";
                            echo ($context["git_sync_repo_link"] ?? null);
                            echo "\" title=\"";
                            echo ($context["git_repo_link_text"] ?? null);
                            echo "\" target=\"_blank\">
            <i class=\"fa fa-";
                            // line 118
                            echo ($context["git_repo_link_icon"] ?? null);
                            echo "\" aria-hidden=\"true\"></i>";
                            echo ($context["git_repo_link_text"] ?? null);
                            echo "</a>
        ";
                        }
                        // line 120
                        echo "      ";
                    } else {
                        // line 121
                        echo "        ";
                        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) &&  !($context["presentationslides"] ?? null))) {
                            // line 122
                            echo "          ";
                            $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), [(("/" . $this->getAttribute(                            // line 123
($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                            // line 125
                            echo "        ";
                        }
                        // line 126
                        echo "        ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                            // line 127
                            echo "          ";
                            $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                            // line 128
                            echo "        ";
                        } else {
                            // line 129
                            echo "          ";
                            if ( !($context["presentationslides"] ?? null)) {
                                // line 130
                                echo "            ";
                                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                                    // line 131
                                    echo "              ";
                                    $context["git_repo_link_text"] = "Edit this Page";
                                    // line 132
                                    echo "            ";
                                } else {
                                    // line 133
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                    // line 134
                                    echo "            ";
                                }
                                // line 135
                                echo "          ";
                            } else {
                                // line 136
                                echo "            ";
                                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text"))) {
                                    // line 137
                                    echo "              ";
                                    $context["git_repo_link_text"] = "Edit these Slides";
                                    // line 138
                                    echo "            ";
                                } else {
                                    // line 139
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                    // line 140
                                    echo "            ";
                                }
                                // line 141
                                echo "          ";
                            }
                            // line 142
                            echo "        ";
                        }
                        // line 143
                        echo "        ";
                        if (($context["presentationslides"] ?? null)) {
                            echo "(";
                        }
                        echo "<a class=\"";
                        echo ($context["link_classes"] ?? null);
                        echo "\" href=\"";
                        echo ($context["git_repo_link_url"] ?? null);
                        echo "\" title=\"";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "\" target=\"_blank\"><i class=\"fa fa-";
                        echo ($context["git_repo_link_icon"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "</a>";
                        if (($context["presentationslides"] ?? null)) {
                            echo ")";
                        }
                        // line 144
                        echo "      ";
                    }
                    // line 145
                    echo "    ";
                }
                // line 146
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/git_sync_repo_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 146,  495 => 145,  492 => 144,  473 => 143,  470 => 142,  467 => 141,  464 => 140,  461 => 139,  458 => 138,  455 => 137,  452 => 136,  449 => 135,  446 => 134,  443 => 133,  440 => 132,  437 => 131,  434 => 130,  431 => 129,  428 => 128,  425 => 127,  422 => 126,  419 => 125,  417 => 123,  415 => 122,  412 => 121,  409 => 120,  402 => 118,  393 => 117,  390 => 116,  387 => 115,  384 => 114,  381 => 113,  378 => 112,  375 => 111,  372 => 110,  369 => 109,  366 => 108,  363 => 107,  360 => 106,  357 => 105,  354 => 104,  351 => 103,  348 => 102,  345 => 101,  342 => 100,  339 => 99,  336 => 98,  333 => 97,  330 => 96,  327 => 95,  324 => 94,  321 => 93,  318 => 92,  315 => 91,  312 => 90,  309 => 89,  306 => 88,  303 => 87,  300 => 86,  297 => 85,  294 => 84,  291 => 83,  288 => 82,  285 => 81,  282 => 80,  279 => 79,  276 => 78,  273 => 77,  270 => 76,  267 => 75,  258 => 72,  255 => 71,  252 => 70,  249 => 69,  245 => 67,  242 => 66,  223 => 65,  220 => 64,  217 => 63,  214 => 62,  211 => 61,  208 => 60,  205 => 59,  202 => 58,  199 => 57,  196 => 56,  193 => 55,  190 => 54,  187 => 53,  184 => 52,  181 => 51,  178 => 50,  175 => 49,  172 => 48,  169 => 47,  167 => 45,  165 => 44,  162 => 43,  159 => 42,  156 => 41,  153 => 40,  150 => 39,  147 => 38,  144 => 37,  141 => 36,  138 => 35,  131 => 33,  122 => 32,  119 => 31,  116 => 30,  113 => 29,  110 => 28,  107 => 27,  104 => 26,  101 => 25,  98 => 24,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if theme_var('git_sync_repo_link') %}
  {% if not (page.header.hide_git_sync_repo_link and not (presentationslides)) %}
    {% set git_repo_link_url = theme_var('git_sync_repo_link') %}
    {% if theme_var('custom_git_sync_repo_link_icon')is empty %}
      {% if 'github' in git_repo_link_url %}
        {% set git_repo_link_icon = \"github\" %}
      {% elseif 'gitlab' in git_repo_link_url %}
        {% set git_repo_link_icon = \"gitlab\" %}
      {% elseif 'bitbucket' in git_repo_link_url %}
        {% set git_repo_link_icon = \"bitbucket\" %}
      {% else %}
        {% set git_repo_link_icon = \"git\" %}
      {% endif %}
    {% else %}
      {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
    {% endif %}
    {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link')is empty %}
      {% if page.header.git_sync_repo_link_text %}
        {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
      {% else %}
        {% if theme_var('custom_git_sync_repo_link_text')is empty %}
          {% set git_repo_link_text = 'View Content Repository' %}
        {% else %}
          {% if not presentationslides %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
          {% endif %}
        {% endif %}
      {% endif %}
      {% if not presentationslides %}
        <a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
          <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
      {% endif %}
    {% else %}
      {% if page.header.git_sync_repo_link %}
        {% set git_repo_link_url = page.header.git_sync_repo_link %}
      {% elseif presentationpagepath %}
        {% set git_repo_link_url = git_repo_link_url ~ presentationpagepath %}
      {% else %}
        {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
      {% endif %}
      {% if (page.children.count) and (not presentationslides) %}
        {% set git_repo_link_url = (git_repo_link_url | replace({
          ('/' ~ page.template ~ '.md'): '/'
        })) %}
      {% endif %}
      {% if page.header.git_sync_repo_link_text %}
        {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
      {% else %}
        {% if not presentationslides %}
          {% if theme_var('custom_git_sync_repo_link_text')is empty %}
            {% set git_repo_link_text = 'Edit this Page' %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
          {% endif %}
        {% else %}
          {% if theme_var('custom_git_sync_repo_presentation_link_text')is empty %}
            {% set git_repo_link_text = 'Edit these Slides' %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
          {% endif %}
        {% endif %}
      {% endif %}
      {% if presentationslides %}({% endif %}<a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>{% if presentationslides %}){% endif %}
    {% endif %}
  {% endif %}
{% else %}
  {% if not (config.plugins['git-sync'].enabled) or (config.plugins['git-sync'].enabled and config.plugins['git-sync'].repository is empty) %}
    {% set admin_panel_appearance_url = grav.base_url ~ '/admin/plugins/git-sync' %}
    {% if not presentationslides %}
      <a class=\"{{ link_classes }}\" href=\"{{ admin_panel_appearance_url }}\" title=\"Setup Git Sync\">
        <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>
    {% endif %}
  {% else %}
    {% if not (page.header.hide_git_sync_repo_link and not (presentationslides)) %}
      {% set git_sync_repo = config.plugins['git-sync'].repository %}
      {% set git_sync_repo_link = (git_sync_repo | replace({'.git': '/'})) %}
      {% if 'github' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"github\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% elseif 'gitlab' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"gitlab\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% elseif 'bitbucket' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"bitbucket\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'src/master' | replace({'user/': '/'}) %}
      {% else %}
        {% set git_repo_link_icon = \"git\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% endif %}
      {% if page.header.git_sync_repo_link %}
        {% set git_repo_link_url = page.header.git_sync_repo_link %}
      {% elseif presentationpagepath %}
        {% set git_repo_link_url = git_repo_link_url ~ presentationpagepath %}
      {% else %}
        {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
      {% endif %}
      {% if theme_var('custom_git_sync_repo_link_icon')is not empty %}
        {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
      {% endif %}
      {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link')is empty %}
        {% if page.header.git_sync_repo_link_text %}
          {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
        {% else %}
          {% if theme_var('git_sync_repo_link_text')is empty %}
            {% set git_repo_link_text = 'View Content Repository' %}
          {% else %}
            {% if not presentationslides %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
            {% endif %}
          {% endif %}
        {% endif %}
        {% if not presentationslides %}
          <a class=\"{{ link_classes }}\" href=\"{{ git_sync_repo_link}}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
            <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
        {% endif %}
      {% else %}
        {% if (page.children.count) and (not presentationslides) %}
          {% set git_repo_link_url = (git_repo_link_url | replace({
            ('/' ~ page.template ~ '.md'): '/'
          })) %}
        {% endif %}
        {% if page.header.git_sync_repo_link_text %}
          {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
        {% else %}
          {% if not presentationslides %}
            {% if theme_var('custom_git_sync_repo_link_text')is empty %}
              {% set git_repo_link_text = 'Edit this Page' %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% endif %}
          {% else %}
            {% if theme_var('custom_git_sync_repo_presentation_link_text')is empty %}
              {% set git_repo_link_text = 'Edit these Slides' %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
            {% endif %}
          {% endif %}
        {% endif %}
        {% if presentationslides %}({% endif %}<a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>{% if presentationslides %}){% endif %}
      {% endif %}
    {% endif %}
  {% endif %}
{% endif %}
", "partials/git_sync_repo_link.html.twig", "/home/rcruzr/workspace/adunis/testing/user/themes/quark-open-publishing/templates/partials/git_sync_repo_link.html.twig");
    }
}
