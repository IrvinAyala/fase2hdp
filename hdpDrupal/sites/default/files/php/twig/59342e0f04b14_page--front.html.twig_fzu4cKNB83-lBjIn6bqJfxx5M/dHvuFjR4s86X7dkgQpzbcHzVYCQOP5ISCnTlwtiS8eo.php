<?php

/* themes/easy_news/templates/layout/page--front.html.twig */
class __TwigTemplate_5e50c32b05f5e484103a375e4939e2f0e34d20b9782f23ed442186a6e3e7d4c8 extends Twig_Template
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
        $tags = array("include" => 55, "if" => 64);
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/header.html.twig"), "themes/easy_news/templates/layout/page--front.html.twig", 55)->display($context);
        // line 56
        echo "
<div class=\"uk-container uk-container-center uk-responsive-width uk-margin-top\">

";
        // line 64
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 65
            echo "  <div class=\"uk-grid uk-container-center uk-grid-divider uk-margin-bottom\">
  ";
            // line 66
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 67
                echo "    <div class=\"uk-width-medium-2-3 uk-width-large-3-4\">
  ";
            } else {
                // line 69
                echo "    <div class=\"uk-width-medium-1-1\">
  ";
            }
            // line 71
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
            echo "
    </div>
  ";
            // line 73
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 74
                echo "    <div class=\"uk-container uk-width-medium-1-3 uk-width-large-1-4 uk-margin-bottom\">
      ";
                // line 75
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
    </div>
  ";
            }
            // line 78
            echo "  </div>
";
        }
        // line 80
        echo "
";
        // line 86
        echo "  <div class=\"uk-grid uk-container-center uk-grid-divider uk-margin-bottom\">
  ";
        // line 87
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 88
            echo "    <div class=\"uk-width-large-3-4 uk-margin-bottom\">
  ";
        } else {
            // line 90
            echo "    <div class=\"uk-width-large-1-1 uk-margin-bottom\">
  ";
        }
        // line 92
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 93
            echo "      <div class=\"uk-width-1-1\">
        ";
            // line 94
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 97
        echo "      <div class=\"uk-width-1-1\">
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 101
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          </section>
        </main>
      </div>
    ";
        // line 105
        if ((((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "section_widget_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "section_widget_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "section_widget_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "section_widget_4", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "section_widget_5", array()))) {
            // line 106
            echo "      <div class=\"uk-grid uk-grid-divider\">
        <div class=\"uk-width-medium-1-2\">
          ";
            // line 108
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "section_widget_1", array()), "html", null, true));
            echo "
          ";
            // line 109
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "section_widget_2", array()), "html", null, true));
            echo "
          ";
            // line 110
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "section_widget_3", array()), "html", null, true));
            echo "
        </div>
        <div class=\"uk-width-medium-1-2\">
          ";
            // line 113
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "section_widget_4", array()), "html", null, true));
            echo "
          ";
            // line 114
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "section_widget_5", array()), "html", null, true));
            echo "
          ";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "section_widget_6", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 119
        echo "    </div>

  ";
        // line 121
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 122
            echo "    <div class=\"uk-container uk-width-large-1-4 uk-margin-bottom\">
  ";
        } else {
            // line 124
            echo "    <div class=\"uk-container uk-width-large-1-1 uk-margin-bottom\">
  ";
        }
        // line 126
        echo "  ";
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 127
            echo "    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 128
                echo "      <div class=\"uk-margin-bottom\">
        ";
                // line 129
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 132
            echo "  ";
        }
        // line 133
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 134
            echo "      <div class=\"uk-margin-bottom\">
        ";
            // line 135
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 138
        echo "    </div>
  </div>

</div>

";
        // line 143
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/includes/footer.html.twig"), "themes/easy_news/templates/layout/page--front.html.twig", 143)->display($context);
        // line 144
        echo "
