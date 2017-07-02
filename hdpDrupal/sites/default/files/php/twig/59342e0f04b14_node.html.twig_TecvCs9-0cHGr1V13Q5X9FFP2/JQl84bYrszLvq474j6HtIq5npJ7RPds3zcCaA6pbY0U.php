<?php

/* themes/easy_news/templates/content/node.html.twig */
class __TwigTemplate_43fa7bc35f60b99c4a5b2e9cc427b7b5a9bbf450f4c4af8cdf29a3d5843283a2 extends Twig_Template
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
        $tags = array("set" => 70, "if" => 88);
        $filters = array("clean_class" => 72, "date" => 112);
        $functions = array("attach_library" => 80);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'date'),
                array('attach_library')
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

        // line 70
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 72
(isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 2 => (($this->getAttribute(        // line 73
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 74
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 75
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 76
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 6 => "clearfix");
        // line 80
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("classy/node"), "html", null, true));
        echo "

<article";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">

  ";
        // line 85
        echo "  <div class=\"uk-grid\">
    <div class=\"uk-width-large-2-3  uk-margin-bottom\">
      <div class=\"uk-responsive-width\">
        ";
        // line 88
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_video_embed", array())) {
            // line 89
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_video_embed", array()), "html", null, true));
            echo "
        ";
        } else {
            // line 91
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "html", null, true));
            echo "
        ";
        }
        // line 93
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image_description", array()), "html", null, true));
        echo "
      </div>
    </div>
    
    ";
        // line 98
        echo "    <div class=\"uk-grid uk-width-large-1-3 uk-margin-bottom\">
      <div class=\"uk-width-1-1\">
        ";
        // line 100
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
        <h1";
        // line 101
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
        echo ">
          <a href=\"";
        // line 102
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</a>
        </h1>
        ";
        // line 104
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
      </div>
      <div class=\"uk-width-1-1\">
        ";
        // line 107
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tags", array()), "html", null, true));
        echo "
      </div>
    ";
        // line 109
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 110
            echo "      <div class=\"uk-width-1-1 node__meta\">
        <span class=\"uk-icon-clock-o\"></span>
        <span> ";
            // line 112
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "createdtime", array()), "d-m-Y"), "html", null, true));
            echo " &nbsp </span>
        <span class=\"uk-icon-user\"> ";
            // line 113
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_name"]) ? $context["author_name"] : null), "html", null, true));
            echo " </span>
      </div>
    ";
        }
        // line 116
        echo "
      ";
        // line 118
        echo "      <div class=\"uk-width-1-1\">
        ";
        // line 119
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "addtoany", array()), "html", null, true));
        echo "
      </div>

  </div>

  ";
        // line 125
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content", 1 => "uk-width-1-1", 2 => "uk-margin-bottom"), "method"), "html", null, true));
        echo ">
    ";
        // line 126
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "
  </div>

  <hr class=\"uk-grid-divider\">

  <div";
        // line 131
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content", 1 => "uk-width-1-1", 2 => "uk-margin-bottom"), "method"), "html", null, true));
        echo ">
    ";
        // line 132
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
        echo "
    ";
        // line 133
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true));
        echo "
  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/easy_news/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 133,  164 => 132,  160 => 131,  152 => 126,  147 => 125,  139 => 119,  136 => 118,  133 => 116,  127 => 113,  123 => 112,  119 => 110,  117 => 109,  112 => 107,  106 => 104,  99 => 102,  95 => 101,  91 => 100,  87 => 98,  79 => 93,  73 => 91,  67 => 89,  65 => 88,  60 => 85,  55 => 82,  50 => 80,  48 => 76,  47 => 75,  46 => 74,  45 => 73,  44 => 72,  43 => 70,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}
{{ attach_library('classy/node') }}

<article{{ attributes.addClass(classes) }}>

  {# If there is a video embed field, it is displayed instead of the image. #}
  <div class=\"uk-grid\">
    <div class=\"uk-width-large-2-3  uk-margin-bottom\">
      <div class=\"uk-responsive-width\">
        {% if content.field_video_embed %}
          {{ content.field_video_embed }}
        {% else %}
          {{ content.field_image }}
        {% endif %}
        {{ content.field_image_description }}
      </div>
    </div>
    
    {# Node information is displayed beside the image on large screens. #}
    <div class=\"uk-grid uk-width-large-1-3 uk-margin-bottom\">
      <div class=\"uk-width-1-1\">
        {{ title_prefix }}
        <h1{{ title_attributes.addClass('node__title') }}>
          <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h1>
        {{ title_suffix }}
      </div>
      <div class=\"uk-width-1-1\">
        {{ content.field_tags }}
      </div>
    {% if display_submitted %}
      <div class=\"uk-width-1-1 node__meta\">
        <span class=\"uk-icon-clock-o\"></span>
        <span> {{ node.createdtime | date(\"d-m-Y\") }} &nbsp </span>
        <span class=\"uk-icon-user\"> {{ author_name }} </span>
      </div>
    {% endif %}

      {# This only applies to Share Buttons by AddToAny contributed module. #}
      <div class=\"uk-width-1-1\">
        {{ content.addtoany }}
      </div>

  </div>

  {# Main content is displayed as usual. #}
  <div{{ content_attributes.addClass('node__content', 'uk-width-1-1', 'uk-margin-bottom')}}>
    {{ content.body }}
  </div>

  <hr class=\"uk-grid-divider\">

  <div{{ content_attributes.addClass('node__content', 'uk-width-1-1', 'uk-margin-bottom')}}>
    {{ content.comment }}
    {{ content.links }}
  </div>

</article>
";
    }
}
