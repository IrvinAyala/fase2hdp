<?php

/* themes/easy_news/templates/navigation/menu--main.html.twig */
class __TwigTemplate_f2a4e38e421f32f4f0540a31dd06244e835d3fafbf01af20c7803924e682fbcc extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 30, "if" => 32, "for" => 39);
        $filters = array();
        $functions = array("link" => 45);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for'),
                array(),
                array('link')
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

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
    }

    // line 30
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 31
            echo "  ";
            $context["menus"] = $this;
            // line 32
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 33
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 34
                    echo "      <ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "uk-navbar-nav", 1 => "menu"), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 36
                    echo "      <div class=\"uk-dropdown uk-dropdown-navbar menu\">
        <ul";
                    // line 37
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "uk-nav uk-nav-navbar"), "method"), "html", null, true));
                    echo ">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      ";
                    if ((((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0) && $this->getAttribute($context["item"], "is_expanded", array()))) {
                        // line 41
                        echo "        <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "expanded", 1 => "uk-parent"), "method"), "html", null, true));
                        echo " data-uk-dropdown>
          <a href=\"";
                        // line 42
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo " <i class=\"uk-icon-caret-down\"></i></a>
      ";
                    } else {
                        // line 44
                        echo "        <li>
          ";
                        // line 45
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
      ";
                    }
                    // line 47
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 48
                        echo "        ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => "uk-nav", 1 => "uk-navbar-nav"), "method"), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
      ";
                    }
                    // line 50
                    echo "        </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "      </ul>
    ";
                // line 53
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 54
                    echo "    ";
                } else {
                    // line 55
                    echo "      </div>
    ";
                }
                // line 57
                echo "  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/easy_news/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 57,  144 => 55,  141 => 54,  139 => 53,  136 => 52,  129 => 50,  123 => 48,  120 => 47,  115 => 45,  112 => 44,  105 => 42,  100 => 41,  97 => 40,  92 => 39,  87 => 37,  84 => 36,  78 => 34,  75 => 33,  72 => 32,  69 => 31,  55 => 30,  48 => 27,  45 => 22,  43 => 21,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display the main navigation.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{# Implementation of Uikit dropdown menu #}
{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass('uk-navbar-nav', 'menu') }}>
    {% else %}
      <div class=\"uk-dropdown uk-dropdown-navbar menu\">
        <ul{{ attributes.addClass('uk-nav uk-nav-navbar') }}>
    {% endif %}
    {% for item in items %}
      {% if menu_level == 0 and item.is_expanded %}
        <li{{ item.attributes.addClass('expanded', 'uk-parent') }} data-uk-dropdown>
          <a href=\"{{ item.url }}\">{{ item.title }} <i class=\"uk-icon-caret-down\"></i></a>
      {% else %}
        <li>
          {{ link(item.title, item.url) }}
      {% endif %}
      {% if item.below %}
        {{ menus.menu_links(item.below, attributes.removeClass('uk-nav', 'uk-navbar-nav'), menu_level + 1) }}
      {% endif %}
        </li>
    {% endfor %}
      </ul>
    {% if menu_level == 0 %}
    {% else %}
      </div>
    {% endif %}
  {% endif %}
{% endmacro %}";
    }
}