";
        // line 145
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 146
            echo "  <div id=\"offcanvas\" class=\"uk-offcanvas\" role=\"navigation\">
    <div class=\"uk-offcanvas-bar\">
      <ul class=\"uk-nav uk-nav-offcanvas\" data-uk-nav>
        ";
            // line 149
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
        return "themes/easy_news/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 149,  223 => 146,  221 => 145,  218 => 144,  216 => 143,  209 => 138,  203 => 135,  200 => 134,  197 => 133,  194 => 132,  188 => 129,  185 => 128,  182 => 127,  179 => 126,  175 => 124,  171 => 122,  169 => 121,  165 => 119,  158 => 115,  154 => 114,  150 => 113,  144 => 110,  140 => 109,  136 => 108,  132 => 106,  130 => 105,  123 => 101,  117 => 97,  111 => 94,  108 => 93,  105 => 92,  101 => 90,  97 => 88,  95 => 87,  92 => 86,  89 => 80,  85 => 78,  79 => 75,  76 => 74,  74 => 73,  68 => 71,  64 => 69,  60 => 67,  58 => 66,  55 => 65,  53 => 64,  48 => 56,  46 => 55,  43 => 54,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display the front page.
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

{#
  If both slideshow and first sidebar are defined, they will be displayed
  beside each other. On small devices, first sidebar appears below slideshow.
  If there is no slideshow, first sidebar will be displayed later.
#}
{% if page.slideshow %}
  <div class=\"uk-grid uk-container-center uk-grid-divider uk-margin-bottom\">
  {% if page.sidebar_first %}
    <div class=\"uk-width-medium-2-3 uk-width-large-3-4\">
  {% else %}
    <div class=\"uk-width-medium-1-1\">
  {% endif %}
      {{ page.slideshow }}
    </div>
  {% if page.sidebar_first %}
    <div class=\"uk-container uk-width-medium-1-3 uk-width-large-1-4 uk-margin-bottom\">
      {{ page.sidebar_first }}
    </div>
  {% endif %}
  </div>
{% endif %}

{#
  If second sidebar is defined, it will be displayed beside the main content.
  If there was no slideshow above, first sidebar will also be displayed here.
  On small devices, sidebar(s) appear(s) below main content.
#}
  <div class=\"uk-grid uk-container-center uk-grid-divider uk-margin-bottom\">
  {% if (page.sidebar_first or page.sidebar_second) %}
    <div class=\"uk-width-large-3-4 uk-margin-bottom\">
  {% else %}
    <div class=\"uk-width-large-1-1 uk-margin-bottom\">
  {% endif %}
    {% if page.highlighted %}
      <div class=\"uk-width-1-1\">
        {{ page.highlighted }}
      </div>
    {% endif %}
      <div class=\"uk-width-1-1\">
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            {{ page.content }}
          </section>
        </main>
      </div>
    {% if (page.section_widget_1 or page.section_widget_2 or page.section_widget_3 or page.section_widget_4 or page.section_widget_5) %}
      <div class=\"uk-grid uk-grid-divider\">
        <div class=\"uk-width-medium-1-2\">
          {{ page.section_widget_1 }}
          {{ page.section_widget_2 }}
          {{ page.section_widget_3 }}
        </div>
        <div class=\"uk-width-medium-1-2\">
          {{ page.section_widget_4 }}
          {{ page.section_widget_5 }}
          {{ page.section_widget_6 }}
        </div>
      </div>
    {% endif %}
    </div>

  {% if (page.sidebar_first or page.sidebar_second) %}
    <div class=\"uk-container uk-width-large-1-4 uk-margin-bottom\">
  {% else %}
    <div class=\"uk-container uk-width-large-1-1 uk-margin-bottom\">
  {% endif %}
  {% if not (page.slideshow) %}
    {% if page.sidebar_first %}
      <div class=\"uk-margin-bottom\">
        {{ page.sidebar_first }}
      </div>
    {% endif %}
  {% endif %}
\t{% if page.sidebar_second %}
      <div class=\"uk-margin-bottom\">
        {{ page.sidebar_second }}
      </div>
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
{% endif %}";
    }
}
