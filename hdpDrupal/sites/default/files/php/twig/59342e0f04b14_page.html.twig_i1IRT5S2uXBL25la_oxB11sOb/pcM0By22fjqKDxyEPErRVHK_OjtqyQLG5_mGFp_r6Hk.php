<?php

/* themes/easy_news/templates/layout/page.html.twig */
class __TwigTemplate_1f5b04135fe96b8c00a3f7964962ad70d0756766c7f016c157134b21df4c8904 extends Twig_Template
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
        $tags = array("include" => 55, "if" => 60);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 54
        echo "
";
        // line 55
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header.html.twig"), "themes/easy_news/templates/layout/page.html.twig", 55)->display($context);
        // line 56
        echo "
<div class=\"uk-container uk-container-center uk-responsive-width uk-margin-top\">

  <div class=\"uk-grid uk-container-center uk-grid-divider uk-margin-bottom\">
  ";
        // line 60
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 61
            echo "    <div class=\"uk-width-medium-2-3 uk-width-large-3-4\">
      ";
            // line 62
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 65
        echo "\t
  ";
        // line 66
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 67
            echo "    <div class=\"uk-width-medium-2-3 uk-width-large-3-4\">
  ";
        } else {
            // line 68
            echo "}
    <div class=\"uk-width-medium-1-1\">
  ";
        }
        // line 71
        echo "    <main id=\"content\" class=\"column main-content\" role=\"main\">
      <section class=\"section\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 74
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </section>
    </main>
  </div>
  ";
        // line 78
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 79
            echo "    <div class=\"uk-width-medium-1-3 uk-width-large-1-4\">
    ";
            // line 80
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 81
                echo "      <div class=\"uk-margin-bottom\">
        ";
                // line 82
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 85
            echo "    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 86
                echo "      <div class=\"uk-margin-bottom\">
        ";
                // line 87
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 90
            echo "  ";
        }
        // line 91
        echo "    </div>
  </div>

</div>

";
        // line 96
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/footer.html.twig"), "themes/easy_news/templates/layout/page.html.twig", 96)->display($context);
        // line 97
        echo "
";
        // line 98
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 99
            echo "  <div id=\"offcanvas\" class=\"uk-offcanvas\" role=\"navigation\">
    <div class=\"uk-offcanvas-bar\">
      <ul class=\"uk-nav uk-nav-offcanvas\" data-uk-nav>
        ";
            // line 102
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/easy_news/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 102,  136 => 99,  134 => 98,  131 => 97,  129 => 96,  122 => 91,  119 => 90,  113 => 87,  110 => 86,  107 => 85,  101 => 82,  98 => 81,  96 => 80,  93 => 79,  91 => 78,  84 => 74,  79 => 71,  74 => 68,  70 => 67,  68 => 66,  65 => 65,  59 => 62,  56 => 61,  54 => 60,  48 => 56,  46 => 55,  43 => 54,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.branding: Items for the site branding region.
 * - page.header_ad: Items for the header advertising region.
 * - page.main_menu: Items for the primary menu region.
 * - page.social_icons: Items for the social network icons region.
 * - page.slideshow: Items for the slideshow region.
 * - page.highlighted: Items for the highlighted region.
 * - page.content: The main content of the current page.
 * - page.section_widget_1: Items for the first news section widget.
 * - page.section_widget_2: Items for the second news section widget.
 * - page.section_widget_3: Items for the third news section widget.
 * - page.section_widget_4: Items for the fourth news section widget.
 * - page.section_widget_5: Items for the fifth news section widget.
 * - page.section_widget_6: Items for the sixth news section widget.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.credits: Items for the copyright and credits region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

{% include directory ~ '/templates/includes/header.html.twig' %}

<div class=\"uk-container uk-container-center uk-responsive-width uk-margin-top\">

  <div class=\"uk-grid uk-container-center uk-grid-divider uk-margin-bottom\">
  {% if page.highlighted %}
    <div class=\"uk-width-medium-2-3 uk-width-large-3-4\">
      {{ page.highlighted }}
    </div>
    {% endif %}
\t
  {% if (page.sidebar_first or page.sidebar_second) %}
    <div class=\"uk-width-medium-2-3 uk-width-large-3-4\">
  {% else %}}
    <div class=\"uk-width-medium-1-1\">
  {% endif %}
    <main id=\"content\" class=\"column main-content\" role=\"main\">
      <section class=\"section\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        {{ page.content }}
      </section>
    </main>
  </div>
  {% if (page.sidebar_first or page.sidebar_second) %}
    <div class=\"uk-width-medium-1-3 uk-width-large-1-4\">
    {% if page.sidebar_first %}
      <div class=\"uk-margin-bottom\">
        {{ page.sidebar_first }}
      </div>
    {% endif %}
    {% if page.sidebar_second %}
      <div class=\"uk-margin-bottom\">
        {{ page.sidebar_second }}
      </div>
    {% endif %}
  {% endif %}
    </div>
  </div>

</div>

{% include directory ~ '/templates/includes/footer.html.twig' %}

{% if page.main_menu %}
  <div id=\"offcanvas\" class=\"uk-offcanvas\" role=\"navigation\">
    <div class=\"uk-offcanvas-bar\">
      <ul class=\"uk-nav uk-nav-offcanvas\" data-uk-nav>
        {{ page.main_menu }}
      </ul>
    </div>
  </div>
{% endif %}
";
    }
}
