<?php

/* themes/easy_news/templates/includes/footer.html.twig */
class __TwigTemplate_1ae57913e16f12b26bfa3d8fcc39fd6936313d910dabdde3d4186d46f1447d01 extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 2
            echo "  <div class=\"easy-news-footer uk-container uk-text-center uk-responsive-width\">
    ";
            // line 3
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 6
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array())) {
            // line 7
            echo "  <div class=\"easy-news-secondary-menu uk-container uk-responsive-width\" role=\"navigation\">
    ";
            // line 8
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 11
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "credits", array())) {
            // line 12
            echo "  <div class=\"easy-news-credits uk-container uk-responsive-width uk-text-center\" role=\"contentinfo\">
    ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "credits", array()), "html", null, true));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/easy_news/templates/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  67 => 12,  65 => 11,  59 => 8,  56 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if page.footer %}
  <div class=\"easy-news-footer uk-container uk-text-center uk-responsive-width\">
    {{ page.footer }}
  </div>
{% endif %}
{% if page.secondary_menu %}
  <div class=\"easy-news-secondary-menu uk-container uk-responsive-width\" role=\"navigation\">
    {{ page.secondary_menu }}
  </div>
{% endif %}
{% if page.credits %}
  <div class=\"easy-news-credits uk-container uk-responsive-width uk-text-center\" role=\"contentinfo\">
    {{ page.credits }}
  </div>
{% endif %}
";
    }
}
