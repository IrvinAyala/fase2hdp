<?php

/* themes/easy_news/templates/field/field--comment.html.twig */
class __TwigTemplate_d7dbccf84208cddd675980f97818918b77e68e6b26b4ac89af14e3b6fc37b2be extends Twig_Template
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
        $tags = array("if" => 32);
        $filters = array("t" => 41);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 29
        echo "<section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  <div class=\"uk-grid uk-grid-divider\">
    <div class=\"uk-width-medium-2-3\">
    ";
        // line 32
        if (((isset($context["comments"]) ? $context["comments"] : null) &&  !(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 33
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
      <h2";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
      ";
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
      ";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true));
            echo "
    ";
        }
        // line 38
        echo "    </div>
    <div class=\"uk-width-medium-1-3\">
    ";
        // line 40
        if ((isset($context["comment_form"]) ? $context["comment_form"] : null)) {
            // line 41
            echo "      <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Add new comment")));
            echo "</h2>
      ";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["comment_form"]) ? $context["comment_form"] : null), "html", null, true));
            echo "
    ";
        }
        // line 44
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/easy_news/templates/field/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 44,  85 => 42,  78 => 41,  76 => 40,  72 => 38,  67 => 36,  63 => 35,  57 => 34,  52 => 33,  50 => 32,  43 => 29,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme override for comment fields.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional title output populated by modules, intended to
 *   be displayed after the main title tag that appears in the template.
 * - comments: List of comments rendered through comment.html.twig.
 * - content_attributes: HTML attributes for the form title.
 * - comment_form: The 'Add new comment' form.
 * - comment_display_mode: Is the comments are threaded.
 * - comment_type: The comment type bundle ID for the comment field.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 * @see comment_preprocess_field()
 */
#}
<section{{ attributes }}>
  <div class=\"uk-grid uk-grid-divider\">
    <div class=\"uk-width-medium-2-3\">
    {% if comments and not label_hidden %}
      {{ title_prefix }}
      <h2{{ title_attributes }}>{{ label }}</h2>
      {{ title_suffix }}
      {{ comments }}
    {% endif %}
    </div>
    <div class=\"uk-width-medium-1-3\">
    {% if comment_form %}
      <h2{{ content_attributes }}>{{ 'Add new comment'|t }}</h2>
      {{ comment_form }}
    {% endif %}
    </div>
  </div>
</section>
";
    }
}
