<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Installation/tablesCreation.twig */
class __TwigTemplate_83bafd47e2fe55c4cae26b5556ae64dca8e1197999371081488ecd0eea2a24e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Installation/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/tablesCreation.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <h2>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_Tables"), "html", null, true);
        echo "</h2>

    ";
        // line 7
        if (array_key_exists("someTablesInstalled", $context)) {
            // line 8
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 9
            echo $this->env->getFilter('translate')->getCallable()("Installation_TablesWithSameNamesFound", "<span id='linkToggle'>", "</span>");
            echo "
        </div>
        <p>
            ";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_TablesFound"), "html", null, true);
            echo ":
        </p>
        <p>
            <em>";
            // line 15
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["tablesInstalled"]) || array_key_exists("tablesInstalled", $context) ? $context["tablesInstalled"] : (function () { throw new RuntimeError('Variable "tablesInstalled" does not exist.', 15, $this->source); })()), "html", null, true);
            echo " </em>
        </p>
        ";
            // line 17
            if (array_key_exists("showReuseExistingTables", $context)) {
                // line 18
                echo "            <p>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_TablesWarningHelp"), "html", null, true);
                echo "</p>
            <p class=\"next-step\">
                <a href=\"";
                // line 20
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["action" => "reuseTables"]), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_TablesReuse"), "html", null, true);
                echo " &raquo;</a>
            </p>
        ";
            } else {
                // line 23
                echo "            <p class=\"next-step\">
                <a href=\"";
                // line 24
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["action" => (isset($context["previousPreviousModuleName"]) || array_key_exists("previousPreviousModuleName", $context) ? $context["previousPreviousModuleName"] : (function () { throw new RuntimeError('Variable "previousPreviousModuleName" does not exist.', 24, $this->source); })())]), "html", null, true);
                echo "\">&laquo; ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_GoBackAndDefinePrefix"), "html", null, true);
                echo "</a>
            </p>
        ";
            }
            // line 27
            echo "        <p class=\"next-step\">
            <a href=\"";
            // line 28
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["deleteTables" => 1]), "html", null, true);
            echo "\" id=\"eraseAllTables\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_TablesDelete"), "html", null, true);
            echo " &raquo;</a>
        </p>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (array_key_exists("existingTablesDeleted", $context)) {
            // line 33
            echo "        <div class=\"alert alert-success\">
            ";
            // line 34
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_TablesDeletedSuccess"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if (array_key_exists("tablesCreated", $context)) {
            // line 39
            echo "        <div class=\"alert alert-success\">
            ";
            // line 40
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_TablesCreatedSuccess"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 43
        echo "
    <script>
        \$(document).ready(function () {
            var strConfirmEraseTables = \"";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_ConfirmDeleteExistingTables", (("[" . (isset($context["tablesInstalled"]) || array_key_exists("tablesInstalled", $context) ? $context["tablesInstalled"] : (function () { throw new RuntimeError('Variable "tablesInstalled" does not exist.', 46, $this->source); })())) . "]")), "html", null, true);
        echo " \";

            \$(\"#eraseAllTables\").click(function () {
                if (!confirm(strConfirmEraseTables)) {
                    return false;
                }
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "@Installation/tablesCreation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 46,  146 => 43,  140 => 40,  137 => 39,  135 => 38,  132 => 37,  126 => 34,  123 => 33,  121 => 32,  118 => 31,  110 => 28,  107 => 27,  99 => 24,  96 => 23,  88 => 20,  82 => 18,  80 => 17,  75 => 15,  69 => 12,  63 => 9,  60 => 8,  58 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installation/layout.twig' %}

{% block content %}

    <h2>{{ 'Installation_Tables'|translate }}</h2>

    {% if someTablesInstalled is defined %}
        <div class=\"alert alert-warning\">
            {{ 'Installation_TablesWithSameNamesFound'|translate(\"<span id='linkToggle'>\",\"</span>\")|raw }}
        </div>
        <p>
            {{ 'Installation_TablesFound'|translate }}:
        </p>
        <p>
            <em>{{ tablesInstalled }} </em>
        </p>
        {% if showReuseExistingTables is defined %}
            <p>{{ 'Installation_TablesWarningHelp'|translate }}</p>
            <p class=\"next-step\">
                <a href=\"{{ linkTo({'action':'reuseTables'}) }}\">{{ 'Installation_TablesReuse'|translate }} &raquo;</a>
            </p>
        {% else %}
            <p class=\"next-step\">
                <a href=\"{{ linkTo({'action':previousPreviousModuleName}) }}\">&laquo; {{ 'Installation_GoBackAndDefinePrefix'|translate }}</a>
            </p>
        {% endif %}
        <p class=\"next-step\">
            <a href=\"{{ linkTo({'deleteTables':1}) }}\" id=\"eraseAllTables\">{{ 'Installation_TablesDelete'|translate }} &raquo;</a>
        </p>
    {% endif %}

    {% if existingTablesDeleted is defined %}
        <div class=\"alert alert-success\">
            {{ 'Installation_TablesDeletedSuccess'|translate }}
        </div>
    {% endif %}

    {% if tablesCreated is defined %}
        <div class=\"alert alert-success\">
            {{ 'Installation_TablesCreatedSuccess'|translate }}
        </div>
    {% endif %}

    <script>
        \$(document).ready(function () {
            var strConfirmEraseTables = \"{{ 'Installation_ConfirmDeleteExistingTables'|translate(\"[\"~tablesInstalled~\"]\") }} \";

            \$(\"#eraseAllTables\").click(function () {
                if (!confirm(strConfirmEraseTables)) {
                    return false;
                }
            });
        });
    </script>

{% endblock %}", "@Installation/tablesCreation.twig", "/var/www/matomo/plugins/Installation/templates/tablesCreation.twig");
    }
}
